<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\MeddrasTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\MeddrasTable Test Case
 */
class MeddrasTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\MeddrasTable
     */
    protected $Meddras;

    /**
     * Fixtures
     *
     * @var array<string>
     */
    protected $fixtures = [
        'app.Meddras',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    protected function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('Meddras') ? [] : ['className' => MeddrasTable::class];
        $this->Meddras = $this->getTableLocator()->get('Meddras', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->Meddras);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\MeddrasTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
