<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Device $device
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Device'), ['action' => 'edit', $device->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Device'), ['action' => 'delete', $device->id], ['confirm' => __('Are you sure you want to delete # {0}?', $device->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Devices'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Device'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="devices view content">
            <h3><?= h($device->id) ?></h3>
            <table>
                <tr>
                    <th><?= __('User') ?></th>
                    <td><?= $device->has('user') ? $this->Html->link($device->user->name, ['controller' => 'Users', 'action' => 'view', $device->user->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Pqmp') ?></th>
                    <td><?= $device->has('pqmp') ? $this->Html->link($device->pqmp->id, ['controller' => 'Pqmps', 'action' => 'view', $device->pqmp->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Reference No') ?></th>
                    <td><?= h($device->reference_no) ?></td>
                </tr>
                <tr>
                    <th><?= __('County') ?></th>
                    <td><?= $device->has('county') ? $this->Html->link($device->county->id, ['controller' => 'Counties', 'action' => 'view', $device->county->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Designation') ?></th>
                    <td><?= $device->has('designation') ? $this->Html->link($device->designation->name, ['controller' => 'Designations', 'action' => 'view', $device->designation->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Report Type') ?></th>
                    <td><?= h($device->report_type) ?></td>
                </tr>
                <tr>
                    <th><?= __('Report Title') ?></th>
                    <td><?= h($device->report_title) ?></td>
                </tr>
                <tr>
                    <th><?= __('Name Of Institution') ?></th>
                    <td><?= h($device->name_of_institution) ?></td>
                </tr>
                <tr>
                    <th><?= __('Institution Code') ?></th>
                    <td><?= h($device->institution_code) ?></td>
                </tr>
                <tr>
                    <th><?= __('Institution Address') ?></th>
                    <td><?= h($device->institution_address) ?></td>
                </tr>
                <tr>
                    <th><?= __('Institution Contact') ?></th>
                    <td><?= h($device->institution_contact) ?></td>
                </tr>
                <tr>
                    <th><?= __('Patient Name') ?></th>
                    <td><?= h($device->patient_name) ?></td>
                </tr>
                <tr>
                    <th><?= __('Gender') ?></th>
                    <td><?= h($device->gender) ?></td>
                </tr>
                <tr>
                    <th><?= __('Patient Address') ?></th>
                    <td><?= h($device->patient_address) ?></td>
                </tr>
                <tr>
                    <th><?= __('Patient Phone') ?></th>
                    <td><?= h($device->patient_phone) ?></td>
                </tr>
                <tr>
                    <th><?= __('Pregnancy Status') ?></th>
                    <td><?= h($device->pregnancy_status) ?></td>
                </tr>
                <tr>
                    <th><?= __('Trimester') ?></th>
                    <td><?= h($device->trimester) ?></td>
                </tr>
                <tr>
                    <th><?= __('Ip No') ?></th>
                    <td><?= h($device->ip_no) ?></td>
                </tr>
                <tr>
                    <th><?= __('Date Of Birth') ?></th>
                    <td><?= h($device->date_of_birth) ?></td>
                </tr>
                <tr>
                    <th><?= __('Age Years') ?></th>
                    <td><?= h($device->age_years) ?></td>
                </tr>
                <tr>
                    <th><?= __('Allergy') ?></th>
                    <td><?= h($device->allergy) ?></td>
                </tr>
                <tr>
                    <th><?= __('Allergy Specify') ?></th>
                    <td><?= h($device->allergy_specify) ?></td>
                </tr>
                <tr>
                    <th><?= __('Problem Noted') ?></th>
                    <td><?= h($device->problem_noted) ?></td>
                </tr>
                <tr>
                    <th><?= __('Brand Name') ?></th>
                    <td><?= h($device->brand_name) ?></td>
                </tr>
                <tr>
                    <th><?= __('Serial No') ?></th>
                    <td><?= h($device->serial_no) ?></td>
                </tr>
                <tr>
                    <th><?= __('Common Name') ?></th>
                    <td><?= h($device->common_name) ?></td>
                </tr>
                <tr>
                    <th><?= __('Device Model') ?></th>
                    <td><?= h($device->device_model) ?></td>
                </tr>
                <tr>
                    <th><?= __('Catalogue') ?></th>
                    <td><?= h($device->catalogue) ?></td>
                </tr>
                <tr>
                    <th><?= __('Manufacturer Name') ?></th>
                    <td><?= h($device->manufacturer_name) ?></td>
                </tr>
                <tr>
                    <th><?= __('Manufacturer Address') ?></th>
                    <td><?= h($device->manufacturer_address) ?></td>
                </tr>
                <tr>
                    <th><?= __('Manufacture Date') ?></th>
                    <td><?= h($device->manufacture_date) ?></td>
                </tr>
                <tr>
                    <th><?= __('Operator') ?></th>
                    <td><?= h($device->operator) ?></td>
                </tr>
                <tr>
                    <th><?= __('Operator Specify') ?></th>
                    <td><?= h($device->operator_specify) ?></td>
                </tr>
                <tr>
                    <th><?= __('Device Usage') ?></th>
                    <td><?= h($device->device_usage) ?></td>
                </tr>
                <tr>
                    <th><?= __('Device Duration Type') ?></th>
                    <td><?= h($device->device_duration_type) ?></td>
                </tr>
                <tr>
                    <th><?= __('Device Availability') ?></th>
                    <td><?= h($device->device_availability) ?></td>
                </tr>
                <tr>
                    <th><?= __('Device Unavailability') ?></th>
                    <td><?= h($device->device_unavailability) ?></td>
                </tr>
                <tr>
                    <th><?= __('Implant Duration Type') ?></th>
                    <td><?= h($device->implant_duration_type) ?></td>
                </tr>
                <tr>
                    <th><?= __('Specimen Type') ?></th>
                    <td><?= h($device->specimen_type) ?></td>
                </tr>
                <tr>
                    <th><?= __('Serious') ?></th>
                    <td><?= h($device->serious) ?></td>
                </tr>
                <tr>
                    <th><?= __('Serious Yes') ?></th>
                    <td><?= h($device->serious_yes) ?></td>
                </tr>
                <tr>
                    <th><?= __('Outcome') ?></th>
                    <td><?= h($device->outcome) ?></td>
                </tr>
                <tr>
                    <th><?= __('Reporter Name') ?></th>
                    <td><?= h($device->reporter_name) ?></td>
                </tr>
                <tr>
                    <th><?= __('Reporter Email') ?></th>
                    <td><?= h($device->reporter_email) ?></td>
                </tr>
                <tr>
                    <th><?= __('Reporter Phone') ?></th>
                    <td><?= h($device->reporter_phone) ?></td>
                </tr>
                <tr>
                    <th><?= __('Person Submitting') ?></th>
                    <td><?= h($device->person_submitting) ?></td>
                </tr>
                <tr>
                    <th><?= __('Reporter Name Diff') ?></th>
                    <td><?= h($device->reporter_name_diff) ?></td>
                </tr>
                <tr>
                    <th><?= __('Reporter Email Diff') ?></th>
                    <td><?= h($device->reporter_email_diff) ?></td>
                </tr>
                <tr>
                    <th><?= __('Reporter Phone Diff') ?></th>
                    <td><?= h($device->reporter_phone_diff) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($device->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Device Id') ?></th>
                    <td><?= $device->device_id === null ? '' : $this->Number->format($device->device_id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Patient Weight') ?></th>
                    <td><?= $device->patient_weight === null ? '' : $this->Number->format($device->patient_weight) ?></td>
                </tr>
                <tr>
                    <th><?= __('Patient Height') ?></th>
                    <td><?= $device->patient_height === null ? '' : $this->Number->format($device->patient_height) ?></td>
                </tr>
                <tr>
                    <th><?= __('Device Duration') ?></th>
                    <td><?= $device->device_duration === null ? '' : $this->Number->format($device->device_duration) ?></td>
                </tr>
                <tr>
                    <th><?= __('Implant Duration') ?></th>
                    <td><?= $device->implant_duration === null ? '' : $this->Number->format($device->implant_duration) ?></td>
                </tr>
                <tr>
                    <th><?= __('Patients Involved') ?></th>
                    <td><?= $device->patients_involved === null ? '' : $this->Number->format($device->patients_involved) ?></td>
                </tr>
                <tr>
                    <th><?= __('Tests Done') ?></th>
                    <td><?= $device->tests_done === null ? '' : $this->Number->format($device->tests_done) ?></td>
                </tr>
                <tr>
                    <th><?= __('False Positives') ?></th>
                    <td><?= $device->false_positives === null ? '' : $this->Number->format($device->false_positives) ?></td>
                </tr>
                <tr>
                    <th><?= __('False Negatives') ?></th>
                    <td><?= $device->false_negatives === null ? '' : $this->Number->format($device->false_negatives) ?></td>
                </tr>
                <tr>
                    <th><?= __('True Positives') ?></th>
                    <td><?= $device->true_positives === null ? '' : $this->Number->format($device->true_positives) ?></td>
                </tr>
                <tr>
                    <th><?= __('True Negatives') ?></th>
                    <td><?= $device->true_negatives === null ? '' : $this->Number->format($device->true_negatives) ?></td>
                </tr>
                <tr>
                    <th><?= __('Reporter Designation Diff') ?></th>
                    <td><?= $device->reporter_designation_diff === null ? '' : $this->Number->format($device->reporter_designation_diff) ?></td>
                </tr>
                <tr>
                    <th><?= __('Assigned To') ?></th>
                    <td><?= $device->assigned_to === null ? '' : $this->Number->format($device->assigned_to) ?></td>
                </tr>
                <tr>
                    <th><?= __('Assigned By') ?></th>
                    <td><?= $device->assigned_by === null ? '' : $this->Number->format($device->assigned_by) ?></td>
                </tr>
                <tr>
                    <th><?= __('Submitted') ?></th>
                    <td><?= $device->submitted === null ? '' : $this->Number->format($device->submitted) ?></td>
                </tr>
                <tr>
                    <th><?= __('Copied') ?></th>
                    <td><?= $device->copied === null ? '' : $this->Number->format($device->copied) ?></td>
                </tr>
                <tr>
                    <th><?= __('Archived') ?></th>
                    <td><?= $device->archived === null ? '' : $this->Number->format($device->archived) ?></td>
                </tr>
                <tr>
                    <th><?= __('Deleted') ?></th>
                    <td><?= $device->deleted === null ? '' : $this->Number->format($device->deleted) ?></td>
                </tr>
                <tr>
                    <th><?= __('Expiry Date') ?></th>
                    <td><?= h($device->expiry_date) ?></td>
                </tr>
                <tr>
                    <th><?= __('Implant Date') ?></th>
                    <td><?= h($device->implant_date) ?></td>
                </tr>
                <tr>
                    <th><?= __('Explant Date') ?></th>
                    <td><?= h($device->explant_date) ?></td>
                </tr>
                <tr>
                    <th><?= __('Date Onset Incident') ?></th>
                    <td><?= h($device->date_onset_incident) ?></td>
                </tr>
                <tr>
                    <th><?= __('Death Date') ?></th>
                    <td><?= h($device->death_date) ?></td>
                </tr>
                <tr>
                    <th><?= __('Reporter Date') ?></th>
                    <td><?= h($device->reporter_date) ?></td>
                </tr>
                <tr>
                    <th><?= __('Reporter Date Diff') ?></th>
                    <td><?= h($device->reporter_date_diff) ?></td>
                </tr>
                <tr>
                    <th><?= __('Assigned Date') ?></th>
                    <td><?= h($device->assigned_date) ?></td>
                </tr>
                <tr>
                    <th><?= __('Submitted Date') ?></th>
                    <td><?= h($device->submitted_date) ?></td>
                </tr>
                <tr>
                    <th><?= __('Archived Date') ?></th>
                    <td><?= h($device->archived_date) ?></td>
                </tr>
                <tr>
                    <th><?= __('Deleted Date') ?></th>
                    <td><?= h($device->deleted_date) ?></td>
                </tr>
                <tr>
                    <th><?= __('Created') ?></th>
                    <td><?= h($device->created) ?></td>
                </tr>
                <tr>
                    <th><?= __('Modified') ?></th>
                    <td><?= h($device->modified) ?></td>
                </tr>
                <tr>
                    <th><?= __('Active') ?></th>
                    <td><?= $device->active ? __('Yes') : __('No'); ?></td>
                </tr>
            </table>
            <div class="text">
                <strong><?= __('Description Of Reaction') ?></strong>
                <blockquote>
                    <?= $this->Text->autoParagraph(h($device->description_of_reaction)); ?>
                </blockquote>
            </div>
            <div class="text">
                <strong><?= __('Remedial Action') ?></strong>
                <blockquote>
                    <?= $this->Text->autoParagraph(h($device->remedial_action)); ?>
                </blockquote>
            </div>
            <div class="related">
                <h4><?= __('Related Devices') ?></h4>
                <?php if (!empty($device->devices)) : ?>
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
                        <?php foreach ($device->devices as $devices) : ?>
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
                <h4><?= __('Related Attachments Old') ?></h4>
                <?php if (!empty($device->attachments_old)) : ?>
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
                        <?php foreach ($device->attachments_old as $attachmentsOld) : ?>
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
                <h4><?= __('Related List Of Devices') ?></h4>
                <?php if (!empty($device->list_of_devices)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Id') ?></th>
                            <th><?= __('Device Id') ?></th>
                            <th><?= __('Brand Name') ?></th>
                            <th><?= __('Serial No') ?></th>
                            <th><?= __('Common Name') ?></th>
                            <th><?= __('Manufacturer') ?></th>
                            <th><?= __('Manufacture Date') ?></th>
                            <th><?= __('Expiry Date') ?></th>
                            <th><?= __('Created') ?></th>
                            <th><?= __('Modified') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($device->list_of_devices as $listOfDevices) : ?>
                        <tr>
                            <td><?= h($listOfDevices->id) ?></td>
                            <td><?= h($listOfDevices->device_id) ?></td>
                            <td><?= h($listOfDevices->brand_name) ?></td>
                            <td><?= h($listOfDevices->serial_no) ?></td>
                            <td><?= h($listOfDevices->common_name) ?></td>
                            <td><?= h($listOfDevices->manufacturer) ?></td>
                            <td><?= h($listOfDevices->manufacture_date) ?></td>
                            <td><?= h($listOfDevices->expiry_date) ?></td>
                            <td><?= h($listOfDevices->created) ?></td>
                            <td><?= h($listOfDevices->modified) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'ListOfDevices', 'action' => 'view', $listOfDevices->id]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'ListOfDevices', 'action' => 'edit', $listOfDevices->id]) ?>
                                <?= $this->Form->postLink(__('Delete'), ['controller' => 'ListOfDevices', 'action' => 'delete', $listOfDevices->id], ['confirm' => __('Are you sure you want to delete # {0}?', $listOfDevices->id)]) ?>
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
