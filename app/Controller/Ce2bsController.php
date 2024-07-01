<?php
App::uses('AppController', 'Controller');
App::uses('Sanitize', 'Utility');
App::uses('CakeText', 'Utility');
App::uses('ThemeView', 'View');
App::uses('HtmlHelper', 'View/Helper');
App::uses('Router', 'Routing');
App::uses('Xml', 'Utility');
App::uses('Time', 'Utility');
App::uses('CakeTime', 'Utility');


/**
 * Ce2bs Controller
 *
 * @property Ce2b $Ce2b
 */
class Ce2bsController extends AppController
{

    public $components = array('Search.Prg');
    public $paginate = array();
    public $presetVars = true;
    public $page_options = array('25' => '25', '50' => '50', '100' => '100');

    /**
     * index method
     */
    /*public function index() {
        $this->Aefi->recursive = 0;
        $this->set('aefis', $this->paginate());
    }*/

    // Short Term Goal 
    public function beforeFilter()
    {
        parent::beforeFilter();
    }

    public function vigiflow($id = null)
    {
        # code...
        $this->Ce2b->id = $id;
        if (!$this->Ce2b->exists()) {
            $this->Session->setFlash(__('Could not verify the E2b report ID. Please ensure the ID is correct.'), 'flash_error');
            $this->redirect('/');
        }

        $ce2b = $this->Ce2b->find('first', array(
            'conditions' => array('Ce2b.id' => $id),
        ));

        if (empty($ce2b['Ce2b']['e2b_content'])) {
            $this->Session->setFlash(__('Could not verify the E2b report ID. Please ensure the ID is correct.'), 'flash_error');
            $this->redirect($this->referer());
        }

       

        // $html = $ce2b['Ce2b']['e2b_content'];

        $view = new View($this, false);
        $view->viewPath = 'Ce2bs/xml';  // Directory inside view directory to search for .ctp files
        $view->layout = false; // if you want to disable layout
        $view->set('ce2b', $ce2b); // set your variables for view here
        $html = $view->render('download');

        // debug($html);
        // exit;
        $HttpSocket = new HttpSocket();
        // string data
        $results = $HttpSocket->post(
            Configure::read('vigiflow_api'),
            $html,
            array('header' => array('umc-vigiflow-web-radr-access-key' => Configure::read('vigiflow_key')))
        );
        // debug($results);
        // exit;
        if ($results->isOk()) {
            $body = $results->body;
            $this->Ce2b->saveField('vigiflow_message', $body);
            $this->Ce2b->saveField('vigiflow_date', date('Y-m-d H:i:s'));
            $resp = json_decode($body, true);
            if (json_last_error() == JSON_ERROR_NONE) {
                $this->Ce2b->saveField('vigiflow_ref', $resp);
            }
            $this->Flash->success('Vigiflow integration success!!');
            $this->Flash->success($body);
            $this->redirect($this->referer());
        } else {
            $body = $results->body;
            $this->Ce2b->saveField('vigiflow_message', $body);
            $this->Flash->error('Error sending report to vigiflow:');
            $this->Flash->error($body);
            $this->redirect($this->referer());
        }
        $this->autoRender = false;
    }
    public function reporter_followup($id = null)
    {
        $this->followup($id);
    }
    public function manager_followup($id = null)
    {
        $this->followup($id);
    }

    public function followup($id = null)
    {

        if ($this->request->is('post')) {
            $this->Ce2b->id = $id;
            if (!$this->Ce2b->exists()) {
                throw new NotFoundException(__('Invalid SADR'));
            }
            $ce2b = Hash::remove($this->Ce2b->find(
                'first',
                array(
                    'conditions' => array('Ce2b.id' => $id)
                )
            ), 'Ce2b.id');

            $data_save = $ce2b['Ce2b'];
            $data_save['ce2b_id'] = $id;
            $data_save['reference_no'] = $ce2b['Ce2b']['reference_no'];
            $data_save['report_type'] = 'Followup';
            $data_save['submitted'] = 0;

            if ($this->Ce2b->saveAssociated($data_save, array('deep' => true, 'validate' => false))) {
                $this->Session->setFlash(__('Follow up ' . $data_save['reference_no'] . ' has been created'), 'alerts/flash_info');
                $this->redirect(array('action' => 'edit', $this->Ce2b->id));
            } else {
                $this->Session->setFlash(__('The followup could not be saved. Please, try again.'), 'alerts/flash_error');
                $this->redirect($this->referer());
            }
        }
    }
    public function reporter_index()
    {
        # code...
        $this->Prg->commonProcess();
        if (!empty($this->passedArgs['start_date']) || !empty($this->passedArgs['end_date'])) $this->passedArgs['range'] = true;
        if (isset($this->passedArgs['pages']) && !empty($this->passedArgs['pages'])) $this->paginate['limit'] = $this->passedArgs['pages'];
        else $this->paginate['limit'] = reset($this->page_options);
        //Health program fiasco
        if ($this->Session->read('Auth.User.user_type') == 'Public Health Program') {
            $this->passedArgs['health_program'] = $this->Session->read('Auth.User.health_program');
        }

        $criteria = $this->Ce2b->parseCriteria($this->passedArgs);
        if ($this->Session->read('Auth.User.user_type') != 'Public Health Program') $criteria['Ce2b.user_id'] = $this->Auth->User('id');
        if ($this->Session->read('Auth.User.user_type') == 'Public Health Program') {
            $criteria['Ce2b.submitted'] = array(2);
        } else {
            if (isset($this->request->query['submitted'])) {
                if ($this->request->query['submitted'] == 1) {
                    $criteria['Ce2b.submitted'] = array(0, 1);
                } else {
                    $criteria['Ce2b.submitted'] = array(2, 3);
                }
            } else {
                $criteria['Ce2b.submitted'] = array(0, 1, 2, 3);
            }
        }
        // add deleted condition to criteria
        $criteria['Ce2b.deleted'] = false;
        $this->paginate['conditions'] = $criteria;
        $this->paginate['order'] = array('Ce2b.created' => 'desc');
        $this->set('ce2bs', Sanitize::clean($this->paginate(), array('encode' => false)));
        $this->set('page_options', $this->page_options);
    }


    public function manager_index()
    {
        # code...
        $this->Prg->commonProcess();
        if (!empty($this->passedArgs['start_date']) || !empty($this->passedArgs['end_date'])) $this->passedArgs['range'] = true;
        if (isset($this->passedArgs['pages']) && !empty($this->passedArgs['pages'])) $this->paginate['limit'] = $this->passedArgs['pages'];
        else $this->paginate['limit'] = reset($this->page_options);


        $criteria = $this->Ce2b->parseCriteria($this->passedArgs);
        $criteria['Ce2b.copied !='] = '1';
        if (isset($this->request->query['submitted']) && $this->request->query['submitted'] == 1) {
            $criteria['Ce2b.submitted'] = array(0, 1);
        } else {
            $criteria['Ce2b.submitted'] = array(2, 3);
        }
        $criteria['Ce2b.deleted'] = false;
        $criteria['Ce2b.archived'] = false;
        $this->paginate['conditions'] = $criteria;
        $this->paginate['order'] = array('Ce2b.created' => 'desc');
        $this->set('ce2bs', Sanitize::clean($this->paginate(), array('encode' => false)));
        $this->set('page_options', $this->page_options);
    }
    public function download($id = null)
    {
        $this->Ce2b->id = $id;
        if (!$this->Ce2b->exists()) {
            $this->Session->setFlash(__('Could not verify the E2b report ID. Please ensure the ID is correct.'), 'flash_error');
            $this->redirect('/');
        }

        $ce2b = $this->Ce2b->find('first', array(
            'conditions' => array('Ce2b.id' => $id),
        ));
        $e2b_content = $ce2b['Ce2b']['e2b_content'];
        $filename = 'E2B.xml'; //$ce2b['Ce2b']['id'] . ".xml";
        // Set the HTTP headers for file download
        header('Content-Type: application/xml');
        header('Content-Disposition: attachment; filename="' . $filename . '"');

        // Output the XML content
        echo $e2b_content;
    }
    public function manager_copy($id = null)
    {
        if ($this->request->is('post')) {
            $this->Ce2b->id = $id;
            if (!$this->Ce2b->exists()) {
                throw new NotFoundException(__('Invalid E2b'));
            }
            $this->generate_copy($id);
        }
    }

