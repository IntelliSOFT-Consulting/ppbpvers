<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Sae Entity
 *
 * @property int $id
 * @property int|null $application_id
 * @property int|null $sae_id
 * @property string|null $reference_no
 * @property string|null $form_type
 * @property int|null $user_id
 * @property string|null $patient_initials
 * @property int|null $country_id
 * @property \Cake\I18n\FrozenDate|null $date_of_birth
 * @property int|null $age_years
 * @property string|null $gender
 * @property string|null $causality
 * @property \Cake\I18n\FrozenDate|null $enrollment_date
 * @property \Cake\I18n\FrozenDate|null $administration_date
 * @property \Cake\I18n\FrozenDate|null $latest_date
 * @property \Cake\I18n\FrozenDate|null $reaction_onset
 * @property \Cake\I18n\FrozenDate|null $reaction_end_date
 * @property bool|null $patient_died
 * @property bool|null $prolonged_hospitalization
 * @property bool|null $incapacity
 * @property bool|null $life_threatening
 * @property bool|null $reaction_other
 * @property string|null $reaction_description
 * @property string|null $relevant_history
 * @property string|null $manufacturer_name
 * @property string|null $mfr_no
 * @property \Cake\I18n\FrozenDate|null $manufacturer_date
 * @property bool|null $source_study
 * @property bool|null $source_literature
 * @property bool|null $source_health_professional
 * @property \Cake\I18n\FrozenDate|null $report_date
 * @property \Cake\I18n\FrozenTime|null $submitted_date
 * @property string|null $report_type
 * @property int|null $approved
 * @property int|null $approved_by
 * @property string $email_address
 * @property string|null $reporter_name
 * @property string|null $reporter_phone
 * @property string|null $reporter_email
 * @property int|null $assigned_to
 * @property int|null $assigned_by
 * @property \Cake\I18n\FrozenTime|null $assigned_date
 * @property bool $deleted
 * @property \Cake\I18n\FrozenTime|null $deleted_date
 * @property \Cake\I18n\FrozenTime|null $created
 * @property \Cake\I18n\FrozenTime|null $modified
 *
 * @property \App\Model\Entity\Sae[] $saes
 * @property \App\Model\Entity\User $user
 * @property \App\Model\Entity\Country $country
 * @property \App\Model\Entity\ConcomittantDrug[] $concomittant_drugs
 * @property \App\Model\Entity\SuspectedDrug[] $suspected_drugs
 */
class Sae extends Entity
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
        'application_id' => true,
        'sae_id' => true,
        'reference_no' => true,
        'form_type' => true,
        'user_id' => true,
        'patient_initials' => true,
        'country_id' => true,
        'date_of_birth' => true,
        'age_years' => true,
        'gender' => true,
        'causality' => true,
        'enrollment_date' => true,
        'administration_date' => true,
        'latest_date' => true,
        'reaction_onset' => true,
        'reaction_end_date' => true,
        'patient_died' => true,
        'prolonged_hospitalization' => true,
        'incapacity' => true,
        'life_threatening' => true,
        'reaction_other' => true,
        'reaction_description' => true,
        'relevant_history' => true,
        'manufacturer_name' => true,
        'mfr_no' => true,
        'manufacturer_date' => true,
        'source_study' => true,
        'source_literature' => true,
        'source_health_professional' => true,
        'report_date' => true,
        'submitted_date' => true,
        'report_type' => true,
        'approved' => true,
        'approved_by' => true,
        'email_address' => true,
        'reporter_name' => true,
        'reporter_phone' => true,
        'reporter_email' => true,
        'assigned_to' => true,
        'assigned_by' => true,
        'assigned_date' => true,
        'deleted' => true,
        'deleted_date' => true,
        'created' => true,
        'modified' => true,
        'saes' => true,
        'user' => true,
        'country' => true,
        'concomittant_drugs' => true,
        'suspected_drugs' => true,
    ];
}
