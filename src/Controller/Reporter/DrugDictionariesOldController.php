<?php
declare(strict_types=1);

namespace App\Controller\Reporter;

use App\Controller\AppController;

/**
 * DrugDictionariesOld Controller
 *
 * @property \App\Model\Table\DrugDictionariesOldTable $DrugDictionariesOld
 * @method \App\Model\Entity\DrugDictionariesOld[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class DrugDictionariesOldController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $drugDictionariesOld = $this->paginate($this->DrugDictionariesOld);

        $this->set(compact('drugDictionariesOld'));
    }

    /**
     * View method
     *
     * @param string|null $id Drug Dictionaries Old id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $drugDictionariesOld = $this->DrugDictionariesOld->get($id, [
            'contain' => [],
        ]);

        $this->set(compact('drugDictionariesOld'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $drugDictionariesOld = $this->DrugDictionariesOld->newEmptyEntity();
        if ($this->request->is('post')) {
            $drugDictionariesOld = $this->DrugDictionariesOld->patchEntity($drugDictionariesOld, $this->request->getData());
            if ($this->DrugDictionariesOld->save($drugDictionariesOld)) {
                $this->Flash->success(__('The drug dictionaries old has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The drug dictionaries old could not be saved. Please, try again.'));
        }
        $this->set(compact('drugDictionariesOld'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Drug Dictionaries Old id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $drugDictionariesOld = $this->DrugDictionariesOld->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $drugDictionariesOld = $this->DrugDictionariesOld->patchEntity($drugDictionariesOld, $this->request->getData());
            if ($this->DrugDictionariesOld->save($drugDictionariesOld)) {
                $this->Flash->success(__('The drug dictionaries old has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The drug dictionaries old could not be saved. Please, try again.'));
        }
        $this->set(compact('drugDictionariesOld'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Drug Dictionaries Old id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $drugDictionariesOld = $this->DrugDictionariesOld->get($id);
        if ($this->DrugDictionariesOld->delete($drugDictionariesOld)) {
            $this->Flash->success(__('The drug dictionaries old has been deleted.'));
        } else {
            $this->Flash->error(__('The drug dictionaries old could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
