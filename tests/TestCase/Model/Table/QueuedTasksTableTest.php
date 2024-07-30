<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\QueuedTasksTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\QueuedTasksTable Test Case
 */
class QueuedTasksTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\QueuedTasksTable
     */
    protected $QueuedTasks;

    /**
     * Fixtures
     *
     * @var array<string>
     */
    protected $fixtures = [
        'app.QueuedTasks',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    protected function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('QueuedTasks') ? [] : ['className' => QueuedTasksTable::class];
        $this->QueuedTasks = $this->getTableLocator()->get('QueuedTasks', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->QueuedTasks);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\QueuedTasksTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
