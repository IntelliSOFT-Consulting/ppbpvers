<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\CountiesTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\CountiesTable Test Case
 */
class CountiesTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\CountiesTable
     */
    protected $Counties;

    /**
     * Fixtures
     *
     * @var array<string>
     */
    protected $fixtures = [
        'app.Counties',
        'app.Aefis',
        'app.Aggregates',
        'app.Ce2bs',
        'app.Devices',
        'app.Medications',
        'app.Padrs',
        'app.Pqmps',
        'app.SadrFollowups',
        'app.Sadrs',
        'app.SubCounties',
        'app.Transfusions',
        'app.Users',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    protected function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('Counties') ? [] : ['className' => CountiesTable::class];
        $this->Counties = $this->getTableLocator()->get('Counties', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->Counties);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\CountiesTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
