<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * AefiReactionsFixture
 */
class AefiReactionsFixture extends TestFixture
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
                'aefi_id' => 1,
                'reaction_name' => 'Lorem ipsum dolor sit amet',
                'created' => '2024-07-30 09:45:04',
                'modified' => '2024-07-30 09:45:04',
            ],
        ];
        parent::init();
    }
}
