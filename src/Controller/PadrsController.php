<?php

declare(strict_types=1);

namespace App\Controller;

use Cake\Event\EventInterface;
use Cake\I18n\FrozenTime;
use Cake\Routing\Router;
use Cake\Utility\Security;
use Cake\Utility\Text;
use Cake\View\Helper\HtmlHelper;

/**
 * Padrs Controller
 *
 * @property \App\Model\Table\PadrsTable $Padrs
 * @method \App\Model\Entity\Padr[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class PadrsController extends AppController
{


    public function initialize(): void
    {
        parent::initialize();
        $this->loadComponent('Paginator');
        $this->Auth->allow('add');
    }
    public function beforeFilter(EventInterface $event): void
    {
        parent::beforeFilter($event);
        $this->Auth->allow([
            'add',
            'view'
        ]);
    }
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Users', 'Counties', 'SubCounties', 'Designations'],
        ];
        $padrs = $this->paginate($this->Padrs);

        $this->set(compact('padrs'));
    }

    /**
     * View method
     *
     * @param string|null $id Padr id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $padr = $this->Padrs->find('all', [
            'contain' => ['Users', 'Counties', 'SubCounties', 'Designations', 'Padrs', 'PadrListOfMedicines'],
            'conditions' => ['Padrs.token' => $id] // Replace 'other_column' with the actual column name
        ])->firstOrFail();
        // 
        //  debug($padr);
                // exit;
        $this->set(compact('padr'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $padr = $this->Padrs->newEmptyEntity();
        if ($this->request->is('post')) {


            $padr = $this->Padrs->patchEntity($padr, $this->request->getData(), [
                'associated' => ['PadrListOfMedicines', 'Attachments']
            ]);
            if ($this->Padrs->save($padr)) {


                $startDate = new FrozenTime(date("Y-01-01 00:00:00"));
                $endDate = new FrozenTime(date("Y-m-d H:i:s"));

                $count = $this->Padrs->find()
                    ->where([
                        'Padrs.submitted_date BETWEEN :start AND :end'
                    ])
                    ->bind(':start', $startDate->format('Y-m-d H:i:s'), 'datetime')
                    ->bind(':end', $endDate->format('Y-m-d H:i:s'), 'datetime')
                    ->count();

                $count++;
                $count = ($count < 10) ? "0$count" : $count;

                $token = Security::hash(strval($padr['id']));
                $dataTable = $this->getTableLocator()->get('padrs');
                // Update the field using the query builder
                $result = $dataTable->query()
                    ->update()
                    ->set([
                        'token' => $token,
                        'submitted_date' => date("Y-m-d H:i:s"),
                        'reference_no' => 'PADR/' . date('Y') . '/' . $count
                    ])
                    ->where(['id' => $padr['id']])
                    ->execute();


                //******************       Send Emails to Reporter and Managers          *****************************


                $html = new HtmlHelper(new \Cake\View\View());

                $message = $this->Messages->find()
                    ->where(['name' => 'reporter_padr_submit'])
                    ->first();
                $padr = $this->Padrs->get($padr['id'], [
                    'contain' => [],
                ]);
                // debug($padr);
                // exit;
                $referenceLink = Router::url([
                    'controller' => 'padrs',
                    'action' => 'view',
                    $padr['token']
                ], true);
                $variables = array(
                    'name' => $padr['reporter_name'],
                    'reference_no' => $padr['reference_no'],
                    'reference_link' => $html->link(
                        $padr['reference_no'],
                        $referenceLink,
                        // array('controller' => 'padrs', 'action' => 'view', $padr['token'], 'full_base' => true),
                        array('escape' => false)
                    ),
                    'modified' => $padr['modified']
                );
                $datum = array(
                    'email' => $padr['reporter_email'],
                    'id' => $padr->id,
                    'type' => 'reporter_padr_submit',
                    'model' => 'Padr',
                    'subject' => Text::insert($message['subject'], $variables),
                    'message' => Text::insert($message['content'], $variables)
                );

                $this->QueuedJobs->createJob('GenericEmail', $datum);
                //Notify managers
                $users = $this->Padrs->Users->find('all', [
                    'contain' => [],
                    'conditions' => [
                        'Users.role_id' => 2,
                        'Users.is_active' => '1'
                    ]
                ]);

                $referenceLink = Router::url([
                    'controller' => 'padrs',
                    'action' => 'view',
                    $padr['token'],
                    // 'prefix' => 'manager'
                ], true);
                foreach ($users as $user) {

                    $variables = array(
                        'name' => $user['name'],
                        'reference_no' => $padr['reference_no'],
                        'reference_link' => $html->link(
                            $padr['reference_no'],
                            $referenceLink,
                            array('escape' => false)
                        ),
                        'modified' => $padr['modified']
                    );
                    $datum = array(
                        'email' => $user['email'],
                        'id' => $padr->id,
                        'user_id' => $user['id'],
                        'type' => 'reporter_padr_submit',
                        'model' => 'Padr',
                        'subject' => Text::insert($message['subject'], $variables),
                        'message' => Text::insert($message['content'], $variables)
                    );

                    $this->QueuedJobs->createJob('GenericEmail', $datum);
                    $this->QueuedJobs->createJob('GenericNotification', $datum);
                }
                //**********************************    END   *********************************


                $this->Flash->success(__('The padr has been saved.'));

                return $this->redirect(['action' => 'view', $token]);
            }
            $this->Flash->error(__('The padr could not be saved. Please, try again.'));
        }
        $users = $this->Padrs->Users->find('list', ['limit' => 200])->all();
        $counties = $this->Padrs->Counties->find('list', ['limit' => 200])->all();
        $designations = $this->Padrs->Designations->find('list', ['limit' => 200])->all();
        $this->set(compact('padr', 'users', 'counties', 'designations'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Padr id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $padr = $this->Padrs->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $padr = $this->Padrs->patchEntity($padr, $this->request->getData());
            if ($this->Padrs->save($padr)) {
                $this->Flash->success(__('The padr has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The padr could not be saved. Please, try again.'));
        }
        $users = $this->Padrs->Users->find('list', ['limit' => 200])->all();
        $counties = $this->Padrs->Counties->find('list', ['limit' => 200])->all();
        $subCounties = $this->Padrs->SubCounties->find('list', ['limit' => 200])->all();
        $designations = $this->Padrs->Designations->find('list', ['limit' => 200])->all();
        $this->set(compact('padr', 'users', 'counties', 'subCounties', 'designations'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Padr id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $padr = $this->Padrs->get($id);
        if ($this->Padrs->delete($padr)) {
            $this->Flash->success(__('The padr has been deleted.'));
        } else {
            $this->Flash->error(__('The padr could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
