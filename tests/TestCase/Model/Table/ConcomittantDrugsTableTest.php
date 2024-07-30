<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\ConcomittantDrugsTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\ConcomittantDrugsTable Test Case
 */
class ConcomittantDrugsTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\ConcomittantDrugsTable
     */
    protected $ConcomittantDrugs;

    /**
     * Fixtures
     *
     * @var array<string>
     */
    protected $fixtures = [
        'app.ConcomittantDrugs',
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
        $config = $this->getTableLocator()->exists('ConcomittantDrugs') ? [] : ['className' => ConcomittantDrugsTable::class];
        $this->ConcomittantDrugs = $this->getTableLocator()->get('ConcomittantDrugs', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->ConcomittantDrugs);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\ConcomittantDrugsTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test buildRules method
     *
     * @return void
     * @uses \App\Model\Table\ConcomittantDrugsTable::buildRules()
     */
    public function testBuildRules(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
