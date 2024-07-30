<?php
declare(strict_types=1);

namespace App\Controller\Manager;

use App\Controller\AppController;

/**
 * Pints Controller
 *
 * @property \App\Model\Table\PintsTable $Pints
 * @method \App\Model\Entity\Pint[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class PintsController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Transfusions'],
        ];
        $pints = $this->paginate($this->Pints);

        $this->set(compact('pints'));
    }

    /**
     * View method
     *
     * @param string|null $id Pint id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $pint = $this->Pints->get($id, [
            'contain' => ['Transfusions'],
        ]);

        $this->set(compact('pint'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $pint = $this->Pints->newEmptyEntity();
        if ($this->request->is('post')) {
            $pint = $this->Pints->patchEntity($pint, $this->request->getData());
            if ($this->Pints->save($pint)) {
                $this->Flash->success(__('The pint has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The pint could not be saved. Please, try again.'));
        }
        $transfusions = $this->Pints->Transfusions->find('list', ['limit' => 200])->all();
        $this->set(compact('pint', 'transfusions'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Pint id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $pint = $this->Pints->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $pint = $this->Pints->patchEntity($pint, $this->request->getData());
            if ($this->Pints->save($pint)) {
                $this->Flash->success(__('The pint has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The pint could not be saved. Please, try again.'));
        }
        $transfusions = $this->Pints->Transfusions->find('list', ['limit' => 200])->all();
        $this->set(compact('pint', 'transfusions'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Pint id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $pint = $this->Pints->get($id);
        if ($this->Pints->delete($pint)) {
            $this->Flash->success(__('The pint has been deleted.'));
        } else {
            $this->Flash->error(__('The pint could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
