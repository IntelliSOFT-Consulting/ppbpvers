<?php
declare(strict_types=1);

namespace App\Controller\Manager;

use App\Controller\AppController;

/**
 * Padrs Controller
 *
 * @property \App\Model\Table\PadrsTable $Padrs
 * @method \App\Model\Entity\Padr[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class PadrsController extends AppController
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
        $criteria['Padrs.deleted'] = 0;
        $criteria['Padrs.archived'] = 0; 
        $criteria['Padrs.copied !='] = '1';
        $this->paginate = [
            'contain' => ['Users', 'Counties', 'SubCounties', 'Designations'],
            'conditions' => $criteria,
            'order'=>array(
                'Padrs.submitted_date'=>'DESC'
            )
        ];
        $padrs = $this->paginate($this->Padrs);
        $this->set(compact('padrs'));
        $this->set('page_options', $this->page_options);
    }

    /**
     * View method
     *
     * @param string|null $id Padr id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        // $id = preg_replace('/\.pdf$/', '', $id);
        $padr = $this->Padrs->find('all', [
            'contain' => ['Users', 'Counties', 'SubCounties', 'Designations', 'PadrListOfMedicines'],
            'conditions' => ['Padrs.token' => $id]  
        ])->firstOrFail();
        
        if ($this->request->getParam('_ext') === 'pdf') {
            $this->viewBuilder()->enableAutoLayout(false);
            $this->viewBuilder()->setClassName('CakePdf.Pdf');
            $this->viewBuilder()->setOptions([
                'pdfConfig' => [
                    'filename' => 'PADR_' . str_replace($padr['reference_no'], '/', '_') . '.pdf'
                ]
            ]); 
        }
        $this->set(compact('padr'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $padr = $this->Padrs->newEmptyEntity();
        if ($this->request->is('post')) {
            $padr = $this->Padrs->patchEntity($padr, $this->request->getData());
            if ($this->Padrs->save($padr)) {
                $this->Flash->success(__('The padr has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The padr could not be saved. Please, try again.'));
        }
        $users = $this->Padrs->Users->find('list', ['limit' => 200])->all();
        $counties = $this->Padrs->Counties->find('list', ['limit' => 200])->all();
        $subCounties = $this->Padrs->SubCounties->find('list', ['limit' => 200])->all();
        $designations = $this->Padrs->Designations->find('list', ['limit' => 200])->all();
        $this->set(compact('padr', 'users', 'counties', 'subCounties', 'designations'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Padr id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $padr = $this->Padrs->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $padr = $this->Padrs->patchEntity($padr, $this->request->getData());
            if ($this->Padrs->save($padr)) {
                $this->Flash->success(__('The padr has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The padr could not be saved. Please, try again.'));
        }
        $users = $this->Padrs->Users->find('list', ['limit' => 200])->all();
        $counties = $this->Padrs->Counties->find('list', ['limit' => 200])->all();
        $subCounties = $this->Padrs->SubCounties->find('list', ['limit' => 200])->all();
        $designations = $this->Padrs->Designations->find('list', ['limit' => 200])->all();
        $this->set(compact('padr', 'users', 'counties', 'subCounties', 'designations'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Padr id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $padr = $this->Padrs->get($id);
        if ($this->Padrs->delete($padr)) {
            $this->Flash->success(__('The padr has been deleted.'));
        } else {
            $this->Flash->error(__('The padr could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
