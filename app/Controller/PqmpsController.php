<?php
App::uses('AppController', 'Controller');
App::uses('Sanitize', 'Utility');
App::uses('CakeText', 'Utility');
App::uses('ThemeView', 'View');
App::uses('HtmlHelper', 'View/Helper');
/**
 * Pqmps Controller
 *
 * @property Pqmp $Pqmp
 */
class PqmpsController extends AppController {

	public $components = array('Search.Prg');
	public $paginate = array();
    public $presetVars = true;
    public $page_options = array('25' => '25', '50' => '50', '100' => '100');

	/*public function beforeFilter() {
		parent::beforeFilter();
		$this->Auth->allow('add', 'edit','view', 'find', 'download');
		$this->Security->blackHoleCallback = 'blackhole';
		if ($this->RequestHandler->isXml() || $this->RequestHandler->isAjax() || $this->request->params['action'] == 'edit')  $this->Security->csrfCheck = false;
	}

	public function blackhole($type) {
		$this->Session->setFlash(__('Sorry! The page has expired due to a '.$type.' error. Please refresh the page.'), 'flash_error');
		$this->redirect($this->referer());
	}*/
/**
 * index method
 *
 * @return void
 */
	/*public function index() {
		$this->Pqmp->recursive = 0;
		$this->set('pqmps', $this->paginate());
	}*/
	public function reporter_index() {
        $this->Prg->commonProcess();
        if (!empty($this->passedArgs['start_date']) || !empty($this->passedArgs['end_date'])) $this->passedArgs['range'] = true;
        if (isset($this->passedArgs['pages']) && !empty($this->passedArgs['pages'])) $this->paginate['limit'] = $this->passedArgs['pages'];
            else $this->paginate['limit'] = reset($this->page_options);

        $criteria = $this->Pqmp->parseCriteria($this->passedArgs);
        $criteria['Pqmp.user_id'] = $this->Auth->User('id');
        $this->paginate['conditions'] = $criteria;
        $this->paginate['order'] = array('Pqmp.created' => 'desc');
        $this->paginate['contain'] = array('County');

        //in case of csv export
        if (isset($this->request->params['ext']) && $this->request->params['ext'] == 'csv') {
          $this->csv_export($this->Pqmp->find('all', 
                  array('conditions' => $this->paginate['conditions'], 'order' => $this->paginate['order'], 'contain' => $this->paginate['contain'])
              ));
        }
        //end pdf export
        $this->set('page_options', $this->page_options);
        $counties = $this->Pqmp->County->find('list', array('order' => array('County.county_name' => 'ASC')));
		$this->set(compact('counties'));
        $countries = $this->Pqmp->Country->find('list', array('order' => array('Country.name' => 'ASC')));
		$this->set(compact('countries'));
        $designations = $this->Pqmp->Designation->find('list', array('order' => array('Designation.name' => 'ASC')));
		$this->set(compact('designations'));
        $this->set('pqmps', Sanitize::clean($this->paginate(), array('encode' => false)));
    }
    
	public function manager_index() {
        $this->Prg->commonProcess();
        if (!empty($this->passedArgs['start_date']) || !empty($this->passedArgs['end_date'])) $this->passedArgs['range'] = true;
        if (isset($this->passedArgs['pages']) && !empty($this->passedArgs['pages'])) $this->paginate['limit'] = $this->passedArgs['pages'];
            else $this->paginate['limit'] = reset($this->page_options);

        $criteria = $this->Pqmp->parseCriteria($this->passedArgs);
        if (!isset($this->passedArgs['submit'])) $criteria['Pqmp.submitted'] = array(2, 3);
        $this->paginate['conditions'] = $criteria;
        $this->paginate['order'] = array('Pqmp.created' => 'desc');
        $this->paginate['contain'] = array('County');

        //in case of csv export
        if (isset($this->request->params['ext']) && $this->request->params['ext'] == 'csv') {
          $this->csv_export($this->Pqmp->find('all', 
                  array('conditions' => $this->paginate['conditions'], 'order' => $this->paginate['order'], 'contain' => $this->paginate['contain'])
              ));
        }
        //end pdf export
        $this->set('page_options', $this->page_options);
        $counties = $this->Pqmp->County->find('list', array('order' => array('County.county_name' => 'ASC')));
		$this->set(compact('counties'));
        $countries = $this->Pqmp->Country->find('list', array('order' => array('Country.name' => 'ASC')));
		$this->set(compact('countries'));
        $designations = $this->Pqmp->Designation->find('list', array('order' => array('Designation.name' => 'ASC')));
		$this->set(compact('designations'));
        $this->set('pqmps', Sanitize::clean($this->paginate(), array('encode' => false)));
    }
    
