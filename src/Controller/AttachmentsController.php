<?php

declare(strict_types=1);

namespace App\Controller;

use Cake\Event\EventInterface;
use Cake\Filesystem\File;
use Cake\Http\Client\Response;
use Cake\Http\Exception\NotFoundException;

/**
 * Attachments Controller
 *
 * @property \App\Model\Table\AttachmentsTable $Attachments
 * @method \App\Model\Entity\Attachment[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class AttachmentsController extends AppController
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
        $this->Auth->allow(['add', 'view', 'download']);
    }


    public function download($id = null)
    {
        $attachment = $this->Attachments->get($id);

        if (!$attachment) {
            $this->Flash->error(__('The requested file does not exist!'));
            return $this->redirect($this->referer());
        }

        // Get the directory name and file name from the attachment entity
        $directory = $attachment->dirname;
        $fileName = $attachment->basename;

        // Construct the full file path
        $filePath = ROOT . DS . $directory  . $fileName;

        // Create a File object for the file
        $file = new File($filePath);
        if (!$file->exists()) {
            $this->Flash->error(__('The requested file does not exist!'));
            return $this->redirect($this->referer());
        }

        $response = $this->response->withFile(
            $file->path,
            ['download' => true, 'name' => $attachment->basename]
        );

        return $response;
    }
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $attachments = $this->paginate($this->Attachments);

        $this->set(compact('attachments'));
    }

    /**
     * View method
     *
     * @param string|null $id Attachment id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $attachment = $this->Attachments->get($id, [
            'contain' => [],
        ]);

        $this->set(compact('attachment'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $attachment = $this->Attachments->newEmptyEntity();
        if ($this->request->is('post')) {
            // debug($this->request->getData());
            // exit;
            $attachment = $this->Attachments->patchEntity($attachment, $this->request->getData());
            if ($this->Attachments->save($attachment)) {
                $this->Flash->success(__('The attachment has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            // $errors = $attachment->getErrors();
            // debug($this->request->getData());
            // debug($errors);
            // exit;
            $this->Flash->error(__('The attachment could not be saved. Please, try again.'));
        }
        $this->set(compact('attachment'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Attachment id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $attachment = $this->Attachments->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $attachment = $this->Attachments->patchEntity($attachment, $this->request->getData());
            if ($this->Attachments->save($attachment)) {
                $this->Flash->success(__('The attachment has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The attachment could not be saved. Please, try again.'));
        }
        $this->set(compact('attachment'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Attachment id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $attachment = $this->Attachments->get($id);
        if ($this->Attachments->delete($attachment)) {
            $this->Flash->success(__('The attachment has been deleted.'));
        } else {
            $this->Flash->error(__('The attachment could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
