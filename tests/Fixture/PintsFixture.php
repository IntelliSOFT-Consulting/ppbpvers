<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * PintsFixture
 */
class PintsFixture extends TestFixture
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
                'transfusion_id' => 1,
                'component_type' => 'Lorem ipsum dolor sit amet',
                'pint_no' => 'Lorem ipsum dolor sit amet',
                'expiry_date' => '2024-07-30',
                'volume_transfused' => 'Lorem ipsum dolor sit amet',
                'created' => '2024-07-30 10:20:42',
                'modified' => '2024-07-30 10:20:42',
            ],
        ];
        parent::init();
    }
}
