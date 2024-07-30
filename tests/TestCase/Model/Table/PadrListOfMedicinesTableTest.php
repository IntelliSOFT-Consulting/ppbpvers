<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\PadrListOfMedicinesTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\PadrListOfMedicinesTable Test Case
 */
class PadrListOfMedicinesTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\PadrListOfMedicinesTable
     */
    protected $PadrListOfMedicines;

    /**
     * Fixtures
     *
     * @var array<string>
     */
    protected $fixtures = [
        'app.PadrListOfMedicines',
        'app.Padrs',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    protected function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('PadrListOfMedicines') ? [] : ['className' => PadrListOfMedicinesTable::class];
        $this->PadrListOfMedicines = $this->getTableLocator()->get('PadrListOfMedicines', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->PadrListOfMedicines);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\PadrListOfMedicinesTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test buildRules method
     *
     * @return void
     * @uses \App\Model\Table\PadrListOfMedicinesTable::buildRules()
     */
    public function testBuildRules(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
