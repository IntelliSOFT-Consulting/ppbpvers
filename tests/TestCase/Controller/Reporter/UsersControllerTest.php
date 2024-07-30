<?php
declare(strict_types=1);

namespace App\Test\TestCase\Controller\Reporter;

use App\Controller\Reporter\UsersController;
use Cake\TestSuite\IntegrationTestTrait;
use Cake\TestSuite\TestCase;

/**
 * App\Controller\Reporter\UsersController Test Case
 *
 * @uses \App\Controller\Reporter\UsersController
 */
class UsersControllerTest extends TestCase
{
    use IntegrationTestTrait;

    /**
     * Fixtures
     *
     * @var array<string>
     */
    protected $fixtures = [
        'app.Users',
        'app.Designations',
        'app.Counties',
        'app.Groups',
        'app.Aefis',
        'app.Aggregates',
        'app.Ce2bs',
        'app.Comments',
        'app.Devices',
        'app.Feedbacks',
        'app.Medications',
        'app.Notifications',
        'app.Padrs',
        'app.Pqmps',
        'app.Reminders',
        'app.Reviews',
        'app.SadrFollowups',
        'app.Sadrs',
        'app.Saefis',
        'app.Saes',
        'app.Transfusions',
    ];

    /**
     * Test index method
     *
     * @return void
     * @uses \App\Controller\Reporter\UsersController::index()
     */
    public function testIndex(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test view method
     *
     * @return void
     * @uses \App\Controller\Reporter\UsersController::view()
     */
    public function testView(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test add method
     *
     * @return void
     * @uses \App\Controller\Reporter\UsersController::add()
     */
    public function testAdd(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test edit method
     *
     * @return void
     * @uses \App\Controller\Reporter\UsersController::edit()
     */
    public function testEdit(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test delete method
     *
     * @return void
     * @uses \App\Controller\Reporter\UsersController::delete()
     */
    public function testDelete(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
