<?php
declare(strict_types=1);

namespace App\Controller\Manager;

use App\Controller\AppController;

/**
 * ConcomittantDrugs Controller
 *
 * @property \App\Model\Table\ConcomittantDrugsTable $ConcomittantDrugs
 * @method \App\Model\Entity\ConcomittantDrug[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class ConcomittantDrugsController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Saes', 'Routes'],
        ];
        $concomittantDrugs = $this->paginate($this->ConcomittantDrugs);

        $this->set(compact('concomittantDrugs'));
    }

    /**
     * View method
     *
     * @param string|null $id Concomittant Drug id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $concomittantDrug = $this->ConcomittantDrugs->get($id, [
            'contain' => ['Saes', 'Routes'],
        ]);

        $this->set(compact('concomittantDrug'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $concomittantDrug = $this->ConcomittantDrugs->newEmptyEntity();
        if ($this->request->is('post')) {
            $concomittantDrug = $this->ConcomittantDrugs->patchEntity($concomittantDrug, $this->request->getData());
            if ($this->ConcomittantDrugs->save($concomittantDrug)) {
                $this->Flash->success(__('The concomittant drug has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The concomittant drug could not be saved. Please, try again.'));
        }
        $saes = $this->ConcomittantDrugs->Saes->find('list', ['limit' => 200])->all();
        $routes = $this->ConcomittantDrugs->Routes->find('list', ['limit' => 200])->all();
        $this->set(compact('concomittantDrug', 'saes', 'routes'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Concomittant Drug id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $concomittantDrug = $this->ConcomittantDrugs->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $concomittantDrug = $this->ConcomittantDrugs->patchEntity($concomittantDrug, $this->request->getData());
            if ($this->ConcomittantDrugs->save($concomittantDrug)) {
                $this->Flash->success(__('The concomittant drug has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The concomittant drug could not be saved. Please, try again.'));
        }
        $saes = $this->ConcomittantDrugs->Saes->find('list', ['limit' => 200])->all();
        $routes = $this->ConcomittantDrugs->Routes->find('list', ['limit' => 200])->all();
        $this->set(compact('concomittantDrug', 'saes', 'routes'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Concomittant Drug id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $concomittantDrug = $this->ConcomittantDrugs->get($id);
        if ($this->ConcomittantDrugs->delete($concomittantDrug)) {
            $this->Flash->success(__('The concomittant drug has been deleted.'));
        } else {
            $this->Flash->error(__('The concomittant drug could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
