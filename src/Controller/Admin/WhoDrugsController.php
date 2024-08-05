<?php

declare(strict_types=1);

namespace App\Controller\Admin;

use App\Controller\AppController;
use Cake\Core\Configure;
use Cake\Http\Client;

/**
 * WhoDrugs Controller
 *
 * @property \App\Model\Table\WhoDrugsTable $WhoDrugs
 * @method \App\Model\Entity\WhoDrug[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class WhoDrugsController extends AppController
{



    public function sync()
    {
        $url = Configure::read('drug_base_url');
        $headers = [
            'umc-client-key : ' . Configure::read('drug_client_key'),
            'umc-license-key: ' . Configure::read('drug_license_key'),
            'Content-Type : application/json',
        ];

        $curl = curl_init();

        curl_setopt_array($curl, array(
            CURLOPT_URL => $url,
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => '',
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 0,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => 'GET',
            CURLOPT_HTTPHEADER => $headers,
        ));

        $response = curl_exec($curl);
        curl_close($curl);

        if (curl_errno($curl)) {
            $error_msg = curl_error($curl);
            $this->Flash->error(__('Failed to fetch data from API.' . $error_msg));
            return $this->redirect(['action' => 'index']);
        } else {
            $http_code = curl_getinfo($curl, CURLINFO_HTTP_CODE);

            if ($http_code === 200) {
                // Successful request
                if (!empty($response)) {
                    // Decode JSON response
                    $data = json_decode($response, true);

                    // Check if JSON decoding was successful
                    if (json_last_error() === JSON_ERROR_NONE) {

                        // for each data in the array
                        $this->WhoDrugs->query('TRUNCATE TABLE who_drugs');
                        //create a array to store the data  
                        foreach ($data as $drug) {
                            // save the drug to the database 
                            $whoDrug = $this->WhoDrugs->newEmptyEntity();
                            $whoDrugDatas = array(
                                'drug_name' => $drug['drugName'],
                                'MedId' => $drug['medicinalProductID'],
                                'generic' => $drug['isGeneric'],
                                'drug_record_number' =>  $drug['drugCode']

                            ); 

                            $whoDrug = $this->WhoDrugs->patchEntity($whoDrug, $whoDrugDatas);
                            if ($this->WhoDrugs->save($whoDrug, false)) {
                               
                            } else {
                                $error = $this->WhoDrug->validationErrors;
                                
                            }
                        }
                        $this->Flash->success(__('Drug list successfully updated'));
                        return $this->redirect(['action' => 'index']);
                    } else {
                        // JSON decoding error
                        $this->Flash->error(__('Failed to decode JSON response: ' . json_last_error_msg()));
                        return $this->redirect(['action' => 'index']);
                    }
                } else {
                    // Empty response
                    $this->Flash->error(__('API response is empty.'));
                    return $this->redirect(['action' => 'index']);
                }
            } else {
                $this->Flash->error(__('Failed to fetch data from API. HTTP Status Code: '));
                return $this->redirect(['action' => 'index']);
            }
        }

        // curl_close($curl);
        // $http = new Client();
        // try {
        //     $response = $http->get($url, [], [
        //         'headers' => [
        //             'umc-client-key :'.Configure::read('drug_client_key'),
        //             'umc-license-key : '.Configure::read('drug_license_key'),
        //             'Content-Type : application/json',
        //         ],
        //         'timeout' => 30,
        //     ]);
        //     debug($response);
        //     exit;

        //     if ($response->isOk()) {
        //         $data = $response->getJson();
        //         $this->set('data', $data);
        //         $this->Flash->success(__('Drug list successfully updated'));
        //         return $this->redirect(['action' => 'index']);
        //     } else {
        //         // Handle error
        //         $statusCode = $response->getStatusCode();
        //         $error = $response->getStringBody();
        //         $this->Flash->error(__('Failed to fetch data from API.' . $error));
        //         return $this->redirect(['action' => 'index']);
        //     }
        // } catch (\Cake\Http\Exception\HttpException $e) {
        //     $error = $e->getMessage();
        //     $this->Flash->error(__('Failed to fetch data from API.' . $error));
        //     return $this->redirect(['action' => 'index']);
        // } catch (\Exception $e) {
        //     $error = $e->getMessage();
        //     $this->Flash->error(__('Failed to fetch data from API.' . $error));
        //     return $this->redirect(['action' => 'index']);
        // }
    }
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $whoDrugs = $this->paginate($this->WhoDrugs);

        $this->set(compact('whoDrugs'));
    }

    /**
     * View method
     *
     * @param string|null $id Who Drug id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $whoDrug = $this->WhoDrugs->get($id, [
            'contain' => [],
        ]);

        $this->set(compact('whoDrug'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $whoDrug = $this->WhoDrugs->newEmptyEntity();
        if ($this->request->is('post')) {
            $whoDrug = $this->WhoDrugs->patchEntity($whoDrug, $this->request->getData());
            if ($this->WhoDrugs->save($whoDrug)) {
                $this->Flash->success(__('The who drug has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The who drug could not be saved. Please, try again.'));
        }
        $this->set(compact('whoDrug'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Who Drug id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $whoDrug = $this->WhoDrugs->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $whoDrug = $this->WhoDrugs->patchEntity($whoDrug, $this->request->getData());
            if ($this->WhoDrugs->save($whoDrug)) {
                $this->Flash->success(__('The who drug has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The who drug could not be saved. Please, try again.'));
        }
        $this->set(compact('whoDrug'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Who Drug id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $whoDrug = $this->WhoDrugs->get($id);
        if ($this->WhoDrugs->delete($whoDrug)) {
            $this->Flash->success(__('The who drug has been deleted.'));
        } else {
            $this->Flash->error(__('The who drug could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
