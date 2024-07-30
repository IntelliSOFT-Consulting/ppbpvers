<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * ArosFixture
 */
class ArosFixture extends TestFixture
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
                'parent_id' => 1,
                'model' => 'Lorem ipsum dolor sit amet',
                'foreign_key' => 1,
                'alias' => 'Lorem ipsum dolor sit amet',
                'lft' => 1,
                'rght' => 1,
            ],
        ];
        parent::init();
    }
}
