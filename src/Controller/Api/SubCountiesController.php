<?php

declare(strict_types=1);

namespace App\Controller\Api;

use App\Controller\AppController;
use Cake\Event\EventInterface;
use Cake\Http\Exception\NotFoundException;

/**
 * SubCounties Controller
 *
 * @property \App\Model\Table\SubCountiesTable $SubCounties
 * @method \App\Model\Entity\SubCounty[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class SubCountiesController extends AppController
{

    public function beforeFilter(EventInterface $event): void
    {
        parent::beforeFilter($event);
        $this->Auth->allow('autocomplete');
    }

    public function autocomplete()
    {

        $term = $this->request->getQuery('county');
        $subCounties = $this->SubCounties->find()
            ->where(['SubCounties.county_id' => $term])
            ->all();

        if ($subCounties->isEmpty()) {
            throw new NotFoundException(__('No sub-counties found for the selected county.'));
        }

        // Prepare data for JSON response
        $subCountiesList = [];
        foreach ($subCounties as $subCounty) {
            $subCountiesList[] = [
                'id' => $subCounty->id,
                'name' => $subCounty->sub_county_name
            ];
        }

        $this->set([
            'codes' => $subCountiesList,
            '_serialize' => ['codes']
        ]);
    }
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Counties'],
        ];
        $subCounties = $this->paginate($this->SubCounties);

        $this->set(compact('subCounties'));
    }

    /**
     * View method
     *
     * @param string|null $id Sub County id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $subCounty = $this->SubCounties->get($id, [
            'contain' => ['Counties', 'Aefis', 'Aggregates', 'Ce2bs', 'Padrs', 'Pqmps', 'Sadrs'],
        ]);

        $this->set(compact('subCounty'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $subCounty = $this->SubCounties->newEmptyEntity();
        if ($this->request->is('post')) {
            $subCounty = $this->SubCounties->patchEntity($subCounty, $this->request->getData());
            if ($this->SubCounties->save($subCounty)) {
                $this->Flash->success(__('The sub county has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The sub county could not be saved. Please, try again.'));
        }
        $counties = $this->SubCounties->Counties->find('list', ['limit' => 200])->all();
        $this->set(compact('subCounty', 'counties'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Sub County id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $subCounty = $this->SubCounties->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $subCounty = $this->SubCounties->patchEntity($subCounty, $this->request->getData());
            if ($this->SubCounties->save($subCounty)) {
                $this->Flash->success(__('The sub county has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The sub county could not be saved. Please, try again.'));
        }
        $counties = $this->SubCounties->Counties->find('list', ['limit' => 200])->all();
        $this->set(compact('subCounty', 'counties'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Sub County id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $subCounty = $this->SubCounties->get($id);
        if ($this->SubCounties->delete($subCounty)) {
            $this->Flash->success(__('The sub county has been deleted.'));
        } else {
            $this->Flash->error(__('The sub county could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
