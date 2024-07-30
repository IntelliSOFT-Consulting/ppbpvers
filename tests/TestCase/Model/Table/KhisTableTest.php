<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\KhisTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\KhisTable Test Case
 */
class KhisTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\KhisTable
     */
    protected $Khis;

    /**
     * Fixtures
     *
     * @var array<string>
     */
    protected $fixtures = [
        'app.Khis',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    protected function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('Khis') ? [] : ['className' => KhisTable::class];
        $this->Khis = $this->getTableLocator()->get('Khis', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->Khis);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\KhisTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
