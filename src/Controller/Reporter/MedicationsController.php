<?php
declare(strict_types=1);

namespace App\Controller\Reporter;

use App\Controller\AppController;

/**
 * Medications Controller
 *
 * @property \App\Model\Table\MedicationsTable $Medications
 * @method \App\Model\Entity\Medication[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class MedicationsController extends AppController
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
        $medications = $this->paginate($this->Medications);

        $this->set(compact('medications'));
    }

    /**
     * View method
     *
     * @param string|null $id Medication id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $medication = $this->Medications->get($id, [
            'contain' => ['Users', 'Pqmps', 'Counties', 'Designations', 'Medications', 'AttachmentsOld', 'MedicationProducts', 'Sadrs'],
        ]);

        $this->set(compact('medication'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $medication = $this->Medications->newEmptyEntity();
        if ($this->request->is('post')) {
            $medication = $this->Medications->patchEntity($medication, $this->request->getData());
            if ($this->Medications->save($medication)) {
                $this->Flash->success(__('The medication has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The medication could not be saved. Please, try again.'));
        }
        $users = $this->Medications->Users->find('list', ['limit' => 200])->all();
        $pqmps = $this->Medications->Pqmps->find('list', ['limit' => 200])->all();
        $counties = $this->Medications->Counties->find('list', ['limit' => 200])->all();
        $designations = $this->Medications->Designations->find('list', ['limit' => 200])->all();
        $this->set(compact('medication', 'users', 'pqmps', 'counties', 'designations'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Medication id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $medication = $this->Medications->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $medication = $this->Medications->patchEntity($medication, $this->request->getData());
            if ($this->Medications->save($medication)) {
                $this->Flash->success(__('The medication has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The medication could not be saved. Please, try again.'));
        }
        $users = $this->Medications->Users->find('list', ['limit' => 200])->all();
        $pqmps = $this->Medications->Pqmps->find('list', ['limit' => 200])->all();
        $counties = $this->Medications->Counties->find('list', ['limit' => 200])->all();
        $designations = $this->Medications->Designations->find('list', ['limit' => 200])->all();
        $this->set(compact('medication', 'users', 'pqmps', 'counties', 'designations'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Medication id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $medication = $this->Medications->get($id);
        if ($this->Medications->delete($medication)) {
            $this->Flash->success(__('The medication has been deleted.'));
        } else {
            $this->Flash->error(__('The medication could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
