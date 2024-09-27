<?php

declare(strict_types=1);

namespace App\Controller\Manager;

use App\Controller\AppController;

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
            'contain' => ['Users', 'Pqmps', 'Medications', 'Counties', 'SubCounties', 'Designations'],
            'conditions' => $criteria,
            'order' => ['Sadrs.created' => 'DESC'],
            'limit' => $limit
        ];
        $sadrs = $this->paginate($this->Sadrs->find('search', ['search' => $this->request->getQuery()]));

        $this->set('sadrs', $sadrs);
        $this->set('page_options', $this->page_options);
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
        // $filename = 'SADR_' . $sadr['id'] . '.xml';
        // $sadr = json_encode($sadr);

        // // Set the response headers for file download
        // $response = $this->response
        //     ->withType('xml')  // Set the response content type to XML
        //     ->withStringBody($sadr)  // Set the XML content as the body
        //     ->withDownload($filename);  // Force the file download

        // return $response;
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
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
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
