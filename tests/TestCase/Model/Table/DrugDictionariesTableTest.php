<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\DrugDictionariesTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\DrugDictionariesTable Test Case
 */
class DrugDictionariesTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\DrugDictionariesTable
     */
    protected $DrugDictionaries;

    /**
     * Fixtures
     *
     * @var array<string>
     */
    protected $fixtures = [
        'app.DrugDictionaries',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    protected function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('DrugDictionaries') ? [] : ['className' => DrugDictionariesTable::class];
        $this->DrugDictionaries = $this->getTableLocator()->get('DrugDictionaries', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->DrugDictionaries);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\DrugDictionariesTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
