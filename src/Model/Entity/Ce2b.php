<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Ce2b Entity
 *
 * @property int $id
 * @property int|null $user_id
 * @property int|null $ce2b_id
 * @property string|null $vigiflow_message
 * @property string|null $vigiflow_date
 * @property string|null $report_type
 * @property int|null $county_id
 * @property int|null $sub_county_id
 * @property int|null $designation_id
 * @property string|null $reference_no
 * @property string|null $messageid
 * @property int|null $assigned_to
 * @property int|null $assigned_by
 * @property string|null $company_code
 * @property string|null $company_name
 * @property string|null $comment
 * @property string|null $reporter_email
 * @property string|null $e2b_content
 * @property string|null $e2b_type
 * @property string|null $e2b_file
 * @property string|null $dir
 * @property string|null $size
 * @property string|null $type
 * @property \Cake\I18n\FrozenTime|null $assigned_date
 * @property bool|null $signature
 * @property int|null $submitted
 * @property \Cake\I18n\FrozenTime|null $submitted_date
 * @property string|null $reporter_name
 * @property int|null $reporter_designation
 * @property string|null $reporter_phone
 * @property \Cake\I18n\FrozenDate|null $reporter_date
 * @property string|null $person_submitting
 * @property string|null $reporter_name_diff
 * @property int|null $reporter_designation_diff
 * @property string|null $reporter_email_diff
 * @property string|null $reporter_phone_diff
 * @property \Cake\I18n\FrozenDate|null $reporter_date_diff
 * @property string|null $resubmit
 * @property string|null $status
 * @property int|null $active
 * @property int|null $copied
 * @property int|null $archived
 * @property \Cake\I18n\FrozenTime|null $archived_date
 * @property \Cake\I18n\FrozenTime|null $created
 * @property \Cake\I18n\FrozenTime|null $modified
 * @property \Cake\I18n\FrozenTime $action_date
 * @property bool|null $deleted
 * @property \Cake\I18n\FrozenTime|null $deleted_date
 * @property string|null $report_reference
 * @property string|null $creation_time
 * @property string|null $sender_reference
 * @property string|null $receiver_id
 * @property string|null $sender_id
 * @property string|null $sender_unique_identifier
 * @property string|null $worldwide_identifier
 * @property string|null $case_narrative
 * @property string|null $date_first_received
 * @property string|null $date_most_recent_info
 * @property bool|null $serious
 * @property string|null $patient_name
 * @property string|null $patient_sex
 * @property string|null $patient_dob
 * @property string|null $patient_number
 * @property string|null $past_medical
 * @property string|null $sender_address
 * @property string|null $sender_city
 * @property string|null $sender_state
 * @property string|null $sender_department
 * @property string|null $sender_organization
 * @property bool|null $results_in_detah
 * @property bool|null $life_threatening
 * @property bool|null $prolonged_hospitalization
 * @property bool|null $incapacitating
 *
 * @property \App\Model\Entity\User $user
 * @property \App\Model\Entity\Ce2b[] $ce2bs
 * @property \App\Model\Entity\County $county
 * @property \App\Model\Entity\SubCounty $sub_county
 * @property \App\Model\Entity\Designation $designation
 * @property \App\Model\Entity\Ce2bListOfDrug[] $ce2b_list_of_drugs
 * @property \App\Model\Entity\Ce2bReaction[] $ce2b_reaction
 */
class Ce2b extends Entity
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
        'ce2b_id' => true,
        'vigiflow_message' => true,
        'vigiflow_date' => true,
        'report_type' => true,
        'county_id' => true,
        'sub_county_id' => true,
        'designation_id' => true,
        'reference_no' => true,
        'messageid' => true,
        'assigned_to' => true,
        'assigned_by' => true,
        'company_code' => true,
        'company_name' => true,
        'comment' => true,
        'reporter_email' => true,
        'e2b_content' => true,
        'e2b_type' => true,
        'e2b_file' => true,
        'dir' => true,
        'size' => true,
        'type' => true,
        'assigned_date' => true,
        'signature' => true,
        'submitted' => true,
        'submitted_date' => true,
        'reporter_name' => true,
        'reporter_designation' => true,
        'reporter_phone' => true,
        'reporter_date' => true,
        'person_submitting' => true,
        'reporter_name_diff' => true,
        'reporter_designation_diff' => true,
        'reporter_email_diff' => true,
        'reporter_phone_diff' => true,
        'reporter_date_diff' => true,
        'resubmit' => true,
        'status' => true,
        'active' => true,
        'copied' => true,
        'archived' => true,
        'archived_date' => true,
        'created' => true,
        'modified' => true,
        'action_date' => true,
        'deleted' => true,
        'deleted_date' => true,
        'report_reference' => true,
        'creation_time' => true,
        'sender_reference' => true,
        'receiver_id' => true,
        'sender_id' => true,
        'sender_unique_identifier' => true,
        'worldwide_identifier' => true,
        'case_narrative' => true,
        'date_first_received' => true,
        'date_most_recent_info' => true,
        'serious' => true,
        'patient_name' => true,
        'patient_sex' => true,
        'patient_dob' => true,
        'patient_number' => true,
        'past_medical' => true,
        'sender_address' => true,
        'sender_city' => true,
        'sender_state' => true,
        'sender_department' => true,
        'sender_organization' => true,
        'results_in_detah' => true,
        'life_threatening' => true,
        'prolonged_hospitalization' => true,
        'incapacitating' => true,
        'user' => true,
        'ce2bs' => true,
        'county' => true,
        'sub_county' => true,
        'designation' => true,
        'ce2b_list_of_drugs' => true,
        'ce2b_reaction' => true,
    ];
}
