<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\SadrListOfDrugsTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\SadrListOfDrugsTable Test Case
 */
class SadrListOfDrugsTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\SadrListOfDrugsTable
     */
    protected $SadrListOfDrugs;

    /**
     * Fixtures
     *
     * @var array<string>
     */
    protected $fixtures = [
        'app.SadrListOfDrugs',
        'app.Sadrs',
        'app.SadrFollowups',
        'app.Doses',
        'app.Routes',
        'app.Frequencies',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    protected function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('SadrListOfDrugs') ? [] : ['className' => SadrListOfDrugsTable::class];
        $this->SadrListOfDrugs = $this->getTableLocator()->get('SadrListOfDrugs', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->SadrListOfDrugs);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\SadrListOfDrugsTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test buildRules method
     *
     * @return void
     * @uses \App\Model\Table\SadrListOfDrugsTable::buildRules()
     */
    public function testBuildRules(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
