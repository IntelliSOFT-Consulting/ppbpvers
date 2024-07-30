<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\PqmpsTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\PqmpsTable Test Case
 */
class PqmpsTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\PqmpsTable
     */
    protected $Pqmps;

    /**
     * Fixtures
     *
     * @var array<string>
     */
    protected $fixtures = [
        'app.Pqmps',
        'app.Users',
        'app.Counties',
        'app.SubCounties',
        'app.Countries',
        'app.Designations',
        'app.Aefis',
        'app.AttachmentsOld',
        'app.Devices',
        'app.Medications',
        'app.Sadrs',
        'app.Transfusions',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    protected function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('Pqmps') ? [] : ['className' => PqmpsTable::class];
        $this->Pqmps = $this->getTableLocator()->get('Pqmps', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->Pqmps);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\PqmpsTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test buildRules method
     *
     * @return void
     * @uses \App\Model\Table\PqmpsTable::buildRules()
     */
    public function testBuildRules(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
