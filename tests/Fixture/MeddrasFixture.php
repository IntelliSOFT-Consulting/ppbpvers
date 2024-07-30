<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * MeddrasFixture
 */
class MeddrasFixture extends TestFixture
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
                'llt_name' => 'Lorem ipsum dolor sit amet',
                'pt_code' => 1,
                'llt_whoart_code' => 'Lorem ip',
                'llt_harts_code' => 'Lorem ip',
                'llt_costart_sym' => 'Lorem ip',
                'llt_icd9_code' => 'Lorem ip',
                'llt_icd9cm_code' => 'Lorem ip',
                'llt_icd10_code' => 'Lorem ip',
                'llt_currency' => 'L',
                'llt_jart_code' => 'Lorem ip',
                'COL_12' => 'Lorem ip',
            ],
        ];
        parent::init();
    }
}
