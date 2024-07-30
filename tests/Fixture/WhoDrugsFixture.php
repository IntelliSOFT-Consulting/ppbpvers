<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * WhoDrugsFixture
 */
class WhoDrugsFixture extends TestFixture
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
                'MedId' => 'Lorem ipsum dolor sit amet',
                'drug_record_number' => 'Lorem ipsum dolor sit amet',
                'sequence_no_1' => 'Lo',
                'sequence_no_2' => 'L',
                'sequence_no_3' => 'Lorem ip',
                'sequence_no_4' => 'Lorem ip',
                'generic' => '',
                'drug_name' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
                'name_specifier' => 'Lorem ipsum dolor sit amet',
                'market_authorization_number' => 'Lorem ipsum dolor sit amet',
                'market_authorization_date' => 'Lorem ',
                'market_authorization_withdrawal_date' => 'Lorem ',
                'country' => 'Lorem ip',
                'company' => 'Lorem ip',
                'marketing_authorization_holder' => 'Lorem ip',
                'source_code' => 'Lorem ip',
                'source_country' => 'Lorem ip',
                'source_year' => 'L',
                'product_type' => 'Lorem ip',
                'product_group' => 'Lorem ip',
                'create_date' => 'Lorem ',
                'date_changed' => 'Lorem ',
                'created' => '2024-07-30 09:45:31',
                'modified' => '2024-07-30 09:45:31',
            ],
        ];
        parent::init();
    }
}
