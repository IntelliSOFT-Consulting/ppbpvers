<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * DrugsFixture
 */
class DrugsFixture extends TestFixture
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
                'brand_name' => 'Lorem ipsum dolor sit amet',
                'inn_name' => 'Lorem ipsum dolor sit amet',
                'manufacturer' => 'Lorem ipsum dolor sit amet',
                'local_trade_rep' => 'Lorem ipsum dolor sit amet',
                'batch_number' => 'Lorem ipsum dolor sit amet',
                'registration_status' => 'Lorem ipsum dolor sit amet',
                'retention_status' => 'Lorem ipsum dolor sit amet',
                'donation' => 'Lorem ipsum dolor sit amet',
                'created' => '2024-07-30 10:20:35',
                'modified' => '2024-07-30 10:20:35',
            ],
        ];
        parent::init();
    }
}
