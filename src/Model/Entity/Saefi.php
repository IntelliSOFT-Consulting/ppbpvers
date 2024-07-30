<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Saefi Entity
 *
 * @property int $id
 * @property int|null $user_id
 * @property int|null $saefi_id
 * @property int|null $initial_id
 * @property string|null $messageid
 * @property string|null $vigiflow_ref
 * @property string|null $vigiflow_date
 * @property string|null $webradr_ref
 * @property string|null $webradr_date
 * @property int|null $province_id
 * @property string|null $district
 * @property string|null $aefi_report_ref
 * @property string|null $name_of_vaccination_site
 * @property string|null $reference_no
 * @property int|null $assigned_to
 * @property int|null $assigned_by
 * @property \Cake\I18n\FrozenTime|null $assigned_date
 * @property string|null $place_vaccination
 * @property string|null $place_vaccination_other
 * @property string|null $site_type
 * @property string|null $site_type_other
 * @property string|null $vaccination_in
 * @property string|null $vaccination_in_other
 * @property string|null $reporter_name
 * @property \Cake\I18n\FrozenDate|null $report_date
 * @property \Cake\I18n\FrozenDate|null $start_date
 * @property \Cake\I18n\FrozenDate|null $complete_date
 * @property int|null $designation_id
 * @property string|null $telephone
 * @property string|null $mobile
 * @property string|null $reporter_email
 * @property string|null $patient_name
 * @property string|null $gender
 * @property string|null $patient_address
 * @property \Cake\I18n\FrozenDate|null $date_of_birth
 * @property int|null $age_at_onset_years
 * @property int|null $age_at_onset_months
 * @property int|null $age_at_onset_days
 * @property string|null $age_group
 * @property \Cake\I18n\FrozenTime|null $symptom_date
 * @property \Cake\I18n\FrozenDate|null $hospitalization_date
 * @property string|null $status_on_date
 * @property \Cake\I18n\FrozenTime|null $died_date
 * @property string|null $autopsy_done
 * @property \Cake\I18n\FrozenDate|null $autopsy_done_date
 * @property string|null $autopsy_planned
 * @property \Cake\I18n\FrozenTime|null $autopsy_planned_date
 * @property string|null $past_history
 * @property string|null $past_history_remarks
 * @property string|null $adverse_event
 * @property string|null $adverse_event_remarks
 * @property string|null $allergy_history
 * @property string|null $allergy_history_remarks
 * @property string|null $comorbidity_disorder
 * @property string|null $comorbidity_disorder_remarks
 * @property string|null $covid_positive
 * @property string|null $covid_positive_remarks
 * @property string|null $existing_illness
 * @property string|null $existing_illness_remarks
 * @property string|null $hospitalization_history
 * @property string|null $hospitalization_history_remarks
 * @property string|null $medication_vaccination
 * @property string|null $medication_vaccination_remarks
 * @property string|null $faith_healers
 * @property string|null $faith_healers_remarks
 * @property string|null $family_history
 * @property string|null $family_history_remarks
 * @property string|null $pregnant
 * @property string|null $pregnant_weeks
 * @property string|null $breastfeeding
 * @property string|null $infant
 * @property int|null $birth_weight
 * @property string|null $delivery_procedure
 * @property string|null $delivery_procedure_specify
 * @property bool|null $source_examination
 * @property bool|null $source_documents
 * @property bool|null $source_verbal
 * @property string|null $verbal_source
 * @property bool|null $source_other
 * @property string|null $source_other_specify
 * @property string|null $examiner_name
 * @property string|null $other_sources
 * @property string|null $signs_symptoms
 * @property string|null $person_details
 * @property string|null $person_designation
 * @property \Cake\I18n\FrozenTime|null $person_date
 * @property string|null $medical_care
 * @property string|null $not_medical_care
 * @property string|null $final_diagnosis
 * @property string|null $when_vaccinated
 * @property string|null $vaccine_given
 * @property string|null $when_vaccinated_specify
 * @property string|null $prescribing_error
 * @property string|null $prescribing_error_specify
 * @property string|null $vaccine_unsterile
 * @property string|null $vaccine_unsterile_specify
 * @property string|null $vaccine_condition
 * @property string|null $vaccine_condition_specify
 * @property string|null $vaccine_reconstitution
 * @property string|null $vaccine_reconstitution_specify
 * @property string|null $vaccine_handling
 * @property string|null $vaccine_handling_specify
 * @property string|null $vaccine_administered
 * @property string|null $vaccine_administered_specify
 * @property int|null $vaccinated_vial
 * @property int|null $vaccinated_session
 * @property int|null $vaccinated_locations
 * @property string|null $vaccinated_locations_specify
 * @property string|null $vaccinated_cluster
 * @property int|null $vaccinated_cluster_number
 * @property string|null $vaccinated_cluster_vial
 * @property int|null $vaccinated_cluster_vial_number
 * @property string|null $syringes_used
 * @property string|null $syringes_used_specify
 * @property string|null $syringes_used_other
 * @property string|null $syringes_used_findings
 * @property string|null $injection_dose_route
 * @property string|null $injection_time_mentioned
 * @property string|null $injection_no_touch
 * @property string|null $injection_contraindications
 * @property string|null $injection_reported
 * @property string|null $injection_vaccines
 * @property string|null $injection_vaccines_yes
 * @property string|null $injection_observations
 * @property string|null $reconstitution_multiple
 * @property string|null $reconstitution_different
 * @property string|null $reconstitution_vial
 * @property string|null $reconstitution_syringe
 * @property string|null $reconstitution_vaccines
 * @property string|null $reconstitution_observations
 * @property string|null $cold_temperature
 * @property string|null $cold_temperature_deviation
 * @property string|null $cold_temperature_specify
 * @property string|null $procedure_followed
 * @property string|null $other_items
 * @property string|null $partial_vaccines
 * @property string|null $unusable_vaccines
 * @property string|null $unusable_diluents
 * @property string|null $additional_observations
 * @property string|null $cold_transportation
 * @property string|null $vaccine_carrier
 * @property string|null $coolant_packs
 * @property string|null $transport_findings
 * @property string|null $similar_events
 * @property string|null $similar_events_describe
 * @property int|null $similar_events_episodes
 * @property int|null $affected_vaccinated
 * @property int|null $affected_not_vaccinated
 * @property string|null $affected_unknown
 * @property string|null $community_comments
 * @property string|null $relevant_findings
 * @property \Cake\I18n\FrozenTime|null $created
 * @property \Cake\I18n\FrozenTime|null $modified
 * @property \Cake\I18n\FrozenTime $action_date
 * @property int $submitted
 * @property string|null $resubmit
 * @property \Cake\I18n\FrozenDate|null $submitted_date
 * @property string|null $report_type
 * @property string|null $status
 * @property int|null $active
 * @property int|null $emails
 * @property bool|null $signature
 * @property int|null $deleted
 * @property int|null $copied
 * @property int|null $archived
 * @property \Cake\I18n\FrozenTime|null $archived_date
 * @property string|null $reporter_phone
 * @property \Cake\I18n\FrozenDate|null $reporter_date
 * @property string|null $person_submitting
 * @property string|null $reporter_name_diff
 * @property string|null $reporter_designation_diff
 * @property string|null $reporter_email_diff
 * @property string|null $reporter_phone_diff
 * @property string|null $reporter_date_diff
 * @property string|null $patient_phone
 * @property string|null $patient_street_name
 * @property string|null $syringes_used_other_specify
 * @property string|null $vaccinator_training
 * @property string|null $description_of_reaction
 * @property string|null $name_of_person_first_treated
 * @property string|null $name_of_the_person_treating
 * @property string|null $other_source_of_info
 * @property string|null $patient_house_number
 * @property string|null $time_of_first_symptom
 * @property string|null $vaccine_name
 * @property string|null $date_first_reported
 * @property string|null $date_form_filled
 *
 * @property \App\Model\Entity\User $user
 * @property \App\Model\Entity\Saefi[] $saefis
 * @property \App\Model\Entity\Designation $designation
 * @property \App\Model\Entity\AefiListOfVaccine[] $aefi_list_of_vaccines
 * @property \App\Model\Entity\Review[] $reviews
 */
