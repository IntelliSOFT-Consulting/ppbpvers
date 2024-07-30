<?php
declare(strict_types=1);

namespace App\Controller\Manager;

use App\Controller\AppController;

/**
 * Pqmps Controller
 *
 * @property \App\Model\Table\PqmpsTable $Pqmps
 * @method \App\Model\Entity\Pqmp[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class PqmpsController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Users', 'Counties', 'SubCounties', 'Countries', 'Designations'],
        ];
        $pqmps = $this->paginate($this->Pqmps);

        $this->set(compact('pqmps'));
    }

    /**
     * View method
     *
     * @param string|null $id Pqmp id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $pqmp = $this->Pqmps->get($id, [
            'contain' => ['Users', 'Counties', 'SubCounties', 'Countries', 'Designations', 'Pqmps', 'Aefis', 'AttachmentsOld', 'Devices', 'Medications', 'Sadrs', 'Transfusions'],
        ]);

        $this->set(compact('pqmp'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $pqmp = $this->Pqmps->newEmptyEntity();
        if ($this->request->is('post')) {
            $pqmp = $this->Pqmps->patchEntity($pqmp, $this->request->getData());
            if ($this->Pqmps->save($pqmp)) {
                $this->Flash->success(__('The pqmp has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The pqmp could not be saved. Please, try again.'));
        }
        $users = $this->Pqmps->Users->find('list', ['limit' => 200])->all();
        $counties = $this->Pqmps->Counties->find('list', ['limit' => 200])->all();
        $subCounties = $this->Pqmps->SubCounties->find('list', ['limit' => 200])->all();
        $countries = $this->Pqmps->Countries->find('list', ['limit' => 200])->all();
        $designations = $this->Pqmps->Designations->find('list', ['limit' => 200])->all();
        $this->set(compact('pqmp', 'users', 'counties', 'subCounties', 'countries', 'designations'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Pqmp id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $pqmp = $this->Pqmps->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $pqmp = $this->Pqmps->patchEntity($pqmp, $this->request->getData());
            if ($this->Pqmps->save($pqmp)) {
                $this->Flash->success(__('The pqmp has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The pqmp could not be saved. Please, try again.'));
        }
        $users = $this->Pqmps->Users->find('list', ['limit' => 200])->all();
        $counties = $this->Pqmps->Counties->find('list', ['limit' => 200])->all();
        $subCounties = $this->Pqmps->SubCounties->find('list', ['limit' => 200])->all();
        $countries = $this->Pqmps->Countries->find('list', ['limit' => 200])->all();
        $designations = $this->Pqmps->Designations->find('list', ['limit' => 200])->all();
        $this->set(compact('pqmp', 'users', 'counties', 'subCounties', 'countries', 'designations'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Pqmp id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $pqmp = $this->Pqmps->get($id);
        if ($this->Pqmps->delete($pqmp)) {
            $this->Flash->success(__('The pqmp has been deleted.'));
        } else {
            $this->Flash->error(__('The pqmp could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
