<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * ConcomittantDrugsFixture
 */
class ConcomittantDrugsFixture extends TestFixture
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
                'description' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
                'deleted' => 1,
                'deleted_date' => '2024-07-30 10:20:32',
                'created' => '2024-07-30 10:20:32',
                'modified' => '2024-07-30 10:20:32',
            ],
        ];
        parent::init();
    }
}
