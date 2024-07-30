<?php
declare(strict_types=1);

namespace App\Controller\Reporter;

use App\Controller\AppController;

/**
 * QueuedTasks Controller
 *
 * @property \App\Model\Table\QueuedTasksTable $QueuedTasks
 * @method \App\Model\Entity\QueuedTask[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class QueuedTasksController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $queuedTasks = $this->paginate($this->QueuedTasks);

        $this->set(compact('queuedTasks'));
    }

    /**
     * View method
     *
     * @param string|null $id Queued Task id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $queuedTask = $this->QueuedTasks->get($id, [
            'contain' => [],
        ]);

        $this->set(compact('queuedTask'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $queuedTask = $this->QueuedTasks->newEmptyEntity();
        if ($this->request->is('post')) {
            $queuedTask = $this->QueuedTasks->patchEntity($queuedTask, $this->request->getData());
            if ($this->QueuedTasks->save($queuedTask)) {
                $this->Flash->success(__('The queued task has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The queued task could not be saved. Please, try again.'));
        }
        $this->set(compact('queuedTask'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Queued Task id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $queuedTask = $this->QueuedTasks->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $queuedTask = $this->QueuedTasks->patchEntity($queuedTask, $this->request->getData());
            if ($this->QueuedTasks->save($queuedTask)) {
                $this->Flash->success(__('The queued task has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The queued task could not be saved. Please, try again.'));
        }
        $this->set(compact('queuedTask'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Queued Task id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $queuedTask = $this->QueuedTasks->get($id);
        if ($this->QueuedTasks->delete($queuedTask)) {
            $this->Flash->success(__('The queued task has been deleted.'));
        } else {
            $this->Flash->error(__('The queued task could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
