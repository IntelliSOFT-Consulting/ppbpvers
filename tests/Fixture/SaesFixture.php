<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * SaesFixture
 */
class SaesFixture extends TestFixture
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
                'application_id' => 1,
                'sae_id' => 1,
                'reference_no' => 'Lorem ipsum dolor sit amet',
                'form_type' => 'Lorem ipsum dolor sit amet',
                'user_id' => 1,
                'patient_initials' => 'Lorem ipsum dolor sit amet',
                'country_id' => 1,
                'date_of_birth' => '2024-07-30',
                'age_years' => 1,
                'gender' => 'Lorem ipsum dolor sit a',
                'causality' => 'Lorem ipsum dolor sit amet',
                'enrollment_date' => '2024-07-30',
                'administration_date' => '2024-07-30',
                'latest_date' => '2024-07-30',
                'reaction_onset' => '2024-07-30',
                'reaction_end_date' => '2024-07-30',
                'patient_died' => 1,
                'prolonged_hospitalization' => 1,
                'incapacity' => 1,
                'life_threatening' => 1,
                'reaction_other' => 1,
                'reaction_description' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
                'relevant_history' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
                'manufacturer_name' => 'Lorem ipsum dolor sit amet',
                'mfr_no' => 'Lorem ipsum dolor sit amet',
                'manufacturer_date' => '2024-07-30',
                'source_study' => 1,
                'source_literature' => 1,
                'source_health_professional' => 1,
                'report_date' => '2024-07-30',
                'submitted_date' => '2024-07-30 10:20:47',
                'report_type' => 'Lorem ipsum dolor sit amet',
                'approved' => 1,
                'approved_by' => 1,
                'email_address' => 'Lorem ipsum dolor sit amet',
                'reporter_name' => 'Lorem ipsum dolor sit amet',
                'reporter_phone' => 'Lorem ipsum dolor sit amet',
                'reporter_email' => 'Lorem ipsum dolor sit amet',
                'assigned_to' => 1,
                'assigned_by' => 1,
                'assigned_date' => '2024-07-30 10:20:47',
                'deleted' => 1,
                'deleted_date' => '2024-07-30 10:20:47',
                'created' => '2024-07-30 10:20:47',
                'modified' => '2024-07-30 10:20:47',
            ],
        ];
        parent::init();
    }
}
