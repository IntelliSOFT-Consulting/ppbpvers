<?php
declare(strict_types=1);

namespace App\Controller\Reporter;

use App\Controller\AppController;

/**
 * ListOfDevices Controller
 *
 * @property \App\Model\Table\ListOfDevicesTable $ListOfDevices
 * @method \App\Model\Entity\ListOfDevice[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class ListOfDevicesController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Devices'],
        ];
        $listOfDevices = $this->paginate($this->ListOfDevices);

        $this->set(compact('listOfDevices'));
    }

    /**
     * View method
     *
     * @param string|null $id List Of Device id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $listOfDevice = $this->ListOfDevices->get($id, [
            'contain' => ['Devices'],
        ]);

        $this->set(compact('listOfDevice'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $listOfDevice = $this->ListOfDevices->newEmptyEntity();
        if ($this->request->is('post')) {
            $listOfDevice = $this->ListOfDevices->patchEntity($listOfDevice, $this->request->getData());
            if ($this->ListOfDevices->save($listOfDevice)) {
                $this->Flash->success(__('The list of device has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The list of device could not be saved. Please, try again.'));
        }
        $devices = $this->ListOfDevices->Devices->find('list', ['limit' => 200])->all();
        $this->set(compact('listOfDevice', 'devices'));
    }

    /**
     * Edit method
     *
     * @param string|null $id List Of Device id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $listOfDevice = $this->ListOfDevices->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $listOfDevice = $this->ListOfDevices->patchEntity($listOfDevice, $this->request->getData());
            if ($this->ListOfDevices->save($listOfDevice)) {
                $this->Flash->success(__('The list of device has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The list of device could not be saved. Please, try again.'));
        }
        $devices = $this->ListOfDevices->Devices->find('list', ['limit' => 200])->all();
        $this->set(compact('listOfDevice', 'devices'));
    }

    /**
     * Delete method
     *
     * @param string|null $id List Of Device id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $listOfDevice = $this->ListOfDevices->get($id);
        if ($this->ListOfDevices->delete($listOfDevice)) {
            $this->Flash->success(__('The list of device has been deleted.'));
        } else {
            $this->Flash->error(__('The list of device could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
