<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * MedicationProductsFixture
 */
class MedicationProductsFixture extends TestFixture
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
                'medication_id' => 1,
                'generic_name_i' => 'Lorem ipsum dolor sit amet',
                'product_name_i' => 'Lorem ipsum dolor sit amet',
                'dosage_form_i' => 'Lorem ipsum dolor sit amet',
                'dosage_i' => 'Lorem ipsum dolor sit amet',
                'manufacturer_i' => 'Lorem ipsum dolor sit amet',
                'strength_i' => 'Lorem ipsum dolor sit amet',
                'container_i' => 'Lorem ipsum dolor sit amet',
                'generic_name_ii' => 'Lorem ipsum dolor sit amet',
                'product_name_ii' => 'Lorem ipsum dolor sit amet',
                'dosage_form_ii' => 'Lorem ipsum dolor sit amet',
                'dosage_ii' => 'Lorem ipsum dolor sit amet',
                'manufacturer_ii' => 'Lorem ipsum dolor sit amet',
                'strength_ii' => 'Lorem ipsum dolor sit amet',
                'container_ii' => 'Lorem ipsum dolor sit amet',
                'created' => '2024-07-30 09:45:18',
                'modifed' => '2024-07-30 09:45:18',
            ],
        ];
        parent::init();
    }
}