    public function reviewer_copy($id = null)
    {
        if ($this->request->is('post')) {
            $this->Ce2b->id = $id;
            if (!$this->Ce2b->exists()) {
                throw new NotFoundException(__('Invalid E2b'));
            }
            $this->generate_copy($id);
        }
    }

    public function generate_copy($id)
    {
        # code...
        $ce2b = Hash::remove($this->Ce2b->find(
            'first',
            array(
                'conditions' => array('Ce2b.id' => $id)
            )
        ), 'Ce2b.id');

        if ($ce2b['Ce2b']['copied']) {
            $this->Session->setFlash(__('A clean copy already exists. Click on edit to update changes.'), 'alerts/flash_error');
            return $this->redirect(array('action' => 'index'));
        }
        $data_save = $ce2b['Ce2b'];
        $data_save['ce2b_id'] = $id;
        $data_save['user_id'] = $this->Auth->User('id');;
        $this->Ce2b->saveField('copied', 1);
        $data_save['copied'] = 2;
        $data_save['submitted'] = 1;

        if ($this->Ce2b->saveAssociated($data_save, array('deep' => true, 'validate' => false))) {
            $this->Session->setFlash(__('Clean copy of ' . $data_save['reference_no'] . ' has been created'), 'alerts/flash_info');
            $this->redirect(array('action' => 'edit', $this->Ce2b->id));
        } else {
            $this->Session->setFlash(__('The clean copy could not be created. Please, try again.'), 'alerts/flash_error');
            $this->redirect($this->referer());
        }
    }
    public function manager_edit($id = null)
    {
        $this->Ce2b->id = $id;
        if (!$this->Ce2b->exists()) {
            throw new NotFoundException(__('Invalid E2b'));
        }
        $this->general_editor($id);
    }
    public function reviewer_edit($id = null)
    {
        # code...
        $this->Ce2b->id = $id;
        if (!$this->Ce2b->exists()) {
            throw new NotFoundException(__('Invalid E2b'));
        }
        $this->general_editor($id);
    }

