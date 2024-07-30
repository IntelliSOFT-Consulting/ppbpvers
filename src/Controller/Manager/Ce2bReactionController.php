<?php
declare(strict_types=1);

namespace App\Controller\Manager;

use App\Controller\AppController;

/**
 * Ce2bReaction Controller
 *
 * @property \App\Model\Table\Ce2bReactionTable $Ce2bReaction
 * @method \App\Model\Entity\Ce2bReaction[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class Ce2bReactionController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Ce2bs'],
        ];
        $ce2bReaction = $this->paginate($this->Ce2bReaction);

        $this->set(compact('ce2bReaction'));
    }

    /**
     * View method
     *
     * @param string|null $id Ce2b Reaction id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $ce2bReaction = $this->Ce2bReaction->get($id, [
            'contain' => ['Ce2bs'],
        ]);

        $this->set(compact('ce2bReaction'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $ce2bReaction = $this->Ce2bReaction->newEmptyEntity();
        if ($this->request->is('post')) {
            $ce2bReaction = $this->Ce2bReaction->patchEntity($ce2bReaction, $this->request->getData());
            if ($this->Ce2bReaction->save($ce2bReaction)) {
                $this->Flash->success(__('The ce2b reaction has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The ce2b reaction could not be saved. Please, try again.'));
        }
        $ce2bs = $this->Ce2bReaction->Ce2bs->find('list', ['limit' => 200])->all();
        $this->set(compact('ce2bReaction', 'ce2bs'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Ce2b Reaction id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $ce2bReaction = $this->Ce2bReaction->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $ce2bReaction = $this->Ce2bReaction->patchEntity($ce2bReaction, $this->request->getData());
            if ($this->Ce2bReaction->save($ce2bReaction)) {
                $this->Flash->success(__('The ce2b reaction has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The ce2b reaction could not be saved. Please, try again.'));
        }
        $ce2bs = $this->Ce2bReaction->Ce2bs->find('list', ['limit' => 200])->all();
        $this->set(compact('ce2bReaction', 'ce2bs'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Ce2b Reaction id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $ce2bReaction = $this->Ce2bReaction->get($id);
        if ($this->Ce2bReaction->delete($ce2bReaction)) {
            $this->Flash->success(__('The ce2b reaction has been deleted.'));
        } else {
            $this->Flash->error(__('The ce2b reaction could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
