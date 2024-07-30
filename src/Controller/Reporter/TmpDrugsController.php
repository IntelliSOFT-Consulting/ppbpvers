<?php
declare(strict_types=1);

namespace App\Controller\Reporter;

use App\Controller\AppController;

/**
 * TmpDrugs Controller
 *
 * @property \App\Model\Table\TmpDrugsTable $TmpDrugs
 * @method \App\Model\Entity\TmpDrug[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class TmpDrugsController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $tmpDrugs = $this->paginate($this->TmpDrugs);

        $this->set(compact('tmpDrugs'));
    }

    /**
     * View method
     *
     * @param string|null $id Tmp Drug id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $tmpDrug = $this->TmpDrugs->get($id, [
            'contain' => [],
        ]);

        $this->set(compact('tmpDrug'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $tmpDrug = $this->TmpDrugs->newEmptyEntity();
        if ($this->request->is('post')) {
            $tmpDrug = $this->TmpDrugs->patchEntity($tmpDrug, $this->request->getData());
            if ($this->TmpDrugs->save($tmpDrug)) {
                $this->Flash->success(__('The tmp drug has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The tmp drug could not be saved. Please, try again.'));
        }
        $this->set(compact('tmpDrug'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Tmp Drug id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $tmpDrug = $this->TmpDrugs->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $tmpDrug = $this->TmpDrugs->patchEntity($tmpDrug, $this->request->getData());
            if ($this->TmpDrugs->save($tmpDrug)) {
                $this->Flash->success(__('The tmp drug has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The tmp drug could not be saved. Please, try again.'));
        }
        $this->set(compact('tmpDrug'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Tmp Drug id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $tmpDrug = $this->TmpDrugs->get($id);
        if ($this->TmpDrugs->delete($tmpDrug)) {
            $this->Flash->success(__('The tmp drug has been deleted.'));
        } else {
            $this->Flash->error(__('The tmp drug could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
