<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\Ce2bReactionTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\Ce2bReactionTable Test Case
 */
class Ce2bReactionTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\Ce2bReactionTable
     */
    protected $Ce2bReaction;

    /**
     * Fixtures
     *
     * @var array<string>
     */
    protected $fixtures = [
        'app.Ce2bReaction',
        'app.Ce2bs',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    protected function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('Ce2bReaction') ? [] : ['className' => Ce2bReactionTable::class];
        $this->Ce2bReaction = $this->getTableLocator()->get('Ce2bReaction', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->Ce2bReaction);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\Ce2bReactionTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test buildRules method
     *
     * @return void
     * @uses \App\Model\Table\Ce2bReactionTable::buildRules()
     */
    public function testBuildRules(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
