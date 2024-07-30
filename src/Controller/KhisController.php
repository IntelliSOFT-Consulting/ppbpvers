<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Khis Controller
 *
 * @property \App\Model\Table\KhisTable $Khis
 * @method \App\Model\Entity\Khi[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class KhisController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $khis = $this->paginate($this->Khis);

        $this->set(compact('khis'));
    }

    /**
     * View method
     *
     * @param string|null $id Khi id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $khi = $this->Khis->get($id, [
            'contain' => [],
        ]);

        $this->set(compact('khi'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $khi = $this->Khis->newEmptyEntity();
        if ($this->request->is('post')) {
            $khi = $this->Khis->patchEntity($khi, $this->request->getData());
            if ($this->Khis->save($khi)) {
                $this->Flash->success(__('The khi has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The khi could not be saved. Please, try again.'));
        }
        $this->set(compact('khi'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Khi id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $khi = $this->Khis->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $khi = $this->Khis->patchEntity($khi, $this->request->getData());
            if ($this->Khis->save($khi)) {
                $this->Flash->success(__('The khi has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The khi could not be saved. Please, try again.'));
        }
        $this->set(compact('khi'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Khi id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $khi = $this->Khis->get($id);
        if ($this->Khis->delete($khi)) {
            $this->Flash->success(__('The khi has been deleted.'));
        } else {
            $this->Flash->error(__('The khi could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
