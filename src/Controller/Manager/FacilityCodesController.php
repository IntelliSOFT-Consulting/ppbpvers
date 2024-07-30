<?php
declare(strict_types=1);

namespace App\Controller\Manager;

use App\Controller\AppController;

/**
 * FacilityCodes Controller
 *
 * @property \App\Model\Table\FacilityCodesTable $FacilityCodes
 * @method \App\Model\Entity\FacilityCode[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class FacilityCodesController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $facilityCodes = $this->paginate($this->FacilityCodes);

        $this->set(compact('facilityCodes'));
    }

    /**
     * View method
     *
     * @param string|null $id Facility Code id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $facilityCode = $this->FacilityCodes->get($id, [
            'contain' => [],
        ]);

        $this->set(compact('facilityCode'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $facilityCode = $this->FacilityCodes->newEmptyEntity();
        if ($this->request->is('post')) {
            $facilityCode = $this->FacilityCodes->patchEntity($facilityCode, $this->request->getData());
            if ($this->FacilityCodes->save($facilityCode)) {
                $this->Flash->success(__('The facility code has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The facility code could not be saved. Please, try again.'));
        }
        $this->set(compact('facilityCode'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Facility Code id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $facilityCode = $this->FacilityCodes->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $facilityCode = $this->FacilityCodes->patchEntity($facilityCode, $this->request->getData());
            if ($this->FacilityCodes->save($facilityCode)) {
                $this->Flash->success(__('The facility code has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The facility code could not be saved. Please, try again.'));
        }
        $this->set(compact('facilityCode'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Facility Code id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $facilityCode = $this->FacilityCodes->get($id);
        if ($this->FacilityCodes->delete($facilityCode)) {
            $this->Flash->success(__('The facility code has been deleted.'));
        } else {
            $this->Flash->error(__('The facility code could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
