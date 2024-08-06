<?php

declare(strict_types=1);

namespace App\Controller\Reporter;

use App\Controller\AppController;

/**
 * Sadrs Controller
 *
 * @property \App\Model\Table\SadrsTable $Sadrs
 * @method \App\Model\Entity\Sadr[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class SadrsController extends AppController
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

        $criteria['Sadrs.user_id'] = $this->Auth->user('id');
        $this->paginate = [
            'contain' => ['Users', 'Pqmps', 'Medications', 'Counties', 'SubCounties', 'Designations'],
            'conditions' => $criteria
        ];
        $sadrs = $this->paginate($this->Sadrs);
        $this->set('page_options', $this->page_options);
        $this->set(compact('sadrs'));
    }

    /**
     * View method
     *
     * @param string|null $id Sadr id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $sadr = $this->Sadrs->get($id, [
            'contain' => ['Users', 'Pqmps', 'Medications', 'Counties', 'SubCounties', 'Designations', 'Sadrs', 'AttachmentsOld', 'SadrDescriptions', 'SadrFollowups', 'SadrListOfDrugs', 'SadrListOfMedicines', 'SadrReaction'],
        ]);

        $this->set(compact('sadr'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add($id = null)
    { 
        $sadr = $this->Sadrs->newEmptyEntity();
        $data = array(
            'user_id' => $this->Auth->User('id'),
            'reference_no' => 'new',
            'report_type' => 'Initial',
            'pqmp_id' => $id,
            'medication_id' => $id,
            'designation_id' => $this->Auth->User('designation_id'),
            'county_id' => $this->Auth->User('county_id'),
            'institution_code' => $this->Auth->User('institution_code'),
            'address' => $this->Auth->User('institution_address'),
            'reporter_name' => $this->Auth->User('name'),
            'reporter_email' => $this->Auth->User('email'),
            'reporter_phone' => $this->Auth->User('phone_no'),
            'contact' => $this->Auth->User('institution_contact'),
            'name_of_institution' => $this->Auth->User('name_of_institution')
        );

        $sadr = $this->Sadrs->patchEntity($sadr, $data);
        $this->Sadrs->save($sadr);
        $this->Flash->success(__('The sadr has been saved.')); 
        $this->redirect(array('action' => 'edit', $sadr->id));
    }


    /**
     * Edit method
     *
     * @param string|null $id Sadr id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $sadr = $this->Sadrs->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $sadr = $this->Sadrs->patchEntity($sadr, $this->request->getData());
            if ($this->Sadrs->save($sadr)) {
                $this->Flash->success(__('The sadr has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The sadr could not be saved. Please, try again.'));
        }
        $users = $this->Sadrs->Users->find('list', ['limit' => 200])->all();
        $pqmps = $this->Sadrs->Pqmps->find('list', ['limit' => 200])->all();
        $medications = $this->Sadrs->Medications->find('list', ['limit' => 200])->all();
        $counties = $this->Sadrs->Counties->find('list', ['limit' => 200])->all();
        $subCounties = $this->Sadrs->SubCounties->find('list', ['limit' => 200])->all();
        $designations = $this->Sadrs->Designations->find('list', ['limit' => 200])->all();
        $this->set(compact('sadr', 'users', 'pqmps', 'medications', 'counties', 'subCounties', 'designations'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Sadr id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $sadr = $this->Sadrs->get($id);
        if ($this->Sadrs->delete($sadr)) {
            $this->Flash->success(__('The sadr has been deleted.'));
        } else {
            $this->Flash->error(__('The sadr could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
