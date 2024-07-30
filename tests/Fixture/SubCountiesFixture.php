<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * SubCountiesFixture
 */
class SubCountiesFixture extends TestFixture
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
                'county_id' => 1,
                'sub_county_name' => 'Lorem ipsum dolor sit amet',
                'county_name' => 'Lorem ipsum dolor sit amet',
                'Province' => 'Lorem ipsum dolor sit amet',
                'Pop_2009' => 'Lorem ipsum dolor sit amet',
                'RegVoters' => 'Lorem ipsum dolor sit amet',
                'AreaSqKms' => 'Lorem ipsum dolor sit amet',
                'CAWards' => 'Lorem ipsum dolor sit amet',
                'MainEthnicGroup' => 'Lorem ipsum dolor sit amet',
                'created' => '2024-07-30 09:45:29',
                'modified' => '2024-07-30 09:45:29',
            ],
        ];
        parent::init();
    }
}
