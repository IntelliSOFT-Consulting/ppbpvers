<?php
declare(strict_types=1);

namespace App\Controller\Admin;

use App\Controller\AppController;

/**
 * AttachmentsOld Controller
 *
 * @property \App\Model\Table\AttachmentsOldTable $AttachmentsOld
 * @method \App\Model\Entity\AttachmentsOld[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class AttachmentsOldController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Sadrs', 'SadrFollowups', 'Pqmps', 'Aefis', 'Devices', 'Transfusions', 'Medications'],
        ];
        $attachmentsOld = $this->paginate($this->AttachmentsOld);

        $this->set(compact('attachmentsOld'));
    }

    /**
     * View method
     *
     * @param string|null $id Attachments Old id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $attachmentsOld = $this->AttachmentsOld->get($id, [
            'contain' => ['Sadrs', 'SadrFollowups', 'Pqmps', 'Aefis', 'Devices', 'Transfusions', 'Medications'],
        ]);

        $this->set(compact('attachmentsOld'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $attachmentsOld = $this->AttachmentsOld->newEmptyEntity();
        if ($this->request->is('post')) {
            $attachmentsOld = $this->AttachmentsOld->patchEntity($attachmentsOld, $this->request->getData());
            if ($this->AttachmentsOld->save($attachmentsOld)) {
                $this->Flash->success(__('The attachments old has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The attachments old could not be saved. Please, try again.'));
        }
        $sadrs = $this->AttachmentsOld->Sadrs->find('list', ['limit' => 200])->all();
        $sadrFollowups = $this->AttachmentsOld->SadrFollowups->find('list', ['limit' => 200])->all();
        $pqmps = $this->AttachmentsOld->Pqmps->find('list', ['limit' => 200])->all();
        $aefis = $this->AttachmentsOld->Aefis->find('list', ['limit' => 200])->all();
        $devices = $this->AttachmentsOld->Devices->find('list', ['limit' => 200])->all();
        $transfusions = $this->AttachmentsOld->Transfusions->find('list', ['limit' => 200])->all();
        $medications = $this->AttachmentsOld->Medications->find('list', ['limit' => 200])->all();
        $this->set(compact('attachmentsOld', 'sadrs', 'sadrFollowups', 'pqmps', 'aefis', 'devices', 'transfusions', 'medications'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Attachments Old id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $attachmentsOld = $this->AttachmentsOld->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $attachmentsOld = $this->AttachmentsOld->patchEntity($attachmentsOld, $this->request->getData());
            if ($this->AttachmentsOld->save($attachmentsOld)) {
                $this->Flash->success(__('The attachments old has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The attachments old could not be saved. Please, try again.'));
        }
        $sadrs = $this->AttachmentsOld->Sadrs->find('list', ['limit' => 200])->all();
        $sadrFollowups = $this->AttachmentsOld->SadrFollowups->find('list', ['limit' => 200])->all();
        $pqmps = $this->AttachmentsOld->Pqmps->find('list', ['limit' => 200])->all();
        $aefis = $this->AttachmentsOld->Aefis->find('list', ['limit' => 200])->all();
        $devices = $this->AttachmentsOld->Devices->find('list', ['limit' => 200])->all();
        $transfusions = $this->AttachmentsOld->Transfusions->find('list', ['limit' => 200])->all();
        $medications = $this->AttachmentsOld->Medications->find('list', ['limit' => 200])->all();
        $this->set(compact('attachmentsOld', 'sadrs', 'sadrFollowups', 'pqmps', 'aefis', 'devices', 'transfusions', 'medications'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Attachments Old id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $attachmentsOld = $this->AttachmentsOld->get($id);
        if ($this->AttachmentsOld->delete($attachmentsOld)) {
            $this->Flash->success(__('The attachments old has been deleted.'));
        } else {
            $this->Flash->error(__('The attachments old could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
