<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * SuspectedDrugsFixture
 */
class SuspectedDrugsFixture extends TestFixture
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
                'sae_id' => 1,
                'generic_name' => 'Lorem ipsum dolor sit amet',
                'dose' => 'Lorem ipsum dolor sit amet',
                'route_id' => 1,
                'indication' => 'Lorem ipsum dolor sit amet',
                'date_from' => '2024-07-30',
                'date_to' => '2024-07-30',
                'therapy_duration' => 'Lorem ipsum dolor sit amet',
                'reaction_abate' => 'Lorem ipsum dolor sit amet',
                'reaction_reappear' => 'Lorem ipsum dolor sit amet',
                'deleted' => 1,
                'deleted_date' => '2024-07-30 09:45:29',
                'created' => '2024-07-30 09:45:29',
                'modified' => '2024-07-30 09:45:29',
            ],
        ];
        parent::init();
    }
}
