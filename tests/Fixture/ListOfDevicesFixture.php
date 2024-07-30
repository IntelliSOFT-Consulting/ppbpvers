<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * ListOfDevicesFixture
 */
class ListOfDevicesFixture extends TestFixture
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
                'device_id' => 1,
                'brand_name' => 'Lorem ipsum dolor sit amet',
                'serial_no' => 'Lorem ipsum dolor sit amet',
                'common_name' => 'Lorem ipsum dolor sit amet',
                'manufacturer' => 'Lorem ipsum dolor sit amet',
                'manufacture_date' => 'Lorem ipsum dolor sit amet',
                'expiry_date' => 'Lorem ipsum dolor sit amet',
                'created' => '2024-07-30 10:20:38',
                'modified' => '2024-07-30 10:20:38',
            ],
        ];
        parent::init();
    }
}
