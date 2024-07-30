<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * TmpDrugsFixture
 */
class TmpDrugsFixture extends TestFixture
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
                'ectd_product_id' => 1,
                'product_trade_name' => 'Lorem ipsum dolor sit amet',
                'product_registration_no' => 'Lorem ipsum dolor sit amet',
                'local_foreign' => 'Lorem',
                'inn_of_api' => 'Lorem ipsum dolor sit amet',
                'api_strength_per_dosage' => 'Lorem ipsum dolor sit amet',
                'AL' => 1,
            ],
        ];
        parent::init();
    }
}
