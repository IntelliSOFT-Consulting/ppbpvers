<?php
declare(strict_types=1);

namespace App\Controller\Manager;

use App\Controller\AppController;

/**
 * SuspectedDrugs Controller
 *
 * @property \App\Model\Table\SuspectedDrugsTable $SuspectedDrugs
 * @method \App\Model\Entity\SuspectedDrug[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class SuspectedDrugsController extends AppController
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
        $suspectedDrugs = $this->paginate($this->SuspectedDrugs);

        $this->set(compact('suspectedDrugs'));
    }

    /**
     * View method
     *
     * @param string|null $id Suspected Drug id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $suspectedDrug = $this->SuspectedDrugs->get($id, [
            'contain' => ['Saes', 'Routes'],
        ]);

        $this->set(compact('suspectedDrug'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $suspectedDrug = $this->SuspectedDrugs->newEmptyEntity();
        if ($this->request->is('post')) {
            $suspectedDrug = $this->SuspectedDrugs->patchEntity($suspectedDrug, $this->request->getData());
            if ($this->SuspectedDrugs->save($suspectedDrug)) {
                $this->Flash->success(__('The suspected drug has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The suspected drug could not be saved. Please, try again.'));
        }
        $saes = $this->SuspectedDrugs->Saes->find('list', ['limit' => 200])->all();
        $routes = $this->SuspectedDrugs->Routes->find('list', ['limit' => 200])->all();
        $this->set(compact('suspectedDrug', 'saes', 'routes'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Suspected Drug id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $suspectedDrug = $this->SuspectedDrugs->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $suspectedDrug = $this->SuspectedDrugs->patchEntity($suspectedDrug, $this->request->getData());
            if ($this->SuspectedDrugs->save($suspectedDrug)) {
                $this->Flash->success(__('The suspected drug has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The suspected drug could not be saved. Please, try again.'));
        }
        $saes = $this->SuspectedDrugs->Saes->find('list', ['limit' => 200])->all();
        $routes = $this->SuspectedDrugs->Routes->find('list', ['limit' => 200])->all();
        $this->set(compact('suspectedDrug', 'saes', 'routes'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Suspected Drug id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $suspectedDrug = $this->SuspectedDrugs->get($id);
        if ($this->SuspectedDrugs->delete($suspectedDrug)) {
            $this->Flash->success(__('The suspected drug has been deleted.'));
        } else {
            $this->Flash->error(__('The suspected drug could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
