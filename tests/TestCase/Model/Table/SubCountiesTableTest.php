<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\SubCountiesTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\SubCountiesTable Test Case
 */
class SubCountiesTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\SubCountiesTable
     */
    protected $SubCounties;

    /**
     * Fixtures
     *
     * @var array<string>
     */
    protected $fixtures = [
        'app.SubCounties',
        'app.Counties',
        'app.Aefis',
        'app.Aggregates',
        'app.Ce2bs',
        'app.Padrs',
        'app.Pqmps',
        'app.Sadrs',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    protected function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('SubCounties') ? [] : ['className' => SubCountiesTable::class];
        $this->SubCounties = $this->getTableLocator()->get('SubCounties', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->SubCounties);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\SubCountiesTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test buildRules method
     *
     * @return void
     * @uses \App\Model\Table\SubCountiesTable::buildRules()
     */
    public function testBuildRules(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
