<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * MedicationsFixture
 */
class MedicationsFixture extends TestFixture
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
                'medication_id' => 1,
                'reference_no' => 'Lorem ipsum dolor sit amet',
                'adverse_reaction' => 'Lorem ipsum dolor sit amet',
                'county_id' => 1,
                'designation_id' => 1,
                'date_of_event' => '2024-07-30',
                'time_of_event' => 'Lorem ip',
                'name_of_institution' => 'Lorem ipsum dolor sit amet',
                'institution_code' => 'Lorem ipsum dolor sit amet',
                'institution_contact' => 'Lorem ipsum dolor sit amet',
                'patient_name' => 'Lorem ipsum dolor sit amet',
                'gender' => 'Lorem ip',
                'pregnancy_status' => 'Lorem ipsum dolor sit amet',
                'patient_phone' => 'Lorem ipsum dolor sit amet',
                'date_of_birth' => '2024-07-30',
                'age_years' => 'Lorem ipsum dolor sit amet',
                'ward' => 'Lorem ipsum dolor sit amet',
                'clinic' => 'Lorem ipsum dolor sit amet',
                'pharmacy' => 'Lorem ipsum dolor sit amet',
                'accident' => 'Lorem ipsum dolor sit amet',
                'location_other' => 'Lorem ipsum dolor sit amet',
                'description_of_error' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
                'process_occur' => 'Lorem ipsum dolor sit amet',
                'process_occur_specify' => 'Lorem ipsum dolor sit amet',
                'reach_patient' => 'Lorem ipsum dolor sit a',
                'correct_medication' => 'Lorem ipsum dolor sit a',
                'direct_result' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
                'outcome' => 'Lorem ipsum dolor sit amet',
                'outcome_error' => 'Lorem ipsum dolor sit amet',
                'outcome_death' => 'Lorem ipsum dolor sit amet',
                'error_cause_inexperience' => 1,
                'error_cause_knowledge' => 1,
                'error_cause_distraction' => 1,
                'error_cause_sound' => 1,
                'error_cause_medication' => 1,
                'error_cause_packaging' => 1,
                'error_cause_workload' => 1,
                'error_cause_peak' => 1,
                'error_cause_stock' => 1,
                'error_cause_procedure' => 1,
                'error_cause_abbreviations' => 1,
                'error_cause_illegible' => 1,
                'error_cause_inaccurate' => 1,
                'error_cause_labelling' => 1,
                'error_cause_computer' => 1,
                'error_cause_other' => 1,
                'error_cause_specify' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
                'recommendations' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
                'reporter_name' => 'Lorem ipsum dolor sit amet',
                'reporter_email' => 'Lorem ipsum dolor sit amet',
                'reporter_phone' => 'Lorem ipsum dolor sit amet',
                'report_type' => 'Lorem ipsum dolor sit a',
                'submitted' => 1,
                'submitted_date' => '2024-07-30 10:20:39',
                'copied' => 1,
                'archived' => 1,
                'archived_date' => '2024-07-30 10:20:39',
                'active' => 1,
                'deleted' => 1,
                'deleted_date' => '2024-07-30 10:20:39',
                'created' => '2024-07-30 10:20:39',
                'modified' => '2024-07-30 10:20:39',
                'reporter_date' => '2024-07-30',
                'person_submitting' => 'Lorem ipsum dolor sit amet',
                'reporter_name_diff' => 'Lorem ipsum dolor sit amet',
                'reporter_designation_diff' => 1,
                'reporter_email_diff' => 'Lorem ipsum dolor sit amet',
                'reporter_phone_diff' => 'Lorem ipsum dolor sit amet',
                'reporter_date_diff' => '2024-07-30',
                'assigned_to' => 1,
                'assigned_by' => 1,
                'assigned_date' => '2024-07-30 10:20:39',
                'vigiflow_message' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
                'vigiflow_ref' => 'Lorem ipsum dolor sit amet',
            ],
        ];
        parent::init();
    }
}
