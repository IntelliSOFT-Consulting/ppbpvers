<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\ListOfDevicesTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\ListOfDevicesTable Test Case
 */
class ListOfDevicesTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\ListOfDevicesTable
     */
    protected $ListOfDevices;

    /**
     * Fixtures
     *
     * @var array<string>
     */
    protected $fixtures = [
        'app.ListOfDevices',
        'app.Devices',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    protected function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('ListOfDevices') ? [] : ['className' => ListOfDevicesTable::class];
        $this->ListOfDevices = $this->getTableLocator()->get('ListOfDevices', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->ListOfDevices);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\ListOfDevicesTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test buildRules method
     *
     * @return void
     * @uses \App\Model\Table\ListOfDevicesTable::buildRules()
     */
    public function testBuildRules(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
