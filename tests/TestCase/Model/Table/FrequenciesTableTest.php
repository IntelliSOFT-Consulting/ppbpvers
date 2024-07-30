<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\FrequenciesTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\FrequenciesTable Test Case
 */
class FrequenciesTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\FrequenciesTable
     */
    protected $Frequencies;

    /**
     * Fixtures
     *
     * @var array<string>
     */
    protected $fixtures = [
        'app.Frequencies',
        'app.Ce2bListOfDrugs',
        'app.SadrListOfDrugs',
        'app.SadrListOfMedicines',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    protected function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('Frequencies') ? [] : ['className' => FrequenciesTable::class];
        $this->Frequencies = $this->getTableLocator()->get('Frequencies', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->Frequencies);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\FrequenciesTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
