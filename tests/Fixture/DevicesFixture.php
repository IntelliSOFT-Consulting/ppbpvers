<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * DevicesFixture
 */
class DevicesFixture extends TestFixture
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
                'county_id' => 1,
                'designation_id' => 1,
                'device_id' => 1,
                'report_type' => 'Lorem ipsum dolor ',
                'report_title' => 'Lorem ipsum dolor sit amet',
                'name_of_institution' => 'Lorem ipsum dolor sit amet',
                'institution_code' => 'Lorem ipsum dolor sit amet',
                'institution_address' => 'Lorem ipsum dolor sit amet',
                'institution_contact' => 'Lorem ipsum dolor sit amet',
                'patient_name' => 'Lorem ipsum dolor sit amet',
                'gender' => 'Lorem',
                'patient_address' => 'Lorem ipsum dolor sit amet',
                'patient_phone' => 'Lorem ipsum dolor sit amet',
                'patient_weight' => 1,
                'patient_height' => 1,
                'pregnancy_status' => 'Lorem ipsum dolor sit amet',
                'trimester' => 'Lorem ipsum dolor sit amet',
                'ip_no' => 'Lorem ipsum dolor sit amet',
                'date_of_birth' => 'Lorem ipsum dolor ',
                'age_years' => 'Lorem ipsum dolor sit amet',
                'allergy' => 'Lorem ipsum dolor sit amet',
                'allergy_specify' => 'Lorem ipsum dolor sit amet',
                'problem_noted' => 'Lorem ipsum dolor sit a',
                'brand_name' => 'Lorem ipsum dolor sit amet',
                'serial_no' => 'Lorem ipsum dolor sit amet',
                'common_name' => 'Lorem ipsum dolor sit amet',
                'device_model' => 'Lorem ipsum dolor sit amet',
                'catalogue' => 'Lorem ipsum dolor sit amet',
                'manufacturer_name' => 'Lorem ipsum dolor sit amet',
                'manufacturer_address' => 'Lorem ipsum dolor sit amet',
                'manufacture_date' => 'Lorem ipsum dolor sit amet',
                'expiry_date' => '2024-07-30',
                'operator' => 'Lorem ipsum dolor sit amet',
                'operator_specify' => 'Lorem ipsum dolor sit amet',
                'device_usage' => 'Lorem ipsum dolor sit amet',
                'device_duration_type' => 'Lorem ipsum dolor sit amet',
                'device_duration' => 1,
                'device_availability' => 'Lorem ipsum dolor sit a',
                'device_unavailability' => 'Lorem ipsum dolor sit amet',
                'implant_date' => '2024-07-30',
                'explant_date' => '2024-07-30',
                'implant_duration_type' => 'Lorem ipsum dolor sit amet',
                'implant_duration' => 1,
                'specimen_type' => 'Lorem ipsum dolor sit a',
                'patients_involved' => 1,
                'tests_done' => 1,
                'false_positives' => 1,
                'false_negatives' => 1,
                'true_positives' => 1,
                'true_negatives' => 1,
                'date_onset_incident' => '2024-07-30',
                'serious' => 'Lorem ip',
                'serious_yes' => 'Lorem ipsum dolor sit amet',
                'death_date' => '2024-07-30',
                'description_of_reaction' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
                'remedial_action' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
                'outcome' => 'Lorem ipsum dolor sit amet',
                'reporter_name' => 'Lorem ipsum dolor sit amet',
                'reporter_email' => 'Lorem ipsum dolor sit amet',
                'reporter_phone' => 'Lorem ipsum dolor sit amet',
                'reporter_date' => '2024-07-30',
                'person_submitting' => 'Lorem ipsum dolor sit amet',
                'reporter_name_diff' => 'Lorem ipsum dolor sit amet',
                'reporter_designation_diff' => 1,
                'reporter_email_diff' => 'Lorem ipsum dolor sit amet',
                'reporter_phone_diff' => 'Lorem ipsum dolor sit amet',
                'reporter_date_diff' => '2024-07-30',
                'assigned_to' => 1,
                'assigned_by' => 1,
                'assigned_date' => '2024-07-30 10:20:34',
                'submitted' => 1,
                'submitted_date' => '2024-07-30 10:20:34',
                'copied' => 1,
                'archived' => 1,
                'archived_date' => '2024-07-30 10:20:34',
                'active' => 1,
                'deleted' => 1,
                'deleted_date' => '2024-07-30 10:20:34',
                'created' => '2024-07-30 10:20:34',
                'modified' => '2024-07-30 10:20:34',
            ],
        ];
        parent::init();
    }
}
