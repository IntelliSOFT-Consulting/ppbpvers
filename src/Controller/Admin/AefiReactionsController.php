<?php
declare(strict_types=1);

namespace App\Controller\Admin;

use App\Controller\AppController;

/**
 * AefiReactions Controller
 *
 * @property \App\Model\Table\AefiReactionsTable $AefiReactions
 * @method \App\Model\Entity\AefiReaction[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class AefiReactionsController extends AppController
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
        $aefiReactions = $this->paginate($this->AefiReactions);

        $this->set(compact('aefiReactions'));
    }

    /**
     * View method
     *
     * @param string|null $id Aefi Reaction id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $aefiReaction = $this->AefiReactions->get($id, [
            'contain' => ['Aefis'],
        ]);

        $this->set(compact('aefiReaction'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $aefiReaction = $this->AefiReactions->newEmptyEntity();
        if ($this->request->is('post')) {
            $aefiReaction = $this->AefiReactions->patchEntity($aefiReaction, $this->request->getData());
            if ($this->AefiReactions->save($aefiReaction)) {
                $this->Flash->success(__('The aefi reaction has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The aefi reaction could not be saved. Please, try again.'));
        }
        $aefis = $this->AefiReactions->Aefis->find('list', ['limit' => 200])->all();
        $this->set(compact('aefiReaction', 'aefis'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Aefi Reaction id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $aefiReaction = $this->AefiReactions->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $aefiReaction = $this->AefiReactions->patchEntity($aefiReaction, $this->request->getData());
            if ($this->AefiReactions->save($aefiReaction)) {
                $this->Flash->success(__('The aefi reaction has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The aefi reaction could not be saved. Please, try again.'));
        }
        $aefis = $this->AefiReactions->Aefis->find('list', ['limit' => 200])->all();
        $this->set(compact('aefiReaction', 'aefis'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Aefi Reaction id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $aefiReaction = $this->AefiReactions->get($id);
        if ($this->AefiReactions->delete($aefiReaction)) {
            $this->Flash->success(__('The aefi reaction has been deleted.'));
        } else {
            $this->Flash->error(__('The aefi reaction could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
