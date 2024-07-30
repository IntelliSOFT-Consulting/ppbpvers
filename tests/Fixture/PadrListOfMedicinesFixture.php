<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * PadrListOfMedicinesFixture
 */
class PadrListOfMedicinesFixture extends TestFixture
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
                'padr_id' => 1,
                'product_name' => 'Lorem ipsum dolor sit amet',
                'medicine_source' => 'Lorem ipsum dolor sit amet',
                'manufacturer' => 'Lorem ipsum dolor sit amet',
                'expiry_date' => 'Lorem ipsum dolor sit amet',
                'start_date' => '2024-07-30',
                'end_date' => 'Lorem ipsum dolor sit amet',
                'created' => '2024-07-30 10:20:41',
                'modifed' => '2024-07-30 10:20:41',
            ],
        ];
        parent::init();
    }
}
