<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Medication $medication
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Medication'), ['action' => 'edit', $medication->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Medication'), ['action' => 'delete', $medication->id], ['confirm' => __('Are you sure you want to delete # {0}?', $medication->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Medications'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Medication'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="medications view content">
            <h3><?= h($medication->id) ?></h3>
            <table>
                <tr>
                    <th><?= __('User') ?></th>
                    <td><?= $medication->has('user') ? $this->Html->link($medication->user->name, ['controller' => 'Users', 'action' => 'view', $medication->user->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Pqmp') ?></th>
                    <td><?= $medication->has('pqmp') ? $this->Html->link($medication->pqmp->id, ['controller' => 'Pqmps', 'action' => 'view', $medication->pqmp->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Reference No') ?></th>
                    <td><?= h($medication->reference_no) ?></td>
                </tr>
                <tr>
                    <th><?= __('Adverse Reaction') ?></th>
                    <td><?= h($medication->adverse_reaction) ?></td>
                </tr>
                <tr>
                    <th><?= __('County') ?></th>
                    <td><?= $medication->has('county') ? $this->Html->link($medication->county->id, ['controller' => 'Counties', 'action' => 'view', $medication->county->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Designation') ?></th>
                    <td><?= $medication->has('designation') ? $this->Html->link($medication->designation->name, ['controller' => 'Designations', 'action' => 'view', $medication->designation->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Time Of Event') ?></th>
                    <td><?= h($medication->time_of_event) ?></td>
                </tr>
                <tr>
                    <th><?= __('Name Of Institution') ?></th>
                    <td><?= h($medication->name_of_institution) ?></td>
                </tr>
                <tr>
                    <th><?= __('Institution Code') ?></th>
                    <td><?= h($medication->institution_code) ?></td>
                </tr>
                <tr>
                    <th><?= __('Institution Contact') ?></th>
                    <td><?= h($medication->institution_contact) ?></td>
                </tr>
                <tr>
                    <th><?= __('Patient Name') ?></th>
                    <td><?= h($medication->patient_name) ?></td>
                </tr>
                <tr>
                    <th><?= __('Gender') ?></th>
                    <td><?= h($medication->gender) ?></td>
                </tr>
                <tr>
                    <th><?= __('Pregnancy Status') ?></th>
                    <td><?= h($medication->pregnancy_status) ?></td>
                </tr>
                <tr>
                    <th><?= __('Patient Phone') ?></th>
                    <td><?= h($medication->patient_phone) ?></td>
                </tr>
                <tr>
                    <th><?= __('Age Years') ?></th>
                    <td><?= h($medication->age_years) ?></td>
                </tr>
                <tr>
                    <th><?= __('Ward') ?></th>
                    <td><?= h($medication->ward) ?></td>
                </tr>
                <tr>
                    <th><?= __('Clinic') ?></th>
                    <td><?= h($medication->clinic) ?></td>
                </tr>
                <tr>
                    <th><?= __('Pharmacy') ?></th>
                    <td><?= h($medication->pharmacy) ?></td>
                </tr>
                <tr>
                    <th><?= __('Accident') ?></th>
                    <td><?= h($medication->accident) ?></td>
                </tr>
                <tr>
                    <th><?= __('Location Other') ?></th>
                    <td><?= h($medication->location_other) ?></td>
                </tr>
                <tr>
                    <th><?= __('Process Occur') ?></th>
                    <td><?= h($medication->process_occur) ?></td>
                </tr>
                <tr>
                    <th><?= __('Process Occur Specify') ?></th>
                    <td><?= h($medication->process_occur_specify) ?></td>
                </tr>
                <tr>
                    <th><?= __('Reach Patient') ?></th>
                    <td><?= h($medication->reach_patient) ?></td>
                </tr>
                <tr>
                    <th><?= __('Correct Medication') ?></th>
                    <td><?= h($medication->correct_medication) ?></td>
                </tr>
                <tr>
                    <th><?= __('Outcome') ?></th>
                    <td><?= h($medication->outcome) ?></td>
                </tr>
                <tr>
                    <th><?= __('Outcome Error') ?></th>
                    <td><?= h($medication->outcome_error) ?></td>
                </tr>
                <tr>
                    <th><?= __('Outcome Death') ?></th>
                    <td><?= h($medication->outcome_death) ?></td>
                </tr>
                <tr>
                    <th><?= __('Reporter Name') ?></th>
                    <td><?= h($medication->reporter_name) ?></td>
                </tr>
                <tr>
                    <th><?= __('Reporter Email') ?></th>
                    <td><?= h($medication->reporter_email) ?></td>
                </tr>
                <tr>
                    <th><?= __('Reporter Phone') ?></th>
                    <td><?= h($medication->reporter_phone) ?></td>
                </tr>
                <tr>
                    <th><?= __('Report Type') ?></th>
                    <td><?= h($medication->report_type) ?></td>
                </tr>
                <tr>
                    <th><?= __('Person Submitting') ?></th>
                    <td><?= h($medication->person_submitting) ?></td>
                </tr>
                <tr>
                    <th><?= __('Reporter Name Diff') ?></th>
                    <td><?= h($medication->reporter_name_diff) ?></td>
                </tr>
                <tr>
                    <th><?= __('Reporter Email Diff') ?></th>
                    <td><?= h($medication->reporter_email_diff) ?></td>
                </tr>
                <tr>
                    <th><?= __('Reporter Phone Diff') ?></th>
                    <td><?= h($medication->reporter_phone_diff) ?></td>
                </tr>
                <tr>
                    <th><?= __('Vigiflow Ref') ?></th>
                    <td><?= h($medication->vigiflow_ref) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($medication->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Medication Id') ?></th>
                    <td><?= $medication->medication_id === null ? '' : $this->Number->format($medication->medication_id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Submitted') ?></th>
                    <td><?= $medication->submitted === null ? '' : $this->Number->format($medication->submitted) ?></td>
                </tr>
                <tr>
                    <th><?= __('Copied') ?></th>
                    <td><?= $medication->copied === null ? '' : $this->Number->format($medication->copied) ?></td>
                </tr>
                <tr>
                    <th><?= __('Archived') ?></th>
                    <td><?= $medication->archived === null ? '' : $this->Number->format($medication->archived) ?></td>
                </tr>
                <tr>
                    <th><?= __('Deleted') ?></th>
                    <td><?= $medication->deleted === null ? '' : $this->Number->format($medication->deleted) ?></td>
                </tr>
                <tr>
                    <th><?= __('Reporter Designation Diff') ?></th>
                    <td><?= $medication->reporter_designation_diff === null ? '' : $this->Number->format($medication->reporter_designation_diff) ?></td>
                </tr>
                <tr>
                    <th><?= __('Assigned To') ?></th>
                    <td><?= $medication->assigned_to === null ? '' : $this->Number->format($medication->assigned_to) ?></td>
                </tr>
                <tr>
                    <th><?= __('Assigned By') ?></th>
                    <td><?= $medication->assigned_by === null ? '' : $this->Number->format($medication->assigned_by) ?></td>
                </tr>
                <tr>
                    <th><?= __('Date Of Event') ?></th>
                    <td><?= h($medication->date_of_event) ?></td>
                </tr>
                <tr>
                    <th><?= __('Date Of Birth') ?></th>
                    <td><?= h($medication->date_of_birth) ?></td>
                </tr>
                <tr>
                    <th><?= __('Submitted Date') ?></th>
                    <td><?= h($medication->submitted_date) ?></td>
                </tr>
                <tr>
                    <th><?= __('Archived Date') ?></th>
                    <td><?= h($medication->archived_date) ?></td>
                </tr>
                <tr>
                    <th><?= __('Deleted Date') ?></th>
                    <td><?= h($medication->deleted_date) ?></td>
                </tr>
                <tr>
                    <th><?= __('Created') ?></th>
                    <td><?= h($medication->created) ?></td>
                </tr>
                <tr>
                    <th><?= __('Modified') ?></th>
                    <td><?= h($medication->modified) ?></td>
                </tr>
                <tr>
                    <th><?= __('Reporter Date') ?></th>
                    <td><?= h($medication->reporter_date) ?></td>
                </tr>
                <tr>
                    <th><?= __('Reporter Date Diff') ?></th>
                    <td><?= h($medication->reporter_date_diff) ?></td>
                </tr>
                <tr>
                    <th><?= __('Assigned Date') ?></th>
                    <td><?= h($medication->assigned_date) ?></td>
                </tr>
                <tr>
                    <th><?= __('Error Cause Inexperience') ?></th>
                    <td><?= $medication->error_cause_inexperience ? __('Yes') : __('No'); ?></td>
                </tr>
                <tr>
                    <th><?= __('Error Cause Knowledge') ?></th>
                    <td><?= $medication->error_cause_knowledge ? __('Yes') : __('No'); ?></td>
                </tr>
                <tr>
                    <th><?= __('Error Cause Distraction') ?></th>
                    <td><?= $medication->error_cause_distraction ? __('Yes') : __('No'); ?></td>
                </tr>
                <tr>
                    <th><?= __('Error Cause Sound') ?></th>
                    <td><?= $medication->error_cause_sound ? __('Yes') : __('No'); ?></td>
                </tr>
                <tr>
                    <th><?= __('Error Cause Medication') ?></th>
                    <td><?= $medication->error_cause_medication ? __('Yes') : __('No'); ?></td>
                </tr>
                <tr>
                    <th><?= __('Error Cause Packaging') ?></th>
                    <td><?= $medication->error_cause_packaging ? __('Yes') : __('No'); ?></td>
                </tr>
                <tr>
                    <th><?= __('Error Cause Workload') ?></th>
                    <td><?= $medication->error_cause_workload ? __('Yes') : __('No'); ?></td>
                </tr>
                <tr>
                    <th><?= __('Error Cause Peak') ?></th>
                    <td><?= $medication->error_cause_peak ? __('Yes') : __('No'); ?></td>
                </tr>
                <tr>
                    <th><?= __('Error Cause Stock') ?></th>
                    <td><?= $medication->error_cause_stock ? __('Yes') : __('No'); ?></td>
                </tr>
                <tr>
                    <th><?= __('Error Cause Procedure') ?></th>
                    <td><?= $medication->error_cause_procedure ? __('Yes') : __('No'); ?></td>
                </tr>
                <tr>
                    <th><?= __('Error Cause Abbreviations') ?></th>
                    <td><?= $medication->error_cause_abbreviations ? __('Yes') : __('No'); ?></td>
                </tr>
                <tr>
                    <th><?= __('Error Cause Illegible') ?></th>
                    <td><?= $medication->error_cause_illegible ? __('Yes') : __('No'); ?></td>
                </tr>
                <tr>
                    <th><?= __('Error Cause Inaccurate') ?></th>
                    <td><?= $medication->error_cause_inaccurate ? __('Yes') : __('No'); ?></td>
                </tr>
                <tr>
                    <th><?= __('Error Cause Labelling') ?></th>
                    <td><?= $medication->error_cause_labelling ? __('Yes') : __('No'); ?></td>
                </tr>
                <tr>
                    <th><?= __('Error Cause Computer') ?></th>
                    <td><?= $medication->error_cause_computer ? __('Yes') : __('No'); ?></td>
                </tr>
                <tr>
                    <th><?= __('Error Cause Other') ?></th>
                    <td><?= $medication->error_cause_other ? __('Yes') : __('No'); ?></td>
                </tr>
                <tr>
                    <th><?= __('Active') ?></th>
                    <td><?= $medication->active ? __('Yes') : __('No'); ?></td>
                </tr>
            </table>
            <div class="text">
                <strong><?= __('Description Of Error') ?></strong>
                <blockquote>
                    <?= $this->Text->autoParagraph(h($medication->description_of_error)); ?>
                </blockquote>
            </div>
            <div class="text">
                <strong><?= __('Direct Result') ?></strong>
                <blockquote>
                    <?= $this->Text->autoParagraph(h($medication->direct_result)); ?>
                </blockquote>
            </div>
            <div class="text">
                <strong><?= __('Error Cause Specify') ?></strong>
                <blockquote>
                    <?= $this->Text->autoParagraph(h($medication->error_cause_specify)); ?>
                </blockquote>
            </div>
            <div class="text">
                <strong><?= __('Recommendations') ?></strong>
                <blockquote>
                    <?= $this->Text->autoParagraph(h($medication->recommendations)); ?>
                </blockquote>
            </div>
            <div class="text">
                <strong><?= __('Vigiflow Message') ?></strong>
                <blockquote>
                    <?= $this->Text->autoParagraph(h($medication->vigiflow_message)); ?>
                </blockquote>
            </div>
            <div class="related">
                <h4><?= __('Related Medications') ?></h4>
                <?php if (!empty($medication->medications)) : ?>
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
                        <?php foreach ($medication->medications as $medications) : ?>
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
                <h4><?= __('Related Attachments Old') ?></h4>
                <?php if (!empty($medication->attachments_old)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Id') ?></th>
                            <th><?= __('Sadr Id') ?></th>
                            <th><?= __('Sadr Followup Id') ?></th>
                            <th><?= __('Pqmp Id') ?></th>
                            <th><?= __('Aefi Id') ?></th>
                            <th><?= __('Device Id') ?></th>
                            <th><?= __('Transfusion Id') ?></th>
                            <th><?= __('Medication Id') ?></th>
                            <th><?= __('Filename') ?></th>
                            <th><?= __('Description') ?></th>
                            <th><?= __('Mimetype') ?></th>
                            <th><?= __('Filesize') ?></th>
                            <th><?= __('Dir') ?></th>
                            <th><?= __('File') ?></th>
                            <th><?= __('Basename') ?></th>
                            <th><?= __('Dirname') ?></th>
                            <th><?= __('Checksum') ?></th>
                            <th><?= __('Model') ?></th>
                            <th><?= __('Foreign Key') ?></th>
                            <th><?= __('Alternative') ?></th>
                            <th><?= __('Group') ?></th>
                            <th><?= __('Created') ?></th>
                            <th><?= __('Modified') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($medication->attachments_old as $attachmentsOld) : ?>
                        <tr>
                            <td><?= h($attachmentsOld->id) ?></td>
                            <td><?= h($attachmentsOld->sadr_id) ?></td>
                            <td><?= h($attachmentsOld->sadr_followup_id) ?></td>
                            <td><?= h($attachmentsOld->pqmp_id) ?></td>
                            <td><?= h($attachmentsOld->aefi_id) ?></td>
                            <td><?= h($attachmentsOld->device_id) ?></td>
                            <td><?= h($attachmentsOld->transfusion_id) ?></td>
                            <td><?= h($attachmentsOld->medication_id) ?></td>
                            <td><?= h($attachmentsOld->filename) ?></td>
                            <td><?= h($attachmentsOld->description) ?></td>
                            <td><?= h($attachmentsOld->mimetype) ?></td>
                            <td><?= h($attachmentsOld->filesize) ?></td>
                            <td><?= h($attachmentsOld->dir) ?></td>
                            <td><?= h($attachmentsOld->file) ?></td>
                            <td><?= h($attachmentsOld->basename) ?></td>
                            <td><?= h($attachmentsOld->dirname) ?></td>
                            <td><?= h($attachmentsOld->checksum) ?></td>
                            <td><?= h($attachmentsOld->model) ?></td>
                            <td><?= h($attachmentsOld->foreign_key) ?></td>
                            <td><?= h($attachmentsOld->alternative) ?></td>
                            <td><?= h($attachmentsOld->group) ?></td>
                            <td><?= h($attachmentsOld->created) ?></td>
                            <td><?= h($attachmentsOld->modified) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'AttachmentsOld', 'action' => 'view', $attachmentsOld->id]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'AttachmentsOld', 'action' => 'edit', $attachmentsOld->id]) ?>
                                <?= $this->Form->postLink(__('Delete'), ['controller' => 'AttachmentsOld', 'action' => 'delete', $attachmentsOld->id], ['confirm' => __('Are you sure you want to delete # {0}?', $attachmentsOld->id)]) ?>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </table>
                </div>
                <?php endif; ?>
            </div>
            <div class="related">
                <h4><?= __('Related Medication Products') ?></h4>
                <?php if (!empty($medication->medication_products)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Id') ?></th>
                            <th><?= __('Medication Id') ?></th>
                            <th><?= __('Generic Name I') ?></th>
                            <th><?= __('Product Name I') ?></th>
                            <th><?= __('Dosage Form I') ?></th>
                            <th><?= __('Dosage I') ?></th>
                            <th><?= __('Manufacturer I') ?></th>
                            <th><?= __('Strength I') ?></th>
                            <th><?= __('Container I') ?></th>
                            <th><?= __('Generic Name Ii') ?></th>
                            <th><?= __('Product Name Ii') ?></th>
                            <th><?= __('Dosage Form Ii') ?></th>
                            <th><?= __('Dosage Ii') ?></th>
                            <th><?= __('Manufacturer Ii') ?></th>
                            <th><?= __('Strength Ii') ?></th>
                            <th><?= __('Container Ii') ?></th>
                            <th><?= __('Created') ?></th>
                            <th><?= __('Modifed') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($medication->medication_products as $medicationProducts) : ?>
                        <tr>
                            <td><?= h($medicationProducts->id) ?></td>
                            <td><?= h($medicationProducts->medication_id) ?></td>
                            <td><?= h($medicationProducts->generic_name_i) ?></td>
                            <td><?= h($medicationProducts->product_name_i) ?></td>
                            <td><?= h($medicationProducts->dosage_form_i) ?></td>
                            <td><?= h($medicationProducts->dosage_i) ?></td>
                            <td><?= h($medicationProducts->manufacturer_i) ?></td>
                            <td><?= h($medicationProducts->strength_i) ?></td>
                            <td><?= h($medicationProducts->container_i) ?></td>
                            <td><?= h($medicationProducts->generic_name_ii) ?></td>
                            <td><?= h($medicationProducts->product_name_ii) ?></td>
                            <td><?= h($medicationProducts->dosage_form_ii) ?></td>
                            <td><?= h($medicationProducts->dosage_ii) ?></td>
                            <td><?= h($medicationProducts->manufacturer_ii) ?></td>
                            <td><?= h($medicationProducts->strength_ii) ?></td>
                            <td><?= h($medicationProducts->container_ii) ?></td>
                            <td><?= h($medicationProducts->created) ?></td>
                            <td><?= h($medicationProducts->modifed) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'MedicationProducts', 'action' => 'view', $medicationProducts->id]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'MedicationProducts', 'action' => 'edit', $medicationProducts->id]) ?>
                                <?= $this->Form->postLink(__('Delete'), ['controller' => 'MedicationProducts', 'action' => 'delete', $medicationProducts->id], ['confirm' => __('Are you sure you want to delete # {0}?', $medicationProducts->id)]) ?>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </table>
                </div>
                <?php endif; ?>
            </div>
            <div class="related">
                <h4><?= __('Related Sadrs') ?></h4>
                <?php if (!empty($medication->sadrs)) : ?>
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
                        <?php foreach ($medication->sadrs as $sadrs) : ?>
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
        </div>
    </div>
</div>
