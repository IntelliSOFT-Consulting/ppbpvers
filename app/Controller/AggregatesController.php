<?php
App::uses('AppController', 'Controller');
App::uses('Sanitize', 'Utility');
App::uses('CakeText', 'Utility');
App::uses('ThemeView', 'View');
App::uses('HtmlHelper', 'View/Helper');
App::uses('Router', 'Routing');
App::uses('Xml', 'Utility');
/**
 * Aggregates Controller
 * 
 * 
 * @property Aggregate $Aggregate
 */
class AggregatesController extends AppController
{

	/**
	 * Scaffold
	 *
	 * @var mixed
	 */
	public $scaffold;
	public $components = array('Search.Prg');
	public $paginate = array();
	public $presetVars = true;
	public $page_options = array('25' => '25', '50' => '50', '100' => '100');


	// MAH USER
	public function reporter_index()
	{
		$this->Prg->commonProcess();
		if (!empty($this->passedArgs['start_date']) || !empty($this->passedArgs['end_date'])) $this->passedArgs['range'] = true;
		if (isset($this->passedArgs['pages']) && !empty($this->passedArgs['pages'])) $this->paginate['limit'] = $this->passedArgs['pages'];
		else $this->paginate['limit'] = reset($this->page_options);
		//Health program fiasco
		if ($this->Session->read('Auth.User.user_type') == 'Public Health Program') {
			$this->passedArgs['health_program'] = $this->Session->read('Auth.User.health_program');
		}

		$criteria = $this->Aggregate->parseCriteria($this->passedArgs);
		if ($this->Session->read('Auth.User.user_type') != 'Public Health Program') $criteria['Aggregate.user_id'] = $this->Auth->User('id');
		if ($this->Session->read('Auth.User.user_type') == 'Public Health Program') {
			$criteria['Aggregate.submitted'] = array(2);
		} else {
			if (isset($this->request->query['submitted'])) {
				if ($this->request->query['submitted'] == 1) {
					$criteria['Aggregate.submitted'] = array(0, 1);
				} else {
					$criteria['Aggregate.submitted'] = array(2, 3);
				}
			} else {
				$criteria['Aggregate.submitted'] = array(0, 1, 2, 3);
			}
		}
		// add deleted condition to criteria
		$criteria['Aggregate.deleted'] = false;
		$this->paginate['conditions'] = $criteria;
		$this->paginate['order'] = array('Aggregate.submitted_date' => 'desc');
		$this->set('aggregates', Sanitize::clean($this->paginate(), array('encode' => false)));
		$this->set('page_options', $this->page_options);
	}

	public function generateReferenceNumber()
	{
		$count = $this->Aggregate->find('count',  array(
			'fields' => 'Aggregate.reference_no',
			'conditions' => array(
				'Aggregate.submitted_date BETWEEN ? and ?' => array(
					date("Y-01-01 00:00:00"), date("Y-m-d H:i:s")
				),
				'Aggregate.reference_no !=' => 'new',
				// 'Aggregate.report_type !='=>'Followup'
			)
		));
		$count++;
		$count = ($count < 10) ? "0$count" : $count;
		$reference = 'PSUR/' . date('Y') . '/' . $count;
		//ensure that the reference number is unique
		// $exists = $this->Aggregate->find('count',  array(
		// 	'fields' => 'Aggregate.reference_no',
		// 	'conditions' => array('Aggregate.reference_no' => $reference)
		// ));
		// if ($exists > 0) {
		// 	$reference = $this->generateReferenceNumber();
		// }

		return $reference;
	}

