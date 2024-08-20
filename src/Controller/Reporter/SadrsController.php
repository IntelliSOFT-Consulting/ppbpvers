<?php

declare(strict_types=1);

namespace App\Controller\Reporter;

use App\Controller\AppController;
use Cake\I18n\FrozenTime;
use Cake\Routing\Router;
use Cake\Utility\Text;
use Cake\View\Helper\HtmlHelper;

/**
 * Sadrs Controller
 *
 * @property \App\Model\Table\SadrsTable $Sadrs
 * @method \App\Model\Entity\Sadr[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class SadrsController extends AppController
{
    public $page_options = array('25' => '25', '50' => '50', '100' => '100');
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $criteria = array();

        $criteria['Sadrs.user_id'] = $this->Auth->user('id');
        $this->paginate = [
            'contain' => ['Users', 'Pqmps', 'Medications', 'Counties', 'SubCounties', 'Designations'],
            'conditions' => $criteria
        ];
        $sadrs = $this->paginate($this->Sadrs);
        $this->set('page_options', $this->page_options);
        $this->set(compact('sadrs'));
    }

    /**
     * View method
     *
     * @param string|null $id Sadr id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $sadr = $this->Sadrs->get($id, [
            'contain' => ['Users', 'Pqmps', 'ExternalComment', 'Medications', 'Counties', 'Attachments', 'SubCounties', 'Designations', 'Sadrs', 'SadrDescriptions', 'SadrFollowups', 'SadrListOfDrugs', 'SadrListOfMedicines', 'SadrReaction'],
        ]);

        // debug($sadr);
        // exit;
        $this->set(compact('sadr'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add($id = null)
    {
        $sadr = $this->Sadrs->newEmptyEntity();
        $data = array(
            'user_id' => $this->Auth->User('id'),
            'reference_no' => 'new',
            'report_type' => 'Initial',
            'pqmp_id' => $id,
            'medication_id' => $id,
            'designation_id' => $this->Auth->User('designation_id'),
            'county_id' => $this->Auth->User('county_id'),
            'institution_code' => $this->Auth->User('institution_code'),
            'address' => $this->Auth->User('institution_address'),
            'reporter_name' => $this->Auth->User('name'),
            'reporter_email' => $this->Auth->User('email'),
            'reporter_phone' => $this->Auth->User('phone_no'),
            'contact' => $this->Auth->User('institution_contact'),
            'name_of_institution' => $this->Auth->User('name_of_institution')
        );

        $sadr = $this->Sadrs->patchEntity($sadr, $data);
        $this->Sadrs->save($sadr);
        $this->Flash->success(__('The sadr has been saved.'));
        $this->redirect(array('action' => 'edit', $sadr->id));
    }


    /**
     * Edit method
     *
     * @param string|null $id Sadr id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $sadr = $this->Sadrs->get($id, [
            'contain' => ['Attachments', 'SadrReaction'],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {

            $validate = false;
            if (!empty($this->request->getData('submitReport'))) {
                $validate = 'first';
                // debug("submitting....");
            }

            $sadr = $this->Sadrs->patchEntity($sadr, $this->request->getData(), [
                'associated' => [
                    'Attachments',
                    'SadrReaction'
                ]
            ]);
            // debug($this->request->getData());
            // debug($sadr);
            // exit; 
            if ($this->Sadrs->save($sadr, array('validate' => $validate, 'deep' => true))) {

                //      debug($sadr);
                // exit; 
                if (!empty($this->request->getData('submitReport'))) {
                    $sadr = $this->Sadrs->get($id, [
                        'contain' => ['Attachments', 'SadrReaction'],
                    ]);
                    $dataTable = $this->getTableLocator()->get('sadrs');
                    // Update the field using the query builder
                    $result = $dataTable->query()
                        ->update()
                        ->set([
                            'submitted' => 2,
                            'submitted_date' => date("Y-m-d H:i:s"),
                        ])
                        ->where(['id' => $id])
                        ->execute();

                    if (!empty($sadr['reference_no']) && $sadr['reference_no'] == 'new') {


                        $startDate = new FrozenTime(date("Y-01-01 00:00:00"));
                        $endDate = new FrozenTime(date("Y-m-d H:i:s"));

                        $count = $this->Sadrs->find()
                            ->where([
                                'Sadrs.submitted_date BETWEEN :start AND :end',
                                'Sadrs.reference_no !=' => 'new'
                            ])
                            ->bind(':start', $startDate->format('Y-m-d H:i:s'), 'datetime')
                            ->bind(':end', $endDate->format('Y-m-d H:i:s'), 'datetime')
                            ->count();
                        $count++;
                        $count = ($count < 10) ? "0$count" : $count;
                        $reference = 'SADR/' . date('Y') . '/' . $count;
                        $result = $dataTable->query()
                            ->update()
                            ->set([
                                'reference_no' => $reference
                            ])
                            ->where(['id' => $id])
                            ->execute();
                    }
                    //bokelo 
                    $sadr = $this->Sadrs->get($id, [
                        'contain' => ['Attachments', 'SadrReaction'],
                    ]);
                    //******************       Send Email and Notifications to Reporter and Managers          *****************************

                    $html = new HtmlHelper(new \Cake\View\View());

                    $message = $this->Messages->find()
                        ->where(['name' => 'reporter_sadr_submit'])
                        ->first();
                    $referenceLink = Router::url([
                        'controller' => 'sadrs',
                        'action' => 'view',
                        $sadr['id'],
                        'reporter' => true
                    ], true);
                    $variables = array(
                        'name' => $this->Auth->User('name'),
                        'reference_no' => $sadr['reference_no'],
                        'reference_link' => $html->link(
                            $sadr['reference_no'],
                            $reference,
                            array('escape' => false)
                        ),
                        'modified' => $sadr['modified']
                    );
                    $datum = array(
                        'email' => $sadr['reporter_email'],
                        'id' => $id,
                        'user_id' => $this->Auth->User('id'),
                        'type' => 'reporter_sadr_submit',
                        'model' => 'Sadr',
                        'subject' => Text::insert($message['subject'], $variables),
                        'message' => Text::insert($message['content'], $variables)
                    );

                    $this->QueuedJobs->createJob('GenericEmail', $datum);
                    $this->QueuedJobs->createJob('GenericNotification', $datum);


                    //Send SMS
                    // if (!empty($sadr['reporter_phone']) && strlen(substr($sadr['reporter_phone'], -9)) == 9 && is_numeric(substr($sadr['reporter_phone'], -9))) {
                    //     $datum['phone'] = '254' . substr($sadr['reporter_phone'], -9);
                    //     $variables['reference_url'] = Router::url(['controller' => 'sadrs', 'action' => 'view', $sadr['id'], 'reporter' => true, 'full_base' => true]);
                    //     $datum['sms'] = Text::insert($message['sms'], $variables);
                    //     $this->QueuedJobs->createJob('GenericSms', $datum);
                    // }

                    //Notify managers
                    $users = $this->Sadrs->Users->find('all', array(
                        'contain' => array(),
                        'conditions' => array('Users.role_id' => 2, 'Users.is_active' => '1')
                    ));
                    foreach ($users as $user) {

                        $referenceLink = Router::url([
                            'controller' => 'sadrs',
                            'action' => 'view',
                            $sadr['id'],
                            'manager' => true
                        ], true);
                        $variables = array(
                            'name' => $user['name'],
                            'reference_no' => $sadr['reference_no'],
                            'reference_link' => $html->link(
                                $sadr['reference_no'],
                                $referenceLink,
                                array('escape' => false)
                            ),
                            'modified' => $sadr['modified']
                        );
                        $datum = array(
                            'email' => $user['email'],
                            'id' => $id,
                            'user_id' => $user['id'],
                            'type' => 'reporter_sadr_submit',
                            'model' => 'Sadr',
                            'subject' => Text::insert($message['subject'], $variables),
                            'message' => Text::insert($message['content'], $variables)
                        );

                        $this->QueuedTask->createJob('GenericEmail', $datum);
                        $this->QueuedTask->createJob('GenericNotification', $datum);
                    }
                    // **********************************    END   *********************************

                    // If the report is serious sent an alert:
                    $serious = $sadr['serious'];
                    if ($serious == "Yes") {
                        // $this->notifyCountyPharmacist($sadr);
                    }

                    $this->Flash->success(__('The SADR has been submitted to PPB'));
                    return $this->redirect(array('action' => 'view', $sadr->id));
                }
                // debug($this->request->data);
                $this->Flash->success(__('The SADR has been saved'));
                $this->redirect($this->referer());
            } else {
                // $errors = $sadr->getErrors();
                // debug($errors);
                // exit;
                $this->Flash->error(__('The SADR could not be saved. Please review the error(s) and resubmit and try again.'));
            }

            // $sadr = $this->Sadrs->patchEntity($sadr, $this->request->getData());
            // if ($this->Sadrs->save($sadr)) {
            //     $this->Flash->success(__('The sadr has been saved.'));

            //     return $this->redirect(['action' => 'index']);
            // }
            // $this->Flash->error(__('The sadr could not be saved. Please, try again.'));
        }

        $users = $this->Sadrs->Users->find('list', ['limit' => 200])->all();
        $pqmps = $this->Sadrs->Pqmps->find('list', ['limit' => 200])->all();
        $medications = $this->Sadrs->Medications->find('list', ['limit' => 200])->all();
        $counties = $this->Sadrs->Counties->find('list', ['limit' => 200])->all();
        $sub_counties = $this->Sadrs->SubCounties->find('list', ['limit' => 200])->all();
        $designations = $this->Sadrs->Designations->find('list', ['limit' => 200])->all();
        // debug($sadr);
        // exit;
        $this->set(compact('sadr', 'users', 'pqmps', 'medications', 'counties', 'sub_counties', 'designations'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Sadr id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $sadr = $this->Sadrs->get($id);
        if ($this->Sadrs->delete($sadr)) {
            $this->Flash->success(__('The sadr has been deleted.'));
        } else {
            $this->Flash->error(__('The sadr could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
