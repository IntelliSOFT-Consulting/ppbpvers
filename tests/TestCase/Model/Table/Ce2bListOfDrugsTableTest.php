<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\Ce2bListOfDrugsTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\Ce2bListOfDrugsTable Test Case
 */
class Ce2bListOfDrugsTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\Ce2bListOfDrugsTable
     */
    protected $Ce2bListOfDrugs;

    /**
     * Fixtures
     *
     * @var array<string>
     */
    protected $fixtures = [
        'app.Ce2bListOfDrugs',
        'app.Ce2bs',
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
        $config = $this->getTableLocator()->exists('Ce2bListOfDrugs') ? [] : ['className' => Ce2bListOfDrugsTable::class];
        $this->Ce2bListOfDrugs = $this->getTableLocator()->get('Ce2bListOfDrugs', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->Ce2bListOfDrugs);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\Ce2bListOfDrugsTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test buildRules method
     *
     * @return void
     * @uses \App\Model\Table\Ce2bListOfDrugsTable::buildRules()
     */
    public function testBuildRules(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