	public function validateEditorData($data)
	{
		$response = array(
			'valid' => true,
			'message' => ''
		);

		if (empty($data['Aggregate']['introduction'])) {
			$response['valid'] = false;
			$response['message'] .= "Please provide a Brief Introduction<br>";
		}

		if (empty($data['Aggregate']['worldwide_marketing'])) {
			$response['valid'] = false;
			$response['message'] .= "Please provide worldwide marketing<br>";
		}

		if (empty($data['Aggregate']['action_taken'])) {
			$response['valid'] = false;
			$response['message'] .= "Please provide action taken<br>";
		}

		if (empty($data['Aggregate']['reference_changes'])) {
			$response['valid'] = false;
			$response['message'] .= "Please provide reference changes<br>";
		}

		if (empty($data['Aggregate']['estimated_exposure'])) {
			$response['valid'] = false;
			$response['message'] .= "Please provide estimated exposure<br>";
		}

		if (empty($data['Aggregate']['clinical_findings'])) {
			$response['valid'] = false;
			$response['message'] .= "Please provide clinical findings<br>";
		}

		if (empty($data['Aggregate']['efficacy'])) {
			$response['valid'] = false;
			$response['message'] .= "Please provide efficacy<br>";
		}

		if (empty($data['Aggregate']['late_breaking'])) {
			$response['valid'] = false;
			$response['message'] .= "Please provide late breaking<br>";
		}

		if (empty($data['Aggregate']['safety_concerns'])) {
			$response['valid'] = false;
			$response['message'] .= "Please provide safety concerns<br>";
		}

		if (empty($data['Aggregate']['risks_evaluation'])) {
			$response['valid'] = false;
			$response['message'] .= "Please provide risks evaluation<br>";
		}

		if (empty($data['Aggregate']['risks_characterisation'])) {
			$response['valid'] = false;
			$response['message'] .= "Please provide risks characterisation<br>";
		}
		if (empty($data['Aggregate']['benefit_evaluation'])) {
			$response['valid'] = false;
			$response['message'] .= "Please provide benefit evaluation<br>";
		}
		if (empty($data['Aggregate']['risk_balance'])) {
			$response['valid'] = false;
			$response['message'] .= "Please provide risk balance<br>";
		}

		// Remove the last newline character if present
		$response['message'] = rtrim($response['message'], "\n");

		return $response;
	}
	public function manager_copy($id = null)
	{
		if ($this->request->is('post')) {
			$this->Aggregate->id = $id;
			if (!$this->Aggregate->exists()) {
				throw new NotFoundException(__('Invalid Aggregate Report'));
			}
			$this->generate_copy($id);
		}
	}

