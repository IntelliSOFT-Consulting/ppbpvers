<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\AutoDrugsTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\AutoDrugsTable Test Case
 */
class AutoDrugsTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\AutoDrugsTable
     */
    protected $AutoDrugs;

    /**
     * Fixtures
     *
     * @var array<string>
     */
    protected $fixtures = [
        'app.AutoDrugs',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    protected function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('AutoDrugs') ? [] : ['className' => AutoDrugsTable::class];
        $this->AutoDrugs = $this->getTableLocator()->get('AutoDrugs', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->AutoDrugs);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\AutoDrugsTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
