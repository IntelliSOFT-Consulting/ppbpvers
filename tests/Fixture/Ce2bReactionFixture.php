<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * Ce2bReactionFixture
 */
class Ce2bReactionFixture extends TestFixture
{
    /**
     * Table name
     *
     * @var string
     */
    public $table = 'ce2b_reaction';
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
                'ce2b_id' => 1,
                'reaction_name' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
                'meddra_code' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
                'start_date' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
                'source_country' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
                'created' => '2024-07-30 10:20:30',
                'modified' => '2024-07-30 10:20:30',
                'criteria_death_null' => 'Lorem ipsum dolor sit amet',
                'criteria_death_value' => 'Lorem ipsum dolor sit amet',
                'life_hreatening_null' => 'Lorem ipsum dolor sit amet',
                'life_hreatening_value' => 'Lorem ipsum dolor sit amet',
                'prolonged_hospitalisation_null' => 'Lorem ipsum dolor sit amet',
                'prolonged_hospitalisation_value' => 'Lorem ipsum dolor sit amet',
                'incapacitating_null' => 'Lorem ipsum dolor sit amet',
                'incapacitating_value' => 'Lorem ipsum dolor sit amet',
                'birth_defect_null' => 'Lorem ipsum dolor sit amet',
                'birth_defect_value' => 'Lorem ipsum dolor sit amet',
                'other_medical_null' => 'Lorem ipsum dolor sit amet',
                'other_medical_value' => 'Lorem ipsum dolor sit amet',
                'reaction_outcome_null' => 'Lorem ipsum dolor sit amet',
                'reaction_outcome_value' => 'Lorem ipsum dolor sit amet',
                'medical_confirmation_null' => 'Lorem ipsum dolor sit amet',
                'medical_confirmation_value' => 'Lorem ipsum dolor sit amet',
            ],
        ];
        parent::init();
    }
}
