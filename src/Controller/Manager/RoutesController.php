<?php
declare(strict_types=1);

namespace App\Controller\Manager;

use App\Controller\AppController;

/**
 * Routes Controller
 *
 * @property \App\Model\Table\RoutesTable $Routes
 * @method \App\Model\Entity\Route[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class RoutesController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $routes = $this->paginate($this->Routes);

        $this->set(compact('routes'));
    }

    /**
     * View method
     *
     * @param string|null $id Route id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $route = $this->Routes->get($id, [
            'contain' => ['Ce2bListOfDrugs', 'ConcomittantDrugs', 'SadrListOfDrugs', 'SadrListOfMedicines', 'SuspectedDrugs'],
        ]);

        $this->set(compact('route'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $route = $this->Routes->newEmptyEntity();
        if ($this->request->is('post')) {
            $route = $this->Routes->patchEntity($route, $this->request->getData());
            if ($this->Routes->save($route)) {
                $this->Flash->success(__('The route has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The route could not be saved. Please, try again.'));
        }
        $this->set(compact('route'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Route id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $route = $this->Routes->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $route = $this->Routes->patchEntity($route, $this->request->getData());
            if ($this->Routes->save($route)) {
                $this->Flash->success(__('The route has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The route could not be saved. Please, try again.'));
        }
        $this->set(compact('route'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Route id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $route = $this->Routes->get($id);
        if ($this->Routes->delete($route)) {
            $this->Flash->success(__('The route has been deleted.'));
        } else {
            $this->Flash->error(__('The route could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
