<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * AefisFixture
 */
class AefisFixture extends TestFixture
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
                'reference_no' => 'Lorem ipsum dolor sit amet',
                'aefi_id' => 1,
                'county_id' => 1,
                'sub_county_id' => 1,
                'vigiflow_ref' => 'Lorem ipsum dolor sit amet',
                'vigiflow_date' => '2024-07-30 10:20:27',
                'vigiflow_message' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
                'webradr_ref' => 'Lorem ipsum dolor sit amet',
                'webradr_date' => '2024-07-30 10:20:27',
                'webradr_message' => 'Lorem ipsum dolor sit amet',
                'designation_id' => 1,
                'report_type' => 'Lorem ipsum dolor ',
                'name_of_institution' => 'Lorem ipsum dolor sit amet',
                'institution_code' => 'Lorem ipsum dolor sit amet',
                'patient_name' => 'Lorem ipsum dolor sit amet',
                'guardian_name' => 'Lorem ipsum dolor sit amet',
                'patient_address' => 'Lorem ipsum dolor sit amet',
                'patient_phone' => 'Lorem ipsum dolor sit amet',
                'patient_village' => 'Lorem ipsum dolor sit amet',
                'ip_no' => 'Lorem ipsum dolor sit amet',
                'date_of_birth' => 'Lorem ipsum dolor ',
                'age_months' => 1,
                'age_group' => 'Lorem ipsum dolor sit amet',
                'patient_ward' => 'Lorem ipsum dolor sit amet',
                'patient_county' => 'Lorem ipsum dolor sit amet',
                'patient_sub_county' => 'Lorem ipsum dolor sit amet',
                'vaccination_center' => 'Lorem ipsum dolor sit amet',
                'vaccination_county' => 'Lorem ipsum dolor sit amet',
                'vaccination_type' => 'Lorem ipsum dolor sit amet',
                'gender' => 'Lorem',
                'pregnancy_status' => 'Lorem ipsum dolor ',
                'bcg' => 1,
                'convulsion' => 1,
                'urticaria' => 1,
                'high_fever' => 1,
                'abscess' => 1,
                'local_reaction' => 1,
                'anaphylaxis' => 1,
                'meningitis' => 1,
                'paralysis' => 1,
                'toxic_shock' => 1,
                'complaint_other' => 1,
                'complaint_other_specify' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
                'description_of_reaction' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
                'date_aefi_started' => '2024-07-30',
                'time_aefi_started' => 'Lorem ip',
                'aefi_symptoms' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
                'serious' => 'Lorem ip',
                'serious_yes' => 'Lorem ipsum dolor sit amet',
                'serious_other' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
                'medical_history' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
                'treatment_given' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
                'specimen_collected' => 'Lorem ipsum dolor sit amet',
                'outcome' => 'Lorem ipsum dolor sit amet',
                'reporter_name' => 'Lorem ipsum dolor sit amet',
                'reporter_email' => 'Lorem ipsum dolor sit amet',
                'reporter_phone' => 'Lorem ipsum dolor sit amet',
                'reporter_date' => '2024-07-30',
                'submitted' => 1,
                'submitted_date' => '2024-07-30 10:20:27',
                'active' => 1,
                'device' => 1,
                'copied' => 1,
                'archived' => 1,
                'archived_date' => '2024-07-30 10:20:27',
                'deleted' => 1,
                'deleted_date' => '2024-07-30 10:20:27',
                'created' => '2024-07-30 10:20:27',
                'modified' => '2024-07-30 10:20:27',
                'person_submitting' => 'Lorem ipsum dolor sit amet',
                'reporter_name_diff' => 'Lorem ipsum dolor sit amet',
                'reporter_designation_diff' => 1,
                'reporter_email_diff' => 'Lorem ipsum dolor sit amet',
                'reporter_phone_diff' => 'Lorem ipsum dolor sit amet',
                'reporter_date_diff' => '2024-07-30',
                'assigned_to' => 1,
                'assigned_by' => 1,
                'assigned_date' => '2024-07-30 10:20:27',
            ],
        ];
        parent::init();
    }
}
