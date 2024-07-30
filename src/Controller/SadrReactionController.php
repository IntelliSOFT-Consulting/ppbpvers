<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * SadrReaction Controller
 *
 * @property \App\Model\Table\SadrReactionTable $SadrReaction
 * @method \App\Model\Entity\SadrReaction[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class SadrReactionController extends AppController
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
        $sadrReaction = $this->paginate($this->SadrReaction);

        $this->set(compact('sadrReaction'));
    }

    /**
     * View method
     *
     * @param string|null $id Sadr Reaction id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $sadrReaction = $this->SadrReaction->get($id, [
            'contain' => ['Sadrs'],
        ]);

        $this->set(compact('sadrReaction'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $sadrReaction = $this->SadrReaction->newEmptyEntity();
        if ($this->request->is('post')) {
            $sadrReaction = $this->SadrReaction->patchEntity($sadrReaction, $this->request->getData());
            if ($this->SadrReaction->save($sadrReaction)) {
                $this->Flash->success(__('The sadr reaction has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The sadr reaction could not be saved. Please, try again.'));
        }
        $sadrs = $this->SadrReaction->Sadrs->find('list', ['limit' => 200])->all();
        $this->set(compact('sadrReaction', 'sadrs'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Sadr Reaction id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $sadrReaction = $this->SadrReaction->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $sadrReaction = $this->SadrReaction->patchEntity($sadrReaction, $this->request->getData());
            if ($this->SadrReaction->save($sadrReaction)) {
                $this->Flash->success(__('The sadr reaction has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The sadr reaction could not be saved. Please, try again.'));
        }
        $sadrs = $this->SadrReaction->Sadrs->find('list', ['limit' => 200])->all();
        $this->set(compact('sadrReaction', 'sadrs'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Sadr Reaction id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $sadrReaction = $this->SadrReaction->get($id);
        if ($this->SadrReaction->delete($sadrReaction)) {
            $this->Flash->success(__('The sadr reaction has been deleted.'));
        } else {
            $this->Flash->error(__('The sadr reaction could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
