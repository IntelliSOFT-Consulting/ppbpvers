<?php
declare(strict_types=1);

namespace App\Controller\Reporter;

use App\Controller\AppController;

/**
 * SadrFollowups Controller
 *
 * @property \App\Model\Table\SadrFollowupsTable $SadrFollowups
 * @method \App\Model\Entity\SadrFollowup[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class SadrFollowupsController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Users', 'Counties', 'Sadrs', 'Designations'],
        ];
        $sadrFollowups = $this->paginate($this->SadrFollowups);

        $this->set(compact('sadrFollowups'));
    }

    /**
     * View method
     *
     * @param string|null $id Sadr Followup id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $sadrFollowup = $this->SadrFollowups->get($id, [
            'contain' => ['Users', 'Counties', 'Sadrs', 'Designations', 'AttachmentsOld', 'SadrListOfDrugs', 'SadrListOfMedicines'],
        ]);

        $this->set(compact('sadrFollowup'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $sadrFollowup = $this->SadrFollowups->newEmptyEntity();
        if ($this->request->is('post')) {
            $sadrFollowup = $this->SadrFollowups->patchEntity($sadrFollowup, $this->request->getData());
            if ($this->SadrFollowups->save($sadrFollowup)) {
                $this->Flash->success(__('The sadr followup has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The sadr followup could not be saved. Please, try again.'));
        }
        $users = $this->SadrFollowups->Users->find('list', ['limit' => 200])->all();
        $counties = $this->SadrFollowups->Counties->find('list', ['limit' => 200])->all();
        $sadrs = $this->SadrFollowups->Sadrs->find('list', ['limit' => 200])->all();
        $designations = $this->SadrFollowups->Designations->find('list', ['limit' => 200])->all();
        $this->set(compact('sadrFollowup', 'users', 'counties', 'sadrs', 'designations'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Sadr Followup id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $sadrFollowup = $this->SadrFollowups->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $sadrFollowup = $this->SadrFollowups->patchEntity($sadrFollowup, $this->request->getData());
            if ($this->SadrFollowups->save($sadrFollowup)) {
                $this->Flash->success(__('The sadr followup has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The sadr followup could not be saved. Please, try again.'));
        }
        $users = $this->SadrFollowups->Users->find('list', ['limit' => 200])->all();
        $counties = $this->SadrFollowups->Counties->find('list', ['limit' => 200])->all();
        $sadrs = $this->SadrFollowups->Sadrs->find('list', ['limit' => 200])->all();
        $designations = $this->SadrFollowups->Designations->find('list', ['limit' => 200])->all();
        $this->set(compact('sadrFollowup', 'users', 'counties', 'sadrs', 'designations'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Sadr Followup id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $sadrFollowup = $this->SadrFollowups->get($id);
        if ($this->SadrFollowups->delete($sadrFollowup)) {
            $this->Flash->success(__('The sadr followup has been deleted.'));
        } else {
            $this->Flash->error(__('The sadr followup could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
