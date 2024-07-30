<?php
declare(strict_types=1);

namespace App\Controller\Admin;

use App\Controller\AppController;

/**
 * SadrListOfDrugs Controller
 *
 * @property \App\Model\Table\SadrListOfDrugsTable $SadrListOfDrugs
 * @method \App\Model\Entity\SadrListOfDrug[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class SadrListOfDrugsController extends AppController
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
        $sadrListOfDrugs = $this->paginate($this->SadrListOfDrugs);

        $this->set(compact('sadrListOfDrugs'));
    }

    /**
     * View method
     *
     * @param string|null $id Sadr List Of Drug id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $sadrListOfDrug = $this->SadrListOfDrugs->get($id, [
            'contain' => ['Sadrs', 'SadrFollowups', 'Doses', 'Routes', 'Frequencies'],
        ]);

        $this->set(compact('sadrListOfDrug'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $sadrListOfDrug = $this->SadrListOfDrugs->newEmptyEntity();
        if ($this->request->is('post')) {
            $sadrListOfDrug = $this->SadrListOfDrugs->patchEntity($sadrListOfDrug, $this->request->getData());
            if ($this->SadrListOfDrugs->save($sadrListOfDrug)) {
                $this->Flash->success(__('The sadr list of drug has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The sadr list of drug could not be saved. Please, try again.'));
        }
        $sadrs = $this->SadrListOfDrugs->Sadrs->find('list', ['limit' => 200])->all();
        $sadrFollowups = $this->SadrListOfDrugs->SadrFollowups->find('list', ['limit' => 200])->all();
        $doses = $this->SadrListOfDrugs->Doses->find('list', ['limit' => 200])->all();
        $routes = $this->SadrListOfDrugs->Routes->find('list', ['limit' => 200])->all();
        $frequencies = $this->SadrListOfDrugs->Frequencies->find('list', ['limit' => 200])->all();
        $this->set(compact('sadrListOfDrug', 'sadrs', 'sadrFollowups', 'doses', 'routes', 'frequencies'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Sadr List Of Drug id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $sadrListOfDrug = $this->SadrListOfDrugs->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $sadrListOfDrug = $this->SadrListOfDrugs->patchEntity($sadrListOfDrug, $this->request->getData());
            if ($this->SadrListOfDrugs->save($sadrListOfDrug)) {
                $this->Flash->success(__('The sadr list of drug has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The sadr list of drug could not be saved. Please, try again.'));
        }
        $sadrs = $this->SadrListOfDrugs->Sadrs->find('list', ['limit' => 200])->all();
        $sadrFollowups = $this->SadrListOfDrugs->SadrFollowups->find('list', ['limit' => 200])->all();
        $doses = $this->SadrListOfDrugs->Doses->find('list', ['limit' => 200])->all();
        $routes = $this->SadrListOfDrugs->Routes->find('list', ['limit' => 200])->all();
        $frequencies = $this->SadrListOfDrugs->Frequencies->find('list', ['limit' => 200])->all();
        $this->set(compact('sadrListOfDrug', 'sadrs', 'sadrFollowups', 'doses', 'routes', 'frequencies'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Sadr List Of Drug id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $sadrListOfDrug = $this->SadrListOfDrugs->get($id);
        if ($this->SadrListOfDrugs->delete($sadrListOfDrug)) {
            $this->Flash->success(__('The sadr list of drug has been deleted.'));
        } else {
            $this->Flash->error(__('The sadr list of drug could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
