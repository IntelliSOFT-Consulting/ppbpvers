<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * AuthoritiesFixture
 */
class AuthoritiesFixture extends TestFixture
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
                'mah_name' => 'Lorem ipsum dolor sit amet',
                'mah_company_name' => 'Lorem ipsum dolor sit amet',
                'mah_company_address' => 'Lorem ipsum dolor sit amet',
                'mah_company_telephone' => 'Lorem ipsum dolor sit amet',
                'mah_company_email' => 'Lorem ipsum dolor sit amet',
                'product' => 1,
                'master_mah' => 'Lo',
            ],
        ];
        parent::init();
    }
}
