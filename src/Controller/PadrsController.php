<?php

declare(strict_types=1);

namespace App\Controller;

use Cake\Event\EventInterface;
use Cake\Utility\Security;

/**
 * Padrs Controller
 *
 * @property \App\Model\Table\PadrsTable $Padrs
 * @method \App\Model\Entity\Padr[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class PadrsController extends AppController
{


    public function initialize(): void
    {
        parent::initialize();
        $this->loadComponent('Paginator');
        $this->Auth->allow('add');
    }
    public function beforeFilter(EventInterface $event): void
    {
        parent::beforeFilter($event);
        $this->Auth->allow([
            'add',
            'view'
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
            'contain' => ['Users', 'Counties', 'SubCounties', 'Designations'],
        ];
        $padrs = $this->paginate($this->Padrs);

        $this->set(compact('padrs'));
    }

    /**
     * View method
     *
     * @param string|null $id Padr id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $padr = $this->Padrs->find('all', [
            'contain' => ['Users', 'Counties', 'SubCounties', 'Designations', 'Padrs', 'PadrListOfMedicines'],
            'conditions' => ['Padrs.token' => $id] // Replace 'other_column' with the actual column name
        ])->firstOrFail();
        // 
        $this->set(compact('padr'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $padr = $this->Padrs->newEmptyEntity();
        if ($this->request->is('post')) {
           

            $padr = $this->Padrs->patchEntity($padr, $this->request->getData(), [
                'associated' => ['PadrListOfMedicines', 'Attachments']
            ]);
             // debug($this->request->getData());
            // debug($padr);
            // exit;
            if ($this->Padrs->save($padr)) {

                $token = Security::hash(strval($padr['id']));
                $dataTable = $this->getTableLocator()->get('padrs');
                // Update the field using the query builder
                $result = $dataTable->query()
                    ->update()
                    ->set(['token' => $token])
                    ->where(['id' => $padr['id']])
                    ->execute();

                $this->Flash->success(__('The padr has been saved.'));

                return $this->redirect(['action' => 'view', $token]);
            }
            // $errors = $padr->getErrors();
            // debug($this->request->getData());
            // debug($errors);
            // exit;
            $this->Flash->error(__('The padr could not be saved. Please, try again.'));
        }
        $users = $this->Padrs->Users->find('list', ['limit' => 200])->all();
        $counties = $this->Padrs->Counties->find('list', ['limit' => 200])->all(); 
        $designations = $this->Padrs->Designations->find('list', ['limit' => 200])->all();
        $this->set(compact('padr', 'users', 'counties', 'designations'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Padr id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $padr = $this->Padrs->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $padr = $this->Padrs->patchEntity($padr, $this->request->getData());
            if ($this->Padrs->save($padr)) {
                $this->Flash->success(__('The padr has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The padr could not be saved. Please, try again.'));
        }
        $users = $this->Padrs->Users->find('list', ['limit' => 200])->all();
        $counties = $this->Padrs->Counties->find('list', ['limit' => 200])->all();
        $subCounties = $this->Padrs->SubCounties->find('list', ['limit' => 200])->all();
        $designations = $this->Padrs->Designations->find('list', ['limit' => 200])->all();
        $this->set(compact('padr', 'users', 'counties', 'subCounties', 'designations'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Padr id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $padr = $this->Padrs->get($id);
        if ($this->Padrs->delete($padr)) {
            $this->Flash->success(__('The padr has been deleted.'));
        } else {
            $this->Flash->error(__('The padr could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
