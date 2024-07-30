<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\DrugDictionariesOldTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\DrugDictionariesOldTable Test Case
 */
class DrugDictionariesOldTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\DrugDictionariesOldTable
     */
    protected $DrugDictionariesOld;

    /**
     * Fixtures
     *
     * @var array<string>
     */
    protected $fixtures = [
        'app.DrugDictionariesOld',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    protected function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('DrugDictionariesOld') ? [] : ['className' => DrugDictionariesOldTable::class];
        $this->DrugDictionariesOld = $this->getTableLocator()->get('DrugDictionariesOld', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->DrugDictionariesOld);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\DrugDictionariesOldTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
