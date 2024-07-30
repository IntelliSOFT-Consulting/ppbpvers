<?php
declare(strict_types=1);

namespace App\Controller\Manager;

use App\Controller\AppController;

/**
 * Aefis Controller
 *
 * @property \App\Model\Table\AefisTable $Aefis
 * @method \App\Model\Entity\Aefi[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class AefisController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Users', 'Pqmps', 'Counties', 'SubCounties', 'Designations'],
        ];
        $aefis = $this->paginate($this->Aefis);

        $this->set(compact('aefis'));
    }

    /**
     * View method
     *
     * @param string|null $id Aefi id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $aefi = $this->Aefis->get($id, [
            'contain' => ['Users', 'Pqmps', 'Counties', 'SubCounties', 'Designations', 'Aefis', 'AefiDescriptions', 'AefiListOfVaccines', 'AefiReactions', 'AttachmentsOld'],
        ]);

        $this->set(compact('aefi'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $aefi = $this->Aefis->newEmptyEntity();
        if ($this->request->is('post')) {
            $aefi = $this->Aefis->patchEntity($aefi, $this->request->getData());
            if ($this->Aefis->save($aefi)) {
                $this->Flash->success(__('The aefi has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The aefi could not be saved. Please, try again.'));
        }
        $users = $this->Aefis->Users->find('list', ['limit' => 200])->all();
        $pqmps = $this->Aefis->Pqmps->find('list', ['limit' => 200])->all();
        $counties = $this->Aefis->Counties->find('list', ['limit' => 200])->all();
        $subCounties = $this->Aefis->SubCounties->find('list', ['limit' => 200])->all();
        $designations = $this->Aefis->Designations->find('list', ['limit' => 200])->all();
        $this->set(compact('aefi', 'users', 'pqmps', 'counties', 'subCounties', 'designations'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Aefi id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $aefi = $this->Aefis->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $aefi = $this->Aefis->patchEntity($aefi, $this->request->getData());
            if ($this->Aefis->save($aefi)) {
                $this->Flash->success(__('The aefi has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The aefi could not be saved. Please, try again.'));
        }
        $users = $this->Aefis->Users->find('list', ['limit' => 200])->all();
        $pqmps = $this->Aefis->Pqmps->find('list', ['limit' => 200])->all();
        $counties = $this->Aefis->Counties->find('list', ['limit' => 200])->all();
        $subCounties = $this->Aefis->SubCounties->find('list', ['limit' => 200])->all();
        $designations = $this->Aefis->Designations->find('list', ['limit' => 200])->all();
        $this->set(compact('aefi', 'users', 'pqmps', 'counties', 'subCounties', 'designations'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Aefi id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $aefi = $this->Aefis->get($id);
        if ($this->Aefis->delete($aefi)) {
            $this->Flash->success(__('The aefi has been deleted.'));
        } else {
            $this->Flash->error(__('The aefi could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