	public function generate_copy($id)
	{
		# code...
		$aggregate = Hash::remove($this->Aggregate->find(
			'first',
			array(
				'conditions' => array('Aggregate.id' => $id)
			)
		), 'Aggregate.id');

		if ($aggregate['Aggregate']['copied']) {
			$this->Session->setFlash(__('A clean copy already exists. Click on edit to update changes.'), 'alerts/flash_error');
			return $this->redirect(array('action' => 'index'));
		}
		$data_save = $aggregate['Aggregate'];
		$data_save['aggregate_id'] = $id;
		$data_save['user_id'] = $this->Auth->User('id');
		$this->Aggregate->saveField('copied', 1);
		$data_save['copied'] = 2;
		$data_save['submitted'] = 1;

		if ($this->Aggregate->saveAssociated($data_save, array('deep' => true, 'validate' => false))) {
			$this->Session->setFlash(__('Clean copy of ' . $data_save['reference_no'] . ' has been created'), 'alerts/flash_info');
			$this->redirect(array('action' => 'edit', $this->Aggregate->id));
		} else {
			$this->Session->setFlash(__('The clean copy could not be created. Please, try again.'), 'alerts/flash_error');
			$this->redirect($this->referer());
		}
	}
	public function reporter_followup($id = null)
	{
		if ($this->request->is('post')) {
			$this->Aggregate->id = $id;
			if (!$this->Aggregate->exists()) {
				throw new NotFoundException(__('Invalid Aggregate Report'));
			}
			$aggregate = Hash::remove($this->Aggregate->find(
				'first',
				array(
					'contain' => array('AggregateListOfSignal'),
					'conditions' => array('Aggregate.id' => $id)
				)
			), 'Aggregate.id');

			$aggregate = Hash::remove($aggregate, 'AggregateListOfSignal.{n}.id');
			$data_save = $aggregate['Aggregate'];
			$data_save['AggregateListOfSignal'] = $aggregate['AggregateListOfSignal'];
			$data_save['aggregate_id'] = $id;

			$count = $this->Aggregate->find('count',  array('conditions' => array(
				'Aggregate.reference_no LIKE' => $aggregate['Aggregate']['reference_no'] . '%',
			)));
			$count = ($count < 10) ? "0$count" : $count;
			$data_save['reference_no'] = $aggregate['Aggregate']['reference_no']; //.'_F'.$count;
			$data_save['report_type'] = 'Followup';
			$data_save['copied'] = '0';
			$data_save['submitted'] = 0;

			if ($this->Aggregate->saveAssociated($data_save, array('deep' => true, 'validate' => false))) {
				$this->Session->setFlash(__('Follow up ' . $data_save['reference_no'] . ' has been created'), 'alerts/flash_info');
				$this->redirect(array('action' => 'edit', $this->Aggregate->id));
			} else {
				$this->Session->setFlash(__('The followup could not be saved. Please, try again.'), 'alerts/flash_error');
				$this->redirect($this->referer());
			}
		}
	}
	public function reporter_edit($id = null)
	{
		$isValid = array(
			'valid' => true,
			'message' => 'success'
		);
		$this->Aggregate->id = $id;
		if (!$this->Aggregate->exists()) {
			throw new NotFoundException(__('Invalid Agregate Report'));
		}
		$aggregate = $this->Aggregate->read(null, $id);
		if ($aggregate['Aggregate']['submitted'] > 1) {
			$this->Session->setFlash(__('The Aggregate report has been submitted'), 'alerts/flash_info');
			$this->redirect(array('action' => 'view', $this->Aggregate->id));
		}
		if ($aggregate['Aggregate']['user_id'] !== $this->Auth->user('id')) {
			$this->Session->setFlash(__('You don\'t have permission to edit this Aggregate report!!'), 'alerts/flash_error');
			$this->redirect(array('controller' => 'users', 'action' => 'dashboard'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {

			$validate = false;
			if (isset($this->request->data['submitReport'])) {

				// Ensure a file is uploaded		

				$validate = 'first';
				if ($this->request->data['Aggregate']['summary_available'] == "Yes") {
					$isValid = $this->validateEditorData($this->request->data);
					if ($isValid['valid'] != true) {
						$validate = false;
						unset($this->request->data['submitReport']);
					}
				}
			}

			if ($this->Aggregate->saveAssociated($this->request->data, array('validate' => $validate, 'deep' => true))) {
				if (isset($this->request->data['submitReport'])) {
					if (!isset($this->request->data['Attachment']) || empty($this->request->data['Attachment'])) {
						$this->Session->setFlash(__('Please upload at least one file.'), 'alerts/flash_error');
						$this->redirect($this->referer());
					}
					$this->Aggregate->saveField('submitted', 2);
					$this->Aggregate->saveField('submitted_date', date("Y-m-d H:i:s"));

					if (!empty($aggregate['Aggregate']['reference_no']) && $aggregate['Aggregate']['reference_no'] == 'new') {
						$reference = $this->generateReferenceNumber();
						$this->Aggregate->saveField('reference_no', $reference);
					}

					$aggregate = $this->Aggregate->read(null, $id);

					//******************       Send Email and Notifications to Reporter and Managers          *****************************
					$this->loadModel('Message');
					$html = new HtmlHelper(new ThemeView());
					$message = $this->Message->find('first', array('conditions' => array('name' => 'reporter_ce2b_submit')));
					$variables = array(
						'name' => $this->Auth->User('name'), 'reference_no' => $aggregate['Aggregate']['reference_no'],
						'reference_link' => $html->link(
							$aggregate['Aggregate']['reference_no'],
							array('controller' => 'ce2bs', 'action' => 'view', $aggregate['Aggregate']['id'], 'reporter' => true, 'full_base' => true),
							array('escape' => false)
						),
						'modified' => $aggregate['Aggregate']['modified']
					);
					$datum = array(
						'email' => $aggregate['Aggregate']['reporter_email'],
						'id' => $id, 'user_id' => $this->Auth->User('id'), 'type' => 'reporter_ce2b_submit', 'model' => 'Aggregate',
						'subject' => CakeText::insert($message['Message']['subject'], $variables),
						'message' => CakeText::insert($message['Message']['content'], $variables)
					);

					$this->loadModel('Queue.QueuedTask');
					$this->QueuedTask->createJob('GenericEmail', $datum);
					$this->QueuedTask->createJob('GenericNotification', $datum);



					//Notify managers
					$users = $this->Aggregate->User->find('all', array(
						'contain' => array(),
						'conditions' => array(
							'User.group_id' => 2,
							'User.is_active' => '1'
						)
					));
					foreach ($users as $user) {
						$variables = array(
							'name' => $user['User']['name'], 'reference_no' => $aggregate['Aggregate']['reference_no'],
							'reference_link' => $html->link(
								$aggregate['Aggregate']['reference_no'],
								array('controller' => 'Ce2bs', 'action' => 'view', $aggregate['Aggregate']['id'], 'manager' => true, 'full_base' => true),
								array('escape' => false)
							),
							'modified' => $aggregate['Aggregate']['modified']
						);
						$datum = array(
							'email' => $user['User']['email'],
							'id' => $id, 'user_id' => $user['User']['id'],
							'type' => 'reporter_ce2b_submit',
							'model' => 'Aggregate',
							'subject' => CakeText::insert($message['Message']['subject'], $variables),
							'message' => CakeText::insert($message['Message']['content'], $variables)
						);

						$this->QueuedTask->createJob('GenericEmail', $datum);
						$this->QueuedTask->createJob('GenericNotification', $datum);
					}
					// **********************************    END   *********************************

					$this->Session->setFlash(__('The Aggregate report has been submitted to PPB'), 'alerts/flash_success');
					$this->redirect(array('action' => 'view', $this->Aggregate->id));
				}
				if ($isValid['valid'] != true) {
					$message = 'The application was not successfully submitted. Please correct the errors below...';
					$message = $message . "<br>" . $isValid['message'];
					$this->Session->setFlash(__($message), 'alerts/flash_error');
					$this->redirect($this->referer());
				}

				$this->Session->setFlash(__('The Aggregate report has been saved'), 'alerts/flash_success');
				$this->redirect($this->referer());
			} else {
				$message = 'The application was not successfully submitted. Please correct the errors below...';
				if ($this->RequestHandler->isAjax()) {
					$this->set('response', array('message' => 'Failure', 'errors' => $message));
				} else {
					$this->Session->setFlash(__($message), 'alerts/flash_error');
				}
				// $this->Session->setFlash(__('The Aggregate report could not be saved. Please review the error(s) and resubmit and try again.'), 'alerts/flash_error');
			}
		} else {
			$this->request->data = $this->Aggregate->read(null, $id);
		}

		$counties = $this->Aggregate->County->find('list', array('order' => array('County.county_name' => 'ASC')));
		$this->set(compact('counties'));
		$sub_counties = $this->Aggregate->SubCounty->find('list', array('order' => array('SubCounty.sub_county_name' => 'ASC')));
		$this->set(compact('sub_counties'));
		$designations = $this->Aggregate->Designation->find('list', array('order' => array('Designation.name' => 'ASC')));
		$this->set(compact('designations'));
	}

	public function reporter_add()
	{
		$this->add(false);
	}
	public function manager_add()
	{
		$this->add(true);
	}
	public function add($intiated = false)
	{

		$user = $this->Auth->User();

		$this->Aggregate->create();
		$this->Aggregate->save(['Aggregate' => [
			'user_id' => $this->Auth->User('id'),
			'reference_no' => 'new',
			'manager_initiated' => $intiated,
			'person_submitting' => 'No',
			'reporter_email' => $this->Auth->User('email'),
			'designation_id' => $this->Auth->User('designation_id'),
			'reporter_designation' => $this->Auth->User('designation_id'),
			'county_id' => $this->Auth->User('county_id'),
			'reporter_name' => $this->Auth->User('name'),
			'reporter_email' => $this->Auth->User('email'),
			'reporter_phone' => $this->Auth->User('phone_no'),
			'company_name' => $user['name_of_institution'],
			'company_code' => $this->Auth->User('institution_code'),

			// 
		]], false);
		$this->Session->setFlash(__('The Aggregate report has been created'), 'alerts/flash_success');
		$this->redirect(array('action' => 'edit', $this->Aggregate->id));
	}
	public function reporter_view($id = null)
	{
		$this->Aggregate->id = $id;
		if (!$this->Aggregate->exists()) {
			$this->Session->setFlash(__('Could not verify the Aggregate report ID. Please ensure the ID is correct.'), 'flash_error');
			$this->redirect('/');
		}
		$this->general_view($id);
	}

	public function general_view($id = null)
	{
		$aggregate = $this->Aggregate->find('first', array(
			'conditions' => array('Aggregate.id' => $id),
			'contain' => array('Designation', 'AggregateListOfSignal', 'Attachment', 'ExternalComment', 'ExternalComment.Attachment', 'ReviewerComment', 'ReviewerComment.Attachment', 'Recommendation', 'Recommendation.Attachment', 'ReviewerAggregate','ReviewerAggregate.AggregateListOfSignal','ReviewerAggregate.Designation','ReviewerAggregate.Attachment', 'ReviewerAggregate.Recommendation')
		));
		// debug($aggregate);
		// exit;
		if(!empty($aggregate['ReviewerAggregate'])){
			$summary= $aggregate['ReviewerAggregate'][0];
			// debug($summary);
			// exit;
			$this->set(['summary' =>$summary]);
		}

		$this->set(['aggregate' => $aggregate]);
		
		if (strpos($this->request->url, 'pdf') !== false) {

			$this->pdfConfig = array('filename' => 'PSUR_' . $id . '.pdf',  'orientation' => 'portrait');
			$this->response->download('PSUR_' . $aggregate['Aggregate']['id'] . '.pdf');
		}
	}
	// MANAGER USER
	public function manager_index()
	{

		$this->Prg->commonProcess();
		if (!empty($this->passedArgs['start_date']) || !empty($this->passedArgs['end_date'])) $this->passedArgs['range'] = true;
		if (isset($this->passedArgs['pages']) && !empty($this->passedArgs['pages'])) $this->paginate['limit'] = $this->passedArgs['pages'];
		else $this->paginate['limit'] = reset($this->page_options);
		//Health program fiasco
		if ($this->Session->read('Auth.User.user_type') == 'Public Health Program') {
			$this->passedArgs['health_program'] = $this->Session->read('Auth.User.health_program');
		}

		$criteria = $this->Aggregate->parseCriteria($this->passedArgs);

		if (isset($this->request->query['submitted'])) {
			if ($this->request->query['submitted'] == 1) {
				$criteria['Aggregate.submitted'] = array(0, 1);
			} else {
				$criteria['Aggregate.submitted'] = array(2, 3);
			}
		} else {
			$criteria['Aggregate.submitted'] = array(2, 3);
		}

		// add deleted condition to criteria
		$criteria['Aggregate.deleted'] = false;
		$criteria['Aggregate.archived'] = false;
		$this->paginate['conditions'] = $criteria;
		$this->paginate['order'] = array('Aggregate.submitted_date' => 'desc');
		$this->set('aggregates', Sanitize::clean($this->paginate(), array('encode' => false)));
		$this->set('page_options', $this->page_options);
	}
	public function manager_edit($id = null)
	{
		$isValid = array(
			'valid' => true,
			'message' => 'success'
		);
		$this->Aggregate->id = $id;
		if (!$this->Aggregate->exists()) {
			throw new NotFoundException(__('Invalid Agregate Report'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {

			$validate = false;
			if (isset($this->request->data['submitReport'])) {


				// debug($this->request->data);
				// exit;
				$validate = 'first';
				$isValid = $this->validateEditorData($this->request->data);
				if ($isValid['valid'] != true) {
					$validate = false;
					unset($this->request->data['submitReport']);
				}
			}

			if ($this->Aggregate->saveAssociated($this->request->data, array('validate' => $validate, 'deep' => true))) {
				if (isset($this->request->data['submitReport'])) {

					$aggregate = $this->Aggregate->read(null, $id);

					if (!empty($aggregate['Aggregate']['reference_no']) && $aggregate['Aggregate']['reference_no'] == 'new') {
						$reference = $this->generateReferenceNumber();
						$this->Aggregate->saveField('reference_no', $reference);
						$this->Aggregate->saveField('submitted', 2);
						$this->Aggregate->saveField('submitted_date', date("Y-m-d H:i:s"));
					}

					$this->Session->setFlash(__('The Aggregate report has been submitted'), 'alerts/flash_success');
					$this->redirect(array('action' => 'view', $this->Aggregate->id));
				}

				if ($isValid['valid'] != true) {
					$message = 'The application was not successfully submitted. Please correct the errors below...';
					$message = $message . "<br>" . $isValid['message'];
					$this->Session->setFlash(__($message), 'alerts/flash_error');
					$this->redirect($this->referer());
				}
				$this->Session->setFlash(__('The Aggregate report has been saved'), 'alerts/flash_success');
				$this->redirect($this->referer());
			} else {
				$message = 'The application was not successfully submitted. Please correct the errors below...';
				if ($this->RequestHandler->isAjax()) {
					$this->set('response', array('message' => 'Failure', 'errors' => $message));
				} else {
					$this->Session->setFlash(__($message), 'alerts/flash_error');
				}
			}
		} else {
			$this->request->data = $this->Aggregate->read(null, $id);
		}

		$counties = $this->Aggregate->County->find('list', array('order' => array('County.county_name' => 'ASC')));
		$this->set(compact('counties'));
		$sub_counties = $this->Aggregate->SubCounty->find('list', array('order' => array('SubCounty.sub_county_name' => 'ASC')));
		$this->set(compact('sub_counties'));
		$designations = $this->Aggregate->Designation->find('list', array('order' => array('Designation.name' => 'ASC')));
		$this->set(compact('designations'));
	}
	public function manager_view($id = null)
	{
		$this->Aggregate->id = $id;
		if (!$this->Aggregate->exists()) {
			$this->Session->setFlash(__('Could not verify the Aggregate report ID. Please ensure the ID is correct.'), 'flash_error');
			$this->redirect('/');
		}
		$this->general_view($id);
	}
	public function manager_archive($id = null)
	{
		$this->Aggregate->id = $id;
		if (!$this->Aggregate->exists()) {
			throw new NotFoundException(__('Invalid Aggregate'));
		}
		$aggregate = $this->Aggregate->read(null, $id);
		$aggregate['Aggregate']['archived'] = true;
		$aggregate['Aggregate']['archived_date'] = date("Y-m-d H:i:s");
		if ($this->Aggregate->save($aggregate, array('validate' => false))) {
			$this->Session->setFlash(__('Aggregate Report Archived successfully'), 'alerts/flash_success');
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Aggregate Report was not archied'), 'alerts/flash_error');
		$this->redirect($this->referer());
	}
}
