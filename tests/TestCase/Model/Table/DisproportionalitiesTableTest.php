<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\DisproportionalitiesTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\DisproportionalitiesTable Test Case
 */
class DisproportionalitiesTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\DisproportionalitiesTable
     */
    protected $Disproportionalities;

    /**
     * Fixtures
     *
     * @var array<string>
     */
    protected $fixtures = [
        'app.Disproportionalities',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    protected function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('Disproportionalities') ? [] : ['className' => DisproportionalitiesTable::class];
        $this->Disproportionalities = $this->getTableLocator()->get('Disproportionalities', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->Disproportionalities);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\DisproportionalitiesTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
