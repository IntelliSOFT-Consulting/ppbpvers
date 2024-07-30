<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * RemindersFixture
 */
class RemindersFixture extends TestFixture
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
                'foreign_key' => 1,
                'model' => 'Lorem ipsum dolor sit amet',
                'user_id' => 1,
                'reminder_type' => 'Lorem ipsum dolor sit amet',
                'created' => '2024-07-30 10:20:43',
                'modified' => '2024-07-30 10:20:43',
            ],
        ];
        parent::init();
    }
}
