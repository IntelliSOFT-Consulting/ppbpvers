<?php

declare(strict_types=1);

namespace App\Controller\Manager;

use App\Controller\AppController;
use Cake\Core\Configure;
use Cake\Http\Client;

/**
 * Drugs Controller
 *
 * @property \App\Model\Table\DrugsTable $Drugs
 * @method \App\Model\Entity\Drug[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class DrugsController extends AppController
{

    public $page_options = array('5' => '5', '10' => '10', '25' => '25', '50' => '50', '100' => '100');
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {

        $limit = $this->request->getQuery('pages', 1000); // Default to 10 if 'pages' is not set
       
        $this->paginate = [
            'contain' => [],
            'limit'=>$limit
        
        ]; 
        $drugs = $this->paginate($this->Drugs->find('search', ['search' => $this->request->getQuery()]));
        $this->set('page_options', $this->page_options);
        $this->set(compact('drugs'));
    }
    public function sync()
    {
        # code...
        $http = new Client();


        $url = Configure::read('drug_registry_api');
        $header = Configure::read('drug_registry_header');
        $headers = [
            'Authorization' => $header,
            'Accept' => 'application/json',
        ];

        // Make a GET request to the API endpoint with headers
        $results = $http->get($url, [], ['headers' => $headers]);

        if ($results->isOk()) {
            $data = $results->getJson();
            // debug($data);
            // exit;
            // $data = json_decode($data); 
            // for each data in the array
            $this->Drugs->query('TRUNCATE TABLE drugs');
            //create a array to store the data 
            foreach ($data as $drugdata) {
                // save the drug to the database
                $drug = $this->Drugs->newEmptyEntity();
                // debug($drugdata);
                // exit;
                $payload = array(
                    'batch_number' => $drugdata['registration_no'],
                    'brand_name' => $drugdata['brand_name'],
                    'inn_name' => $drugdata['inn_of_api'],
                    'manufacturer' => $drugdata['mah_name'],
                    'registration_status' => $drugdata['registration_status'],
                    'retention_status' => $drugdata['retention_status'],
                    'local_trade_rep' => $drugdata['local_trade_rep']
                );
                // debug($payload);
                // exit;
                $drug = $this->Drugs->patchEntity($drug, $payload);
                $this->Drugs->save($drug);
            }
            $this->Flash->success('Drug list successfully updated');
            $this->redirect($this->referer());
        } else {
            $body = $results->getJson();
            $this->Flash->error('Error syncing... please try again later!!');
            $this->Flash->error($body);
            $this->redirect($this->referer());
        }
    }
    /**
     * View method
     *
     * @param string|null $id Drug id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $drug = $this->Drugs->get($id, [
            'contain' => [],
        ]);

        $this->set(compact('drug'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $drug = $this->Drugs->newEmptyEntity();
        if ($this->request->is('post')) {
            $drug = $this->Drugs->patchEntity($drug, $this->request->getData());
            if ($this->Drugs->save($drug)) {
                $this->Flash->success(__('The drug has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The drug could not be saved. Please, try again.'));
        }
        $this->set(compact('drug'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Drug id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $drug = $this->Drugs->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $drug = $this->Drugs->patchEntity($drug, $this->request->getData());
            if ($this->Drugs->save($drug)) {
                $this->Flash->success(__('The drug has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The drug could not be saved. Please, try again.'));
        }
        $this->set(compact('drug'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Drug id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $drug = $this->Drugs->get($id);
        if ($this->Drugs->delete($drug)) {
            $this->Flash->success(__('The drug has been deleted.'));
        } else {
            $this->Flash->error(__('The drug could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
