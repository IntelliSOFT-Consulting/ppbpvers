<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * AttachmentsOldFixture
 */
class AttachmentsOldFixture extends TestFixture
{
    /**
     * Table name
     *
     * @var string
     */
    public $table = 'attachments_old';
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
                'sadr_id' => 1,
                'sadr_followup_id' => 1,
                'pqmp_id' => 1,
                'aefi_id' => 1,
                'device_id' => 1,
                'transfusion_id' => 1,
                'medication_id' => 1,
                'filename' => 'Lorem ipsum dolor sit amet',
                'description' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
                'mimetype' => 'Lorem ipsum dolor sit amet',
                'filesize' => 1,
                'dir' => 'Lorem ipsum dolor sit amet',
                'file' => 'Lorem ipsum dolor sit amet',
                'basename' => 'Lorem ipsum dolor sit amet',
                'dirname' => 'Lorem ipsum dolor sit amet',
                'checksum' => 'Lorem ipsum dolor sit amet',
                'model' => 'Lorem ipsum dolor sit amet',
                'foreign_key' => 1,
                'alternative' => 'Lorem ipsum dolor sit amet',
                'group' => 'Lorem ipsum dolor sit amet',
                'created' => '2024-07-30 09:45:07',
                'modified' => '2024-07-30 09:45:07',
            ],
        ];
        parent::init();
    }
}
