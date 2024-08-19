<?php

declare(strict_types=1);

namespace App\Controller;

use Cake\Event\EventInterface;

/**
 * FacilityCodes Controller
 *
 * @property \App\Model\Table\FacilityCodesTable $FacilityCodes
 * @method \App\Model\Entity\FacilityCode[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class FacilityCodesController extends AppController
{

    public function beforeFilter(EventInterface $event): void
    {
        parent::beforeFilter($event);
        $this->Auth->allow('index', 'autocomplete');
    }
    public function wards()
    {

        $term = $this->request->getQuery('term');
        $type = is_numeric($term) ? 'N' : 'A';

        $coders = $this->FacilityCodes->finder($term, $type); // Assuming `finder` is a custom method

        $codes = [];
        foreach ($coders as $value) {
            $codes[] = [
                'value' => $value->facility_code,
                'label' => $value->facility_name,
                'sub_county' => $value->district,
                'desc' => $value->county,
                'addr' => $value->official_address,
                'phone' => $value->official_mobile
            ];
        }

        $this->set([
            'codes' => $codes,
            '_serialize' => ['codes']
        ]);
    }
    public function autocomplete()
    {

        $term = $this->request->getQuery('term');
        $type = is_numeric($term) ? 'N' : 'A';

        $coders = $this->FacilityCodes->finder($term, $type); // Assuming `finder` is a custom method

        $codes = [];
        foreach ($coders as $value) {
            $codes[] = [
                'value' => $value->facility_code,
                'label' => $value->facility_name,
                'sub_county' => $value->district,
                'desc' => $value->county,
                'addr' => $value->official_address,
                'phone' => $value->official_mobile
            ];
        }

        $this->set([
            'codes' => $codes,
            '_serialize' => ['codes']
        ]);
    }
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        // $facilityCodes = $this->paginate($this->FacilityCodes);

        // $this->set(compact('facilityCodes'));

        $term = $this->request->getQuery('term');
        $type = is_numeric($term) ? 'N' : 'A';

        $coders = $this->FacilityCodes->find('byTerm', ['term' => $term, 'type' => $type])->toArray();

        $codes = [];
        foreach ($coders as $value) {
            $codes[] = [
                'value' => $value->facility_code,
                'label' => $value->facility_name,
                'sub_county' => $value->district,
                'desc' => $value->county,
                'addr' => $value->official_address,
                'phone' => $value->official_mobile
            ];
        }

        $this->set([
            'codes' => $codes,
            '_serialize' => ['codes']
        ]);
    }
    public function index1()
    {
        // $facilityCodes = $this->paginate($this->FacilityCodes);

        // $this->set(compact('facilityCodes'));

        $term = $this->request->getQuery('term');
        $type = is_numeric($term) ? 'N' : 'A';

        $coders = $this->FacilityCodes->find('byTerm', ['term' => $term, 'type' => $type])->toArray();

        $codes = [];
        foreach ($coders as $value) {
            $codes[] = [
                'value' => $value->facility_code,
                'label' => $value->facility_name,
                'sub_county' => $value->district,
                'desc' => $value->county,
                'addr' => $value->official_address,
                'phone' => $value->official_mobile
            ];
        }

        $this->set([
            'codes' => $codes,
            '_serialize' => ['codes']
        ]);
    }
    /**
     * View method
     *
     * @param string|null $id Facility Code id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $facilityCode = $this->FacilityCodes->get($id, [
            'contain' => [],
        ]);

        $this->set(compact('facilityCode'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $facilityCode = $this->FacilityCodes->newEmptyEntity();
        if ($this->request->is('post')) {
            $facilityCode = $this->FacilityCodes->patchEntity($facilityCode, $this->request->getData());
            if ($this->FacilityCodes->save($facilityCode)) {
                $this->Flash->success(__('The facility code has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The facility code could not be saved. Please, try again.'));
        }
        $this->set(compact('facilityCode'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Facility Code id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $facilityCode = $this->FacilityCodes->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $facilityCode = $this->FacilityCodes->patchEntity($facilityCode, $this->request->getData());
            if ($this->FacilityCodes->save($facilityCode)) {
                $this->Flash->success(__('The facility code has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The facility code could not be saved. Please, try again.'));
        }
        $this->set(compact('facilityCode'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Facility Code id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $facilityCode = $this->FacilityCodes->get($id);
        if ($this->FacilityCodes->delete($facilityCode)) {
            $this->Flash->success(__('The facility code has been deleted.'));
        } else {
            $this->Flash->error(__('The facility code could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
