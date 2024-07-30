<?php
declare(strict_types=1);

namespace App\Controller\Admin;

use App\Controller\AppController;

/**
 * Frequencies Controller
 *
 * @property \App\Model\Table\FrequenciesTable $Frequencies
 * @method \App\Model\Entity\Frequency[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class FrequenciesController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $frequencies = $this->paginate($this->Frequencies);

        $this->set(compact('frequencies'));
    }

    /**
     * View method
     *
     * @param string|null $id Frequency id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $frequency = $this->Frequencies->get($id, [
            'contain' => ['Ce2bListOfDrugs', 'SadrListOfDrugs', 'SadrListOfMedicines'],
        ]);

        $this->set(compact('frequency'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $frequency = $this->Frequencies->newEmptyEntity();
        if ($this->request->is('post')) {
            $frequency = $this->Frequencies->patchEntity($frequency, $this->request->getData());
            if ($this->Frequencies->save($frequency)) {
                $this->Flash->success(__('The frequency has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The frequency could not be saved. Please, try again.'));
        }
        $this->set(compact('frequency'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Frequency id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $frequency = $this->Frequencies->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $frequency = $this->Frequencies->patchEntity($frequency, $this->request->getData());
            if ($this->Frequencies->save($frequency)) {
                $this->Flash->success(__('The frequency has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The frequency could not be saved. Please, try again.'));
        }
        $this->set(compact('frequency'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Frequency id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $frequency = $this->Frequencies->get($id);
        if ($this->Frequencies->delete($frequency)) {
            $this->Flash->success(__('The frequency has been deleted.'));
        } else {
            $this->Flash->error(__('The frequency could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
