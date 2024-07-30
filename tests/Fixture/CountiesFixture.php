<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * CountiesFixture
 */
class CountiesFixture extends TestFixture
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
                'county_name' => 'Lorem ipsum dolor sit amet',
                'org_unit' => 'Lorem ipsum dolor sit amet',
                'created' => '2024-07-30 10:20:32',
                'modified' => '2024-07-30 10:20:32',
            ],
        ];
        parent::init();
    }
}
