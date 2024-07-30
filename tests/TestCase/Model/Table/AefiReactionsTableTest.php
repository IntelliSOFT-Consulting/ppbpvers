<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\AefiReactionsTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\AefiReactionsTable Test Case
 */
class AefiReactionsTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\AefiReactionsTable
     */
    protected $AefiReactions;

    /**
     * Fixtures
     *
     * @var array<string>
     */
    protected $fixtures = [
        'app.AefiReactions',
        'app.Aefis',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    protected function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('AefiReactions') ? [] : ['className' => AefiReactionsTable::class];
        $this->AefiReactions = $this->getTableLocator()->get('AefiReactions', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->AefiReactions);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\AefiReactionsTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test buildRules method
     *
     * @return void
     * @uses \App\Model\Table\AefiReactionsTable::buildRules()
     */
    public function testBuildRules(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