    private function parseE2BReport($xmlFilePath)
    {
        try {
            if (!file_exists($xmlFilePath)) {
                throw new NotFoundException(__('Invalid file path'));
            }

            $xml = simplexml_load_file($xmlFilePath);
            if ($xml === false) {
                throw new Exception(__('Failed to load XML file'));
            }

            $namespaces = $xml->getNamespaces(true);
            $xml->registerXPathNamespace('hl7', $namespaces['']);

            $data = [];

            // Batch Number
            $data['batch_number'] = (string) $xml->id['extension'];

            // Date of Batch Transmission
            $data['batch_transmission_date'] = (string) $xml->creationTime['value'];

            // Type of Messages in Batch
            $data['message_type'] = (string) $xml->name['code'];

            // ICSR Message Header
            $icsr = $xml->xpath('//hl7:PORR_IN049016UV')[0];

            // Message Identifier
            $data['message_identifier'] = (string) $icsr->id['extension'];

            // Date of Message Creation
            $data['message_creation_date'] = (string) $icsr->creationTime['value'];

            // Message Receiver Identifier
            $data['message_receiver'] = (string) $icsr->receiver->device->id['extension'];

            // Message Sender Identifier
            $data['message_sender'] = (string) $icsr->sender->device->id['extension'];

            // Case Safety Report
            $caseReport = $icsr->controlActProcess->subject->investigationEvent;

            // Sender's Case Safety Report Unique Identifier
            $data['case_report_identifier'] = (string) $caseReport->id[0]['extension'];

            // Worldwide Unique Case Identification Number
            $data['unique_case_identifier'] = (string) $caseReport->id[1]['extension'];

            // Case Narrative
            $data['case_narrative'] = (string) $caseReport->text;

            // Date Report Was First Received from Source
            $data['report_received_date'] = (string) $caseReport->effectiveTime->low['value'];

            // Date of Receipt of the Most Recent Information for This Report
            $data['most_recent_info_date'] = (string) $caseReport->availabilityTime['value'];

            // Extract Batch Receiver Identifier
            $data['batch_receiver_identifier'] = (string) $xml->receiver->device->id['extension'];

            // Extract Batch Sender Identifier
            $data['batch_sender_identifier'] = (string) $xml->sender->device->id['extension'];
            //     <!--D: Patient Characteristics-->
            $primaryRole = $caseReport->component->adverseEventAssessment->subject1->primaryRole;
            // return $component;
            $data['patient_name'] = (string)  $primaryRole->player1->name;
            $data['patient_gender'] = (string) $primaryRole->player1->administrativeGenderCode['code'];

            $subjectOf2 = $primaryRole->subjectOf2;
            // <!--D.7.1.r: Relevant Medical History and Concurrent Conditions (not including reaction / event)

            $components = $subjectOf2->organizer->component;

            $MedicalData = [];

            foreach ($components as $component) {
                $observation = $component->observation;
                $obsData = [];
                // Extract code
                $obsData['code'] = (string) $observation->code['code'];
                // Extract codeSystemVersion
                $obsData['codeSystemVersion'] = (string) $observation->code['codeSystemVersion'];
                // Extract codeSystem
                $obsData['codeSystem'] = (string) $observation->code['codeSystem'];
                // Extract effectiveTime
                $obsData['effectiveTime'] = (string) $observation->effectiveTime->low['value'];
                // Add the extracted observation data to the main data array
                $MedicalData[] = $obsData;
            }
            $data['medical_history'] = $MedicalData;
            //  <!--E.i: REACTION(S)/EVENT(S) - (1)-->
            $subjectOf2s = [];
            foreach ($primaryRole->subjectOf2 as $sample) {
                $subjectOf2s[] = $sample;
            }
            $firstItem = null;
            $lastItem = null;
            if (!empty($subjectOf2s)) {
                // Get the first item
                // $firstItem = $subjectOf2s[0];
                // Get the last item
                // $lastItem = $subjectOf2s[count($subjectOf2s) - 1];

                // Remove the first item
                $firstItem = array_shift($subjectOf2s);

                // Remove the last item
                $lastItem = array_pop($subjectOf2s);
            }
            $reactions = [];

            foreach ($subjectOf2s as $reaction) {
                $single = $reaction->observation;
                $reactionDetails = array(
                    'id' => (string) $single->id['root'],
                    'code' => (string) $single->code['code'],
                    'effectiveTime' => (string) $single->effectiveTime->low['value'],
                    'medra_code' => (string) $single->value['code'],
                    'country_origin' => (string) $single->location->locatedEntity->locatedPlace->code['code'],
                    'medra_translation' => (string) $single->outboundRelationship2->observation->value

                );
                $reactions[] = $reactionDetails;
            }

            // return $subjectOf2s;
            //    return $data['reactions']=$reactions;

            return $data;
        } catch (Exception $e) {
            return null;
        }
    }
    public function general_editor_alt($id)
    {
        $this->Ce2b->id = $id;
        if (!$this->Ce2b->exists()) {
            throw new NotFoundException(__('Invalid E2b'));
        }
        $ce2b = $this->Ce2b->read(null, $id);
        if ($ce2b['Ce2b']['submitted'] > 1) {
            $this->Session->setFlash(__('The E2b has been submitted'), 'alerts/flash_info');
            $this->redirect(array('action' => 'view', $this->Ce2b->id));
        }
        if ($ce2b['Ce2b']['user_id'] !== $this->Auth->user('id')) {
            $this->Session->setFlash(__('You don\'t have permission to edit this E2b!!'), 'alerts/flash_error');
            $this->redirect(array('controller' => 'users', 'action' => 'dashboard'));
        }
        if ($this->request->is('post') || $this->request->is('put')) {

            if (isset($this->request->data['submitReport'])) {
                if ($this->request->data['Ce2b']['e2b_type'] == "R2") {
                    try {
                        $file = $this->request->data['Ce2b']['e2b_file_data'];
                        $xmlString = file_get_contents($file['tmp_name']);
                        $xml = Xml::build($xmlString);
                        $xmlString = $xml->asXML();
                        $this->Ce2b->saveField('e2b_content', $xmlString);
                    } catch (Exception $e) {
                        $this->Session->setFlash(__('Whoops! experienced problems uploading file. Please try again later'), 'alerts/flash_error');
                        $this->redirect(array('action' => 'edit', $this->Ce2b->id));
                    }

                    if (!empty($ce2b['Ce2b']['reference_no']) && $ce2b['Ce2b']['reference_no'] == 'new') {
                        $count = $this->Ce2b->find('count',  array(
                            'fields' => 'Ce2b.reference_no',
                            'conditions' => array(
                                'Ce2b.submitted_date BETWEEN ? and ?' => array(date("Y-01-01 00:00:00"), date("Y-m-d H:i:s")), 'Ce2b.reference_no !=' => 'new'
                            )
                        ));
                        $count++;
                        $count = ($count < 10) ? "0$count" : $count;
                        $reference = 'E2B/' . date('Y') . '/' . $count;
                        $this->Ce2b->saveField('reference_no', $reference);
                        $this->Ce2b->saveField('submitted', 2);
                        $this->Ce2b->saveField('submitted_date', date("Y-m-d H:i:s"));
                    }
                    $this->Session->setFlash(__('The E2b has been submitted to PPB'), 'alerts/flash_success');
                    $this->redirect(array('action' => 'view', $this->Ce2b->id));
                } else  if ($this->request->data['Ce2b']['e2b_type'] == "R3") {
                    if (!empty($ce2b['Ce2b']['reference_no']) && $ce2b['Ce2b']['reference_no'] == 'new') {
                        $count = $this->Ce2b->find('count',  array(
                            'fields' => 'Ce2b.reference_no',
                            'conditions' => array(
                                'Ce2b.submitted_date BETWEEN ? and ?' => array(date("Y-01-01 00:00:00"), date("Y-m-d H:i:s")), 'Ce2b.reference_no !=' => 'new'
                            )
                        ));
                        $count++;
                        $count = ($count < 10) ? "0$count" : $count;
                        $reference = 'E2B/' . date('Y') . '/' . $count;
                        $this->Ce2b->saveField('reference_no', $reference);
                        $this->Ce2b->saveField('submitted', 2);
                        $this->Ce2b->saveField('submitted_date', date("Y-m-d H:i:s"));
                    }
                    $this->Session->setFlash(__('The E2b has been submitted to PPB'), 'alerts/flash_success');
                    $this->redirect(array('action' => 'view', $this->Ce2b->id));
                }
            }

            $ce2b = $this->Ce2b->read(null, $id);
        } else {
            $this->request->data = $this->Ce2b->read(null, $id);
        }
        $counties = $this->Ce2b->County->find('list', array('order' => array('County.county_name' => 'ASC')));
        $this->set(compact('counties'));
        $sub_counties = $this->Ce2b->SubCounty->find('list', array('order' => array('SubCounty.sub_county_name' => 'ASC')));
        $this->set(compact('sub_counties'));
        $designations = $this->Ce2b->Designation->find('list', array('order' => array('Designation.name' => 'ASC')));
        $this->set(compact('designations'));
    }
    public function general_editor($id = null)
    {

        $this->Ce2b->id = $id;
        if (!$this->Ce2b->exists()) {
            throw new NotFoundException(__('Invalid E2b'));
        }
        $ce2b = $this->Ce2b->read(null, $id);
        if ($ce2b['Ce2b']['submitted'] > 1) {
            $this->Session->setFlash(__('The E2b has been submitted'), 'alerts/flash_info');
            $this->redirect(array('action' => 'view', $this->Ce2b->id));
        }
        if ($ce2b['Ce2b']['user_id'] !== $this->Auth->user('id')) {
            $this->Session->setFlash(__('You don\'t have permission to edit this E2b!!'), 'alerts/flash_error');
            $this->redirect(array('controller' => 'users', 'action' => 'dashboard'));
        }

        // Start of Post 
        if ($this->request->is('post') || $this->request->is('put')) {

            $flattenedData = null;
            $xmlString = null;
            $validate = false;
            if (isset($this->request->data['submitReport'])) {
                $validate = 'first';
                try {

                    // Manipulate R3
                    $file = $this->request->data['Ce2b']['e2b_file_data'];
                    $xmlString = file_get_contents($file['tmp_name']);
                    $xml = Xml::build($xmlString);
                    $xmlString = $xml->asXML();

                    $filePath = WWW_ROOT . 'files' . DS . $file['name'];
                    move_uploaded_file($file['tmp_name'], $filePath);

                    $xmlArray = Xml::toArray(Xml::build($filePath));

                    $declaration1 = '<?xml version="1.0" encoding="utf-8"?>';
                    $rootElement1 = '<MCCI_IN200100UV01 ITSVersion="XML_1.0" xsi:schemaLocation="urn:hl7-org:v3 http://eudravigilance.ema.europa.eu/XSD/multicacheschemas/MCCI_IN200100UV01.xsd" xmlns="urn:hl7-org:v3" xmlns:fo="http://www.w3.org/1999/XSL/Format" xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance" xmlns:mif="urn:hl7-org:v3/mif">';
                    $declaration2 = '<?xml version="1.0" encoding="ISO-8859-1"?>';
                    $doctype = '<!DOCTYPE ichicsr SYSTEM "http://eudravigilance.ema.europa.eu/dtd/icsr21xml.dtd">';
                    $rootElement2 = '<ichicsr lang="en">';

                    // Check for the first type
                    // if (strpos($xmlString, $declaration1) === 0 && strpos($xmlString, $rootElement1, strlen($declaration1)) === strlen($declaration1)) {
                    //     $this->request->data['Ce2b']['e2b_type'] = "R3";
                    // }
                    // // Check for the second type
                    // elseif (strpos($xmlString, $declaration2) === 0 && strpos($xmlString, $doctype, strlen($declaration2)) === strlen($declaration2) && strpos($xmlString, $rootElement2, strlen($declaration2 . $doctype)) === strlen($declaration2 . $doctype)) {
                    //     $this->request->data['Ce2b']['e2b_type'] = "R2";
                    // } 

                    if (strpos($xmlString, 'MCCI_IN200100UV01') !== false) {
                        $this->request->data['Ce2b']['e2b_type'] = "R3";
                    } else {
                        $this->request->data['Ce2b']['e2b_type'] = "R2";
                    }

                    $this->Ce2b->saveField('e2b_content', $xmlString, false);
                    $flattenedData = $this->flattenXml($xmlArray);
                    $reactions = $this->extractObservations($flattenedData);
                    $criteria = $this->extractCriteria($flattenedData);
                    $this->request->data['Ce2bReaction'] = $reactions;
                    $drugs = $this->extractDrugs($flattenedData, count($reactions));
                    $this->request->data['Ce2bListOfDrug'] = $drugs;

                    $seriousValues = Hash::extract($reactions, '{n}.serious');

                    // Checking if any "serious" value is true
                    $hasSerious = in_array('true', $seriousValues);

                    $this->request->data['Ce2b']['serious'] = $hasSerious;


                    // Extract other sections as well::::


                } catch (Exception $e) {

                    // Handle R2s
                    $this->request->data['Ce2b']['e2b_type'] = "R2";
                }
            }

            if ($this->Ce2b->saveAssociated($this->request->data, array('validate' => $validate, 'deep' => true))) {
                if (isset($this->request->data['submitReport'])) {

                    try {
                        //populate other parts::::                       

                        $newReportData = $this->extractReportData($flattenedData);

                        foreach ($newReportData as $key => $value) {
                            $this->Ce2b->saveField($key, $value, false);
                        }
                    } catch (Exception $rr) {
                        //
                    }

                    $this->Ce2b->saveField('submitted', 2);
                    $this->Ce2b->saveField('submitted_date', date("Y-m-d H:i:s"));
                    if (!empty($ce2b['Ce2b']['reference_no']) && $ce2b['Ce2b']['reference_no'] == 'new') {
                        $count = $this->Ce2b->find('count',  array(
                            'fields' => 'Ce2b.reference_no',
                            'conditions' => array(
                                'Ce2b.submitted_date BETWEEN ? and ?' => array(date("Y-01-01 00:00:00"), date("Y-m-d H:i:s")), 'Ce2b.reference_no !=' => 'new'
                            )
                        ));
                        $count++;
                        $count = ($count < 10) ? "0$count" : $count;
                        $reference = 'E2B/' . date('Y') . '/' . $count;
                        $this->Ce2b->saveField('reference_no', $reference);
                    }

                    $ce2b = $this->Ce2b->read(null, $id);

                    //******************       Send Email and Notifications to Reporter and Managers          *****************************
                    $this->loadModel('Message');
                    $html = new HtmlHelper(new ThemeView());
                    $message = $this->Message->find('first', array('conditions' => array('name' => 'reporter_ce2b_submit')));
                    $variables = array(
                        'name' => $this->Auth->User('name'), 'reference_no' => $ce2b['Ce2b']['reference_no'],
                        'reference_link' => $html->link(
                            $ce2b['Ce2b']['reference_no'],
                            array('controller' => 'ce2bs', 'action' => 'view', $ce2b['Ce2b']['id'], 'reporter' => true, 'full_base' => true),
                            array('escape' => false)
                        ),
                        'modified' => $ce2b['Ce2b']['modified']
                    );
                    $datum = array(
                        'email' => $ce2b['Ce2b']['reporter_email'],
                        'id' => $id, 'user_id' => $this->Auth->User('id'), 'type' => 'reporter_ce2b_submit', 'model' => 'Ce2b',
                        'subject' => CakeText::insert($message['Message']['subject'], $variables),
                        'message' => CakeText::insert($message['Message']['content'], $variables)
                    );

                    $this->loadModel('Queue.QueuedTask');
                    $this->QueuedTask->createJob('GenericEmail', $datum);
                    $this->QueuedTask->createJob('GenericNotification', $datum);


                    //Send SMS
                    // if (!empty($ce2b['Ce2b']['reporter_phone']) && strlen(substr($ce2b['Ce2b']['reporter_phone'], -9)) == 9 && is_numeric(substr($ce2b['Ce2b']['reporter_phone'], -9))) {
                    //     $datum['phone'] = '254' . substr($ce2b['Ce2b']['reporter_phone'], -9);
                    //     $variables['reference_url'] = Router::url(['controller' => 'ce2bs', 'action' => 'view', $ce2b['Ce2b']['id'], 'reporter' => true, 'full_base' => true]);
                    //     $datum['sms'] = CakeText::insert($message['Message']['sms'], $variables);
                    //     $this->QueuedTask->createJob('GenericSms', $datum);
                    // }

                    //Notify managers
                    $users = $this->Ce2b->User->find('all', array(
                        'contain' => array(),
                        'conditions' => array(
                            'User.group_id' => 2,
                            'User.is_active' => '1'
                        )
                    ));
                    foreach ($users as $user) {
                        $variables = array(
                            'name' => $user['User']['name'], 'reference_no' => $ce2b['Ce2b']['reference_no'],
                            'reference_link' => $html->link(
                                $ce2b['Ce2b']['reference_no'],
                                array('controller' => 'Ce2bs', 'action' => 'view', $ce2b['Ce2b']['id'], 'manager' => true, 'full_base' => true),
                                array('escape' => false)
                            ),
                            'modified' => $ce2b['Ce2b']['modified']
                        );
                        $datum = array(
                            'email' => $user['User']['email'],
                            'id' => $id, 'user_id' => $user['User']['id'], 'type' => 'reporter_ce2b_submit', 'model' => 'Ce2b',
                            'subject' => CakeText::insert($message['Message']['subject'], $variables),
                            'message' => CakeText::insert($message['Message']['content'], $variables)
                        );

                        $this->QueuedTask->createJob('GenericEmail', $datum);
                        $this->QueuedTask->createJob('GenericNotification', $datum);
                    }
                    // **********************************    END   *********************************

                    $this->Session->setFlash(__('The E2b has been submitted to PPB'), 'alerts/flash_success');
                    $this->redirect(array('action' => 'view', $this->Ce2b->id));
                }
                $this->Session->setFlash(__('The E2b has been saved'), 'alerts/flash_success');
                $this->redirect($this->referer());
            } else {
                $this->Session->setFlash(__('The E2b could not be saved. Please review the error(s) and resubmit and try again.'), 'alerts/flash_error');
            }
        } else {
            $this->request->data = $this->Ce2b->read(null, $id);
        }
        // End of Post
        $counties = $this->Ce2b->County->find('list', array('order' => array('County.county_name' => 'ASC')));
        $this->set(compact('counties'));
        $sub_counties = $this->Ce2b->SubCounty->find('list', array('order' => array('SubCounty.sub_county_name' => 'ASC')));
        $this->set(compact('sub_counties'));
        $designations = $this->Ce2b->Designation->find('list', array('order' => array('Designation.name' => 'ASC')));
        $this->set(compact('designations'));
    }