    public function admin_index() {
        $this->Prg->commonProcess();
		if (!empty($this->passedArgs['start_date']) || !empty($this->passedArgs['end_date'])) $this->passedArgs['range'] = true;
		if (isset($this->passedArgs['pages']) && !empty($this->passedArgs['pages'])) $this->paginate['limit'] = $this->passedArgs['pages'];
        else $this->paginate['limit'] = 20;
		if (isset($this->passedArgs['id']) && $this->Pqmp->Luhn_Verify($this->passedArgs['id'])) $this->passedArgs['id'] = $this->Pqmp->Luhn_Verify($this->passedArgs['id']);
		$criteria = $this->Pqmp->parseCriteria($this->passedArgs);
        $this->paginate['conditions'] = $criteria;
        $this->paginate['order'] = array('Pqmp.created' => 'desc');
 		$this->Pqmp->recursive = -1;

		if (strpos($this->request->url,'xls') !== false){
			$this->helpers[] = 'PhpExcel';
			if(strpos($this->request->url, 'filt') !== false) {
				$this->paginate['fields'] = array('id', 'created','facility_name', 'brand_name', 'generic_name', 'product_formulation',
					'name_of_manufacturer', 'manufacture_date', 'batch_number', 'complaint_description');
			}
			$this->Pqmp->recursive = 1;
		}
		if ($this->RequestHandler->isXml()) {
			$this->Pqmp->recursive = 1;
			$this->response->download('PQMPS_'.date('Y_m_d_His'));
		}
		$this->set('pqmps', $this->paginate());
    }

