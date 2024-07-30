<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * ArosAcos Controller
 *
 * @property \App\Model\Table\ArosAcosTable $ArosAcos
 * @method \App\Model\Entity\ArosAco[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class ArosAcosController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Aros', 'Acos'],
        ];
        $arosAcos = $this->paginate($this->ArosAcos);

        $this->set(compact('arosAcos'));
    }

    /**
     * View method
     *
     * @param string|null $id Aros Aco id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $arosAco = $this->ArosAcos->get($id, [
            'contain' => ['Aros', 'Acos'],
        ]);

        $this->set(compact('arosAco'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $arosAco = $this->ArosAcos->newEmptyEntity();
        if ($this->request->is('post')) {
            $arosAco = $this->ArosAcos->patchEntity($arosAco, $this->request->getData());
            if ($this->ArosAcos->save($arosAco)) {
                $this->Flash->success(__('The aros aco has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The aros aco could not be saved. Please, try again.'));
        }
        $aros = $this->ArosAcos->Aros->find('list', ['limit' => 200])->all();
        $acos = $this->ArosAcos->Acos->find('list', ['limit' => 200])->all();
        $this->set(compact('arosAco', 'aros', 'acos'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Aros Aco id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $arosAco = $this->ArosAcos->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $arosAco = $this->ArosAcos->patchEntity($arosAco, $this->request->getData());
            if ($this->ArosAcos->save($arosAco)) {
                $this->Flash->success(__('The aros aco has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The aros aco could not be saved. Please, try again.'));
        }
        $aros = $this->ArosAcos->Aros->find('list', ['limit' => 200])->all();
        $acos = $this->ArosAcos->Acos->find('list', ['limit' => 200])->all();
        $this->set(compact('arosAco', 'aros', 'acos'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Aros Aco id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $arosAco = $this->ArosAcos->get($id);
        if ($this->ArosAcos->delete($arosAco)) {
            $this->Flash->success(__('The aros aco has been deleted.'));
        } else {
            $this->Flash->error(__('The aros aco could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
