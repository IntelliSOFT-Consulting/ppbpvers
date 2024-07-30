<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\SaesTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\SaesTable Test Case
 */
class SaesTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\SaesTable
     */
    protected $Saes;

    /**
     * Fixtures
     *
     * @var array<string>
     */
    protected $fixtures = [
        'app.Saes',
        'app.Users',
        'app.Countries',
        'app.ConcomittantDrugs',
        'app.SuspectedDrugs',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    protected function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('Saes') ? [] : ['className' => SaesTable::class];
        $this->Saes = $this->getTableLocator()->get('Saes', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->Saes);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\SaesTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test buildRules method
     *
     * @return void
     * @uses \App\Model\Table\SaesTable::buildRules()
     */
    public function testBuildRules(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
