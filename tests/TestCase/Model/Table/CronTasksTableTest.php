<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\CronTasksTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\CronTasksTable Test Case
 */
class CronTasksTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\CronTasksTable
     */
    protected $CronTasks;

    /**
     * Fixtures
     *
     * @var array<string>
     */
    protected $fixtures = [
        'app.CronTasks',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    protected function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('CronTasks') ? [] : ['className' => CronTasksTable::class];
        $this->CronTasks = $this->getTableLocator()->get('CronTasks', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->CronTasks);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\CronTasksTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
