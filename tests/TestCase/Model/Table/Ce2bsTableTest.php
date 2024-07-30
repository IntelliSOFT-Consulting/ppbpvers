<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\Ce2bsTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\Ce2bsTable Test Case
 */
class Ce2bsTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\Ce2bsTable
     */
    protected $Ce2bs;

    /**
     * Fixtures
     *
     * @var array<string>
     */
    protected $fixtures = [
        'app.Ce2bs',
        'app.Users',
        'app.Counties',
        'app.SubCounties',
        'app.Designations',
        'app.Ce2bListOfDrugs',
        'app.Ce2bReaction',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    protected function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('Ce2bs') ? [] : ['className' => Ce2bsTable::class];
        $this->Ce2bs = $this->getTableLocator()->get('Ce2bs', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->Ce2bs);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\Ce2bsTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test buildRules method
     *
     * @return void
     * @uses \App\Model\Table\Ce2bsTable::buildRules()
     */
    public function testBuildRules(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
