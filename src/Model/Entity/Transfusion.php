<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Transfusion Entity
 *
 * @property int $id
 * @property int|null $user_id
 * @property int|null $pqmp_id
 * @property int|null $transfusion_id
 * @property string|null $reference_no
 * @property int|null $county_id
 * @property int|null $designation_id
 * @property string|null $form_type
 * @property string|null $patient_name
 * @property string|null $gender
 * @property string|null $patient_address
 * @property string|null $patient_phone
 * @property string|null $date_of_birth
 * @property string|null $age_years
 * @property string|null $diagnosis
 * @property string|null $ward
 * @property string|null $pre_hb
 * @property string|null $transfusion_reason
 * @property string|null $current_medications
 * @property string|null $obstetric_history
 * @property string|null $previous_transfusion
 * @property string|null $transfusion_comment
 * @property string|null $previous_reactions
 * @property string|null $reaction_comment
 * @property string|null $reaction_general
 * @property string|null $reaction_fever
 * @property string|null $reaction_chills
 * @property string|null $reaction_flushing
 * @property string|null $reaction_vomiting
 * @property string|null $reaction_dermatological
 * @property string|null $reaction_cardiac
 * @property string|null $reaction_chest
 * @property string|null $reaction_dyspnoea
 * @property string|null $reaction_hypotension
 * @property string|null $reaction_tachycardia
 * @property string|null $reaction_renal
 * @property string|null $reaction_anuria
 * @property string|null $reaction_oliguria
 * @property string|null $reaction_dark
 * @property string|null $reaction_haematological
 * @property string|null $reaction_other
 * @property string|null $vital_start_bp
 * @property string|null $vital_start_t
 * @property string|null $vital_start_p
 * @property string|null $vital_start_r
 * @property string|null $vital_during_bp
 * @property string|null $vital_during_t
 * @property string|null $vital_during_p
 * @property string|null $vital_during_r
 * @property string|null $vital_stop_bp
 * @property string|null $vital_stop_t
 * @property string|null $vital_stop_p
 * @property string|null $vital_stop_r
 * @property string|null $nurse_name
 * @property string|null $lab_hemolysis
 * @property string|null $lab_hemolysis_present
 * @property string|null $recipient_blood
 * @property string|null $hae_wbc
 * @property string|null $hae_hb
 * @property string|null $hae_rbc
 * @property string|null $hae_hct
 * @property string|null $hae_mcv
 * @property string|null $hae_mch
 * @property string|null $hae_mchc
 * @property string|null $hae_plt
 * @property string|null $film_rbc
 * @property string|null $film_wbc
 * @property string|null $film_plt
 * @property string|null $donor_hemolysis
 * @property string|null $donor_age
 * @property string|null $culture_donor_pack
 * @property string|null $culture_recipient_blood
 * @property string|null $compatible_saline_rt
 * @property string|null $compatible_saline_ii
 * @property string|null $compatible_ahg
 * @property string|null $compatible_albumin
 * @property string|null $negative_result
 * @property string|null $anti_a
 * @property string|null $anti_b
 * @property string|null $urinalysis
 * @property string|null $evaluation
 * @property string|null $adverse_reaction
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
 * @property string|null $clinic_venue
 * @property int|null $specimens_post_transfusion
 * @property int|null $specimens_edta_blood
 * @property int|null $specimens_void_urine
 * @property int|null $specimens_blood_reacted
 * @property int|null $specimens_blood_bags
 * @property string|null $clinic_code
 * @property string|null $donor_number
 * @property string|null $national_number
 * @property string|null $home_phone
 * @property string|null $cell_phone
 * @property string|null $email_address
 * @property string|null $residence
 * @property \Cake\I18n\FrozenDate|null $nurse_date
 * @property string|null $low_volume
 * @property string|null $venepuncture
 * @property string|null $hematoma
 * @property string|null $faint
 * @property int|null $deleted
 * @property \Cake\I18n\FrozenTime|null $deleted_date
 *
 * @property \App\Model\Entity\User $user
 * @property \App\Model\Entity\Pqmp $pqmp
 * @property \App\Model\Entity\Transfusion[] $transfusions
 * @property \App\Model\Entity\County $county
 * @property \App\Model\Entity\Designation $designation
 * @property \App\Model\Entity\AttachmentsOld[] $attachments_old
 * @property \App\Model\Entity\Pint[] $pints
 */