    public function general_editor_separate($id = null)
    {
        # code...
        $this->Ce2b->id = $id;
        if (!$this->Ce2b->exists()) {
            throw new NotFoundException(__('Invalid E2b'));
        }
        $ce2b = $this->Ce2b->read(null, $id);
        if ($ce2b['Ce2b']['submitted'] > 1) {
            $this->Session->setFlash(__('The E2b has been submitted'), 'alerts/flash_info');
            $this->redirect(array('action' => 'view', $this->Ce2b->id));
        }
        if ($ce2b['Ce2b']['user_id'] !== $this->Auth->user('id')) {
            $this->Session->setFlash(__('You don\'t have permission to edit this E2b!!'), 'alerts/flash_error');
            $this->redirect(array('controller' => 'users', 'action' => 'dashboard'));
        }
        if ($this->request->is('post') || $this->request->is('put')) {

            $flattenedData = null;
            $xmlString = null;
            $validate = false;
            if (isset($this->request->data['submitReport'])) {
                $validate = 'first';
                try {
                    $file = $this->request->data['Ce2b']['e2b_file_data'];
                    $xmlString = file_get_contents($file['tmp_name']);
                    $xml = Xml::build($xmlString);
                    $xmlString = $xml->asXML();

                    $filePath = WWW_ROOT . 'files' . DS . $file['name'];
                    move_uploaded_file($file['tmp_name'], $filePath);

                    $xmlArray = Xml::toArray(Xml::build($filePath));
                    $flattenedData = $this->flattenXml($xmlArray);
                    $reactions = $this->extractObservations($flattenedData);
                    $criteria = $this->extractCriteria($flattenedData);
                    $this->request->data['Ce2bReaction'] = $reactions;
                    $drugs = $this->extractDrugs($flattenedData, count($reactions));
                    $this->request->data['Ce2bListOfDrug'] = $drugs;

                    $seriousValues = Hash::extract($reactions, '{n}.serious');

                    // Checking if any "serious" value is true
                    $hasSerious = in_array('true', $seriousValues);

                    $this->request->data['Ce2b']['serious'] = $hasSerious;
                    $this->request->data['Ce2b']['e2b_type'] = "R3";
                } catch (Exception $e) {
                    $this->request->data['Ce2b']['e2b_type'] = "R2";
                }
            }
            if ($this->Ce2b->saveAssociated($this->request->data, array('validate' => $validate, 'deep' => true))) {
                if (isset($this->request->data['submitReport'])) {
                    try {
                        try {
                            $file = $this->request->data['Ce2b']['e2b_file_data'];
                            $xmlString = file_get_contents($file['tmp_name']);
                            $xml = Xml::build($xmlString);
                            // Find all the messagereceiveridentifier elements
                            $elements = $xml->xpath('//messagereceiveridentifier');

                            // Loop through the elements and extract their values
                            $valid = false;
                            foreach ($elements as $element) {
                                $value = (string) $element;
                                if ($value == 'KE') {
                                    $valid = true;
                                }
                            }
                            if (!$valid) {
                                $this->Session->setFlash(__('The E2b file is not valid. Please try again later'), 'alerts/flash_error');
                                $this->redirect(array('action' => 'edit', $this->Ce2b->id));
                            }
                            try {
                                $xmlString = $xml->asXML();
                                $this->Ce2b->saveField('e2b_content', $xmlString);
                            } catch (Exception $e) {
                                $this->Session->setFlash(__('Whoops! experienced problems uploading file. Please try again later'), 'alerts/flash_error');
                                $this->redirect(array('action' => 'edit', $this->Ce2b->id));
                            }
                        } catch (XmlException $e) {
                            $this->Session->setFlash(__('Whoops! experienced problems uploading file. Please try again later'), 'alerts/flash_error');
                            $this->redirect(array('action' => 'edit', $this->Ce2b->id));
                        }
                    } catch (Exception $r) {

                        /**Dealing with R3 */
                        try {

                            $file = $this->request->data['Ce2b']['e2b_file_data'];

                            // Check if file was uploaded successfully
                            if ($file['error'] === UPLOAD_ERR_OK) {
                                $xmlFilePath = $file['tmp_name']; // Temporary file path
                                // $data = $this->parseE2BReport($xmlFilePath);
                                try {

                                    $newReportData = $this->extractReportData($flattenedData);

                                    foreach ($newReportData as $key => $value) {
                                        $this->Ce2b->saveField($key, $value, false);
                                    }
                                    $this->Ce2b->saveField('e2b_content', $xmlString, false);
                                } catch (Exception $e) {
                                    $this->Session->setFlash(__('Whoops! experienced problems uploading file. Please try again later'), 'alerts/flash_error');
                                    $this->redirect(array('action' => 'edit', $this->Ce2b->id));
                                }
                                // }
                            } else {
                                $this->Session->setFlash(__('Whoops! experienced problems uploading file. Please try again later'), 'alerts/flash_error');
                                $this->redirect(array('action' => 'edit', $this->Ce2b->id));
                            }
                        } catch (Exception $rr) {
                        }
                    }

                    $this->Ce2b->saveField('submitted', 2);
                    $this->Ce2b->saveField('submitted_date', date("Y-m-d H:i:s"));
                    if (!empty($ce2b['Ce2b']['reference_no']) && $ce2b['Ce2b']['reference_no'] == 'new') {
                        $count = $this->Ce2b->find('count',  array(
                            'fields' => 'Ce2b.reference_no',
                            'conditions' => array(
                                'Ce2b.submitted_date BETWEEN ? and ?' => array(date("Y-01-01 00:00:00"), date("Y-m-d H:i:s")), 'Ce2b.reference_no !=' => 'new'
                            )
                        ));
                        $count++;
                        $count = ($count < 10) ? "0$count" : $count;
                        $reference = 'E2B/' . date('Y') . '/' . $count;
                        $this->Ce2b->saveField('reference_no', $reference);
                    }

                    $ce2b = $this->Ce2b->read(null, $id);

                    //******************       Send Email and Notifications to Reporter and Managers          *****************************
                    $this->loadModel('Message');
                    $html = new HtmlHelper(new ThemeView());
                    $message = $this->Message->find('first', array('conditions' => array('name' => 'reporter_ce2b_submit')));
                    $variables = array(
                        'name' => $this->Auth->User('name'), 'reference_no' => $ce2b['Ce2b']['reference_no'],
                        'reference_link' => $html->link(
                            $ce2b['Ce2b']['reference_no'],
                            array('controller' => 'ce2bs', 'action' => 'view', $ce2b['Ce2b']['id'], 'reporter' => true, 'full_base' => true),
                            array('escape' => false)
                        ),
                        'modified' => $ce2b['Ce2b']['modified']
                    );
                    $datum = array(
                        'email' => $ce2b['Ce2b']['reporter_email'],
                        'id' => $id, 'user_id' => $this->Auth->User('id'), 'type' => 'reporter_ce2b_submit', 'model' => 'Ce2b',
                        'subject' => CakeText::insert($message['Message']['subject'], $variables),
                        'message' => CakeText::insert($message['Message']['content'], $variables)
                    );

                    $this->loadModel('Queue.QueuedTask');
                    $this->QueuedTask->createJob('GenericEmail', $datum);
                    $this->QueuedTask->createJob('GenericNotification', $datum);


                    //Send SMS
                    // if (!empty($ce2b['Ce2b']['reporter_phone']) && strlen(substr($ce2b['Ce2b']['reporter_phone'], -9)) == 9 && is_numeric(substr($ce2b['Ce2b']['reporter_phone'], -9))) {
                    //     $datum['phone'] = '254' . substr($ce2b['Ce2b']['reporter_phone'], -9);
                    //     $variables['reference_url'] = Router::url(['controller' => 'ce2bs', 'action' => 'view', $ce2b['Ce2b']['id'], 'reporter' => true, 'full_base' => true]);
                    //     $datum['sms'] = CakeText::insert($message['Message']['sms'], $variables);
                    //     $this->QueuedTask->createJob('GenericSms', $datum);
                    // }

                    //Notify managers
                    $users = $this->Ce2b->User->find('all', array(
                        'contain' => array(),
                        'conditions' => array(
                            'User.group_id' => 2,
                            'User.is_active' => '1'
                        )
                    ));
                    foreach ($users as $user) {
                        $variables = array(
                            'name' => $user['User']['name'], 'reference_no' => $ce2b['Ce2b']['reference_no'],
                            'reference_link' => $html->link(
                                $ce2b['Ce2b']['reference_no'],
                                array('controller' => 'Ce2bs', 'action' => 'view', $ce2b['Ce2b']['id'], 'manager' => true, 'full_base' => true),
                                array('escape' => false)
                            ),
                            'modified' => $ce2b['Ce2b']['modified']
                        );
                        $datum = array(
                            'email' => $user['User']['email'],
                            'id' => $id, 'user_id' => $user['User']['id'], 'type' => 'reporter_ce2b_submit', 'model' => 'Ce2b',
                            'subject' => CakeText::insert($message['Message']['subject'], $variables),
                            'message' => CakeText::insert($message['Message']['content'], $variables)
                        );

                        $this->QueuedTask->createJob('GenericEmail', $datum);
                        $this->QueuedTask->createJob('GenericNotification', $datum);
                    }
                    // **********************************    END   *********************************

                    $this->Session->setFlash(__('The E2b has been submitted to PPB'), 'alerts/flash_success');
                    $this->redirect(array('action' => 'view', $this->Ce2b->id));
                }
                // debug($this->request->data);
                $this->Session->setFlash(__('The E2b has been saved'), 'alerts/flash_success');
                $this->redirect($this->referer());
            } else {
                $this->Session->setFlash(__('The E2b could not be saved. Please review the error(s) and resubmit and try again.'), 'alerts/flash_error');
            }
        } else {
            $this->request->data = $this->Ce2b->read(null, $id);
        }

        //$Ce2b = $this->request->data;

        $counties = $this->Ce2b->County->find('list', array('order' => array('County.county_name' => 'ASC')));
        $this->set(compact('counties'));
        $sub_counties = $this->Ce2b->SubCounty->find('list', array('order' => array('SubCounty.sub_county_name' => 'ASC')));
        $this->set(compact('sub_counties'));
        $designations = $this->Ce2b->Designation->find('list', array('order' => array('Designation.name' => 'ASC')));
        $this->set(compact('designations'));
    }
    private function extractDrugs($flattenedData, $reaction)

