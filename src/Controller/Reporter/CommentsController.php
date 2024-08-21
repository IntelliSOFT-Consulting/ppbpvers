<?php

declare(strict_types=1);

namespace App\Controller\Reporter;

use App\Controller\AppController;
use Cake\Filesystem\File;
use Cake\ORM\TableRegistry;
use Cake\Routing\Router;
use Cake\Utility\Text;
use Cake\View\Helper\HtmlHelper;

/**
 * Comments Controller
 *
 * @property \App\Model\Table\CommentsTable $Comments
 * @method \App\Model\Entity\Comment[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class CommentsController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Users'],
        ];
        $comments = $this->paginate($this->Comments);

        $this->set(compact('comments'));
    }

    /**
     * View method
     *
     * @param string|null $id Comment id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $comment = $this->Comments->get($id, [
            'contain' => ['Users'],
        ]);

        $this->set(compact('comment'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $comment = $this->Comments->newEmptyEntity();
        if ($this->request->is('post')) {
            $data = $this->request->getData();

            $comment = $this->Comments->patchEntity($comment, $data, [
                'associated' => [
                    'Attachments',
                ]
            ]);
            if ($this->Comments->save($comment)) {


                // ******** Prepare Message*********
                $model = $data['model'];

                $html = new HtmlHelper(new \Cake\View\View());

                $message = $this->Messages->find()
                    ->where(['name' => 'report_feedback'])
                    ->first();
                // $referenceLink = Router::url([
                //     'controller' => 'sadrs',
                //     'action' => 'view',
                //     $sadr['id'],
                //     'reporter' => true
                // ], true);
                $table = TableRegistry::getTableLocator()->get($model);
                $entity = $table->find()
                    ->where(['id' => $data['foreign_key']])
                    ->contain([])
                    ->first();
                $usersTable = TableRegistry::getTableLocator()->get('users'); // Assuming 'Users' is the model for the users table
 
                // Query the users
                $users = $usersTable->find()
                    ->where([
                        'OR' => [
                            ['id' => $entity['user_id'], 'is_active' => '1'],
                            ['role_id' => 2, 'is_active' => '1']
                        ]
                    ])
                    ->contain([]) // No associated data (equivalent to 'contain' => array() in 2.x)
                    ->all(); // Get all matching records

                // If you want to convert the result to an array, you can use:
                $usersArray = $users->toArray(); 
                foreach ($users as $user) {
                    if ($data['category'] === 'review') {
                    } 
                    else {
                        $actioner = ($user['role_id'] == 2) ? 'manager' : 'reporter';
                        $variables = array(
                            'name' => $user['name'],
                            'reference_no' => $entity['reference_no'],
                            'comment_subject' => $data['subject'],
                            'comment_content' => $data['content'],
                            'reference_link' => $html->link(
                                $entity['reference_no'],
                                array('controller' => 'sadrs', 'action' => 'view', $entity['id'], $actioner => true, 'full_base' => true),
                                array('escape' => false)
                            ),
                        );
                        $datum = array(
                            'email' => $user['email'],
                            'id' => $data['foreign_key'],
                            'user_id' => $user['id'],
                            'type' => 'report_feedback',
                            'model' => $model,
                            'subject' => Text::insert($message['subject'], $variables),
                            'message' => Text::insert($message['content'], $variables)
                        ); 
                        $this->QueuedJobs->createJob('GenericEmail', $datum);
                        $this->QueuedJobs->createJob('GenericNotification', $datum);
                    }
                }



                // ********End of Message **********
                $this->Flash->success(__('The comment has been saved ans sent to the managers'));

                return  $this->redirect($this->referer());
            }
            $errors = $comment->getErrors();
            $this->Flash->error(__('The comment could not be saved. Please, try again.'));
            $this->Flash->error(__(json_encode($errors)));
            return  $this->redirect($this->referer());
        }
        $users = $this->Comments->Users->find('list', ['limit' => 200])->all();
        $this->set(compact('comment', 'users'));
    }
    public function commentFileDownload($id = null)
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
     * Edit method
     *
     * @param string|null $id Comment id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $comment = $this->Comments->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $comment = $this->Comments->patchEntity($comment, $this->request->getData());
            if ($this->Comments->save($comment)) {
                $this->Flash->success(__('The comment has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The comment could not be saved. Please, try again.'));
        }
        $users = $this->Comments->Users->find('list', ['limit' => 200])->all();
        $this->set(compact('comment', 'users'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Comment id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $comment = $this->Comments->get($id);
        if ($this->Comments->delete($comment)) {
            $this->Flash->success(__('The comment has been deleted.'));
        } else {
            $this->Flash->error(__('The comment could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
