<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Ce2bListOfDrugs Controller
 *
 * @property \App\Model\Table\Ce2bListOfDrugsTable $Ce2bListOfDrugs
 * @method \App\Model\Entity\Ce2bListOfDrug[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class Ce2bListOfDrugsController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Ce2bs', 'Doses', 'Routes', 'Frequencies'],
        ];
        $ce2bListOfDrugs = $this->paginate($this->Ce2bListOfDrugs);

        $this->set(compact('ce2bListOfDrugs'));
    }

    /**
     * View method
     *
     * @param string|null $id Ce2b List Of Drug id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $ce2bListOfDrug = $this->Ce2bListOfDrugs->get($id, [
            'contain' => ['Ce2bs', 'Doses', 'Routes', 'Frequencies'],
        ]);

        $this->set(compact('ce2bListOfDrug'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $ce2bListOfDrug = $this->Ce2bListOfDrugs->newEmptyEntity();
        if ($this->request->is('post')) {
            $ce2bListOfDrug = $this->Ce2bListOfDrugs->patchEntity($ce2bListOfDrug, $this->request->getData());
            if ($this->Ce2bListOfDrugs->save($ce2bListOfDrug)) {
                $this->Flash->success(__('The ce2b list of drug has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The ce2b list of drug could not be saved. Please, try again.'));
        }
        $ce2bs = $this->Ce2bListOfDrugs->Ce2bs->find('list', ['limit' => 200])->all();
        $doses = $this->Ce2bListOfDrugs->Doses->find('list', ['limit' => 200])->all();
        $routes = $this->Ce2bListOfDrugs->Routes->find('list', ['limit' => 200])->all();
        $frequencies = $this->Ce2bListOfDrugs->Frequencies->find('list', ['limit' => 200])->all();
        $this->set(compact('ce2bListOfDrug', 'ce2bs', 'doses', 'routes', 'frequencies'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Ce2b List Of Drug id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $ce2bListOfDrug = $this->Ce2bListOfDrugs->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $ce2bListOfDrug = $this->Ce2bListOfDrugs->patchEntity($ce2bListOfDrug, $this->request->getData());
            if ($this->Ce2bListOfDrugs->save($ce2bListOfDrug)) {
                $this->Flash->success(__('The ce2b list of drug has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The ce2b list of drug could not be saved. Please, try again.'));
        }
        $ce2bs = $this->Ce2bListOfDrugs->Ce2bs->find('list', ['limit' => 200])->all();
        $doses = $this->Ce2bListOfDrugs->Doses->find('list', ['limit' => 200])->all();
        $routes = $this->Ce2bListOfDrugs->Routes->find('list', ['limit' => 200])->all();
        $frequencies = $this->Ce2bListOfDrugs->Frequencies->find('list', ['limit' => 200])->all();
        $this->set(compact('ce2bListOfDrug', 'ce2bs', 'doses', 'routes', 'frequencies'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Ce2b List Of Drug id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $ce2bListOfDrug = $this->Ce2bListOfDrugs->get($id);
        if ($this->Ce2bListOfDrugs->delete($ce2bListOfDrug)) {
            $this->Flash->success(__('The ce2b list of drug has been deleted.'));
        } else {
            $this->Flash->error(__('The ce2b list of drug could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
