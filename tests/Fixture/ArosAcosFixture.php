<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * ArosAcosFixture
 */
class ArosAcosFixture extends TestFixture
{
    /**
     * Init method
     *
     * @return void
     */
    public function init(): void
    {
        $this->records = [
            [
                'id' => 1,
                'aro_id' => 1,
                'aco_id' => 1,
                '_create' => 'Lo',
                '_read' => 'Lo',
                '_update' => 'Lo',
                '_delete' => 'Lo',
            ],
        ];
        parent::init();
    }
}
