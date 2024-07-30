<?php
declare(strict_types=1);

namespace App\Controller\Admin;

use App\Controller\AppController;

/**
 * Authorities Controller
 *
 * @property \App\Model\Table\AuthoritiesTable $Authorities
 * @method \App\Model\Entity\Authority[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class AuthoritiesController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $authorities = $this->paginate($this->Authorities);

        $this->set(compact('authorities'));
    }

    /**
     * View method
     *
     * @param string|null $id Authority id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $authority = $this->Authorities->get($id, [
            'contain' => [],
        ]);

        $this->set(compact('authority'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $authority = $this->Authorities->newEmptyEntity();
        if ($this->request->is('post')) {
            $authority = $this->Authorities->patchEntity($authority, $this->request->getData());
            if ($this->Authorities->save($authority)) {
                $this->Flash->success(__('The authority has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The authority could not be saved. Please, try again.'));
        }
        $this->set(compact('authority'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Authority id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $authority = $this->Authorities->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $authority = $this->Authorities->patchEntity($authority, $this->request->getData());
            if ($this->Authorities->save($authority)) {
                $this->Flash->success(__('The authority has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The authority could not be saved. Please, try again.'));
        }
        $this->set(compact('authority'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Authority id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $authority = $this->Authorities->get($id);
        if ($this->Authorities->delete($authority)) {
            $this->Flash->success(__('The authority has been deleted.'));
        } else {
            $this->Flash->error(__('The authority could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