class Transfusion extends Entity
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
        'transfusion_id' => true,
        'reference_no' => true,
        'county_id' => true,
        'designation_id' => true,
        'form_type' => true,
        'patient_name' => true,
        'gender' => true,
        'patient_address' => true,
        'patient_phone' => true,
        'date_of_birth' => true,
        'age_years' => true,
        'diagnosis' => true,
        'ward' => true,
        'pre_hb' => true,
        'transfusion_reason' => true,
        'current_medications' => true,
        'obstetric_history' => true,
        'previous_transfusion' => true,
        'transfusion_comment' => true,
        'previous_reactions' => true,
        'reaction_comment' => true,
        'reaction_general' => true,
        'reaction_fever' => true,
        'reaction_chills' => true,
        'reaction_flushing' => true,
        'reaction_vomiting' => true,
        'reaction_dermatological' => true,
        'reaction_cardiac' => true,
        'reaction_chest' => true,
        'reaction_dyspnoea' => true,
        'reaction_hypotension' => true,
        'reaction_tachycardia' => true,
        'reaction_renal' => true,
        'reaction_anuria' => true,
        'reaction_oliguria' => true,
        'reaction_dark' => true,
        'reaction_haematological' => true,
        'reaction_other' => true,
        'vital_start_bp' => true,
        'vital_start_t' => true,
        'vital_start_p' => true,
        'vital_start_r' => true,
        'vital_during_bp' => true,
        'vital_during_t' => true,
        'vital_during_p' => true,
        'vital_during_r' => true,
        'vital_stop_bp' => true,
        'vital_stop_t' => true,
        'vital_stop_p' => true,
        'vital_stop_r' => true,
        'nurse_name' => true,
        'lab_hemolysis' => true,
        'lab_hemolysis_present' => true,
        'recipient_blood' => true,
        'hae_wbc' => true,
        'hae_hb' => true,
        'hae_rbc' => true,
        'hae_hct' => true,
        'hae_mcv' => true,
        'hae_mch' => true,
        'hae_mchc' => true,
        'hae_plt' => true,
        'film_rbc' => true,
        'film_wbc' => true,
        'film_plt' => true,
        'donor_hemolysis' => true,
        'donor_age' => true,
        'culture_donor_pack' => true,
        'culture_recipient_blood' => true,
        'compatible_saline_rt' => true,
        'compatible_saline_ii' => true,
        'compatible_ahg' => true,
        'compatible_albumin' => true,
        'negative_result' => true,
        'anti_a' => true,
        'anti_b' => true,
        'urinalysis' => true,
        'evaluation' => true,
        'adverse_reaction' => true,
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
        'clinic_venue' => true,
        'specimens_post_transfusion' => true,
        'specimens_edta_blood' => true,
        'specimens_void_urine' => true,
        'specimens_blood_reacted' => true,
        'specimens_blood_bags' => true,
        'clinic_code' => true,
        'donor_number' => true,
        'national_number' => true,
        'home_phone' => true,
        'cell_phone' => true,
        'email_address' => true,
        'residence' => true,
        'nurse_date' => true,
        'low_volume' => true,
        'venepuncture' => true,
        'hematoma' => true,
        'faint' => true,
        'deleted' => true,
        'deleted_date' => true,
        'user' => true,
        'pqmp' => true,
        'transfusions' => true,
        'county' => true,
        'designation' => true,
        'attachments_old' => true,
        'pints' => true,
    ];
}
