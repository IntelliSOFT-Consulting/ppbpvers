<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\WhoDrugsTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\WhoDrugsTable Test Case
 */
class WhoDrugsTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\WhoDrugsTable
     */
    protected $WhoDrugs;

    /**
     * Fixtures
     *
     * @var array<string>
     */
    protected $fixtures = [
        'app.WhoDrugs',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    protected function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('WhoDrugs') ? [] : ['className' => WhoDrugsTable::class];
        $this->WhoDrugs = $this->getTableLocator()->get('WhoDrugs', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->WhoDrugs);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\WhoDrugsTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
