<?php
declare(strict_types=1);

namespace App\Test\TestCase\Controller\Manager;

use App\Controller\Manager\SadrsController;
use Cake\TestSuite\IntegrationTestTrait;
use Cake\TestSuite\TestCase;

/**
 * App\Controller\Manager\SadrsController Test Case
 *
 * @uses \App\Controller\Manager\SadrsController
 */
class SadrsControllerTest extends TestCase
{
    use IntegrationTestTrait;

    /**
     * Fixtures
     *
     * @var array<string>
     */
    protected $fixtures = [
        'app.Sadrs',
        'app.Users',
        'app.Pqmps',
        'app.Medications',
        'app.Counties',
        'app.SubCounties',
        'app.Designations',
        'app.AttachmentsOld',
        'app.SadrDescriptions',
        'app.SadrFollowups',
        'app.SadrListOfDrugs',
        'app.SadrListOfMedicines',
        'app.SadrReaction',
    ];

    /**
     * Test index method
     *
     * @return void
     * @uses \App\Controller\Manager\SadrsController::index()
     */
    public function testIndex(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test view method
     *
     * @return void
     * @uses \App\Controller\Manager\SadrsController::view()
     */
    public function testView(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test add method
     *
     * @return void
     * @uses \App\Controller\Manager\SadrsController::add()
     */
    public function testAdd(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test edit method
     *
     * @return void
     * @uses \App\Controller\Manager\SadrsController::edit()
     */
    public function testEdit(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test delete method
     *
     * @return void
     * @uses \App\Controller\Manager\SadrsController::delete()
     */
    public function testDelete(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
