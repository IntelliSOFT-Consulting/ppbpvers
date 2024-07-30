<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * PqmpsFixture
 */
class PqmpsFixture extends TestFixture
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
                'user_id' => 1,
                'pqmp_id' => 1,
                'county_id' => 1,
                'sub_county_id' => 1,
                'country_id' => 1,
                'designation_id' => 1,
                'reference_no' => 'Lorem ipsum dolor sit amet',
                'facility_name' => 'Lorem ipsum dolor sit amet',
                'facility_code' => 'Lorem ipsum dolor sit amet',
                'facility_address' => 'Lorem ipsum dolor sit amet',
                'facility_phone' => 'Lorem ipsum dolor sit amet',
                'brand_name' => 'Lorem ipsum dolor sit amet',
                'generic_name' => 'Lorem ipsum dolor sit amet',
                'batch_number' => 'Lorem ipsum dolor sit amet',
                'manufacture_date' => 'Lorem ipsum dolor ',
                'expiry_date' => '2024-07-30',
                'receipt_date' => '2024-07-30',
                'name_of_manufacturer' => 'Lorem ipsum dolor sit amet',
                'country_of_origin' => 'Lorem ipsum dolor sit amet',
                'supplier_name' => 'Lorem ipsum dolor sit amet',
                'supplier_address' => 'Lorem ipsum dolor sit amet',
                'product_formulation' => 'Lorem ipsum dolor sit amet',
                'product_formulation_specify' => 'Lorem ipsum dolor sit amet',
                'colour_change' => 1,
                'separating' => 1,
                'powdering' => 1,
                'caking' => 1,
                'moulding' => 1,
                'odour_change' => 1,
                'mislabeling' => 1,
                'incomplete_pack' => 1,
                'therapeutic_ineffectiveness' => 1,
                'particulate_matter' => 1,
                'complaint_other' => 1,
                'complaint_other_specify' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
                'complaint_description' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
                'require_refrigeration' => 'Lorem ip',
                'product_at_facility' => 'Lorem ip',
                'returned_by_client' => 'Lorem ip',
                'stored_to_recommendations' => 'Lorem ip',
                'other_details' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
                'comments' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
                'reporter_name' => 'Lorem ipsum dolor sit amet',
                'reporter_email' => 'Lorem ipsum dolor sit amet',
                'reporter_phone' => 'Lorem ipsum dolor sit amet',
                'contact_number' => 'Lorem ipsum dolor sit amet',
                'adverse_reaction' => 'Lorem ipsum dolor sit amet',
                'reaction_comments' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
                'medication_error' => 'Lorem ipsum dolor sit amet',
                'emails' => 1,
                'submitted' => 1,
                'submitted_date' => '2024-07-30 10:20:42',
                'active' => 1,
                'device' => 1,
                'copied' => 1,
                'archived' => 1,
                'archived_date' => '2024-07-30 10:20:42',
                'notified' => 1,
                'deleted' => 1,
                'deleted_date' => '2024-07-30 10:20:42',
                'created' => '2024-07-30 10:20:42',
                'modified' => '2024-07-30 10:20:42',
                'medicinal_product' => 1,
                'blood_products' => 1,
                'herbal_product' => 1,
                'medical_device' => 1,
                'cosmeceuticals' => 1,
                'product_other' => 1,
                'product_specify' => 'Lorem ipsum dolor sit amet',
                'product_vaccine' => 1,
                'packaging' => 1,
                'labelling' => 1,
                'sampling' => 1,
                'mechanism' => 1,
                'electrical' => 1,
                'device_data' => 1,
                'software' => 1,
                'environmental' => 1,
                'failure_to_calibrate' => 1,
                'results' => 1,
                'readings' => 1,
                'cold_chain' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
                'reporter_date' => '2024-07-30',
                'person_submitting' => 'Lorem ipsum dolor sit amet',
                'reporter_name_diff' => 'Lorem ipsum dolor sit amet',
                'reporter_designation_diff' => 1,
                'reporter_email_diff' => 'Lorem ipsum dolor sit amet',
                'reporter_phone_diff' => 'Lorem ipsum dolor sit amet',
                'reporter_date_diff' => '2024-07-30',
                'assigned_to' => 1,
                'assigned_by' => 1,
                'assigned_date' => '2024-07-30 10:20:42',
            ],
        ];
        parent::init();
    }
}
