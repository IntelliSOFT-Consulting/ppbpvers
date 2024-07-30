<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\AefisTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\AefisTable Test Case
 */
class AefisTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\AefisTable
     */
    protected $Aefis;

    /**
     * Fixtures
     *
     * @var array<string>
     */
    protected $fixtures = [
        'app.Aefis',
        'app.Users',
        'app.Pqmps',
        'app.Counties',
        'app.SubCounties',
        'app.Designations',
        'app.AefiDescriptions',
        'app.AefiListOfVaccines',
        'app.AefiReactions',
        'app.AttachmentsOld',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    protected function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('Aefis') ? [] : ['className' => AefisTable::class];
        $this->Aefis = $this->getTableLocator()->get('Aefis', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->Aefis);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\AefisTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test buildRules method
     *
     * @return void
     * @uses \App\Model\Table\AefisTable::buildRules()
     */
    public function testBuildRules(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
