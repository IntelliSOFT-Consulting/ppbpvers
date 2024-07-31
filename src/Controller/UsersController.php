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

    //Login with username or password
    public function login()
    {
        if ($this->Auth->user()) {
            return $this->redirect($this->Auth->redirectUrl());
        }

        if ($this->request->is('post')) {

            $username = $this->request->getData('username');
            if (Validation::email($this->request->getData('username'))) {
                $this->Auth->config('authenticate', [
                    'Form' => [
                        'fields' => ['username' => 'email']
                    ]
                ]);
                $this->Auth->constructAuthenticate();
                $request = $this->request->withData('email', $username)
                    ->withoutData('username');
            }

            $user = $this->Auth->identify();

            if ($user) {
                $this->Auth->setUser($user);

                $this->log($user['email'] . ' logged in at ' . date('d-m-Y H:i:s'), 'info', 'dblog');

                $date = new \DateTime(Configure::read('password_expire_timeout'));
                if ($user['is_active'] == 0) {
                    $this->Flash->error('Your account is not activated! If you have just registered, please click the activation link sent to your email. Remember to check you spam folder too!');
                    $this->redirect($this->Auth->logout());
                } elseif ($user['deactivated'] == 1) {
                    $this->Flash->error('Your account has been deactivated! Please contact MCAZ.');
                    $this->redirect($this->Auth->logout());
                } elseif ($user['last_password'] <= $date->modify('-2 days')) {
                    $this->Flash->error('Your password has expired. Click on forgot password to create new password.');
                    $this->redirect($this->Auth->logout());
                }

                if (strlen($this->Auth->redirectUrl()) > 12) {
                    return $this->redirect($this->Auth->redirectUrl());
                } else {
                    if ($user['role_id'] == 1) {
                        return $this->redirect(['controller' => 'Users', 'action' => 'dashboard', 'prefix' => 'admin', 'plugin' => false]);
                    } elseif ($user['role_id'] == 2) {
                        return $this->redirect(['controller' => 'Users', 'action' => 'dashboard', 'prefix' => 'manager', 'plugin' => false]);
                    } elseif ($user['role_id'] == 3) {
                        return $this->redirect(['controller' => 'Users', 'action' => 'dashboard', 'prefix' => 'reporter', 'plugin' => false]);
                    } elseif ($user['role_id'] == 4) {
                        return $this->redirect(['controller' => 'Users', 'action' => 'dashboard', 'prefix' => 'evaluator', 'plugin' => false]);
                    } elseif ($user['role_id'] == 5) {
                        return $this->redirect(['controller' => 'Users', 'action' => 'dashboard', 'prefix' => 'institution', 'plugin' => false]);
                    }
                }
                return $this->redirect($this->Auth->redirectUrl());
            }

            $this->Flash->error(__('Invalid username or password, try again'));
        }
    }

    public function logout()
    {
        //Leave empty for now.
        $this->Flash->success(__('Good-Bye'));
        $this->log($this->Auth->user('username') . ' logged out at ' . date('d-m-Y H:i:s'), 'info', 'dblog');
        $this->redirect($this->Auth->logout());
    }

    public function register()
    {
        // $this->Users->addBehavior('Captcha.Captcha');
        if ($this->Auth->user()) {
            return $this->redirect($this->Auth->redirectUrl());
        }

        $user = $this->Users->newEmptyEntity();
        if ($this->request->is('post')) {
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

            // $aro = $this->Acl->Aro->newEmptyEntity();
            // $aro->parent_id = null; // or the ID of the parent node if any
            // $aro->model = 'Role';
            // $aro->foreign_key = 3; // Replace with the actual role ID
            // $aro->alias = 'Users'; // Replace with the actual role name

            // if ($this->Acl->Aro->save($aro)) {
            //     $this->Flash->success(__('The ARO has been saved.'));
            // } else {
            //     $this->Flash->error(__('The ARO could not be saved. Please, try again.'));
            // }


            $user->role_id = 3;

            if ($this->Users->save($user)) {
                $this->Flash->success(__('The user has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The user could not be saved. Please, try again.'));


            // if ($this->Users->save($user)) {
            //     $this->Flash->success(__('Registration successful.'));

            //     $user->activation_key = $this->Util->generateXOR($user->id);
            //     $query = $this->Users->query();
            //     $query->update()
            //         ->set(['activation_key' => $this->Util->generateXOR($user->id), 'last_password' => date('Y-m-d H:i:s')])
            //         ->where(['id' => $user->id])
            //         ->execute();

            //     //Send registration confirm email
            //     $this->loadModel('Queue.QueuedJobs');
            //     $data = [
            //         'email_address' => $user->email, 'user_id' => $user->id, 'type' => 'registration_email', 'model' => 'Users',
            //         'foreign_key' => $user->id, 'vars' =>  $user->toArray()
            //     ];
            //     $html = new HtmlHelper(new \Cake\View\View());
            //     $data['vars']['name'] = (isset($user->name)) ? $user->name : 'Sir/Madam';
            //     $data['vars']['pv_site'] = $html->link('PvERS PV website', ['controller' => 'Pages', 'action' => 'home', '_full' => true, 'prefix' => false]);
            //     $data['vars']['activation_link'] = $html->link('ACTIVATE', [
            //         'controller' => 'Users', 'action' => 'activate', $user->activation_key,
            //         '_full' => true, 'prefix' => false
            //     ]);
            //     $this->QueuedJobs->createJob('GenericEmail', $data);
            //     //Send registration notification
            //     $data['type'] = 'registration_notification';
            //     $this->QueuedJobs->createJob('GenericNotification', $data);
            //     //
            //     //Send email and notification to institution
            //     if (!empty($user->name_of_institution)) {
            //         $institution = $this->Users->find('all', ['conditions' => ['role_id' => 5, 'lower(Users.name_of_institution) LIKE' => strtolower($user->name_of_institution)]])->first();
            //         if (!empty($institution->email)) {
            //             $data = [
            //                 'email_address' => $institution->email, 'user_id' => $institution->id, 'type' => 'registration_institution_email', 'model' => 'Users',
            //                 'foreign_key' => $institution->id, 'vars' =>  $institution->toArray()
            //             ];
            //             $data['vars']['name'] = (isset($institution->name)) ? $institution->name : 'Sir/Madam';
            //             $this->QueuedJobs->createJob('GenericEmail', $data);
            //             //Send registration notification
            //             $data['type'] = 'registration_institution_notification';
            //             $this->QueuedJobs->createJob('GenericNotification', $data);
            //         }
            //     }


            //     $this->Flash->success(__('You have successfully registered. Please click on the link sent to your email address to
            //         activate your account. Check your spam folder if you
            //         don\'t see it in your inbox.'));


            //     if ($this->request->is('json')) {
            //         $this->set([
            //             'message' => 'Registration successfull. Click on link sent on email to complete registration',
            //             '_serialize' => ['message']
            //         ]);
            //         return;
            //     }

            //     return $this->redirect(['controller' => 'Users', 'action' => 'login']);
            // } else {
            //     $errorMessages = [];
            //     foreach ($user->getErrors() as $field => $errors) {
            //         foreach ($errors as $error) {
            //             $errorMessages[] = ucfirst($field) . ': ' . $error;
            //         }
            //     }
            //     $errorString = implode(', ', $errorMessages);

            //     $this->Flash->error(__('The user could not be registered. Please, try again.' . $errorString));
            // }
        }
        $designations = $this->Users->Designations->find('list', ['limit' => 200, 'order' => ['name' => 'ASC']])->all();
        $counties = $this->Users->Counties->find('list', array('order' => 'Counties.county_name ASC'))->all();
        // dd($designations);
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
            $user->save();

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
