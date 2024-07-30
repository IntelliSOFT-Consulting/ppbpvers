<?php
declare(strict_types=1);

namespace App\Controller\Admin;

use App\Controller\AppController;

/**
 * Meddras Controller
 *
 * @property \App\Model\Table\MeddrasTable $Meddras
 * @method \App\Model\Entity\Meddra[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class MeddrasController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $meddras = $this->paginate($this->Meddras); 
dd($meddras);
        $this->set(compact('meddras'));
    }

    /**
     * View method
     *
     * @param string|null $id Meddra id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $meddra = $this->Meddras->get($id, [
            'contain' => [],
        ]);

        $this->set(compact('meddra'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $meddra = $this->Meddras->newEmptyEntity();
        if ($this->request->is('post')) {
            $meddra = $this->Meddras->patchEntity($meddra, $this->request->getData());
            if ($this->Meddras->save($meddra)) {
                $this->Flash->success(__('The meddra has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The meddra could not be saved. Please, try again.'));
        }
        $this->set(compact('meddra'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Meddra id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $meddra = $this->Meddras->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $meddra = $this->Meddras->patchEntity($meddra, $this->request->getData());
            if ($this->Meddras->save($meddra)) {
                $this->Flash->success(__('The meddra has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The meddra could not be saved. Please, try again.'));
        }
        $this->set(compact('meddra'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Meddra id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $meddra = $this->Meddras->get($id);
        if ($this->Meddras->delete($meddra)) {
            $this->Flash->success(__('The meddra has been deleted.'));
        } else {
            $this->Flash->error(__('The meddra could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
