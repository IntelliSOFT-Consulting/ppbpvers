<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\SadrFollowupsTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\SadrFollowupsTable Test Case
 */
class SadrFollowupsTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\SadrFollowupsTable
     */
    protected $SadrFollowups;

    /**
     * Fixtures
     *
     * @var array<string>
     */
    protected $fixtures = [
        'app.SadrFollowups',
        'app.Users',
        'app.Counties',
        'app.Sadrs',
        'app.Designations',
        'app.AttachmentsOld',
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
        $config = $this->getTableLocator()->exists('SadrFollowups') ? [] : ['className' => SadrFollowupsTable::class];
        $this->SadrFollowups = $this->getTableLocator()->get('SadrFollowups', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->SadrFollowups);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\SadrFollowupsTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test buildRules method
     *
     * @return void
     * @uses \App\Model\Table\SadrFollowupsTable::buildRules()
     */
    public function testBuildRules(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
