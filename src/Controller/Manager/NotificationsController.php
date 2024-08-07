<?php

declare(strict_types=1);

namespace App\Controller\Manager;

use App\Controller\AppController;

/**
 * Notifications Controller
 *
 * @property \App\Model\Table\NotificationsTable $Notifications
 * @method \App\Model\Entity\Notification[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class NotificationsController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {

        $page_options = ['20' => '20', '25' => '25'];

        $passedArgs = $this->request->getQuery();
        // if (!empty($passedArgs['start_date']) || !empty($passedArgs['end_date'])) {
        //     $passedArgs['range'] = true;
        // }
        $queryParams = $this->request->getQuery();

        // Example criteria handling
        $criteria = [];
        if (!empty($queryParams['start_date'])) {
            $startDate = \DateTime::createFromFormat('d-m-Y', $queryParams['start_date']);
            if ($startDate) {
                $queryParams['start_date'] = $startDate->format('Y-m-d');
            }
        }
        if (!empty($queryParams['end_date'])) {
            $endDate = \DateTime::createFromFormat('d-m-Y', $queryParams['end_date']);
            if ($endDate) {
                $queryParams['end_date'] = $endDate->format('Y-m-d');
            }
            // debug($endDate);
        }
        $limit = $page_options['20']; // Default limit
        if (!empty($passedArgs['pages']) && isset($page_options[$passedArgs['pages']])) {
            $limit = $page_options[$passedArgs['pages']];
        }
        if (!empty($queryParams['start_date'])) {
            $criteria['Notifications.created >='] = $queryParams['start_date'];
        }
        if (!empty($queryParams['end_date'])) {
            $criteria['Notifications.created <='] = $queryParams['end_date'];
        }
        // debug($criteria);
        // exit;
        // Authentication: Get current user ID
        $userId =   $this->Auth->User('id');

        // $criteria = $this->Notifications->parseCriteria($passedArgs);
        $criteria['user_id'] = $userId;

        $query = $this->Notifications->find()
            ->where($criteria)
            ->contain(['Users'])
            ->order(['Notifications.created' => 'desc']);

        // CSV Export
        $ext = $this->request->getParam('_ext');
        if ($ext && $ext == 'csv') {
            $this->csvExport($query);
            return;
        }

        $notifications = $this->Paginator->paginate($query, [
            'limit' => $limit
        ]);

        $this->set(compact('page_options', 'notifications'));
    }

    // CSV export method placeholder
    protected function csvExport($query)
    {
        // Implement CSV export logic here
    }
    /**
     * View method
     *
     * @param string|null $id Notification id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $notification = $this->Notifications->get($id, [
            'contain' => ['Users'],
        ]);

        $this->set(compact('notification'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $notification = $this->Notifications->newEmptyEntity();
        if ($this->request->is('post')) {
            $notification = $this->Notifications->patchEntity($notification, $this->request->getData());
            if ($this->Notifications->save($notification)) {
                $this->Flash->success(__('The notification has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The notification could not be saved. Please, try again.'));
        }
        $users = $this->Notifications->Users->find('list', ['limit' => 200])->all();
        $this->set(compact('notification', 'users'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Notification id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $notification = $this->Notifications->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $notification = $this->Notifications->patchEntity($notification, $this->request->getData());
            if ($this->Notifications->save($notification)) {
                $this->Flash->success(__('The notification has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The notification could not be saved. Please, try again.'));
        }
        $users = $this->Notifications->Users->find('list', ['limit' => 200])->all();
        $this->set(compact('notification', 'users'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Notification id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $notification = $this->Notifications->get($id);
        if ($this->Notifications->delete($notification)) {
            $this->Flash->success(__('The notification has been deleted.'));
        } else {
            $this->Flash->error(__('The notification could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
