<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * Ce2bListOfDrugsFixture
 */
class Ce2bListOfDrugsFixture extends TestFixture
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
                'ce2b_id' => 1,
                'ce2b_followup_id' => 1,
                'dose_id' => 1,
                'route_id' => 1,
                'frequency_id' => 1,
                'frequency_id_other' => 'Lorem ipsum dolor sit amet',
                'drug_name' => 'Lorem ipsum dolor sit amet',
                'brand_name' => 'Lorem ipsum dolor sit amet',
                'batch_no' => 'Lorem ipsum dolor sit amet',
                'manufacturer' => 'Lorem ipsum dolor sit amet',
                'dose' => 'Lorem ipsum dolor sit amet',
                'start_date' => '2024-07-30',
                'stop_date' => '2024-07-30',
                'indication' => 'Lorem ipsum dolor sit amet',
                'suspected_drug' => 'Lorem ipsum dolor sit amet',
                'created' => '2024-07-30 10:20:30',
                'modified' => '2024-07-30 10:20:30',
                'route' => 'Lorem ipsum dolor sit amet',
            ],
        ];
        parent::init();
    }
}
