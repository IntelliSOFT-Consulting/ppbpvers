<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\RoutesTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\RoutesTable Test Case
 */
class RoutesTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\RoutesTable
     */
    protected $Routes;

    /**
     * Fixtures
     *
     * @var array<string>
     */
    protected $fixtures = [
        'app.Routes',
        'app.Ce2bListOfDrugs',
        'app.ConcomittantDrugs',
        'app.SadrListOfDrugs',
        'app.SadrListOfMedicines',
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
        $config = $this->getTableLocator()->exists('Routes') ? [] : ['className' => RoutesTable::class];
        $this->Routes = $this->getTableLocator()->get('Routes', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->Routes);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\RoutesTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
