<?php

declare(strict_types=1);

namespace App\Controller;


use Cake\Validation\Validation;
use Cake\Event\EventInterface;
use Cake\Log\Log;
use Cake\Auth\DefaultPasswordHasher;
use Cake\View\Helper\HtmlHelper;
use Cake\Core\Configure;
use Cake\Filesystem\File;
use Cake\I18n\Time;
use Cake\Utility\Hash;
use Cake\Utility\Text;

/**
 * Users Controller
 *
 * @property \App\Model\Table\UsersTable $Users
 * @method \App\Model\Entity\User[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class UsersController extends AppController
{


    public $paginate = [
        // 'limit' => 2,
        'Sadrs' => ['scope' => 'sadr'],
        'Adrs' => ['scope' => 'adr'],
        'Aefis' => ['scope' => 'aefi'],
        'Saefis' => ['scope' => 'saefi'],
        'Ce2bs' => ['scope' => 'ce2b'],
        'Notifications' => ['scope' => 'notification'],
    ];



    public function initialize(): void
    {
        parent::initialize();
        $this->loadComponent('Paginator');
        $this->Auth->allow('logout', 'activate');
    }

    public function beforeFilter(EventInterface $event): void
    {
        parent::beforeFilter($event);
        $this->Auth->allow([
            'register', 'login', 'logout', 'activate',
            'forgotPassword', 'resetPassword', 'view'
        ]);
    }

    public function dashboard()
    {
        if ($this->request->getSession()->read('Auth.User.role_id') == 1) {
            return $this->redirect(['controller' => 'Users', 'action' => 'dashboard', 'prefix' => 'admin', 'plugin' => false]);
        } elseif ($this->request->getSession()->read('Auth.User.role_id') == 2) {
            return $this->redirect(['controller' => 'Users', 'action' => 'dashboard', 'prefix' => 'evaluator', 'plugin' => false]);
        } elseif ($this->request->getSession()->read('Auth.User.role_id') == 3) {
            return $this->redirect(['controller' => 'Users', 'action' => 'home', 'prefix' => false, 'plugin' => false]);
        } elseif ($this->request->getSession()->read('Auth.User.role_id') == 5) {
            return $this->redirect(['controller' => 'Users', 'action' => 'dashboard', 'prefix' => 'institution', 'plugin' => false]);
        }

        // Added for the Technical User
        elseif ($this->request->getSession()->read('Auth.User.role_id') == 6) {
            return $this->redirect(['controller' => 'Users', 'action' => 'dashboard', 'prefix' => 'technical', 'plugin' => false]);
        }
    }

    public function guest()
    {
    }
    public function login()
    {
        if ($this->request->is('post')) {
            // Get the data directly without the extra 'data' object
            $data = $this->request->getData(); 

            // Check if username is an email
            if (Validation::email($data['username'])) {

                $this->Auth->setConfig('authenticate', [
                    'Form' => ['fields' => ['username' => 'email']]
                ]);
                $this->Auth->constructAuthenticate();
                $data['email'] = $data['username'];
                unset($data['username']);
                $this->request = $this->request->withData('User.email', $data['email']);
            }
            // Attempt to identify the user
            $user = $this->Auth->identify();
            // dd($data);
            // dd($user);
            if ($user) {
                $this->Auth->setUser($user);

                // User is authenticated, handle redirect based on user group
                switch ($user['role_id']) {
                    case '1':
                        return $this->redirect(['controller' => 'Users', 'action' => 'dashboard', 'prefix' => 'Admin']);
                    case '2':
                        return $this->redirect(['controller' => 'Users', 'action' => 'dashboard', 'prefix' => 'Manager']);
                    case '3':
                        return $this->redirect(['controller' => 'Users', 'action' => 'dashboard', 'prefix' => 'Reporter']);
                    case '4':
                        return $this->redirect(['controller' => 'Users', 'action' => 'dashboard', 'prefix' => 'Partner']);
                    case '5':
                        return $this->redirect(['controller' => 'Users', 'action' => 'dashboard', 'prefix' => 'Reviewer']);
                    default:
                        $this->Flash->error('Invalid user group.');
                        return $this->redirect($this->Auth->logout());
                }
            } else {
                // Invalid credentials
                $this->Flash->error('Your username or password is incorrect.');
            }
        }
    }
    //Login with username or password
    public function login_old()
    {

        if ($this->request->getSession()->read('Auth.User')) {
            $this->Session->setFlash('You are logged in!', 'alerts/flash_success');
            // $this->redirect('/', false);
        }

        if ($this->request->is('post')) {

            $data = $this->request->getData();
            $data = $data['data'];


            if (Validation::email($data['User']['username'])) {
                $this->Auth->setConfig('authenticate', [
                    'Form' => ['fields' => ['username' => 'email']]
                ]);
                $this->Auth->constructAuthenticate();
                $data['User']['email'] = $data['User']['username'];
                unset($data['User']['username']);
                $this->request = $this->request->withData('email', $data['User']['email']);
            }

            // Before calling $this->Auth->identify();
            debug($this->request->getData());
            debug($this->Auth->getConfig());

            $user = $this->Auth->identify();
            dd($user);
            if ($user) {
                $this->Auth->setUser($user);

                if ($user['is_active'] == 0) {
                    $this->Flash->error('Your account is not activated! If you have just registered, please click the activation link sent to your email. Remember to check your spam folder too!');
                    return $this->redirect($this->Authentication->logout());
                } elseif ($user['deactivated'] == 1) {
                    $this->Flash->error('Your account has been deactivated! Please contact PPB.');
                    return $this->redirect($this->Authentication->logout());
                }

                // Check if it's the mini manager::: Check active date
                if ($user['role_id'] == '5') {
                    $active_date = $user['active_date'];
                    if (!empty($active_date)) {
                        $today = date('Y-m-d');
                        $active_date_obj = date('Y-m-d', strtotime($active_date));

                        if ($active_date_obj < $today) {
                            $this->Flash->error('Your account has expired! Please contact PPB.');
                            return $this->redirect($this->Authentication->logout());
                        }
                    } else {
                        $this->Flash->error('Your account has expired! Please contact PPB.');
                        return $this->redirect($this->Authentication->logout());
                    }
                }

                switch ($user['role_id']) {
                    case '1':
                        return $this->redirect(['controller' => 'Users', 'action' => 'dashboard', 'prefix' => 'Admin']);
                    case '2':
                        return $this->redirect(['controller' => 'Users', 'action' => 'dashboard', 'prefix' => 'Manager']);
                    case '3':
                        return $this->redirect(['controller' => 'Users', 'action' => 'dashboard', 'prefix' => 'Reporter']);
                    case '4':
                        return $this->redirect(['controller' => 'Users', 'action' => 'dashboard', 'prefix' => 'Partner']);
                    case '5':
                        return $this->redirect(['controller' => 'Users', 'action' => 'dashboard', 'prefix' => 'Reviewer']);
                    default:
                        $this->Flash->error('Invalid user group.');
                        return $this->redirect($this->Authentication->logout());
                }
            } else {
                $this->Flash->error('Your username or password is incorrect.');
            }
        }
    }

    public function logout()
    {
        //Leave empty for now.
        $this->Flash->success(__('Good-Bye'));
        $this->log($this->Auth->user('username') . ' logged out at ' . date('d-m-Y H:i:s'), 'info', 'dblog');
        $this->redirect($this->Auth->logout());
    }
    public function generateXOR($object_id)
    {
        return ($object_id * 121) ^ 21541124;
    }


    public function reverseXOR($xor_id)
    {
        return ($xor_id ^ 21541124) / 121;
    }

    public function register()
    {
        // $this->Users->addBehavior('Captcha.Captcha');
        if ($this->Auth->user()) {
            return $this->redirect($this->Auth->redirectUrl());
        }

        $user = $this->Users->newEmptyEntity();
        if ($this->request->is('post')) {

            // dd($this->request->getData());
            $user = $this->Users->patchEntity($user, $this->request->getData());

            if ($user->hasErrors()) {
                $this->response->getBody('Failure');
                $this->response->getStatusCode(403);
                $this->set([
                    'errors' => $user->getErrors(),
                    'message' => 'Validation errors',
                    '_serialize' => ['errors', 'message']
                ]);
            }


            $user->role_id = 3;
            if ($this->Users->save($user)) {

                $this->Flash->success(__('You have successfully registered. Please click on the link sent to your email address to
                    activate your account. Check your spam folder if you
                    don\'t see it in your inbox.'));


                if ($this->request->is('json')) {
                    $this->set([
                        'message' => 'Registration successfull. Click on link sent on email to complete registration',
                        '_serialize' => ['message']
                    ]);
                    return;
                }

                return $this->redirect(['controller' => 'Pages', 'action' => 'home']);
            } else {
                $errorMessages = [];
                foreach ($user->getErrors() as $field => $errors) {
                    foreach ($errors as $error) {
                        $errorMessages[] = ucfirst($field) . ': ' . $error;
                    }
                }
                $errorString = implode(', ', $errorMessages);

                $this->Flash->error(__('The user could not be registered. Please, try again.' . $errorString));
            }
        }
        $designations = $this->Users->Designations->find('list', ['limit' => 200, 'order' => ['name' => 'ASC']])->all();
        $counties = $this->Users->Counties->find('list', array('order' => 'Counties.county_name ASC'))->all();
        $this->set(compact('user', 'designations', 'counties'));
        $this->set('_serialize', ['user']);
    }

    //TODO: Add forgot password functionality

    public function activate($id = null)
    {
        if ($id) {
            $user = $this->Users->findByActivationKey($id)->first();

            if ($user) {
                $query = $this->Users->query();
                $query->update()
                    ->set(['is_active' => 1])
                    ->where(['id' => $user->id])
                    ->execute();

                $this->Flash->success(__('You have successfully activated your account.'));
                $this->Auth->setUser($user);
                return $this->redirect($this->Auth->redirectUrl());
            } else {
                $this->Flash->error(__('Invalid activation token.'));
                $this->redirect('/');
            }
        } else {
            $this->Flash->error(__('Invalid activation token.'));
            $this->redirect('/');
        }
    }


    public function forgotPassword()
    {
        if ($this->Auth->user()) {
            $this->Flash->success('You are logged in!');
            $this->redirect('/', 0, false);
        }
        if ($this->request->is('post')) {
            $user = $this->Users->findByEmail($this->request->getData('email'))->first();
            if ($user) {

                $new_pass = date('sYmdHi', strtotime(Time::now()));
                $hasher = new DefaultPasswordHasher();
                $password = $hasher->hash($new_pass);
                $query = $this->Users->query();
                $query->update()
                    ->set(['forgot_password' => 1, 'last_password' => Time::now(), 'password' => $password, 'confirm_password' => $password])
                    ->where(['id' => $user->id])
                    ->execute();

                //Send registration confirm email
                $this->loadModel('Queue.QueuedJobs');
                $data = [
                    'email_address' => $user->email, 'user_id' => $user->id, 'type' => 'forgot_password_email', 'model' => 'Users',
                    'foreign_key' => $user->id, 'vars' =>  $user->toArray()
                ];
                $pass = $this->Util->generateXOR($user->id);
                $html = new HtmlHelper(new \Cake\View\View());
                $data['vars']['name'] = (isset($user->name)) ? $user->name : 'Sir/Madam';
                $data['vars']['new_password'] = $new_pass;
                $data['vars']['pv_site'] = $html->link('MCAZ PV website', ['controller' => 'Pages', 'action' => 'home', '_full' => true]);
                $data['vars']['reset_password_link'] = $html->link('Reset Password', [
                    'controller' => 'Users', 'action' => 'resetPassword', $pass,
                    '_full' => true
                ]);
                $this->QueuedJobs->createJob('GenericEmail', $data);

                $this->Flash->success(__('A new password has been sent to the requested email address.'));
                $this->redirect('/');
            } else {
                $this->Flash->error(__('Could not verify your email address.'));
            }
        }
    }


    public function resetPassword($id = null)
    {
        //confirm user id hash for authenticity
        $check = $this->Users->find('all')->where(['id' => $this->Util->reverseXOR($id), 'is_active' => 1])->first();
        if (!$check) {
            $this->Flash->error(__('Could not verify the user. Kindly contact MCAZ.'));
            $this->redirect('/');
        } else {
            if ($check->forgot_password != 1) {
                $this->Flash->error(__('The password has not been reset.'));
                $this->redirect('/');
            }
            $user = $this->Users->patchEntity($check, $this->request->getData());
            $user->password = date('smiYhd', strtotime($check->created));
            $user->confirm_password = date('smiYhd', strtotime($check->created));
            $user->forgot_password = 0;
            // $user->save();

            // create the password history

            if ($this->Users->save($user)) {
                $this->Flash->success(__('The password has been reset. You may login using your new password.'));
                return $this->redirect(['action' => 'login']);
            }
            $this->Flash->error(__('The password could not be reset. Kindly contact MCAZ.'));
            $this->redirect('/');
        }
    }
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Designations', 'Counties', 'Groups'],
        ];
        $users = $this->paginate($this->Users);

        $this->set(compact('users'));
    }

    /**
     * View method
     *
     * @param string|null $id User id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $user = $this->Users->get($id, [
            'contain' => ['Designations', 'Counties', 'Groups', 'Aefis', 'Aggregates', 'Ce2bs', 'Comments', 'Devices', 'Feedbacks', 'Medications', 'Notifications', 'Padrs', 'Pqmps', 'Reminders', 'Reviews', 'SadrFollowups', 'Sadrs', 'Saefis', 'Saes', 'Transfusions'],
        ]);

        $this->set(compact('user'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $user = $this->Users->newEmptyEntity();
        if ($this->request->is('post')) {
            $user = $this->Users->patchEntity($user, $this->request->getData());
            if ($this->Users->save($user)) {
                $this->Flash->success(__('The user has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The user could not be saved. Please, try again.'));
        }
        $designations = $this->Users->Designations->find('list', ['limit' => 200])->all();
        $counties = $this->Users->Counties->find('list', ['limit' => 200])->all();
        $groups = $this->Users->Groups->find('list', ['limit' => 200])->all();
        $this->set(compact('user', 'designations', 'counties', 'groups'));
    }

    /**
     * Edit method
     *
     * @param string|null $id User id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $user = $this->Users->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $user = $this->Users->patchEntity($user, $this->request->getData());
            if ($this->Users->save($user)) {
                $this->Flash->success(__('The user has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The user could not be saved. Please, try again.'));
        }
        $designations = $this->Users->Designations->find('list', ['limit' => 200])->all();
        $counties = $this->Users->Counties->find('list', ['limit' => 200])->all();
        $groups = $this->Users->Groups->find('list', ['limit' => 200])->all();
        $this->set(compact('user', 'designations', 'counties', 'groups'));
    }

    /**
     * Delete method
     *
     * @param string|null $id User id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $user = $this->Users->get($id);
        if ($this->Users->delete($user)) {
            $this->Flash->success(__('The user has been deleted.'));
        } else {
            $this->Flash->error(__('The user could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
