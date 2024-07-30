<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Saefi $saefi
 * @var \Cake\Collection\CollectionInterface|string[] $users
 * @var \Cake\Collection\CollectionInterface|string[] $designations
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('List Saefis'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="saefis form content">
            <?= $this->Form->create($saefi) ?>
            <fieldset>
                <legend><?= __('Add Saefi') ?></legend>
                <?php
                    echo $this->Form->control('user_id', ['options' => $users, 'empty' => true]);
                    echo $this->Form->control('saefi_id');
                    echo $this->Form->control('initial_id');
                    echo $this->Form->control('messageid');
                    echo $this->Form->control('vigiflow_ref');
                    echo $this->Form->control('vigiflow_date');
                    echo $this->Form->control('webradr_ref');
                    echo $this->Form->control('webradr_date');
                    echo $this->Form->control('province_id');
                    echo $this->Form->control('district');
                    echo $this->Form->control('aefi_report_ref');
                    echo $this->Form->control('name_of_vaccination_site');
                    echo $this->Form->control('reference_no');
                    echo $this->Form->control('assigned_to');
                    echo $this->Form->control('assigned_by');
                    echo $this->Form->control('assigned_date', ['empty' => true]);
                    echo $this->Form->control('place_vaccination');
                    echo $this->Form->control('place_vaccination_other');
                    echo $this->Form->control('site_type');
                    echo $this->Form->control('site_type_other');
                    echo $this->Form->control('vaccination_in');
                    echo $this->Form->control('vaccination_in_other');
                    echo $this->Form->control('reporter_name');
                    echo $this->Form->control('report_date', ['empty' => true]);
                    echo $this->Form->control('start_date', ['empty' => true]);
                    echo $this->Form->control('complete_date', ['empty' => true]);
                    echo $this->Form->control('designation_id', ['options' => $designations, 'empty' => true]);
                    echo $this->Form->control('telephone');
                    echo $this->Form->control('mobile');
                    echo $this->Form->control('reporter_email');
                    echo $this->Form->control('patient_name');
                    echo $this->Form->control('gender');
                    echo $this->Form->control('patient_address');
                    echo $this->Form->control('date_of_birth', ['empty' => true]);
                    echo $this->Form->control('age_at_onset_years');
                    echo $this->Form->control('age_at_onset_months');
                    echo $this->Form->control('age_at_onset_days');
                    echo $this->Form->control('age_group');
                    echo $this->Form->control('symptom_date', ['empty' => true]);
                    echo $this->Form->control('hospitalization_date', ['empty' => true]);
                    echo $this->Form->control('status_on_date');
                    echo $this->Form->control('died_date', ['empty' => true]);
                    echo $this->Form->control('autopsy_done');
                    echo $this->Form->control('autopsy_done_date', ['empty' => true]);
                    echo $this->Form->control('autopsy_planned');
                    echo $this->Form->control('autopsy_planned_date', ['empty' => true]);
                    echo $this->Form->control('past_history');
                    echo $this->Form->control('past_history_remarks');
                    echo $this->Form->control('adverse_event');
                    echo $this->Form->control('adverse_event_remarks');
                    echo $this->Form->control('allergy_history');
                    echo $this->Form->control('allergy_history_remarks');
                    echo $this->Form->control('comorbidity_disorder');
                    echo $this->Form->control('comorbidity_disorder_remarks');
                    echo $this->Form->control('covid_positive');
                    echo $this->Form->control('covid_positive_remarks');
                    echo $this->Form->control('existing_illness');
                    echo $this->Form->control('existing_illness_remarks');
                    echo $this->Form->control('hospitalization_history');
                    echo $this->Form->control('hospitalization_history_remarks');
                    echo $this->Form->control('medication_vaccination');
                    echo $this->Form->control('medication_vaccination_remarks');
                    echo $this->Form->control('faith_healers');
                    echo $this->Form->control('faith_healers_remarks');
                    echo $this->Form->control('family_history');
                    echo $this->Form->control('family_history_remarks');
                    echo $this->Form->control('pregnant');
                    echo $this->Form->control('pregnant_weeks');
                    echo $this->Form->control('breastfeeding');
                    echo $this->Form->control('infant');
                    echo $this->Form->control('birth_weight');
                    echo $this->Form->control('delivery_procedure');
                    echo $this->Form->control('delivery_procedure_specify');
                    echo $this->Form->control('source_examination');
                    echo $this->Form->control('source_documents');
                    echo $this->Form->control('source_verbal');
                    echo $this->Form->control('verbal_source');
                    echo $this->Form->control('source_other');
                    echo $this->Form->control('source_other_specify');
                    echo $this->Form->control('examiner_name');
                    echo $this->Form->control('other_sources');
                    echo $this->Form->control('signs_symptoms');
                    echo $this->Form->control('person_details');
                    echo $this->Form->control('person_designation');
                    echo $this->Form->control('person_date', ['empty' => true]);
                    echo $this->Form->control('medical_care');
                    echo $this->Form->control('not_medical_care');
                    echo $this->Form->control('final_diagnosis');
                    echo $this->Form->control('when_vaccinated');
                    echo $this->Form->control('vaccine_given');
                    echo $this->Form->control('when_vaccinated_specify');
                    echo $this->Form->control('prescribing_error');
                    echo $this->Form->control('prescribing_error_specify');
                    echo $this->Form->control('vaccine_unsterile');
                    echo $this->Form->control('vaccine_unsterile_specify');
                    echo $this->Form->control('vaccine_condition');
                    echo $this->Form->control('vaccine_condition_specify');
                    echo $this->Form->control('vaccine_reconstitution');
                    echo $this->Form->control('vaccine_reconstitution_specify');
                    echo $this->Form->control('vaccine_handling');
                    echo $this->Form->control('vaccine_handling_specify');
                    echo $this->Form->control('vaccine_administered');
                    echo $this->Form->control('vaccine_administered_specify');
                    echo $this->Form->control('vaccinated_vial');
                    echo $this->Form->control('vaccinated_session');
                    echo $this->Form->control('vaccinated_locations');
                    echo $this->Form->control('vaccinated_locations_specify');
                    echo $this->Form->control('vaccinated_cluster');
                    echo $this->Form->control('vaccinated_cluster_number');
                    echo $this->Form->control('vaccinated_cluster_vial');
                    echo $this->Form->control('vaccinated_cluster_vial_number');
                    echo $this->Form->control('syringes_used');
                    echo $this->Form->control('syringes_used_specify');
                    echo $this->Form->control('syringes_used_other');
                    echo $this->Form->control('syringes_used_findings');
                    echo $this->Form->control('injection_dose_route');
                    echo $this->Form->control('injection_time_mentioned');
                    echo $this->Form->control('injection_no_touch');
                    echo $this->Form->control('injection_contraindications');
                    echo $this->Form->control('injection_reported');
                    echo $this->Form->control('injection_vaccines');
                    echo $this->Form->control('injection_vaccines_yes');
                    echo $this->Form->control('injection_observations');
                    echo $this->Form->control('reconstitution_multiple');
                    echo $this->Form->control('reconstitution_different');
                    echo $this->Form->control('reconstitution_vial');
                    echo $this->Form->control('reconstitution_syringe');
                    echo $this->Form->control('reconstitution_vaccines');
                    echo $this->Form->control('reconstitution_observations');
                    echo $this->Form->control('cold_temperature');
                    echo $this->Form->control('cold_temperature_deviation');
                    echo $this->Form->control('cold_temperature_specify');
                    echo $this->Form->control('procedure_followed');
                    echo $this->Form->control('other_items');
                    echo $this->Form->control('partial_vaccines');
                    echo $this->Form->control('unusable_vaccines');
                    echo $this->Form->control('unusable_diluents');
                    echo $this->Form->control('additional_observations');
                    echo $this->Form->control('cold_transportation');
                    echo $this->Form->control('vaccine_carrier');
                    echo $this->Form->control('coolant_packs');
                    echo $this->Form->control('transport_findings');
                    echo $this->Form->control('similar_events');
                    echo $this->Form->control('similar_events_describe');
                    echo $this->Form->control('similar_events_episodes');
                    echo $this->Form->control('affected_vaccinated');
                    echo $this->Form->control('affected_not_vaccinated');
                    echo $this->Form->control('affected_unknown');
                    echo $this->Form->control('community_comments');
                    echo $this->Form->control('relevant_findings');
                    echo $this->Form->control('action_date');
                    echo $this->Form->control('submitted');
                    echo $this->Form->control('resubmit');
                    echo $this->Form->control('submitted_date', ['empty' => true]);
                    echo $this->Form->control('report_type');
                    echo $this->Form->control('status');
                    echo $this->Form->control('active');
                    echo $this->Form->control('emails');
                    echo $this->Form->control('signature');
                    echo $this->Form->control('deleted');
                    echo $this->Form->control('copied');
                    echo $this->Form->control('archived');
                    echo $this->Form->control('archived_date', ['empty' => true]);
                    echo $this->Form->control('reporter_phone');
                    echo $this->Form->control('reporter_date', ['empty' => true]);
                    echo $this->Form->control('person_submitting');
                    echo $this->Form->control('reporter_name_diff');
                    echo $this->Form->control('reporter_designation_diff');
                    echo $this->Form->control('reporter_email_diff');
                    echo $this->Form->control('reporter_phone_diff');
                    echo $this->Form->control('reporter_date_diff');
                    echo $this->Form->control('patient_phone');
                    echo $this->Form->control('patient_street_name');
                    echo $this->Form->control('syringes_used_other_specify');
                    echo $this->Form->control('vaccinator_training');
                    echo $this->Form->control('description_of_reaction');
                    echo $this->Form->control('name_of_person_first_treated');
                    echo $this->Form->control('name_of_the_person_treating');
                    echo $this->Form->control('other_source_of_info');
                    echo $this->Form->control('patient_house_number');
                    echo $this->Form->control('time_of_first_symptom');
                    echo $this->Form->control('vaccine_name');
                    echo $this->Form->control('date_first_reported');
                    echo $this->Form->control('date_form_filled');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