    {
        $observations = [];
        $index = $reaction + 1;

        while (true) {
            // Construct the dynamic key for the observation
            $observationKey = "MCCI_IN200100UV01.PORR_IN049016UV.controlActProcess.subject.investigationEvent.component.0.adverseEventAssessment.subject1.primaryRole.subjectOf2.{$index}.organizer";

            // Check if the key exists in the flattened data
            if (isset($flattenedData[$observationKey . ".@classCode"])) {

                $brand_name_key = $observationKey .  ".component.substanceAdministration.consumable.instanceOfKind.kindOfProduct.ingredient.ingredientSubstance.name";
                $dose_key = $observationKey . ".component.substanceAdministration.outboundRelationship2.substanceAdministration.doseQuantity";
                $drug_name_key = $observationKey .  ".component.substanceAdministration.consumable.instanceOfKind.kindOfProduct.name";
                $route_key = $observationKey . ".component.substanceAdministration.outboundRelationship2.substanceAdministration.routeCode.originalText";
                $drug_name = null;
                $brand_name = null;
                $dose = null;
                $route = null;
                if (isset($flattenedData[$drug_name_key])) {
                    $drug_name = $flattenedData[$drug_name_key];
                }

                if (isset($flattenedData[$dose_key])) {
                    $dose = $flattenedData[$dose_key];
                }
                if (isset($flattenedData[$brand_name_key])) {
                    $brand_name = $flattenedData[$brand_name_key];
                }
                if (isset($flattenedData[$route_key])) {
                    $route = $flattenedData[$route_key];
                }
                $observations[] = [
                    'index' => $index,
                    'drug_name' => $drug_name,
                    'brand_name' => $brand_name,
                    'dose' => $dose,
                    'route' => $route

                ];
                $index++;
            } else {
                // Break the loop if the key does not exist
                break;
            }
        }

        return $observations;
    }
    function getNestedValueDynamic($array, $keyPath)
    {
        $keys = explode('.', $keyPath);
        return $this->getNestedValueRecursive($array, $keys);
    }

