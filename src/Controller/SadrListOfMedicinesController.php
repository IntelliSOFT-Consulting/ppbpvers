<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * SadrListOfMedicines Controller
 *
 * @property \App\Model\Table\SadrListOfMedicinesTable $SadrListOfMedicines
 * @method \App\Model\Entity\SadrListOfMedicine[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class SadrListOfMedicinesController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Sadrs', 'SadrFollowups', 'Doses', 'Routes', 'Frequencies'],
        ];
        $sadrListOfMedicines = $this->paginate($this->SadrListOfMedicines);

        $this->set(compact('sadrListOfMedicines'));
    }

    /**
     * View method
     *
     * @param string|null $id Sadr List Of Medicine id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $sadrListOfMedicine = $this->SadrListOfMedicines->get($id, [
            'contain' => ['Sadrs', 'SadrFollowups', 'Doses', 'Routes', 'Frequencies'],
        ]);

        $this->set(compact('sadrListOfMedicine'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $sadrListOfMedicine = $this->SadrListOfMedicines->newEmptyEntity();
        if ($this->request->is('post')) {
            $sadrListOfMedicine = $this->SadrListOfMedicines->patchEntity($sadrListOfMedicine, $this->request->getData());
            if ($this->SadrListOfMedicines->save($sadrListOfMedicine)) {
                $this->Flash->success(__('The sadr list of medicine has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The sadr list of medicine could not be saved. Please, try again.'));
        }
        $sadrs = $this->SadrListOfMedicines->Sadrs->find('list', ['limit' => 200])->all();
        $sadrFollowups = $this->SadrListOfMedicines->SadrFollowups->find('list', ['limit' => 200])->all();
        $doses = $this->SadrListOfMedicines->Doses->find('list', ['limit' => 200])->all();
        $routes = $this->SadrListOfMedicines->Routes->find('list', ['limit' => 200])->all();
        $frequencies = $this->SadrListOfMedicines->Frequencies->find('list', ['limit' => 200])->all();
        $this->set(compact('sadrListOfMedicine', 'sadrs', 'sadrFollowups', 'doses', 'routes', 'frequencies'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Sadr List Of Medicine id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $sadrListOfMedicine = $this->SadrListOfMedicines->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $sadrListOfMedicine = $this->SadrListOfMedicines->patchEntity($sadrListOfMedicine, $this->request->getData());
            if ($this->SadrListOfMedicines->save($sadrListOfMedicine)) {
                $this->Flash->success(__('The sadr list of medicine has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The sadr list of medicine could not be saved. Please, try again.'));
        }
        $sadrs = $this->SadrListOfMedicines->Sadrs->find('list', ['limit' => 200])->all();
        $sadrFollowups = $this->SadrListOfMedicines->SadrFollowups->find('list', ['limit' => 200])->all();
        $doses = $this->SadrListOfMedicines->Doses->find('list', ['limit' => 200])->all();
        $routes = $this->SadrListOfMedicines->Routes->find('list', ['limit' => 200])->all();
        $frequencies = $this->SadrListOfMedicines->Frequencies->find('list', ['limit' => 200])->all();
        $this->set(compact('sadrListOfMedicine', 'sadrs', 'sadrFollowups', 'doses', 'routes', 'frequencies'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Sadr List Of Medicine id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $sadrListOfMedicine = $this->SadrListOfMedicines->get($id);
        if ($this->SadrListOfMedicines->delete($sadrListOfMedicine)) {
            $this->Flash->success(__('The sadr list of medicine has been deleted.'));
        } else {
            $this->Flash->error(__('The sadr list of medicine could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
