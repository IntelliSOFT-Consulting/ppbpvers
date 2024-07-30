<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Aggregate Entity
 *
 * @property int $id
 * @property int|null $user_id
 * @property int|null $aggregate_id
 * @property int|null $county_id
 * @property string|null $summary_available
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
 * @property string|null $brand_name
 * @property string|null $inn_name
 * @property string|null $mah
 * @property string|null $local_technical
 * @property string|null $therapeutic_group
 * @property string|null $authorised_indications
 * @property string|null $form_strength
 * @property int|null $interval_code
 * @property string|null $submission_frequency
 * @property \Cake\I18n\FrozenTime|null $reminder_date
 * @property string|null $introduction
 * @property string|null $worldwide_marketing
 * @property string|null $action_taken
 * @property string|null $reference_changes
 * @property string|null $estimated_exposure
 * @property string|null $clinical_findings
 * @property string|null $efficacy
 * @property string|null $late_breaking
 * @property string|null $safety_concerns
 * @property string|null $risks_evaluation
 * @property string|null $risks_characterisation
 * @property string|null $benefit_evaluation
 * @property string|null $risk_balance
 * @property string|null $recommendation
 * @property string|null $conclusion
 * @property string|null $report_type
 * @property bool|null $manager_initiated
 * @property string|null $manager_submitted
 *
 * @property \App\Model\Entity\User $user
 * @property \App\Model\Entity\Aggregate[] $aggregates
 * @property \App\Model\Entity\County $county
 * @property \App\Model\Entity\SubCounty $sub_county
 * @property \App\Model\Entity\Designation $designation
 * @property \App\Model\Entity\AggregateListOfSignal[] $aggregate_list_of_signals
 */
class Aggregate extends Entity
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
        'aggregate_id' => true,
        'county_id' => true,
        'summary_available' => true,
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
        'brand_name' => true,
        'inn_name' => true,
        'mah' => true,
        'local_technical' => true,
        'therapeutic_group' => true,
        'authorised_indications' => true,
        'form_strength' => true,
        'interval_code' => true,
        'submission_frequency' => true,
        'reminder_date' => true,
        'introduction' => true,
        'worldwide_marketing' => true,
        'action_taken' => true,
        'reference_changes' => true,
        'estimated_exposure' => true,
        'clinical_findings' => true,
        'efficacy' => true,
        'late_breaking' => true,
        'safety_concerns' => true,
        'risks_evaluation' => true,
        'risks_characterisation' => true,
        'benefit_evaluation' => true,
        'risk_balance' => true,
        'recommendation' => true,
        'conclusion' => true,
        'report_type' => true,
        'manager_initiated' => true,
        'manager_submitted' => true,
        'user' => true,
        'aggregates' => true,
        'county' => true,
        'sub_county' => true,
        'designation' => true,
        'aggregate_list_of_signals' => true,
    ];
}
