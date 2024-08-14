<?php

/**
 * Routes configuration
 *
 * In this file, you set up routes to your controllers and their actions.
 * Routes are very important mechanism that allows you to freely connect
 * different URLs to chosen controllers and their actions (functions).
 *
 * CakePHP(tm) : Rapid Development Framework (https://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 * @link          https://cakephp.org CakePHP(tm) Project
 * @license       https://opensource.org/licenses/mit-license.php MIT License
 */

 use Cake\Routing\Route\DashedRoute;
 use Cake\Routing\RouteBuilder;
 use Cake\Routing\Router;
 use Cake\Core\Plugin;

/**
 * The default class to use for all routes
 *
 * The following route classes are supplied with CakePHP and are appropriate
 * to set as the default:
 *
 * - Route
 * - InflectedRoute
 * - DashedRoute
 *
 * If no call is made to `Router::defaultRouteClass()`, the class used is
 * `Route` (`Cake\Routing\Route\Route`)
 *
 * Note that `Route` does not do any inflections on URLs which will result in
 * inconsistently cased URLs when used with `:plugin`, `:controller` and
 * `:action` markers.
 *
 */
Router::defaultRouteClass(DashedRoute::class);

Router::extensions(['json', 'xml', 'csv']);
Router::prefix('api', function ($routes) {
    $routes->setExtensions(['json', 'xml','pdf']);
    $routes->resources('Sadrs', [
        'connectOptions' => [
            //'id' => '[a-zA-Z0-9\-]{2,30}'
            'id' => '[a-zA-Z0-9+/]+={0,2}$'
        ]
    ]);
    $routes->resources('Aefis', ['connectOptions' => ['id' => '[a-zA-Z0-9+/]+={0,2}$']]);
    $routes->resources('Adrs', ['connectOptions' => ['id' => '[a-zA-Z0-9+/]+={0,2}$']]);
    $routes->resources('Saefis', ['connectOptions' => ['id' => '[a-zA-Z0-9+/]+={0,2}$']]);
    $routes->resources('Users', ['connectOptions' => ['id' => '[a-zA-Z0-9+/]+={0,2}$']]);
    $routes->resources('Sites', ['connectOptions' => ['id' => '[a-zA-Z0-9+/]+={0,2}$']]);
    $routes->resources('Feedbacks', ['connectOptions' => ['id' => '[a-zA-Z0-9+/]+={0,2}$']]);
    // Router::connect('/api/users/register', ['controller' => 'Users', 'action' => 'add', 'prefix' => 'api']);
    $routes->fallbacks('InflectedRoute');
});

Router::prefix('admin', function ($routes) {

    $routes->setExtensions(['json', 'xml','pdf']);
    // All routes here will be prefixed with `/admin`
    // And have the prefix => admin route element added.
    $routes->connect('/', ['controller' => 'Users', 'action' => 'dashboard', 'prefix' => 'Admin']);

    $routes->fallbacks(DashedRoute::class);
});
Router::prefix('base', function ($routes) {

    $routes->setExtensions(['json', 'xml','pdf']);
    $routes->connect('/', ['controller' => 'Users', 'action' => 'dashboard', 'prefix' => 'Base']);
    $routes->fallbacks(DashedRoute::class);
});
Router::prefix('manager', function ($routes) {

    $routes->setExtensions(['json', 'xml','pdf']);
    $routes->connect('/', ['controller' => 'Users', 'action' => 'dashboard', 'prefix' => 'Manager']);

    $routes->fallbacks(DashedRoute::class);
});
Router::prefix('reporter', function ($routes) {
    $routes->connect('/', ['controller' => 'Users', 'action' => 'dashboard', 'prefix' => 'Reporter']);

    $routes->fallbacks(DashedRoute::class);
});
Router::prefix('institution', function ($routes) {
    $routes->connect('/', ['controller' => 'Users', 'action' => 'dashboard', 'prefix' => 'Institution']);

    $routes->fallbacks(DashedRoute::class);
});
Router::prefix('evaluator', function ($routes) {
    $routes->connect('/', ['controller' => 'Users', 'action' => 'dashboard', 'prefix' => 'Evaluator']);

    $routes->fallbacks(DashedRoute::class);
});
 

//
Router::scope('/', function (RouteBuilder $routes) {
    /**
     * Here, we are connecting '/' (base path) to a controller called 'Pages',
     * its action called 'display', and we pass a param to select the view file
     * to use (in this case, src/Template/Pages/home.ctp)...
     */
    $routes->connect('/', ['controller' => 'Pages', 'action' => 'display', 'home']);

    /**
     * ...and connect the rest of 'Pages' controller's URLs.
     */
    $routes->connect('/pages/*', ['controller' => 'Pages', 'action' => 'display']);

    /**
     * Connect catchall routes for all controllers.
     *
     * Using the argument `DashedRoute`, the `fallbacks` method is a shortcut for
     *    `$routes->connect('/:controller', ['action' => 'index'], ['routeClass' => 'DashedRoute']);`
     *    `$routes->connect('/:controller/:action/*', [], ['routeClass' => 'DashedRoute']);`
     *
     * Any route class can be used with this method, such as:
     * - DashedRoute
     * - InflectedRoute
     * - Route
     * - Or your own route class
     *
     * You can remove these routes once you've connected the
     * routes you want in your application.
     */
    $routes->fallbacks(DashedRoute::class);
});

/**
 * Load all plugin routes. See the Plugin documentation on
 * how to customize the loading of plugin routes.
 */

// Plugin::routes();