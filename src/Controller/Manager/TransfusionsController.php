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
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Users', 'Pqmps', 'Counties', 'Designations'],
        ];
        $transfusions = $this->paginate($this->Transfusions);

        $this->set(compact('transfusions'));
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
