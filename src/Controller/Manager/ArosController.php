<?php
declare(strict_types=1);

namespace App\Controller\Manager;

use App\Controller\AppController;

/**
 * Aros Controller
 *
 * @property \App\Model\Table\ArosTable $Aros
 * @method \App\Model\Entity\Aro[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class ArosController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['ParentAros'],
        ];
        $aros = $this->paginate($this->Aros);

        $this->set(compact('aros'));
    }

    /**
     * View method
     *
     * @param string|null $id Aro id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $aro = $this->Aros->get($id, [
            'contain' => ['ParentAros', 'Acos', 'ChildAros'],
        ]);

        $this->set(compact('aro'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $aro = $this->Aros->newEmptyEntity();
        if ($this->request->is('post')) {
            $aro = $this->Aros->patchEntity($aro, $this->request->getData());
            if ($this->Aros->save($aro)) {
                $this->Flash->success(__('The aro has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The aro could not be saved. Please, try again.'));
        }
        $parentAros = $this->Aros->ParentAros->find('list', ['limit' => 200])->all();
        $acos = $this->Aros->Acos->find('list', ['limit' => 200])->all();
        $this->set(compact('aro', 'parentAros', 'acos'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Aro id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $aro = $this->Aros->get($id, [
            'contain' => ['Acos'],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $aro = $this->Aros->patchEntity($aro, $this->request->getData());
            if ($this->Aros->save($aro)) {
                $this->Flash->success(__('The aro has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The aro could not be saved. Please, try again.'));
        }
        $parentAros = $this->Aros->ParentAros->find('list', ['limit' => 200])->all();
        $acos = $this->Aros->Acos->find('list', ['limit' => 200])->all();
        $this->set(compact('aro', 'parentAros', 'acos'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Aro id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $aro = $this->Aros->get($id);
        if ($this->Aros->delete($aro)) {
            $this->Flash->success(__('The aro has been deleted.'));
        } else {
            $this->Flash->error(__('The aro could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
