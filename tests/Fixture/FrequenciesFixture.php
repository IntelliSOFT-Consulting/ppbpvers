<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * FrequenciesFixture
 */
class FrequenciesFixture extends TestFixture
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
                'value' => 'Lorem ipsum dolor sit amet',
                'name' => 'Lorem ipsum dolor sit amet',
                'icsr_code' => 'Lorem ipsum dolor sit amet',
                'created' => '2024-07-30 10:20:37',
                'modified' => '2024-07-30 10:20:37',
            ],
        ];
        parent::init();
    }
}