    private function csv_export($cpqmps = ''){
        //todo: check if data exists in $users
        $this->response->download('PQMPs_'.date('Ymd_Hi').'.csv'); // <= setting the file name
        $this->set(compact('cpqmps'));
        $this->layout = false;
        $this->render('csv_export');
    }
    
/**
 * view method
 *
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->Pqmp->id = $this->Pqmp->Luhn_Verify($id);
		if (!$this->Pqmp->exists()) {
			$this->Session->setFlash(__('Could not verify the pqmp report ID. Please ensure the ID is correct.'), 'flash_error');
			$this->redirect('/');
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if (isset($this->request->data['continueEditing'])) {
				$this->Pqmp->saveField('submitted', 0);
				$this->Session->setFlash(__('You can continue editing the report'), 'flash_success');
				$this->redirect(array('action' => 'edit', $this->Pqmp->Luhn($this->Pqmp->id)));
			}
			if (isset($this->request->data['sendToPPB'])) {
				$this->Pqmp->saveField('submitted', 2);
				$this->Session->setFlash(__('Thank you for submitting your report. You will get a pdf copy of the report in your email'), 'flash_success');
				$this->redirect('/');
			}
		}
		Configure::load('appwide');
		$this->set('root', Configure::read('Domain.root'));
		$this->set('pqmp', $this->Pqmp->read(null));
	}

    public function reporter_view($id = null) {
        $this->Pqmp->id = $id;
        if (!$this->Pqmp->exists()) {
            $this->Session->setFlash(__('Could not verify the PQMP report ID. Please ensure the ID is correct.'), 'flash_error');
            $this->redirect('/');
        }

        if (strpos($this->request->url, 'pdf') !== false) {
            $this->pdfConfig = array('filename' => 'PQMP_' . $id,  'orientation' => 'portrait');
            // $this->response->download('PQMP_'.$pqmp['Pqmp']['id'].'.pdf');
        }

        if ($this->request->is('post') || $this->request->is('put')) {
            if (isset($this->request->data['continueEditing'])) {
                $this->Pqmp->saveField('submitted', 0);
                $this->Session->setFlash(__('You can continue editing the report'), 'flash_success');
                $this->redirect(array('action' => 'edit', $this->Pqmp->Luhn($this->Pqmp->id)));
            }
            if (isset($this->request->data['sendToPPB'])) {
                $this->Pqmp->saveField('submitted', 2);
                $this->Session->setFlash(__('Thank you for submitting your report. You will get an email with a link to the pdf copy of the report.'), 'flash_success');
                $this->redirect('/');
            }
        }

        $pqmp = $this->Pqmp->read(null);
        $this->set('pqmp', $pqmp);
        // $this->render('pdf/view');

        if (strpos($this->request->url, 'pdf') !== false) {
            $this->pdfConfig = array('filename' => 'PQMP_' . $id,  'orientation' => 'portrait');
            $this->response->download('PQMP_'.$pqmp['Pqmp']['id'].'.pdf');
        }
    }

    public function manager_view($id = null) {
        $this->Pqmp->id = $id;
        if (!$this->Pqmp->exists()) {
            $this->Session->setFlash(__('Could not verify the PQMP report ID. Please ensure the ID is correct.'), 'flash_error');
            $this->redirect('/');
        }

        if (strpos($this->request->url, 'pdf') !== false) {
            $this->pdfConfig = array('filename' => 'PQMP_' . $id,  'orientation' => 'portrait');
            // $this->response->download('PQMP_'.$pqmp['Pqmp']['id'].'.pdf');
        }

        $pqmp = $this->Pqmp->read(null);
        $this->set('pqmp', $pqmp);
        // $this->render('pdf/view');

        if (strpos($this->request->url, 'pdf') !== false) {
            $this->pdfConfig = array('filename' => 'PQMP_' . $id,  'orientation' => 'portrait');
            $this->response->download('PQMP_'.$pqmp['Pqmp']['id'].'.pdf');
        }
    }

	public function admin_view($id = null) {
		$this->Pqmp->id = $this->Pqmp->Luhn_Verify($id);
		if (!$this->Pqmp->exists()) {
			$this->Session->setFlash(__('Could not verify the pqmp report ID. Please ensure the ID is correct.'), 'flash_error');
			$this->redirect('/');
		}

		Configure::load('appwide');
		$this->set('root', Configure::read('Domain.root'));
		$this->set('pqmp', $this->Pqmp->read(null));
		if ($this->RequestHandler->isXml()) {
			$this->response->download('PQMP_'.date('Y_m_d_His'));
		}
	}


	public function admin_reply($id = null) {
		$this->Pqmp->id = $this->Pqmp->Luhn_Verify($id);
		if (!$this->Pqmp->exists()) {
			$this->Session->setFlash(__('Could not verify the pqmp report ID. Please ensure the ID is correct.'), 'flash_error');
			$this->redirect('/');
		}
		Configure::load('appwide');
		$this->set('root', Configure::read('Domain.root'));
		$this->set('pqmp', $this->Pqmp->read(null));
		$this->Pqmp->saveField('submitted', 1);
	}
/**
 * find method
 *
 * @param string $id
 * @return void
 */
	public function find() {
		$this->Pqmp->id = $this->Pqmp->Luhn_Verify($this->request->data['Pqmp']['search']);
		if (!$this->Pqmp->exists()) {
			$this->Session->setFlash(__('Could not verify the pqmp report ID. Please ensure the ID is correct.'), 'flash_error');
			$this->redirect('/');
		} else {
			$this->redirect(array('action' => 'view', $this->request->data['Pqmp']['search']));
		}
	}

