<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Padr $padr
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Padr'), ['action' => 'edit', $padr->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Padr'), ['action' => 'delete', $padr->id], ['confirm' => __('Are you sure you want to delete # {0}?', $padr->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Padrs'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Padr'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="padrs view content">
            <h3><?= h($padr->id) ?></h3>
            <table>
                <tr>
                    <th><?= __('User') ?></th>
                    <td><?= $padr->has('user') ? $this->Html->link($padr->user->name, ['controller' => 'Users', 'action' => 'view', $padr->user->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('County') ?></th>
                    <td><?= $padr->has('county') ? $this->Html->link($padr->county->id, ['controller' => 'Counties', 'action' => 'view', $padr->county->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Sub County') ?></th>
                    <td><?= $padr->has('sub_county') ? $this->Html->link($padr->sub_county->id, ['controller' => 'SubCounties', 'action' => 'view', $padr->sub_county->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Designation') ?></th>
                    <td><?= $padr->has('designation') ? $this->Html->link($padr->designation->name, ['controller' => 'Designations', 'action' => 'view', $padr->designation->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Reference No') ?></th>
                    <td><?= h($padr->reference_no) ?></td>
                </tr>
                <tr>
                    <th><?= __('Relation') ?></th>
                    <td><?= h($padr->relation) ?></td>
                </tr>
                <tr>
                    <th><?= __('Vigiflow Ref') ?></th>
                    <td><?= h($padr->vigiflow_ref) ?></td>
                </tr>
                <tr>
                    <th><?= __('Vigiflow Date') ?></th>
                    <td><?= h($padr->vigiflow_date) ?></td>
                </tr>
                <tr>
                    <th><?= __('Report Title') ?></th>
                    <td><?= h($padr->report_title) ?></td>
                </tr>
                <tr>
                    <th><?= __('Report Type') ?></th>
                    <td><?= h($padr->report_type) ?></td>
                </tr>
                <tr>
                    <th><?= __('Report Sadr') ?></th>
                    <td><?= h($padr->report_sadr) ?></td>
                </tr>
                <tr>
                    <th><?= __('Patient Name') ?></th>
                    <td><?= h($padr->patient_name) ?></td>
                </tr>
                <tr>
                    <th><?= __('Date Of Birth') ?></th>
                    <td><?= h($padr->date_of_birth) ?></td>
                </tr>
                <tr>
                    <th><?= __('Age Group') ?></th>
                    <td><?= h($padr->age_group) ?></td>
                </tr>
                <tr>
                    <th><?= __('Patient Address') ?></th>
                    <td><?= h($padr->patient_address) ?></td>
                </tr>
                <tr>
                    <th><?= __('Gender') ?></th>
                    <td><?= h($padr->gender) ?></td>
                </tr>
                <tr>
                    <th><?= __('Pregnancy Status') ?></th>
                    <td><?= h($padr->pregnancy_status) ?></td>
                </tr>
                <tr>
                    <th><?= __('Weight') ?></th>
                    <td><?= h($padr->weight) ?></td>
                </tr>
                <tr>
                    <th><?= __('Height') ?></th>
                    <td><?= h($padr->height) ?></td>
                </tr>
                <tr>
                    <th><?= __('Date Of Onset Of Reaction') ?></th>
                    <td><?= h($padr->date_of_onset_of_reaction) ?></td>
                </tr>
                <tr>
                    <th><?= __('Date Of End Of Reaction') ?></th>
                    <td><?= h($padr->date_of_end_of_reaction) ?></td>
                </tr>
                <tr>
                    <th><?= __('Reaction Resolve') ?></th>
                    <td><?= h($padr->reaction_resolve) ?></td>
                </tr>
                <tr>
                    <th><?= __('Reaction Reappear') ?></th>
                    <td><?= h($padr->reaction_reappear) ?></td>
                </tr>
                <tr>
                    <th><?= __('Severity') ?></th>
                    <td><?= h($padr->severity) ?></td>
                </tr>
                <tr>
                    <th><?= __('Serious') ?></th>
                    <td><?= h($padr->serious) ?></td>
                </tr>
                <tr>
                    <th><?= __('Serious Reason') ?></th>
                    <td><?= h($padr->serious_reason) ?></td>
                </tr>
                <tr>
                    <th><?= __('Action Taken') ?></th>
                    <td><?= h($padr->action_taken) ?></td>
                </tr>
                <tr>
                    <th><?= __('Outcome') ?></th>
                    <td><?= h($padr->outcome) ?></td>
                </tr>
                <tr>
                    <th><?= __('Causality') ?></th>
                    <td><?= h($padr->causality) ?></td>
                </tr>
                <tr>
                    <th><?= __('Reporter Name') ?></th>
                    <td><?= h($padr->reporter_name) ?></td>
                </tr>
                <tr>
                    <th><?= __('Reporter Email') ?></th>
                    <td><?= h($padr->reporter_email) ?></td>
                </tr>
                <tr>
                    <th><?= __('Reporter Phone') ?></th>
                    <td><?= h($padr->reporter_phone) ?></td>
                </tr>
                <tr>
                    <th><?= __('Reporter Name Diff') ?></th>
                    <td><?= h($padr->reporter_name_diff) ?></td>
                </tr>
                <tr>
                    <th><?= __('Reporter Email Diff') ?></th>
                    <td><?= h($padr->reporter_email_diff) ?></td>
                </tr>
                <tr>
                    <th><?= __('Reporter Phone Diff') ?></th>
                    <td><?= h($padr->reporter_phone_diff) ?></td>
                </tr>
                <tr>
                    <th><?= __('Reaction On') ?></th>
                    <td><?= h($padr->reaction_on) ?></td>
                </tr>
                <tr>
                    <th><?= __('Consent') ?></th>
                    <td><?= h($padr->consent) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($padr->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Padr Id') ?></th>
                    <td><?= $padr->padr_id === null ? '' : $this->Number->format($padr->padr_id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Submitted') ?></th>
                    <td><?= $padr->submitted === null ? '' : $this->Number->format($padr->submitted) ?></td>
                </tr>
                <tr>
                    <th><?= __('Emails') ?></th>
                    <td><?= $padr->emails === null ? '' : $this->Number->format($padr->emails) ?></td>
                </tr>
                <tr>
                    <th><?= __('Device') ?></th>
                    <td><?= $padr->device === null ? '' : $this->Number->format($padr->device) ?></td>
                </tr>
                <tr>
                    <th><?= __('Notified') ?></th>
                    <td><?= $padr->notified === null ? '' : $this->Number->format($padr->notified) ?></td>
                </tr>
                <tr>
                    <th><?= __('Reporter Designation Diff') ?></th>
                    <td><?= $padr->reporter_designation_diff === null ? '' : $this->Number->format($padr->reporter_designation_diff) ?></td>
                </tr>
                <tr>
                    <th><?= __('Assigned To') ?></th>
                    <td><?= $padr->assigned_to === null ? '' : $this->Number->format($padr->assigned_to) ?></td>
                </tr>
                <tr>
                    <th><?= __('Assigned By') ?></th>
                    <td><?= $padr->assigned_by === null ? '' : $this->Number->format($padr->assigned_by) ?></td>
                </tr>
                <tr>
                    <th><?= __('Copied') ?></th>
                    <td><?= $padr->copied === null ? '' : $this->Number->format($padr->copied) ?></td>
                </tr>
                <tr>
                    <th><?= __('Archived') ?></th>
                    <td><?= $padr->archived === null ? '' : $this->Number->format($padr->archived) ?></td>
                </tr>
                <tr>
                    <th><?= __('Submitted Date') ?></th>
                    <td><?= h($padr->submitted_date) ?></td>
                </tr>
                <tr>
                    <th><?= __('Deleted Date') ?></th>
                    <td><?= h($padr->deleted_date) ?></td>
                </tr>
                <tr>
                    <th><?= __('Created') ?></th>
                    <td><?= h($padr->created) ?></td>
                </tr>
                <tr>
                    <th><?= __('Modified') ?></th>
                    <td><?= h($padr->modified) ?></td>
                </tr>
                <tr>
                    <th><?= __('Reporter Date') ?></th>
                    <td><?= h($padr->reporter_date) ?></td>
                </tr>
                <tr>
                    <th><?= __('Reporter Date Diff') ?></th>
                    <td><?= h($padr->reporter_date_diff) ?></td>
                </tr>
                <tr>
                    <th><?= __('Assigned Date') ?></th>
                    <td><?= h($padr->assigned_date) ?></td>
                </tr>
                <tr>
                    <th><?= __('Archived Date') ?></th>
                    <td><?= h($padr->archived_date) ?></td>
                </tr>
                <tr>
                    <th><?= __('Sadr Vomiting') ?></th>
                    <td><?= $padr->sadr_vomiting ? __('Yes') : __('No'); ?></td>
                </tr>
                <tr>
                    <th><?= __('Sadr Dizziness') ?></th>
                    <td><?= $padr->sadr_dizziness ? __('Yes') : __('No'); ?></td>
                </tr>
                <tr>
                    <th><?= __('Sadr Headache') ?></th>
                    <td><?= $padr->sadr_headache ? __('Yes') : __('No'); ?></td>
                </tr>
                <tr>
                    <th><?= __('Sadr Joints') ?></th>
                    <td><?= $padr->sadr_joints ? __('Yes') : __('No'); ?></td>
                </tr>
                <tr>
                    <th><?= __('Sadr Rash') ?></th>
                    <td><?= $padr->sadr_rash ? __('Yes') : __('No'); ?></td>
                </tr>
                <tr>
                    <th><?= __('Sadr Mouth') ?></th>
                    <td><?= $padr->sadr_mouth ? __('Yes') : __('No'); ?></td>
                </tr>
                <tr>
                    <th><?= __('Sadr Stomach') ?></th>
                    <td><?= $padr->sadr_stomach ? __('Yes') : __('No'); ?></td>
                </tr>
                <tr>
                    <th><?= __('Sadr Urination') ?></th>
                    <td><?= $padr->sadr_urination ? __('Yes') : __('No'); ?></td>
                </tr>
                <tr>
                    <th><?= __('Sadr Eyes') ?></th>
                    <td><?= $padr->sadr_eyes ? __('Yes') : __('No'); ?></td>
                </tr>
                <tr>
                    <th><?= __('Sadr Died') ?></th>
                    <td><?= $padr->sadr_died ? __('Yes') : __('No'); ?></td>
                </tr>
                <tr>
                    <th><?= __('Pqmp Label') ?></th>
                    <td><?= $padr->pqmp_label ? __('Yes') : __('No'); ?></td>
                </tr>
                <tr>
                    <th><?= __('Pqmp Material') ?></th>
                    <td><?= $padr->pqmp_material ? __('Yes') : __('No'); ?></td>
                </tr>
                <tr>
                    <th><?= __('Pqmp Color') ?></th>
                    <td><?= $padr->pqmp_color ? __('Yes') : __('No'); ?></td>
                </tr>
                <tr>
                    <th><?= __('Pqmp Smell') ?></th>
                    <td><?= $padr->pqmp_smell ? __('Yes') : __('No'); ?></td>
                </tr>
                <tr>
                    <th><?= __('Pqmp Working') ?></th>
                    <td><?= $padr->pqmp_working ? __('Yes') : __('No'); ?></td>
                </tr>
                <tr>
                    <th><?= __('Pqmp Bottle') ?></th>
                    <td><?= $padr->pqmp_bottle ? __('Yes') : __('No'); ?></td>
                </tr>
                <tr>
                    <th><?= __('Active') ?></th>
                    <td><?= $padr->active ? __('Yes') : __('No'); ?></td>
                </tr>
                <tr>
                    <th><?= __('Deleted') ?></th>
                    <td><?= $padr->deleted ? __('Yes') : __('No'); ?></td>
                </tr>
            </table>
            <div class="text">
                <strong><?= __('Vigiflow Message') ?></strong>
                <blockquote>
                    <?= $this->Text->autoParagraph(h($padr->vigiflow_message)); ?>
                </blockquote>
            </div>
            <div class="text">
                <strong><?= __('Diagnosis') ?></strong>
                <blockquote>
                    <?= $this->Text->autoParagraph(h($padr->diagnosis)); ?>
                </blockquote>
            </div>
            <div class="text">
                <strong><?= __('Medical History') ?></strong>
                <blockquote>
                    <?= $this->Text->autoParagraph(h($padr->medical_history)); ?>
                </blockquote>
            </div>
            <div class="text">
                <strong><?= __('Description Of Reaction') ?></strong>
                <blockquote>
                    <?= $this->Text->autoParagraph(h($padr->description_of_reaction)); ?>
                </blockquote>
            </div>
            <div class="text">
                <strong><?= __('Lab Investigation') ?></strong>
                <blockquote>
                    <?= $this->Text->autoParagraph(h($padr->lab_investigation)); ?>
                </blockquote>
            </div>
            <div class="text">
                <strong><?= __('Any Other Comment') ?></strong>
                <blockquote>
                    <?= $this->Text->autoParagraph(h($padr->any_other_comment)); ?>
                </blockquote>
            </div>
            <div class="related">
                <h4><?= __('Related Padrs') ?></h4>
                <?php if (!empty($padr->padrs)) : ?>
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
                        <?php foreach ($padr->padrs as $padrs) : ?>
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
                <h4><?= __('Related Padr List Of Medicines') ?></h4>
                <?php if (!empty($padr->padr_list_of_medicines)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Id') ?></th>
                            <th><?= __('Padr Id') ?></th>
                            <th><?= __('Product Name') ?></th>
                            <th><?= __('Medicine Source') ?></th>
                            <th><?= __('Manufacturer') ?></th>
                            <th><?= __('Expiry Date') ?></th>
                            <th><?= __('Start Date') ?></th>
                            <th><?= __('End Date') ?></th>
                            <th><?= __('Created') ?></th>
                            <th><?= __('Modifed') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($padr->padr_list_of_medicines as $padrListOfMedicines) : ?>
                        <tr>
                            <td><?= h($padrListOfMedicines->id) ?></td>
                            <td><?= h($padrListOfMedicines->padr_id) ?></td>
                            <td><?= h($padrListOfMedicines->product_name) ?></td>
                            <td><?= h($padrListOfMedicines->medicine_source) ?></td>
                            <td><?= h($padrListOfMedicines->manufacturer) ?></td>
                            <td><?= h($padrListOfMedicines->expiry_date) ?></td>
                            <td><?= h($padrListOfMedicines->start_date) ?></td>
                            <td><?= h($padrListOfMedicines->end_date) ?></td>
                            <td><?= h($padrListOfMedicines->created) ?></td>
                            <td><?= h($padrListOfMedicines->modifed) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'PadrListOfMedicines', 'action' => 'view', $padrListOfMedicines->id]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'PadrListOfMedicines', 'action' => 'edit', $padrListOfMedicines->id]) ?>
                                <?= $this->Form->postLink(__('Delete'), ['controller' => 'PadrListOfMedicines', 'action' => 'delete', $padrListOfMedicines->id], ['confirm' => __('Are you sure you want to delete # {0}?', $padrListOfMedicines->id)]) ?>
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
