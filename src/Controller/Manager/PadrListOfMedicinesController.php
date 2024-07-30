<?php
declare(strict_types=1);

namespace App\Controller\Manager;

use App\Controller\AppController;

/**
 * PadrListOfMedicines Controller
 *
 * @property \App\Model\Table\PadrListOfMedicinesTable $PadrListOfMedicines
 * @method \App\Model\Entity\PadrListOfMedicine[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class PadrListOfMedicinesController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Padrs'],
        ];
        $padrListOfMedicines = $this->paginate($this->PadrListOfMedicines);

        $this->set(compact('padrListOfMedicines'));
    }

    /**
     * View method
     *
     * @param string|null $id Padr List Of Medicine id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $padrListOfMedicine = $this->PadrListOfMedicines->get($id, [
            'contain' => ['Padrs'],
        ]);

        $this->set(compact('padrListOfMedicine'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $padrListOfMedicine = $this->PadrListOfMedicines->newEmptyEntity();
        if ($this->request->is('post')) {
            $padrListOfMedicine = $this->PadrListOfMedicines->patchEntity($padrListOfMedicine, $this->request->getData());
            if ($this->PadrListOfMedicines->save($padrListOfMedicine)) {
                $this->Flash->success(__('The padr list of medicine has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The padr list of medicine could not be saved. Please, try again.'));
        }
        $padrs = $this->PadrListOfMedicines->Padrs->find('list', ['limit' => 200])->all();
        $this->set(compact('padrListOfMedicine', 'padrs'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Padr List Of Medicine id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $padrListOfMedicine = $this->PadrListOfMedicines->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $padrListOfMedicine = $this->PadrListOfMedicines->patchEntity($padrListOfMedicine, $this->request->getData());
            if ($this->PadrListOfMedicines->save($padrListOfMedicine)) {
                $this->Flash->success(__('The padr list of medicine has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The padr list of medicine could not be saved. Please, try again.'));
        }
        $padrs = $this->PadrListOfMedicines->Padrs->find('list', ['limit' => 200])->all();
        $this->set(compact('padrListOfMedicine', 'padrs'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Padr List Of Medicine id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $padrListOfMedicine = $this->PadrListOfMedicines->get($id);
        if ($this->PadrListOfMedicines->delete($padrListOfMedicine)) {
            $this->Flash->success(__('The padr list of medicine has been deleted.'));
        } else {
            $this->Flash->error(__('The padr list of medicine could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
