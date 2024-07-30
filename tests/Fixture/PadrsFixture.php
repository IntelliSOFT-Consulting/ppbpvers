<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * PadrsFixture
 */
class PadrsFixture extends TestFixture
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
                'padr_id' => 1,
                'user_id' => 1,
                'county_id' => 1,
                'sub_county_id' => 1,
                'designation_id' => 1,
                'reference_no' => 'Lorem ipsum dolor sit amet',
                'token' => 'Lorem ipsum dolor sit amet',
                'relation' => 'Lorem ipsum dolor sit amet',
                'vigiflow_ref' => 'Lorem ipsum dolor sit amet',
                'vigiflow_message' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
                'vigiflow_date' => 'Lorem ipsum dolor sit amet',
                'report_title' => 'Lorem ipsum dolor sit amet',
                'report_type' => 'Lorem ipsum dolor ',
                'report_sadr' => 'Lorem ipsum dolor sit amet',
                'sadr_vomiting' => 1,
                'sadr_dizziness' => 1,
                'sadr_headache' => 1,
                'sadr_joints' => 1,
                'sadr_rash' => 1,
                'sadr_mouth' => 1,
                'sadr_stomach' => 1,
                'sadr_urination' => 1,
                'sadr_eyes' => 1,
                'sadr_died' => 1,
                'pqmp_label' => 1,
                'patient_name' => 'Lorem ipsum dolor sit amet',
                'pqmp_material' => 1,
                'date_of_birth' => 'Lorem ipsum dolor ',
                'age_group' => 'Lorem ipsum dolor sit amet',
                'patient_address' => 'Lorem ipsum dolor sit amet',
                'pqmp_color' => 1,
                'gender' => 'Lorem',
                'pqmp_smell' => 1,
                'pqmp_working' => 1,
                'pqmp_bottle' => 1,
                'pregnancy_status' => 'Lorem ipsum dolor ',
                'weight' => 'Lorem ip',
                'height' => 'Lorem ip',
                'diagnosis' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
                'medical_history' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
                'date_of_onset_of_reaction' => 'Lorem ipsum dolor ',
                'date_of_end_of_reaction' => 'Lorem ipsum dolor sit a',
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
                'submitted_date' => '2024-07-30 10:20:41',
                'emails' => 1,
                'active' => 1,
                'device' => 1,
                'deleted' => 1,
                'deleted_date' => '2024-07-30 10:20:41',
                'notified' => 1,
                'created' => '2024-07-30 10:20:41',
                'modified' => '2024-07-30 10:20:41',
                'reporter_date' => '2024-07-30',
                'reporter_name_diff' => 'Lorem ipsum dolor sit amet',
                'reporter_designation_diff' => 1,
                'reporter_email_diff' => 'Lorem ipsum dolor sit amet',
                'reporter_phone_diff' => 'Lorem ipsum dolor sit amet',
                'reporter_date_diff' => '2024-07-30',
                'assigned_to' => 1,
                'assigned_by' => 1,
                'assigned_date' => '2024-07-30 10:20:41',
                'reaction_on' => 'Lorem ipsum dolor sit a',
                'consent' => 'Lorem ipsum dolor sit amet',
                'copied' => 1,
                'archived' => 1,
                'archived_date' => '2024-07-30 10:20:41',
            ],
        ];
        parent::init();
    }
}
