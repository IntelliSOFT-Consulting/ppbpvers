<?php
declare(strict_types=1);

/**
 * CakePHP(tm) : Rapid Development Framework (https://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 * @link      https://cakephp.org CakePHP(tm) Project
 * @since     0.2.9
 * @license   https://opensource.org/licenses/mit-license.php MIT License
 */
namespace App\Controller;

use Cake\Controller\Controller;
use Cake\Event\EventInterface;

/**
 * Application Controller
 *
 * Add your application-wide methods in the class below, your controllers
 * will inherit them.
 *
 * @link https://book.cakephp.org/4/en/controllers.html#the-app-controller
 */
class AppController extends Controller
{
    /**
     * Initialization hook method.
     *
     * Use this method to add common initialization code like loading components.
     *
     * e.g. `$this->loadComponent('FormProtection');`
     *
     * @return void
     * 
     */

    //  public $components = [
    //     'Acl' => [
    //         'className' => 'Acl.Acl'
    //     ],
    //     'RequestHandler',
    //     'Crud.Crud' => [
    //         'actions' => [
    //             'Crud.Index',
    //             'Crud.View',
    //             'Crud.Add',
    //             'Crud.Edit',
    //             'Crud.Delete'
    //         ],
    //         'listeners' => [
    //             'Crud.Api',
    //             'Crud.ApiPagination',
    //             'Crud.ApiQueryLog'
    //         ]
    //     ]
    // ];
    public function initialize(): void
    {
        parent::initialize();

        $this->loadComponent('RequestHandler');
        $this->loadComponent('Flash');

        /*
         * Enable the following component for recommended CakePHP form protection settings.
         * see https://book.cakephp.org/4/en/controllers/components/form-protection.html
         */
        //$this->loadComponent('FormProtection');


        $this->loadComponent('Acl', [
            'className' => 'Acl.Acl'
        ]);

        $this->loadComponent('Auth', [
            'authorize' => [
                'Acl.Actions' => ['actionPath' => 'controllers/']
            ],
            'loginAction' => [
                'plugin' => false,
                'prefix' => false,
                'controller' => 'Users',
                'action' => 'login'
            ],
            'loginRedirect' => [
                'plugin' => false,
                'prefix' => false,
                'controller' => 'Users',
                'action' => 'home'
            ],
            'logoutRedirect' => [
                'plugin' => false,
                'prefix' => false,
                'controller' => 'Users',
                'action' => 'login'
            ],
            'unauthorizedRedirect' => [
                'controller' => 'pages',
                'action' => 'home',
                'prefix' => false,
                'plugin' => false
            ],
            'authError' => 'You are not authorized to access that location.',
            'loginError' => 'You are not authorized to access that location.',
            'flash' => [
                'element' => 'error'
            ]
        ]);
    }

    // public function beforeRender(EventInterface $event)
    // {
    //     $this->set('_serialize', true);
    // }

       /*1. Ported from 1.2*/
    //    public function beforeFilter(EventInterface $event)
    //    {
    //        parent::beforeFilter($event);
    //        $this->Auth->allow('display');
    //        //if admin prefix, redirect to admin
    //        // $this->viewBuilder()->setLayout('admin');
    //        if (
    //            $this->request->getParam('prefix') or $this->request->session()->read('Auth.User.role_id') == 1
    //            or $this->request->session()->read('Auth.User.role_id') == 2 or $this->request->session()->read('Auth.User.role_id') == 4
    //            or $this->request->session()->read('Auth.User.role_id') == 5
    //        ) {
    //            $this->viewBuilder()->setLayout('admin');
    //        }
    //    }

    public function beforeFilter(EventInterface $event): void
{
    parent::beforeFilter($event);

    $roleId = $this->request->getSession()->read('Auth.User.role_id');
    $allowedRoles = [1, 2, 4, 5]; // List of roles allowed to use the admin layout

    if ($this->request->getParam('prefix') || in_array($roleId, $allowedRoles)) {
        $this->viewBuilder()->setLayout('admin');
    }
}
       /*end 1*/
   
   
       /**
        * Before render callback.
        *
        * @param \Cake\Event\Event $event The beforeRender event.
        * @return \Cake\Http\Response|null|void
        */
        public function beforeRender(EventInterface $event)
        {
            $this->set('_serialize', true);
        
           // Note: These defaults are just to get started quickly with development
           // and should not be used in production. You should instead set "_serialize"
           // in each action as required.
        //    if (
        //        !array_key_exists('_serialize', $this->viewVars) &&
        //        in_array($this->response->type(), ['application/json', 'application/xml'])
        //    ) {
        //        $this->set('_serialize', true);
        //    }
   
           //pass prefix to all controllers
           $prefix = null;
           if ($this->request->getSession()->read('Auth.User.role_id') == 1) {
               $prefix = 'admin';
           }
           if ($this->request->getSession()->read('Auth.User.role_id') == 2) {
               $prefix = 'manager';
           }
           if ($this->request->getSession()->read('Auth.User.role_id') == 4) {
               $prefix = 'evaluator';
           }
           if ($this->request->getSession()->read('Auth.User.role_id') == 5) {
               $prefix = 'institution';
           }
           $this->set(['prefix' => $prefix]);
       }
}
