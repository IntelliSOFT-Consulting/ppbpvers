<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\Device> $devices
 */
?>
<div class="devices index content">
    <?= $this->Html->link(__('New Device'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Devices') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('user_id') ?></th>
                    <th><?= $this->Paginator->sort('pqmp_id') ?></th>
                    <th><?= $this->Paginator->sort('reference_no') ?></th>
                    <th><?= $this->Paginator->sort('county_id') ?></th>
                    <th><?= $this->Paginator->sort('designation_id') ?></th>
                    <th><?= $this->Paginator->sort('device_id') ?></th>
                    <th><?= $this->Paginator->sort('report_type') ?></th>
                    <th><?= $this->Paginator->sort('report_title') ?></th>
                    <th><?= $this->Paginator->sort('name_of_institution') ?></th>
                    <th><?= $this->Paginator->sort('institution_code') ?></th>
                    <th><?= $this->Paginator->sort('institution_address') ?></th>
                    <th><?= $this->Paginator->sort('institution_contact') ?></th>
                    <th><?= $this->Paginator->sort('patient_name') ?></th>
                    <th><?= $this->Paginator->sort('gender') ?></th>
                    <th><?= $this->Paginator->sort('patient_address') ?></th>
                    <th><?= $this->Paginator->sort('patient_phone') ?></th>
                    <th><?= $this->Paginator->sort('patient_weight') ?></th>
                    <th><?= $this->Paginator->sort('patient_height') ?></th>
                    <th><?= $this->Paginator->sort('pregnancy_status') ?></th>
                    <th><?= $this->Paginator->sort('trimester') ?></th>
                    <th><?= $this->Paginator->sort('ip_no') ?></th>
                    <th><?= $this->Paginator->sort('date_of_birth') ?></th>
                    <th><?= $this->Paginator->sort('age_years') ?></th>
                    <th><?= $this->Paginator->sort('allergy') ?></th>
                    <th><?= $this->Paginator->sort('allergy_specify') ?></th>
                    <th><?= $this->Paginator->sort('problem_noted') ?></th>
                    <th><?= $this->Paginator->sort('brand_name') ?></th>
                    <th><?= $this->Paginator->sort('serial_no') ?></th>
                    <th><?= $this->Paginator->sort('common_name') ?></th>
                    <th><?= $this->Paginator->sort('device_model') ?></th>
                    <th><?= $this->Paginator->sort('catalogue') ?></th>
                    <th><?= $this->Paginator->sort('manufacturer_name') ?></th>
                    <th><?= $this->Paginator->sort('manufacturer_address') ?></th>
                    <th><?= $this->Paginator->sort('manufacture_date') ?></th>
                    <th><?= $this->Paginator->sort('expiry_date') ?></th>
                    <th><?= $this->Paginator->sort('operator') ?></th>
                    <th><?= $this->Paginator->sort('operator_specify') ?></th>
                    <th><?= $this->Paginator->sort('device_usage') ?></th>
                    <th><?= $this->Paginator->sort('device_duration_type') ?></th>
                    <th><?= $this->Paginator->sort('device_duration') ?></th>
                    <th><?= $this->Paginator->sort('device_availability') ?></th>
                    <th><?= $this->Paginator->sort('device_unavailability') ?></th>
                    <th><?= $this->Paginator->sort('implant_date') ?></th>
                    <th><?= $this->Paginator->sort('explant_date') ?></th>
                    <th><?= $this->Paginator->sort('implant_duration_type') ?></th>
                    <th><?= $this->Paginator->sort('implant_duration') ?></th>
                    <th><?= $this->Paginator->sort('specimen_type') ?></th>
                    <th><?= $this->Paginator->sort('patients_involved') ?></th>
                    <th><?= $this->Paginator->sort('tests_done') ?></th>
                    <th><?= $this->Paginator->sort('false_positives') ?></th>
                    <th><?= $this->Paginator->sort('false_negatives') ?></th>
                    <th><?= $this->Paginator->sort('true_positives') ?></th>
                    <th><?= $this->Paginator->sort('true_negatives') ?></th>
                    <th><?= $this->Paginator->sort('date_onset_incident') ?></th>
                    <th><?= $this->Paginator->sort('serious') ?></th>
                    <th><?= $this->Paginator->sort('serious_yes') ?></th>
                    <th><?= $this->Paginator->sort('death_date') ?></th>
                    <th><?= $this->Paginator->sort('outcome') ?></th>
                    <th><?= $this->Paginator->sort('reporter_name') ?></th>
                    <th><?= $this->Paginator->sort('reporter_email') ?></th>
                    <th><?= $this->Paginator->sort('reporter_phone') ?></th>
                    <th><?= $this->Paginator->sort('reporter_date') ?></th>
                    <th><?= $this->Paginator->sort('person_submitting') ?></th>
                    <th><?= $this->Paginator->sort('reporter_name_diff') ?></th>
                    <th><?= $this->Paginator->sort('reporter_designation_diff') ?></th>
                    <th><?= $this->Paginator->sort('reporter_email_diff') ?></th>
                    <th><?= $this->Paginator->sort('reporter_phone_diff') ?></th>
                    <th><?= $this->Paginator->sort('reporter_date_diff') ?></th>
                    <th><?= $this->Paginator->sort('assigned_to') ?></th>
                    <th><?= $this->Paginator->sort('assigned_by') ?></th>
                    <th><?= $this->Paginator->sort('assigned_date') ?></th>
                    <th><?= $this->Paginator->sort('submitted') ?></th>
                    <th><?= $this->Paginator->sort('submitted_date') ?></th>
                    <th><?= $this->Paginator->sort('copied') ?></th>
                    <th><?= $this->Paginator->sort('archived') ?></th>
                    <th><?= $this->Paginator->sort('archived_date') ?></th>
                    <th><?= $this->Paginator->sort('active') ?></th>
                    <th><?= $this->Paginator->sort('deleted') ?></th>
                    <th><?= $this->Paginator->sort('deleted_date') ?></th>
                    <th><?= $this->Paginator->sort('created') ?></th>
                    <th><?= $this->Paginator->sort('modified') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($devices as $device): ?>
                <tr>
                    <td><?= $this->Number->format($device->id) ?></td>
                    <td><?= $device->has('user') ? $this->Html->link($device->user->name, ['controller' => 'Users', 'action' => 'view', $device->user->id]) : '' ?></td>
                    <td><?= $device->has('pqmp') ? $this->Html->link($device->pqmp->id, ['controller' => 'Pqmps', 'action' => 'view', $device->pqmp->id]) : '' ?></td>
                    <td><?= h($device->reference_no) ?></td>
                    <td><?= $device->has('county') ? $this->Html->link($device->county->id, ['controller' => 'Counties', 'action' => 'view', $device->county->id]) : '' ?></td>
                    <td><?= $device->has('designation') ? $this->Html->link($device->designation->name, ['controller' => 'Designations', 'action' => 'view', $device->designation->id]) : '' ?></td>
                    <td><?= $device->device_id === null ? '' : $this->Number->format($device->device_id) ?></td>
                    <td><?= h($device->report_type) ?></td>
                    <td><?= h($device->report_title) ?></td>
                    <td><?= h($device->name_of_institution) ?></td>
                    <td><?= h($device->institution_code) ?></td>
                    <td><?= h($device->institution_address) ?></td>
                    <td><?= h($device->institution_contact) ?></td>
                    <td><?= h($device->patient_name) ?></td>
                    <td><?= h($device->gender) ?></td>
                    <td><?= h($device->patient_address) ?></td>
                    <td><?= h($device->patient_phone) ?></td>
                    <td><?= $device->patient_weight === null ? '' : $this->Number->format($device->patient_weight) ?></td>
                    <td><?= $device->patient_height === null ? '' : $this->Number->format($device->patient_height) ?></td>
                    <td><?= h($device->pregnancy_status) ?></td>
                    <td><?= h($device->trimester) ?></td>
                    <td><?= h($device->ip_no) ?></td>
                    <td><?= h($device->date_of_birth) ?></td>
                    <td><?= h($device->age_years) ?></td>
                    <td><?= h($device->allergy) ?></td>
                    <td><?= h($device->allergy_specify) ?></td>
                    <td><?= h($device->problem_noted) ?></td>
                    <td><?= h($device->brand_name) ?></td>
                    <td><?= h($device->serial_no) ?></td>
                    <td><?= h($device->common_name) ?></td>
                    <td><?= h($device->device_model) ?></td>
                    <td><?= h($device->catalogue) ?></td>
                    <td><?= h($device->manufacturer_name) ?></td>
                    <td><?= h($device->manufacturer_address) ?></td>
                    <td><?= h($device->manufacture_date) ?></td>
                    <td><?= h($device->expiry_date) ?></td>
                    <td><?= h($device->operator) ?></td>
                    <td><?= h($device->operator_specify) ?></td>
                    <td><?= h($device->device_usage) ?></td>
                    <td><?= h($device->device_duration_type) ?></td>
                    <td><?= $device->device_duration === null ? '' : $this->Number->format($device->device_duration) ?></td>
                    <td><?= h($device->device_availability) ?></td>
                    <td><?= h($device->device_unavailability) ?></td>
                    <td><?= h($device->implant_date) ?></td>
                    <td><?= h($device->explant_date) ?></td>
                    <td><?= h($device->implant_duration_type) ?></td>
                    <td><?= $device->implant_duration === null ? '' : $this->Number->format($device->implant_duration) ?></td>
                    <td><?= h($device->specimen_type) ?></td>
                    <td><?= $device->patients_involved === null ? '' : $this->Number->format($device->patients_involved) ?></td>
                    <td><?= $device->tests_done === null ? '' : $this->Number->format($device->tests_done) ?></td>
                    <td><?= $device->false_positives === null ? '' : $this->Number->format($device->false_positives) ?></td>
                    <td><?= $device->false_negatives === null ? '' : $this->Number->format($device->false_negatives) ?></td>
                    <td><?= $device->true_positives === null ? '' : $this->Number->format($device->true_positives) ?></td>
                    <td><?= $device->true_negatives === null ? '' : $this->Number->format($device->true_negatives) ?></td>
                    <td><?= h($device->date_onset_incident) ?></td>
                    <td><?= h($device->serious) ?></td>
                    <td><?= h($device->serious_yes) ?></td>
                    <td><?= h($device->death_date) ?></td>
                    <td><?= h($device->outcome) ?></td>
                    <td><?= h($device->reporter_name) ?></td>
                    <td><?= h($device->reporter_email) ?></td>
                    <td><?= h($device->reporter_phone) ?></td>
                    <td><?= h($device->reporter_date) ?></td>
                    <td><?= h($device->person_submitting) ?></td>
                    <td><?= h($device->reporter_name_diff) ?></td>
                    <td><?= $device->reporter_designation_diff === null ? '' : $this->Number->format($device->reporter_designation_diff) ?></td>
                    <td><?= h($device->reporter_email_diff) ?></td>
                    <td><?= h($device->reporter_phone_diff) ?></td>
                    <td><?= h($device->reporter_date_diff) ?></td>
                    <td><?= $device->assigned_to === null ? '' : $this->Number->format($device->assigned_to) ?></td>
                    <td><?= $device->assigned_by === null ? '' : $this->Number->format($device->assigned_by) ?></td>
                    <td><?= h($device->assigned_date) ?></td>
                    <td><?= $device->submitted === null ? '' : $this->Number->format($device->submitted) ?></td>
                    <td><?= h($device->submitted_date) ?></td>
                    <td><?= $device->copied === null ? '' : $this->Number->format($device->copied) ?></td>
                    <td><?= $device->archived === null ? '' : $this->Number->format($device->archived) ?></td>
                    <td><?= h($device->archived_date) ?></td>
                    <td><?= h($device->active) ?></td>
                    <td><?= $device->deleted === null ? '' : $this->Number->format($device->deleted) ?></td>
                    <td><?= h($device->deleted_date) ?></td>
                    <td><?= h($device->created) ?></td>
                    <td><?= h($device->modified) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $device->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $device->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $device->id], ['confirm' => __('Are you sure you want to delete # {0}?', $device->id)]) ?>
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
