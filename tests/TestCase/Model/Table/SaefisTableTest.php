<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\SaefisTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\SaefisTable Test Case
 */
class SaefisTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\SaefisTable
     */
    protected $Saefis;

    /**
     * Fixtures
     *
     * @var array<string>
     */
    protected $fixtures = [
        'app.Saefis',
        'app.Users',
        'app.Designations',
        'app.AefiListOfVaccines',
        'app.Reviews',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    protected function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('Saefis') ? [] : ['className' => SaefisTable::class];
        $this->Saefis = $this->getTableLocator()->get('Saefis', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->Saefis);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\SaefisTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test buildRules method
     *
     * @return void
     * @uses \App\Model\Table\SaefisTable::buildRules()
     */
    public function testBuildRules(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
