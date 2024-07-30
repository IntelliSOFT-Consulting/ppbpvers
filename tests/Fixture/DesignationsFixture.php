<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * DesignationsFixture
 */
class DesignationsFixture extends TestFixture
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
                'name' => 'Lorem ipsum dolor sit amet',
                'category' => 1,
                'created' => '2024-07-30 09:45:11',
                'modified' => '2024-07-30 09:45:11',
            ],
        ];
        parent::init();
    }
}
