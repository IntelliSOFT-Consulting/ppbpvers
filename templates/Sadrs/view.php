<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Sadr $sadr
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Sadr'), ['action' => 'edit', $sadr->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Sadr'), ['action' => 'delete', $sadr->id], ['confirm' => __('Are you sure you want to delete # {0}?', $sadr->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Sadrs'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Sadr'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="sadrs view content">
            <h3><?= h($sadr->id) ?></h3>
            <table>
                <tr>
                    <th><?= __('User') ?></th>
                    <td><?= $sadr->has('user') ? $this->Html->link($sadr->user->name, ['controller' => 'Users', 'action' => 'view', $sadr->user->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Pqmp') ?></th>
                    <td><?= $sadr->has('pqmp') ? $this->Html->link($sadr->pqmp->id, ['controller' => 'Pqmps', 'action' => 'view', $sadr->pqmp->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Medication') ?></th>
                    <td><?= $sadr->has('medication') ? $this->Html->link($sadr->medication->id, ['controller' => 'Medications', 'action' => 'view', $sadr->medication->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('County') ?></th>
                    <td><?= $sadr->has('county') ? $this->Html->link($sadr->county->id, ['controller' => 'Counties', 'action' => 'view', $sadr->county->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Sub County') ?></th>
                    <td><?= $sadr->has('sub_county') ? $this->Html->link($sadr->sub_county->id, ['controller' => 'SubCounties', 'action' => 'view', $sadr->sub_county->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Designation') ?></th>
                    <td><?= $sadr->has('designation') ? $this->Html->link($sadr->designation->name, ['controller' => 'Designations', 'action' => 'view', $sadr->designation->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Reference No') ?></th>
                    <td><?= h($sadr->reference_no) ?></td>
                </tr>
                <tr>
                    <th><?= __('Vigiflow Id') ?></th>
                    <td><?= h($sadr->vigiflow_id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Report Title') ?></th>
                    <td><?= h($sadr->report_title) ?></td>
                </tr>
                <tr>
                    <th><?= __('Report Type') ?></th>
                    <td><?= h($sadr->report_type) ?></td>
                </tr>
                <tr>
                    <th><?= __('Product Category') ?></th>
                    <td><?= h($sadr->product_category) ?></td>
                </tr>
                <tr>
                    <th><?= __('Product Specify') ?></th>
                    <td><?= h($sadr->product_specify) ?></td>
                </tr>
                <tr>
                    <th><?= __('Name Of Institution') ?></th>
                    <td><?= h($sadr->name_of_institution) ?></td>
                </tr>
                <tr>
                    <th><?= __('Institution Code') ?></th>
                    <td><?= h($sadr->institution_code) ?></td>
                </tr>
                <tr>
                    <th><?= __('Address') ?></th>
                    <td><?= h($sadr->address) ?></td>
                </tr>
                <tr>
                    <th><?= __('Contact') ?></th>
                    <td><?= h($sadr->contact) ?></td>
                </tr>
                <tr>
                    <th><?= __('Patient Name') ?></th>
                    <td><?= h($sadr->patient_name) ?></td>
                </tr>
                <tr>
                    <th><?= __('Ip No') ?></th>
                    <td><?= h($sadr->ip_no) ?></td>
                </tr>
                <tr>
                    <th><?= __('Date Of Birth') ?></th>
                    <td><?= h($sadr->date_of_birth) ?></td>
                </tr>
                <tr>
                    <th><?= __('Age Group') ?></th>
                    <td><?= h($sadr->age_group) ?></td>
                </tr>
                <tr>
                    <th><?= __('Patient Address') ?></th>
                    <td><?= h($sadr->patient_address) ?></td>
                </tr>
                <tr>
                    <th><?= __('Ward') ?></th>
                    <td><?= h($sadr->ward) ?></td>
                </tr>
                <tr>
                    <th><?= __('Gender') ?></th>
                    <td><?= h($sadr->gender) ?></td>
                </tr>
                <tr>
                    <th><?= __('Known Allergy') ?></th>
                    <td><?= h($sadr->known_allergy) ?></td>
                </tr>
                <tr>
                    <th><?= __('Known Allergy Specify') ?></th>
                    <td><?= h($sadr->known_allergy_specify) ?></td>
                </tr>
                <tr>
                    <th><?= __('Pregnant') ?></th>
                    <td><?= h($sadr->pregnant) ?></td>
                </tr>
                <tr>
                    <th><?= __('Pregnancy Status') ?></th>
                    <td><?= h($sadr->pregnancy_status) ?></td>
                </tr>
                <tr>
                    <th><?= __('Weight') ?></th>
                    <td><?= h($sadr->weight) ?></td>
                </tr>
                <tr>
                    <th><?= __('Height') ?></th>
                    <td><?= h($sadr->height) ?></td>
                </tr>
                <tr>
                    <th><?= __('Reaction') ?></th>
                    <td><?= h($sadr->reaction) ?></td>
                </tr>
                <tr>
                    <th><?= __('Date Of Onset Of Reaction') ?></th>
                    <td><?= h($sadr->date_of_onset_of_reaction) ?></td>
                </tr>
                <tr>
                    <th><?= __('Reaction Resolve') ?></th>
                    <td><?= h($sadr->reaction_resolve) ?></td>
                </tr>
                <tr>
                    <th><?= __('Reaction Reappear') ?></th>
                    <td><?= h($sadr->reaction_reappear) ?></td>
                </tr>
                <tr>
                    <th><?= __('Severity') ?></th>
                    <td><?= h($sadr->severity) ?></td>
                </tr>
                <tr>
                    <th><?= __('Serious') ?></th>
                    <td><?= h($sadr->serious) ?></td>
                </tr>
                <tr>
                    <th><?= __('Serious Reason') ?></th>
                    <td><?= h($sadr->serious_reason) ?></td>
                </tr>
                <tr>
                    <th><?= __('Action Taken') ?></th>
                    <td><?= h($sadr->action_taken) ?></td>
                </tr>
                <tr>
                    <th><?= __('Outcome') ?></th>
                    <td><?= h($sadr->outcome) ?></td>
                </tr>
                <tr>
                    <th><?= __('Causality') ?></th>
                    <td><?= h($sadr->causality) ?></td>
                </tr>
                <tr>
                    <th><?= __('Reporter Name') ?></th>
                    <td><?= h($sadr->reporter_name) ?></td>
                </tr>
                <tr>
                    <th><?= __('Reporter Email') ?></th>
                    <td><?= h($sadr->reporter_email) ?></td>
                </tr>
                <tr>
                    <th><?= __('Reporter Phone') ?></th>
                    <td><?= h($sadr->reporter_phone) ?></td>
                </tr>
                <tr>
                    <th><?= __('Person Submitting') ?></th>
                    <td><?= h($sadr->person_submitting) ?></td>
                </tr>
                <tr>
                    <th><?= __('Reporter Name Diff') ?></th>
                    <td><?= h($sadr->reporter_name_diff) ?></td>
                </tr>
                <tr>
                    <th><?= __('Reporter Email Diff') ?></th>
                    <td><?= h($sadr->reporter_email_diff) ?></td>
                </tr>
                <tr>
                    <th><?= __('Reporter Phone Diff') ?></th>
                    <td><?= h($sadr->reporter_phone_diff) ?></td>
                </tr>
                <tr>
                    <th><?= __('Vigiflow Ref') ?></th>
                    <td><?= h($sadr->vigiflow_ref) ?></td>
                </tr>
                <tr>
                    <th><?= __('Webradr Ref') ?></th>
                    <td><?= h($sadr->webradr_ref) ?></td>
                </tr>
                <tr>
                    <th><?= __('Webradr Message') ?></th>
                    <td><?= h($sadr->webradr_message) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($sadr->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Sadr Id') ?></th>
                    <td><?= $sadr->sadr_id === null ? '' : $this->Number->format($sadr->sadr_id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Report Misuse') ?></th>
                    <td><?= $sadr->report_misuse === null ? '' : $this->Number->format($sadr->report_misuse) ?></td>
                </tr>
                <tr>
                    <th><?= __('Report Off Label') ?></th>
                    <td><?= $sadr->report_off_label === null ? '' : $this->Number->format($sadr->report_off_label) ?></td>
                </tr>
                <tr>
                    <th><?= __('Submitted') ?></th>
                    <td><?= $sadr->submitted === null ? '' : $this->Number->format($sadr->submitted) ?></td>
                </tr>
                <tr>
                    <th><?= __('Emails') ?></th>
                    <td><?= $sadr->emails === null ? '' : $this->Number->format($sadr->emails) ?></td>
                </tr>
                <tr>
                    <th><?= __('Device') ?></th>
                    <td><?= $sadr->device === null ? '' : $this->Number->format($sadr->device) ?></td>
                </tr>
                <tr>
                    <th><?= __('Notified') ?></th>
                    <td><?= $sadr->notified === null ? '' : $this->Number->format($sadr->notified) ?></td>
                </tr>
                <tr>
                    <th><?= __('Reporter Designation Diff') ?></th>
                    <td><?= $sadr->reporter_designation_diff === null ? '' : $this->Number->format($sadr->reporter_designation_diff) ?></td>
                </tr>
                <tr>
                    <th><?= __('Assigned To') ?></th>
                    <td><?= $sadr->assigned_to === null ? '' : $this->Number->format($sadr->assigned_to) ?></td>
                </tr>
                <tr>
                    <th><?= __('Assigned By') ?></th>
                    <td><?= $sadr->assigned_by === null ? '' : $this->Number->format($sadr->assigned_by) ?></td>
                </tr>
                <tr>
                    <th><?= __('Copied') ?></th>
                    <td><?= $sadr->copied === null ? '' : $this->Number->format($sadr->copied) ?></td>
                </tr>
                <tr>
                    <th><?= __('Archived Date') ?></th>
                    <td><?= h($sadr->archived_date) ?></td>
                </tr>
                <tr>
                    <th><?= __('Deleted Date') ?></th>
                    <td><?= h($sadr->deleted_date) ?></td>
                </tr>
                <tr>
                    <th><?= __('Created') ?></th>
                    <td><?= h($sadr->created) ?></td>
                </tr>
                <tr>
                    <th><?= __('Modified') ?></th>
                    <td><?= h($sadr->modified) ?></td>
                </tr>
                <tr>
                    <th><?= __('Reporter Date') ?></th>
                    <td><?= h($sadr->reporter_date) ?></td>
                </tr>
                <tr>
                    <th><?= __('Reporter Date Diff') ?></th>
                    <td><?= h($sadr->reporter_date_diff) ?></td>
                </tr>
                <tr>
                    <th><?= __('Assigned Date') ?></th>
                    <td><?= h($sadr->assigned_date) ?></td>
                </tr>
                <tr>
                    <th><?= __('Vigiflow Date') ?></th>
                    <td><?= h($sadr->vigiflow_date) ?></td>
                </tr>
                <tr>
                    <th><?= __('Webradr Date') ?></th>
                    <td><?= h($sadr->webradr_date) ?></td>
                </tr>
                <tr>
                    <th><?= __('Submitted Date') ?></th>
                    <td><?= h($sadr->submitted_date) ?></td>
                </tr>
                <tr>
                    <th><?= __('Report Sadr') ?></th>
                    <td><?= $sadr->report_sadr ? __('Yes') : __('No'); ?></td>
                </tr>
                <tr>
                    <th><?= __('Report Therapeutic') ?></th>
                    <td><?= $sadr->report_therapeutic ? __('Yes') : __('No'); ?></td>
                </tr>
                <tr>
                    <th><?= __('Medicinal Product') ?></th>
                    <td><?= $sadr->medicinal_product ? __('Yes') : __('No'); ?></td>
                </tr>
                <tr>
                    <th><?= __('Blood Products') ?></th>
                    <td><?= $sadr->blood_products ? __('Yes') : __('No'); ?></td>
                </tr>
                <tr>
                    <th><?= __('Herbal Product') ?></th>
                    <td><?= $sadr->herbal_product ? __('Yes') : __('No'); ?></td>
                </tr>
                <tr>
                    <th><?= __('Cosmeceuticals') ?></th>
                    <td><?= $sadr->cosmeceuticals ? __('Yes') : __('No'); ?></td>
                </tr>
                <tr>
                    <th><?= __('Product Other') ?></th>
                    <td><?= $sadr->product_other ? __('Yes') : __('No'); ?></td>
                </tr>
                <tr>
                    <th><?= __('Active') ?></th>
                    <td><?= $sadr->active ? __('Yes') : __('No'); ?></td>
                </tr>
                <tr>
                    <th><?= __('Deleted') ?></th>
                    <td><?= $sadr->deleted ? __('Yes') : __('No'); ?></td>
                </tr>
                <tr>
                    <th><?= __('Archived') ?></th>
                    <td><?= $sadr->archived ? __('Yes') : __('No'); ?></td>
                </tr>
            </table>
            <div class="text">
                <strong><?= __('Diagnosis') ?></strong>
                <blockquote>
                    <?= $this->Text->autoParagraph(h($sadr->diagnosis)); ?>
                </blockquote>
            </div>
            <div class="text">
                <strong><?= __('Medical History') ?></strong>
                <blockquote>
                    <?= $this->Text->autoParagraph(h($sadr->medical_history)); ?>
                </blockquote>
            </div>
            <div class="text">
                <strong><?= __('Description Of Reaction') ?></strong>
                <blockquote>
                    <?= $this->Text->autoParagraph(h($sadr->description_of_reaction)); ?>
                </blockquote>
            </div>
            <div class="text">
                <strong><?= __('Lab Investigation') ?></strong>
                <blockquote>
                    <?= $this->Text->autoParagraph(h($sadr->lab_investigation)); ?>
                </blockquote>
            </div>
            <div class="text">
                <strong><?= __('Any Other Comment') ?></strong>
                <blockquote>
                    <?= $this->Text->autoParagraph(h($sadr->any_other_comment)); ?>
                </blockquote>
            </div>
            <div class="text">
                <strong><?= __('Vigiflow Message') ?></strong>
                <blockquote>
                    <?= $this->Text->autoParagraph(h($sadr->vigiflow_message)); ?>
                </blockquote>
            </div>
            <div class="related">
                <h4><?= __('Related Sadrs') ?></h4>
                <?php if (!empty($sadr->sadrs)) : ?>
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
                        <?php foreach ($sadr->sadrs as $sadrs) : ?>
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
                <h4><?= __('Related Attachments Old') ?></h4>
                <?php if (!empty($sadr->attachments_old)) : ?>
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
                        <?php foreach ($sadr->attachments_old as $attachmentsOld) : ?>
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
                <h4><?= __('Related Sadr Descriptions') ?></h4>
                <?php if (!empty($sadr->sadr_descriptions)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Id') ?></th>
                            <th><?= __('Sadr Id') ?></th>
                            <th><?= __('Description') ?></th>
                            <th><?= __('Created') ?></th>
                            <th><?= __('Modified') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($sadr->sadr_descriptions as $sadrDescriptions) : ?>
                        <tr>
                            <td><?= h($sadrDescriptions->id) ?></td>
                            <td><?= h($sadrDescriptions->sadr_id) ?></td>
                            <td><?= h($sadrDescriptions->description) ?></td>
                            <td><?= h($sadrDescriptions->created) ?></td>
                            <td><?= h($sadrDescriptions->modified) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'SadrDescriptions', 'action' => 'view', $sadrDescriptions->id]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'SadrDescriptions', 'action' => 'edit', $sadrDescriptions->id]) ?>
                                <?= $this->Form->postLink(__('Delete'), ['controller' => 'SadrDescriptions', 'action' => 'delete', $sadrDescriptions->id], ['confirm' => __('Are you sure you want to delete # {0}?', $sadrDescriptions->id)]) ?>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </table>
                </div>
                <?php endif; ?>
            </div>
            <div class="related">
                <h4><?= __('Related Sadr Followups') ?></h4>
                <?php if (!empty($sadr->sadr_followups)) : ?>
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
                        <?php foreach ($sadr->sadr_followups as $sadrFollowups) : ?>
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
                <h4><?= __('Related Sadr List Of Drugs') ?></h4>
                <?php if (!empty($sadr->sadr_list_of_drugs)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Id') ?></th>
                            <th><?= __('Sadr Id') ?></th>
                            <th><?= __('Sadr Followup Id') ?></th>
                            <th><?= __('Dose Id') ?></th>
                            <th><?= __('Route Id') ?></th>
                            <th><?= __('Frequency Id') ?></th>
                            <th><?= __('Frequency Id Other') ?></th>
                            <th><?= __('Drug Name') ?></th>
                            <th><?= __('Brand Name') ?></th>
                            <th><?= __('Batch No') ?></th>
                            <th><?= __('Manufacturer') ?></th>
                            <th><?= __('Dose') ?></th>
                            <th><?= __('Start Date') ?></th>
                            <th><?= __('Stop Date') ?></th>
                            <th><?= __('Indication') ?></th>
                            <th><?= __('Suspected Drug') ?></th>
                            <th><?= __('Created') ?></th>
                            <th><?= __('Modified') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($sadr->sadr_list_of_drugs as $sadrListOfDrugs) : ?>
                        <tr>
                            <td><?= h($sadrListOfDrugs->id) ?></td>
                            <td><?= h($sadrListOfDrugs->sadr_id) ?></td>
                            <td><?= h($sadrListOfDrugs->sadr_followup_id) ?></td>
                            <td><?= h($sadrListOfDrugs->dose_id) ?></td>
                            <td><?= h($sadrListOfDrugs->route_id) ?></td>
                            <td><?= h($sadrListOfDrugs->frequency_id) ?></td>
                            <td><?= h($sadrListOfDrugs->frequency_id_other) ?></td>
                            <td><?= h($sadrListOfDrugs->drug_name) ?></td>
                            <td><?= h($sadrListOfDrugs->brand_name) ?></td>
                            <td><?= h($sadrListOfDrugs->batch_no) ?></td>
                            <td><?= h($sadrListOfDrugs->manufacturer) ?></td>
                            <td><?= h($sadrListOfDrugs->dose) ?></td>
                            <td><?= h($sadrListOfDrugs->start_date) ?></td>
                            <td><?= h($sadrListOfDrugs->stop_date) ?></td>
                            <td><?= h($sadrListOfDrugs->indication) ?></td>
                            <td><?= h($sadrListOfDrugs->suspected_drug) ?></td>
                            <td><?= h($sadrListOfDrugs->created) ?></td>
                            <td><?= h($sadrListOfDrugs->modified) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'SadrListOfDrugs', 'action' => 'view', $sadrListOfDrugs->id]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'SadrListOfDrugs', 'action' => 'edit', $sadrListOfDrugs->id]) ?>
                                <?= $this->Form->postLink(__('Delete'), ['controller' => 'SadrListOfDrugs', 'action' => 'delete', $sadrListOfDrugs->id], ['confirm' => __('Are you sure you want to delete # {0}?', $sadrListOfDrugs->id)]) ?>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </table>
                </div>
                <?php endif; ?>
            </div>
            <div class="related">
                <h4><?= __('Related Sadr List Of Medicines') ?></h4>
                <?php if (!empty($sadr->sadr_list_of_medicines)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Id') ?></th>
                            <th><?= __('Sadr Id') ?></th>
                            <th><?= __('Sadr Followup Id') ?></th>
                            <th><?= __('Dose Id') ?></th>
                            <th><?= __('Route Id') ?></th>
                            <th><?= __('Frequency Id') ?></th>
                            <th><?= __('Frequency Other') ?></th>
                            <th><?= __('Drug Name') ?></th>
                            <th><?= __('Brand Name') ?></th>
                            <th><?= __('Batch No') ?></th>
                            <th><?= __('Manufacturer') ?></th>
                            <th><?= __('Dose') ?></th>
                            <th><?= __('Start Date') ?></th>
                            <th><?= __('Stop Date') ?></th>
                            <th><?= __('Indication') ?></th>
                            <th><?= __('Suspected Drug') ?></th>
                            <th><?= __('Created') ?></th>
                            <th><?= __('Modified') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($sadr->sadr_list_of_medicines as $sadrListOfMedicines) : ?>
                        <tr>
                            <td><?= h($sadrListOfMedicines->id) ?></td>
                            <td><?= h($sadrListOfMedicines->sadr_id) ?></td>
                            <td><?= h($sadrListOfMedicines->sadr_followup_id) ?></td>
                            <td><?= h($sadrListOfMedicines->dose_id) ?></td>
                            <td><?= h($sadrListOfMedicines->route_id) ?></td>
                            <td><?= h($sadrListOfMedicines->frequency_id) ?></td>
                            <td><?= h($sadrListOfMedicines->frequency_other) ?></td>
                            <td><?= h($sadrListOfMedicines->drug_name) ?></td>
                            <td><?= h($sadrListOfMedicines->brand_name) ?></td>
                            <td><?= h($sadrListOfMedicines->batch_no) ?></td>
                            <td><?= h($sadrListOfMedicines->manufacturer) ?></td>
                            <td><?= h($sadrListOfMedicines->dose) ?></td>
                            <td><?= h($sadrListOfMedicines->start_date) ?></td>
                            <td><?= h($sadrListOfMedicines->stop_date) ?></td>
                            <td><?= h($sadrListOfMedicines->indication) ?></td>
                            <td><?= h($sadrListOfMedicines->suspected_drug) ?></td>
                            <td><?= h($sadrListOfMedicines->created) ?></td>
                            <td><?= h($sadrListOfMedicines->modified) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'SadrListOfMedicines', 'action' => 'view', $sadrListOfMedicines->id]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'SadrListOfMedicines', 'action' => 'edit', $sadrListOfMedicines->id]) ?>
                                <?= $this->Form->postLink(__('Delete'), ['controller' => 'SadrListOfMedicines', 'action' => 'delete', $sadrListOfMedicines->id], ['confirm' => __('Are you sure you want to delete # {0}?', $sadrListOfMedicines->id)]) ?>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </table>
                </div>
                <?php endif; ?>
            </div>
            <div class="related">
                <h4><?= __('Related Sadr Reaction') ?></h4>
                <?php if (!empty($sadr->sadr_reaction)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Id') ?></th>
                            <th><?= __('Sadr Id') ?></th>
                            <th><?= __('Reaction') ?></th>
                            <th><?= __('Created') ?></th>
                            <th><?= __('Modified') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($sadr->sadr_reaction as $sadrReaction) : ?>
                        <tr>
                            <td><?= h($sadrReaction->id) ?></td>
                            <td><?= h($sadrReaction->sadr_id) ?></td>
                            <td><?= h($sadrReaction->reaction) ?></td>
                            <td><?= h($sadrReaction->created) ?></td>
                            <td><?= h($sadrReaction->modified) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'SadrReaction', 'action' => 'view', $sadrReaction->id]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'SadrReaction', 'action' => 'edit', $sadrReaction->id]) ?>
                                <?= $this->Form->postLink(__('Delete'), ['controller' => 'SadrReaction', 'action' => 'delete', $sadrReaction->id], ['confirm' => __('Are you sure you want to delete # {0}?', $sadrReaction->id)]) ?>
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
