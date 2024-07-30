<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\FacilityCodesTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\FacilityCodesTable Test Case
 */
class FacilityCodesTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\FacilityCodesTable
     */
    protected $FacilityCodes;

    /**
     * Fixtures
     *
     * @var array<string>
     */
    protected $fixtures = [
        'app.FacilityCodes',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    protected function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('FacilityCodes') ? [] : ['className' => FacilityCodesTable::class];
        $this->FacilityCodes = $this->getTableLocator()->get('FacilityCodes', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->FacilityCodes);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\FacilityCodesTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
