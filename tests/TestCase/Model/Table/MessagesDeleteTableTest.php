<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\MessagesDeleteTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\MessagesDeleteTable Test Case
 */
class MessagesDeleteTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\MessagesDeleteTable
     */
    protected $MessagesDelete;

    /**
     * Fixtures
     *
     * @var array<string>
     */
    protected $fixtures = [
        'app.MessagesDelete',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    protected function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('MessagesDelete') ? [] : ['className' => MessagesDeleteTable::class];
        $this->MessagesDelete = $this->getTableLocator()->get('MessagesDelete', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->MessagesDelete);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\MessagesDeleteTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
