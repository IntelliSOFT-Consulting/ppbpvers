<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\MedicationProductsTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\MedicationProductsTable Test Case
 */
class MedicationProductsTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\MedicationProductsTable
     */
    protected $MedicationProducts;

    /**
     * Fixtures
     *
     * @var array<string>
     */
    protected $fixtures = [
        'app.MedicationProducts',
        'app.Medications',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    protected function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('MedicationProducts') ? [] : ['className' => MedicationProductsTable::class];
        $this->MedicationProducts = $this->getTableLocator()->get('MedicationProducts', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->MedicationProducts);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\MedicationProductsTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test buildRules method
     *
     * @return void
     * @uses \App\Model\Table\MedicationProductsTable::buildRules()
     */
    public function testBuildRules(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
