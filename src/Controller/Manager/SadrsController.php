<?php

declare(strict_types=1);

namespace App\Controller\Manager;

use App\Controller\AppController;
use Cake\Http\Exception\NotFoundException;

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
        $criteria['Sadrs.deleted'] = false;
        $criteria['Sadrs.archived'] = false;
        $criteria['Sadrs.submitted'] = 2;
        $criteria['Sadrs.copied !='] = '1';
        $limit = $this->request->getQuery('pages', 1000); // Default to 10 if 'pages' is not set

        $this->paginate = [
            'contain' => array('Users', 'Pqmps', 'Medications', 'Counties', 'SubCounties', 'Designations'),
            'conditions' => $criteria
        ];
        $this->paginate = [
            'contain' => ['Users', 'Pqmps', 'Medications', 'Counties', 'SubCounties', 'Designations','SadrListOfDrugs' => ['Routes', 'Frequencies', 'Doses'],],
            'conditions' => $criteria,
            'order' => ['Sadrs.created' => 'DESC'],
            'limit' => $limit
        ];
        $sadrs = $this->paginate($this->Sadrs->find('search', ['search' => $this->request->getQuery()]));
        // if (isset($this->request->getParams()['ext']) && $this->request->getParams()['ext'] == 'csv') {

        if ($this->request->getParam('_ext') === 'csv') {
            $this->csv_export($sadrs);
          }
        $this->set('sadrs', $sadrs);
        $this->set('page_options', $this->page_options);
    }
    private function csv_export($csadrs = ''){ 


        // debug($csadrs);
        // exit;

        $filename = 'SADRa_'.date('Ymd_Hi'). '.csv';
 
        $this->viewBuilder()->enableAutoLayout(false); // Disable the layout
        $this->response = $this->response
            ->withType('csv') // Set the response content type to XML
            ->withDownload($filename); // Force the file download
 
        $this->set(compact('csadrs'));
        $this->layout = false;
        // $this->render('csv_export');
    }

    /**
     * View method
     *
     * @param string|null $id Sadr id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function download($id = null)
    {
        // Retrieve the Sadr record with all related data
        $sadr = $this->Sadrs->get($id, [
            'contain' => ['Users', 'Pqmps', 'ExternalComment' => ['Attachments'], 'Medications', 'Counties', 'Attachments', 'SubCounties', 'Designations', 'SadrDescriptions', 'SadrFollowups', 'SadrListOfDrugs' => ['Routes', 'Frequencies', 'Doses'], 'SadrListOfMedicines', 'SadrReaction'],
        ]);
        // debug($sadr);
        // exit;
        // Set the Sadr data to be used in the template
        $this->set(compact('sadr'));

        // Define the filename for download
        $filename = 'SADR_' . $sadr['id'] . '.xml';

        // Render the template and set the response for download
        $this->viewBuilder()->enableAutoLayout(false); // Disable the layout
        $this->response = $this->response
            ->withType('xml') // Set the response content type to XML
            ->withDownload($filename); // Force the file download

        return $this->render('download'); 
    }



    public function view($id = null)
    {
        $sadr = $this->Sadrs->get($id, [
            'contain' => ['Users', 'Pqmps', 'ExternalComment' => ['Attachments'], 'Medications', 'Counties', 'Attachments', 'SubCounties', 'Designations', 'SadrDescriptions', 'SadrFollowups', 'SadrListOfDrugs' => [
                'Routes',
                'Frequencies',
                'Doses'
            ], 'SadrListOfMedicines', 'SadrReaction'],
        ]);

        if ($this->request->getParam('_ext') === 'pdf') {
            //  debug($sadr);
            //         exit;
            $reference_no = $sadr['reference_no'];
            // debug($reference_no);
            $reference_no = str_replace('/', '_', $reference_no);
            // debug($reference_no);
            // exit;
            $this->viewBuilder()->enableAutoLayout(false);
            $this->viewBuilder()->setClassName('CakePdf.Pdf');
            $this->viewBuilder()->setOptions([
                'pdfConfig' => [
                    'filename' => $reference_no . '' . '.pdf'
                ]
            ]);
        }
        $this->set(compact('sadr'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $sadr = $this->Sadrs->newEmptyEntity();
        if ($this->request->is('post')) {
            $sadr = $this->Sadrs->patchEntity($sadr, $this->request->getData());
            if ($this->Sadrs->save($sadr)) {
                $this->Flash->success(__('The sadr has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The sadr could not be saved. Please, try again.'));
        }
        $users = $this->Sadrs->Users->find('list', ['limit' => 200])->all();
        $pqmps = $this->Sadrs->Pqmps->find('list', ['limit' => 200])->all();
        $medications = $this->Sadrs->Medications->find('list', ['limit' => 200])->all();
        $counties = $this->Sadrs->Counties->find('list', ['limit' => 200])->all();
        $subCounties = $this->Sadrs->SubCounties->find('list', ['limit' => 200])->all();
        $designations = $this->Sadrs->Designations->find('list', ['limit' => 200])->all();
        $this->set(compact('sadr', 'users', 'pqmps', 'medications', 'counties', 'subCounties', 'designations'));
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
            'contain' => ['Attachments', 'SadrReaction', 'SadrListOfDrugs', 'SadrListOfMedicines'],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $data = $this->request->getData();
            $validate = false;
            if (!empty($this->request->getData('submitReport'))) {
                $validate = true;
            }
            $sadr = $this->Sadrs->patchEntity($sadr, $data, [
                'validate' => $validate,
                'associated' => [
                    'Attachments',
                    'SadrReaction',
                    'SadrListOfDrugs' => ['validate' => $validate],
                    'SadrListOfMedicines' => ['validate' => $validate],
                ]
            ]);

            if ($this->Sadrs->save($sadr, ['validate' => $validate, 'deep' => true])) {
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


                    $sadr = $this->Sadrs->get($id, [
                        'contain' => ['Attachments', 'SadrReaction'],
                    ]);

                    $this->Flash->success(__('The SADR has been submitted'));
                    return $this->redirect(array('action' => 'view', $sadr->id));
                } else {
                    $sadr = $this->Sadrs->get($id, [
                        'contain' => ['Attachments', 'SadrReaction', 'SadrListOfDrugs', 'SadrListOfMedicines'],
                    ]);

                    $this->request = $this->request->withParsedBody($sadr->toArray());
                    $this->Flash->success(__('The SADR has been saved'));
                    return $this->redirect($this->referer());
                }
            } else {
                $errors = $sadr->getErrors();
                $this->Flash->error(__('The SADR could not be saved. Please review the error(s) and resubmit and try again.'));
            }
        }
        $this->request = $this->request->withParsedBody($sadr->toArray());

        $users = $this->Sadrs->Users->find('list', ['limit' => 200])->all();
        $pqmps = $this->Sadrs->Pqmps->find('list', ['limit' => 200])->all();
        $medications = $this->Sadrs->Medications->find('list', ['limit' => 200])->all();
        $counties = $this->Sadrs->Counties->find('list', ['limit' => 200])->all();
        $subCounties = $this->Sadrs->SubCounties->find('list', ['limit' => 200])->all();
        $designations = $this->Sadrs->Designations->find('list', ['limit' => 200])->all();
        $routes = $this->Sadrs->SadrListOfDrugs->Routes->find('list');
        $this->set(compact('routes'));
        $frequency = $this->Sadrs->SadrListOfDrugs->Frequencies->find('list');
        $this->set(compact('frequency'));
        $dose = $this->Sadrs->SadrListOfDrugs->Doses->find('list');
        $this->set(compact('dose'));
        $this->set(compact('sadr', 'users', 'pqmps', 'medications', 'counties', 'subCounties', 'designations'));
    }

    public function vigiflow($id = null) 
    {

        $sadr = $this->Sadrs->get($id, [
            'contain' => ['SadrListOfDrugs', 'SadrReaction', 'SadrDescriptions', 'SadrListOfMedicines']
        ]);

        if (!$sadr) {
            throw new NotFoundException(__('Invalid SADR'));
        }
        $this->Flash->success(__('Coming soon!!'));
        return $this->redirect(['action' => 'index']);
    }
    public function archive($id = null) 
    {

        $sadr = $this->Sadrs->get($id, [
            'contain' => ['SadrListOfDrugs', 'SadrReaction', 'SadrDescriptions', 'SadrListOfMedicines']
        ]);

        if (!$sadr) {
            throw new NotFoundException(__('Invalid SADR'));
        }

        $fieldsToUpdate = [
            'archived' => true,
            'archived_date' =>  date("Y-m-d H:i:s")
            // Add more fields as needed
        ];

        // Update the specific fields
        $this->Sadrs->patchEntity($sadr, $fieldsToUpdate);

        // Save the entity
        if ($this->Sadrs->save($sadr)) {
            $this->Flash->success(__('Report has been archived successfully'));
            return $this->redirect(['action' => 'index']);
        } else {
            $this->Flash->error(__('Unable to archive the report. Please, try again.'));
        }
    }


    public function copy($id = null)
    {
        $sadr = $this->Sadrs->get($id, [
            'contain' => ['SadrListOfDrugs', 'SadrReaction', 'SadrDescriptions', 'SadrListOfMedicines']
        ]);

        if (!$sadr) {
            throw new NotFoundException(__('Invalid SADR'));
        }
        // debug($sadr);
        // exit;
        // Check if a clean copy already exists
        if ($sadr->copied) {
            $this->Flash->error(__('A clean copy already exists. Click on edit to update changes.'));
            return $this->redirect(['action' => 'index']);
        }

        // Remove unwanted IDs
        $sadrListOfDrug = $sadr->get('sadr_list_of_drugs');
        // debug($sadrListOfDrug);
        // exit;
        if ($sadrListOfDrug) {
            foreach ($sadrListOfDrug as &$drug) {
                unset($drug->id);
            }
        }
        $sadrListOfMedicine = $sadr->get('sadr_list_of_medicines');

        if ($sadrListOfMedicine) {
            foreach ($sadrListOfMedicine as &$medicine) {
                unset($medicine->id);
            }
        }

        unset($sadr->id);
        $dataSave = $sadr->toArray();
        if ($sadrListOfDrug) {
            $dataSave['sadr_list_of_drugs'] = $sadrListOfDrug;
        }
        if ($sadrListOfMedicine) {
            $dataSave['sadr_list_of_medicines'] = $sadrListOfMedicine;
        }
        $dataSave['sadr_id'] = $id;
        $dataSave['user_id'] = $this->Auth->user('id');
        $dataSave['copied'] = 2;


        // debug($dataSave);
        // exit;

        // Mark the original SADR as copied 
        $dataTable = $this->getTableLocator()->get('sadrs');
        // Update the field using the query builder
        $result = $dataTable->query()
            ->update()
            ->set([
                'copied' => 1
            ])
            ->where(['id' => $id])
            ->execute();
        // Save the new clean copy

        $sadr = $this->Sadrs->newEmptyEntity();

        $sadr = $this->Sadrs->patchEntity($sadr, $dataSave, [
            'validate' => false,
            'associated' => [
                'Attachments',
                'SadrReaction',
                'SadrListOfDrugs',
                'SadrListOfMedicines'
            ]
        ]);

        if ($this->Sadrs->save($sadr, ['validate' => false, 'deep' => true])) {
            $this->Flash->success(__('Clean copy of ' . $dataSave['reference_no'] . ' has been created.'));
            return $this->redirect(['action' => 'edit', $sadr->id]);
        } else {
            $this->Flash->error(__('The clean copy could not be created. Please, try again.'));
            return $this->redirect($this->referer());
        }
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
