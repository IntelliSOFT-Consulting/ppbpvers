<?php
declare(strict_types=1);

namespace App\Controller\Manager;

use App\Controller\AppController;

/**
 * Saefis Controller
 *
 * @property \App\Model\Table\SaefisTable $Saefis
 * @method \App\Model\Entity\Saefi[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class SaefisController extends AppController
{

    public $page_options = array('5' => '5', '10' => '10', '25' => '25', '50' => '50', '100' => '100');
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    { 
    
        $limit = $this->request->getQuery('pages', 1000); // Default to 10 if 'pages' is not set
       
        $this->paginate = [
            'contain' => [],
            'limit'=>$limit
        
        ]; 
        $saefis = $this->paginate($this->Saefis->find('search', ['search' => $this->request->getQuery()]));
        $this->set('page_options', $this->page_options);
        $this->set(compact('saefis'));
    }

    /**
     * View method
     *
     * @param string|null $id Saefi id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $saefi = $this->Saefis->get($id, [
            'contain' => ['Users', 'Designations', 'Saefis', 'AefiListOfVaccines', 'Reviews'],
        ]);

        $this->set(compact('saefi'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $saefi = $this->Saefis->newEmptyEntity();
        if ($this->request->is('post')) {
            $saefi = $this->Saefis->patchEntity($saefi, $this->request->getData());
            if ($this->Saefis->save($saefi)) {
                $this->Flash->success(__('The saefi has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The saefi could not be saved. Please, try again.'));
        }
        $users = $this->Saefis->Users->find('list', ['limit' => 200])->all();
        $designations = $this->Saefis->Designations->find('list', ['limit' => 200])->all();
        $this->set(compact('saefi', 'users', 'designations'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Saefi id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $saefi = $this->Saefis->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $saefi = $this->Saefis->patchEntity($saefi, $this->request->getData());
            if ($this->Saefis->save($saefi)) {
                $this->Flash->success(__('The saefi has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The saefi could not be saved. Please, try again.'));
        }
        $users = $this->Saefis->Users->find('list', ['limit' => 200])->all();
        $designations = $this->Saefis->Designations->find('list', ['limit' => 200])->all();
        $this->set(compact('saefi', 'users', 'designations'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Saefi id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $saefi = $this->Saefis->get($id);
        if ($this->Saefis->delete($saefi)) {
            $this->Flash->success(__('The saefi has been deleted.'));
        } else {
            $this->Flash->error(__('The saefi could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
