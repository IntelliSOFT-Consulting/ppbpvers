<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * AggregateListOfSignals Controller
 *
 * @property \App\Model\Table\AggregateListOfSignalsTable $AggregateListOfSignals
 * @method \App\Model\Entity\AggregateListOfSignal[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class AggregateListOfSignalsController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Aggregates'],
        ];
        $aggregateListOfSignals = $this->paginate($this->AggregateListOfSignals);

        $this->set(compact('aggregateListOfSignals'));
    }

    /**
     * View method
     *
     * @param string|null $id Aggregate List Of Signal id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $aggregateListOfSignal = $this->AggregateListOfSignals->get($id, [
            'contain' => ['Aggregates'],
        ]);

        $this->set(compact('aggregateListOfSignal'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $aggregateListOfSignal = $this->AggregateListOfSignals->newEmptyEntity();
        if ($this->request->is('post')) {
            $aggregateListOfSignal = $this->AggregateListOfSignals->patchEntity($aggregateListOfSignal, $this->request->getData());
            if ($this->AggregateListOfSignals->save($aggregateListOfSignal)) {
                $this->Flash->success(__('The aggregate list of signal has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The aggregate list of signal could not be saved. Please, try again.'));
        }
        $aggregates = $this->AggregateListOfSignals->Aggregates->find('list', ['limit' => 200])->all();
        $this->set(compact('aggregateListOfSignal', 'aggregates'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Aggregate List Of Signal id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $aggregateListOfSignal = $this->AggregateListOfSignals->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $aggregateListOfSignal = $this->AggregateListOfSignals->patchEntity($aggregateListOfSignal, $this->request->getData());
            if ($this->AggregateListOfSignals->save($aggregateListOfSignal)) {
                $this->Flash->success(__('The aggregate list of signal has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The aggregate list of signal could not be saved. Please, try again.'));
        }
        $aggregates = $this->AggregateListOfSignals->Aggregates->find('list', ['limit' => 200])->all();
        $this->set(compact('aggregateListOfSignal', 'aggregates'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Aggregate List Of Signal id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $aggregateListOfSignal = $this->AggregateListOfSignals->get($id);
        if ($this->AggregateListOfSignals->delete($aggregateListOfSignal)) {
            $this->Flash->success(__('The aggregate list of signal has been deleted.'));
        } else {
            $this->Flash->error(__('The aggregate list of signal could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