    function getNestedValueRecursive($array, $keys)
    {
        $currentValue = $array;

        foreach ($keys as $index => $key) {
            if ($key === '*') {
                // This indicates we need to look at all sub-keys from a specific index onwards
                $nextKeys = array_slice($keys, $index + 1);
                $found = false;
                foreach ($currentValue as $subKey => $subValue) {
                    if (is_array($subValue)) {
                        $result = $this->getNestedValueRecursive($subValue, $nextKeys);
                        if ($result !== null) {
                            return $result;
                        }
                    }
                }
                if (!$found) {
                    return null;
                }
            } else {
                // Normal key handling
                if (is_array($currentValue) && array_key_exists($key, $currentValue)) {
                    $currentValue = $currentValue[$key];
                } else {
                    // Return null if any key in the path does not exist
                    return null;
                }
            }
        }

        return $currentValue;
    }
    public function extractCriteria($data)
    {



        // Using wildcards to represent dynamic keys
        $keyPath = 'MCCI_IN200100UV01.PORR_IN049016UV.controlActProcess.subject.investigationEvent.component.0.adverseEventAssessment.subject1.primaryRole.subjectOf2.{n}.observation.outboundRelationship2.{n}.observation.value.@nullFlavor';

        $values = Hash::extract($data, $keyPath);
        $observations = [
            'value' => $values,

        ];


        return $observations;
    }

    private function extractObservations($flattenedData)
    {
        $observations = [];
        $index = 1;

        while (true) {
            // Construct the dynamic key for the observation
            $observationKey = "MCCI_IN200100UV01.PORR_IN049016UV.controlActProcess.subject.investigationEvent.component.0.adverseEventAssessment.subject1.primaryRole.subjectOf2.{$index}.observation";

            // Check if the key exists in the flattened data
            if (isset($flattenedData[$observationKey . ".@classCode"])) {
                // Construct the dynamic key for the locatedPlace code within the observation
                $locatedPlaceKey = $observationKey . ".location.locatedEntity.locatedPlace.code.@code";
                $start_date = $observationKey . ".effectiveTime.low";

                $meddra_code_key = $observationKey .  ".value.@code";
                $meddra_version_key = $observationKey . ".value.@codeSystemVersion";
                $reaction_name_key = $observationKey . ".outboundRelationship2.0.observation.value.@";

                // Results in Death
                $criteria_death_code_key = $observationKey . ".outboundRelationship2.1.observation.code.@code";
                $criteria_death_null_key = $observationKey . ".outboundRelationship2.1.observation.value.@nullFlavor";
                $criteria_death_value_key = $observationKey . ".outboundRelationship2.1.observation.value";

                // Life Threatening 
                $life_hreatening_code_key = $observationKey . ".outboundRelationship2.2.observation.code.@code";
                $life_hreatening_null_key = $observationKey . ".outboundRelationship2.2.observation.value.@nullFlavor";
                $life_hreatening_value_key = $observationKey . ".outboundRelationship2.2.observation.value";

                //    Caused / Prolonged Hospitalisation 
                $prolonged_hospitalisation_code_key = $observationKey . ".outboundRelationship2.3.observation.code.@code";
                $prolonged_hospitalisation_null_key = $observationKey . ".outboundRelationship2.3.observation.value.@nullFlavor";
                $prolonged_hospitalisation_value_key = $observationKey . ".outboundRelationship2.3.observation.value";

                // Disabling / Incapacitating 
                $incapacitating_code_key = $observationKey . ".outboundRelationship2.4.observation.code.@code";
                $incapacitating_null_key = $observationKey . ".outboundRelationship2.4.observation.value.@nullFlavor";
                $incapacitating_value_key = $observationKey . ".outboundRelationship2.4.observation.value";


                // Congenital Anomaly / Birth Defect  birth_defect
                $birth_defect_code_key = $observationKey . ".outboundRelationship2.5.observation.code.@code";
                $birth_defect_null_key = $observationKey . ".outboundRelationship2.5.observation.value.@nullFlavor";
                $birth_defect_value_key = $observationKey . ".outboundRelationship2.5.observation.value";


                // Other Medically Important Condition 
                $other_medical_code_key = $observationKey . ".outboundRelationship2.6.observation.code.@code";
                $other_medical_null_key = $observationKey . ".outboundRelationship2.6.observation.value.@nullFlavor";
                $other_medical_value_key = $observationKey . ".outboundRelationship2.6.observation.value";


                // Outcome of Reaction
                $reaction_outcome_code_key = $observationKey . ".outboundRelationship2.7.observation.code.@code";
                $reaction_outcome_null_key = $observationKey . ".outboundRelationship2.7.observation.value.@nullFlavor";
                $reaction_outcome_value_key = $observationKey . ".outboundRelationship2.7.observation.value.@code";


                // Medical Confirmation medical_confirmation
                $medical_confirmation_code_key = $observationKey . ".outboundRelationship2.8.observation.code.@code";
                $medical_confirmation_null_key = $observationKey . ".outboundRelationship2.8.observation.value.@nullFlavor";
                $medical_confirmation_value_key = $observationKey . ".outboundRelationship2.8.observation.value";


                $start_of_reaction = null;
                $country_of_source = null;
                $meddra_code = null;
                $meddra_version = null;
                $reaction_name = null;

                $criteria_death_code = $medical_confirmation_code = $reaction_outcome_code = $other_medical_code = $life_hreatening_code = $prolonged_hospitalisation_code = $incapacitating_code = $birth_defect_code = null;
                $criteria_death_null = $medical_confirmation_null = $reaction_outcome_null = $other_medical_null = $life_hreatening_null = $prolonged_hospitalisation_null = $incapacitating_null = $birth_defect_null = null;
                $criteria_death_value = $medical_confirmation_value = $reaction_outcome_value = $other_medical_value = $life_hreatening_value = $prolonged_hospitalisation_value = $incapacitating_value = $birth_defect_value = null;

                // medical_confirmation
                if (isset($flattenedData[$medical_confirmation_code_key])) {
                    $medical_confirmation_code = $flattenedData[$medical_confirmation_code_key];
                }
                if (isset($flattenedData[$medical_confirmation_null_key])) {
                    $medical_confirmation_null = $flattenedData[$medical_confirmation_null_key];
                }
                if (isset($flattenedData[$medical_confirmation_value_key])) {
                    $medical_confirmation_value = $flattenedData[$medical_confirmation_value_key];
                }
                // reaction_outcome
                if (isset($flattenedData[$reaction_outcome_code_key])) {
                    $reaction_outcome_code = $flattenedData[$reaction_outcome_code_key];
                }
                if (isset($flattenedData[$reaction_outcome_null_key])) {
                    $reaction_outcome_null = $flattenedData[$reaction_outcome_null_key];
                }
                if (isset($flattenedData[$reaction_outcome_value_key])) {
                    $reaction_outcome_value = $flattenedData[$reaction_outcome_value_key];
                }
                // other_medical
                if (isset($flattenedData[$other_medical_code_key])) {
                    $other_medical_code = $flattenedData[$other_medical_code_key];
                }
                if (isset($flattenedData[$other_medical_null_key])) {
                    $other_medical_null = $flattenedData[$other_medical_null_key];
                }
                if (isset($flattenedData[$other_medical_value_key])) {
                    $other_medical_value = $flattenedData[$other_medical_value_key];
                }
                // birth_defect
                if (isset($flattenedData[$birth_defect_code_key])) {
                    $birth_defect_code = $flattenedData[$birth_defect_code_key];
                }
                if (isset($flattenedData[$birth_defect_null_key])) {
                    $birth_defect_null = $flattenedData[$birth_defect_null_key];
                }
                if (isset($flattenedData[$birth_defect_value_key])) {
                    $birth_defect_value = $flattenedData[$birth_defect_value_key];
                }


                if (isset($flattenedData[$incapacitating_code_key])) {
                    $incapacitating_code = $flattenedData[$incapacitating_code_key];
                }
                if (isset($flattenedData[$incapacitating_null_key])) {
                    $incapacitating_null = $flattenedData[$incapacitating_null_key];
                }
                if (isset($flattenedData[$incapacitating_value_key])) {
                    $incapacitating_value = $flattenedData[$incapacitating_value_key];
                }

                //   Life Threatening  
                if (isset($flattenedData[$prolonged_hospitalisation_code_key])) {
                    $prolonged_hospitalisation_code = $flattenedData[$prolonged_hospitalisation_code_key];
                }
                if (isset($flattenedData[$prolonged_hospitalisation_null_key])) {
                    $prolonged_hospitalisation_null = $flattenedData[$prolonged_hospitalisation_null_key];
                }
                if (isset($flattenedData[$prolonged_hospitalisation_value_key])) {
                    $prolonged_hospitalisation_value = $flattenedData[$prolonged_hospitalisation_value_key];
                }


                //   Life Threatening  
                if (isset($flattenedData[$life_hreatening_code_key])) {
                    $life_hreatening_code = $flattenedData[$life_hreatening_code_key];
                }
                if (isset($flattenedData[$life_hreatening_null_key])) {
                    $life_hreatening_null = $flattenedData[$life_hreatening_null_key];
                }
                if (isset($flattenedData[$life_hreatening_value_key])) {
                    $life_hreatening_value = $flattenedData[$life_hreatening_value_key];
                }



                if (isset($flattenedData[$criteria_death_null_key])) {
                    $criteria_death_null = $flattenedData[$criteria_death_null_key];
                }
                if (isset($flattenedData[$criteria_death_code_key])) {
                    $criteria_death_code = $flattenedData[$criteria_death_code_key];
                }
                if (isset($flattenedData[$criteria_death_value_key])) {
                    $criteria_death_value = $flattenedData[$criteria_death_value_key];
                }

                if (isset($flattenedData[$reaction_name_key])) {
                    $reaction_name = $flattenedData[$reaction_name_key];
                }
                if (isset($flattenedData[$meddra_version_key])) {
                    $meddra_version = $flattenedData[$meddra_version_key];
                }
                if (isset($flattenedData[$meddra_code_key])) {
                    $meddra_code = $flattenedData[$meddra_code_key];
                }
                if (isset($flattenedData[$start_date])) {
                    $start_of_reaction = $flattenedData[$start_date];
                }
                if (isset($flattenedData[$locatedPlaceKey])) {
                    $country_of_source = $flattenedData[$locatedPlaceKey];
                }
                if (isset($flattenedData[$criteria_death_code_key])) {
                    $criteria_death_code = $flattenedData[$criteria_death_code_key];
                }

                if (!empty($reaction_name)) {

                    if (
                        $criteria_death_value === 'true' ||
                        $life_hreatening_value === 'true' ||
                        $prolonged_hospitalisation_value === 'true' ||
                        $incapacitating_value === 'true' ||
                        $birth_defect_value === 'true'
                    ) {
                        // Add a new field 'serious' with value 'true'
                        $serious = 'true';
                    } else {
                        // Add a new field 'serious' with value 'false'
                        $serious = 'false';
                    }

                    if (!empty($start_of_reaction)) {
                        $start_of_reaction = $this->generateDesiredDate($start_of_reaction);
                    }
                    $observations[] = [
                        'index' => $index,
                        'reaction_name' => $reaction_name,
                        'start_date' => $start_of_reaction,
                        'meddra_code' => $meddra_code,
                        'meddra_version' => $meddra_version,
                        'source_country' => $country_of_source,
                        'criteria_death_code' => $criteria_death_code,
                        'criteria_death_null' => $criteria_death_null,
                        'criteria_death_value' => $criteria_death_value,
                        'life_hreatening_code' => $life_hreatening_code,
                        'life_hreatening_null' => $life_hreatening_null,
                        'life_hreatening_value' => $life_hreatening_value,
                        'prolonged_hospitalisation_code' => $prolonged_hospitalisation_code,
                        'prolonged_hospitalisation_null' => $prolonged_hospitalisation_null,
                        'prolonged_hospitalisation_value' => $prolonged_hospitalisation_value,
                        'incapacitating_code' => $incapacitating_code,
                        'incapacitating_null' => $incapacitating_null,
                        'incapacitating_value' => $incapacitating_value,
                        'birth_defect_code' => $birth_defect_code,
                        'birth_defect_null' => $birth_defect_null,
                        'birth_defect_value' => $birth_defect_value,
                        'other_medical_code' => $other_medical_code,
                        'other_medical_null' => $other_medical_null,
                        'other_medical_value' => $other_medical_value,
                        'reaction_outcome_code' => $reaction_outcome_code,
                        'reaction_outcome_null' => $reaction_outcome_null,
                        'reaction_outcome_value' => $reaction_outcome_value,
                        'medical_confirmation_code' => $medical_confirmation_code,
                        'medical_confirmation_null' => $medical_confirmation_null,
                        'medical_confirmation_value' => $medical_confirmation_value,
                        'serious' => $serious

                    ];
                }
                $index++;
            } else {
                // Break the loop if the key does not exist
                break;
            }
        }

        return $observations;
    }

