<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\Saefi> $saefis
 */
?>
<div class="saefis index content">
    <?= $this->Html->link(__('New Saefi'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Saefis') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('user_id') ?></th>
                    <th><?= $this->Paginator->sort('saefi_id') ?></th>
                    <th><?= $this->Paginator->sort('initial_id') ?></th>
                    <th><?= $this->Paginator->sort('messageid') ?></th>
                    <th><?= $this->Paginator->sort('vigiflow_ref') ?></th>
                    <th><?= $this->Paginator->sort('vigiflow_date') ?></th>
                    <th><?= $this->Paginator->sort('webradr_ref') ?></th>
                    <th><?= $this->Paginator->sort('webradr_date') ?></th>
                    <th><?= $this->Paginator->sort('province_id') ?></th>
                    <th><?= $this->Paginator->sort('district') ?></th>
                    <th><?= $this->Paginator->sort('aefi_report_ref') ?></th>
                    <th><?= $this->Paginator->sort('name_of_vaccination_site') ?></th>
                    <th><?= $this->Paginator->sort('reference_no') ?></th>
                    <th><?= $this->Paginator->sort('assigned_to') ?></th>
                    <th><?= $this->Paginator->sort('assigned_by') ?></th>
                    <th><?= $this->Paginator->sort('assigned_date') ?></th>
                    <th><?= $this->Paginator->sort('place_vaccination') ?></th>
                    <th><?= $this->Paginator->sort('place_vaccination_other') ?></th>
                    <th><?= $this->Paginator->sort('site_type') ?></th>
                    <th><?= $this->Paginator->sort('site_type_other') ?></th>
                    <th><?= $this->Paginator->sort('vaccination_in') ?></th>
                    <th><?= $this->Paginator->sort('vaccination_in_other') ?></th>
                    <th><?= $this->Paginator->sort('reporter_name') ?></th>
                    <th><?= $this->Paginator->sort('report_date') ?></th>
                    <th><?= $this->Paginator->sort('start_date') ?></th>
                    <th><?= $this->Paginator->sort('complete_date') ?></th>
                    <th><?= $this->Paginator->sort('designation_id') ?></th>
                    <th><?= $this->Paginator->sort('telephone') ?></th>
                    <th><?= $this->Paginator->sort('mobile') ?></th>
                    <th><?= $this->Paginator->sort('reporter_email') ?></th>
                    <th><?= $this->Paginator->sort('patient_name') ?></th>
                    <th><?= $this->Paginator->sort('gender') ?></th>
                    <th><?= $this->Paginator->sort('patient_address') ?></th>
                    <th><?= $this->Paginator->sort('date_of_birth') ?></th>
                    <th><?= $this->Paginator->sort('age_at_onset_years') ?></th>
                    <th><?= $this->Paginator->sort('age_at_onset_months') ?></th>
                    <th><?= $this->Paginator->sort('age_at_onset_days') ?></th>
                    <th><?= $this->Paginator->sort('age_group') ?></th>
                    <th><?= $this->Paginator->sort('symptom_date') ?></th>
                    <th><?= $this->Paginator->sort('hospitalization_date') ?></th>
                    <th><?= $this->Paginator->sort('status_on_date') ?></th>
                    <th><?= $this->Paginator->sort('died_date') ?></th>
                    <th><?= $this->Paginator->sort('autopsy_done') ?></th>
                    <th><?= $this->Paginator->sort('autopsy_done_date') ?></th>
                    <th><?= $this->Paginator->sort('autopsy_planned') ?></th>
                    <th><?= $this->Paginator->sort('autopsy_planned_date') ?></th>
                    <th><?= $this->Paginator->sort('past_history') ?></th>
                    <th><?= $this->Paginator->sort('adverse_event') ?></th>
                    <th><?= $this->Paginator->sort('allergy_history') ?></th>
                    <th><?= $this->Paginator->sort('comorbidity_disorder') ?></th>
                    <th><?= $this->Paginator->sort('covid_positive') ?></th>
                    <th><?= $this->Paginator->sort('existing_illness') ?></th>
                    <th><?= $this->Paginator->sort('hospitalization_history') ?></th>
                    <th><?= $this->Paginator->sort('medication_vaccination') ?></th>
                    <th><?= $this->Paginator->sort('faith_healers') ?></th>
                    <th><?= $this->Paginator->sort('family_history') ?></th>
                    <th><?= $this->Paginator->sort('pregnant') ?></th>
                    <th><?= $this->Paginator->sort('pregnant_weeks') ?></th>
                    <th><?= $this->Paginator->sort('breastfeeding') ?></th>
                    <th><?= $this->Paginator->sort('infant') ?></th>
                    <th><?= $this->Paginator->sort('birth_weight') ?></th>
                    <th><?= $this->Paginator->sort('delivery_procedure') ?></th>
                    <th><?= $this->Paginator->sort('source_examination') ?></th>
                    <th><?= $this->Paginator->sort('source_documents') ?></th>
                    <th><?= $this->Paginator->sort('source_verbal') ?></th>
                    <th><?= $this->Paginator->sort('source_other') ?></th>
                    <th><?= $this->Paginator->sort('examiner_name') ?></th>
                    <th><?= $this->Paginator->sort('person_details') ?></th>
                    <th><?= $this->Paginator->sort('person_designation') ?></th>
                    <th><?= $this->Paginator->sort('person_date') ?></th>
                    <th><?= $this->Paginator->sort('when_vaccinated') ?></th>
                    <th><?= $this->Paginator->sort('vaccine_given') ?></th>
                    <th><?= $this->Paginator->sort('prescribing_error') ?></th>
                    <th><?= $this->Paginator->sort('vaccine_unsterile') ?></th>
                    <th><?= $this->Paginator->sort('vaccine_condition') ?></th>
                    <th><?= $this->Paginator->sort('vaccine_reconstitution') ?></th>
                    <th><?= $this->Paginator->sort('vaccine_handling') ?></th>
                    <th><?= $this->Paginator->sort('vaccine_administered') ?></th>
                    <th><?= $this->Paginator->sort('vaccinated_vial') ?></th>
                    <th><?= $this->Paginator->sort('vaccinated_session') ?></th>
                    <th><?= $this->Paginator->sort('vaccinated_locations') ?></th>
                    <th><?= $this->Paginator->sort('vaccinated_cluster') ?></th>
                    <th><?= $this->Paginator->sort('vaccinated_cluster_number') ?></th>
                    <th><?= $this->Paginator->sort('vaccinated_cluster_vial') ?></th>
                    <th><?= $this->Paginator->sort('vaccinated_cluster_vial_number') ?></th>
                    <th><?= $this->Paginator->sort('syringes_used') ?></th>
                    <th><?= $this->Paginator->sort('syringes_used_specify') ?></th>
                    <th><?= $this->Paginator->sort('syringes_used_other') ?></th>
                    <th><?= $this->Paginator->sort('injection_dose_route') ?></th>
                    <th><?= $this->Paginator->sort('injection_time_mentioned') ?></th>
                    <th><?= $this->Paginator->sort('injection_no_touch') ?></th>
                    <th><?= $this->Paginator->sort('injection_contraindications') ?></th>
                    <th><?= $this->Paginator->sort('injection_reported') ?></th>
                    <th><?= $this->Paginator->sort('injection_vaccines') ?></th>
                    <th><?= $this->Paginator->sort('injection_vaccines_yes') ?></th>
                    <th><?= $this->Paginator->sort('reconstitution_multiple') ?></th>
                    <th><?= $this->Paginator->sort('reconstitution_different') ?></th>
                    <th><?= $this->Paginator->sort('reconstitution_vial') ?></th>
                    <th><?= $this->Paginator->sort('reconstitution_syringe') ?></th>
                    <th><?= $this->Paginator->sort('reconstitution_vaccines') ?></th>
                    <th><?= $this->Paginator->sort('cold_temperature') ?></th>
                    <th><?= $this->Paginator->sort('cold_temperature_deviation') ?></th>
                    <th><?= $this->Paginator->sort('procedure_followed') ?></th>
                    <th><?= $this->Paginator->sort('other_items') ?></th>
                    <th><?= $this->Paginator->sort('partial_vaccines') ?></th>
                    <th><?= $this->Paginator->sort('unusable_vaccines') ?></th>
                    <th><?= $this->Paginator->sort('unusable_diluents') ?></th>
                    <th><?= $this->Paginator->sort('cold_transportation') ?></th>
                    <th><?= $this->Paginator->sort('vaccine_carrier') ?></th>
                    <th><?= $this->Paginator->sort('coolant_packs') ?></th>
                    <th><?= $this->Paginator->sort('similar_events') ?></th>
                    <th><?= $this->Paginator->sort('similar_events_episodes') ?></th>
                    <th><?= $this->Paginator->sort('affected_vaccinated') ?></th>
                    <th><?= $this->Paginator->sort('affected_not_vaccinated') ?></th>
                    <th><?= $this->Paginator->sort('affected_unknown') ?></th>
                    <th><?= $this->Paginator->sort('created') ?></th>
                    <th><?= $this->Paginator->sort('modified') ?></th>
                    <th><?= $this->Paginator->sort('action_date') ?></th>
                    <th><?= $this->Paginator->sort('submitted') ?></th>
                    <th><?= $this->Paginator->sort('resubmit') ?></th>
                    <th><?= $this->Paginator->sort('submitted_date') ?></th>
                    <th><?= $this->Paginator->sort('report_type') ?></th>
                    <th><?= $this->Paginator->sort('status') ?></th>
                    <th><?= $this->Paginator->sort('active') ?></th>
                    <th><?= $this->Paginator->sort('emails') ?></th>
                    <th><?= $this->Paginator->sort('signature') ?></th>
                    <th><?= $this->Paginator->sort('deleted') ?></th>
                    <th><?= $this->Paginator->sort('copied') ?></th>
                    <th><?= $this->Paginator->sort('archived') ?></th>
                    <th><?= $this->Paginator->sort('archived_date') ?></th>
                    <th><?= $this->Paginator->sort('reporter_phone') ?></th>
                    <th><?= $this->Paginator->sort('reporter_date') ?></th>
                    <th><?= $this->Paginator->sort('person_submitting') ?></th>
                    <th><?= $this->Paginator->sort('reporter_name_diff') ?></th>
                    <th><?= $this->Paginator->sort('reporter_designation_diff') ?></th>
                    <th><?= $this->Paginator->sort('reporter_email_diff') ?></th>
                    <th><?= $this->Paginator->sort('reporter_phone_diff') ?></th>
                    <th><?= $this->Paginator->sort('reporter_date_diff') ?></th>
                    <th><?= $this->Paginator->sort('patient_phone') ?></th>
                    <th><?= $this->Paginator->sort('patient_street_name') ?></th>
                    <th><?= $this->Paginator->sort('syringes_used_other_specify') ?></th>
                    <th><?= $this->Paginator->sort('vaccinator_training') ?></th>
                    <th><?= $this->Paginator->sort('description_of_reaction') ?></th>
                    <th><?= $this->Paginator->sort('name_of_person_first_treated') ?></th>
                    <th><?= $this->Paginator->sort('name_of_the_person_treating') ?></th>
                    <th><?= $this->Paginator->sort('other_source_of_info') ?></th>
                    <th><?= $this->Paginator->sort('patient_house_number') ?></th>
                    <th><?= $this->Paginator->sort('time_of_first_symptom') ?></th>
                    <th><?= $this->Paginator->sort('vaccine_name') ?></th>
                    <th><?= $this->Paginator->sort('date_first_reported') ?></th>
                    <th><?= $this->Paginator->sort('date_form_filled') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($saefis as $saefi): ?>
                <tr>
                    <td><?= $this->Number->format($saefi->id) ?></td>
                    <td><?= $saefi->has('user') ? $this->Html->link($saefi->user->name, ['controller' => 'Users', 'action' => 'view', $saefi->user->id]) : '' ?></td>
                    <td><?= $saefi->saefi_id === null ? '' : $this->Number->format($saefi->saefi_id) ?></td>
                    <td><?= $saefi->initial_id === null ? '' : $this->Number->format($saefi->initial_id) ?></td>
                    <td><?= h($saefi->messageid) ?></td>
                    <td><?= h($saefi->vigiflow_ref) ?></td>
                    <td><?= h($saefi->vigiflow_date) ?></td>
                    <td><?= h($saefi->webradr_ref) ?></td>
                    <td><?= h($saefi->webradr_date) ?></td>
                    <td><?= $saefi->province_id === null ? '' : $this->Number->format($saefi->province_id) ?></td>
                    <td><?= h($saefi->district) ?></td>
                    <td><?= h($saefi->aefi_report_ref) ?></td>
                    <td><?= h($saefi->name_of_vaccination_site) ?></td>
                    <td><?= h($saefi->reference_no) ?></td>
                    <td><?= $saefi->assigned_to === null ? '' : $this->Number->format($saefi->assigned_to) ?></td>
                    <td><?= $saefi->assigned_by === null ? '' : $this->Number->format($saefi->assigned_by) ?></td>
                    <td><?= h($saefi->assigned_date) ?></td>
                    <td><?= h($saefi->place_vaccination) ?></td>
                    <td><?= h($saefi->place_vaccination_other) ?></td>
                    <td><?= h($saefi->site_type) ?></td>
                    <td><?= h($saefi->site_type_other) ?></td>
                    <td><?= h($saefi->vaccination_in) ?></td>
                    <td><?= h($saefi->vaccination_in_other) ?></td>
                    <td><?= h($saefi->reporter_name) ?></td>
                    <td><?= h($saefi->report_date) ?></td>
                    <td><?= h($saefi->start_date) ?></td>
                    <td><?= h($saefi->complete_date) ?></td>
                    <td><?= $saefi->has('designation') ? $this->Html->link($saefi->designation->name, ['controller' => 'Designations', 'action' => 'view', $saefi->designation->id]) : '' ?></td>
                    <td><?= h($saefi->telephone) ?></td>
                    <td><?= h($saefi->mobile) ?></td>
                    <td><?= h($saefi->reporter_email) ?></td>
                    <td><?= h($saefi->patient_name) ?></td>
                    <td><?= h($saefi->gender) ?></td>
                    <td><?= h($saefi->patient_address) ?></td>
                    <td><?= h($saefi->date_of_birth) ?></td>
                    <td><?= $saefi->age_at_onset_years === null ? '' : $this->Number->format($saefi->age_at_onset_years) ?></td>
                    <td><?= $saefi->age_at_onset_months === null ? '' : $this->Number->format($saefi->age_at_onset_months) ?></td>
                    <td><?= $saefi->age_at_onset_days === null ? '' : $this->Number->format($saefi->age_at_onset_days) ?></td>
                    <td><?= h($saefi->age_group) ?></td>
                    <td><?= h($saefi->symptom_date) ?></td>
                    <td><?= h($saefi->hospitalization_date) ?></td>
                    <td><?= h($saefi->status_on_date) ?></td>
                    <td><?= h($saefi->died_date) ?></td>
                    <td><?= h($saefi->autopsy_done) ?></td>
                    <td><?= h($saefi->autopsy_done_date) ?></td>
                    <td><?= h($saefi->autopsy_planned) ?></td>
                    <td><?= h($saefi->autopsy_planned_date) ?></td>
                    <td><?= h($saefi->past_history) ?></td>
                    <td><?= h($saefi->adverse_event) ?></td>
                    <td><?= h($saefi->allergy_history) ?></td>
                    <td><?= h($saefi->comorbidity_disorder) ?></td>
                    <td><?= h($saefi->covid_positive) ?></td>
                    <td><?= h($saefi->existing_illness) ?></td>
                    <td><?= h($saefi->hospitalization_history) ?></td>
                    <td><?= h($saefi->medication_vaccination) ?></td>
                    <td><?= h($saefi->faith_healers) ?></td>
                    <td><?= h($saefi->family_history) ?></td>
                    <td><?= h($saefi->pregnant) ?></td>
                    <td><?= h($saefi->pregnant_weeks) ?></td>
                    <td><?= h($saefi->breastfeeding) ?></td>
                    <td><?= h($saefi->infant) ?></td>
                    <td><?= $saefi->birth_weight === null ? '' : $this->Number->format($saefi->birth_weight) ?></td>
                    <td><?= h($saefi->delivery_procedure) ?></td>
                    <td><?= h($saefi->source_examination) ?></td>
                    <td><?= h($saefi->source_documents) ?></td>
                    <td><?= h($saefi->source_verbal) ?></td>
                    <td><?= h($saefi->source_other) ?></td>
                    <td><?= h($saefi->examiner_name) ?></td>
                    <td><?= h($saefi->person_details) ?></td>
                    <td><?= h($saefi->person_designation) ?></td>
                    <td><?= h($saefi->person_date) ?></td>
                    <td><?= h($saefi->when_vaccinated) ?></td>
                    <td><?= h($saefi->vaccine_given) ?></td>
                    <td><?= h($saefi->prescribing_error) ?></td>
                    <td><?= h($saefi->vaccine_unsterile) ?></td>
                    <td><?= h($saefi->vaccine_condition) ?></td>
                    <td><?= h($saefi->vaccine_reconstitution) ?></td>
                    <td><?= h($saefi->vaccine_handling) ?></td>
                    <td><?= h($saefi->vaccine_administered) ?></td>
                    <td><?= $saefi->vaccinated_vial === null ? '' : $this->Number->format($saefi->vaccinated_vial) ?></td>
                    <td><?= $saefi->vaccinated_session === null ? '' : $this->Number->format($saefi->vaccinated_session) ?></td>
                    <td><?= $saefi->vaccinated_locations === null ? '' : $this->Number->format($saefi->vaccinated_locations) ?></td>
                    <td><?= h($saefi->vaccinated_cluster) ?></td>
                    <td><?= $saefi->vaccinated_cluster_number === null ? '' : $this->Number->format($saefi->vaccinated_cluster_number) ?></td>
                    <td><?= h($saefi->vaccinated_cluster_vial) ?></td>
                    <td><?= $saefi->vaccinated_cluster_vial_number === null ? '' : $this->Number->format($saefi->vaccinated_cluster_vial_number) ?></td>
                    <td><?= h($saefi->syringes_used) ?></td>
                    <td><?= h($saefi->syringes_used_specify) ?></td>
                    <td><?= h($saefi->syringes_used_other) ?></td>
                    <td><?= h($saefi->injection_dose_route) ?></td>
                    <td><?= h($saefi->injection_time_mentioned) ?></td>
                    <td><?= h($saefi->injection_no_touch) ?></td>
                    <td><?= h($saefi->injection_contraindications) ?></td>
                    <td><?= h($saefi->injection_reported) ?></td>
                    <td><?= h($saefi->injection_vaccines) ?></td>
                    <td><?= h($saefi->injection_vaccines_yes) ?></td>
                    <td><?= h($saefi->reconstitution_multiple) ?></td>
                    <td><?= h($saefi->reconstitution_different) ?></td>
                    <td><?= h($saefi->reconstitution_vial) ?></td>
                    <td><?= h($saefi->reconstitution_syringe) ?></td>
                    <td><?= h($saefi->reconstitution_vaccines) ?></td>
                    <td><?= h($saefi->cold_temperature) ?></td>
                    <td><?= h($saefi->cold_temperature_deviation) ?></td>
                    <td><?= h($saefi->procedure_followed) ?></td>
                    <td><?= h($saefi->other_items) ?></td>
                    <td><?= h($saefi->partial_vaccines) ?></td>
                    <td><?= h($saefi->unusable_vaccines) ?></td>
                    <td><?= h($saefi->unusable_diluents) ?></td>
                    <td><?= h($saefi->cold_transportation) ?></td>
                    <td><?= h($saefi->vaccine_carrier) ?></td>
                    <td><?= h($saefi->coolant_packs) ?></td>
                    <td><?= h($saefi->similar_events) ?></td>
                    <td><?= $saefi->similar_events_episodes === null ? '' : $this->Number->format($saefi->similar_events_episodes) ?></td>
                    <td><?= $saefi->affected_vaccinated === null ? '' : $this->Number->format($saefi->affected_vaccinated) ?></td>
                    <td><?= $saefi->affected_not_vaccinated === null ? '' : $this->Number->format($saefi->affected_not_vaccinated) ?></td>
                    <td><?= h($saefi->affected_unknown) ?></td>
                    <td><?= h($saefi->created) ?></td>
                    <td><?= h($saefi->modified) ?></td>
                    <td><?= h($saefi->action_date) ?></td>
                    <td><?= $this->Number->format($saefi->submitted) ?></td>
                    <td><?= h($saefi->resubmit) ?></td>
                    <td><?= h($saefi->submitted_date) ?></td>
                    <td><?= h($saefi->report_type) ?></td>
                    <td><?= h($saefi->status) ?></td>
                    <td><?= $saefi->active === null ? '' : $this->Number->format($saefi->active) ?></td>
                    <td><?= $saefi->emails === null ? '' : $this->Number->format($saefi->emails) ?></td>
                    <td><?= h($saefi->signature) ?></td>
                    <td><?= $saefi->deleted === null ? '' : $this->Number->format($saefi->deleted) ?></td>
                    <td><?= $saefi->copied === null ? '' : $this->Number->format($saefi->copied) ?></td>
                    <td><?= $saefi->archived === null ? '' : $this->Number->format($saefi->archived) ?></td>
                    <td><?= h($saefi->archived_date) ?></td>
                    <td><?= h($saefi->reporter_phone) ?></td>
                    <td><?= h($saefi->reporter_date) ?></td>
                    <td><?= h($saefi->person_submitting) ?></td>
                    <td><?= h($saefi->reporter_name_diff) ?></td>
                    <td><?= h($saefi->reporter_designation_diff) ?></td>
                    <td><?= h($saefi->reporter_email_diff) ?></td>
                    <td><?= h($saefi->reporter_phone_diff) ?></td>
                    <td><?= h($saefi->reporter_date_diff) ?></td>
                    <td><?= h($saefi->patient_phone) ?></td>
                    <td><?= h($saefi->patient_street_name) ?></td>
                    <td><?= h($saefi->syringes_used_other_specify) ?></td>
                    <td><?= h($saefi->vaccinator_training) ?></td>
                    <td><?= h($saefi->description_of_reaction) ?></td>
                    <td><?= h($saefi->name_of_person_first_treated) ?></td>
                    <td><?= h($saefi->name_of_the_person_treating) ?></td>
                    <td><?= h($saefi->other_source_of_info) ?></td>
                    <td><?= h($saefi->patient_house_number) ?></td>
                    <td><?= h($saefi->time_of_first_symptom) ?></td>
                    <td><?= h($saefi->vaccine_name) ?></td>
                    <td><?= h($saefi->date_first_reported) ?></td>
                    <td><?= h($saefi->date_form_filled) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $saefi->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $saefi->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $saefi->id], ['confirm' => __('Are you sure you want to delete # {0}?', $saefi->id)]) ?>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(__('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')) ?></p>
    </div>
</div>
