<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Padr Entity
 *
 * @property int $id
 * @property int|null $padr_id
 * @property int|null $user_id
 * @property int|null $county_id
 * @property int|null $sub_county_id
 * @property int|null $designation_id
 * @property string|null $reference_no
 * @property string|null $token
 * @property string|null $relation
 * @property string|null $vigiflow_ref
 * @property string|null $vigiflow_message
 * @property string|null $vigiflow_date
 * @property string|null $report_title
 * @property string|null $report_type
 * @property string|null $report_sadr
 * @property bool|null $sadr_vomiting
 * @property bool|null $sadr_dizziness
 * @property bool|null $sadr_headache
 * @property bool|null $sadr_joints
 * @property bool|null $sadr_rash
 * @property bool|null $sadr_mouth
 * @property bool|null $sadr_stomach
 * @property bool|null $sadr_urination
 * @property bool|null $sadr_eyes
 * @property bool|null $sadr_died
 * @property bool|null $pqmp_label
 * @property string|null $patient_name
 * @property bool|null $pqmp_material
 * @property string|null $date_of_birth
 * @property string|null $age_group
 * @property string|null $patient_address
 * @property bool|null $pqmp_color
 * @property string|null $gender
 * @property bool|null $pqmp_smell
 * @property bool|null $pqmp_working
 * @property bool|null $pqmp_bottle
 * @property string|null $pregnancy_status
 * @property string|null $weight
 * @property string|null $height
 * @property string|null $diagnosis
 * @property string|null $medical_history
 * @property string|null $date_of_onset_of_reaction
 * @property string|null $date_of_end_of_reaction
 * @property string|null $description_of_reaction
 * @property string|null $reaction_resolve
 * @property string|null $reaction_reappear
 * @property string|null $lab_investigation
 * @property string|null $severity
 * @property string|null $serious
 * @property string|null $serious_reason
 * @property string|null $action_taken
 * @property string|null $outcome
 * @property string|null $causality
 * @property string|null $any_other_comment
 * @property string|null $reporter_name
 * @property string|null $reporter_email
 * @property string|null $reporter_phone
 * @property int|null $submitted
 * @property \Cake\I18n\FrozenTime|null $submitted_date
 * @property int|null $emails
 * @property bool|null $active
 * @property int|null $device
 * @property bool|null $deleted
 * @property \Cake\I18n\FrozenTime|null $deleted_date
 * @property int|null $notified
 * @property \Cake\I18n\FrozenTime|null $created
 * @property \Cake\I18n\FrozenTime|null $modified
 * @property \Cake\I18n\FrozenDate|null $reporter_date
 * @property string|null $reporter_name_diff
 * @property int|null $reporter_designation_diff
 * @property string|null $reporter_email_diff
 * @property string|null $reporter_phone_diff
 * @property \Cake\I18n\FrozenDate|null $reporter_date_diff
 * @property int|null $assigned_to
 * @property int|null $assigned_by
 * @property \Cake\I18n\FrozenTime|null $assigned_date
 * @property string|null $reaction_on
 * @property string|null $consent
 * @property int|null $copied
 * @property int|null $archived
 * @property \Cake\I18n\FrozenTime|null $archived_date
 *
 * @property \App\Model\Entity\Padr[] $padrs
 * @property \App\Model\Entity\User $user
 * @property \App\Model\Entity\County $county
 * @property \App\Model\Entity\SubCounty $sub_county
 * @property \App\Model\Entity\Designation $designation
 * @property \App\Model\Entity\PadrListOfMedicine[] $padr_list_of_medicines
 */
class Padr extends Entity
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
        '*' => true,
    ];

    /**
     * Fields that are excluded from JSON versions of the entity.
     *
     * @var array<string>
     */
    protected $_hidden = [
        'token',
    ];
}
