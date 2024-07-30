<?php
declare(strict_types=1);

namespace App\Controller\Reporter;

use App\Controller\AppController;

/**
 * MessagesDelete Controller
 *
 * @property \App\Model\Table\MessagesDeleteTable $MessagesDelete
 * @method \App\Model\Entity\MessagesDelete[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class MessagesDeleteController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $messagesDelete = $this->paginate($this->MessagesDelete);

        $this->set(compact('messagesDelete'));
    }

    /**
     * View method
     *
     * @param string|null $id Messages Delete id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $messagesDelete = $this->MessagesDelete->get($id, [
            'contain' => [],
        ]);

        $this->set(compact('messagesDelete'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $messagesDelete = $this->MessagesDelete->newEmptyEntity();
        if ($this->request->is('post')) {
            $messagesDelete = $this->MessagesDelete->patchEntity($messagesDelete, $this->request->getData());
            if ($this->MessagesDelete->save($messagesDelete)) {
                $this->Flash->success(__('The messages delete has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The messages delete could not be saved. Please, try again.'));
        }
        $this->set(compact('messagesDelete'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Messages Delete id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $messagesDelete = $this->MessagesDelete->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $messagesDelete = $this->MessagesDelete->patchEntity($messagesDelete, $this->request->getData());
            if ($this->MessagesDelete->save($messagesDelete)) {
                $this->Flash->success(__('The messages delete has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The messages delete could not be saved. Please, try again.'));
        }
        $this->set(compact('messagesDelete'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Messages Delete id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $messagesDelete = $this->MessagesDelete->get($id);
        if ($this->MessagesDelete->delete($messagesDelete)) {
            $this->Flash->success(__('The messages delete has been deleted.'));
        } else {
            $this->Flash->error(__('The messages delete could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
