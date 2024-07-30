<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\SadrsTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\SadrsTable Test Case
 */
class SadrsTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\SadrsTable
     */
    protected $Sadrs;

    /**
     * Fixtures
     *
     * @var array<string>
     */
    protected $fixtures = [
        'app.Sadrs',
        'app.Users',
        'app.Pqmps',
        'app.Medications',
        'app.Counties',
        'app.SubCounties',
        'app.Designations',
        'app.AttachmentsOld',
        'app.SadrDescriptions',
        'app.SadrFollowups',
        'app.SadrListOfDrugs',
        'app.SadrListOfMedicines',
        'app.SadrReaction',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    protected function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('Sadrs') ? [] : ['className' => SadrsTable::class];
        $this->Sadrs = $this->getTableLocator()->get('Sadrs', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->Sadrs);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\SadrsTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test buildRules method
     *
     * @return void
     * @uses \App\Model\Table\SadrsTable::buildRules()
     */
    public function testBuildRules(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
