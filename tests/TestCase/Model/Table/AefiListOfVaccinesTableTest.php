<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\AefiListOfVaccinesTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\AefiListOfVaccinesTable Test Case
 */
class AefiListOfVaccinesTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\AefiListOfVaccinesTable
     */
    protected $AefiListOfVaccines;

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
     * setUp method
     *
     * @return void
     */
    protected function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('AefiListOfVaccines') ? [] : ['className' => AefiListOfVaccinesTable::class];
        $this->AefiListOfVaccines = $this->getTableLocator()->get('AefiListOfVaccines', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->AefiListOfVaccines);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\AefiListOfVaccinesTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test buildRules method
     *
     * @return void
     * @uses \App\Model\Table\AefiListOfVaccinesTable::buildRules()
     */
    public function testBuildRules(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
