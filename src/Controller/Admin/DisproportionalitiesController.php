<?php
declare(strict_types=1);

namespace App\Controller\Admin;

use App\Controller\AppController;

/**
 * Disproportionalities Controller
 *
 * @property \App\Model\Table\DisproportionalitiesTable $Disproportionalities
 * @method \App\Model\Entity\Disproportionality[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class DisproportionalitiesController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $disproportionalities = $this->paginate($this->Disproportionalities);

        $this->set(compact('disproportionalities'));
    }

    /**
     * View method
     *
     * @param string|null $id Disproportionality id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $disproportionality = $this->Disproportionalities->get($id, [
            'contain' => [],
        ]);

        $this->set(compact('disproportionality'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $disproportionality = $this->Disproportionalities->newEmptyEntity();
        if ($this->request->is('post')) {
            $disproportionality = $this->Disproportionalities->patchEntity($disproportionality, $this->request->getData());
            if ($this->Disproportionalities->save($disproportionality)) {
                $this->Flash->success(__('The disproportionality has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The disproportionality could not be saved. Please, try again.'));
        }
        $this->set(compact('disproportionality'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Disproportionality id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $disproportionality = $this->Disproportionalities->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $disproportionality = $this->Disproportionalities->patchEntity($disproportionality, $this->request->getData());
            if ($this->Disproportionalities->save($disproportionality)) {
                $this->Flash->success(__('The disproportionality has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The disproportionality could not be saved. Please, try again.'));
        }
        $this->set(compact('disproportionality'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Disproportionality id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $disproportionality = $this->Disproportionalities->get($id);
        if ($this->Disproportionalities->delete($disproportionality)) {
            $this->Flash->success(__('The disproportionality has been deleted.'));
        } else {
            $this->Flash->error(__('The disproportionality could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
