<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Ce2bReaction Entity
 *
 * @property int $id
 * @property int|null $ce2b_id
 * @property string|null $reaction_name
 * @property string|null $meddra_code
 * @property string|null $start_date
 * @property string|null $source_country
 * @property \Cake\I18n\FrozenTime|null $created
 * @property \Cake\I18n\FrozenTime|null $modified
 * @property string|null $criteria_death_null
 * @property string|null $criteria_death_value
 * @property string|null $life_hreatening_null
 * @property string|null $life_hreatening_value
 * @property string|null $prolonged_hospitalisation_null
 * @property string|null $prolonged_hospitalisation_value
 * @property string|null $incapacitating_null
 * @property string|null $incapacitating_value
 * @property string|null $birth_defect_null
 * @property string|null $birth_defect_value
 * @property string|null $other_medical_null
 * @property string|null $other_medical_value
 * @property string|null $reaction_outcome_null
 * @property string|null $reaction_outcome_value
 * @property string|null $medical_confirmation_null
 * @property string|null $medical_confirmation_value
 *
 * @property \App\Model\Entity\Ce2b $ce2b
 */
class Ce2bReaction extends Entity
{
    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * Note that when '*' is set to true, this allows all unspecified fields to
     * be mass assigned. For security purposes, it is advised to set '*' to false
     * (or remove it), and explicitly make individual fields accessible as needed.
     *
     * @var array<string, bool>
     */
    protected $_accessible = [
        'ce2b_id' => true,
        'reaction_name' => true,
        'meddra_code' => true,
        'start_date' => true,
        'source_country' => true,
        'created' => true,
        'modified' => true,
        'criteria_death_null' => true,
        'criteria_death_value' => true,
        'life_hreatening_null' => true,
        'life_hreatening_value' => true,
        'prolonged_hospitalisation_null' => true,
        'prolonged_hospitalisation_value' => true,
        'incapacitating_null' => true,
        'incapacitating_value' => true,
        'birth_defect_null' => true,
        'birth_defect_value' => true,
        'other_medical_null' => true,
        'other_medical_value' => true,
        'reaction_outcome_null' => true,
        'reaction_outcome_value' => true,
        'medical_confirmation_null' => true,
        'medical_confirmation_value' => true,
        'ce2b' => true,
    ];
}
