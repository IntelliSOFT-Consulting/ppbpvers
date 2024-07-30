<?php
declare(strict_types=1);

namespace App\Test\TestCase\Controller;

use App\Controller\AefiListOfVaccinesController;
use Cake\TestSuite\IntegrationTestTrait;
use Cake\TestSuite\TestCase;

/**
 * App\Controller\AefiListOfVaccinesController Test Case
 *
 * @uses \App\Controller\AefiListOfVaccinesController
 */
class AefiListOfVaccinesControllerTest extends TestCase
{
    use IntegrationTestTrait;

    /**
     * Fixtures
     *
     * @var array<string>
     */
    protected $fixtures = [
        'app.AefiListOfVaccines',
        'app.Aefis',
        'app.Saefis',
        'app.Vaccines',
    ];

    /**
     * Test index method
     *
     * @return void
     * @uses \App\Controller\AefiListOfVaccinesController::index()
     */
    public function testIndex(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test view method
     *
     * @return void
     * @uses \App\Controller\AefiListOfVaccinesController::view()
     */
    public function testView(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test add method
     *
     * @return void
     * @uses \App\Controller\AefiListOfVaccinesController::add()
     */
    public function testAdd(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test edit method
     *
     * @return void
     * @uses \App\Controller\AefiListOfVaccinesController::edit()
     */
    public function testEdit(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test delete method
     *
     * @return void
     * @uses \App\Controller\AefiListOfVaccinesController::delete()
     */
    public function testDelete(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
