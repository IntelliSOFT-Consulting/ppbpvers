<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Medication Entity
 *
 * @property int $id
 * @property int|null $user_id
 * @property int|null $pqmp_id
 * @property int|null $medication_id
 * @property string|null $reference_no
 * @property string|null $adverse_reaction
 * @property int|null $county_id
 * @property int|null $designation_id
 * @property \Cake\I18n\FrozenDate|null $date_of_event
 * @property string|null $time_of_event
 * @property string|null $name_of_institution
 * @property string|null $institution_code
 * @property string|null $institution_contact
 * @property string|null $patient_name
 * @property string|null $gender
 * @property string|null $pregnancy_status
 * @property string|null $patient_phone
 * @property \Cake\I18n\FrozenDate|null $date_of_birth
 * @property string|null $age_years
 * @property string|null $ward
 * @property string|null $clinic
 * @property string|null $pharmacy
 * @property string|null $accident
 * @property string|null $location_other
 * @property string|null $description_of_error
 * @property string|null $process_occur
 * @property string|null $process_occur_specify
 * @property string|null $reach_patient
 * @property string|null $correct_medication
 * @property string|null $direct_result
 * @property string|null $outcome
 * @property string|null $outcome_error
 * @property string|null $outcome_death
 * @property bool|null $error_cause_inexperience
 * @property bool|null $error_cause_knowledge
 * @property bool|null $error_cause_distraction
 * @property bool|null $error_cause_sound
 * @property bool|null $error_cause_medication
 * @property bool|null $error_cause_packaging
 * @property bool|null $error_cause_workload
 * @property bool|null $error_cause_peak
 * @property bool|null $error_cause_stock
 * @property bool|null $error_cause_procedure
 * @property bool|null $error_cause_abbreviations
 * @property bool|null $error_cause_illegible
 * @property bool|null $error_cause_inaccurate
 * @property bool|null $error_cause_labelling
 * @property bool|null $error_cause_computer
 * @property bool|null $error_cause_other
 * @property string|null $error_cause_specify
 * @property string|null $recommendations
 * @property string|null $reporter_name
 * @property string|null $reporter_email
 * @property string|null $reporter_phone
 * @property string|null $report_type
 * @property int|null $submitted
 * @property \Cake\I18n\FrozenTime|null $submitted_date
 * @property int|null $copied
 * @property int|null $archived
 * @property \Cake\I18n\FrozenTime|null $archived_date
 * @property bool|null $active
 * @property int|null $deleted
 * @property \Cake\I18n\FrozenTime|null $deleted_date
 * @property \Cake\I18n\FrozenTime|null $created
 * @property \Cake\I18n\FrozenTime|null $modified
 * @property \Cake\I18n\FrozenDate|null $reporter_date
 * @property string|null $person_submitting
 * @property string|null $reporter_name_diff
 * @property int|null $reporter_designation_diff
 * @property string|null $reporter_email_diff
 * @property string|null $reporter_phone_diff
 * @property \Cake\I18n\FrozenDate|null $reporter_date_diff
 * @property int|null $assigned_to
 * @property int|null $assigned_by
 * @property \Cake\I18n\FrozenTime|null $assigned_date
 * @property string|null $vigiflow_message
 * @property string|null $vigiflow_ref
 *
 * @property \App\Model\Entity\User $user
 * @property \App\Model\Entity\Pqmp $pqmp
 * @property \App\Model\Entity\Medication[] $medications
 * @property \App\Model\Entity\County $county
 * @property \App\Model\Entity\Designation $designation
 * @property \App\Model\Entity\AttachmentsOld[] $attachments_old
 * @property \App\Model\Entity\MedicationProduct[] $medication_products
 * @property \App\Model\Entity\Sadr[] $sadrs
 */
class Medication extends Entity
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
        'user_id' => true,
        'pqmp_id' => true,
        'medication_id' => true,
        'reference_no' => true,
        'adverse_reaction' => true,
        'county_id' => true,
        'designation_id' => true,
        'date_of_event' => true,
        'time_of_event' => true,
        'name_of_institution' => true,
        'institution_code' => true,
        'institution_contact' => true,
        'patient_name' => true,
        'gender' => true,
        'pregnancy_status' => true,
        'patient_phone' => true,
        'date_of_birth' => true,
        'age_years' => true,
        'ward' => true,
        'clinic' => true,
        'pharmacy' => true,
        'accident' => true,
        'location_other' => true,
        'description_of_error' => true,
        'process_occur' => true,
        'process_occur_specify' => true,
        'reach_patient' => true,
        'correct_medication' => true,
        'direct_result' => true,
        'outcome' => true,
        'outcome_error' => true,
        'outcome_death' => true,
        'error_cause_inexperience' => true,
        'error_cause_knowledge' => true,
        'error_cause_distraction' => true,
        'error_cause_sound' => true,
        'error_cause_medication' => true,
        'error_cause_packaging' => true,
        'error_cause_workload' => true,
        'error_cause_peak' => true,
        'error_cause_stock' => true,
        'error_cause_procedure' => true,
        'error_cause_abbreviations' => true,
        'error_cause_illegible' => true,
        'error_cause_inaccurate' => true,
        'error_cause_labelling' => true,
        'error_cause_computer' => true,
        'error_cause_other' => true,
        'error_cause_specify' => true,
        'recommendations' => true,
        'reporter_name' => true,
        'reporter_email' => true,
        'reporter_phone' => true,
        'report_type' => true,
        'submitted' => true,
        'submitted_date' => true,
        'copied' => true,
        'archived' => true,
        'archived_date' => true,
        'active' => true,
        'deleted' => true,
        'deleted_date' => true,
        'created' => true,
        'modified' => true,
        'reporter_date' => true,
        'person_submitting' => true,
        'reporter_name_diff' => true,
        'reporter_designation_diff' => true,
        'reporter_email_diff' => true,
        'reporter_phone_diff' => true,
        'reporter_date_diff' => true,
        'assigned_to' => true,
        'assigned_by' => true,
        'assigned_date' => true,
        'vigiflow_message' => true,
        'vigiflow_ref' => true,
        'user' => true,
        'pqmp' => true,
        'medications' => true,
        'county' => true,
        'designation' => true,
        'attachments_old' => true,
        'medication_products' => true,
        'sadrs' => true,
    ];
}
