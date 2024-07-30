<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\PocketsTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\PocketsTable Test Case
 */
class PocketsTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\PocketsTable
     */
    protected $Pockets;

    /**
     * Fixtures
     *
     * @var array<string>
     */
    protected $fixtures = [
        'app.Pockets',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    protected function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('Pockets') ? [] : ['className' => PocketsTable::class];
        $this->Pockets = $this->getTableLocator()->get('Pockets', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->Pockets);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\PocketsTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
