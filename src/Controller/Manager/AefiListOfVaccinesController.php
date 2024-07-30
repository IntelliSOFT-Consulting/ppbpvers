<?php
declare(strict_types=1);

namespace App\Controller\Manager;

use App\Controller\AppController;

/**
 * AefiListOfVaccines Controller
 *
 * @property \App\Model\Table\AefiListOfVaccinesTable $AefiListOfVaccines
 * @method \App\Model\Entity\AefiListOfVaccine[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class AefiListOfVaccinesController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Aefis', 'Saefis', 'Vaccines'],
        ];
        $aefiListOfVaccines = $this->paginate($this->AefiListOfVaccines);

        $this->set(compact('aefiListOfVaccines'));
    }

    /**
     * View method
     *
     * @param string|null $id Aefi List Of Vaccine id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $aefiListOfVaccine = $this->AefiListOfVaccines->get($id, [
            'contain' => ['Aefis', 'Saefis', 'Vaccines'],
        ]);

        $this->set(compact('aefiListOfVaccine'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $aefiListOfVaccine = $this->AefiListOfVaccines->newEmptyEntity();
        if ($this->request->is('post')) {
            $aefiListOfVaccine = $this->AefiListOfVaccines->patchEntity($aefiListOfVaccine, $this->request->getData());
            if ($this->AefiListOfVaccines->save($aefiListOfVaccine)) {
                $this->Flash->success(__('The aefi list of vaccine has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The aefi list of vaccine could not be saved. Please, try again.'));
        }
        $aefis = $this->AefiListOfVaccines->Aefis->find('list', ['limit' => 200])->all();
        $saefis = $this->AefiListOfVaccines->Saefis->find('list', ['limit' => 200])->all();
        $vaccines = $this->AefiListOfVaccines->Vaccines->find('list', ['limit' => 200])->all();
        $this->set(compact('aefiListOfVaccine', 'aefis', 'saefis', 'vaccines'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Aefi List Of Vaccine id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $aefiListOfVaccine = $this->AefiListOfVaccines->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $aefiListOfVaccine = $this->AefiListOfVaccines->patchEntity($aefiListOfVaccine, $this->request->getData());
            if ($this->AefiListOfVaccines->save($aefiListOfVaccine)) {
                $this->Flash->success(__('The aefi list of vaccine has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The aefi list of vaccine could not be saved. Please, try again.'));
        }
        $aefis = $this->AefiListOfVaccines->Aefis->find('list', ['limit' => 200])->all();
        $saefis = $this->AefiListOfVaccines->Saefis->find('list', ['limit' => 200])->all();
        $vaccines = $this->AefiListOfVaccines->Vaccines->find('list', ['limit' => 200])->all();
        $this->set(compact('aefiListOfVaccine', 'aefis', 'saefis', 'vaccines'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Aefi List Of Vaccine id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $aefiListOfVaccine = $this->AefiListOfVaccines->get($id);
        if ($this->AefiListOfVaccines->delete($aefiListOfVaccine)) {
            $this->Flash->success(__('The aefi list of vaccine has been deleted.'));
        } else {
            $this->Flash->error(__('The aefi list of vaccine could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
