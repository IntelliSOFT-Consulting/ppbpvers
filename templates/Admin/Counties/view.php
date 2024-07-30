<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\County $county
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit County'), ['action' => 'edit', $county->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete County'), ['action' => 'delete', $county->id], ['confirm' => __('Are you sure you want to delete # {0}?', $county->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Counties'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New County'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="counties view content">
            <h3><?= h($county->id) ?></h3>
            <table>
                <tr>
                    <th><?= __('County Name') ?></th>
                    <td><?= h($county->county_name) ?></td>
                </tr>
                <tr>
                    <th><?= __('Org Unit') ?></th>
                    <td><?= h($county->org_unit) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($county->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Created') ?></th>
                    <td><?= h($county->created) ?></td>
                </tr>
                <tr>
                    <th><?= __('Modified') ?></th>
                    <td><?= h($county->modified) ?></td>
                </tr>
            </table>
            <div class="related">
                <h4><?= __('Related Aefis') ?></h4>
                <?php if (!empty($county->aefis)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Id') ?></th>
                            <th><?= __('User Id') ?></th>
                            <th><?= __('Pqmp Id') ?></th>
                            <th><?= __('Reference No') ?></th>
                            <th><?= __('Aefi Id') ?></th>
                            <th><?= __('County Id') ?></th>
                            <th><?= __('Sub County Id') ?></th>
                            <th><?= __('Vigiflow Ref') ?></th>
                            <th><?= __('Vigiflow Date') ?></th>
                            <th><?= __('Vigiflow Message') ?></th>
                            <th><?= __('Webradr Ref') ?></th>
                            <th><?= __('Webradr Date') ?></th>
                            <th><?= __('Webradr Message') ?></th>
                            <th><?= __('Designation Id') ?></th>
                            <th><?= __('Report Type') ?></th>
                            <th><?= __('Name Of Institution') ?></th>
                            <th><?= __('Institution Code') ?></th>
                            <th><?= __('Patient Name') ?></th>
                            <th><?= __('Guardian Name') ?></th>
                            <th><?= __('Patient Address') ?></th>
                            <th><?= __('Patient Phone') ?></th>
                            <th><?= __('Patient Village') ?></th>
                            <th><?= __('Ip No') ?></th>
                            <th><?= __('Date Of Birth') ?></th>
                            <th><?= __('Age Months') ?></th>
                            <th><?= __('Age Group') ?></th>
                            <th><?= __('Patient Ward') ?></th>
                            <th><?= __('Patient County') ?></th>
                            <th><?= __('Patient Sub County') ?></th>
                            <th><?= __('Vaccination Center') ?></th>
                            <th><?= __('Vaccination County') ?></th>
                            <th><?= __('Vaccination Type') ?></th>
                            <th><?= __('Gender') ?></th>
                            <th><?= __('Pregnancy Status') ?></th>
                            <th><?= __('Bcg') ?></th>
                            <th><?= __('Convulsion') ?></th>
                            <th><?= __('Urticaria') ?></th>
                            <th><?= __('High Fever') ?></th>
                            <th><?= __('Abscess') ?></th>
                            <th><?= __('Local Reaction') ?></th>
                            <th><?= __('Anaphylaxis') ?></th>
                            <th><?= __('Meningitis') ?></th>
                            <th><?= __('Paralysis') ?></th>
                            <th><?= __('Toxic Shock') ?></th>
                            <th><?= __('Complaint Other') ?></th>
                            <th><?= __('Complaint Other Specify') ?></th>
                            <th><?= __('Description Of Reaction') ?></th>
                            <th><?= __('Date Aefi Started') ?></th>
                            <th><?= __('Time Aefi Started') ?></th>
                            <th><?= __('Aefi Symptoms') ?></th>
                            <th><?= __('Serious') ?></th>
                            <th><?= __('Serious Yes') ?></th>
                            <th><?= __('Serious Other') ?></th>
                            <th><?= __('Medical History') ?></th>
                            <th><?= __('Treatment Given') ?></th>
                            <th><?= __('Specimen Collected') ?></th>
                            <th><?= __('Outcome') ?></th>
                            <th><?= __('Reporter Name') ?></th>
                            <th><?= __('Reporter Email') ?></th>
                            <th><?= __('Reporter Phone') ?></th>
                            <th><?= __('Reporter Date') ?></th>
                            <th><?= __('Submitted') ?></th>
                            <th><?= __('Submitted Date') ?></th>
                            <th><?= __('Active') ?></th>
                            <th><?= __('Device') ?></th>
                            <th><?= __('Copied') ?></th>
                            <th><?= __('Archived') ?></th>
                            <th><?= __('Archived Date') ?></th>
                            <th><?= __('Deleted') ?></th>
                            <th><?= __('Deleted Date') ?></th>
                            <th><?= __('Created') ?></th>
                            <th><?= __('Modified') ?></th>
                            <th><?= __('Person Submitting') ?></th>
                            <th><?= __('Reporter Name Diff') ?></th>
                            <th><?= __('Reporter Designation Diff') ?></th>
                            <th><?= __('Reporter Email Diff') ?></th>
                            <th><?= __('Reporter Phone Diff') ?></th>
                            <th><?= __('Reporter Date Diff') ?></th>
                            <th><?= __('Assigned To') ?></th>
                            <th><?= __('Assigned By') ?></th>
                            <th><?= __('Assigned Date') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($county->aefis as $aefis) : ?>
                        <tr>
                            <td><?= h($aefis->id) ?></td>
                            <td><?= h($aefis->user_id) ?></td>
                            <td><?= h($aefis->pqmp_id) ?></td>
                            <td><?= h($aefis->reference_no) ?></td>
                            <td><?= h($aefis->aefi_id) ?></td>
                            <td><?= h($aefis->county_id) ?></td>
                            <td><?= h($aefis->sub_county_id) ?></td>
                            <td><?= h($aefis->vigiflow_ref) ?></td>
                            <td><?= h($aefis->vigiflow_date) ?></td>
                            <td><?= h($aefis->vigiflow_message) ?></td>
                            <td><?= h($aefis->webradr_ref) ?></td>
                            <td><?= h($aefis->webradr_date) ?></td>
                            <td><?= h($aefis->webradr_message) ?></td>
                            <td><?= h($aefis->designation_id) ?></td>
                            <td><?= h($aefis->report_type) ?></td>
                            <td><?= h($aefis->name_of_institution) ?></td>
                            <td><?= h($aefis->institution_code) ?></td>
                            <td><?= h($aefis->patient_name) ?></td>
                            <td><?= h($aefis->guardian_name) ?></td>
                            <td><?= h($aefis->patient_address) ?></td>
                            <td><?= h($aefis->patient_phone) ?></td>
                            <td><?= h($aefis->patient_village) ?></td>
                            <td><?= h($aefis->ip_no) ?></td>
                            <td><?= h($aefis->date_of_birth) ?></td>
                            <td><?= h($aefis->age_months) ?></td>
                            <td><?= h($aefis->age_group) ?></td>
                            <td><?= h($aefis->patient_ward) ?></td>
                            <td><?= h($aefis->patient_county) ?></td>
                            <td><?= h($aefis->patient_sub_county) ?></td>
                            <td><?= h($aefis->vaccination_center) ?></td>
                            <td><?= h($aefis->vaccination_county) ?></td>
                            <td><?= h($aefis->vaccination_type) ?></td>
                            <td><?= h($aefis->gender) ?></td>
                            <td><?= h($aefis->pregnancy_status) ?></td>
                            <td><?= h($aefis->bcg) ?></td>
                            <td><?= h($aefis->convulsion) ?></td>
                            <td><?= h($aefis->urticaria) ?></td>
                            <td><?= h($aefis->high_fever) ?></td>
                            <td><?= h($aefis->abscess) ?></td>
                            <td><?= h($aefis->local_reaction) ?></td>
                            <td><?= h($aefis->anaphylaxis) ?></td>
                            <td><?= h($aefis->meningitis) ?></td>
                            <td><?= h($aefis->paralysis) ?></td>
                            <td><?= h($aefis->toxic_shock) ?></td>
                            <td><?= h($aefis->complaint_other) ?></td>
                            <td><?= h($aefis->complaint_other_specify) ?></td>
                            <td><?= h($aefis->description_of_reaction) ?></td>
                            <td><?= h($aefis->date_aefi_started) ?></td>
                            <td><?= h($aefis->time_aefi_started) ?></td>
                            <td><?= h($aefis->aefi_symptoms) ?></td>
                            <td><?= h($aefis->serious) ?></td>
                            <td><?= h($aefis->serious_yes) ?></td>
                            <td><?= h($aefis->serious_other) ?></td>
                            <td><?= h($aefis->medical_history) ?></td>
                            <td><?= h($aefis->treatment_given) ?></td>
                            <td><?= h($aefis->specimen_collected) ?></td>
                            <td><?= h($aefis->outcome) ?></td>
                            <td><?= h($aefis->reporter_name) ?></td>
                            <td><?= h($aefis->reporter_email) ?></td>
                            <td><?= h($aefis->reporter_phone) ?></td>
                            <td><?= h($aefis->reporter_date) ?></td>
                            <td><?= h($aefis->submitted) ?></td>
                            <td><?= h($aefis->submitted_date) ?></td>
                            <td><?= h($aefis->active) ?></td>
                            <td><?= h($aefis->device) ?></td>
                            <td><?= h($aefis->copied) ?></td>
                            <td><?= h($aefis->archived) ?></td>
                            <td><?= h($aefis->archived_date) ?></td>
                            <td><?= h($aefis->deleted) ?></td>
                            <td><?= h($aefis->deleted_date) ?></td>
                            <td><?= h($aefis->created) ?></td>
                            <td><?= h($aefis->modified) ?></td>
                            <td><?= h($aefis->person_submitting) ?></td>
                            <td><?= h($aefis->reporter_name_diff) ?></td>
                            <td><?= h($aefis->reporter_designation_diff) ?></td>
                            <td><?= h($aefis->reporter_email_diff) ?></td>
                            <td><?= h($aefis->reporter_phone_diff) ?></td>
                            <td><?= h($aefis->reporter_date_diff) ?></td>
                            <td><?= h($aefis->assigned_to) ?></td>
                            <td><?= h($aefis->assigned_by) ?></td>
                            <td><?= h($aefis->assigned_date) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'Aefis', 'action' => 'view', $aefis->id]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'Aefis', 'action' => 'edit', $aefis->id]) ?>
                                <?= $this->Form->postLink(__('Delete'), ['controller' => 'Aefis', 'action' => 'delete', $aefis->id], ['confirm' => __('Are you sure you want to delete # {0}?', $aefis->id)]) ?>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </table>
                </div>
                <?php endif; ?>
            </div>
            <div class="related">
                <h4><?= __('Related Aggregates') ?></h4>
                <?php if (!empty($county->aggregates)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Id') ?></th>
                            <th><?= __('User Id') ?></th>
                            <th><?= __('Aggregate Id') ?></th>
                            <th><?= __('County Id') ?></th>
                            <th><?= __('Summary Available') ?></th>
                            <th><?= __('Sub County Id') ?></th>
                            <th><?= __('Designation Id') ?></th>
                            <th><?= __('Reference No') ?></th>
                            <th><?= __('Messageid') ?></th>
                            <th><?= __('Assigned To') ?></th>
                            <th><?= __('Assigned By') ?></th>
                            <th><?= __('Company Code') ?></th>
                            <th><?= __('Company Name') ?></th>
                            <th><?= __('Comment') ?></th>
                            <th><?= __('Reporter Email') ?></th>
                            <th><?= __('E2b Content') ?></th>
                            <th><?= __('E2b Type') ?></th>
                            <th><?= __('E2b File') ?></th>
                            <th><?= __('Dir') ?></th>
                            <th><?= __('Size') ?></th>
                            <th><?= __('Type') ?></th>
                            <th><?= __('Assigned Date') ?></th>
                            <th><?= __('Signature') ?></th>
                            <th><?= __('Submitted') ?></th>
                            <th><?= __('Submitted Date') ?></th>
                            <th><?= __('Reporter Name') ?></th>
                            <th><?= __('Reporter Designation') ?></th>
                            <th><?= __('Reporter Phone') ?></th>
                            <th><?= __('Reporter Date') ?></th>
                            <th><?= __('Person Submitting') ?></th>
                            <th><?= __('Reporter Name Diff') ?></th>
                            <th><?= __('Reporter Designation Diff') ?></th>
                            <th><?= __('Reporter Email Diff') ?></th>
                            <th><?= __('Reporter Phone Diff') ?></th>
                            <th><?= __('Reporter Date Diff') ?></th>
                            <th><?= __('Resubmit') ?></th>
                            <th><?= __('Status') ?></th>
                            <th><?= __('Active') ?></th>
                            <th><?= __('Copied') ?></th>
                            <th><?= __('Archived') ?></th>
                            <th><?= __('Archived Date') ?></th>
                            <th><?= __('Created') ?></th>
                            <th><?= __('Modified') ?></th>
                            <th><?= __('Action Date') ?></th>
                            <th><?= __('Deleted') ?></th>
                            <th><?= __('Deleted Date') ?></th>
                            <th><?= __('Brand Name') ?></th>
                            <th><?= __('Inn Name') ?></th>
                            <th><?= __('Mah') ?></th>
                            <th><?= __('Local Technical') ?></th>
                            <th><?= __('Therapeutic Group') ?></th>
                            <th><?= __('Authorised Indications') ?></th>
                            <th><?= __('Form Strength') ?></th>
                            <th><?= __('Interval Code') ?></th>
                            <th><?= __('Submission Frequency') ?></th>
                            <th><?= __('Reminder Date') ?></th>
                            <th><?= __('Introduction') ?></th>
                            <th><?= __('Worldwide Marketing') ?></th>
                            <th><?= __('Action Taken') ?></th>
                            <th><?= __('Reference Changes') ?></th>
                            <th><?= __('Estimated Exposure') ?></th>
                            <th><?= __('Clinical Findings') ?></th>
                            <th><?= __('Efficacy') ?></th>
                            <th><?= __('Late Breaking') ?></th>
                            <th><?= __('Safety Concerns') ?></th>
                            <th><?= __('Risks Evaluation') ?></th>
                            <th><?= __('Risks Characterisation') ?></th>
                            <th><?= __('Benefit Evaluation') ?></th>
                            <th><?= __('Risk Balance') ?></th>
                            <th><?= __('Recommendation') ?></th>
                            <th><?= __('Conclusion') ?></th>
                            <th><?= __('Report Type') ?></th>
                            <th><?= __('Manager Initiated') ?></th>
                            <th><?= __('Manager Submitted') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($county->aggregates as $aggregates) : ?>
                        <tr>
                            <td><?= h($aggregates->id) ?></td>
                            <td><?= h($aggregates->user_id) ?></td>
                            <td><?= h($aggregates->aggregate_id) ?></td>
                            <td><?= h($aggregates->county_id) ?></td>
                            <td><?= h($aggregates->summary_available) ?></td>
                            <td><?= h($aggregates->sub_county_id) ?></td>
                            <td><?= h($aggregates->designation_id) ?></td>
                            <td><?= h($aggregates->reference_no) ?></td>
                            <td><?= h($aggregates->messageid) ?></td>
                            <td><?= h($aggregates->assigned_to) ?></td>
                            <td><?= h($aggregates->assigned_by) ?></td>
                            <td><?= h($aggregates->company_code) ?></td>
                            <td><?= h($aggregates->company_name) ?></td>
                            <td><?= h($aggregates->comment) ?></td>
                            <td><?= h($aggregates->reporter_email) ?></td>
                            <td><?= h($aggregates->e2b_content) ?></td>
                            <td><?= h($aggregates->e2b_type) ?></td>
                            <td><?= h($aggregates->e2b_file) ?></td>
                            <td><?= h($aggregates->dir) ?></td>
                            <td><?= h($aggregates->size) ?></td>
                            <td><?= h($aggregates->type) ?></td>
                            <td><?= h($aggregates->assigned_date) ?></td>
                            <td><?= h($aggregates->signature) ?></td>
                            <td><?= h($aggregates->submitted) ?></td>
                            <td><?= h($aggregates->submitted_date) ?></td>
                            <td><?= h($aggregates->reporter_name) ?></td>
                            <td><?= h($aggregates->reporter_designation) ?></td>
                            <td><?= h($aggregates->reporter_phone) ?></td>
                            <td><?= h($aggregates->reporter_date) ?></td>
                            <td><?= h($aggregates->person_submitting) ?></td>
                            <td><?= h($aggregates->reporter_name_diff) ?></td>
                            <td><?= h($aggregates->reporter_designation_diff) ?></td>
                            <td><?= h($aggregates->reporter_email_diff) ?></td>
                            <td><?= h($aggregates->reporter_phone_diff) ?></td>
                            <td><?= h($aggregates->reporter_date_diff) ?></td>
                            <td><?= h($aggregates->resubmit) ?></td>
                            <td><?= h($aggregates->status) ?></td>
                            <td><?= h($aggregates->active) ?></td>
                            <td><?= h($aggregates->copied) ?></td>
                            <td><?= h($aggregates->archived) ?></td>
                            <td><?= h($aggregates->archived_date) ?></td>
                            <td><?= h($aggregates->created) ?></td>
                            <td><?= h($aggregates->modified) ?></td>
                            <td><?= h($aggregates->action_date) ?></td>
                            <td><?= h($aggregates->deleted) ?></td>
                            <td><?= h($aggregates->deleted_date) ?></td>
                            <td><?= h($aggregates->brand_name) ?></td>
                            <td><?= h($aggregates->inn_name) ?></td>
                            <td><?= h($aggregates->mah) ?></td>
                            <td><?= h($aggregates->local_technical) ?></td>
                            <td><?= h($aggregates->therapeutic_group) ?></td>
                            <td><?= h($aggregates->authorised_indications) ?></td>
                            <td><?= h($aggregates->form_strength) ?></td>
                            <td><?= h($aggregates->interval_code) ?></td>
                            <td><?= h($aggregates->submission_frequency) ?></td>
                            <td><?= h($aggregates->reminder_date) ?></td>
                            <td><?= h($aggregates->introduction) ?></td>
                            <td><?= h($aggregates->worldwide_marketing) ?></td>
                            <td><?= h($aggregates->action_taken) ?></td>
                            <td><?= h($aggregates->reference_changes) ?></td>
                            <td><?= h($aggregates->estimated_exposure) ?></td>
                            <td><?= h($aggregates->clinical_findings) ?></td>
                            <td><?= h($aggregates->efficacy) ?></td>
                            <td><?= h($aggregates->late_breaking) ?></td>
                            <td><?= h($aggregates->safety_concerns) ?></td>
                            <td><?= h($aggregates->risks_evaluation) ?></td>
                            <td><?= h($aggregates->risks_characterisation) ?></td>
                            <td><?= h($aggregates->benefit_evaluation) ?></td>
                            <td><?= h($aggregates->risk_balance) ?></td>
                            <td><?= h($aggregates->recommendation) ?></td>
                            <td><?= h($aggregates->conclusion) ?></td>
                            <td><?= h($aggregates->report_type) ?></td>
                            <td><?= h($aggregates->manager_initiated) ?></td>
                            <td><?= h($aggregates->manager_submitted) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'Aggregates', 'action' => 'view', $aggregates->id]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'Aggregates', 'action' => 'edit', $aggregates->id]) ?>
                                <?= $this->Form->postLink(__('Delete'), ['controller' => 'Aggregates', 'action' => 'delete', $aggregates->id], ['confirm' => __('Are you sure you want to delete # {0}?', $aggregates->id)]) ?>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </table>
                </div>
                <?php endif; ?>
            </div>
            <div class="related">
                <h4><?= __('Related Ce2bs') ?></h4>
                <?php if (!empty($county->ce2bs)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Id') ?></th>
                            <th><?= __('User Id') ?></th>
                            <th><?= __('Ce2b Id') ?></th>
                            <th><?= __('Vigiflow Message') ?></th>
                            <th><?= __('Vigiflow Date') ?></th>
                            <th><?= __('Report Type') ?></th>
                            <th><?= __('County Id') ?></th>
                            <th><?= __('Sub County Id') ?></th>
                            <th><?= __('Designation Id') ?></th>
                            <th><?= __('Reference No') ?></th>
                            <th><?= __('Messageid') ?></th>
                            <th><?= __('Assigned To') ?></th>
                            <th><?= __('Assigned By') ?></th>
                            <th><?= __('Company Code') ?></th>
                            <th><?= __('Company Name') ?></th>
                            <th><?= __('Comment') ?></th>
                            <th><?= __('Reporter Email') ?></th>
                            <th><?= __('E2b Content') ?></th>
                            <th><?= __('E2b Type') ?></th>
                            <th><?= __('E2b File') ?></th>
                            <th><?= __('Dir') ?></th>
                            <th><?= __('Size') ?></th>
                            <th><?= __('Type') ?></th>
                            <th><?= __('Assigned Date') ?></th>
                            <th><?= __('Signature') ?></th>
                            <th><?= __('Submitted') ?></th>
                            <th><?= __('Submitted Date') ?></th>
                            <th><?= __('Reporter Name') ?></th>
                            <th><?= __('Reporter Designation') ?></th>
                            <th><?= __('Reporter Phone') ?></th>
                            <th><?= __('Reporter Date') ?></th>
                            <th><?= __('Person Submitting') ?></th>
                            <th><?= __('Reporter Name Diff') ?></th>
                            <th><?= __('Reporter Designation Diff') ?></th>
                            <th><?= __('Reporter Email Diff') ?></th>
                            <th><?= __('Reporter Phone Diff') ?></th>
                            <th><?= __('Reporter Date Diff') ?></th>
                            <th><?= __('Resubmit') ?></th>
                            <th><?= __('Status') ?></th>
                            <th><?= __('Active') ?></th>
                            <th><?= __('Copied') ?></th>
                            <th><?= __('Archived') ?></th>
                            <th><?= __('Archived Date') ?></th>
                            <th><?= __('Created') ?></th>
                            <th><?= __('Modified') ?></th>
                            <th><?= __('Action Date') ?></th>
                            <th><?= __('Deleted') ?></th>
                            <th><?= __('Deleted Date') ?></th>
                            <th><?= __('Report Reference') ?></th>
                            <th><?= __('Creation Time') ?></th>
                            <th><?= __('Sender Reference') ?></th>
                            <th><?= __('Receiver Id') ?></th>
                            <th><?= __('Sender Id') ?></th>
                            <th><?= __('Sender Unique Identifier') ?></th>
                            <th><?= __('Worldwide Identifier') ?></th>
                            <th><?= __('Case Narrative') ?></th>
                            <th><?= __('Date First Received') ?></th>
                            <th><?= __('Date Most Recent Info') ?></th>
                            <th><?= __('Serious') ?></th>
                            <th><?= __('Patient Name') ?></th>
                            <th><?= __('Patient Sex') ?></th>
                            <th><?= __('Patient Dob') ?></th>
                            <th><?= __('Patient Number') ?></th>
                            <th><?= __('Past Medical') ?></th>
                            <th><?= __('Sender Address') ?></th>
                            <th><?= __('Sender City') ?></th>
                            <th><?= __('Sender State') ?></th>
                            <th><?= __('Sender Department') ?></th>
                            <th><?= __('Sender Organization') ?></th>
                            <th><?= __('Results In Detah') ?></th>
                            <th><?= __('Life Threatening') ?></th>
                            <th><?= __('Prolonged Hospitalization') ?></th>
                            <th><?= __('Incapacitating') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($county->ce2bs as $ce2bs) : ?>
                        <tr>
                            <td><?= h($ce2bs->id) ?></td>
                            <td><?= h($ce2bs->user_id) ?></td>
                            <td><?= h($ce2bs->ce2b_id) ?></td>
                            <td><?= h($ce2bs->vigiflow_message) ?></td>
                            <td><?= h($ce2bs->vigiflow_date) ?></td>
                            <td><?= h($ce2bs->report_type) ?></td>
                            <td><?= h($ce2bs->county_id) ?></td>
                            <td><?= h($ce2bs->sub_county_id) ?></td>
                            <td><?= h($ce2bs->designation_id) ?></td>
                            <td><?= h($ce2bs->reference_no) ?></td>
                            <td><?= h($ce2bs->messageid) ?></td>
                            <td><?= h($ce2bs->assigned_to) ?></td>
                            <td><?= h($ce2bs->assigned_by) ?></td>
                            <td><?= h($ce2bs->company_code) ?></td>
                            <td><?= h($ce2bs->company_name) ?></td>
                            <td><?= h($ce2bs->comment) ?></td>
                            <td><?= h($ce2bs->reporter_email) ?></td>
                            <td><?= h($ce2bs->e2b_content) ?></td>
                            <td><?= h($ce2bs->e2b_type) ?></td>
                            <td><?= h($ce2bs->e2b_file) ?></td>
                            <td><?= h($ce2bs->dir) ?></td>
                            <td><?= h($ce2bs->size) ?></td>
                            <td><?= h($ce2bs->type) ?></td>
                            <td><?= h($ce2bs->assigned_date) ?></td>
                            <td><?= h($ce2bs->signature) ?></td>
                            <td><?= h($ce2bs->submitted) ?></td>
                            <td><?= h($ce2bs->submitted_date) ?></td>
                            <td><?= h($ce2bs->reporter_name) ?></td>
                            <td><?= h($ce2bs->reporter_designation) ?></td>
                            <td><?= h($ce2bs->reporter_phone) ?></td>
                            <td><?= h($ce2bs->reporter_date) ?></td>
                            <td><?= h($ce2bs->person_submitting) ?></td>
                            <td><?= h($ce2bs->reporter_name_diff) ?></td>
                            <td><?= h($ce2bs->reporter_designation_diff) ?></td>
                            <td><?= h($ce2bs->reporter_email_diff) ?></td>
                            <td><?= h($ce2bs->reporter_phone_diff) ?></td>
                            <td><?= h($ce2bs->reporter_date_diff) ?></td>
                            <td><?= h($ce2bs->resubmit) ?></td>
                            <td><?= h($ce2bs->status) ?></td>
                            <td><?= h($ce2bs->active) ?></td>
                            <td><?= h($ce2bs->copied) ?></td>
                            <td><?= h($ce2bs->archived) ?></td>
                            <td><?= h($ce2bs->archived_date) ?></td>
                            <td><?= h($ce2bs->created) ?></td>
                            <td><?= h($ce2bs->modified) ?></td>
                            <td><?= h($ce2bs->action_date) ?></td>
                            <td><?= h($ce2bs->deleted) ?></td>
                            <td><?= h($ce2bs->deleted_date) ?></td>
                            <td><?= h($ce2bs->report_reference) ?></td>
                            <td><?= h($ce2bs->creation_time) ?></td>
                            <td><?= h($ce2bs->sender_reference) ?></td>
                            <td><?= h($ce2bs->receiver_id) ?></td>
                            <td><?= h($ce2bs->sender_id) ?></td>
                            <td><?= h($ce2bs->sender_unique_identifier) ?></td>
                            <td><?= h($ce2bs->worldwide_identifier) ?></td>
                            <td><?= h($ce2bs->case_narrative) ?></td>
                            <td><?= h($ce2bs->date_first_received) ?></td>
                            <td><?= h($ce2bs->date_most_recent_info) ?></td>
                            <td><?= h($ce2bs->serious) ?></td>
                            <td><?= h($ce2bs->patient_name) ?></td>
                            <td><?= h($ce2bs->patient_sex) ?></td>
                            <td><?= h($ce2bs->patient_dob) ?></td>
                            <td><?= h($ce2bs->patient_number) ?></td>
                            <td><?= h($ce2bs->past_medical) ?></td>
                            <td><?= h($ce2bs->sender_address) ?></td>
                            <td><?= h($ce2bs->sender_city) ?></td>
                            <td><?= h($ce2bs->sender_state) ?></td>
                            <td><?= h($ce2bs->sender_department) ?></td>
                            <td><?= h($ce2bs->sender_organization) ?></td>
                            <td><?= h($ce2bs->results_in_detah) ?></td>
                            <td><?= h($ce2bs->life_threatening) ?></td>
                            <td><?= h($ce2bs->prolonged_hospitalization) ?></td>
                            <td><?= h($ce2bs->incapacitating) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'Ce2bs', 'action' => 'view', $ce2bs->id]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'Ce2bs', 'action' => 'edit', $ce2bs->id]) ?>
                                <?= $this->Form->postLink(__('Delete'), ['controller' => 'Ce2bs', 'action' => 'delete', $ce2bs->id], ['confirm' => __('Are you sure you want to delete # {0}?', $ce2bs->id)]) ?>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </table>
                </div>
                <?php endif; ?>
            </div>
            <div class="related">
                <h4><?= __('Related Devices') ?></h4>
                <?php if (!empty($county->devices)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Id') ?></th>
                            <th><?= __('User Id') ?></th>
                            <th><?= __('Pqmp Id') ?></th>
                            <th><?= __('Reference No') ?></th>
                            <th><?= __('County Id') ?></th>
                            <th><?= __('Designation Id') ?></th>
                            <th><?= __('Device Id') ?></th>
                            <th><?= __('Report Type') ?></th>
                            <th><?= __('Report Title') ?></th>
                            <th><?= __('Name Of Institution') ?></th>
                            <th><?= __('Institution Code') ?></th>
                            <th><?= __('Institution Address') ?></th>
                            <th><?= __('Institution Contact') ?></th>
                            <th><?= __('Patient Name') ?></th>
                            <th><?= __('Gender') ?></th>
                            <th><?= __('Patient Address') ?></th>
                            <th><?= __('Patient Phone') ?></th>
                            <th><?= __('Patient Weight') ?></th>
                            <th><?= __('Patient Height') ?></th>
                            <th><?= __('Pregnancy Status') ?></th>
                            <th><?= __('Trimester') ?></th>
                            <th><?= __('Ip No') ?></th>
                            <th><?= __('Date Of Birth') ?></th>
                            <th><?= __('Age Years') ?></th>
                            <th><?= __('Allergy') ?></th>
                            <th><?= __('Allergy Specify') ?></th>
                            <th><?= __('Problem Noted') ?></th>
                            <th><?= __('Brand Name') ?></th>
                            <th><?= __('Serial No') ?></th>
                            <th><?= __('Common Name') ?></th>
                            <th><?= __('Device Model') ?></th>
                            <th><?= __('Catalogue') ?></th>
                            <th><?= __('Manufacturer Name') ?></th>
                            <th><?= __('Manufacturer Address') ?></th>
                            <th><?= __('Manufacture Date') ?></th>
                            <th><?= __('Expiry Date') ?></th>
                            <th><?= __('Operator') ?></th>
                            <th><?= __('Operator Specify') ?></th>
                            <th><?= __('Device Usage') ?></th>
                            <th><?= __('Device Duration Type') ?></th>
                            <th><?= __('Device Duration') ?></th>
                            <th><?= __('Device Availability') ?></th>
                            <th><?= __('Device Unavailability') ?></th>
                            <th><?= __('Implant Date') ?></th>
                            <th><?= __('Explant Date') ?></th>
                            <th><?= __('Implant Duration Type') ?></th>
                            <th><?= __('Implant Duration') ?></th>
                            <th><?= __('Specimen Type') ?></th>
                            <th><?= __('Patients Involved') ?></th>
                            <th><?= __('Tests Done') ?></th>
                            <th><?= __('False Positives') ?></th>
                            <th><?= __('False Negatives') ?></th>
                            <th><?= __('True Positives') ?></th>
                            <th><?= __('True Negatives') ?></th>
                            <th><?= __('Date Onset Incident') ?></th>
                            <th><?= __('Serious') ?></th>
                            <th><?= __('Serious Yes') ?></th>
                            <th><?= __('Death Date') ?></th>
                            <th><?= __('Description Of Reaction') ?></th>
                            <th><?= __('Remedial Action') ?></th>
                            <th><?= __('Outcome') ?></th>
                            <th><?= __('Reporter Name') ?></th>
                            <th><?= __('Reporter Email') ?></th>
                            <th><?= __('Reporter Phone') ?></th>
                            <th><?= __('Reporter Date') ?></th>
                            <th><?= __('Person Submitting') ?></th>
                            <th><?= __('Reporter Name Diff') ?></th>
                            <th><?= __('Reporter Designation Diff') ?></th>
                            <th><?= __('Reporter Email Diff') ?></th>
                            <th><?= __('Reporter Phone Diff') ?></th>
                            <th><?= __('Reporter Date Diff') ?></th>
                            <th><?= __('Assigned To') ?></th>
                            <th><?= __('Assigned By') ?></th>
                            <th><?= __('Assigned Date') ?></th>
                            <th><?= __('Submitted') ?></th>
                            <th><?= __('Submitted Date') ?></th>
                            <th><?= __('Copied') ?></th>
                            <th><?= __('Archived') ?></th>
                            <th><?= __('Archived Date') ?></th>
                            <th><?= __('Active') ?></th>
                            <th><?= __('Deleted') ?></th>
                            <th><?= __('Deleted Date') ?></th>
                            <th><?= __('Created') ?></th>
                            <th><?= __('Modified') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($county->devices as $devices) : ?>
                        <tr>
                            <td><?= h($devices->id) ?></td>
                            <td><?= h($devices->user_id) ?></td>
                            <td><?= h($devices->pqmp_id) ?></td>
                            <td><?= h($devices->reference_no) ?></td>
                            <td><?= h($devices->county_id) ?></td>
                            <td><?= h($devices->designation_id) ?></td>
                            <td><?= h($devices->device_id) ?></td>
                            <td><?= h($devices->report_type) ?></td>
                            <td><?= h($devices->report_title) ?></td>
                            <td><?= h($devices->name_of_institution) ?></td>
                            <td><?= h($devices->institution_code) ?></td>
                            <td><?= h($devices->institution_address) ?></td>
                            <td><?= h($devices->institution_contact) ?></td>
                            <td><?= h($devices->patient_name) ?></td>
                            <td><?= h($devices->gender) ?></td>
                            <td><?= h($devices->patient_address) ?></td>
                            <td><?= h($devices->patient_phone) ?></td>
                            <td><?= h($devices->patient_weight) ?></td>
                            <td><?= h($devices->patient_height) ?></td>
                            <td><?= h($devices->pregnancy_status) ?></td>
                            <td><?= h($devices->trimester) ?></td>
                            <td><?= h($devices->ip_no) ?></td>
                            <td><?= h($devices->date_of_birth) ?></td>
                            <td><?= h($devices->age_years) ?></td>
                            <td><?= h($devices->allergy) ?></td>
                            <td><?= h($devices->allergy_specify) ?></td>
                            <td><?= h($devices->problem_noted) ?></td>
                            <td><?= h($devices->brand_name) ?></td>
                            <td><?= h($devices->serial_no) ?></td>
                            <td><?= h($devices->common_name) ?></td>
                            <td><?= h($devices->device_model) ?></td>
                            <td><?= h($devices->catalogue) ?></td>
                            <td><?= h($devices->manufacturer_name) ?></td>
                            <td><?= h($devices->manufacturer_address) ?></td>
                            <td><?= h($devices->manufacture_date) ?></td>
                            <td><?= h($devices->expiry_date) ?></td>
                            <td><?= h($devices->operator) ?></td>
                            <td><?= h($devices->operator_specify) ?></td>
                            <td><?= h($devices->device_usage) ?></td>
                            <td><?= h($devices->device_duration_type) ?></td>
                            <td><?= h($devices->device_duration) ?></td>
                            <td><?= h($devices->device_availability) ?></td>
                            <td><?= h($devices->device_unavailability) ?></td>
                            <td><?= h($devices->implant_date) ?></td>
                            <td><?= h($devices->explant_date) ?></td>
                            <td><?= h($devices->implant_duration_type) ?></td>
                            <td><?= h($devices->implant_duration) ?></td>
                            <td><?= h($devices->specimen_type) ?></td>
                            <td><?= h($devices->patients_involved) ?></td>
                            <td><?= h($devices->tests_done) ?></td>
                            <td><?= h($devices->false_positives) ?></td>
                            <td><?= h($devices->false_negatives) ?></td>
                            <td><?= h($devices->true_positives) ?></td>
                            <td><?= h($devices->true_negatives) ?></td>
                            <td><?= h($devices->date_onset_incident) ?></td>
                            <td><?= h($devices->serious) ?></td>
                            <td><?= h($devices->serious_yes) ?></td>
                            <td><?= h($devices->death_date) ?></td>
                            <td><?= h($devices->description_of_reaction) ?></td>
                            <td><?= h($devices->remedial_action) ?></td>
                            <td><?= h($devices->outcome) ?></td>
                            <td><?= h($devices->reporter_name) ?></td>
                            <td><?= h($devices->reporter_email) ?></td>
                            <td><?= h($devices->reporter_phone) ?></td>
                            <td><?= h($devices->reporter_date) ?></td>
                            <td><?= h($devices->person_submitting) ?></td>
                            <td><?= h($devices->reporter_name_diff) ?></td>
                            <td><?= h($devices->reporter_designation_diff) ?></td>
                            <td><?= h($devices->reporter_email_diff) ?></td>
                            <td><?= h($devices->reporter_phone_diff) ?></td>
                            <td><?= h($devices->reporter_date_diff) ?></td>
                            <td><?= h($devices->assigned_to) ?></td>
                            <td><?= h($devices->assigned_by) ?></td>
                            <td><?= h($devices->assigned_date) ?></td>
                            <td><?= h($devices->submitted) ?></td>
                            <td><?= h($devices->submitted_date) ?></td>
                            <td><?= h($devices->copied) ?></td>
                            <td><?= h($devices->archived) ?></td>
                            <td><?= h($devices->archived_date) ?></td>
                            <td><?= h($devices->active) ?></td>
                            <td><?= h($devices->deleted) ?></td>
                            <td><?= h($devices->deleted_date) ?></td>
                            <td><?= h($devices->created) ?></td>
                            <td><?= h($devices->modified) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'Devices', 'action' => 'view', $devices->id]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'Devices', 'action' => 'edit', $devices->id]) ?>
                                <?= $this->Form->postLink(__('Delete'), ['controller' => 'Devices', 'action' => 'delete', $devices->id], ['confirm' => __('Are you sure you want to delete # {0}?', $devices->id)]) ?>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </table>
                </div>
                <?php endif; ?>
            </div>
            <div class="related">
                <h4><?= __('Related Medications') ?></h4>
                <?php if (!empty($county->medications)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Id') ?></th>
                            <th><?= __('User Id') ?></th>
                            <th><?= __('Pqmp Id') ?></th>
                            <th><?= __('Medication Id') ?></th>
                            <th><?= __('Reference No') ?></th>
                            <th><?= __('Adverse Reaction') ?></th>
                            <th><?= __('County Id') ?></th>
                            <th><?= __('Designation Id') ?></th>
                            <th><?= __('Date Of Event') ?></th>
                            <th><?= __('Time Of Event') ?></th>
                            <th><?= __('Name Of Institution') ?></th>
                            <th><?= __('Institution Code') ?></th>
                            <th><?= __('Institution Contact') ?></th>
                            <th><?= __('Patient Name') ?></th>
                            <th><?= __('Gender') ?></th>
                            <th><?= __('Pregnancy Status') ?></th>
                            <th><?= __('Patient Phone') ?></th>
                            <th><?= __('Date Of Birth') ?></th>
                            <th><?= __('Age Years') ?></th>
                            <th><?= __('Ward') ?></th>
                            <th><?= __('Clinic') ?></th>
                            <th><?= __('Pharmacy') ?></th>
                            <th><?= __('Accident') ?></th>
                            <th><?= __('Location Other') ?></th>
                            <th><?= __('Description Of Error') ?></th>
                            <th><?= __('Process Occur') ?></th>
                            <th><?= __('Process Occur Specify') ?></th>
                            <th><?= __('Reach Patient') ?></th>
                            <th><?= __('Correct Medication') ?></th>
                            <th><?= __('Direct Result') ?></th>
                            <th><?= __('Outcome') ?></th>
                            <th><?= __('Outcome Error') ?></th>
                            <th><?= __('Outcome Death') ?></th>
                            <th><?= __('Error Cause Inexperience') ?></th>
                            <th><?= __('Error Cause Knowledge') ?></th>
                            <th><?= __('Error Cause Distraction') ?></th>
                            <th><?= __('Error Cause Sound') ?></th>
                            <th><?= __('Error Cause Medication') ?></th>
                            <th><?= __('Error Cause Packaging') ?></th>
                            <th><?= __('Error Cause Workload') ?></th>
                            <th><?= __('Error Cause Peak') ?></th>
                            <th><?= __('Error Cause Stock') ?></th>
                            <th><?= __('Error Cause Procedure') ?></th>
                            <th><?= __('Error Cause Abbreviations') ?></th>
                            <th><?= __('Error Cause Illegible') ?></th>
                            <th><?= __('Error Cause Inaccurate') ?></th>
                            <th><?= __('Error Cause Labelling') ?></th>
                            <th><?= __('Error Cause Computer') ?></th>
                            <th><?= __('Error Cause Other') ?></th>
                            <th><?= __('Error Cause Specify') ?></th>
                            <th><?= __('Recommendations') ?></th>
                            <th><?= __('Reporter Name') ?></th>
                            <th><?= __('Reporter Email') ?></th>
                            <th><?= __('Reporter Phone') ?></th>
                            <th><?= __('Report Type') ?></th>
                            <th><?= __('Submitted') ?></th>
                            <th><?= __('Submitted Date') ?></th>
                            <th><?= __('Copied') ?></th>
                            <th><?= __('Archived') ?></th>
                            <th><?= __('Archived Date') ?></th>
                            <th><?= __('Active') ?></th>
                            <th><?= __('Deleted') ?></th>
                            <th><?= __('Deleted Date') ?></th>
                            <th><?= __('Created') ?></th>
                            <th><?= __('Modified') ?></th>
                            <th><?= __('Reporter Date') ?></th>
                            <th><?= __('Person Submitting') ?></th>
                            <th><?= __('Reporter Name Diff') ?></th>
                            <th><?= __('Reporter Designation Diff') ?></th>
                            <th><?= __('Reporter Email Diff') ?></th>
                            <th><?= __('Reporter Phone Diff') ?></th>
                            <th><?= __('Reporter Date Diff') ?></th>
                            <th><?= __('Assigned To') ?></th>
                            <th><?= __('Assigned By') ?></th>
                            <th><?= __('Assigned Date') ?></th>
                            <th><?= __('Vigiflow Message') ?></th>
                            <th><?= __('Vigiflow Ref') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($county->medications as $medications) : ?>
                        <tr>
                            <td><?= h($medications->id) ?></td>
                            <td><?= h($medications->user_id) ?></td>
                            <td><?= h($medications->pqmp_id) ?></td>
                            <td><?= h($medications->medication_id) ?></td>
                            <td><?= h($medications->reference_no) ?></td>
                            <td><?= h($medications->adverse_reaction) ?></td>
                            <td><?= h($medications->county_id) ?></td>
                            <td><?= h($medications->designation_id) ?></td>
                            <td><?= h($medications->date_of_event) ?></td>
                            <td><?= h($medications->time_of_event) ?></td>
                            <td><?= h($medications->name_of_institution) ?></td>
                            <td><?= h($medications->institution_code) ?></td>
                            <td><?= h($medications->institution_contact) ?></td>
                            <td><?= h($medications->patient_name) ?></td>
                            <td><?= h($medications->gender) ?></td>
                            <td><?= h($medications->pregnancy_status) ?></td>
                            <td><?= h($medications->patient_phone) ?></td>
                            <td><?= h($medications->date_of_birth) ?></td>
                            <td><?= h($medications->age_years) ?></td>
                            <td><?= h($medications->ward) ?></td>
                            <td><?= h($medications->clinic) ?></td>
                            <td><?= h($medications->pharmacy) ?></td>
                            <td><?= h($medications->accident) ?></td>
                            <td><?= h($medications->location_other) ?></td>
                            <td><?= h($medications->description_of_error) ?></td>
                            <td><?= h($medications->process_occur) ?></td>
                            <td><?= h($medications->process_occur_specify) ?></td>
                            <td><?= h($medications->reach_patient) ?></td>
                            <td><?= h($medications->correct_medication) ?></td>
                            <td><?= h($medications->direct_result) ?></td>
                            <td><?= h($medications->outcome) ?></td>
                            <td><?= h($medications->outcome_error) ?></td>
                            <td><?= h($medications->outcome_death) ?></td>
                            <td><?= h($medications->error_cause_inexperience) ?></td>
                            <td><?= h($medications->error_cause_knowledge) ?></td>
                            <td><?= h($medications->error_cause_distraction) ?></td>
                            <td><?= h($medications->error_cause_sound) ?></td>
                            <td><?= h($medications->error_cause_medication) ?></td>
                            <td><?= h($medications->error_cause_packaging) ?></td>
                            <td><?= h($medications->error_cause_workload) ?></td>
                            <td><?= h($medications->error_cause_peak) ?></td>
                            <td><?= h($medications->error_cause_stock) ?></td>
                            <td><?= h($medications->error_cause_procedure) ?></td>
                            <td><?= h($medications->error_cause_abbreviations) ?></td>
                            <td><?= h($medications->error_cause_illegible) ?></td>
                            <td><?= h($medications->error_cause_inaccurate) ?></td>
                            <td><?= h($medications->error_cause_labelling) ?></td>
                            <td><?= h($medications->error_cause_computer) ?></td>
                            <td><?= h($medications->error_cause_other) ?></td>
                            <td><?= h($medications->error_cause_specify) ?></td>
                            <td><?= h($medications->recommendations) ?></td>
                            <td><?= h($medications->reporter_name) ?></td>
                            <td><?= h($medications->reporter_email) ?></td>
                            <td><?= h($medications->reporter_phone) ?></td>
                            <td><?= h($medications->report_type) ?></td>
                            <td><?= h($medications->submitted) ?></td>
                            <td><?= h($medications->submitted_date) ?></td>
                            <td><?= h($medications->copied) ?></td>
                            <td><?= h($medications->archived) ?></td>
                            <td><?= h($medications->archived_date) ?></td>
                            <td><?= h($medications->active) ?></td>
                            <td><?= h($medications->deleted) ?></td>
                            <td><?= h($medications->deleted_date) ?></td>
                            <td><?= h($medications->created) ?></td>
                            <td><?= h($medications->modified) ?></td>
                            <td><?= h($medications->reporter_date) ?></td>
                            <td><?= h($medications->person_submitting) ?></td>
                            <td><?= h($medications->reporter_name_diff) ?></td>
                            <td><?= h($medications->reporter_designation_diff) ?></td>
                            <td><?= h($medications->reporter_email_diff) ?></td>
                            <td><?= h($medications->reporter_phone_diff) ?></td>
                            <td><?= h($medications->reporter_date_diff) ?></td>
                            <td><?= h($medications->assigned_to) ?></td>
                            <td><?= h($medications->assigned_by) ?></td>
                            <td><?= h($medications->assigned_date) ?></td>
                            <td><?= h($medications->vigiflow_message) ?></td>
                            <td><?= h($medications->vigiflow_ref) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'Medications', 'action' => 'view', $medications->id]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'Medications', 'action' => 'edit', $medications->id]) ?>
                                <?= $this->Form->postLink(__('Delete'), ['controller' => 'Medications', 'action' => 'delete', $medications->id], ['confirm' => __('Are you sure you want to delete # {0}?', $medications->id)]) ?>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </table>
                </div>
                <?php endif; ?>
            </div>
            <div class="related">
                <h4><?= __('Related Padrs') ?></h4>
                <?php if (!empty($county->padrs)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Id') ?></th>
                            <th><?= __('Padr Id') ?></th>
                            <th><?= __('User Id') ?></th>
                            <th><?= __('County Id') ?></th>
                            <th><?= __('Sub County Id') ?></th>
                            <th><?= __('Designation Id') ?></th>
                            <th><?= __('Reference No') ?></th>
                            <th><?= __('Token') ?></th>
                            <th><?= __('Relation') ?></th>
                            <th><?= __('Vigiflow Ref') ?></th>
                            <th><?= __('Vigiflow Message') ?></th>
                            <th><?= __('Vigiflow Date') ?></th>
                            <th><?= __('Report Title') ?></th>
                            <th><?= __('Report Type') ?></th>
                            <th><?= __('Report Sadr') ?></th>
                            <th><?= __('Sadr Vomiting') ?></th>
                            <th><?= __('Sadr Dizziness') ?></th>
                            <th><?= __('Sadr Headache') ?></th>
                            <th><?= __('Sadr Joints') ?></th>
                            <th><?= __('Sadr Rash') ?></th>
                            <th><?= __('Sadr Mouth') ?></th>
                            <th><?= __('Sadr Stomach') ?></th>
                            <th><?= __('Sadr Urination') ?></th>
                            <th><?= __('Sadr Eyes') ?></th>
                            <th><?= __('Sadr Died') ?></th>
                            <th><?= __('Pqmp Label') ?></th>
                            <th><?= __('Patient Name') ?></th>
                            <th><?= __('Pqmp Material') ?></th>
                            <th><?= __('Date Of Birth') ?></th>
                            <th><?= __('Age Group') ?></th>
                            <th><?= __('Patient Address') ?></th>
                            <th><?= __('Pqmp Color') ?></th>
                            <th><?= __('Gender') ?></th>
                            <th><?= __('Pqmp Smell') ?></th>
                            <th><?= __('Pqmp Working') ?></th>
                            <th><?= __('Pqmp Bottle') ?></th>
                            <th><?= __('Pregnancy Status') ?></th>
                            <th><?= __('Weight') ?></th>
                            <th><?= __('Height') ?></th>
                            <th><?= __('Diagnosis') ?></th>
                            <th><?= __('Medical History') ?></th>
                            <th><?= __('Date Of Onset Of Reaction') ?></th>
                            <th><?= __('Date Of End Of Reaction') ?></th>
                            <th><?= __('Description Of Reaction') ?></th>
                            <th><?= __('Reaction Resolve') ?></th>
                            <th><?= __('Reaction Reappear') ?></th>
                            <th><?= __('Lab Investigation') ?></th>
                            <th><?= __('Severity') ?></th>
                            <th><?= __('Serious') ?></th>
                            <th><?= __('Serious Reason') ?></th>
                            <th><?= __('Action Taken') ?></th>
                            <th><?= __('Outcome') ?></th>
                            <th><?= __('Causality') ?></th>
                            <th><?= __('Any Other Comment') ?></th>
                            <th><?= __('Reporter Name') ?></th>
                            <th><?= __('Reporter Email') ?></th>
                            <th><?= __('Reporter Phone') ?></th>
                            <th><?= __('Submitted') ?></th>
                            <th><?= __('Submitted Date') ?></th>
                            <th><?= __('Emails') ?></th>
                            <th><?= __('Active') ?></th>
                            <th><?= __('Device') ?></th>
                            <th><?= __('Deleted') ?></th>
                            <th><?= __('Deleted Date') ?></th>
                            <th><?= __('Notified') ?></th>
                            <th><?= __('Created') ?></th>
                            <th><?= __('Modified') ?></th>
                            <th><?= __('Reporter Date') ?></th>
                            <th><?= __('Reporter Name Diff') ?></th>
                            <th><?= __('Reporter Designation Diff') ?></th>
                            <th><?= __('Reporter Email Diff') ?></th>
                            <th><?= __('Reporter Phone Diff') ?></th>
                            <th><?= __('Reporter Date Diff') ?></th>
                            <th><?= __('Assigned To') ?></th>
                            <th><?= __('Assigned By') ?></th>
                            <th><?= __('Assigned Date') ?></th>
                            <th><?= __('Reaction On') ?></th>
                            <th><?= __('Consent') ?></th>
                            <th><?= __('Copied') ?></th>
                            <th><?= __('Archived') ?></th>
                            <th><?= __('Archived Date') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($county->padrs as $padrs) : ?>
                        <tr>
                            <td><?= h($padrs->id) ?></td>
                            <td><?= h($padrs->padr_id) ?></td>
                            <td><?= h($padrs->user_id) ?></td>
                            <td><?= h($padrs->county_id) ?></td>
                            <td><?= h($padrs->sub_county_id) ?></td>
                            <td><?= h($padrs->designation_id) ?></td>
                            <td><?= h($padrs->reference_no) ?></td>
                            <td><?= h($padrs->token) ?></td>
                            <td><?= h($padrs->relation) ?></td>
                            <td><?= h($padrs->vigiflow_ref) ?></td>
                            <td><?= h($padrs->vigiflow_message) ?></td>
                            <td><?= h($padrs->vigiflow_date) ?></td>
                            <td><?= h($padrs->report_title) ?></td>
                            <td><?= h($padrs->report_type) ?></td>
                            <td><?= h($padrs->report_sadr) ?></td>
                            <td><?= h($padrs->sadr_vomiting) ?></td>
                            <td><?= h($padrs->sadr_dizziness) ?></td>
                            <td><?= h($padrs->sadr_headache) ?></td>
                            <td><?= h($padrs->sadr_joints) ?></td>
                            <td><?= h($padrs->sadr_rash) ?></td>
                            <td><?= h($padrs->sadr_mouth) ?></td>
                            <td><?= h($padrs->sadr_stomach) ?></td>
                            <td><?= h($padrs->sadr_urination) ?></td>
                            <td><?= h($padrs->sadr_eyes) ?></td>
                            <td><?= h($padrs->sadr_died) ?></td>
                            <td><?= h($padrs->pqmp_label) ?></td>
                            <td><?= h($padrs->patient_name) ?></td>
                            <td><?= h($padrs->pqmp_material) ?></td>
                            <td><?= h($padrs->date_of_birth) ?></td>
                            <td><?= h($padrs->age_group) ?></td>
                            <td><?= h($padrs->patient_address) ?></td>
                            <td><?= h($padrs->pqmp_color) ?></td>
                            <td><?= h($padrs->gender) ?></td>
                            <td><?= h($padrs->pqmp_smell) ?></td>
                            <td><?= h($padrs->pqmp_working) ?></td>
                            <td><?= h($padrs->pqmp_bottle) ?></td>
                            <td><?= h($padrs->pregnancy_status) ?></td>
                            <td><?= h($padrs->weight) ?></td>
                            <td><?= h($padrs->height) ?></td>
                            <td><?= h($padrs->diagnosis) ?></td>
                            <td><?= h($padrs->medical_history) ?></td>
                            <td><?= h($padrs->date_of_onset_of_reaction) ?></td>
                            <td><?= h($padrs->date_of_end_of_reaction) ?></td>
                            <td><?= h($padrs->description_of_reaction) ?></td>
                            <td><?= h($padrs->reaction_resolve) ?></td>
                            <td><?= h($padrs->reaction_reappear) ?></td>
                            <td><?= h($padrs->lab_investigation) ?></td>
                            <td><?= h($padrs->severity) ?></td>
                            <td><?= h($padrs->serious) ?></td>
                            <td><?= h($padrs->serious_reason) ?></td>
                            <td><?= h($padrs->action_taken) ?></td>
                            <td><?= h($padrs->outcome) ?></td>
                            <td><?= h($padrs->causality) ?></td>
                            <td><?= h($padrs->any_other_comment) ?></td>
                            <td><?= h($padrs->reporter_name) ?></td>
                            <td><?= h($padrs->reporter_email) ?></td>
                            <td><?= h($padrs->reporter_phone) ?></td>
                            <td><?= h($padrs->submitted) ?></td>
                            <td><?= h($padrs->submitted_date) ?></td>
                            <td><?= h($padrs->emails) ?></td>
                            <td><?= h($padrs->active) ?></td>
                            <td><?= h($padrs->device) ?></td>
                            <td><?= h($padrs->deleted) ?></td>
                            <td><?= h($padrs->deleted_date) ?></td>
                            <td><?= h($padrs->notified) ?></td>
                            <td><?= h($padrs->created) ?></td>
                            <td><?= h($padrs->modified) ?></td>
                            <td><?= h($padrs->reporter_date) ?></td>
                            <td><?= h($padrs->reporter_name_diff) ?></td>
                            <td><?= h($padrs->reporter_designation_diff) ?></td>
                            <td><?= h($padrs->reporter_email_diff) ?></td>
                            <td><?= h($padrs->reporter_phone_diff) ?></td>
                            <td><?= h($padrs->reporter_date_diff) ?></td>
                            <td><?= h($padrs->assigned_to) ?></td>
                            <td><?= h($padrs->assigned_by) ?></td>
                            <td><?= h($padrs->assigned_date) ?></td>
                            <td><?= h($padrs->reaction_on) ?></td>
                            <td><?= h($padrs->consent) ?></td>
                            <td><?= h($padrs->copied) ?></td>
                            <td><?= h($padrs->archived) ?></td>
                            <td><?= h($padrs->archived_date) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'Padrs', 'action' => 'view', $padrs->id]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'Padrs', 'action' => 'edit', $padrs->id]) ?>
                                <?= $this->Form->postLink(__('Delete'), ['controller' => 'Padrs', 'action' => 'delete', $padrs->id], ['confirm' => __('Are you sure you want to delete # {0}?', $padrs->id)]) ?>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </table>
                </div>
                <?php endif; ?>
            </div>
            <div class="related">
                <h4><?= __('Related Pqmps') ?></h4>
                <?php if (!empty($county->pqmps)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Id') ?></th>
                            <th><?= __('User Id') ?></th>
                            <th><?= __('Pqmp Id') ?></th>
                            <th><?= __('County Id') ?></th>
                            <th><?= __('Sub County Id') ?></th>
                            <th><?= __('Country Id') ?></th>
                            <th><?= __('Designation Id') ?></th>
                            <th><?= __('Reference No') ?></th>
                            <th><?= __('Facility Name') ?></th>
                            <th><?= __('Facility Code') ?></th>
                            <th><?= __('Facility Address') ?></th>
                            <th><?= __('Facility Phone') ?></th>
                            <th><?= __('Brand Name') ?></th>
                            <th><?= __('Generic Name') ?></th>
                            <th><?= __('Batch Number') ?></th>
                            <th><?= __('Manufacture Date') ?></th>
                            <th><?= __('Expiry Date') ?></th>
                            <th><?= __('Receipt Date') ?></th>
                            <th><?= __('Name Of Manufacturer') ?></th>
                            <th><?= __('Country Of Origin') ?></th>
                            <th><?= __('Supplier Name') ?></th>
                            <th><?= __('Supplier Address') ?></th>
                            <th><?= __('Product Formulation') ?></th>
                            <th><?= __('Product Formulation Specify') ?></th>
                            <th><?= __('Colour Change') ?></th>
                            <th><?= __('Separating') ?></th>
                            <th><?= __('Powdering') ?></th>
                            <th><?= __('Caking') ?></th>
                            <th><?= __('Moulding') ?></th>
                            <th><?= __('Odour Change') ?></th>
                            <th><?= __('Mislabeling') ?></th>
                            <th><?= __('Incomplete Pack') ?></th>
                            <th><?= __('Therapeutic Ineffectiveness') ?></th>
                            <th><?= __('Particulate Matter') ?></th>
                            <th><?= __('Complaint Other') ?></th>
                            <th><?= __('Complaint Other Specify') ?></th>
                            <th><?= __('Complaint Description') ?></th>
                            <th><?= __('Require Refrigeration') ?></th>
                            <th><?= __('Product At Facility') ?></th>
                            <th><?= __('Returned By Client') ?></th>
                            <th><?= __('Stored To Recommendations') ?></th>
                            <th><?= __('Other Details') ?></th>
                            <th><?= __('Comments') ?></th>
                            <th><?= __('Reporter Name') ?></th>
                            <th><?= __('Reporter Email') ?></th>
                            <th><?= __('Reporter Phone') ?></th>
                            <th><?= __('Contact Number') ?></th>
                            <th><?= __('Adverse Reaction') ?></th>
                            <th><?= __('Reaction Comments') ?></th>
                            <th><?= __('Medication Error') ?></th>
                            <th><?= __('Emails') ?></th>
                            <th><?= __('Submitted') ?></th>
                            <th><?= __('Submitted Date') ?></th>
                            <th><?= __('Active') ?></th>
                            <th><?= __('Device') ?></th>
                            <th><?= __('Copied') ?></th>
                            <th><?= __('Archived') ?></th>
                            <th><?= __('Archived Date') ?></th>
                            <th><?= __('Notified') ?></th>
                            <th><?= __('Deleted') ?></th>
                            <th><?= __('Deleted Date') ?></th>
                            <th><?= __('Created') ?></th>
                            <th><?= __('Modified') ?></th>
                            <th><?= __('Medicinal Product') ?></th>
                            <th><?= __('Blood Products') ?></th>
                            <th><?= __('Herbal Product') ?></th>
                            <th><?= __('Medical Device') ?></th>
                            <th><?= __('Cosmeceuticals') ?></th>
                            <th><?= __('Product Other') ?></th>
                            <th><?= __('Product Specify') ?></th>
                            <th><?= __('Product Vaccine') ?></th>
                            <th><?= __('Packaging') ?></th>
                            <th><?= __('Labelling') ?></th>
                            <th><?= __('Sampling') ?></th>
                            <th><?= __('Mechanism') ?></th>
                            <th><?= __('Electrical') ?></th>
                            <th><?= __('Device Data') ?></th>
                            <th><?= __('Software') ?></th>
                            <th><?= __('Environmental') ?></th>
                            <th><?= __('Failure To Calibrate') ?></th>
                            <th><?= __('Results') ?></th>
                            <th><?= __('Readings') ?></th>
                            <th><?= __('Cold Chain') ?></th>
                            <th><?= __('Reporter Date') ?></th>
                            <th><?= __('Person Submitting') ?></th>
                            <th><?= __('Reporter Name Diff') ?></th>
                            <th><?= __('Reporter Designation Diff') ?></th>
                            <th><?= __('Reporter Email Diff') ?></th>
                            <th><?= __('Reporter Phone Diff') ?></th>
                            <th><?= __('Reporter Date Diff') ?></th>
                            <th><?= __('Assigned To') ?></th>
                            <th><?= __('Assigned By') ?></th>
                            <th><?= __('Assigned Date') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($county->pqmps as $pqmps) : ?>
                        <tr>
                            <td><?= h($pqmps->id) ?></td>
                            <td><?= h($pqmps->user_id) ?></td>
                            <td><?= h($pqmps->pqmp_id) ?></td>
                            <td><?= h($pqmps->county_id) ?></td>
                            <td><?= h($pqmps->sub_county_id) ?></td>
                            <td><?= h($pqmps->country_id) ?></td>
                            <td><?= h($pqmps->designation_id) ?></td>
                            <td><?= h($pqmps->reference_no) ?></td>
                            <td><?= h($pqmps->facility_name) ?></td>
                            <td><?= h($pqmps->facility_code) ?></td>
                            <td><?= h($pqmps->facility_address) ?></td>
                            <td><?= h($pqmps->facility_phone) ?></td>
                            <td><?= h($pqmps->brand_name) ?></td>
                            <td><?= h($pqmps->generic_name) ?></td>
                            <td><?= h($pqmps->batch_number) ?></td>
                            <td><?= h($pqmps->manufacture_date) ?></td>
                            <td><?= h($pqmps->expiry_date) ?></td>
                            <td><?= h($pqmps->receipt_date) ?></td>
                            <td><?= h($pqmps->name_of_manufacturer) ?></td>
                            <td><?= h($pqmps->country_of_origin) ?></td>
                            <td><?= h($pqmps->supplier_name) ?></td>
                            <td><?= h($pqmps->supplier_address) ?></td>
                            <td><?= h($pqmps->product_formulation) ?></td>
                            <td><?= h($pqmps->product_formulation_specify) ?></td>
                            <td><?= h($pqmps->colour_change) ?></td>
                            <td><?= h($pqmps->separating) ?></td>
                            <td><?= h($pqmps->powdering) ?></td>
                            <td><?= h($pqmps->caking) ?></td>
                            <td><?= h($pqmps->moulding) ?></td>
                            <td><?= h($pqmps->odour_change) ?></td>
                            <td><?= h($pqmps->mislabeling) ?></td>
                            <td><?= h($pqmps->incomplete_pack) ?></td>
                            <td><?= h($pqmps->therapeutic_ineffectiveness) ?></td>
                            <td><?= h($pqmps->particulate_matter) ?></td>
                            <td><?= h($pqmps->complaint_other) ?></td>
                            <td><?= h($pqmps->complaint_other_specify) ?></td>
                            <td><?= h($pqmps->complaint_description) ?></td>
                            <td><?= h($pqmps->require_refrigeration) ?></td>
                            <td><?= h($pqmps->product_at_facility) ?></td>
                            <td><?= h($pqmps->returned_by_client) ?></td>
                            <td><?= h($pqmps->stored_to_recommendations) ?></td>
                            <td><?= h($pqmps->other_details) ?></td>
                            <td><?= h($pqmps->comments) ?></td>
                            <td><?= h($pqmps->reporter_name) ?></td>
                            <td><?= h($pqmps->reporter_email) ?></td>
                            <td><?= h($pqmps->reporter_phone) ?></td>
                            <td><?= h($pqmps->contact_number) ?></td>
                            <td><?= h($pqmps->adverse_reaction) ?></td>
                            <td><?= h($pqmps->reaction_comments) ?></td>
                            <td><?= h($pqmps->medication_error) ?></td>
                            <td><?= h($pqmps->emails) ?></td>
                            <td><?= h($pqmps->submitted) ?></td>
                            <td><?= h($pqmps->submitted_date) ?></td>
                            <td><?= h($pqmps->active) ?></td>
                            <td><?= h($pqmps->device) ?></td>
                            <td><?= h($pqmps->copied) ?></td>
                            <td><?= h($pqmps->archived) ?></td>
                            <td><?= h($pqmps->archived_date) ?></td>
                            <td><?= h($pqmps->notified) ?></td>
                            <td><?= h($pqmps->deleted) ?></td>
                            <td><?= h($pqmps->deleted_date) ?></td>
                            <td><?= h($pqmps->created) ?></td>
                            <td><?= h($pqmps->modified) ?></td>
                            <td><?= h($pqmps->medicinal_product) ?></td>
                            <td><?= h($pqmps->blood_products) ?></td>
                            <td><?= h($pqmps->herbal_product) ?></td>
                            <td><?= h($pqmps->medical_device) ?></td>
                            <td><?= h($pqmps->cosmeceuticals) ?></td>
                            <td><?= h($pqmps->product_other) ?></td>
                            <td><?= h($pqmps->product_specify) ?></td>
                            <td><?= h($pqmps->product_vaccine) ?></td>
                            <td><?= h($pqmps->packaging) ?></td>
                            <td><?= h($pqmps->labelling) ?></td>
                            <td><?= h($pqmps->sampling) ?></td>
                            <td><?= h($pqmps->mechanism) ?></td>
                            <td><?= h($pqmps->electrical) ?></td>
                            <td><?= h($pqmps->device_data) ?></td>
                            <td><?= h($pqmps->software) ?></td>
                            <td><?= h($pqmps->environmental) ?></td>
                            <td><?= h($pqmps->failure_to_calibrate) ?></td>
                            <td><?= h($pqmps->results) ?></td>
                            <td><?= h($pqmps->readings) ?></td>
                            <td><?= h($pqmps->cold_chain) ?></td>
                            <td><?= h($pqmps->reporter_date) ?></td>
                            <td><?= h($pqmps->person_submitting) ?></td>
                            <td><?= h($pqmps->reporter_name_diff) ?></td>
                            <td><?= h($pqmps->reporter_designation_diff) ?></td>
                            <td><?= h($pqmps->reporter_email_diff) ?></td>
                            <td><?= h($pqmps->reporter_phone_diff) ?></td>
                            <td><?= h($pqmps->reporter_date_diff) ?></td>
                            <td><?= h($pqmps->assigned_to) ?></td>
                            <td><?= h($pqmps->assigned_by) ?></td>
                            <td><?= h($pqmps->assigned_date) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'Pqmps', 'action' => 'view', $pqmps->id]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'Pqmps', 'action' => 'edit', $pqmps->id]) ?>
                                <?= $this->Form->postLink(__('Delete'), ['controller' => 'Pqmps', 'action' => 'delete', $pqmps->id], ['confirm' => __('Are you sure you want to delete # {0}?', $pqmps->id)]) ?>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </table>
                </div>
                <?php endif; ?>
            </div>
            <div class="related">
                <h4><?= __('Related Sadr Followups') ?></h4>
                <?php if (!empty($county->sadr_followups)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Id') ?></th>
                            <th><?= __('User Id') ?></th>
                            <th><?= __('County Id') ?></th>
                            <th><?= __('Sadr Id') ?></th>
                            <th><?= __('Designation Id') ?></th>
                            <th><?= __('Description Of Reaction') ?></th>
                            <th><?= __('Outcome') ?></th>
                            <th><?= __('Reporter Email') ?></th>
                            <th><?= __('Reporter Phone') ?></th>
                            <th><?= __('Submitted') ?></th>
                            <th><?= __('Emails') ?></th>
                            <th><?= __('Active') ?></th>
                            <th><?= __('Device') ?></th>
                            <th><?= __('Notified') ?></th>
                            <th><?= __('Created') ?></th>
                            <th><?= __('Modified') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($county->sadr_followups as $sadrFollowups) : ?>
                        <tr>
                            <td><?= h($sadrFollowups->id) ?></td>
                            <td><?= h($sadrFollowups->user_id) ?></td>
                            <td><?= h($sadrFollowups->county_id) ?></td>
                            <td><?= h($sadrFollowups->sadr_id) ?></td>
                            <td><?= h($sadrFollowups->designation_id) ?></td>
                            <td><?= h($sadrFollowups->description_of_reaction) ?></td>
                            <td><?= h($sadrFollowups->outcome) ?></td>
                            <td><?= h($sadrFollowups->reporter_email) ?></td>
                            <td><?= h($sadrFollowups->reporter_phone) ?></td>
                            <td><?= h($sadrFollowups->submitted) ?></td>
                            <td><?= h($sadrFollowups->emails) ?></td>
                            <td><?= h($sadrFollowups->active) ?></td>
                            <td><?= h($sadrFollowups->device) ?></td>
                            <td><?= h($sadrFollowups->notified) ?></td>
                            <td><?= h($sadrFollowups->created) ?></td>
                            <td><?= h($sadrFollowups->modified) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'SadrFollowups', 'action' => 'view', $sadrFollowups->id]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'SadrFollowups', 'action' => 'edit', $sadrFollowups->id]) ?>
                                <?= $this->Form->postLink(__('Delete'), ['controller' => 'SadrFollowups', 'action' => 'delete', $sadrFollowups->id], ['confirm' => __('Are you sure you want to delete # {0}?', $sadrFollowups->id)]) ?>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </table>
                </div>
                <?php endif; ?>
            </div>
            <div class="related">
                <h4><?= __('Related Sadrs') ?></h4>
                <?php if (!empty($county->sadrs)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Id') ?></th>
                            <th><?= __('Sadr Id') ?></th>
                            <th><?= __('User Id') ?></th>
                            <th><?= __('Pqmp Id') ?></th>
                            <th><?= __('Medication Id') ?></th>
                            <th><?= __('County Id') ?></th>
                            <th><?= __('Sub County Id') ?></th>
                            <th><?= __('Designation Id') ?></th>
                            <th><?= __('Reference No') ?></th>
                            <th><?= __('Vigiflow Id') ?></th>
                            <th><?= __('Report Title') ?></th>
                            <th><?= __('Report Type') ?></th>
                            <th><?= __('Report Sadr') ?></th>
                            <th><?= __('Report Therapeutic') ?></th>
                            <th><?= __('Report Misuse') ?></th>
                            <th><?= __('Report Off Label') ?></th>
                            <th><?= __('Product Category') ?></th>
                            <th><?= __('Medicinal Product') ?></th>
                            <th><?= __('Blood Products') ?></th>
                            <th><?= __('Herbal Product') ?></th>
                            <th><?= __('Cosmeceuticals') ?></th>
                            <th><?= __('Product Other') ?></th>
                            <th><?= __('Product Specify') ?></th>
                            <th><?= __('Name Of Institution') ?></th>
                            <th><?= __('Institution Code') ?></th>
                            <th><?= __('Address') ?></th>
                            <th><?= __('Contact') ?></th>
                            <th><?= __('Patient Name') ?></th>
                            <th><?= __('Ip No') ?></th>
                            <th><?= __('Date Of Birth') ?></th>
                            <th><?= __('Age Group') ?></th>
                            <th><?= __('Patient Address') ?></th>
                            <th><?= __('Ward') ?></th>
                            <th><?= __('Gender') ?></th>
                            <th><?= __('Known Allergy') ?></th>
                            <th><?= __('Known Allergy Specify') ?></th>
                            <th><?= __('Pregnant') ?></th>
                            <th><?= __('Pregnancy Status') ?></th>
                            <th><?= __('Weight') ?></th>
                            <th><?= __('Height') ?></th>
                            <th><?= __('Diagnosis') ?></th>
                            <th><?= __('Reaction') ?></th>
                            <th><?= __('Medical History') ?></th>
                            <th><?= __('Date Of Onset Of Reaction') ?></th>
                            <th><?= __('Description Of Reaction') ?></th>
                            <th><?= __('Reaction Resolve') ?></th>
                            <th><?= __('Reaction Reappear') ?></th>
                            <th><?= __('Lab Investigation') ?></th>
                            <th><?= __('Severity') ?></th>
                            <th><?= __('Serious') ?></th>
                            <th><?= __('Serious Reason') ?></th>
                            <th><?= __('Action Taken') ?></th>
                            <th><?= __('Outcome') ?></th>
                            <th><?= __('Causality') ?></th>
                            <th><?= __('Any Other Comment') ?></th>
                            <th><?= __('Reporter Name') ?></th>
                            <th><?= __('Reporter Email') ?></th>
                            <th><?= __('Reporter Phone') ?></th>
                            <th><?= __('Submitted') ?></th>
                            <th><?= __('Emails') ?></th>
                            <th><?= __('Active') ?></th>
                            <th><?= __('Device') ?></th>
                            <th><?= __('Deleted') ?></th>
                            <th><?= __('Archived') ?></th>
                            <th><?= __('Archived Date') ?></th>
                            <th><?= __('Deleted Date') ?></th>
                            <th><?= __('Notified') ?></th>
                            <th><?= __('Created') ?></th>
                            <th><?= __('Modified') ?></th>
                            <th><?= __('Reporter Date') ?></th>
                            <th><?= __('Person Submitting') ?></th>
                            <th><?= __('Reporter Name Diff') ?></th>
                            <th><?= __('Reporter Designation Diff') ?></th>
                            <th><?= __('Reporter Email Diff') ?></th>
                            <th><?= __('Reporter Phone Diff') ?></th>
                            <th><?= __('Reporter Date Diff') ?></th>
                            <th><?= __('Assigned To') ?></th>
                            <th><?= __('Assigned By') ?></th>
                            <th><?= __('Assigned Date') ?></th>
                            <th><?= __('Vigiflow Message') ?></th>
                            <th><?= __('Vigiflow Ref') ?></th>
                            <th><?= __('Vigiflow Date') ?></th>
                            <th><?= __('Webradr Ref') ?></th>
                            <th><?= __('Webradr Date') ?></th>
                            <th><?= __('Submitted Date') ?></th>
                            <th><?= __('Webradr Message') ?></th>
                            <th><?= __('Copied') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($county->sadrs as $sadrs) : ?>
                        <tr>
                            <td><?= h($sadrs->id) ?></td>
                            <td><?= h($sadrs->sadr_id) ?></td>
                            <td><?= h($sadrs->user_id) ?></td>
                            <td><?= h($sadrs->pqmp_id) ?></td>
                            <td><?= h($sadrs->medication_id) ?></td>
                            <td><?= h($sadrs->county_id) ?></td>
                            <td><?= h($sadrs->sub_county_id) ?></td>
                            <td><?= h($sadrs->designation_id) ?></td>
                            <td><?= h($sadrs->reference_no) ?></td>
                            <td><?= h($sadrs->vigiflow_id) ?></td>
                            <td><?= h($sadrs->report_title) ?></td>
                            <td><?= h($sadrs->report_type) ?></td>
                            <td><?= h($sadrs->report_sadr) ?></td>
                            <td><?= h($sadrs->report_therapeutic) ?></td>
                            <td><?= h($sadrs->report_misuse) ?></td>
                            <td><?= h($sadrs->report_off_label) ?></td>
                            <td><?= h($sadrs->product_category) ?></td>
                            <td><?= h($sadrs->medicinal_product) ?></td>
                            <td><?= h($sadrs->blood_products) ?></td>
                            <td><?= h($sadrs->herbal_product) ?></td>
                            <td><?= h($sadrs->cosmeceuticals) ?></td>
                            <td><?= h($sadrs->product_other) ?></td>
                            <td><?= h($sadrs->product_specify) ?></td>
                            <td><?= h($sadrs->name_of_institution) ?></td>
                            <td><?= h($sadrs->institution_code) ?></td>
                            <td><?= h($sadrs->address) ?></td>
                            <td><?= h($sadrs->contact) ?></td>
                            <td><?= h($sadrs->patient_name) ?></td>
                            <td><?= h($sadrs->ip_no) ?></td>
                            <td><?= h($sadrs->date_of_birth) ?></td>
                            <td><?= h($sadrs->age_group) ?></td>
                            <td><?= h($sadrs->patient_address) ?></td>
                            <td><?= h($sadrs->ward) ?></td>
                            <td><?= h($sadrs->gender) ?></td>
                            <td><?= h($sadrs->known_allergy) ?></td>
                            <td><?= h($sadrs->known_allergy_specify) ?></td>
                            <td><?= h($sadrs->pregnant) ?></td>
                            <td><?= h($sadrs->pregnancy_status) ?></td>
                            <td><?= h($sadrs->weight) ?></td>
                            <td><?= h($sadrs->height) ?></td>
                            <td><?= h($sadrs->diagnosis) ?></td>
                            <td><?= h($sadrs->reaction) ?></td>
                            <td><?= h($sadrs->medical_history) ?></td>
                            <td><?= h($sadrs->date_of_onset_of_reaction) ?></td>
                            <td><?= h($sadrs->description_of_reaction) ?></td>
                            <td><?= h($sadrs->reaction_resolve) ?></td>
                            <td><?= h($sadrs->reaction_reappear) ?></td>
                            <td><?= h($sadrs->lab_investigation) ?></td>
                            <td><?= h($sadrs->severity) ?></td>
                            <td><?= h($sadrs->serious) ?></td>
                            <td><?= h($sadrs->serious_reason) ?></td>
                            <td><?= h($sadrs->action_taken) ?></td>
                            <td><?= h($sadrs->outcome) ?></td>
                            <td><?= h($sadrs->causality) ?></td>
                            <td><?= h($sadrs->any_other_comment) ?></td>
                            <td><?= h($sadrs->reporter_name) ?></td>
                            <td><?= h($sadrs->reporter_email) ?></td>
                            <td><?= h($sadrs->reporter_phone) ?></td>
                            <td><?= h($sadrs->submitted) ?></td>
                            <td><?= h($sadrs->emails) ?></td>
                            <td><?= h($sadrs->active) ?></td>
                            <td><?= h($sadrs->device) ?></td>
                            <td><?= h($sadrs->deleted) ?></td>
                            <td><?= h($sadrs->archived) ?></td>
                            <td><?= h($sadrs->archived_date) ?></td>
                            <td><?= h($sadrs->deleted_date) ?></td>
                            <td><?= h($sadrs->notified) ?></td>
                            <td><?= h($sadrs->created) ?></td>
                            <td><?= h($sadrs->modified) ?></td>
                            <td><?= h($sadrs->reporter_date) ?></td>
                            <td><?= h($sadrs->person_submitting) ?></td>
                            <td><?= h($sadrs->reporter_name_diff) ?></td>
                            <td><?= h($sadrs->reporter_designation_diff) ?></td>
                            <td><?= h($sadrs->reporter_email_diff) ?></td>
                            <td><?= h($sadrs->reporter_phone_diff) ?></td>
                            <td><?= h($sadrs->reporter_date_diff) ?></td>
                            <td><?= h($sadrs->assigned_to) ?></td>
                            <td><?= h($sadrs->assigned_by) ?></td>
                            <td><?= h($sadrs->assigned_date) ?></td>
                            <td><?= h($sadrs->vigiflow_message) ?></td>
                            <td><?= h($sadrs->vigiflow_ref) ?></td>
                            <td><?= h($sadrs->vigiflow_date) ?></td>
                            <td><?= h($sadrs->webradr_ref) ?></td>
                            <td><?= h($sadrs->webradr_date) ?></td>
                            <td><?= h($sadrs->submitted_date) ?></td>
                            <td><?= h($sadrs->webradr_message) ?></td>
                            <td><?= h($sadrs->copied) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'Sadrs', 'action' => 'view', $sadrs->id]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'Sadrs', 'action' => 'edit', $sadrs->id]) ?>
                                <?= $this->Form->postLink(__('Delete'), ['controller' => 'Sadrs', 'action' => 'delete', $sadrs->id], ['confirm' => __('Are you sure you want to delete # {0}?', $sadrs->id)]) ?>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </table>
                </div>
                <?php endif; ?>
            </div>
            <div class="related">
                <h4><?= __('Related Sub Counties') ?></h4>
                <?php if (!empty($county->sub_counties)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Id') ?></th>
                            <th><?= __('County Id') ?></th>
                            <th><?= __('Sub County Name') ?></th>
                            <th><?= __('County Name') ?></th>
                            <th><?= __('Province') ?></th>
                            <th><?= __('Pop 2009') ?></th>
                            <th><?= __('RegVoters') ?></th>
                            <th><?= __('AreaSqKms') ?></th>
                            <th><?= __('CAWards') ?></th>
                            <th><?= __('MainEthnicGroup') ?></th>
                            <th><?= __('Created') ?></th>
                            <th><?= __('Modified') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($county->sub_counties as $subCounties) : ?>
                        <tr>
                            <td><?= h($subCounties->id) ?></td>
                            <td><?= h($subCounties->county_id) ?></td>
                            <td><?= h($subCounties->sub_county_name) ?></td>
                            <td><?= h($subCounties->county_name) ?></td>
                            <td><?= h($subCounties->Province) ?></td>
                            <td><?= h($subCounties->Pop_2009) ?></td>
                            <td><?= h($subCounties->RegVoters) ?></td>
                            <td><?= h($subCounties->AreaSqKms) ?></td>
                            <td><?= h($subCounties->CAWards) ?></td>
                            <td><?= h($subCounties->MainEthnicGroup) ?></td>
                            <td><?= h($subCounties->created) ?></td>
                            <td><?= h($subCounties->modified) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'SubCounties', 'action' => 'view', $subCounties->id]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'SubCounties', 'action' => 'edit', $subCounties->id]) ?>
                                <?= $this->Form->postLink(__('Delete'), ['controller' => 'SubCounties', 'action' => 'delete', $subCounties->id], ['confirm' => __('Are you sure you want to delete # {0}?', $subCounties->id)]) ?>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </table>
                </div>
                <?php endif; ?>
            </div>
            <div class="related">
                <h4><?= __('Related Transfusions') ?></h4>
                <?php if (!empty($county->transfusions)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Id') ?></th>
                            <th><?= __('User Id') ?></th>
                            <th><?= __('Pqmp Id') ?></th>
                            <th><?= __('Transfusion Id') ?></th>
                            <th><?= __('Reference No') ?></th>
                            <th><?= __('County Id') ?></th>
                            <th><?= __('Designation Id') ?></th>
                            <th><?= __('Form Type') ?></th>
                            <th><?= __('Patient Name') ?></th>
                            <th><?= __('Gender') ?></th>
                            <th><?= __('Patient Address') ?></th>
                            <th><?= __('Patient Phone') ?></th>
                            <th><?= __('Date Of Birth') ?></th>
                            <th><?= __('Age Years') ?></th>
                            <th><?= __('Diagnosis') ?></th>
                            <th><?= __('Ward') ?></th>
                            <th><?= __('Pre Hb') ?></th>
                            <th><?= __('Transfusion Reason') ?></th>
                            <th><?= __('Current Medications') ?></th>
                            <th><?= __('Obstetric History') ?></th>
                            <th><?= __('Previous Transfusion') ?></th>
                            <th><?= __('Transfusion Comment') ?></th>
                            <th><?= __('Previous Reactions') ?></th>
                            <th><?= __('Reaction Comment') ?></th>
                            <th><?= __('Reaction General') ?></th>
                            <th><?= __('Reaction Fever') ?></th>
                            <th><?= __('Reaction Chills') ?></th>
                            <th><?= __('Reaction Flushing') ?></th>
                            <th><?= __('Reaction Vomiting') ?></th>
                            <th><?= __('Reaction Dermatological') ?></th>
                            <th><?= __('Reaction Cardiac') ?></th>
                            <th><?= __('Reaction Chest') ?></th>
                            <th><?= __('Reaction Dyspnoea') ?></th>
                            <th><?= __('Reaction Hypotension') ?></th>
                            <th><?= __('Reaction Tachycardia') ?></th>
                            <th><?= __('Reaction Renal') ?></th>
                            <th><?= __('Reaction Anuria') ?></th>
                            <th><?= __('Reaction Oliguria') ?></th>
                            <th><?= __('Reaction Dark') ?></th>
                            <th><?= __('Reaction Haematological') ?></th>
                            <th><?= __('Reaction Other') ?></th>
                            <th><?= __('Vital Start Bp') ?></th>
                            <th><?= __('Vital Start T') ?></th>
                            <th><?= __('Vital Start P') ?></th>
                            <th><?= __('Vital Start R') ?></th>
                            <th><?= __('Vital During Bp') ?></th>
                            <th><?= __('Vital During T') ?></th>
                            <th><?= __('Vital During P') ?></th>
                            <th><?= __('Vital During R') ?></th>
                            <th><?= __('Vital Stop Bp') ?></th>
                            <th><?= __('Vital Stop T') ?></th>
                            <th><?= __('Vital Stop P') ?></th>
                            <th><?= __('Vital Stop R') ?></th>
                            <th><?= __('Nurse Name') ?></th>
                            <th><?= __('Lab Hemolysis') ?></th>
                            <th><?= __('Lab Hemolysis Present') ?></th>
                            <th><?= __('Recipient Blood') ?></th>
                            <th><?= __('Hae Wbc') ?></th>
                            <th><?= __('Hae Hb') ?></th>
                            <th><?= __('Hae Rbc') ?></th>
                            <th><?= __('Hae Hct') ?></th>
                            <th><?= __('Hae Mcv') ?></th>
                            <th><?= __('Hae Mch') ?></th>
                            <th><?= __('Hae Mchc') ?></th>
                            <th><?= __('Hae Plt') ?></th>
                            <th><?= __('Film Rbc') ?></th>
                            <th><?= __('Film Wbc') ?></th>
                            <th><?= __('Film Plt') ?></th>
                            <th><?= __('Donor Hemolysis') ?></th>
                            <th><?= __('Donor Age') ?></th>
                            <th><?= __('Culture Donor Pack') ?></th>
                            <th><?= __('Culture Recipient Blood') ?></th>
                            <th><?= __('Compatible Saline Rt') ?></th>
                            <th><?= __('Compatible Saline Ii') ?></th>
                            <th><?= __('Compatible Ahg') ?></th>
                            <th><?= __('Compatible Albumin') ?></th>
                            <th><?= __('Negative Result') ?></th>
                            <th><?= __('Anti A') ?></th>
                            <th><?= __('Anti B') ?></th>
                            <th><?= __('Urinalysis') ?></th>
                            <th><?= __('Evaluation') ?></th>
                            <th><?= __('Adverse Reaction') ?></th>
                            <th><?= __('Reporter Name') ?></th>
                            <th><?= __('Reporter Email') ?></th>
                            <th><?= __('Reporter Phone') ?></th>
                            <th><?= __('Report Type') ?></th>
                            <th><?= __('Submitted') ?></th>
                            <th><?= __('Submitted Date') ?></th>
                            <th><?= __('Copied') ?></th>
                            <th><?= __('Archived') ?></th>
                            <th><?= __('Archived Date') ?></th>
                            <th><?= __('Active') ?></th>
                            <th><?= __('Created') ?></th>
                            <th><?= __('Modified') ?></th>
                            <th><?= __('Reporter Date') ?></th>
                            <th><?= __('Person Submitting') ?></th>
                            <th><?= __('Reporter Name Diff') ?></th>
                            <th><?= __('Reporter Designation Diff') ?></th>
                            <th><?= __('Reporter Email Diff') ?></th>
                            <th><?= __('Reporter Phone Diff') ?></th>
                            <th><?= __('Reporter Date Diff') ?></th>
                            <th><?= __('Assigned To') ?></th>
                            <th><?= __('Assigned By') ?></th>
                            <th><?= __('Assigned Date') ?></th>
                            <th><?= __('Clinic Venue') ?></th>
                            <th><?= __('Specimens Post Transfusion') ?></th>
                            <th><?= __('Specimens Edta Blood') ?></th>
                            <th><?= __('Specimens Void Urine') ?></th>
                            <th><?= __('Specimens Blood Reacted') ?></th>
                            <th><?= __('Specimens Blood Bags') ?></th>
                            <th><?= __('Clinic Code') ?></th>
                            <th><?= __('Donor Number') ?></th>
                            <th><?= __('National Number') ?></th>
                            <th><?= __('Home Phone') ?></th>
                            <th><?= __('Cell Phone') ?></th>
                            <th><?= __('Email Address') ?></th>
                            <th><?= __('Residence') ?></th>
                            <th><?= __('Nurse Date') ?></th>
                            <th><?= __('Low Volume') ?></th>
                            <th><?= __('Venepuncture') ?></th>
                            <th><?= __('Hematoma') ?></th>
                            <th><?= __('Faint') ?></th>
                            <th><?= __('Deleted') ?></th>
                            <th><?= __('Deleted Date') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($county->transfusions as $transfusions) : ?>
                        <tr>
                            <td><?= h($transfusions->id) ?></td>
                            <td><?= h($transfusions->user_id) ?></td>
                            <td><?= h($transfusions->pqmp_id) ?></td>
                            <td><?= h($transfusions->transfusion_id) ?></td>
                            <td><?= h($transfusions->reference_no) ?></td>
                            <td><?= h($transfusions->county_id) ?></td>
                            <td><?= h($transfusions->designation_id) ?></td>
                            <td><?= h($transfusions->form_type) ?></td>
                            <td><?= h($transfusions->patient_name) ?></td>
                            <td><?= h($transfusions->gender) ?></td>
                            <td><?= h($transfusions->patient_address) ?></td>
                            <td><?= h($transfusions->patient_phone) ?></td>
                            <td><?= h($transfusions->date_of_birth) ?></td>
                            <td><?= h($transfusions->age_years) ?></td>
                            <td><?= h($transfusions->diagnosis) ?></td>
                            <td><?= h($transfusions->ward) ?></td>
                            <td><?= h($transfusions->pre_hb) ?></td>
                            <td><?= h($transfusions->transfusion_reason) ?></td>
                            <td><?= h($transfusions->current_medications) ?></td>
                            <td><?= h($transfusions->obstetric_history) ?></td>
                            <td><?= h($transfusions->previous_transfusion) ?></td>
                            <td><?= h($transfusions->transfusion_comment) ?></td>
                            <td><?= h($transfusions->previous_reactions) ?></td>
                            <td><?= h($transfusions->reaction_comment) ?></td>
                            <td><?= h($transfusions->reaction_general) ?></td>
                            <td><?= h($transfusions->reaction_fever) ?></td>
                            <td><?= h($transfusions->reaction_chills) ?></td>
                            <td><?= h($transfusions->reaction_flushing) ?></td>
                            <td><?= h($transfusions->reaction_vomiting) ?></td>
                            <td><?= h($transfusions->reaction_dermatological) ?></td>
                            <td><?= h($transfusions->reaction_cardiac) ?></td>
                            <td><?= h($transfusions->reaction_chest) ?></td>
                            <td><?= h($transfusions->reaction_dyspnoea) ?></td>
                            <td><?= h($transfusions->reaction_hypotension) ?></td>
                            <td><?= h($transfusions->reaction_tachycardia) ?></td>
                            <td><?= h($transfusions->reaction_renal) ?></td>
                            <td><?= h($transfusions->reaction_anuria) ?></td>
                            <td><?= h($transfusions->reaction_oliguria) ?></td>
                            <td><?= h($transfusions->reaction_dark) ?></td>
                            <td><?= h($transfusions->reaction_haematological) ?></td>
                            <td><?= h($transfusions->reaction_other) ?></td>
                            <td><?= h($transfusions->vital_start_bp) ?></td>
                            <td><?= h($transfusions->vital_start_t) ?></td>
                            <td><?= h($transfusions->vital_start_p) ?></td>
                            <td><?= h($transfusions->vital_start_r) ?></td>
                            <td><?= h($transfusions->vital_during_bp) ?></td>
                            <td><?= h($transfusions->vital_during_t) ?></td>
                            <td><?= h($transfusions->vital_during_p) ?></td>
                            <td><?= h($transfusions->vital_during_r) ?></td>
                            <td><?= h($transfusions->vital_stop_bp) ?></td>
                            <td><?= h($transfusions->vital_stop_t) ?></td>
                            <td><?= h($transfusions->vital_stop_p) ?></td>
                            <td><?= h($transfusions->vital_stop_r) ?></td>
                            <td><?= h($transfusions->nurse_name) ?></td>
                            <td><?= h($transfusions->lab_hemolysis) ?></td>
                            <td><?= h($transfusions->lab_hemolysis_present) ?></td>
                            <td><?= h($transfusions->recipient_blood) ?></td>
                            <td><?= h($transfusions->hae_wbc) ?></td>
                            <td><?= h($transfusions->hae_hb) ?></td>
                            <td><?= h($transfusions->hae_rbc) ?></td>
                            <td><?= h($transfusions->hae_hct) ?></td>
                            <td><?= h($transfusions->hae_mcv) ?></td>
                            <td><?= h($transfusions->hae_mch) ?></td>
                            <td><?= h($transfusions->hae_mchc) ?></td>
                            <td><?= h($transfusions->hae_plt) ?></td>
                            <td><?= h($transfusions->film_rbc) ?></td>
                            <td><?= h($transfusions->film_wbc) ?></td>
                            <td><?= h($transfusions->film_plt) ?></td>
                            <td><?= h($transfusions->donor_hemolysis) ?></td>
                            <td><?= h($transfusions->donor_age) ?></td>
                            <td><?= h($transfusions->culture_donor_pack) ?></td>
                            <td><?= h($transfusions->culture_recipient_blood) ?></td>
                            <td><?= h($transfusions->compatible_saline_rt) ?></td>
                            <td><?= h($transfusions->compatible_saline_ii) ?></td>
                            <td><?= h($transfusions->compatible_ahg) ?></td>
                            <td><?= h($transfusions->compatible_albumin) ?></td>
                            <td><?= h($transfusions->negative_result) ?></td>
                            <td><?= h($transfusions->anti_a) ?></td>
                            <td><?= h($transfusions->anti_b) ?></td>
                            <td><?= h($transfusions->urinalysis) ?></td>
                            <td><?= h($transfusions->evaluation) ?></td>
                            <td><?= h($transfusions->adverse_reaction) ?></td>
                            <td><?= h($transfusions->reporter_name) ?></td>
                            <td><?= h($transfusions->reporter_email) ?></td>
                            <td><?= h($transfusions->reporter_phone) ?></td>
                            <td><?= h($transfusions->report_type) ?></td>
                            <td><?= h($transfusions->submitted) ?></td>
                            <td><?= h($transfusions->submitted_date) ?></td>
                            <td><?= h($transfusions->copied) ?></td>
                            <td><?= h($transfusions->archived) ?></td>
                            <td><?= h($transfusions->archived_date) ?></td>
                            <td><?= h($transfusions->active) ?></td>
                            <td><?= h($transfusions->created) ?></td>
                            <td><?= h($transfusions->modified) ?></td>
                            <td><?= h($transfusions->reporter_date) ?></td>
                            <td><?= h($transfusions->person_submitting) ?></td>
                            <td><?= h($transfusions->reporter_name_diff) ?></td>
                            <td><?= h($transfusions->reporter_designation_diff) ?></td>
                            <td><?= h($transfusions->reporter_email_diff) ?></td>
                            <td><?= h($transfusions->reporter_phone_diff) ?></td>
                            <td><?= h($transfusions->reporter_date_diff) ?></td>
                            <td><?= h($transfusions->assigned_to) ?></td>
                            <td><?= h($transfusions->assigned_by) ?></td>
                            <td><?= h($transfusions->assigned_date) ?></td>
                            <td><?= h($transfusions->clinic_venue) ?></td>
                            <td><?= h($transfusions->specimens_post_transfusion) ?></td>
                            <td><?= h($transfusions->specimens_edta_blood) ?></td>
                            <td><?= h($transfusions->specimens_void_urine) ?></td>
                            <td><?= h($transfusions->specimens_blood_reacted) ?></td>
                            <td><?= h($transfusions->specimens_blood_bags) ?></td>
                            <td><?= h($transfusions->clinic_code) ?></td>
                            <td><?= h($transfusions->donor_number) ?></td>
                            <td><?= h($transfusions->national_number) ?></td>
                            <td><?= h($transfusions->home_phone) ?></td>
                            <td><?= h($transfusions->cell_phone) ?></td>
                            <td><?= h($transfusions->email_address) ?></td>
                            <td><?= h($transfusions->residence) ?></td>
                            <td><?= h($transfusions->nurse_date) ?></td>
                            <td><?= h($transfusions->low_volume) ?></td>
                            <td><?= h($transfusions->venepuncture) ?></td>
                            <td><?= h($transfusions->hematoma) ?></td>
                            <td><?= h($transfusions->faint) ?></td>
                            <td><?= h($transfusions->deleted) ?></td>
                            <td><?= h($transfusions->deleted_date) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'Transfusions', 'action' => 'view', $transfusions->id]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'Transfusions', 'action' => 'edit', $transfusions->id]) ?>
                                <?= $this->Form->postLink(__('Delete'), ['controller' => 'Transfusions', 'action' => 'delete', $transfusions->id], ['confirm' => __('Are you sure you want to delete # {0}?', $transfusions->id)]) ?>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </table>
                </div>
                <?php endif; ?>
            </div>
            <div class="related">
                <h4><?= __('Related Users') ?></h4>
                <?php if (!empty($county->users)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Id') ?></th>
                            <th><?= __('Designation Id') ?></th>
                            <th><?= __('County Id') ?></th>
                            <th><?= __('Username') ?></th>
                            <th><?= __('Password') ?></th>
                            <th><?= __('Confirm Password') ?></th>
                            <th><?= __('Name') ?></th>
                            <th><?= __('Email') ?></th>
                            <th><?= __('Role Id') ?></th>
                            <th><?= __('Name Of Institution') ?></th>
                            <th><?= __('Institution Address') ?></th>
                            <th><?= __('Institution Code') ?></th>
                            <th><?= __('Institution Email') ?></th>
                            <th><?= __('Institution Contact') ?></th>
                            <th><?= __('Ward') ?></th>
                            <th><?= __('Phone No') ?></th>
                            <th><?= __('Forgot Password') ?></th>
                            <th><?= __('Initial Email') ?></th>
                            <th><?= __('Is Active') ?></th>
                            <th><?= __('Is Admin') ?></th>
                            <th><?= __('Deleted') ?></th>
                            <th><?= __('Deleted Date') ?></th>
                            <th><?= __('Created') ?></th>
                            <th><?= __('Modified') ?></th>
                            <th><?= __('User Type') ?></th>
                            <th><?= __('Sponsor Email') ?></th>
                            <th><?= __('Health Program') ?></th>
                            <th><?= __('Active Date') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($county->users as $users) : ?>
                        <tr>
                            <td><?= h($users->id) ?></td>
                            <td><?= h($users->designation_id) ?></td>
                            <td><?= h($users->county_id) ?></td>
                            <td><?= h($users->username) ?></td>
                            <td><?= h($users->password) ?></td>
                            <td><?= h($users->confirm_password) ?></td>
                            <td><?= h($users->name) ?></td>
                            <td><?= h($users->email) ?></td>
                            <td><?= h($users->role_id) ?></td>
                            <td><?= h($users->name_of_institution) ?></td>
                            <td><?= h($users->institution_address) ?></td>
                            <td><?= h($users->institution_code) ?></td>
                            <td><?= h($users->institution_email) ?></td>
                            <td><?= h($users->institution_contact) ?></td>
                            <td><?= h($users->ward) ?></td>
                            <td><?= h($users->phone_no) ?></td>
                            <td><?= h($users->forgot_password) ?></td>
                            <td><?= h($users->initial_email) ?></td>
                            <td><?= h($users->is_active) ?></td>
                            <td><?= h($users->is_admin) ?></td>
                            <td><?= h($users->deleted) ?></td>
                            <td><?= h($users->deleted_date) ?></td>
                            <td><?= h($users->created) ?></td>
                            <td><?= h($users->modified) ?></td>
                            <td><?= h($users->user_type) ?></td>
                            <td><?= h($users->sponsor_email) ?></td>
                            <td><?= h($users->health_program) ?></td>
                            <td><?= h($users->active_date) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'Users', 'action' => 'view', $users->id]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'Users', 'action' => 'edit', $users->id]) ?>
                                <?= $this->Form->postLink(__('Delete'), ['controller' => 'Users', 'action' => 'delete', $users->id], ['confirm' => __('Are you sure you want to delete # {0}?', $users->id)]) ?>
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
