<?php
declare(strict_types=1);

namespace App\Controller\Reporter;

use App\Controller\AppController;

/**
 * Medications Controller
 *
 * @property \App\Model\Table\MedicationsTable $Medications
 * @method \App\Model\Entity\Medication[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class MedicationsController extends AppController
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
        $criteria['Medications.user_id'] = $this->Auth->user('id');
        $this->paginate = [
            'contain' => ['Users', 'Pqmps', 'Counties', 'Designations'],
            'conditions' => $criteria
        ];
        $medications = $this->paginate($this->Medications);

        $this->set('page_options', $this->page_options);
        $this->set(compact('medications'));
    }

    /**
     * View method
     *
     * @param string|null $id Medication id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $medication = $this->Medications->get($id, [
            'contain' => ['Users', 'Pqmps', 'Counties', 'Designations', 'Medications', 'AttachmentsOld', 'MedicationProducts', 'Sadrs'],
        ]);

        $this->set(compact('medication'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add($id=null)
    {
        $medication = $this->Medications->newEmptyEntity();
         $data=[
            'user_id' => $this->Auth->User('id'),
            'reference_no' => 'new', //'ME/'.date('Y').'/'.$count,
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
            $medication = $this->Medications->patchEntity($medication, $data);
            if ($this->Medications->save($medication)) {
                $this->Flash->success(__('The medication has been saved.'));
                $this->redirect(array('action' => 'edit', $medication->id));
            } 
    }

    /**
     * Edit method
     *
     * @param string|null $id Medication id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $medication = $this->Medications->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $medication = $this->Medications->patchEntity($medication, $this->request->getData());
            if ($this->Medications->save($medication)) {
                $this->Flash->success(__('The medication has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The medication could not be saved. Please, try again.'));
        }
        $users = $this->Medications->Users->find('list', ['limit' => 200])->all();
        $pqmps = $this->Medications->Pqmps->find('list', ['limit' => 200])->all();
        $counties = $this->Medications->Counties->find('list', ['limit' => 200])->all();
        $designations = $this->Medications->Designations->find('list', ['limit' => 200])->all();
        $this->set(compact('medication', 'users', 'pqmps', 'counties', 'designations'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Medication id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $medication = $this->Medications->get($id);
        if ($this->Medications->delete($medication)) {
            $this->Flash->success(__('The medication has been deleted.'));
        } else {
            $this->Flash->error(__('The medication could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
