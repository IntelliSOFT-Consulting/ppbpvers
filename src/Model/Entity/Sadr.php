<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Sadr Entity
 *
 * @property int $id
 * @property int|null $sadr_id
 * @property int|null $user_id
 * @property int|null $pqmp_id
 * @property int|null $medication_id
 * @property int|null $county_id
 * @property int|null $sub_county_id
 * @property int|null $designation_id
 * @property string|null $reference_no
 * @property string|null $vigiflow_id
 * @property string|null $report_title
 * @property string|null $report_type
 * @property bool|null $report_sadr
 * @property bool|null $report_therapeutic
 * @property int|null $report_misuse
 * @property int|null $report_off_label
 * @property string|null $product_category
 * @property bool|null $medicinal_product
 * @property bool|null $blood_products
 * @property bool|null $herbal_product
 * @property bool|null $cosmeceuticals
 * @property bool|null $product_other
 * @property string|null $product_specify
 * @property string|null $name_of_institution
 * @property string|null $institution_code
 * @property string|null $address
 * @property string|null $contact
 * @property string|null $patient_name
 * @property string|null $ip_no
 * @property string|null $date_of_birth
 * @property string|null $age_group
 * @property string|null $patient_address
 * @property string|null $ward
 * @property string|null $gender
 * @property string|null $known_allergy
 * @property string|null $known_allergy_specify
 * @property string|null $pregnant
 * @property string|null $pregnancy_status
 * @property string|null $weight
 * @property string|null $height
 * @property string|null $diagnosis
 * @property string|null $reaction
 * @property string|null $medical_history
 * @property string|null $date_of_onset_of_reaction
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
 * @property int|null $emails
 * @property bool|null $active
 * @property int|null $device
 * @property bool|null $deleted
 * @property bool|null $archived
 * @property \Cake\I18n\FrozenTime|null $archived_date
 * @property \Cake\I18n\FrozenTime|null $deleted_date
 * @property int|null $notified
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
 * @property \Cake\I18n\FrozenTime|null $vigiflow_date
 * @property string|null $webradr_ref
 * @property \Cake\I18n\FrozenTime|null $webradr_date
 * @property \Cake\I18n\FrozenTime|null $submitted_date
 * @property string|null $webradr_message
 * @property int|null $copied
 *
 * @property \App\Model\Entity\Sadr[] $sadrs
 * @property \App\Model\Entity\User $user
 * @property \App\Model\Entity\Pqmp $pqmp
 * @property \App\Model\Entity\Medication $medication
 * @property \App\Model\Entity\County $county
 * @property \App\Model\Entity\SubCounty $sub_county
 * @property \App\Model\Entity\Designation $designation
 * @property \App\Model\Entity\AttachmentsOld[] $attachments_old
 * @property \App\Model\Entity\SadrDescription[] $sadr_descriptions
 * @property \App\Model\Entity\SadrFollowup[] $sadr_followups
 * @property \App\Model\Entity\SadrListOfDrug[] $sadr_list_of_drugs
 * @property \App\Model\Entity\SadrListOfMedicine[] $sadr_list_of_medicines
 * @property \App\Model\Entity\SadrReaction[] $sadr_reaction
 */
class Sadr extends Entity
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
        'id'=>false
    ];

    
}
