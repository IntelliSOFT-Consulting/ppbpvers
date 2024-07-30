<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\HelpInfosTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\HelpInfosTable Test Case
 */
class HelpInfosTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\HelpInfosTable
     */
    protected $HelpInfos;

    /**
     * Fixtures
     *
     * @var array<string>
     */
    protected $fixtures = [
        'app.HelpInfos',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    protected function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('HelpInfos') ? [] : ['className' => HelpInfosTable::class];
        $this->HelpInfos = $this->getTableLocator()->get('HelpInfos', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->HelpInfos);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\HelpInfosTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
