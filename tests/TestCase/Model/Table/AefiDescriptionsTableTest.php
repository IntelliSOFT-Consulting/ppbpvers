<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\AefiDescriptionsTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\AefiDescriptionsTable Test Case
 */
class AefiDescriptionsTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\AefiDescriptionsTable
     */
    protected $AefiDescriptions;

    /**
     * Fixtures
     *
     * @var array<string>
     */
    protected $fixtures = [
        'app.AefiDescriptions',
        'app.Aefis',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    protected function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('AefiDescriptions') ? [] : ['className' => AefiDescriptionsTable::class];
        $this->AefiDescriptions = $this->getTableLocator()->get('AefiDescriptions', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->AefiDescriptions);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\AefiDescriptionsTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test buildRules method
     *
     * @return void
     * @uses \App\Model\Table\AefiDescriptionsTable::buildRules()
     */
    public function testBuildRules(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
