<?php
declare(strict_types=1);

namespace App\Test\TestCase\Controller\Manager;

use App\Controller\Manager\DevicesController;
use Cake\TestSuite\IntegrationTestTrait;
use Cake\TestSuite\TestCase;

/**
 * App\Controller\Manager\DevicesController Test Case
 *
 * @uses \App\Controller\Manager\DevicesController
 */
class DevicesControllerTest extends TestCase
{
    use IntegrationTestTrait;

    /**
     * Fixtures
     *
     * @var array<string>
     */
    protected $fixtures = [
        'app.Devices',
        'app.Users',
        'app.Pqmps',
        'app.Counties',
        'app.Designations',
        'app.AttachmentsOld',
        'app.ListOfDevices',
    ];

    /**
     * Test index method
     *
     * @return void
     * @uses \App\Controller\Manager\DevicesController::index()
     */
    public function testIndex(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test view method
     *
     * @return void
     * @uses \App\Controller\Manager\DevicesController::view()
     */
    public function testView(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test add method
     *
     * @return void
     * @uses \App\Controller\Manager\DevicesController::add()
     */
    public function testAdd(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test edit method
     *
     * @return void
     * @uses \App\Controller\Manager\DevicesController::edit()
     */
    public function testEdit(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test delete method
     *
     * @return void
     * @uses \App\Controller\Manager\DevicesController::delete()
     */
    public function testDelete(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