	public function download($id = null) {
		$this->Pqmp->id = $this->Pqmp->Luhn_Verify($id);
		if (!$this->Pqmp->exists()) {
			$this->Session->setFlash(__('Could not verify the pqmp report ID. Please ensure the ID is correct.'), 'flash_error');
			$this->redirect('/');
		}
		// $this->set('pqmp', $this->Pqmp->read(null));
		$pqmp = $this->Pqmp->read(null);
		$this->set('pqmp', $pqmp);
		$this->response->download('PQMP_'.$pqmp['Pqmp']['id']);
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		$this->set('title_for_layout', 'New PQMP');
		$response = array();
		if ($this->request->is('post') || $this->request->is('put')) {
			$this->Pqmp->create();
			if (strpos($this->request->url,'xml') !== false) {
				//XML REQUEST
				// pr($this->request->data);
				$this->Pqmp->set($this->request->data);
				$this->beforeSaving();
				if ($this->Pqmp->saveAssociated($this->request->data)) {
					$response['message'] = 'Thank you for submitting the PQMP report. A copy of the pink form report has been sent to the email address you provided';
					$response['id'] = $this->Pqmp->Luhn($this->Pqmp->id);
					$this->set('message', $response);
				} else {
					$response['message'] = 'Sorry. We could not save your report. Please review the validation errors and resubmit.';
					$this->set('message', $response);
				}
				//XML REQUEST
			} else {
				if($this->Auth->user('id')) {
					$this->request->data['Pqmp']['user_id'] = $this->Auth->user('id');
				}
				$this->Pqmp->set($this->request->data);
				if ($this->Pqmp->validates(array('fieldList' => array('reporter_email'))) && empty($this->data['Pqmp']['bot_stop'])) {
					$this->createPqmp();
					// pr($this->request->data);
					if($this->RequestHandler->isMobile()) {
						$this->request->data['Pqmp']['device'] = 2; // Mobile web devices
					}
					if ($this->Pqmp->save($this->request->data, array('validate' => false))) {
						$this->Session->setFlash(__('Form for reporting poor quality medicinal products. Note the form ID.
									An email has been sent to the address you provided containing the report ID.'), 'flash_success');
						$this->redirect(array('action' => 'edit', $this->Pqmp->Luhn($this->Pqmp->id)));
					} else {
						$this->Session->setFlash(__('The report for poor quality medicinal products could not be saved. Please, try again.'), 'flash_error');
					}
				} else {
					$this->Session->setFlash(__('Could not create a PQMP form. Please ensure you have given us a valid email address.'), 'flash_error');
				}
			}
		}
	}

	public function reporter_add() {        
        $count = $this->Pqmp->find('count',  array('conditions' => array(
            'Pqmp.created BETWEEN ? and ?' => array(date("Y-01-01 00:00:00"), date("Y-m-d H:i:s")))));
        $count++;
        $count = ($count < 10) ? "0$count" : $count;
        $this->Pqmp->create();
        $this->Pqmp->save(['Pqmp' => ['user_id' => $this->Auth->User('id'),  
            'reference_no' => 'PQMP/'.date('Y').'/'.$count,
            'report_type' => 'Initial', 
            'designation_id' => $this->Auth->User('designation_id'), 
            'county_id' => $this->Auth->User('county_id'), 
            'institution_code' => $this->Auth->User('institution_code'), 
            'address' => $this->Auth->User('institution_address'),
            'reporter_name' => $this->Auth->User('name'),
            'reporter_email' => $this->Auth->User('email'),
            'reporter_phone' => $this->Auth->User('phone_no'),
            'contact' => $this->Auth->User('institution_contact'),
            'name_of_institution' => $this->Auth->User('name_of_institution')
            ]], false);
        $this->Session->setFlash(__('The PQMP has been created'), 'alerts/flash_success');
        $this->redirect(array('action' => 'edit', $this->Pqmp->id));
    }
/**
 * edit method
 *
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		$this->set('title_for_layout', 'Edit Pqmp '.$id);
		$this->Pqmp->id = $this->Pqmp->Luhn_Verify($id);
		if (!$this->Pqmp->exists()) {
			$this->Session->setFlash(__('Could not verify the pqmp ID. Please ensure the ID is correct.'), 'flash_error');
			$this->redirect(array('action' => 'add'));
		} else {
			$pqmp = $this->Pqmp->read(null);
			if ($pqmp['Pqmp']['submitted'] > 1) {
				$this->Session->setFlash(__('The Report has been sent to PPB. You don\' have permissions to edit it further.'), 'flash_error');
				$this->redirect(array('action' => 'view', $id));
			}
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if(!empty($this->request->data)) {
				if (isset($this->request->data['cancelReport'])) {
					$this->Session->setFlash(__('You have canceled a report'), 'flash_success');
					$this->redirect('/');
				}
				$this->beforeSaving();
				$validate = false;
				if (isset($this->request->data['submitReport'])) {	$validate = 'first';	}
				//Set Logged in user
				if($this->Auth->user('id')) {
					$this->request->data['Pqmp']['user_id'] = $this->Auth->user('id');
				}
				if(isset($this->request->data['Attachment']) && !empty($this->request->data['Attachment'])) {
					foreach($this->request->data['Attachment'] as $attachment) {
						$dataToSave[]['Attachment'] = $attachment;
					}
				}
				if (isset($dataToSave) && !$this->Attachment->saveAll($dataToSave, array('validate' => 'only'))) {
					$this->beforeDisplaying();
					$this->Session->setFlash(__('The attachments you provided are invalid. Please review the error and resubmit.'), 'flash_error');
				} else {
					if ($this->Pqmp->saveAssociated($this->request->data, array('validate' => $validate))) {
						if (!$this->request->is('ajax')) {
							if($validate == 'first') {
								$this->Pqmp->saveField('submitted', 2);
								$this->Session->setFlash(__('Thank you for submitting the report.
								A copy of the pink form report has been sent to the email address you provided.'), 'flash_success');
								$this->redirect(array('action' => 'view', $this->Pqmp->Luhn($this->Pqmp->id)));
							} else {
								$this->Session->setFlash(__('The Pqmp has been saved'), 'flash_success');
								$this->redirect(array('action' => 'edit', $this->Pqmp->Luhn($this->Pqmp->id)));
							}
						} else {
							$this->set('message', 'phwesk!! finally some progress'.$id);
							$this->set('_serialize', 'message');
						}
					} else {
						$this->beforeDisplaying();
						$this->Session->setFlash(__('The Pqmp could not be saved. Please, try again.'), 'flash_error');
					}
				}
			} else {
				$this->Session->setFlash(__('The Report could not be saved. Please ensure the file size is less than 5MB'), 'flash_error');
				$this->redirect(array('action' => 'edit', $id));
			}
		} else {
			$this->request->data = $pqmp;
		}

		// $this->set('attachments', $pqmp['Attachment']);
		$counties = $this->Pqmp->County->find('list');
		$this->set(compact('counties'));
		$sub_counties = $this->Pqmp->SubCounty->find('list', array('order' => array('SubCounty.sub_county_name' => 'ASC')));
		$this->set(compact('sub_counties'));
		$designations = $this->Pqmp->Designation->find('list');
		$this->set(compact('designations'));
		$countries = $this->Pqmp->Country->find('list');
		$this->set('countries', $countries);
	}

	public function reporter_edit($id = null) { 
        $this->Pqmp->id = $id;
        if (!$this->Pqmp->exists()) {
            throw new NotFoundException(__('Invalid PQMP'));
        }
        $pqmp = $this->Pqmp->read(null, $id);
        if ($pqmp['Pqmp']['submitted'] > 1) {
                $this->Session->setFlash(__('The pqmp has been submitted'), 'alerts/flash_info');
                $this->redirect(array('action' => 'view', $this->Pqmp->id));
        }
        if ($pqmp['Pqmp']['user_id'] !== $this->Auth->user('id')) {
                $this->Session->setFlash(__('You don\'t have permission to edit this PQMP!!'), 'alerts/flash_error');
                $this->redirect(array('controller' => 'users', 'action' => 'dashboard'));
        }
        if ($this->request->is('post') || $this->request->is('put')) {
            $validate = false;
            if (isset($this->request->data['submitReport'])) {
                $validate = 'first';                
            }
            if ($this->Pqmp->saveAssociated($this->request->data, array('validate' => $validate, 'deep' => true))) {
                if (isset($this->request->data['submitReport'])) {
                    $this->Pqmp->saveField('submitted', 2);
                    $pqmp = $this->Pqmp->read(null, $id);

                    //******************       Send Email and Notifications to Applicant and Managers          *****************************
                    $this->loadModel('Message');
                    $html = new HtmlHelper(new ThemeView());
                    $message = $this->Message->find('first', array('conditions' => array('name' => 'reporter_pqmp_submit')));
                    $variables = array(
                      'name' => $this->Auth->User('name'), 'reference_no' => $pqmp['Pqmp']['reference_no'],
                      'reference_link' => $html->link($pqmp['Pqmp']['reference_no'], array('controller' => 'pqmps', 'action' => 'view', $pqmp['Pqmp']['id'], 'reporter' => true, 'full_base' => true), 
                        array('escape' => false)),
                      'modified' => $pqmp['Pqmp']['modified']
                      );
                    $datum = array(
                        'email' => $pqmp['Pqmp']['reporter_email'],
                        'id' => $id, 'user_id' => $this->Auth->User('id'), 'type' => 'reporter_pqmp_submit', 'model' => 'Pqmp',
                        'subject' => CakeText::insert($message['Message']['subject'], $variables),
                        'message' => CakeText::insert($message['Message']['content'], $variables)
                      );

                    $this->loadModel('Queue.QueuedTask');
                    $this->QueuedTask->createJob('GenericEmail', $datum);
                    $this->QueuedTask->createJob('GenericNotification', $datum);
                    
                    //Notify managers
                    $users = $this->Pqmp->User->find('all', array(
                        'contain' => array(),
                        'conditions' => array('User.group_id' => 2)
                    ));
                    foreach ($users as $user) {
                      $variables = array(
                        'name' => $user['User']['name'], 'reference_no' => $pqmp['Pqmp']['reference_no'], 
                        'reference_link' => $html->link($pqmp['Pqmp']['reference_no'], array('controller' => 'pqmps', 'action' => 'view', $pqmp['Pqmp']['id'], 'manager' => true, 'full_base' => true), 
                          array('escape' => false)),
                        'modified' => $pqmp['Pqmp']['modified']
                      );
                      $datum = array(
                        'email' => $user['User']['email'],
                        'id' => $id, 'user_id' => $user['User']['id'], 'type' => 'reporter_pqmp_submit', 'model' => 'Pqmp',
                        'subject' => CakeText::insert($message['Message']['subject'], $variables),
                        'message' => CakeText::insert($message['Message']['content'], $variables)
                      );

                      $this->QueuedTask->createJob('GenericEmail', $datum);
                      $this->QueuedTask->createJob('GenericNotification', $datum);
                      // CakeResque::enqueue('default', 'GenericEmailShell', array('sendEmail', $datum));
                      // CakeResque::enqueue('default', 'GenericNotificationShell', array('sendNotification', $datum));
                    }
                    //**********************************    END   *********************************

                    $this->Session->setFlash(__('The PQMP has been submitted to PPB'), 'alerts/flash_success');
                    $this->redirect(array('action' => 'view', $this->Pqmp->id));      
                }
                // debug($this->request->data);
                $this->Session->setFlash(__('The PQMP has been saved'), 'alerts/flash_success');
                $this->redirect($this->referer());
            } else {
                $this->Session->setFlash(__('The PQMP could not be saved. Please, try again.'), 'alerts/flash_error');
            }
        } else {
            $this->request->data = $this->Pqmp->read(null, $id);
        }

        //$pqmp = $this->request->data;

		$this->set(compact('pqmp'));
        $counties = $this->Pqmp->County->find('list');
		$this->set(compact('counties'));
		$sub_counties = $this->Pqmp->SubCounty->find('list', array('order' => array('SubCounty.sub_county_name' => 'ASC')));
		$this->set(compact('sub_counties'));
		$designations = $this->Pqmp->Designation->find('list');
		$this->set(compact('designations'));
		$countries = $this->Pqmp->Country->find('list');
		$this->set('countries', $countries);
    }

	public function manager_edit($id = null) { 
        $this->Pqmp->id = $id;
        if (!$this->Pqmp->exists()) {
            throw new NotFoundException(__('Invalid PQMP'));
        }
        $pqmp = $this->Pqmp->read(null, $id);
        if ($this->request->is('post') || $this->request->is('put')) {
            $validate = false;
            if (isset($this->request->data['submitReport'])) {
                $validate = 'first';                
            }
            if ($this->Pqmp->saveAssociated($this->request->data, array('validate' => $validate, 'deep' => true))) {
                if (isset($this->request->data['submitReport'])) {
                    $this->Pqmp->saveField('submitted', 2);
                    $pqmp = $this->Pqmp->read(null, $id);

                    $this->Session->setFlash(__('The PQMP has been submitted to PPB'), 'alerts/flash_success');
                    $this->redirect(array('action' => 'view', $this->Pqmp->id));      
                }
                // debug($this->request->data);
                $this->Session->setFlash(__('The PQMP has been saved'), 'alerts/flash_success');
                $this->redirect($this->referer());
            } else {
                $this->Session->setFlash(__('The PQMP could not be saved. Please, try again.'), 'alerts/flash_error');
            }
        } else {
            $this->request->data = $this->Pqmp->read(null, $id);
        }

        //$pqmp = $this->request->data;

        $counties = $this->Pqmp->County->find('list');
		$this->set(compact('counties'));
		$sub_counties = $this->Pqmp->SubCounty->find('list', array('order' => array('SubCounty.sub_county_name' => 'ASC')));
		$this->set(compact('sub_counties'));
		$designations = $this->Pqmp->Designation->find('list');
		$this->set(compact('designations'));
		$countries = $this->Pqmp->Country->find('list');
		$this->set('countries', $countries);
    }
    
	public function admin_edit($id = null) {
		$this->set('title_for_layout', 'Edit Pqmp '.$id);
		$this->Pqmp->id = $this->Pqmp->Luhn_Verify($id);
		if (!$this->Pqmp->exists()) {
			$this->Session->setFlash(__('Could not verify the pqmp ID. Please ensure the ID is correct.'), 'flash_error');
			$this->redirect(array('action' => 'add'));
		} else {
			$pqmp = $this->Pqmp->read(null);
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if(!empty($this->request->data)) {
				if (isset($this->request->data['cancelReport'])) {
					$this->Session->setFlash(__('You have canceled a report'), 'flash_success');
					$this->redirect('/');
				}
				$this->beforeSaving();
				$validate = false;
				if (isset($this->request->data['submitReport'])) {	$validate = 'first';	}
				//Set Logged in user
				if($this->Auth->user('id')) {
					$this->request->data['Pqmp']['user_id'] = $this->Auth->user('id');
				}
				if(isset($this->request->data['Attachment']) && !empty($this->request->data['Attachment'])) {
					foreach($this->request->data['Attachment'] as $attachment) {
						$dataToSave[]['Attachment'] = $attachment;
					}
				}
				if (isset($dataToSave) && !$this->Attachment->saveAll($dataToSave, array('validate' => 'only'))) {
					$this->beforeDisplaying();
					$this->Session->setFlash(__('The attachments you provided are invalid. Please review the error and resubmit.'), 'flash_error');
				} else {
					if ($this->Pqmp->saveAssociated($this->request->data, array('validate' => $validate))) {
						if (!$this->request->is('ajax')) {
							if($validate == 'first') {
								$this->Pqmp->saveField('submitted', 2);
								$this->Session->setFlash(__('You have successfully saved the report.'), 'flash_success');
								$this->redirect(array('action' => 'view', $this->Pqmp->Luhn($this->Pqmp->id)));
							} else {
								$this->Session->setFlash(__('The Pqmp has been saved'), 'flash_success');
								$this->redirect(array('action' => 'edit', $this->Pqmp->Luhn($this->Pqmp->id)));
							}
						} else {
							$this->set('message', 'phwesk!! finally some progress'.$id);
							$this->set('_serialize', 'message');
						}
					} else {
						$this->beforeDisplaying();
						$this->Session->setFlash(__('The Pqmp could not be saved. Please, try again.'), 'flash_error');
					}
				}
			} else {
				$this->Session->setFlash(__('The Report could not be saved. Please ensure the file size is less than 5MB'), 'flash_error');
				$this->redirect(array('action' => 'edit', $id));
			}
		} else {
			$this->request->data = $pqmp;
		}

		// $this->set('attachments', $pqmp['Attachment']);
		$counties = $this->Pqmp->County->find('list');
		$this->set(compact('counties'));
		$sub_counties = $this->Pqmp->SubCounty->find('list', array('order' => array('SubCounty.sub_county_name' => 'ASC')));
		$this->set(compact('sub_counties'));
		$designations = $this->Pqmp->Designation->find('list');
		$this->set(compact('designations'));
		$countries = $this->Pqmp->Country->find('list');
		$this->set('countries', $countries);
	}

/**
 * delete method
 *
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		if (!$this->request->is('post')) {
			throw new MethodNotAllowedException();
		}
		$this->Pqmp->id = $id;
		if (!$this->Pqmp->exists()) {
			throw new NotFoundException(__('Invalid pqmp'));
		}
		if ($this->Pqmp->delete()) {
			$this->Session->setFlash(__('Pqmp deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Pqmp was not deleted'));
		$this->redirect(array('action' => 'index'));
	}

	public function admin_delete($id = null) {
		if (!$this->request->is('post')) {
			throw new MethodNotAllowedException();
		}
		$this->Pqmp->id = $this->Pqmp->Luhn_Verify($id);
		if (!$this->Pqmp->exists()) {
			throw new NotFoundException(__('Invalid pqmp'));
		}
		if ($this->Pqmp->deactivate($this->Pqmp->id)) {
			$this->Session->setFlash(__('Pqmp deleted'), 'flash_success');
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Pqmp was not deleted'));
		$this->redirect(array('action' => 'index'));
	}

	public function admin_archive($id = null) {
		if (!$this->request->is('post')) {
			throw new MethodNotAllowedException();
		}
		$this->Pqmp->id = $this->Pqmp->Luhn_Verify($id);
		if (!$this->Pqmp->exists()) {
			$this->Session->setFlash(__('Could not verify the suspected adverse drug report ID. Please ensure the ID is correct.'), 'flash_error');
			$this->redirect(array('action' => 'index'));
		}
		if ($this->Pqmp->saveField('submitted', 6)) {
			$this->Session->setFlash(__('The report has been Archived. You can view it in the Archived List'), 'flash_success');
			$this->redirect($this->referer());
		}
		$this->Session->setFlash(__('Pqmp was not Archived'));
		$this->redirect(array('action' => 'index'));
	}
/**
 * 					Utility functions
 *
 */

	public function createPqmp() {
		if($this->Auth->User('id')) {
			$this->request->data['Pqmp']['user_id'] = $this->Auth->User('id');
			$this->request->data['Pqmp']['designation_id'] = $this->Auth->User('designation_id');
			$this->request->data['Pqmp']['county_id'] = $this->Auth->User('county_id');
			$this->request->data['Pqmp']['reporter_name'] = $this->Auth->User('name');
			// $this->request->data['Pqmp']['reporter_email'] = $this->Auth->User('email');
			$this->request->data['Pqmp']['facility_name'] = $this->Auth->User('name_of_institution');
			$this->request->data['Pqmp']['facility_code'] = $this->Auth->User('institution_code');
			$this->request->data['Pqmp']['facility_address'] = $this->Auth->User('institution_address');
			$this->request->data['Pqmp']['facility_phone'] = $this->Auth->User('institution_contact');
			$this->request->data['Pqmp']['contact_number'] = $this->Auth->User('phone_no');
		}
	}
}