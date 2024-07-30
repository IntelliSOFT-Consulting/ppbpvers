<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * KhisFixture
 */
class KhisFixture extends TestFixture
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
                'elementId' => 'Lorem ipsum dolor sit amet',
                'elementName' => 'Lorem ipsum dolor sit amet',
                'deleted' => '2024-07-30 09:45:17',
                'created' => '2024-07-30 09:45:17',
                'modified' => '2024-07-30 09:45:17',
            ],
        ];
        parent::init();
    }
}
