<?php
declare(strict_types=1);

namespace App\Test\TestCase\Controller\Reporter;

use App\Controller\Reporter\MedicationsController;
use Cake\TestSuite\IntegrationTestTrait;
use Cake\TestSuite\TestCase;

/**
 * App\Controller\Reporter\MedicationsController Test Case
 *
 * @uses \App\Controller\Reporter\MedicationsController
 */
class MedicationsControllerTest extends TestCase
{
    use IntegrationTestTrait;

    /**
     * Fixtures
     *
     * @var array<string>
     */
    protected $fixtures = [
        'app.Medications',
        'app.Users',
        'app.Pqmps',
        'app.Counties',
        'app.Designations',
        'app.AttachmentsOld',
        'app.MedicationProducts',
        'app.Sadrs',
    ];

    /**
     * Test index method
     *
     * @return void
     * @uses \App\Controller\Reporter\MedicationsController::index()
     */
    public function testIndex(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test view method
     *
     * @return void
     * @uses \App\Controller\Reporter\MedicationsController::view()
     */
    public function testView(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test add method
     *
     * @return void
     * @uses \App\Controller\Reporter\MedicationsController::add()
     */
    public function testAdd(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test edit method
     *
     * @return void
     * @uses \App\Controller\Reporter\MedicationsController::edit()
     */
    public function testEdit(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test delete method
     *
     * @return void
     * @uses \App\Controller\Reporter\MedicationsController::delete()
     */
    public function testDelete(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
