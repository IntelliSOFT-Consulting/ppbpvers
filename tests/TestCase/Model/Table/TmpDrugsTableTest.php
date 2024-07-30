<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\TmpDrugsTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\TmpDrugsTable Test Case
 */
class TmpDrugsTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\TmpDrugsTable
     */
    protected $TmpDrugs;

    /**
     * Fixtures
     *
     * @var array<string>
     */
    protected $fixtures = [
        'app.TmpDrugs',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    protected function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('TmpDrugs') ? [] : ['className' => TmpDrugsTable::class];
        $this->TmpDrugs = $this->getTableLocator()->get('TmpDrugs', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->TmpDrugs);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\TmpDrugsTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
