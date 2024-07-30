<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\AggregatesTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\AggregatesTable Test Case
 */
class AggregatesTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\AggregatesTable
     */
    protected $Aggregates;

    /**
     * Fixtures
     *
     * @var array<string>
     */
    protected $fixtures = [
        'app.Aggregates',
        'app.Users',
        'app.Counties',
        'app.SubCounties',
        'app.Designations',
        'app.AggregateListOfSignals',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    protected function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('Aggregates') ? [] : ['className' => AggregatesTable::class];
        $this->Aggregates = $this->getTableLocator()->get('Aggregates', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->Aggregates);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\AggregatesTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test buildRules method
     *
     * @return void
     * @uses \App\Model\Table\AggregatesTable::buildRules()
     */
    public function testBuildRules(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
