<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\PadrsTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\PadrsTable Test Case
 */
class PadrsTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\PadrsTable
     */
    protected $Padrs;

    /**
     * Fixtures
     *
     * @var array<string>
     */
    protected $fixtures = [
        'app.Padrs',
        'app.Users',
        'app.Counties',
        'app.SubCounties',
        'app.Designations',
        'app.PadrListOfMedicines',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    protected function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('Padrs') ? [] : ['className' => PadrsTable::class];
        $this->Padrs = $this->getTableLocator()->get('Padrs', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->Padrs);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\PadrsTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test buildRules method
     *
     * @return void
     * @uses \App\Model\Table\PadrsTable::buildRules()
     */
    public function testBuildRules(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
