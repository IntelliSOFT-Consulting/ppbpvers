<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Aefi Entity
 *
 * @property int $id
 * @property int|null $user_id
 * @property int|null $pqmp_id
 * @property string|null $reference_no
 * @property int|null $aefi_id
 * @property int|null $county_id
 * @property int|null $sub_county_id
 * @property string|null $vigiflow_ref
 * @property \Cake\I18n\FrozenTime|null $vigiflow_date
 * @property string|null $vigiflow_message
 * @property string|null $webradr_ref
 * @property \Cake\I18n\FrozenTime|null $webradr_date
 * @property string|null $webradr_message
 * @property int|null $designation_id
 * @property string|null $report_type
 * @property string|null $name_of_institution
 * @property string|null $institution_code
 * @property string|null $patient_name
 * @property string|null $guardian_name
 * @property string|null $patient_address
 * @property string|null $patient_phone
 * @property string|null $patient_village
 * @property string|null $ip_no
 * @property string|null $date_of_birth
 * @property int|null $age_months
 * @property string|null $age_group
 * @property string|null $patient_ward
 * @property string|null $patient_county
 * @property string|null $patient_sub_county
 * @property string|null $vaccination_center
 * @property string|null $vaccination_county
 * @property string|null $vaccination_type
 * @property string|null $gender
 * @property string|null $pregnancy_status
 * @property bool|null $bcg
 * @property bool|null $convulsion
 * @property bool|null $urticaria
 * @property bool|null $high_fever
 * @property bool|null $abscess
 * @property bool|null $local_reaction
 * @property bool|null $anaphylaxis
 * @property bool|null $meningitis
 * @property bool|null $paralysis
 * @property bool|null $toxic_shock
 * @property bool|null $complaint_other
 * @property string|null $complaint_other_specify
 * @property string|null $description_of_reaction
 * @property \Cake\I18n\FrozenDate|null $date_aefi_started
 * @property string|null $time_aefi_started
 * @property string|null $aefi_symptoms
 * @property string|null $serious
 * @property string|null $serious_yes
 * @property string|null $serious_other
 * @property string|null $medical_history
 * @property string|null $treatment_given
 * @property string|null $specimen_collected
 * @property string|null $outcome
 * @property string|null $reporter_name
 * @property string|null $reporter_email
 * @property string|null $reporter_phone
 * @property \Cake\I18n\FrozenDate|null $reporter_date
 * @property int|null $submitted
 * @property \Cake\I18n\FrozenTime|null $submitted_date
 * @property bool|null $active
 * @property int|null $device
 * @property int|null $copied
 * @property int|null $archived
 * @property \Cake\I18n\FrozenTime|null $archived_date
 * @property bool|null $deleted
 * @property \Cake\I18n\FrozenTime|null $deleted_date
 * @property \Cake\I18n\FrozenTime|null $created
 * @property \Cake\I18n\FrozenTime|null $modified
 * @property string|null $person_submitting
 * @property string|null $reporter_name_diff
 * @property int|null $reporter_designation_diff
 * @property string|null $reporter_email_diff
 * @property string|null $reporter_phone_diff
 * @property \Cake\I18n\FrozenDate|null $reporter_date_diff
 * @property int|null $assigned_to
 * @property int|null $assigned_by
 * @property \Cake\I18n\FrozenTime|null $assigned_date
 *
 * @property \App\Model\Entity\User $user
 * @property \App\Model\Entity\Pqmp $pqmp
 * @property \App\Model\Entity\Aefi[] $aefis
 * @property \App\Model\Entity\County $county
 * @property \App\Model\Entity\SubCounty $sub_county
 * @property \App\Model\Entity\Designation $designation
 * @property \App\Model\Entity\AefiDescription[] $aefi_descriptions
 * @property \App\Model\Entity\AefiListOfVaccine[] $aefi_list_of_vaccines
 * @property \App\Model\Entity\AefiReaction[] $aefi_reactions
 * @property \App\Model\Entity\AttachmentsOld[] $attachments_old
 */
class Aefi extends Entity
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
        'reference_no' => true,
        'aefi_id' => true,
        'county_id' => true,
        'sub_county_id' => true,
        'vigiflow_ref' => true,
        'vigiflow_date' => true,
        'vigiflow_message' => true,
        'webradr_ref' => true,
        'webradr_date' => true,
        'webradr_message' => true,
        'designation_id' => true,
        'report_type' => true,
        'name_of_institution' => true,
        'institution_code' => true,
        'patient_name' => true,
        'guardian_name' => true,
        'patient_address' => true,
        'patient_phone' => true,
        'patient_village' => true,
        'ip_no' => true,
        'date_of_birth' => true,
        'age_months' => true,
        'age_group' => true,
        'patient_ward' => true,
        'patient_county' => true,
        'patient_sub_county' => true,
        'vaccination_center' => true,
        'vaccination_county' => true,
        'vaccination_type' => true,
        'gender' => true,
        'pregnancy_status' => true,
        'bcg' => true,
        'convulsion' => true,
        'urticaria' => true,
        'high_fever' => true,
        'abscess' => true,
        'local_reaction' => true,
        'anaphylaxis' => true,
        'meningitis' => true,
        'paralysis' => true,
        'toxic_shock' => true,
        'complaint_other' => true,
        'complaint_other_specify' => true,
        'description_of_reaction' => true,
        'date_aefi_started' => true,
        'time_aefi_started' => true,
        'aefi_symptoms' => true,
        'serious' => true,
        'serious_yes' => true,
        'serious_other' => true,
        'medical_history' => true,
        'treatment_given' => true,
        'specimen_collected' => true,
        'outcome' => true,
        'reporter_name' => true,
        'reporter_email' => true,
        'reporter_phone' => true,
        'reporter_date' => true,
        'submitted' => true,
        'submitted_date' => true,
        'active' => true,
        'device' => true,
        'copied' => true,
        'archived' => true,
        'archived_date' => true,
        'deleted' => true,
        'deleted_date' => true,
        'created' => true,
        'modified' => true,
        'person_submitting' => true,
        'reporter_name_diff' => true,
        'reporter_designation_diff' => true,
        'reporter_email_diff' => true,
        'reporter_phone_diff' => true,
        'reporter_date_diff' => true,
        'assigned_to' => true,
        'assigned_by' => true,
        'assigned_date' => true,
        'user' => true,
        'pqmp' => true,
        'aefis' => true,
        'county' => true,
        'sub_county' => true,
        'designation' => true,
        'aefi_descriptions' => true,
        'aefi_list_of_vaccines' => true,
        'aefi_reactions' => true,
        'attachments_old' => true,
    ];
}