    public function extractReportData($flattenedData)

    {
        $mappings = [
            'creation_time' => "MCCI_IN200100UV01.creationTime",
            'sender_reference' => 'MCCI_IN200100UV01.PORR_IN049016UV.id.@extension',
            'receiver_id' => "MCCI_IN200100UV01.PORR_IN049016UV.receiver.device.id.@extension",
            'sender_id' => "MCCI_IN200100UV01.PORR_IN049016UV.sender.device.id.@extension",
            'sender_unique_identifier' => "MCCI_IN200100UV01.PORR_IN049016UV.controlActProcess.subject.investigationEvent.id.0.@extension",
            'worldwide_identifier' => "MCCI_IN200100UV01.PORR_IN049016UV.controlActProcess.subject.investigationEvent.id.1.@extension",
            'case_narrative' => "MCCI_IN200100UV01.PORR_IN049016UV.controlActProcess.subject.investigationEvent.text",
            'date_first_received' => "MCCI_IN200100UV01.PORR_IN049016UV.controlActProcess.subject.investigationEvent.effectiveTime.low",
            'date_most_recent_info' => "MCCI_IN200100UV01.PORR_IN049016UV.controlActProcess.subject.investigationEvent.availabilityTime",
            'patient_name' => "MCCI_IN200100UV01.PORR_IN049016UV.controlActProcess.subject.investigationEvent.component.0.adverseEventAssessment.subject1.primaryRole.player1.name",
            'patient_sex' => "MCCI_IN200100UV01.PORR_IN049016UV.controlActProcess.subject.investigationEvent.component.0.adverseEventAssessment.subject1.primaryRole.player1.administrativeGenderCode.@code",
            'patient_dob' => "MCCI_IN200100UV01.PORR_IN049016UV.controlActProcess.subject.investigationEvent.component.0.adverseEventAssessment.subject1.primaryRole.player1.birthTime",
            'patient_number' => "MCCI_IN200100UV01.PORR_IN049016UV.controlActProcess.subject.investigationEvent.component.0.adverseEventAssessment.subject1.primaryRole.player1.asIdentifiedEntity.id.@extension",
            'past_medical' => "MCCI_IN200100UV01.PORR_IN049016UV.controlActProcess.subject.investigationEvent.component.0.adverseEventAssessment.subject1.primaryRole.subjectOf2.0.organizer.component.0.observation.outboundRelationship2.observation.value.@",
            'sender_address' => "MCCI_IN200100UV01.PORR_IN049016UV.controlActProcess.subject.investigationEvent.subjectOf1.controlActEvent.author.assignedEntity.addr.streetAddressLine",
            'sender_city' => "MCCI_IN200100UV01.PORR_IN049016UV.controlActProcess.subject.investigationEvent.subjectOf1.controlActEvent.author.assignedEntity.addr.city",
            'sender_state' => "MCCI_IN200100UV01.PORR_IN049016UV.controlActProcess.subject.investigationEvent.subjectOf1.controlActEvent.author.assignedEntity.addr.state",
            'sender_department' => "MCCI_IN200100UV01.PORR_IN049016UV.controlActProcess.subject.investigationEvent.subjectOf1.controlActEvent.author.assignedEntity.representedOrganization.name",
            'sender_organization' => "MCCI_IN200100UV01.PORR_IN049016UV.controlActProcess.subject.investigationEvent.subjectOf1.controlActEvent.author.assignedEntity.representedOrganization.assignedEntity.representedOrganization.name"
        ];

        $save_data = [];
        foreach ($mappings as $key => $path) {
            // Check if the path exists in the flattened data and is not null
            $save_data[$key] = isset($flattenedData[$path]) ? $flattenedData[$path] : null;
        }
        return $save_data;
    }


