<?php
declare(strict_types=1);

namespace App\Test\TestCase\Controller\Reporter;

use App\Controller\Reporter\DevicesController;
use Cake\TestSuite\IntegrationTestTrait;
use Cake\TestSuite\TestCase;

/**
 * App\Controller\Reporter\DevicesController Test Case
 *
 * @uses \App\Controller\Reporter\DevicesController
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
     * @uses \App\Controller\Reporter\DevicesController::index()
     */
    public function testIndex(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test view method
     *
     * @return void
     * @uses \App\Controller\Reporter\DevicesController::view()
     */
    public function testView(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test add method
     *
     * @return void
     * @uses \App\Controller\Reporter\DevicesController::add()
     */
    public function testAdd(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test edit method
     *
     * @return void
     * @uses \App\Controller\Reporter\DevicesController::edit()
     */
    public function testEdit(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test delete method
     *
     * @return void
     * @uses \App\Controller\Reporter\DevicesController::delete()
     */
    public function testDelete(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
