<?php
declare(strict_types=1);

namespace App\Controller\Reporter;

use App\Controller\AppController;

/**
 * MedicationProducts Controller
 *
 * @property \App\Model\Table\MedicationProductsTable $MedicationProducts
 * @method \App\Model\Entity\MedicationProduct[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class MedicationProductsController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Medications'],
        ];
        $medicationProducts = $this->paginate($this->MedicationProducts);

        $this->set(compact('medicationProducts'));
    }

    /**
     * View method
     *
     * @param string|null $id Medication Product id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $medicationProduct = $this->MedicationProducts->get($id, [
            'contain' => ['Medications'],
        ]);

        $this->set(compact('medicationProduct'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $medicationProduct = $this->MedicationProducts->newEmptyEntity();
        if ($this->request->is('post')) {
            $medicationProduct = $this->MedicationProducts->patchEntity($medicationProduct, $this->request->getData());
            if ($this->MedicationProducts->save($medicationProduct)) {
                $this->Flash->success(__('The medication product has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The medication product could not be saved. Please, try again.'));
        }
        $medications = $this->MedicationProducts->Medications->find('list', ['limit' => 200])->all();
        $this->set(compact('medicationProduct', 'medications'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Medication Product id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $medicationProduct = $this->MedicationProducts->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $medicationProduct = $this->MedicationProducts->patchEntity($medicationProduct, $this->request->getData());
            if ($this->MedicationProducts->save($medicationProduct)) {
                $this->Flash->success(__('The medication product has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The medication product could not be saved. Please, try again.'));
        }
        $medications = $this->MedicationProducts->Medications->find('list', ['limit' => 200])->all();
        $this->set(compact('medicationProduct', 'medications'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Medication Product id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $medicationProduct = $this->MedicationProducts->get($id);
        if ($this->MedicationProducts->delete($medicationProduct)) {
            $this->Flash->success(__('The medication product has been deleted.'));
        } else {
            $this->Flash->error(__('The medication product could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
