<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\SadrReactionTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\SadrReactionTable Test Case
 */
class SadrReactionTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\SadrReactionTable
     */
    protected $SadrReaction;

    /**
     * Fixtures
     *
     * @var array<string>
     */
    protected $fixtures = [
        'app.SadrReaction',
        'app.Sadrs',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    protected function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('SadrReaction') ? [] : ['className' => SadrReactionTable::class];
        $this->SadrReaction = $this->getTableLocator()->get('SadrReaction', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->SadrReaction);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\SadrReactionTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test buildRules method
     *
     * @return void
     * @uses \App\Model\Table\SadrReactionTable::buildRules()
     */
    public function testBuildRules(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
