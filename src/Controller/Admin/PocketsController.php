<?php
declare(strict_types=1);

namespace App\Controller\Admin;

use App\Controller\AppController;

/**
 * Pockets Controller
 *
 * @property \App\Model\Table\PocketsTable $Pockets
 * @method \App\Model\Entity\Pocket[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class PocketsController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $pockets = $this->paginate($this->Pockets);

        $this->set(compact('pockets'));
    }

    /**
     * View method
     *
     * @param string|null $id Pocket id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $pocket = $this->Pockets->get($id, [
            'contain' => [],
        ]);

        $this->set(compact('pocket'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $pocket = $this->Pockets->newEmptyEntity();
        if ($this->request->is('post')) {
            $pocket = $this->Pockets->patchEntity($pocket, $this->request->getData());
            if ($this->Pockets->save($pocket)) {
                $this->Flash->success(__('The pocket has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The pocket could not be saved. Please, try again.'));
        }
        $this->set(compact('pocket'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Pocket id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $pocket = $this->Pockets->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $pocket = $this->Pockets->patchEntity($pocket, $this->request->getData());
            if ($this->Pockets->save($pocket)) {
                $this->Flash->success(__('The pocket has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The pocket could not be saved. Please, try again.'));
        }
        $this->set(compact('pocket'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Pocket id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $pocket = $this->Pockets->get($id);
        if ($this->Pockets->delete($pocket)) {
            $this->Flash->success(__('The pocket has been deleted.'));
        } else {
            $this->Flash->error(__('The pocket could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
