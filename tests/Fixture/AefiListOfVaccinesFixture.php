<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * AefiListOfVaccinesFixture
 */
class AefiListOfVaccinesFixture extends TestFixture
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
                'aefi_id' => 1,
                'saefi_id' => 1,
                'vaccine_id' => 1,
                'vaccine_name' => 'Lorem ipsum dolor sit amet',
                'vaccination_date' => '2024-07-30 10:20:26',
                'vaccination_time' => 'Lorem ip',
                'vaccine_manufacturer' => 'Lorem ipsum dolor sit amet',
                'vaccination_route' => 'Lorem ipsum dolor sit amet',
                'vaccination_site' => 'Lorem ipsum dolor sit amet',
                'dosage' => 'Lorem ipsum dolor sit amet',
                'icsr_code' => 'Lorem ipsum dolor sit amet',
                'batch_number' => 'Lorem ipsum dolor sit amet',
                'expiry_date' => '2024-07-30',
                'diluent_batch_number' => 'Lorem ipsum dolor sit amet',
                'diluent_manufacturer' => 'Lorem ipsum dolor sit amet',
                'diluent_expiry_date' => '2024-07-30',
                'suspected_drug' => 1,
                'created' => '2024-07-30 10:20:26',
                'modified' => '2024-07-30 10:20:26',
            ],
        ];
        parent::init();
    }
}
