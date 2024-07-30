<?php
declare(strict_types=1);

namespace App\Controller\Manager;

use App\Controller\AppController;

/**
 * Aggregates Controller
 *
 * @property \App\Model\Table\AggregatesTable $Aggregates
 * @method \App\Model\Entity\Aggregate[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class AggregatesController extends AppController
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
        $aggregates = $this->paginate($this->Aggregates);

        $this->set(compact('aggregates'));
    }

    /**
     * View method
     *
     * @param string|null $id Aggregate id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $aggregate = $this->Aggregates->get($id, [
            'contain' => ['Users', 'Counties', 'SubCounties', 'Designations', 'Aggregates', 'AggregateListOfSignals'],
        ]);

        $this->set(compact('aggregate'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $aggregate = $this->Aggregates->newEmptyEntity();
        if ($this->request->is('post')) {
            $aggregate = $this->Aggregates->patchEntity($aggregate, $this->request->getData());
            if ($this->Aggregates->save($aggregate)) {
                $this->Flash->success(__('The aggregate has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The aggregate could not be saved. Please, try again.'));
        }
        $users = $this->Aggregates->Users->find('list', ['limit' => 200])->all();
        $counties = $this->Aggregates->Counties->find('list', ['limit' => 200])->all();
        $subCounties = $this->Aggregates->SubCounties->find('list', ['limit' => 200])->all();
        $designations = $this->Aggregates->Designations->find('list', ['limit' => 200])->all();
        $this->set(compact('aggregate', 'users', 'counties', 'subCounties', 'designations'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Aggregate id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $aggregate = $this->Aggregates->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $aggregate = $this->Aggregates->patchEntity($aggregate, $this->request->getData());
            if ($this->Aggregates->save($aggregate)) {
                $this->Flash->success(__('The aggregate has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The aggregate could not be saved. Please, try again.'));
        }
        $users = $this->Aggregates->Users->find('list', ['limit' => 200])->all();
        $counties = $this->Aggregates->Counties->find('list', ['limit' => 200])->all();
        $subCounties = $this->Aggregates->SubCounties->find('list', ['limit' => 200])->all();
        $designations = $this->Aggregates->Designations->find('list', ['limit' => 200])->all();
        $this->set(compact('aggregate', 'users', 'counties', 'subCounties', 'designations'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Aggregate id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $aggregate = $this->Aggregates->get($id);
        if ($this->Aggregates->delete($aggregate)) {
            $this->Flash->success(__('The aggregate has been deleted.'));
        } else {
            $this->Flash->error(__('The aggregate could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
