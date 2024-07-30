<?php
declare(strict_types=1);

namespace App\Controller\Reporter;

use App\Controller\AppController;

/**
 * Saes Controller
 *
 * @property \App\Model\Table\SaesTable $Saes
 * @method \App\Model\Entity\Sae[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class SaesController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Users', 'Countries'],
        ];
        $saes = $this->paginate($this->Saes);

        $this->set(compact('saes'));
    }

    /**
     * View method
     *
     * @param string|null $id Sae id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $sae = $this->Saes->get($id, [
            'contain' => ['Users', 'Countries', 'Saes', 'ConcomittantDrugs', 'SuspectedDrugs'],
        ]);

        $this->set(compact('sae'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $sae = $this->Saes->newEmptyEntity();
        if ($this->request->is('post')) {
            $sae = $this->Saes->patchEntity($sae, $this->request->getData());
            if ($this->Saes->save($sae)) {
                $this->Flash->success(__('The sae has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The sae could not be saved. Please, try again.'));
        }
        $users = $this->Saes->Users->find('list', ['limit' => 200])->all();
        $countries = $this->Saes->Countries->find('list', ['limit' => 200])->all();
        $this->set(compact('sae', 'users', 'countries'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Sae id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $sae = $this->Saes->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $sae = $this->Saes->patchEntity($sae, $this->request->getData());
            if ($this->Saes->save($sae)) {
                $this->Flash->success(__('The sae has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The sae could not be saved. Please, try again.'));
        }
        $users = $this->Saes->Users->find('list', ['limit' => 200])->all();
        $countries = $this->Saes->Countries->find('list', ['limit' => 200])->all();
        $this->set(compact('sae', 'users', 'countries'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Sae id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $sae = $this->Saes->get($id);
        if ($this->Saes->delete($sae)) {
            $this->Flash->success(__('The sae has been deleted.'));
        } else {
            $this->Flash->error(__('The sae could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
