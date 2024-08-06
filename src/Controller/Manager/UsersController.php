<?php
declare(strict_types=1);

namespace App\Controller\Manager;

use App\Controller\AppController;

/**
 * Users Controller
 *
 * @property \App\Model\Table\UsersTable $Users
 * @method \App\Model\Entity\User[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class UsersController extends AppController
{


    public function dashboard()
    {
        $users=[];
        $this->set(compact('users'));
       
        $sadrs = $this->Users->Sadrs->find('all', array(
            'limit' => 7, 
            'contain' => array(),
            'fields' => array('Sadrs.id', 'Sadrs.user_id', 'Sadrs.created', 'Sadrs.report_title', 'Sadrs.submitted', 'Sadrs.reference_no', 'Sadrs.created', 'Sadrs.serious'),
            'order' => array('Sadrs.created' => 'desc'),
            'conditions' => array(
                // only show SADRs that have been not been deleted 
                'Sadrs.deleted' => false,
                'Sadrs.user_id' => $this->Auth->User('id')
            ),
        ));
        $this->set(compact('sadrs'));
        $aefis=[];
        $this->set(compact('aefis'));
        $pqmps=[];
        $this->set(compact('pqmps'));
        $devices=[];
        $this->set(compact('devices'));
        $medications=[];
        $this->set(compact('medications'));
        $transfusions=[];
        $this->set(compact('transfusions'));
        $notifications=[];
        $this->set(compact('notifications'));
        $padrs=[];
        $this->set(compact('padrs')); 
        $saes=[];
        $this->set(compact('saes'));
    }
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Designations', 'Counties', 'Roles'],
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
            'contain' => ['Designations', 'Counties', 'Roles', 'Aefis', 'Aggregates', 'Ce2bs', 'Comments', 'Devices', 'Feedbacks', 'Medications', 'Notifications', 'Padrs', 'Pqmps', 'Reminders', 'Reviews', 'SadrFollowups', 'Sadrs', 'Saefis', 'Saes', 'Transfusions'],
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
        $roles = $this->Users->Roles->find('list', ['limit' => 200])->all();
        $this->set(compact('user', 'designations', 'counties', 'roles'));
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
        $roles = $this->Users->Roles->find('list', ['limit' => 200])->all();
        $this->set(compact('user', 'designations', 'counties', 'roles'));
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
