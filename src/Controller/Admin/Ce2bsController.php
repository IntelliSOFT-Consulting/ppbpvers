<?php
declare(strict_types=1);

namespace App\Controller\Admin;

use App\Controller\AppController;

/**
 * Ce2bs Controller
 *
 * @property \App\Model\Table\Ce2bsTable $Ce2bs
 * @method \App\Model\Entity\Ce2b[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class Ce2bsController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Users', 'Counties', 'SubCounties', 'Designations'],
        ];
        $ce2bs = $this->paginate($this->Ce2bs);

        $this->set(compact('ce2bs'));
    }

    /**
     * View method
     *
     * @param string|null $id Ce2b id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $ce2b = $this->Ce2bs->get($id, [
            'contain' => ['Users', 'Counties', 'SubCounties', 'Designations', 'Ce2bs', 'Ce2bListOfDrugs', 'Ce2bReaction'],
        ]);

        $this->set(compact('ce2b'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $ce2b = $this->Ce2bs->newEmptyEntity();
        if ($this->request->is('post')) {
            $ce2b = $this->Ce2bs->patchEntity($ce2b, $this->request->getData());
            if ($this->Ce2bs->save($ce2b)) {
                $this->Flash->success(__('The ce2b has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The ce2b could not be saved. Please, try again.'));
        }
        $users = $this->Ce2bs->Users->find('list', ['limit' => 200])->all();
        $counties = $this->Ce2bs->Counties->find('list', ['limit' => 200])->all();
        $subCounties = $this->Ce2bs->SubCounties->find('list', ['limit' => 200])->all();
        $designations = $this->Ce2bs->Designations->find('list', ['limit' => 200])->all();
        $this->set(compact('ce2b', 'users', 'counties', 'subCounties', 'designations'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Ce2b id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $ce2b = $this->Ce2bs->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $ce2b = $this->Ce2bs->patchEntity($ce2b, $this->request->getData());
            if ($this->Ce2bs->save($ce2b)) {
                $this->Flash->success(__('The ce2b has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The ce2b could not be saved. Please, try again.'));
        }
        $users = $this->Ce2bs->Users->find('list', ['limit' => 200])->all();
        $counties = $this->Ce2bs->Counties->find('list', ['limit' => 200])->all();
        $subCounties = $this->Ce2bs->SubCounties->find('list', ['limit' => 200])->all();
        $designations = $this->Ce2bs->Designations->find('list', ['limit' => 200])->all();
        $this->set(compact('ce2b', 'users', 'counties', 'subCounties', 'designations'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Ce2b id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $ce2b = $this->Ce2bs->get($id);
        if ($this->Ce2bs->delete($ce2b)) {
            $this->Flash->success(__('The ce2b has been deleted.'));
        } else {
            $this->Flash->error(__('The ce2b could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
