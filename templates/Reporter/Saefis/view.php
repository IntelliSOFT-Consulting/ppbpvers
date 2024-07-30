<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Saefi $saefi
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Saefi'), ['action' => 'edit', $saefi->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Saefi'), ['action' => 'delete', $saefi->id], ['confirm' => __('Are you sure you want to delete # {0}?', $saefi->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Saefis'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Saefi'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="saefis view content">
            <h3><?= h($saefi->id) ?></h3>
            <table>
                <tr>
                    <th><?= __('User') ?></th>
                    <td><?= $saefi->has('user') ? $this->Html->link($saefi->user->name, ['controller' => 'Users', 'action' => 'view', $saefi->user->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Messageid') ?></th>
                    <td><?= h($saefi->messageid) ?></td>
                </tr>
                <tr>
                    <th><?= __('Vigiflow Ref') ?></th>
                    <td><?= h($saefi->vigiflow_ref) ?></td>
                </tr>
                <tr>
                    <th><?= __('Vigiflow Date') ?></th>
                    <td><?= h($saefi->vigiflow_date) ?></td>
                </tr>
                <tr>
                    <th><?= __('Webradr Ref') ?></th>
                    <td><?= h($saefi->webradr_ref) ?></td>
                </tr>
                <tr>
                    <th><?= __('Webradr Date') ?></th>
                    <td><?= h($saefi->webradr_date) ?></td>
                </tr>
                <tr>
                    <th><?= __('District') ?></th>
                    <td><?= h($saefi->district) ?></td>
                </tr>
                <tr>
                    <th><?= __('Aefi Report Ref') ?></th>
                    <td><?= h($saefi->aefi_report_ref) ?></td>
                </tr>
                <tr>
                    <th><?= __('Name Of Vaccination Site') ?></th>
                    <td><?= h($saefi->name_of_vaccination_site) ?></td>
                </tr>
                <tr>
                    <th><?= __('Reference No') ?></th>
                    <td><?= h($saefi->reference_no) ?></td>
                </tr>
                <tr>
                    <th><?= __('Place Vaccination') ?></th>
                    <td><?= h($saefi->place_vaccination) ?></td>
                </tr>
                <tr>
                    <th><?= __('Place Vaccination Other') ?></th>
                    <td><?= h($saefi->place_vaccination_other) ?></td>
                </tr>
                <tr>
                    <th><?= __('Site Type') ?></th>
                    <td><?= h($saefi->site_type) ?></td>
                </tr>
                <tr>
                    <th><?= __('Site Type Other') ?></th>
                    <td><?= h($saefi->site_type_other) ?></td>
                </tr>
                <tr>
                    <th><?= __('Vaccination In') ?></th>
                    <td><?= h($saefi->vaccination_in) ?></td>
                </tr>
                <tr>
                    <th><?= __('Vaccination In Other') ?></th>
                    <td><?= h($saefi->vaccination_in_other) ?></td>
                </tr>
                <tr>
                    <th><?= __('Reporter Name') ?></th>
                    <td><?= h($saefi->reporter_name) ?></td>
                </tr>
                <tr>
                    <th><?= __('Designation') ?></th>
                    <td><?= $saefi->has('designation') ? $this->Html->link($saefi->designation->name, ['controller' => 'Designations', 'action' => 'view', $saefi->designation->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Telephone') ?></th>
                    <td><?= h($saefi->telephone) ?></td>
                </tr>
                <tr>
                    <th><?= __('Mobile') ?></th>
                    <td><?= h($saefi->mobile) ?></td>
                </tr>
                <tr>
                    <th><?= __('Reporter Email') ?></th>
                    <td><?= h($saefi->reporter_email) ?></td>
                </tr>
                <tr>
                    <th><?= __('Patient Name') ?></th>
                    <td><?= h($saefi->patient_name) ?></td>
                </tr>
                <tr>
                    <th><?= __('Gender') ?></th>
                    <td><?= h($saefi->gender) ?></td>
                </tr>
                <tr>
                    <th><?= __('Patient Address') ?></th>
                    <td><?= h($saefi->patient_address) ?></td>
                </tr>
                <tr>
                    <th><?= __('Age Group') ?></th>
                    <td><?= h($saefi->age_group) ?></td>
                </tr>
                <tr>
                    <th><?= __('Status On Date') ?></th>
                    <td><?= h($saefi->status_on_date) ?></td>
                </tr>
                <tr>
                    <th><?= __('Autopsy Done') ?></th>
                    <td><?= h($saefi->autopsy_done) ?></td>
                </tr>
                <tr>
                    <th><?= __('Autopsy Planned') ?></th>
                    <td><?= h($saefi->autopsy_planned) ?></td>
                </tr>
                <tr>
                    <th><?= __('Past History') ?></th>
                    <td><?= h($saefi->past_history) ?></td>
                </tr>
                <tr>
                    <th><?= __('Adverse Event') ?></th>
                    <td><?= h($saefi->adverse_event) ?></td>
                </tr>
                <tr>
                    <th><?= __('Allergy History') ?></th>
                    <td><?= h($saefi->allergy_history) ?></td>
                </tr>
                <tr>
                    <th><?= __('Comorbidity Disorder') ?></th>
                    <td><?= h($saefi->comorbidity_disorder) ?></td>
                </tr>
                <tr>
                    <th><?= __('Covid Positive') ?></th>
                    <td><?= h($saefi->covid_positive) ?></td>
                </tr>
                <tr>
                    <th><?= __('Existing Illness') ?></th>
                    <td><?= h($saefi->existing_illness) ?></td>
                </tr>
                <tr>
                    <th><?= __('Hospitalization History') ?></th>
                    <td><?= h($saefi->hospitalization_history) ?></td>
                </tr>
                <tr>
                    <th><?= __('Medication Vaccination') ?></th>
                    <td><?= h($saefi->medication_vaccination) ?></td>
                </tr>
                <tr>
                    <th><?= __('Faith Healers') ?></th>
                    <td><?= h($saefi->faith_healers) ?></td>
                </tr>
                <tr>
                    <th><?= __('Family History') ?></th>
                    <td><?= h($saefi->family_history) ?></td>
                </tr>
                <tr>
                    <th><?= __('Pregnant') ?></th>
                    <td><?= h($saefi->pregnant) ?></td>
                </tr>
                <tr>
                    <th><?= __('Pregnant Weeks') ?></th>
                    <td><?= h($saefi->pregnant_weeks) ?></td>
                </tr>
                <tr>
                    <th><?= __('Breastfeeding') ?></th>
                    <td><?= h($saefi->breastfeeding) ?></td>
                </tr>
                <tr>
                    <th><?= __('Infant') ?></th>
                    <td><?= h($saefi->infant) ?></td>
                </tr>
                <tr>
                    <th><?= __('Delivery Procedure') ?></th>
                    <td><?= h($saefi->delivery_procedure) ?></td>
                </tr>
                <tr>
                    <th><?= __('Examiner Name') ?></th>
                    <td><?= h($saefi->examiner_name) ?></td>
                </tr>
                <tr>
                    <th><?= __('Person Details') ?></th>
                    <td><?= h($saefi->person_details) ?></td>
                </tr>
                <tr>
                    <th><?= __('Person Designation') ?></th>
                    <td><?= h($saefi->person_designation) ?></td>
                </tr>
                <tr>
                    <th><?= __('When Vaccinated') ?></th>
                    <td><?= h($saefi->when_vaccinated) ?></td>
                </tr>
                <tr>
                    <th><?= __('Vaccine Given') ?></th>
                    <td><?= h($saefi->vaccine_given) ?></td>
                </tr>
                <tr>
                    <th><?= __('Prescribing Error') ?></th>
                    <td><?= h($saefi->prescribing_error) ?></td>
                </tr>
                <tr>
                    <th><?= __('Vaccine Unsterile') ?></th>
                    <td><?= h($saefi->vaccine_unsterile) ?></td>
                </tr>
                <tr>
                    <th><?= __('Vaccine Condition') ?></th>
                    <td><?= h($saefi->vaccine_condition) ?></td>
                </tr>
                <tr>
                    <th><?= __('Vaccine Reconstitution') ?></th>
                    <td><?= h($saefi->vaccine_reconstitution) ?></td>
                </tr>
                <tr>
                    <th><?= __('Vaccine Handling') ?></th>
                    <td><?= h($saefi->vaccine_handling) ?></td>
                </tr>
                <tr>
                    <th><?= __('Vaccine Administered') ?></th>
                    <td><?= h($saefi->vaccine_administered) ?></td>
                </tr>
                <tr>
                    <th><?= __('Vaccinated Cluster') ?></th>
                    <td><?= h($saefi->vaccinated_cluster) ?></td>
                </tr>
                <tr>
                    <th><?= __('Vaccinated Cluster Vial') ?></th>
                    <td><?= h($saefi->vaccinated_cluster_vial) ?></td>
                </tr>
                <tr>
                    <th><?= __('Syringes Used') ?></th>
                    <td><?= h($saefi->syringes_used) ?></td>
                </tr>
                <tr>
                    <th><?= __('Syringes Used Specify') ?></th>
                    <td><?= h($saefi->syringes_used_specify) ?></td>
                </tr>
                <tr>
                    <th><?= __('Syringes Used Other') ?></th>
                    <td><?= h($saefi->syringes_used_other) ?></td>
                </tr>
                <tr>
                    <th><?= __('Injection Dose Route') ?></th>
                    <td><?= h($saefi->injection_dose_route) ?></td>
                </tr>
                <tr>
                    <th><?= __('Injection Time Mentioned') ?></th>
                    <td><?= h($saefi->injection_time_mentioned) ?></td>
                </tr>
                <tr>
                    <th><?= __('Injection No Touch') ?></th>
                    <td><?= h($saefi->injection_no_touch) ?></td>
                </tr>
                <tr>
                    <th><?= __('Injection Contraindications') ?></th>
                    <td><?= h($saefi->injection_contraindications) ?></td>
                </tr>
                <tr>
                    <th><?= __('Injection Reported') ?></th>
                    <td><?= h($saefi->injection_reported) ?></td>
                </tr>
                <tr>
                    <th><?= __('Injection Vaccines') ?></th>
                    <td><?= h($saefi->injection_vaccines) ?></td>
                </tr>
                <tr>
                    <th><?= __('Injection Vaccines Yes') ?></th>
                    <td><?= h($saefi->injection_vaccines_yes) ?></td>
                </tr>
                <tr>
                    <th><?= __('Reconstitution Multiple') ?></th>
                    <td><?= h($saefi->reconstitution_multiple) ?></td>
                </tr>
                <tr>
                    <th><?= __('Reconstitution Different') ?></th>
                    <td><?= h($saefi->reconstitution_different) ?></td>
                </tr>
                <tr>
                    <th><?= __('Reconstitution Vial') ?></th>
                    <td><?= h($saefi->reconstitution_vial) ?></td>
                </tr>
                <tr>
                    <th><?= __('Reconstitution Syringe') ?></th>
                    <td><?= h($saefi->reconstitution_syringe) ?></td>
                </tr>
                <tr>
                    <th><?= __('Reconstitution Vaccines') ?></th>
                    <td><?= h($saefi->reconstitution_vaccines) ?></td>
                </tr>
                <tr>
                    <th><?= __('Cold Temperature') ?></th>
                    <td><?= h($saefi->cold_temperature) ?></td>
                </tr>
                <tr>
                    <th><?= __('Cold Temperature Deviation') ?></th>
                    <td><?= h($saefi->cold_temperature_deviation) ?></td>
                </tr>
                <tr>
                    <th><?= __('Procedure Followed') ?></th>
                    <td><?= h($saefi->procedure_followed) ?></td>
                </tr>
                <tr>
                    <th><?= __('Other Items') ?></th>
                    <td><?= h($saefi->other_items) ?></td>
                </tr>
                <tr>
                    <th><?= __('Partial Vaccines') ?></th>
                    <td><?= h($saefi->partial_vaccines) ?></td>
                </tr>
                <tr>
                    <th><?= __('Unusable Vaccines') ?></th>
                    <td><?= h($saefi->unusable_vaccines) ?></td>
                </tr>
                <tr>
                    <th><?= __('Unusable Diluents') ?></th>
                    <td><?= h($saefi->unusable_diluents) ?></td>
                </tr>
                <tr>
                    <th><?= __('Cold Transportation') ?></th>
                    <td><?= h($saefi->cold_transportation) ?></td>
                </tr>
                <tr>
                    <th><?= __('Vaccine Carrier') ?></th>
                    <td><?= h($saefi->vaccine_carrier) ?></td>
                </tr>
                <tr>
                    <th><?= __('Coolant Packs') ?></th>
                    <td><?= h($saefi->coolant_packs) ?></td>
                </tr>
                <tr>
                    <th><?= __('Similar Events') ?></th>
                    <td><?= h($saefi->similar_events) ?></td>
                </tr>
                <tr>
                    <th><?= __('Affected Unknown') ?></th>
                    <td><?= h($saefi->affected_unknown) ?></td>
                </tr>
                <tr>
                    <th><?= __('Resubmit') ?></th>
                    <td><?= h($saefi->resubmit) ?></td>
                </tr>
                <tr>
                    <th><?= __('Report Type') ?></th>
                    <td><?= h($saefi->report_type) ?></td>
                </tr>
                <tr>
                    <th><?= __('Status') ?></th>
                    <td><?= h($saefi->status) ?></td>
                </tr>
                <tr>
                    <th><?= __('Reporter Phone') ?></th>
                    <td><?= h($saefi->reporter_phone) ?></td>
                </tr>
                <tr>
                    <th><?= __('Person Submitting') ?></th>
                    <td><?= h($saefi->person_submitting) ?></td>
                </tr>
                <tr>
                    <th><?= __('Reporter Name Diff') ?></th>
                    <td><?= h($saefi->reporter_name_diff) ?></td>
                </tr>
                <tr>
                    <th><?= __('Reporter Designation Diff') ?></th>
                    <td><?= h($saefi->reporter_designation_diff) ?></td>
                </tr>
                <tr>
                    <th><?= __('Reporter Email Diff') ?></th>
                    <td><?= h($saefi->reporter_email_diff) ?></td>
                </tr>
                <tr>
                    <th><?= __('Reporter Phone Diff') ?></th>
                    <td><?= h($saefi->reporter_phone_diff) ?></td>
                </tr>
                <tr>
                    <th><?= __('Reporter Date Diff') ?></th>
                    <td><?= h($saefi->reporter_date_diff) ?></td>
                </tr>
                <tr>
                    <th><?= __('Patient Phone') ?></th>
                    <td><?= h($saefi->patient_phone) ?></td>
                </tr>
                <tr>
                    <th><?= __('Patient Street Name') ?></th>
                    <td><?= h($saefi->patient_street_name) ?></td>
                </tr>
                <tr>
                    <th><?= __('Syringes Used Other Specify') ?></th>
                    <td><?= h($saefi->syringes_used_other_specify) ?></td>
                </tr>
                <tr>
                    <th><?= __('Vaccinator Training') ?></th>
                    <td><?= h($saefi->vaccinator_training) ?></td>
                </tr>
                <tr>
                    <th><?= __('Description Of Reaction') ?></th>
                    <td><?= h($saefi->description_of_reaction) ?></td>
                </tr>
                <tr>
                    <th><?= __('Name Of Person First Treated') ?></th>
                    <td><?= h($saefi->name_of_person_first_treated) ?></td>
                </tr>
                <tr>
                    <th><?= __('Name Of The Person Treating') ?></th>
                    <td><?= h($saefi->name_of_the_person_treating) ?></td>
                </tr>
                <tr>
                    <th><?= __('Other Source Of Info') ?></th>
                    <td><?= h($saefi->other_source_of_info) ?></td>
                </tr>
                <tr>
                    <th><?= __('Patient House Number') ?></th>
                    <td><?= h($saefi->patient_house_number) ?></td>
                </tr>
                <tr>
                    <th><?= __('Time Of First Symptom') ?></th>
                    <td><?= h($saefi->time_of_first_symptom) ?></td>
                </tr>
                <tr>
                    <th><?= __('Vaccine Name') ?></th>
                    <td><?= h($saefi->vaccine_name) ?></td>
                </tr>
                <tr>
                    <th><?= __('Date First Reported') ?></th>
                    <td><?= h($saefi->date_first_reported) ?></td>
                </tr>
                <tr>
                    <th><?= __('Date Form Filled') ?></th>
                    <td><?= h($saefi->date_form_filled) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($saefi->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Saefi Id') ?></th>
                    <td><?= $saefi->saefi_id === null ? '' : $this->Number->format($saefi->saefi_id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Initial Id') ?></th>
                    <td><?= $saefi->initial_id === null ? '' : $this->Number->format($saefi->initial_id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Province Id') ?></th>
                    <td><?= $saefi->province_id === null ? '' : $this->Number->format($saefi->province_id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Assigned To') ?></th>
                    <td><?= $saefi->assigned_to === null ? '' : $this->Number->format($saefi->assigned_to) ?></td>
                </tr>
                <tr>
                    <th><?= __('Assigned By') ?></th>
                    <td><?= $saefi->assigned_by === null ? '' : $this->Number->format($saefi->assigned_by) ?></td>
                </tr>
                <tr>
                    <th><?= __('Age At Onset Years') ?></th>
                    <td><?= $saefi->age_at_onset_years === null ? '' : $this->Number->format($saefi->age_at_onset_years) ?></td>
                </tr>
                <tr>
                    <th><?= __('Age At Onset Months') ?></th>
                    <td><?= $saefi->age_at_onset_months === null ? '' : $this->Number->format($saefi->age_at_onset_months) ?></td>
                </tr>
                <tr>
                    <th><?= __('Age At Onset Days') ?></th>
                    <td><?= $saefi->age_at_onset_days === null ? '' : $this->Number->format($saefi->age_at_onset_days) ?></td>
                </tr>
                <tr>
                    <th><?= __('Birth Weight') ?></th>
                    <td><?= $saefi->birth_weight === null ? '' : $this->Number->format($saefi->birth_weight) ?></td>
                </tr>
                <tr>
                    <th><?= __('Vaccinated Vial') ?></th>
                    <td><?= $saefi->vaccinated_vial === null ? '' : $this->Number->format($saefi->vaccinated_vial) ?></td>
                </tr>
                <tr>
                    <th><?= __('Vaccinated Session') ?></th>
                    <td><?= $saefi->vaccinated_session === null ? '' : $this->Number->format($saefi->vaccinated_session) ?></td>
                </tr>
                <tr>
                    <th><?= __('Vaccinated Locations') ?></th>
                    <td><?= $saefi->vaccinated_locations === null ? '' : $this->Number->format($saefi->vaccinated_locations) ?></td>
                </tr>
                <tr>
                    <th><?= __('Vaccinated Cluster Number') ?></th>
                    <td><?= $saefi->vaccinated_cluster_number === null ? '' : $this->Number->format($saefi->vaccinated_cluster_number) ?></td>
                </tr>
                <tr>
                    <th><?= __('Vaccinated Cluster Vial Number') ?></th>
                    <td><?= $saefi->vaccinated_cluster_vial_number === null ? '' : $this->Number->format($saefi->vaccinated_cluster_vial_number) ?></td>
                </tr>
                <tr>
                    <th><?= __('Similar Events Episodes') ?></th>
                    <td><?= $saefi->similar_events_episodes === null ? '' : $this->Number->format($saefi->similar_events_episodes) ?></td>
                </tr>
                <tr>
                    <th><?= __('Affected Vaccinated') ?></th>
                    <td><?= $saefi->affected_vaccinated === null ? '' : $this->Number->format($saefi->affected_vaccinated) ?></td>
                </tr>
                <tr>
                    <th><?= __('Affected Not Vaccinated') ?></th>
                    <td><?= $saefi->affected_not_vaccinated === null ? '' : $this->Number->format($saefi->affected_not_vaccinated) ?></td>
                </tr>
                <tr>
                    <th><?= __('Submitted') ?></th>
                    <td><?= $this->Number->format($saefi->submitted) ?></td>
                </tr>
                <tr>
                    <th><?= __('Active') ?></th>
                    <td><?= $saefi->active === null ? '' : $this->Number->format($saefi->active) ?></td>
                </tr>
                <tr>
                    <th><?= __('Emails') ?></th>
                    <td><?= $saefi->emails === null ? '' : $this->Number->format($saefi->emails) ?></td>
                </tr>
                <tr>
                    <th><?= __('Deleted') ?></th>
                    <td><?= $saefi->deleted === null ? '' : $this->Number->format($saefi->deleted) ?></td>
                </tr>
                <tr>
                    <th><?= __('Copied') ?></th>
                    <td><?= $saefi->copied === null ? '' : $this->Number->format($saefi->copied) ?></td>
                </tr>
                <tr>
                    <th><?= __('Archived') ?></th>
                    <td><?= $saefi->archived === null ? '' : $this->Number->format($saefi->archived) ?></td>
                </tr>
                <tr>
                    <th><?= __('Assigned Date') ?></th>
                    <td><?= h($saefi->assigned_date) ?></td>
                </tr>
                <tr>
                    <th><?= __('Report Date') ?></th>
                    <td><?= h($saefi->report_date) ?></td>
                </tr>
                <tr>
                    <th><?= __('Start Date') ?></th>
                    <td><?= h($saefi->start_date) ?></td>
                </tr>
                <tr>
                    <th><?= __('Complete Date') ?></th>
                    <td><?= h($saefi->complete_date) ?></td>
                </tr>
                <tr>
                    <th><?= __('Date Of Birth') ?></th>
                    <td><?= h($saefi->date_of_birth) ?></td>
                </tr>
                <tr>
                    <th><?= __('Symptom Date') ?></th>
                    <td><?= h($saefi->symptom_date) ?></td>
                </tr>
                <tr>
                    <th><?= __('Hospitalization Date') ?></th>
                    <td><?= h($saefi->hospitalization_date) ?></td>
                </tr>
                <tr>
                    <th><?= __('Died Date') ?></th>
                    <td><?= h($saefi->died_date) ?></td>
                </tr>
                <tr>
                    <th><?= __('Autopsy Done Date') ?></th>
                    <td><?= h($saefi->autopsy_done_date) ?></td>
                </tr>
                <tr>
                    <th><?= __('Autopsy Planned Date') ?></th>
                    <td><?= h($saefi->autopsy_planned_date) ?></td>
                </tr>
                <tr>
                    <th><?= __('Person Date') ?></th>
                    <td><?= h($saefi->person_date) ?></td>
                </tr>
                <tr>
                    <th><?= __('Created') ?></th>
                    <td><?= h($saefi->created) ?></td>
                </tr>
                <tr>
                    <th><?= __('Modified') ?></th>
                    <td><?= h($saefi->modified) ?></td>
                </tr>
                <tr>
                    <th><?= __('Action Date') ?></th>
                    <td><?= h($saefi->action_date) ?></td>
                </tr>
                <tr>
                    <th><?= __('Submitted Date') ?></th>
                    <td><?= h($saefi->submitted_date) ?></td>
                </tr>
                <tr>
                    <th><?= __('Archived Date') ?></th>
                    <td><?= h($saefi->archived_date) ?></td>
                </tr>
                <tr>
                    <th><?= __('Reporter Date') ?></th>
                    <td><?= h($saefi->reporter_date) ?></td>
                </tr>
                <tr>
                    <th><?= __('Source Examination') ?></th>
                    <td><?= $saefi->source_examination ? __('Yes') : __('No'); ?></td>
                </tr>
                <tr>
                    <th><?= __('Source Documents') ?></th>
                    <td><?= $saefi->source_documents ? __('Yes') : __('No'); ?></td>
                </tr>
                <tr>
                    <th><?= __('Source Verbal') ?></th>
                    <td><?= $saefi->source_verbal ? __('Yes') : __('No'); ?></td>
                </tr>
                <tr>
                    <th><?= __('Source Other') ?></th>
                    <td><?= $saefi->source_other ? __('Yes') : __('No'); ?></td>
                </tr>
                <tr>
                    <th><?= __('Signature') ?></th>
                    <td><?= $saefi->signature ? __('Yes') : __('No'); ?></td>
                </tr>
            </table>
            <div class="text">
                <strong><?= __('Past History Remarks') ?></strong>
                <blockquote>
                    <?= $this->Text->autoParagraph(h($saefi->past_history_remarks)); ?>
                </blockquote>
            </div>
            <div class="text">
                <strong><?= __('Adverse Event Remarks') ?></strong>
                <blockquote>
                    <?= $this->Text->autoParagraph(h($saefi->adverse_event_remarks)); ?>
                </blockquote>
            </div>
            <div class="text">
                <strong><?= __('Allergy History Remarks') ?></strong>
                <blockquote>
                    <?= $this->Text->autoParagraph(h($saefi->allergy_history_remarks)); ?>
                </blockquote>
            </div>
            <div class="text">
                <strong><?= __('Comorbidity Disorder Remarks') ?></strong>
                <blockquote>
                    <?= $this->Text->autoParagraph(h($saefi->comorbidity_disorder_remarks)); ?>
                </blockquote>
            </div>
            <div class="text">
                <strong><?= __('Covid Positive Remarks') ?></strong>
                <blockquote>
                    <?= $this->Text->autoParagraph(h($saefi->covid_positive_remarks)); ?>
                </blockquote>
            </div>
            <div class="text">
                <strong><?= __('Existing Illness Remarks') ?></strong>
                <blockquote>
                    <?= $this->Text->autoParagraph(h($saefi->existing_illness_remarks)); ?>
                </blockquote>
            </div>
            <div class="text">
                <strong><?= __('Hospitalization History Remarks') ?></strong>
                <blockquote>
                    <?= $this->Text->autoParagraph(h($saefi->hospitalization_history_remarks)); ?>
                </blockquote>
            </div>
            <div class="text">
                <strong><?= __('Medication Vaccination Remarks') ?></strong>
                <blockquote>
                    <?= $this->Text->autoParagraph(h($saefi->medication_vaccination_remarks)); ?>
                </blockquote>
            </div>
            <div class="text">
                <strong><?= __('Faith Healers Remarks') ?></strong>
                <blockquote>
                    <?= $this->Text->autoParagraph(h($saefi->faith_healers_remarks)); ?>
                </blockquote>
            </div>
            <div class="text">
                <strong><?= __('Family History Remarks') ?></strong>
                <blockquote>
                    <?= $this->Text->autoParagraph(h($saefi->family_history_remarks)); ?>
                </blockquote>
            </div>
            <div class="text">
                <strong><?= __('Delivery Procedure Specify') ?></strong>
                <blockquote>
                    <?= $this->Text->autoParagraph(h($saefi->delivery_procedure_specify)); ?>
                </blockquote>
            </div>
            <div class="text">
                <strong><?= __('Verbal Source') ?></strong>
                <blockquote>
                    <?= $this->Text->autoParagraph(h($saefi->verbal_source)); ?>
                </blockquote>
            </div>
            <div class="text">
                <strong><?= __('Source Other Specify') ?></strong>
                <blockquote>
                    <?= $this->Text->autoParagraph(h($saefi->source_other_specify)); ?>
                </blockquote>
            </div>
            <div class="text">
                <strong><?= __('Other Sources') ?></strong>
                <blockquote>
                    <?= $this->Text->autoParagraph(h($saefi->other_sources)); ?>
                </blockquote>
            </div>
            <div class="text">
                <strong><?= __('Signs Symptoms') ?></strong>
                <blockquote>
                    <?= $this->Text->autoParagraph(h($saefi->signs_symptoms)); ?>
                </blockquote>
            </div>
            <div class="text">
                <strong><?= __('Medical Care') ?></strong>
                <blockquote>
                    <?= $this->Text->autoParagraph(h($saefi->medical_care)); ?>
                </blockquote>
            </div>
            <div class="text">
                <strong><?= __('Not Medical Care') ?></strong>
                <blockquote>
                    <?= $this->Text->autoParagraph(h($saefi->not_medical_care)); ?>
                </blockquote>
            </div>
            <div class="text">
                <strong><?= __('Final Diagnosis') ?></strong>
                <blockquote>
                    <?= $this->Text->autoParagraph(h($saefi->final_diagnosis)); ?>
                </blockquote>
            </div>
            <div class="text">
                <strong><?= __('When Vaccinated Specify') ?></strong>
                <blockquote>
                    <?= $this->Text->autoParagraph(h($saefi->when_vaccinated_specify)); ?>
                </blockquote>
            </div>
            <div class="text">
                <strong><?= __('Prescribing Error Specify') ?></strong>
                <blockquote>
                    <?= $this->Text->autoParagraph(h($saefi->prescribing_error_specify)); ?>
                </blockquote>
            </div>
            <div class="text">
                <strong><?= __('Vaccine Unsterile Specify') ?></strong>
                <blockquote>
                    <?= $this->Text->autoParagraph(h($saefi->vaccine_unsterile_specify)); ?>
                </blockquote>
            </div>
            <div class="text">
                <strong><?= __('Vaccine Condition Specify') ?></strong>
                <blockquote>
                    <?= $this->Text->autoParagraph(h($saefi->vaccine_condition_specify)); ?>
                </blockquote>
            </div>
            <div class="text">
                <strong><?= __('Vaccine Reconstitution Specify') ?></strong>
                <blockquote>
                    <?= $this->Text->autoParagraph(h($saefi->vaccine_reconstitution_specify)); ?>
                </blockquote>
            </div>
            <div class="text">
                <strong><?= __('Vaccine Handling Specify') ?></strong>
                <blockquote>
                    <?= $this->Text->autoParagraph(h($saefi->vaccine_handling_specify)); ?>
                </blockquote>
            </div>
            <div class="text">
                <strong><?= __('Vaccine Administered Specify') ?></strong>
                <blockquote>
                    <?= $this->Text->autoParagraph(h($saefi->vaccine_administered_specify)); ?>
                </blockquote>
            </div>
            <div class="text">
                <strong><?= __('Vaccinated Locations Specify') ?></strong>
                <blockquote>
                    <?= $this->Text->autoParagraph(h($saefi->vaccinated_locations_specify)); ?>
                </blockquote>
            </div>
            <div class="text">
                <strong><?= __('Syringes Used Findings') ?></strong>
                <blockquote>
                    <?= $this->Text->autoParagraph(h($saefi->syringes_used_findings)); ?>
                </blockquote>
            </div>
            <div class="text">
                <strong><?= __('Injection Observations') ?></strong>
                <blockquote>
                    <?= $this->Text->autoParagraph(h($saefi->injection_observations)); ?>
                </blockquote>
            </div>
            <div class="text">
                <strong><?= __('Reconstitution Observations') ?></strong>
                <blockquote>
                    <?= $this->Text->autoParagraph(h($saefi->reconstitution_observations)); ?>
                </blockquote>
            </div>
            <div class="text">
                <strong><?= __('Cold Temperature Specify') ?></strong>
                <blockquote>
                    <?= $this->Text->autoParagraph(h($saefi->cold_temperature_specify)); ?>
                </blockquote>
            </div>
            <div class="text">
                <strong><?= __('Additional Observations') ?></strong>
                <blockquote>
                    <?= $this->Text->autoParagraph(h($saefi->additional_observations)); ?>
                </blockquote>
            </div>
            <div class="text">
                <strong><?= __('Transport Findings') ?></strong>
                <blockquote>
                    <?= $this->Text->autoParagraph(h($saefi->transport_findings)); ?>
                </blockquote>
            </div>
            <div class="text">
                <strong><?= __('Similar Events Describe') ?></strong>
                <blockquote>
                    <?= $this->Text->autoParagraph(h($saefi->similar_events_describe)); ?>
                </blockquote>
            </div>
            <div class="text">
                <strong><?= __('Community Comments') ?></strong>
                <blockquote>
                    <?= $this->Text->autoParagraph(h($saefi->community_comments)); ?>
                </blockquote>
            </div>
            <div class="text">
                <strong><?= __('Relevant Findings') ?></strong>
                <blockquote>
                    <?= $this->Text->autoParagraph(h($saefi->relevant_findings)); ?>
                </blockquote>
            </div>
            <div class="related">
                <h4><?= __('Related Saefis') ?></h4>
                <?php if (!empty($saefi->saefis)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Id') ?></th>
                            <th><?= __('User Id') ?></th>
                            <th><?= __('Saefi Id') ?></th>
                            <th><?= __('Initial Id') ?></th>
                            <th><?= __('Messageid') ?></th>
                            <th><?= __('Vigiflow Ref') ?></th>
                            <th><?= __('Vigiflow Date') ?></th>
                            <th><?= __('Webradr Ref') ?></th>
                            <th><?= __('Webradr Date') ?></th>
                            <th><?= __('Province Id') ?></th>
                            <th><?= __('District') ?></th>
                            <th><?= __('Aefi Report Ref') ?></th>
                            <th><?= __('Name Of Vaccination Site') ?></th>
                            <th><?= __('Reference No') ?></th>
                            <th><?= __('Assigned To') ?></th>
                            <th><?= __('Assigned By') ?></th>
                            <th><?= __('Assigned Date') ?></th>
                            <th><?= __('Place Vaccination') ?></th>
                            <th><?= __('Place Vaccination Other') ?></th>
                            <th><?= __('Site Type') ?></th>
                            <th><?= __('Site Type Other') ?></th>
                            <th><?= __('Vaccination In') ?></th>
                            <th><?= __('Vaccination In Other') ?></th>
                            <th><?= __('Reporter Name') ?></th>
                            <th><?= __('Report Date') ?></th>
                            <th><?= __('Start Date') ?></th>
                            <th><?= __('Complete Date') ?></th>
                            <th><?= __('Designation Id') ?></th>
                            <th><?= __('Telephone') ?></th>
                            <th><?= __('Mobile') ?></th>
                            <th><?= __('Reporter Email') ?></th>
                            <th><?= __('Patient Name') ?></th>
                            <th><?= __('Gender') ?></th>
                            <th><?= __('Patient Address') ?></th>
                            <th><?= __('Date Of Birth') ?></th>
                            <th><?= __('Age At Onset Years') ?></th>
                            <th><?= __('Age At Onset Months') ?></th>
                            <th><?= __('Age At Onset Days') ?></th>
                            <th><?= __('Age Group') ?></th>
                            <th><?= __('Symptom Date') ?></th>
                            <th><?= __('Hospitalization Date') ?></th>
                            <th><?= __('Status On Date') ?></th>
                            <th><?= __('Died Date') ?></th>
                            <th><?= __('Autopsy Done') ?></th>
                            <th><?= __('Autopsy Done Date') ?></th>
                            <th><?= __('Autopsy Planned') ?></th>
                            <th><?= __('Autopsy Planned Date') ?></th>
                            <th><?= __('Past History') ?></th>
                            <th><?= __('Past History Remarks') ?></th>
                            <th><?= __('Adverse Event') ?></th>
                            <th><?= __('Adverse Event Remarks') ?></th>
                            <th><?= __('Allergy History') ?></th>
                            <th><?= __('Allergy History Remarks') ?></th>
                            <th><?= __('Comorbidity Disorder') ?></th>
                            <th><?= __('Comorbidity Disorder Remarks') ?></th>
                            <th><?= __('Covid Positive') ?></th>
                            <th><?= __('Covid Positive Remarks') ?></th>
                            <th><?= __('Existing Illness') ?></th>
                            <th><?= __('Existing Illness Remarks') ?></th>
                            <th><?= __('Hospitalization History') ?></th>
                            <th><?= __('Hospitalization History Remarks') ?></th>
                            <th><?= __('Medication Vaccination') ?></th>
                            <th><?= __('Medication Vaccination Remarks') ?></th>
                            <th><?= __('Faith Healers') ?></th>
                            <th><?= __('Faith Healers Remarks') ?></th>
                            <th><?= __('Family History') ?></th>
                            <th><?= __('Family History Remarks') ?></th>
                            <th><?= __('Pregnant') ?></th>
                            <th><?= __('Pregnant Weeks') ?></th>
                            <th><?= __('Breastfeeding') ?></th>
                            <th><?= __('Infant') ?></th>
                            <th><?= __('Birth Weight') ?></th>
                            <th><?= __('Delivery Procedure') ?></th>
                            <th><?= __('Delivery Procedure Specify') ?></th>
                            <th><?= __('Source Examination') ?></th>
                            <th><?= __('Source Documents') ?></th>
                            <th><?= __('Source Verbal') ?></th>
                            <th><?= __('Verbal Source') ?></th>
                            <th><?= __('Source Other') ?></th>
                            <th><?= __('Source Other Specify') ?></th>
                            <th><?= __('Examiner Name') ?></th>
                            <th><?= __('Other Sources') ?></th>
                            <th><?= __('Signs Symptoms') ?></th>
                            <th><?= __('Person Details') ?></th>
                            <th><?= __('Person Designation') ?></th>
                            <th><?= __('Person Date') ?></th>
                            <th><?= __('Medical Care') ?></th>
                            <th><?= __('Not Medical Care') ?></th>
                            <th><?= __('Final Diagnosis') ?></th>
                            <th><?= __('When Vaccinated') ?></th>
                            <th><?= __('Vaccine Given') ?></th>
                            <th><?= __('When Vaccinated Specify') ?></th>
                            <th><?= __('Prescribing Error') ?></th>
                            <th><?= __('Prescribing Error Specify') ?></th>
                            <th><?= __('Vaccine Unsterile') ?></th>
                            <th><?= __('Vaccine Unsterile Specify') ?></th>
                            <th><?= __('Vaccine Condition') ?></th>
                            <th><?= __('Vaccine Condition Specify') ?></th>
                            <th><?= __('Vaccine Reconstitution') ?></th>
                            <th><?= __('Vaccine Reconstitution Specify') ?></th>
                            <th><?= __('Vaccine Handling') ?></th>
                            <th><?= __('Vaccine Handling Specify') ?></th>
                            <th><?= __('Vaccine Administered') ?></th>
                            <th><?= __('Vaccine Administered Specify') ?></th>
                            <th><?= __('Vaccinated Vial') ?></th>
                            <th><?= __('Vaccinated Session') ?></th>
                            <th><?= __('Vaccinated Locations') ?></th>
                            <th><?= __('Vaccinated Locations Specify') ?></th>
                            <th><?= __('Vaccinated Cluster') ?></th>
                            <th><?= __('Vaccinated Cluster Number') ?></th>
                            <th><?= __('Vaccinated Cluster Vial') ?></th>
                            <th><?= __('Vaccinated Cluster Vial Number') ?></th>
                            <th><?= __('Syringes Used') ?></th>
                            <th><?= __('Syringes Used Specify') ?></th>
                            <th><?= __('Syringes Used Other') ?></th>
                            <th><?= __('Syringes Used Findings') ?></th>
                            <th><?= __('Injection Dose Route') ?></th>
                            <th><?= __('Injection Time Mentioned') ?></th>
                            <th><?= __('Injection No Touch') ?></th>
                            <th><?= __('Injection Contraindications') ?></th>
                            <th><?= __('Injection Reported') ?></th>
                            <th><?= __('Injection Vaccines') ?></th>
                            <th><?= __('Injection Vaccines Yes') ?></th>
                            <th><?= __('Injection Observations') ?></th>
                            <th><?= __('Reconstitution Multiple') ?></th>
                            <th><?= __('Reconstitution Different') ?></th>
                            <th><?= __('Reconstitution Vial') ?></th>
                            <th><?= __('Reconstitution Syringe') ?></th>
                            <th><?= __('Reconstitution Vaccines') ?></th>
                            <th><?= __('Reconstitution Observations') ?></th>
                            <th><?= __('Cold Temperature') ?></th>
                            <th><?= __('Cold Temperature Deviation') ?></th>
                            <th><?= __('Cold Temperature Specify') ?></th>
                            <th><?= __('Procedure Followed') ?></th>
                            <th><?= __('Other Items') ?></th>
                            <th><?= __('Partial Vaccines') ?></th>
                            <th><?= __('Unusable Vaccines') ?></th>
                            <th><?= __('Unusable Diluents') ?></th>
                            <th><?= __('Additional Observations') ?></th>
                            <th><?= __('Cold Transportation') ?></th>
                            <th><?= __('Vaccine Carrier') ?></th>
                            <th><?= __('Coolant Packs') ?></th>
                            <th><?= __('Transport Findings') ?></th>
                            <th><?= __('Similar Events') ?></th>
                            <th><?= __('Similar Events Describe') ?></th>
                            <th><?= __('Similar Events Episodes') ?></th>
                            <th><?= __('Affected Vaccinated') ?></th>
                            <th><?= __('Affected Not Vaccinated') ?></th>
                            <th><?= __('Affected Unknown') ?></th>
                            <th><?= __('Community Comments') ?></th>
                            <th><?= __('Relevant Findings') ?></th>
                            <th><?= __('Created') ?></th>
                            <th><?= __('Modified') ?></th>
                            <th><?= __('Action Date') ?></th>
                            <th><?= __('Submitted') ?></th>
                            <th><?= __('Resubmit') ?></th>
                            <th><?= __('Submitted Date') ?></th>
                            <th><?= __('Report Type') ?></th>
                            <th><?= __('Status') ?></th>
                            <th><?= __('Active') ?></th>
                            <th><?= __('Emails') ?></th>
                            <th><?= __('Signature') ?></th>
                            <th><?= __('Deleted') ?></th>
                            <th><?= __('Copied') ?></th>
                            <th><?= __('Archived') ?></th>
                            <th><?= __('Archived Date') ?></th>
                            <th><?= __('Reporter Phone') ?></th>
                            <th><?= __('Reporter Date') ?></th>
                            <th><?= __('Person Submitting') ?></th>
                            <th><?= __('Reporter Name Diff') ?></th>
                            <th><?= __('Reporter Designation Diff') ?></th>
                            <th><?= __('Reporter Email Diff') ?></th>
                            <th><?= __('Reporter Phone Diff') ?></th>
                            <th><?= __('Reporter Date Diff') ?></th>
                            <th><?= __('Patient Phone') ?></th>
                            <th><?= __('Patient Street Name') ?></th>
                            <th><?= __('Syringes Used Other Specify') ?></th>
                            <th><?= __('Vaccinator Training') ?></th>
                            <th><?= __('Description Of Reaction') ?></th>
                            <th><?= __('Name Of Person First Treated') ?></th>
                            <th><?= __('Name Of The Person Treating') ?></th>
                            <th><?= __('Other Source Of Info') ?></th>
                            <th><?= __('Patient House Number') ?></th>
                            <th><?= __('Time Of First Symptom') ?></th>
                            <th><?= __('Vaccine Name') ?></th>
                            <th><?= __('Date First Reported') ?></th>
                            <th><?= __('Date Form Filled') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($saefi->saefis as $saefis) : ?>
                        <tr>
                            <td><?= h($saefis->id) ?></td>
                            <td><?= h($saefis->user_id) ?></td>
                            <td><?= h($saefis->saefi_id) ?></td>
                            <td><?= h($saefis->initial_id) ?></td>
                            <td><?= h($saefis->messageid) ?></td>
                            <td><?= h($saefis->vigiflow_ref) ?></td>
                            <td><?= h($saefis->vigiflow_date) ?></td>
                            <td><?= h($saefis->webradr_ref) ?></td>
                            <td><?= h($saefis->webradr_date) ?></td>
                            <td><?= h($saefis->province_id) ?></td>
                            <td><?= h($saefis->district) ?></td>
                            <td><?= h($saefis->aefi_report_ref) ?></td>
                            <td><?= h($saefis->name_of_vaccination_site) ?></td>
                            <td><?= h($saefis->reference_no) ?></td>
                            <td><?= h($saefis->assigned_to) ?></td>
                            <td><?= h($saefis->assigned_by) ?></td>
                            <td><?= h($saefis->assigned_date) ?></td>
                            <td><?= h($saefis->place_vaccination) ?></td>
                            <td><?= h($saefis->place_vaccination_other) ?></td>
                            <td><?= h($saefis->site_type) ?></td>
                            <td><?= h($saefis->site_type_other) ?></td>
                            <td><?= h($saefis->vaccination_in) ?></td>
                            <td><?= h($saefis->vaccination_in_other) ?></td>
                            <td><?= h($saefis->reporter_name) ?></td>
                            <td><?= h($saefis->report_date) ?></td>
                            <td><?= h($saefis->start_date) ?></td>
                            <td><?= h($saefis->complete_date) ?></td>
                            <td><?= h($saefis->designation_id) ?></td>
                            <td><?= h($saefis->telephone) ?></td>
                            <td><?= h($saefis->mobile) ?></td>
                            <td><?= h($saefis->reporter_email) ?></td>
                            <td><?= h($saefis->patient_name) ?></td>
                            <td><?= h($saefis->gender) ?></td>
                            <td><?= h($saefis->patient_address) ?></td>
                            <td><?= h($saefis->date_of_birth) ?></td>
                            <td><?= h($saefis->age_at_onset_years) ?></td>
                            <td><?= h($saefis->age_at_onset_months) ?></td>
                            <td><?= h($saefis->age_at_onset_days) ?></td>
                            <td><?= h($saefis->age_group) ?></td>
                            <td><?= h($saefis->symptom_date) ?></td>
                            <td><?= h($saefis->hospitalization_date) ?></td>
                            <td><?= h($saefis->status_on_date) ?></td>
                            <td><?= h($saefis->died_date) ?></td>
                            <td><?= h($saefis->autopsy_done) ?></td>
                            <td><?= h($saefis->autopsy_done_date) ?></td>
                            <td><?= h($saefis->autopsy_planned) ?></td>
                            <td><?= h($saefis->autopsy_planned_date) ?></td>
                            <td><?= h($saefis->past_history) ?></td>
                            <td><?= h($saefis->past_history_remarks) ?></td>
                            <td><?= h($saefis->adverse_event) ?></td>
                            <td><?= h($saefis->adverse_event_remarks) ?></td>
                            <td><?= h($saefis->allergy_history) ?></td>
                            <td><?= h($saefis->allergy_history_remarks) ?></td>
                            <td><?= h($saefis->comorbidity_disorder) ?></td>
                            <td><?= h($saefis->comorbidity_disorder_remarks) ?></td>
                            <td><?= h($saefis->covid_positive) ?></td>
                            <td><?= h($saefis->covid_positive_remarks) ?></td>
                            <td><?= h($saefis->existing_illness) ?></td>
                            <td><?= h($saefis->existing_illness_remarks) ?></td>
                            <td><?= h($saefis->hospitalization_history) ?></td>
                            <td><?= h($saefis->hospitalization_history_remarks) ?></td>
                            <td><?= h($saefis->medication_vaccination) ?></td>
                            <td><?= h($saefis->medication_vaccination_remarks) ?></td>
                            <td><?= h($saefis->faith_healers) ?></td>
                            <td><?= h($saefis->faith_healers_remarks) ?></td>
                            <td><?= h($saefis->family_history) ?></td>
                            <td><?= h($saefis->family_history_remarks) ?></td>
                            <td><?= h($saefis->pregnant) ?></td>
                            <td><?= h($saefis->pregnant_weeks) ?></td>
                            <td><?= h($saefis->breastfeeding) ?></td>
                            <td><?= h($saefis->infant) ?></td>
                            <td><?= h($saefis->birth_weight) ?></td>
                            <td><?= h($saefis->delivery_procedure) ?></td>
                            <td><?= h($saefis->delivery_procedure_specify) ?></td>
                            <td><?= h($saefis->source_examination) ?></td>
                            <td><?= h($saefis->source_documents) ?></td>
                            <td><?= h($saefis->source_verbal) ?></td>
                            <td><?= h($saefis->verbal_source) ?></td>
                            <td><?= h($saefis->source_other) ?></td>
                            <td><?= h($saefis->source_other_specify) ?></td>
                            <td><?= h($saefis->examiner_name) ?></td>
                            <td><?= h($saefis->other_sources) ?></td>
                            <td><?= h($saefis->signs_symptoms) ?></td>
                            <td><?= h($saefis->person_details) ?></td>
                            <td><?= h($saefis->person_designation) ?></td>
                            <td><?= h($saefis->person_date) ?></td>
                            <td><?= h($saefis->medical_care) ?></td>
                            <td><?= h($saefis->not_medical_care) ?></td>
                            <td><?= h($saefis->final_diagnosis) ?></td>
                            <td><?= h($saefis->when_vaccinated) ?></td>
                            <td><?= h($saefis->vaccine_given) ?></td>
                            <td><?= h($saefis->when_vaccinated_specify) ?></td>
                            <td><?= h($saefis->prescribing_error) ?></td>
                            <td><?= h($saefis->prescribing_error_specify) ?></td>
                            <td><?= h($saefis->vaccine_unsterile) ?></td>
                            <td><?= h($saefis->vaccine_unsterile_specify) ?></td>
                            <td><?= h($saefis->vaccine_condition) ?></td>
                            <td><?= h($saefis->vaccine_condition_specify) ?></td>
                            <td><?= h($saefis->vaccine_reconstitution) ?></td>
                            <td><?= h($saefis->vaccine_reconstitution_specify) ?></td>
                            <td><?= h($saefis->vaccine_handling) ?></td>
                            <td><?= h($saefis->vaccine_handling_specify) ?></td>
                            <td><?= h($saefis->vaccine_administered) ?></td>
                            <td><?= h($saefis->vaccine_administered_specify) ?></td>
                            <td><?= h($saefis->vaccinated_vial) ?></td>
                            <td><?= h($saefis->vaccinated_session) ?></td>
                            <td><?= h($saefis->vaccinated_locations) ?></td>
                            <td><?= h($saefis->vaccinated_locations_specify) ?></td>
                            <td><?= h($saefis->vaccinated_cluster) ?></td>
                            <td><?= h($saefis->vaccinated_cluster_number) ?></td>
                            <td><?= h($saefis->vaccinated_cluster_vial) ?></td>
                            <td><?= h($saefis->vaccinated_cluster_vial_number) ?></td>
                            <td><?= h($saefis->syringes_used) ?></td>
                            <td><?= h($saefis->syringes_used_specify) ?></td>
                            <td><?= h($saefis->syringes_used_other) ?></td>
                            <td><?= h($saefis->syringes_used_findings) ?></td>
                            <td><?= h($saefis->injection_dose_route) ?></td>
                            <td><?= h($saefis->injection_time_mentioned) ?></td>
                            <td><?= h($saefis->injection_no_touch) ?></td>
                            <td><?= h($saefis->injection_contraindications) ?></td>
                            <td><?= h($saefis->injection_reported) ?></td>
                            <td><?= h($saefis->injection_vaccines) ?></td>
                            <td><?= h($saefis->injection_vaccines_yes) ?></td>
                            <td><?= h($saefis->injection_observations) ?></td>
                            <td><?= h($saefis->reconstitution_multiple) ?></td>
                            <td><?= h($saefis->reconstitution_different) ?></td>
                            <td><?= h($saefis->reconstitution_vial) ?></td>
                            <td><?= h($saefis->reconstitution_syringe) ?></td>
                            <td><?= h($saefis->reconstitution_vaccines) ?></td>
                            <td><?= h($saefis->reconstitution_observations) ?></td>
                            <td><?= h($saefis->cold_temperature) ?></td>
                            <td><?= h($saefis->cold_temperature_deviation) ?></td>
                            <td><?= h($saefis->cold_temperature_specify) ?></td>
                            <td><?= h($saefis->procedure_followed) ?></td>
                            <td><?= h($saefis->other_items) ?></td>
                            <td><?= h($saefis->partial_vaccines) ?></td>
                            <td><?= h($saefis->unusable_vaccines) ?></td>
                            <td><?= h($saefis->unusable_diluents) ?></td>
                            <td><?= h($saefis->additional_observations) ?></td>
                            <td><?= h($saefis->cold_transportation) ?></td>
                            <td><?= h($saefis->vaccine_carrier) ?></td>
                            <td><?= h($saefis->coolant_packs) ?></td>
                            <td><?= h($saefis->transport_findings) ?></td>
                            <td><?= h($saefis->similar_events) ?></td>
                            <td><?= h($saefis->similar_events_describe) ?></td>
                            <td><?= h($saefis->similar_events_episodes) ?></td>
                            <td><?= h($saefis->affected_vaccinated) ?></td>
                            <td><?= h($saefis->affected_not_vaccinated) ?></td>
                            <td><?= h($saefis->affected_unknown) ?></td>
                            <td><?= h($saefis->community_comments) ?></td>
                            <td><?= h($saefis->relevant_findings) ?></td>
                            <td><?= h($saefis->created) ?></td>
                            <td><?= h($saefis->modified) ?></td>
                            <td><?= h($saefis->action_date) ?></td>
                            <td><?= h($saefis->submitted) ?></td>
                            <td><?= h($saefis->resubmit) ?></td>
                            <td><?= h($saefis->submitted_date) ?></td>
                            <td><?= h($saefis->report_type) ?></td>
                            <td><?= h($saefis->status) ?></td>
                            <td><?= h($saefis->active) ?></td>
                            <td><?= h($saefis->emails) ?></td>
                            <td><?= h($saefis->signature) ?></td>
                            <td><?= h($saefis->deleted) ?></td>
                            <td><?= h($saefis->copied) ?></td>
                            <td><?= h($saefis->archived) ?></td>
                            <td><?= h($saefis->archived_date) ?></td>
                            <td><?= h($saefis->reporter_phone) ?></td>
                            <td><?= h($saefis->reporter_date) ?></td>
                            <td><?= h($saefis->person_submitting) ?></td>
                            <td><?= h($saefis->reporter_name_diff) ?></td>
                            <td><?= h($saefis->reporter_designation_diff) ?></td>
                            <td><?= h($saefis->reporter_email_diff) ?></td>
                            <td><?= h($saefis->reporter_phone_diff) ?></td>
                            <td><?= h($saefis->reporter_date_diff) ?></td>
                            <td><?= h($saefis->patient_phone) ?></td>
                            <td><?= h($saefis->patient_street_name) ?></td>
                            <td><?= h($saefis->syringes_used_other_specify) ?></td>
                            <td><?= h($saefis->vaccinator_training) ?></td>
                            <td><?= h($saefis->description_of_reaction) ?></td>
                            <td><?= h($saefis->name_of_person_first_treated) ?></td>
                            <td><?= h($saefis->name_of_the_person_treating) ?></td>
                            <td><?= h($saefis->other_source_of_info) ?></td>
                            <td><?= h($saefis->patient_house_number) ?></td>
                            <td><?= h($saefis->time_of_first_symptom) ?></td>
                            <td><?= h($saefis->vaccine_name) ?></td>
                            <td><?= h($saefis->date_first_reported) ?></td>
                            <td><?= h($saefis->date_form_filled) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'Saefis', 'action' => 'view', $saefis->id]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'Saefis', 'action' => 'edit', $saefis->id]) ?>
                                <?= $this->Form->postLink(__('Delete'), ['controller' => 'Saefis', 'action' => 'delete', $saefis->id], ['confirm' => __('Are you sure you want to delete # {0}?', $saefis->id)]) ?>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </table>
                </div>
                <?php endif; ?>
            </div>
            <div class="related">
                <h4><?= __('Related Aefi List Of Vaccines') ?></h4>
                <?php if (!empty($saefi->aefi_list_of_vaccines)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Id') ?></th>
                            <th><?= __('Aefi Id') ?></th>
                            <th><?= __('Saefi Id') ?></th>
                            <th><?= __('Vaccine Id') ?></th>
                            <th><?= __('Vaccine Name') ?></th>
                            <th><?= __('Vaccination Date') ?></th>
                            <th><?= __('Vaccination Time') ?></th>
                            <th><?= __('Vaccine Manufacturer') ?></th>
                            <th><?= __('Vaccination Route') ?></th>
                            <th><?= __('Vaccination Site') ?></th>
                            <th><?= __('Dosage') ?></th>
                            <th><?= __('Icsr Code') ?></th>
                            <th><?= __('Batch Number') ?></th>
                            <th><?= __('Expiry Date') ?></th>
                            <th><?= __('Diluent Batch Number') ?></th>
                            <th><?= __('Diluent Manufacturer') ?></th>
                            <th><?= __('Diluent Expiry Date') ?></th>
                            <th><?= __('Suspected Drug') ?></th>
                            <th><?= __('Created') ?></th>
                            <th><?= __('Modified') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($saefi->aefi_list_of_vaccines as $aefiListOfVaccines) : ?>
                        <tr>
                            <td><?= h($aefiListOfVaccines->id) ?></td>
                            <td><?= h($aefiListOfVaccines->aefi_id) ?></td>
                            <td><?= h($aefiListOfVaccines->saefi_id) ?></td>
                            <td><?= h($aefiListOfVaccines->vaccine_id) ?></td>
                            <td><?= h($aefiListOfVaccines->vaccine_name) ?></td>
                            <td><?= h($aefiListOfVaccines->vaccination_date) ?></td>
                            <td><?= h($aefiListOfVaccines->vaccination_time) ?></td>
                            <td><?= h($aefiListOfVaccines->vaccine_manufacturer) ?></td>
                            <td><?= h($aefiListOfVaccines->vaccination_route) ?></td>
                            <td><?= h($aefiListOfVaccines->vaccination_site) ?></td>
                            <td><?= h($aefiListOfVaccines->dosage) ?></td>
                            <td><?= h($aefiListOfVaccines->icsr_code) ?></td>
                            <td><?= h($aefiListOfVaccines->batch_number) ?></td>
                            <td><?= h($aefiListOfVaccines->expiry_date) ?></td>
                            <td><?= h($aefiListOfVaccines->diluent_batch_number) ?></td>
                            <td><?= h($aefiListOfVaccines->diluent_manufacturer) ?></td>
                            <td><?= h($aefiListOfVaccines->diluent_expiry_date) ?></td>
                            <td><?= h($aefiListOfVaccines->suspected_drug) ?></td>
                            <td><?= h($aefiListOfVaccines->created) ?></td>
                            <td><?= h($aefiListOfVaccines->modified) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'AefiListOfVaccines', 'action' => 'view', $aefiListOfVaccines->id]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'AefiListOfVaccines', 'action' => 'edit', $aefiListOfVaccines->id]) ?>
                                <?= $this->Form->postLink(__('Delete'), ['controller' => 'AefiListOfVaccines', 'action' => 'delete', $aefiListOfVaccines->id], ['confirm' => __('Are you sure you want to delete # {0}?', $aefiListOfVaccines->id)]) ?>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </table>
                </div>
                <?php endif; ?>
            </div>
            <div class="related">
                <h4><?= __('Related Reviews') ?></h4>
                <?php if (!empty($saefi->reviews)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Id') ?></th>
                            <th><?= __('User Id') ?></th>
                            <th><?= __('Saefi Id') ?></th>
                            <th><?= __('Approved By') ?></th>
                            <th><?= __('Comment') ?></th>
                            <th><?= __('Created') ?></th>
                            <th><?= __('Modified') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($saefi->reviews as $reviews) : ?>
                        <tr>
                            <td><?= h($reviews->id) ?></td>
                            <td><?= h($reviews->user_id) ?></td>
                            <td><?= h($reviews->saefi_id) ?></td>
                            <td><?= h($reviews->approved_by) ?></td>
                            <td><?= h($reviews->comment) ?></td>
                            <td><?= h($reviews->created) ?></td>
                            <td><?= h($reviews->modified) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'Reviews', 'action' => 'view', $reviews->id]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'Reviews', 'action' => 'edit', $reviews->id]) ?>
                                <?= $this->Form->postLink(__('Delete'), ['controller' => 'Reviews', 'action' => 'delete', $reviews->id], ['confirm' => __('Are you sure you want to delete # {0}?', $reviews->id)]) ?>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </table>
                </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
</div>