    private function flattenXml($xmlArray)
    {
        $data = [];
        $this->recursiveFlatten($xmlArray, $data);
        return $data;
    }

    private function recursiveFlatten($element, &$data, $parentKey = '')
    {
        foreach ($element as $key => $value) {
            $newKey = $parentKey ? $parentKey . '.' . $key : $key;
            if (is_array($value)) {
                if (isset($value['@attributes'])) {
                    foreach ($value['@attributes'] as $attrKey => $attrValue) {
                        $data[$newKey . '.' . $attrKey] = $attrValue;
                    }
                }
                if (isset($value['@value'])) {
                    $data[$newKey] = $value['@value'];
                } else {

                    foreach ($value as $subKey => $subValue) {
                        if (is_array($subValue)) {
                            $this->recursiveFlatten([$subKey => $subValue], $data, $newKey);
                        } else {
                            $data[$newKey . '.' . $subKey] = $subValue;
                        }
                    }
                    // $this->recursiveFlatten($value, $data, $newKey);
                }
            } else {
                $data[$newKey] = $value;
            }
        }
    }

    public function general_add()
    {
        $user = $this->Auth->User();
        // debug($user);
        // exit;
        $this->Ce2b->create();
        $this->Ce2b->save(['Ce2b' => [
            'user_id' => $this->Auth->User('id'),
            'reference_no' => 'new',
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
        $this->Session->setFlash(__('The E2b has been created'), 'alerts/flash_success');
        $this->redirect(array('action' => 'edit', $this->Ce2b->id));
    }
    public function manager_add()
    {
        $this->general_add();
    }
    public function reporter_add()
    {

        $this->general_add();
    }
    public function generateReferenceNumber()
    {
        $count = $this->Ce2b->find('count',  array(
            'fields' => 'Ce2b.reference_no',
            'conditions' => array(
                'Ce2b.submitted_date BETWEEN ? and ?' => array(date("Y-01-01 00:00:00"), date("Y-m-d H:i:s")), 'Ce2b.reference_no !=' => 'new'
            )
        ));
        $count++;
        $count = ($count < 10) ? "0$count" : $count;
        $reference = 'E2B/' . date('Y') . '/' . $count;
        //ensure that the reference number is unique
        $exists = $this->Ce2b->find('count',  array(
            'fields' => 'Ce2b.reference_no',
            'conditions' => array('Ce2b.reference_no' => $reference)
        ));
        if ($exists > 0) {
            $reference = $this->generateReferenceNumber();
        }

        return $reference;
    }

    public function reporter_edit($id = null)
    {
        $this->Ce2b->id = $id;
        if (!$this->Ce2b->exists()) {
            throw new NotFoundException(__('Invalid Ce2b'));
        }
        $this->general_editor($id);
    }

    public function manager_view($id = null)
    {
        # code...
        $this->Ce2b->id = $id;
        if (!$this->Ce2b->exists()) {
            $this->Session->setFlash(__('Could not verify the E2b report ID. Please ensure the ID is correct.'), 'flash_error');
            $this->redirect('/');
        }
        $this->general_view($id);
    }

    public function reviewer_view($id = null)
    {
        # code...
        $this->Ce2b->id = $id;
        if (!$this->Ce2b->exists()) {
            $this->Session->setFlash(__('Could not verify the E2b report ID. Please ensure the ID is correct.'), 'flash_error');
            $this->redirect('/');
        }
        $this->general_view($id);
    }

    public function generateDesiredDate($input)
    {


        try {
            // Create a DateTime object from the input
            $date = new DateTime($input);

            // Format the DateTime object as YYYY-MM-DD HH:MM:SS
            $formattedDate = $date->format('Y-m-d H:i:s');

            return $formattedDate;
        } catch (Exception $e) {
            // Handle exceptions if the input format is invalid
            return '';
        }
    }
    public function general_view($id = null)
    {
        # code...

        $ce2b = $this->Ce2b->find('first', array(
            'conditions' => array('Ce2b.id' => $id),
            'contain' => array('Designation', 'Ce2bListOfDrug', 'Ce2bReaction', 'Attachment', 'ExternalComment', 'ExternalComment.Attachment', 'ReviewComment', 'ReviewComment.Attachment')
        ));

        if (empty($ce2b['Ce2b']['e2b_content'])) {
            $this->Session->setFlash(__('Could not verify the E2b report ID. Please ensure the ID is correct.'), 'flash_error');
            $this->redirect($this->referer());
        }

        if ($ce2b['Ce2b']['e2b_type'] === "R2") {

            $data = [];
            try {
                $xml = $ce2b['Ce2b']['e2b_content'];
                $xml = Xml::build($xml);
                $elements = $xml->xpath('//*');

                foreach ($elements as $element) {
                    $key = $element->getName();
                    $value = (string) $element;
                    if ($key == 'ichicsr' || $key == 'ichicsrmessageheader') {
                        continue;
                    } else {
                        $data[] = [
                            'key' => $key,
                            'value' => $value
                        ];
                    }
                }
            } catch (Exception $e) {
            }

            // $this->set(['ce2b' => $ce2b, 'data' => $data]);

            $e2b = Xml::toArray(Xml::build($ce2b['Ce2b']['e2b_content']));
            $this->set(['ce2b' => $ce2b]);
            $this->set(['e2b' => $e2b]);
        } else {

            // Manipulate data retrived:

            // Convert to Unix timestamp (optional step)

            $ce2b['Ce2b']['creation_time'] = $this->generateDesiredDate($ce2b['Ce2b']['creation_time']);
            $ce2b['Ce2b']['date_first_received'] = $this->generateDesiredDate($ce2b['Ce2b']['date_first_received']);
            $this->set(['ce2b' => $ce2b]);
            // $this->set(['e2b' => $e2b]);
            $this->render('ce2b_r3');
        }

        if (strpos($this->request->url, 'pdf') !== false) {
            $this->pdfConfig = array('filename' => 'E2b' . $id . '.pdf',  'orientation' => 'portrait');
            $this->response->download('Ce2b_' . $ce2b['Ce2b']['id'] . '.pdf');
        }
    }
    public function reporter_view($id = null)
    {
        # code...
        $this->Ce2b->id = $id;
        if (!$this->Ce2b->exists()) {
            $this->Session->setFlash(__('Could not verify the E2b report ID. Please ensure the ID is correct.'), 'flash_error');
            $this->redirect('/');
        }
        $this->general_view($id);
    }

    public function reporter_delete($id = null)
    {
        # code...
        $this->common_delete($id);
    }

    public function common_delete($id = null)
    {
        # code...
        $this->Ce2b->id = $id;
        if (!$this->Ce2b->exists()) {
            throw new NotFoundException(__('Invalid Ce2b'));
        }
        $ce2b = $this->Ce2b->read(null, $id);
        if ($ce2b['Ce2b']['submitted'] == 2) {
            $this->Session->setFlash(__('You cannot delete a submitted E2b Report'), 'alerts/flash_error');
            $this->redirect($this->referer());
        }
        //update the field deleted to true and deleted_date to current date without validation 
        $ce2b['Ce2b']['deleted'] = true;
        $ce2b['Ce2b']['deleted_date'] = date("Y-m-d H:i:s");
        if ($this->Ce2b->save($ce2b, array('validate' => false))) {
            //displat message with reference number 
            $this->Session->setFlash(__('Ce2b Report ' . $ce2b['Ce2b']['reference_no'] . ' has been deleted'), 'alerts/flash_info');
            $this->redirect($this->referer());
        }
        $this->Session->setFlash(__('E2b was not deleted'), 'alerts/flash_error');
        $this->redirect($this->referer());
    }
    public function manager_archive($id = null)
    {

        $this->Ce2b->id = $id;
        if (!$this->Ce2b->exists()) {
            throw new NotFoundException(__('Invalid E2B'));
        }
        $report = $this->Ce2b->read(null, $id);
        $report['Ce2b']['archived'] = true;
        $report['Ce2b']['archived_date'] = date("Y-m-d H:i:s");
        if ($this->Ce2b->save($report, array('validate' => false))) {
            $this->Session->setFlash(__('E2B Archived successfully'), 'alerts/flash_success');
            $this->redirect(array('action' => 'index'));
        }
        $this->Session->setFlash(__('E2B was not archied'), 'alerts/flash_error');
        $this->redirect($this->referer());
    }
}
