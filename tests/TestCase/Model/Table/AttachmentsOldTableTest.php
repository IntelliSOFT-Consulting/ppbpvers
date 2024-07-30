<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\AttachmentsOldTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\AttachmentsOldTable Test Case
 */
class AttachmentsOldTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\AttachmentsOldTable
     */
    protected $AttachmentsOld;

    /**
     * Fixtures
     *
     * @var array<string>
     */
    protected $fixtures = [
        'app.AttachmentsOld',
        'app.Sadrs',
        'app.SadrFollowups',
        'app.Pqmps',
        'app.Aefis',
        'app.Devices',
        'app.Transfusions',
        'app.Medications',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    protected function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('AttachmentsOld') ? [] : ['className' => AttachmentsOldTable::class];
        $this->AttachmentsOld = $this->getTableLocator()->get('AttachmentsOld', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->AttachmentsOld);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\AttachmentsOldTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test buildRules method
     *
     * @return void
     * @uses \App\Model\Table\AttachmentsOldTable::buildRules()
     */
    public function testBuildRules(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
