<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * SadrDescriptions Controller
 *
 * @property \App\Model\Table\SadrDescriptionsTable $SadrDescriptions
 * @method \App\Model\Entity\SadrDescription[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class SadrDescriptionsController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Sadrs'],
        ];
        $sadrDescriptions = $this->paginate($this->SadrDescriptions);

        $this->set(compact('sadrDescriptions'));
    }

    /**
     * View method
     *
     * @param string|null $id Sadr Description id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $sadrDescription = $this->SadrDescriptions->get($id, [
            'contain' => ['Sadrs'],
        ]);

        $this->set(compact('sadrDescription'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $sadrDescription = $this->SadrDescriptions->newEmptyEntity();
        if ($this->request->is('post')) {
            $sadrDescription = $this->SadrDescriptions->patchEntity($sadrDescription, $this->request->getData());
            if ($this->SadrDescriptions->save($sadrDescription)) {
                $this->Flash->success(__('The sadr description has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The sadr description could not be saved. Please, try again.'));
        }
        $sadrs = $this->SadrDescriptions->Sadrs->find('list', ['limit' => 200])->all();
        $this->set(compact('sadrDescription', 'sadrs'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Sadr Description id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $sadrDescription = $this->SadrDescriptions->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $sadrDescription = $this->SadrDescriptions->patchEntity($sadrDescription, $this->request->getData());
            if ($this->SadrDescriptions->save($sadrDescription)) {
                $this->Flash->success(__('The sadr description has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The sadr description could not be saved. Please, try again.'));
        }
        $sadrs = $this->SadrDescriptions->Sadrs->find('list', ['limit' => 200])->all();
        $this->set(compact('sadrDescription', 'sadrs'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Sadr Description id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $sadrDescription = $this->SadrDescriptions->get($id);
        if ($this->SadrDescriptions->delete($sadrDescription)) {
            $this->Flash->success(__('The sadr description has been deleted.'));
        } else {
            $this->Flash->error(__('The sadr description could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
