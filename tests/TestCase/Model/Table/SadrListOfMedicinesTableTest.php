<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\SadrListOfMedicinesTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\SadrListOfMedicinesTable Test Case
 */
class SadrListOfMedicinesTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\SadrListOfMedicinesTable
     */
    protected $SadrListOfMedicines;

    /**
     * Fixtures
     *
     * @var array<string>
     */
    protected $fixtures = [
        'app.SadrListOfMedicines',
        'app.Sadrs',
        'app.SadrFollowups',
        'app.Doses',
        'app.Routes',
        'app.Frequencies',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    protected function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('SadrListOfMedicines') ? [] : ['className' => SadrListOfMedicinesTable::class];
        $this->SadrListOfMedicines = $this->getTableLocator()->get('SadrListOfMedicines', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->SadrListOfMedicines);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\SadrListOfMedicinesTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test buildRules method
     *
     * @return void
     * @uses \App\Model\Table\SadrListOfMedicinesTable::buildRules()
     */
    public function testBuildRules(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