class Saefi extends Entity
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
        'saefi_id' => true,
        'initial_id' => true,
        'messageid' => true,
        'vigiflow_ref' => true,
        'vigiflow_date' => true,
        'webradr_ref' => true,
        'webradr_date' => true,
        'province_id' => true,
        'district' => true,
        'aefi_report_ref' => true,
        'name_of_vaccination_site' => true,
        'reference_no' => true,
        'assigned_to' => true,
        'assigned_by' => true,
        'assigned_date' => true,
        'place_vaccination' => true,
        'place_vaccination_other' => true,
        'site_type' => true,
        'site_type_other' => true,
        'vaccination_in' => true,
        'vaccination_in_other' => true,
        'reporter_name' => true,
        'report_date' => true,
        'start_date' => true,
        'complete_date' => true,
        'designation_id' => true,
        'telephone' => true,
        'mobile' => true,
        'reporter_email' => true,
        'patient_name' => true,
        'gender' => true,
        'patient_address' => true,
        'date_of_birth' => true,
        'age_at_onset_years' => true,
        'age_at_onset_months' => true,
        'age_at_onset_days' => true,
        'age_group' => true,
        'symptom_date' => true,
        'hospitalization_date' => true,
        'status_on_date' => true,
        'died_date' => true,
        'autopsy_done' => true,
        'autopsy_done_date' => true,
        'autopsy_planned' => true,
        'autopsy_planned_date' => true,
        'past_history' => true,
        'past_history_remarks' => true,
        'adverse_event' => true,
        'adverse_event_remarks' => true,
        'allergy_history' => true,
        'allergy_history_remarks' => true,
        'comorbidity_disorder' => true,
        'comorbidity_disorder_remarks' => true,
        'covid_positive' => true,
        'covid_positive_remarks' => true,
        'existing_illness' => true,
        'existing_illness_remarks' => true,
        'hospitalization_history' => true,
        'hospitalization_history_remarks' => true,
        'medication_vaccination' => true,
        'medication_vaccination_remarks' => true,
        'faith_healers' => true,
        'faith_healers_remarks' => true,
        'family_history' => true,
        'family_history_remarks' => true,
        'pregnant' => true,
        'pregnant_weeks' => true,
        'breastfeeding' => true,
        'infant' => true,
        'birth_weight' => true,
        'delivery_procedure' => true,
        'delivery_procedure_specify' => true,
        'source_examination' => true,
        'source_documents' => true,
        'source_verbal' => true,
        'verbal_source' => true,
        'source_other' => true,
        'source_other_specify' => true,
        'examiner_name' => true,
        'other_sources' => true,
        'signs_symptoms' => true,
        'person_details' => true,
        'person_designation' => true,
        'person_date' => true,
        'medical_care' => true,
        'not_medical_care' => true,
        'final_diagnosis' => true,
        'when_vaccinated' => true,
        'vaccine_given' => true,
        'when_vaccinated_specify' => true,
        'prescribing_error' => true,
        'prescribing_error_specify' => true,
        'vaccine_unsterile' => true,
        'vaccine_unsterile_specify' => true,
        'vaccine_condition' => true,
        'vaccine_condition_specify' => true,
        'vaccine_reconstitution' => true,
        'vaccine_reconstitution_specify' => true,
        'vaccine_handling' => true,
        'vaccine_handling_specify' => true,
        'vaccine_administered' => true,
        'vaccine_administered_specify' => true,
        'vaccinated_vial' => true,
        'vaccinated_session' => true,
        'vaccinated_locations' => true,
        'vaccinated_locations_specify' => true,
        'vaccinated_cluster' => true,
        'vaccinated_cluster_number' => true,
        'vaccinated_cluster_vial' => true,
        'vaccinated_cluster_vial_number' => true,
        'syringes_used' => true,
        'syringes_used_specify' => true,
        'syringes_used_other' => true,
        'syringes_used_findings' => true,
        'injection_dose_route' => true,
        'injection_time_mentioned' => true,
        'injection_no_touch' => true,
        'injection_contraindications' => true,
        'injection_reported' => true,
        'injection_vaccines' => true,
        'injection_vaccines_yes' => true,
        'injection_observations' => true,
        'reconstitution_multiple' => true,
        'reconstitution_different' => true,
        'reconstitution_vial' => true,
        'reconstitution_syringe' => true,
        'reconstitution_vaccines' => true,
        'reconstitution_observations' => true,
        'cold_temperature' => true,
        'cold_temperature_deviation' => true,
        'cold_temperature_specify' => true,
        'procedure_followed' => true,
        'other_items' => true,
        'partial_vaccines' => true,
        'unusable_vaccines' => true,
        'unusable_diluents' => true,
        'additional_observations' => true,
        'cold_transportation' => true,
        'vaccine_carrier' => true,
        'coolant_packs' => true,
        'transport_findings' => true,
        'similar_events' => true,
        'similar_events_describe' => true,
        'similar_events_episodes' => true,
        'affected_vaccinated' => true,
        'affected_not_vaccinated' => true,
        'affected_unknown' => true,
        'community_comments' => true,
        'relevant_findings' => true,
        'created' => true,
        'modified' => true,
        'action_date' => true,
        'submitted' => true,
        'resubmit' => true,
        'submitted_date' => true,
        'report_type' => true,
        'status' => true,
        'active' => true,
        'emails' => true,
        'signature' => true,
        'deleted' => true,
        'copied' => true,
        'archived' => true,
        'archived_date' => true,
        'reporter_phone' => true,
        'reporter_date' => true,
        'person_submitting' => true,
        'reporter_name_diff' => true,
        'reporter_designation_diff' => true,
        'reporter_email_diff' => true,
        'reporter_phone_diff' => true,
        'reporter_date_diff' => true,
        'patient_phone' => true,
        'patient_street_name' => true,
        'syringes_used_other_specify' => true,
        'vaccinator_training' => true,
        'description_of_reaction' => true,
        'name_of_person_first_treated' => true,
        'name_of_the_person_treating' => true,
        'other_source_of_info' => true,
        'patient_house_number' => true,
        'time_of_first_symptom' => true,
        'vaccine_name' => true,
        'date_first_reported' => true,
        'date_form_filled' => true,
        'user' => true,
        'saefis' => true,
        'designation' => true,
        'aefi_list_of_vaccines' => true,
        'reviews' => true,
    ];
}
