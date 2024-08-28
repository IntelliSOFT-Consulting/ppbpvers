<?php

declare(strict_types=1);

namespace App\Controller\Reporter;

use App\Controller\AppController;

/**
 * Devices Controller
 *
 * @property \App\Model\Table\DevicesTable $Devices
 * @method \App\Model\Entity\Device[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class DevicesController extends AppController
{


    public $page_options = array('25' => '25', '50' => '50', '100' => '100');
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $criteria = array();

        $criteria['Devices.user_id'] = $this->Auth->user('id');
        $this->paginate = [
            'contain' => ['Users', 'Pqmps', 'Counties', 'Designations'],
            'conditions' => $criteria
        ];
        $devices = $this->paginate($this->Devices);

        $this->set('page_options', $this->page_options);
        $this->set(compact('devices'));


        $counties = $this->Devices->Counties->find('list', array('order' => array('Counties.county_name' => 'ASC')));
        $this->set(compact('counties'));
        $designations = $this->Devices->Designations->find('list', array('order' => array('Designations.name' => 'ASC')));
        $this->set(compact('designations'));
    }

    /**
     * View method
     *
     * @param string|null $id Device id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $device = $this->Devices->get($id, [
            'contain' => ['Users', 'Pqmps', 'Counties', 'Designations', 'Devices', 'AttachmentsOld', 'ListOfDevices'],
        ]);

        $this->set(compact('device'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add($id=null)
    {
        $report = $this->Devices->newEmptyEntity();
        $data=[
            'user_id' => $this->Auth->User('id'),
            'reference_no' => 'new', //'MD/'.date('Y').'/'.$count,
            'report_type' => 'Initial',
            'pqmp_id' => $id,
            'designation_id' => $this->Auth->User('designation_id'),
            'county_id' => $this->Auth->User('county_id'),
            'institution_code' => $this->Auth->User('institution_code'),
            'address' => $this->Auth->User('institution_address'),
            'reporter_name' => $this->Auth->User('name'),
            'reporter_email' => $this->Auth->User('email'),
            'reporter_phone' => $this->Auth->User('phone_no'),
            'contact' => $this->Auth->User('institution_contact'),
            'name_of_institution' => $this->Auth->User('name_of_institution')
        ];

        $report = $this->Devices->patchEntity($report, $data);
        if ($this->Devices->save($report)) {
            $this->Flash->success(__('The Medical Device Incident has been created.'));

            $this->redirect(array('action' => 'edit', $report->id));
        } 
    }

    /**
     * Edit method
     *
     * @param string|null $id Device id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $device = $this->Devices->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $device = $this->Devices->patchEntity($device, $this->request->getData());
            if ($this->Devices->save($device)) {
                $this->Flash->success(__('The device has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The device could not be saved. Please, try again.'));
        }
        $users = $this->Devices->Users->find('list', ['limit' => 200])->all();
        $pqmps = $this->Devices->Pqmps->find('list', ['limit' => 200])->all();
        $counties = $this->Devices->Counties->find('list', ['limit' => 200])->all();
        $designations = $this->Devices->Designations->find('list', ['limit' => 200])->all();
        $this->set(compact('device', 'users', 'pqmps', 'counties', 'designations'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Device id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $device = $this->Devices->get($id);
        if ($this->Devices->delete($device)) {
            $this->Flash->success(__('The device has been deleted.'));
        } else {
            $this->Flash->error(__('The device could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
