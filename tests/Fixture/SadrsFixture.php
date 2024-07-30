<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * SadrsFixture
 */
class SadrsFixture extends TestFixture
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
                'sadr_id' => 1,
                'user_id' => 1,
                'pqmp_id' => 1,
                'medication_id' => 1,
                'county_id' => 1,
                'sub_county_id' => 1,
                'designation_id' => 1,
                'reference_no' => 'Lorem ipsum dolor sit amet',
                'vigiflow_id' => 'Lorem ipsum dolor sit amet',
                'report_title' => 'Lorem ipsum dolor sit amet',
                'report_type' => 'Lorem ipsum dolor ',
                'report_sadr' => 1,
                'report_therapeutic' => 1,
                'report_misuse' => 1,
                'report_off_label' => 1,
                'product_category' => 'Lorem ipsum dolor sit amet',
                'medicinal_product' => 1,
                'blood_products' => 1,
                'herbal_product' => 1,
                'cosmeceuticals' => 1,
                'product_other' => 1,
                'product_specify' => 'Lorem ipsum dolor sit amet',
                'name_of_institution' => 'Lorem ipsum dolor sit amet',
                'institution_code' => 'Lorem ipsum dolor sit amet',
                'address' => 'Lorem ipsum dolor sit amet',
                'contact' => 'Lorem ipsum dolor sit amet',
                'patient_name' => 'Lorem ipsum dolor sit amet',
                'ip_no' => 'Lorem ipsum dolor sit amet',
                'date_of_birth' => 'Lorem ipsum dolor ',
                'age_group' => 'Lorem ipsum dolor sit amet',
                'patient_address' => 'Lorem ipsum dolor sit amet',
                'ward' => 'Lorem ipsum dolor sit amet',
                'gender' => 'Lorem',
                'known_allergy' => 'L',
                'known_allergy_specify' => 'Lorem ipsum dolor sit amet',
                'pregnant' => 'Lorem ip',
                'pregnancy_status' => 'Lorem ipsum dolor ',
                'weight' => 'Lorem ip',
                'height' => 'Lorem ip',
                'diagnosis' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
                'reaction' => 'Lorem ipsum dolor sit amet',
                'medical_history' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
                'date_of_onset_of_reaction' => 'Lorem ipsum dolor ',
                'description_of_reaction' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
                'reaction_resolve' => 'Lorem ipsum dolor sit amet',
                'reaction_reappear' => 'Lorem ipsum dolor sit amet',
                'lab_investigation' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
                'severity' => 'Lorem ipsum dolor sit amet',
                'serious' => 'Lorem ipsum dolor sit amet',
                'serious_reason' => 'Lorem ipsum dolor sit amet',
                'action_taken' => 'Lorem ipsum dolor sit amet',
                'outcome' => 'Lorem ipsum dolor sit amet',
                'causality' => 'Lorem ipsum dolor sit amet',
                'any_other_comment' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
                'reporter_name' => 'Lorem ipsum dolor sit amet',
                'reporter_email' => 'Lorem ipsum dolor sit amet',
                'reporter_phone' => 'Lorem ipsum dolor sit amet',
                'submitted' => 1,
                'emails' => 1,
                'active' => 1,
                'device' => 1,
                'deleted' => 1,
                'archived' => 1,
                'archived_date' => '2024-07-30 10:20:46',
                'deleted_date' => '2024-07-30 10:20:46',
                'notified' => 1,
                'created' => '2024-07-30 10:20:46',
                'modified' => '2024-07-30 10:20:46',
                'reporter_date' => '2024-07-30',
                'person_submitting' => 'Lorem ipsum dolor sit amet',
                'reporter_name_diff' => 'Lorem ipsum dolor sit amet',
                'reporter_designation_diff' => 1,
                'reporter_email_diff' => 'Lorem ipsum dolor sit amet',
                'reporter_phone_diff' => 'Lorem ipsum dolor sit amet',
                'reporter_date_diff' => '2024-07-30',
                'assigned_to' => 1,
                'assigned_by' => 1,
                'assigned_date' => '2024-07-30 10:20:46',
                'vigiflow_message' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
                'vigiflow_ref' => 'Lorem ipsum dolor sit amet',
                'vigiflow_date' => '2024-07-30 10:20:46',
                'webradr_ref' => 'Lorem ipsum dolor sit amet',
                'webradr_date' => '2024-07-30 10:20:46',
                'submitted_date' => '2024-07-30 10:20:46',
                'webradr_message' => 'Lorem ipsum dolor sit amet',
                'copied' => 1,
            ],
        ];
        parent::init();
    }
}
