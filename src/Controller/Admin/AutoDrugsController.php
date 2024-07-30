<?php
declare(strict_types=1);

namespace App\Controller\Admin;

use App\Controller\AppController;

/**
 * AutoDrugs Controller
 *
 * @property \App\Model\Table\AutoDrugsTable $AutoDrugs
 * @method \App\Model\Entity\AutoDrug[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class AutoDrugsController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $autoDrugs = $this->paginate($this->AutoDrugs);

        $this->set(compact('autoDrugs'));
    }

    /**
     * View method
     *
     * @param string|null $id Auto Drug id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $autoDrug = $this->AutoDrugs->get($id, [
            'contain' => [],
        ]);

        $this->set(compact('autoDrug'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $autoDrug = $this->AutoDrugs->newEmptyEntity();
        if ($this->request->is('post')) {
            $autoDrug = $this->AutoDrugs->patchEntity($autoDrug, $this->request->getData());
            if ($this->AutoDrugs->save($autoDrug)) {
                $this->Flash->success(__('The auto drug has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The auto drug could not be saved. Please, try again.'));
        }
        $this->set(compact('autoDrug'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Auto Drug id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $autoDrug = $this->AutoDrugs->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $autoDrug = $this->AutoDrugs->patchEntity($autoDrug, $this->request->getData());
            if ($this->AutoDrugs->save($autoDrug)) {
                $this->Flash->success(__('The auto drug has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The auto drug could not be saved. Please, try again.'));
        }
        $this->set(compact('autoDrug'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Auto Drug id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $autoDrug = $this->AutoDrugs->get($id);
        if ($this->AutoDrugs->delete($autoDrug)) {
            $this->Flash->success(__('The auto drug has been deleted.'));
        } else {
            $this->Flash->error(__('The auto drug could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
