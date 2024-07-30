<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\SuspectedDrugsTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\SuspectedDrugsTable Test Case
 */
class SuspectedDrugsTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\SuspectedDrugsTable
     */
    protected $SuspectedDrugs;

    /**
     * Fixtures
     *
     * @var array<string>
     */
    protected $fixtures = [
        'app.SuspectedDrugs',
        'app.Saes',
        'app.Routes',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    protected function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('SuspectedDrugs') ? [] : ['className' => SuspectedDrugsTable::class];
        $this->SuspectedDrugs = $this->getTableLocator()->get('SuspectedDrugs', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->SuspectedDrugs);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\SuspectedDrugsTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test buildRules method
     *
     * @return void
     * @uses \App\Model\Table\SuspectedDrugsTable::buildRules()
     */
    public function testBuildRules(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
