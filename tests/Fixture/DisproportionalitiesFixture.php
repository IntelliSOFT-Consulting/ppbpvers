<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * DisproportionalitiesFixture
 */
class DisproportionalitiesFixture extends TestFixture
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
                'drug_name' => 'Lorem ipsum dolor sit amet',
                'reaction_name' => 'Lorem ipsum dolor sit amet',
                'model' => 'Lorem ipsum dolor sit amet',
                'created' => '2024-07-30 10:20:34',
                'modified' => '2024-07-30 10:20:34',
            ],
        ];
        parent::init();
    }
}
