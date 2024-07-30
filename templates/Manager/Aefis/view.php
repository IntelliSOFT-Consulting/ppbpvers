<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Aefi $aefi
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Aefi'), ['action' => 'edit', $aefi->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Aefi'), ['action' => 'delete', $aefi->id], ['confirm' => __('Are you sure you want to delete # {0}?', $aefi->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Aefis'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Aefi'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="aefis view content">
            <h3><?= h($aefi->id) ?></h3>
            <table>
                <tr>
                    <th><?= __('User') ?></th>
                    <td><?= $aefi->has('user') ? $this->Html->link($aefi->user->name, ['controller' => 'Users', 'action' => 'view', $aefi->user->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Pqmp') ?></th>
                    <td><?= $aefi->has('pqmp') ? $this->Html->link($aefi->pqmp->id, ['controller' => 'Pqmps', 'action' => 'view', $aefi->pqmp->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Reference No') ?></th>
                    <td><?= h($aefi->reference_no) ?></td>
                </tr>
                <tr>
                    <th><?= __('County') ?></th>
                    <td><?= $aefi->has('county') ? $this->Html->link($aefi->county->id, ['controller' => 'Counties', 'action' => 'view', $aefi->county->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Sub County') ?></th>
                    <td><?= $aefi->has('sub_county') ? $this->Html->link($aefi->sub_county->id, ['controller' => 'SubCounties', 'action' => 'view', $aefi->sub_county->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Vigiflow Ref') ?></th>
                    <td><?= h($aefi->vigiflow_ref) ?></td>
                </tr>
                <tr>
                    <th><?= __('Webradr Ref') ?></th>
                    <td><?= h($aefi->webradr_ref) ?></td>
                </tr>
                <tr>
                    <th><?= __('Webradr Message') ?></th>
                    <td><?= h($aefi->webradr_message) ?></td>
                </tr>
                <tr>
                    <th><?= __('Designation') ?></th>
                    <td><?= $aefi->has('designation') ? $this->Html->link($aefi->designation->name, ['controller' => 'Designations', 'action' => 'view', $aefi->designation->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Report Type') ?></th>
                    <td><?= h($aefi->report_type) ?></td>
                </tr>
                <tr>
                    <th><?= __('Name Of Institution') ?></th>
                    <td><?= h($aefi->name_of_institution) ?></td>
                </tr>
                <tr>
                    <th><?= __('Institution Code') ?></th>
                    <td><?= h($aefi->institution_code) ?></td>
                </tr>
                <tr>
                    <th><?= __('Patient Name') ?></th>
                    <td><?= h($aefi->patient_name) ?></td>
                </tr>
                <tr>
                    <th><?= __('Guardian Name') ?></th>
                    <td><?= h($aefi->guardian_name) ?></td>
                </tr>
                <tr>
                    <th><?= __('Patient Address') ?></th>
                    <td><?= h($aefi->patient_address) ?></td>
                </tr>
                <tr>
                    <th><?= __('Patient Phone') ?></th>
                    <td><?= h($aefi->patient_phone) ?></td>
                </tr>
                <tr>
                    <th><?= __('Patient Village') ?></th>
                    <td><?= h($aefi->patient_village) ?></td>
                </tr>
                <tr>
                    <th><?= __('Ip No') ?></th>
                    <td><?= h($aefi->ip_no) ?></td>
                </tr>
                <tr>
                    <th><?= __('Date Of Birth') ?></th>
                    <td><?= h($aefi->date_of_birth) ?></td>
                </tr>
                <tr>
                    <th><?= __('Age Group') ?></th>
                    <td><?= h($aefi->age_group) ?></td>
                </tr>
                <tr>
                    <th><?= __('Patient Ward') ?></th>
                    <td><?= h($aefi->patient_ward) ?></td>
                </tr>
                <tr>
                    <th><?= __('Patient County') ?></th>
                    <td><?= h($aefi->patient_county) ?></td>
                </tr>
                <tr>
                    <th><?= __('Patient Sub County') ?></th>
                    <td><?= h($aefi->patient_sub_county) ?></td>
                </tr>
                <tr>
                    <th><?= __('Vaccination Center') ?></th>
                    <td><?= h($aefi->vaccination_center) ?></td>
                </tr>
                <tr>
                    <th><?= __('Vaccination County') ?></th>
                    <td><?= h($aefi->vaccination_county) ?></td>
                </tr>
                <tr>
                    <th><?= __('Vaccination Type') ?></th>
                    <td><?= h($aefi->vaccination_type) ?></td>
                </tr>
                <tr>
                    <th><?= __('Gender') ?></th>
                    <td><?= h($aefi->gender) ?></td>
                </tr>
                <tr>
                    <th><?= __('Pregnancy Status') ?></th>
                    <td><?= h($aefi->pregnancy_status) ?></td>
                </tr>
                <tr>
                    <th><?= __('Time Aefi Started') ?></th>
                    <td><?= h($aefi->time_aefi_started) ?></td>
                </tr>
                <tr>
                    <th><?= __('Serious') ?></th>
                    <td><?= h($aefi->serious) ?></td>
                </tr>
                <tr>
                    <th><?= __('Serious Yes') ?></th>
                    <td><?= h($aefi->serious_yes) ?></td>
                </tr>
                <tr>
                    <th><?= __('Specimen Collected') ?></th>
                    <td><?= h($aefi->specimen_collected) ?></td>
                </tr>
                <tr>
                    <th><?= __('Outcome') ?></th>
                    <td><?= h($aefi->outcome) ?></td>
                </tr>
                <tr>
                    <th><?= __('Reporter Name') ?></th>
                    <td><?= h($aefi->reporter_name) ?></td>
                </tr>
                <tr>
                    <th><?= __('Reporter Email') ?></th>
                    <td><?= h($aefi->reporter_email) ?></td>
                </tr>
                <tr>
                    <th><?= __('Reporter Phone') ?></th>
                    <td><?= h($aefi->reporter_phone) ?></td>
                </tr>
                <tr>
                    <th><?= __('Person Submitting') ?></th>
                    <td><?= h($aefi->person_submitting) ?></td>
                </tr>
                <tr>
                    <th><?= __('Reporter Name Diff') ?></th>
                    <td><?= h($aefi->reporter_name_diff) ?></td>
                </tr>
                <tr>
                    <th><?= __('Reporter Email Diff') ?></th>
                    <td><?= h($aefi->reporter_email_diff) ?></td>
                </tr>
                <tr>
                    <th><?= __('Reporter Phone Diff') ?></th>
                    <td><?= h($aefi->reporter_phone_diff) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($aefi->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Aefi Id') ?></th>
                    <td><?= $aefi->aefi_id === null ? '' : $this->Number->format($aefi->aefi_id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Age Months') ?></th>
                    <td><?= $aefi->age_months === null ? '' : $this->Number->format($aefi->age_months) ?></td>
                </tr>
                <tr>
                    <th><?= __('Submitted') ?></th>
                    <td><?= $aefi->submitted === null ? '' : $this->Number->format($aefi->submitted) ?></td>
                </tr>
                <tr>
                    <th><?= __('Device') ?></th>
                    <td><?= $aefi->device === null ? '' : $this->Number->format($aefi->device) ?></td>
                </tr>
                <tr>
                    <th><?= __('Copied') ?></th>
                    <td><?= $aefi->copied === null ? '' : $this->Number->format($aefi->copied) ?></td>
                </tr>
                <tr>
                    <th><?= __('Archived') ?></th>
                    <td><?= $aefi->archived === null ? '' : $this->Number->format($aefi->archived) ?></td>
                </tr>
                <tr>
                    <th><?= __('Reporter Designation Diff') ?></th>
                    <td><?= $aefi->reporter_designation_diff === null ? '' : $this->Number->format($aefi->reporter_designation_diff) ?></td>
                </tr>
                <tr>
                    <th><?= __('Assigned To') ?></th>
                    <td><?= $aefi->assigned_to === null ? '' : $this->Number->format($aefi->assigned_to) ?></td>
                </tr>
                <tr>
                    <th><?= __('Assigned By') ?></th>
                    <td><?= $aefi->assigned_by === null ? '' : $this->Number->format($aefi->assigned_by) ?></td>
                </tr>
                <tr>
                    <th><?= __('Vigiflow Date') ?></th>
                    <td><?= h($aefi->vigiflow_date) ?></td>
                </tr>
                <tr>
                    <th><?= __('Webradr Date') ?></th>
                    <td><?= h($aefi->webradr_date) ?></td>
                </tr>
                <tr>
                    <th><?= __('Date Aefi Started') ?></th>
                    <td><?= h($aefi->date_aefi_started) ?></td>
                </tr>
                <tr>
                    <th><?= __('Reporter Date') ?></th>
                    <td><?= h($aefi->reporter_date) ?></td>
                </tr>
                <tr>
                    <th><?= __('Submitted Date') ?></th>
                    <td><?= h($aefi->submitted_date) ?></td>
                </tr>
                <tr>
                    <th><?= __('Archived Date') ?></th>
                    <td><?= h($aefi->archived_date) ?></td>
                </tr>
                <tr>
                    <th><?= __('Deleted Date') ?></th>
                    <td><?= h($aefi->deleted_date) ?></td>
                </tr>
                <tr>
                    <th><?= __('Created') ?></th>
                    <td><?= h($aefi->created) ?></td>
                </tr>
                <tr>
                    <th><?= __('Modified') ?></th>
                    <td><?= h($aefi->modified) ?></td>
                </tr>
                <tr>
                    <th><?= __('Reporter Date Diff') ?></th>
                    <td><?= h($aefi->reporter_date_diff) ?></td>
                </tr>
                <tr>
                    <th><?= __('Assigned Date') ?></th>
                    <td><?= h($aefi->assigned_date) ?></td>
                </tr>
                <tr>
                    <th><?= __('Bcg') ?></th>
                    <td><?= $aefi->bcg ? __('Yes') : __('No'); ?></td>
                </tr>
                <tr>
                    <th><?= __('Convulsion') ?></th>
                    <td><?= $aefi->convulsion ? __('Yes') : __('No'); ?></td>
                </tr>
                <tr>
                    <th><?= __('Urticaria') ?></th>
                    <td><?= $aefi->urticaria ? __('Yes') : __('No'); ?></td>
                </tr>
                <tr>
                    <th><?= __('High Fever') ?></th>
                    <td><?= $aefi->high_fever ? __('Yes') : __('No'); ?></td>
                </tr>
                <tr>
                    <th><?= __('Abscess') ?></th>
                    <td><?= $aefi->abscess ? __('Yes') : __('No'); ?></td>
                </tr>
                <tr>
                    <th><?= __('Local Reaction') ?></th>
                    <td><?= $aefi->local_reaction ? __('Yes') : __('No'); ?></td>
                </tr>
                <tr>
                    <th><?= __('Anaphylaxis') ?></th>
                    <td><?= $aefi->anaphylaxis ? __('Yes') : __('No'); ?></td>
                </tr>
                <tr>
                    <th><?= __('Meningitis') ?></th>
                    <td><?= $aefi->meningitis ? __('Yes') : __('No'); ?></td>
                </tr>
                <tr>
                    <th><?= __('Paralysis') ?></th>
                    <td><?= $aefi->paralysis ? __('Yes') : __('No'); ?></td>
                </tr>
                <tr>
                    <th><?= __('Toxic Shock') ?></th>
                    <td><?= $aefi->toxic_shock ? __('Yes') : __('No'); ?></td>
                </tr>
                <tr>
                    <th><?= __('Complaint Other') ?></th>
                    <td><?= $aefi->complaint_other ? __('Yes') : __('No'); ?></td>
                </tr>
                <tr>
                    <th><?= __('Active') ?></th>
                    <td><?= $aefi->active ? __('Yes') : __('No'); ?></td>
                </tr>
                <tr>
                    <th><?= __('Deleted') ?></th>
                    <td><?= $aefi->deleted ? __('Yes') : __('No'); ?></td>
                </tr>
            </table>
            <div class="text">
                <strong><?= __('Vigiflow Message') ?></strong>
                <blockquote>
                    <?= $this->Text->autoParagraph(h($aefi->vigiflow_message)); ?>
                </blockquote>
            </div>
            <div class="text">
                <strong><?= __('Complaint Other Specify') ?></strong>
                <blockquote>
                    <?= $this->Text->autoParagraph(h($aefi->complaint_other_specify)); ?>
                </blockquote>
            </div>
            <div class="text">
                <strong><?= __('Description Of Reaction') ?></strong>
                <blockquote>
                    <?= $this->Text->autoParagraph(h($aefi->description_of_reaction)); ?>
                </blockquote>
            </div>
            <div class="text">
                <strong><?= __('Aefi Symptoms') ?></strong>
                <blockquote>
                    <?= $this->Text->autoParagraph(h($aefi->aefi_symptoms)); ?>
                </blockquote>
            </div>
            <div class="text">
                <strong><?= __('Serious Other') ?></strong>
                <blockquote>
                    <?= $this->Text->autoParagraph(h($aefi->serious_other)); ?>
                </blockquote>
            </div>
            <div class="text">
                <strong><?= __('Medical History') ?></strong>
                <blockquote>
                    <?= $this->Text->autoParagraph(h($aefi->medical_history)); ?>
                </blockquote>
            </div>
            <div class="text">
                <strong><?= __('Treatment Given') ?></strong>
                <blockquote>
                    <?= $this->Text->autoParagraph(h($aefi->treatment_given)); ?>
                </blockquote>
            </div>
            <div class="related">
                <h4><?= __('Related Aefis') ?></h4>
                <?php if (!empty($aefi->aefis)) : ?>
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
                        <?php foreach ($aefi->aefis as $aefis) : ?>
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
                <h4><?= __('Related Aefi Descriptions') ?></h4>
                <?php if (!empty($aefi->aefi_descriptions)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Id') ?></th>
                            <th><?= __('Aefi Id') ?></th>
                            <th><?= __('Description') ?></th>
                            <th><?= __('Created') ?></th>
                            <th><?= __('Modified') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($aefi->aefi_descriptions as $aefiDescriptions) : ?>
                        <tr>
                            <td><?= h($aefiDescriptions->id) ?></td>
                            <td><?= h($aefiDescriptions->aefi_id) ?></td>
                            <td><?= h($aefiDescriptions->description) ?></td>
                            <td><?= h($aefiDescriptions->created) ?></td>
                            <td><?= h($aefiDescriptions->modified) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'AefiDescriptions', 'action' => 'view', $aefiDescriptions->id]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'AefiDescriptions', 'action' => 'edit', $aefiDescriptions->id]) ?>
                                <?= $this->Form->postLink(__('Delete'), ['controller' => 'AefiDescriptions', 'action' => 'delete', $aefiDescriptions->id], ['confirm' => __('Are you sure you want to delete # {0}?', $aefiDescriptions->id)]) ?>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </table>
                </div>
                <?php endif; ?>
            </div>
            <div class="related">
                <h4><?= __('Related Aefi List Of Vaccines') ?></h4>
                <?php if (!empty($aefi->aefi_list_of_vaccines)) : ?>
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
                        <?php foreach ($aefi->aefi_list_of_vaccines as $aefiListOfVaccines) : ?>
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
                <h4><?= __('Related Aefi Reactions') ?></h4>
                <?php if (!empty($aefi->aefi_reactions)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Id') ?></th>
                            <th><?= __('Aefi Id') ?></th>
                            <th><?= __('Reaction Name') ?></th>
                            <th><?= __('Created') ?></th>
                            <th><?= __('Modified') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($aefi->aefi_reactions as $aefiReactions) : ?>
                        <tr>
                            <td><?= h($aefiReactions->id) ?></td>
                            <td><?= h($aefiReactions->aefi_id) ?></td>
                            <td><?= h($aefiReactions->reaction_name) ?></td>
                            <td><?= h($aefiReactions->created) ?></td>
                            <td><?= h($aefiReactions->modified) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'AefiReactions', 'action' => 'view', $aefiReactions->id]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'AefiReactions', 'action' => 'edit', $aefiReactions->id]) ?>
                                <?= $this->Form->postLink(__('Delete'), ['controller' => 'AefiReactions', 'action' => 'delete', $aefiReactions->id], ['confirm' => __('Are you sure you want to delete # {0}?', $aefiReactions->id)]) ?>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </table>
                </div>
                <?php endif; ?>
            </div>
            <div class="related">
                <h4><?= __('Related Attachments Old') ?></h4>
                <?php if (!empty($aefi->attachments_old)) : ?>
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
                        <?php foreach ($aefi->attachments_old as $attachmentsOld) : ?>
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
        </div>
    </div>
</div>
