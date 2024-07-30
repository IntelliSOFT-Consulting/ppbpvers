<?php
declare(strict_types=1);

namespace App\Test\TestCase\Controller\Reporter;

use App\Controller\Reporter\TransfusionsController;
use Cake\TestSuite\IntegrationTestTrait;
use Cake\TestSuite\TestCase;

/**
 * App\Controller\Reporter\TransfusionsController Test Case
 *
 * @uses \App\Controller\Reporter\TransfusionsController
 */
class TransfusionsControllerTest extends TestCase
{
    use IntegrationTestTrait;

    /**
     * Fixtures
     *
     * @var array<string>
     */
    protected $fixtures = [
        'app.Transfusions',
        'app.Users',
        'app.Pqmps',
        'app.Counties',
        'app.Designations',
        'app.AttachmentsOld',
        'app.Pints',
    ];

    /**
     * Test index method
     *
     * @return void
     * @uses \App\Controller\Reporter\TransfusionsController::index()
     */
    public function testIndex(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test view method
     *
     * @return void
     * @uses \App\Controller\Reporter\TransfusionsController::view()
     */
    public function testView(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test add method
     *
     * @return void
     * @uses \App\Controller\Reporter\TransfusionsController::add()
     */
    public function testAdd(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test edit method
     *
     * @return void
     * @uses \App\Controller\Reporter\TransfusionsController::edit()
     */
    public function testEdit(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test delete method
     *
     * @return void
     * @uses \App\Controller\Reporter\TransfusionsController::delete()
     */
    public function testDelete(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
