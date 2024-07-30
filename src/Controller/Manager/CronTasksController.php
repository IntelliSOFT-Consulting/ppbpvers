<?php
declare(strict_types=1);

namespace App\Controller\Manager;

use App\Controller\AppController;

/**
 * CronTasks Controller
 *
 * @property \App\Model\Table\CronTasksTable $CronTasks
 * @method \App\Model\Entity\CronTask[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class CronTasksController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $cronTasks = $this->paginate($this->CronTasks);

        $this->set(compact('cronTasks'));
    }

    /**
     * View method
     *
     * @param string|null $id Cron Task id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $cronTask = $this->CronTasks->get($id, [
            'contain' => [],
        ]);

        $this->set(compact('cronTask'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $cronTask = $this->CronTasks->newEmptyEntity();
        if ($this->request->is('post')) {
            $cronTask = $this->CronTasks->patchEntity($cronTask, $this->request->getData());
            if ($this->CronTasks->save($cronTask)) {
                $this->Flash->success(__('The cron task has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The cron task could not be saved. Please, try again.'));
        }
        $this->set(compact('cronTask'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Cron Task id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $cronTask = $this->CronTasks->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $cronTask = $this->CronTasks->patchEntity($cronTask, $this->request->getData());
            if ($this->CronTasks->save($cronTask)) {
                $this->Flash->success(__('The cron task has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The cron task could not be saved. Please, try again.'));
        }
        $this->set(compact('cronTask'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Cron Task id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $cronTask = $this->CronTasks->get($id);
        if ($this->CronTasks->delete($cronTask)) {
            $this->Flash->success(__('The cron task has been deleted.'));
        } else {
            $this->Flash->error(__('The cron task could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
