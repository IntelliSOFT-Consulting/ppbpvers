<?php
declare(strict_types=1);

namespace App\Controller\Admin;

use App\Controller\AppController;

/**
 * AefiDescriptions Controller
 *
 * @property \App\Model\Table\AefiDescriptionsTable $AefiDescriptions
 * @method \App\Model\Entity\AefiDescription[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class AefiDescriptionsController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Aefis'],
        ];
        $aefiDescriptions = $this->paginate($this->AefiDescriptions);

        $this->set(compact('aefiDescriptions'));
    }

    /**
     * View method
     *
     * @param string|null $id Aefi Description id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $aefiDescription = $this->AefiDescriptions->get($id, [
            'contain' => ['Aefis'],
        ]);

        $this->set(compact('aefiDescription'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $aefiDescription = $this->AefiDescriptions->newEmptyEntity();
        if ($this->request->is('post')) {
            $aefiDescription = $this->AefiDescriptions->patchEntity($aefiDescription, $this->request->getData());
            if ($this->AefiDescriptions->save($aefiDescription)) {
                $this->Flash->success(__('The aefi description has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The aefi description could not be saved. Please, try again.'));
        }
        $aefis = $this->AefiDescriptions->Aefis->find('list', ['limit' => 200])->all();
        $this->set(compact('aefiDescription', 'aefis'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Aefi Description id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $aefiDescription = $this->AefiDescriptions->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $aefiDescription = $this->AefiDescriptions->patchEntity($aefiDescription, $this->request->getData());
            if ($this->AefiDescriptions->save($aefiDescription)) {
                $this->Flash->success(__('The aefi description has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The aefi description could not be saved. Please, try again.'));
        }
        $aefis = $this->AefiDescriptions->Aefis->find('list', ['limit' => 200])->all();
        $this->set(compact('aefiDescription', 'aefis'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Aefi Description id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $aefiDescription = $this->AefiDescriptions->get($id);
        if ($this->AefiDescriptions->delete($aefiDescription)) {
            $this->Flash->success(__('The aefi description has been deleted.'));
        } else {
            $this->Flash->error(__('The aefi description could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
