<?php
declare(strict_types=1);

namespace App\Controller\Manager;

use App\Controller\AppController;

/**
 * Transfusions Controller
 *
 * @property \App\Model\Table\TransfusionsTable $Transfusions
 * @method \App\Model\Entity\Transfusion[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class TransfusionsController extends AppController
{

    public $page_options = array('5' => '5', '10' => '10', '25' => '25', '50' => '50', '100' => '100');
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        
        $criteria = array(); 

        // $criteria['Aefis.user_id'] = $this->Auth->user('id');
        $this->paginate = [
            'contain' => ['Users', 'Pqmps', 'Counties', 'Designations'],
            'conditions' => $criteria
        ];
        $transfusions = $this->paginate($this->Transfusions);

        $this->set('page_options', $this->page_options);
        $this->set(compact('transfusions'));

        $counties = $this->Transfusions->Counties->find('list', array('order' => array('Counties.county_name' => 'ASC')));
        $this->set(compact('counties'));
        $designations = $this->Transfusions->Designations->find('list', array('order' => array('Designations.name' => 'ASC')));
        $this->set(compact('designations'));
    }

    /**
     * View method
     *
     * @param string|null $id Transfusion id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $transfusion = $this->Transfusions->get($id, [
            'contain' => ['Users', 'Pqmps', 'Counties', 'Designations', 'Transfusions', 'AttachmentsOld', 'Pints'],
        ]);

        $this->set(compact('transfusion'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $transfusion = $this->Transfusions->newEmptyEntity();
        if ($this->request->is('post')) {
            $transfusion = $this->Transfusions->patchEntity($transfusion, $this->request->getData());
            if ($this->Transfusions->save($transfusion)) {
                $this->Flash->success(__('The transfusion has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The transfusion could not be saved. Please, try again.'));
        }
        $users = $this->Transfusions->Users->find('list', ['limit' => 200])->all();
        $pqmps = $this->Transfusions->Pqmps->find('list', ['limit' => 200])->all();
        $counties = $this->Transfusions->Counties->find('list', ['limit' => 200])->all();
        $designations = $this->Transfusions->Designations->find('list', ['limit' => 200])->all();
        $this->set(compact('transfusion', 'users', 'pqmps', 'counties', 'designations'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Transfusion id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $transfusion = $this->Transfusions->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $transfusion = $this->Transfusions->patchEntity($transfusion, $this->request->getData());
            if ($this->Transfusions->save($transfusion)) {
                $this->Flash->success(__('The transfusion has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The transfusion could not be saved. Please, try again.'));
        }
        $users = $this->Transfusions->Users->find('list', ['limit' => 200])->all();
        $pqmps = $this->Transfusions->Pqmps->find('list', ['limit' => 200])->all();
        $counties = $this->Transfusions->Counties->find('list', ['limit' => 200])->all();
        $designations = $this->Transfusions->Designations->find('list', ['limit' => 200])->all();
        $this->set(compact('transfusion', 'users', 'pqmps', 'counties', 'designations'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Transfusion id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $transfusion = $this->Transfusions->get($id);
        if ($this->Transfusions->delete($transfusion)) {
            $this->Flash->success(__('The transfusion has been deleted.'));
        } else {
            $this->Flash->error(__('The transfusion could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
