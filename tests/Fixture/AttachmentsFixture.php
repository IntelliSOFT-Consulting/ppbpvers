<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * AttachmentsFixture
 */
class AttachmentsFixture extends TestFixture
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
                'model' => 'Lorem ipsum dolor sit amet',
                'file' => 'Lorem ipsum dolor sit amet',
                'foreign_key' => 1,
                'dirname' => 'Lorem ipsum dolor sit amet',
                'basename' => 'Lorem ipsum dolor sit amet',
                'checksum' => 'Lorem ipsum dolor sit amet',
                'alternative' => 'Lorem ipsum dolor sit amet',
                'group' => 'Lorem ipsum dolor sit amet',
                'description' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
                'year' => '',
                'file_date' => '2024-07-30',
                'pocket_name' => 'Lorem ipsum dolor sit amet',
                'version_no' => 'Lorem ipsum dolor sit amet',
                'created' => '2024-07-30 10:20:29',
                'modified' => '2024-07-30 10:20:29',
            ],
        ];
        parent::init();
    }
}
