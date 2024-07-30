<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\Aefi> $aefis
 */
?>
<div class="aefis index content">
    <?= $this->Html->link(__('New Aefi'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Aefis') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('user_id') ?></th>
                    <th><?= $this->Paginator->sort('pqmp_id') ?></th>
                    <th><?= $this->Paginator->sort('reference_no') ?></th>
                    <th><?= $this->Paginator->sort('aefi_id') ?></th>
                    <th><?= $this->Paginator->sort('county_id') ?></th>
                    <th><?= $this->Paginator->sort('sub_county_id') ?></th>
                    <th><?= $this->Paginator->sort('vigiflow_ref') ?></th>
                    <th><?= $this->Paginator->sort('vigiflow_date') ?></th>
                    <th><?= $this->Paginator->sort('webradr_ref') ?></th>
                    <th><?= $this->Paginator->sort('webradr_date') ?></th>
                    <th><?= $this->Paginator->sort('webradr_message') ?></th>
                    <th><?= $this->Paginator->sort('designation_id') ?></th>
                    <th><?= $this->Paginator->sort('report_type') ?></th>
                    <th><?= $this->Paginator->sort('name_of_institution') ?></th>
                    <th><?= $this->Paginator->sort('institution_code') ?></th>
                    <th><?= $this->Paginator->sort('patient_name') ?></th>
                    <th><?= $this->Paginator->sort('guardian_name') ?></th>
                    <th><?= $this->Paginator->sort('patient_address') ?></th>
                    <th><?= $this->Paginator->sort('patient_phone') ?></th>
                    <th><?= $this->Paginator->sort('patient_village') ?></th>
                    <th><?= $this->Paginator->sort('ip_no') ?></th>
                    <th><?= $this->Paginator->sort('date_of_birth') ?></th>
                    <th><?= $this->Paginator->sort('age_months') ?></th>
                    <th><?= $this->Paginator->sort('age_group') ?></th>
                    <th><?= $this->Paginator->sort('patient_ward') ?></th>
                    <th><?= $this->Paginator->sort('patient_county') ?></th>
                    <th><?= $this->Paginator->sort('patient_sub_county') ?></th>
                    <th><?= $this->Paginator->sort('vaccination_center') ?></th>
                    <th><?= $this->Paginator->sort('vaccination_county') ?></th>
                    <th><?= $this->Paginator->sort('vaccination_type') ?></th>
                    <th><?= $this->Paginator->sort('gender') ?></th>
                    <th><?= $this->Paginator->sort('pregnancy_status') ?></th>
                    <th><?= $this->Paginator->sort('bcg') ?></th>
                    <th><?= $this->Paginator->sort('convulsion') ?></th>
                    <th><?= $this->Paginator->sort('urticaria') ?></th>
                    <th><?= $this->Paginator->sort('high_fever') ?></th>
                    <th><?= $this->Paginator->sort('abscess') ?></th>
                    <th><?= $this->Paginator->sort('local_reaction') ?></th>
                    <th><?= $this->Paginator->sort('anaphylaxis') ?></th>
                    <th><?= $this->Paginator->sort('meningitis') ?></th>
                    <th><?= $this->Paginator->sort('paralysis') ?></th>
                    <th><?= $this->Paginator->sort('toxic_shock') ?></th>
                    <th><?= $this->Paginator->sort('complaint_other') ?></th>
                    <th><?= $this->Paginator->sort('date_aefi_started') ?></th>
                    <th><?= $this->Paginator->sort('time_aefi_started') ?></th>
                    <th><?= $this->Paginator->sort('serious') ?></th>
                    <th><?= $this->Paginator->sort('serious_yes') ?></th>
                    <th><?= $this->Paginator->sort('specimen_collected') ?></th>
                    <th><?= $this->Paginator->sort('outcome') ?></th>
                    <th><?= $this->Paginator->sort('reporter_name') ?></th>
                    <th><?= $this->Paginator->sort('reporter_email') ?></th>
                    <th><?= $this->Paginator->sort('reporter_phone') ?></th>
                    <th><?= $this->Paginator->sort('reporter_date') ?></th>
                    <th><?= $this->Paginator->sort('submitted') ?></th>
                    <th><?= $this->Paginator->sort('submitted_date') ?></th>
                    <th><?= $this->Paginator->sort('active') ?></th>
                    <th><?= $this->Paginator->sort('device') ?></th>
                    <th><?= $this->Paginator->sort('copied') ?></th>
                    <th><?= $this->Paginator->sort('archived') ?></th>
                    <th><?= $this->Paginator->sort('archived_date') ?></th>
                    <th><?= $this->Paginator->sort('deleted') ?></th>
                    <th><?= $this->Paginator->sort('deleted_date') ?></th>
                    <th><?= $this->Paginator->sort('created') ?></th>
                    <th><?= $this->Paginator->sort('modified') ?></th>
                    <th><?= $this->Paginator->sort('person_submitting') ?></th>
                    <th><?= $this->Paginator->sort('reporter_name_diff') ?></th>
                    <th><?= $this->Paginator->sort('reporter_designation_diff') ?></th>
                    <th><?= $this->Paginator->sort('reporter_email_diff') ?></th>
                    <th><?= $this->Paginator->sort('reporter_phone_diff') ?></th>
                    <th><?= $this->Paginator->sort('reporter_date_diff') ?></th>
                    <th><?= $this->Paginator->sort('assigned_to') ?></th>
                    <th><?= $this->Paginator->sort('assigned_by') ?></th>
                    <th><?= $this->Paginator->sort('assigned_date') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($aefis as $aefi): ?>
                <tr>
                    <td><?= $this->Number->format($aefi->id) ?></td>
                    <td><?= $aefi->has('user') ? $this->Html->link($aefi->user->name, ['controller' => 'Users', 'action' => 'view', $aefi->user->id]) : '' ?></td>
                    <td><?= $aefi->has('pqmp') ? $this->Html->link($aefi->pqmp->id, ['controller' => 'Pqmps', 'action' => 'view', $aefi->pqmp->id]) : '' ?></td>
                    <td><?= h($aefi->reference_no) ?></td>
                    <td><?= $aefi->aefi_id === null ? '' : $this->Number->format($aefi->aefi_id) ?></td>
                    <td><?= $aefi->has('county') ? $this->Html->link($aefi->county->id, ['controller' => 'Counties', 'action' => 'view', $aefi->county->id]) : '' ?></td>
                    <td><?= $aefi->has('sub_county') ? $this->Html->link($aefi->sub_county->id, ['controller' => 'SubCounties', 'action' => 'view', $aefi->sub_county->id]) : '' ?></td>
                    <td><?= h($aefi->vigiflow_ref) ?></td>
                    <td><?= h($aefi->vigiflow_date) ?></td>
                    <td><?= h($aefi->webradr_ref) ?></td>
                    <td><?= h($aefi->webradr_date) ?></td>
                    <td><?= h($aefi->webradr_message) ?></td>
                    <td><?= $aefi->has('designation') ? $this->Html->link($aefi->designation->name, ['controller' => 'Designations', 'action' => 'view', $aefi->designation->id]) : '' ?></td>
                    <td><?= h($aefi->report_type) ?></td>
                    <td><?= h($aefi->name_of_institution) ?></td>
                    <td><?= h($aefi->institution_code) ?></td>
                    <td><?= h($aefi->patient_name) ?></td>
                    <td><?= h($aefi->guardian_name) ?></td>
                    <td><?= h($aefi->patient_address) ?></td>
                    <td><?= h($aefi->patient_phone) ?></td>
                    <td><?= h($aefi->patient_village) ?></td>
                    <td><?= h($aefi->ip_no) ?></td>
                    <td><?= h($aefi->date_of_birth) ?></td>
                    <td><?= $aefi->age_months === null ? '' : $this->Number->format($aefi->age_months) ?></td>
                    <td><?= h($aefi->age_group) ?></td>
                    <td><?= h($aefi->patient_ward) ?></td>
                    <td><?= h($aefi->patient_county) ?></td>
                    <td><?= h($aefi->patient_sub_county) ?></td>
                    <td><?= h($aefi->vaccination_center) ?></td>
                    <td><?= h($aefi->vaccination_county) ?></td>
                    <td><?= h($aefi->vaccination_type) ?></td>
                    <td><?= h($aefi->gender) ?></td>
                    <td><?= h($aefi->pregnancy_status) ?></td>
                    <td><?= h($aefi->bcg) ?></td>
                    <td><?= h($aefi->convulsion) ?></td>
                    <td><?= h($aefi->urticaria) ?></td>
                    <td><?= h($aefi->high_fever) ?></td>
                    <td><?= h($aefi->abscess) ?></td>
                    <td><?= h($aefi->local_reaction) ?></td>
                    <td><?= h($aefi->anaphylaxis) ?></td>
                    <td><?= h($aefi->meningitis) ?></td>
                    <td><?= h($aefi->paralysis) ?></td>
                    <td><?= h($aefi->toxic_shock) ?></td>
                    <td><?= h($aefi->complaint_other) ?></td>
                    <td><?= h($aefi->date_aefi_started) ?></td>
                    <td><?= h($aefi->time_aefi_started) ?></td>
                    <td><?= h($aefi->serious) ?></td>
                    <td><?= h($aefi->serious_yes) ?></td>
                    <td><?= h($aefi->specimen_collected) ?></td>
                    <td><?= h($aefi->outcome) ?></td>
                    <td><?= h($aefi->reporter_name) ?></td>
                    <td><?= h($aefi->reporter_email) ?></td>
                    <td><?= h($aefi->reporter_phone) ?></td>
                    <td><?= h($aefi->reporter_date) ?></td>
                    <td><?= $aefi->submitted === null ? '' : $this->Number->format($aefi->submitted) ?></td>
                    <td><?= h($aefi->submitted_date) ?></td>
                    <td><?= h($aefi->active) ?></td>
                    <td><?= $aefi->device === null ? '' : $this->Number->format($aefi->device) ?></td>
                    <td><?= $aefi->copied === null ? '' : $this->Number->format($aefi->copied) ?></td>
                    <td><?= $aefi->archived === null ? '' : $this->Number->format($aefi->archived) ?></td>
                    <td><?= h($aefi->archived_date) ?></td>
                    <td><?= h($aefi->deleted) ?></td>
                    <td><?= h($aefi->deleted_date) ?></td>
                    <td><?= h($aefi->created) ?></td>
                    <td><?= h($aefi->modified) ?></td>
                    <td><?= h($aefi->person_submitting) ?></td>
                    <td><?= h($aefi->reporter_name_diff) ?></td>
                    <td><?= $aefi->reporter_designation_diff === null ? '' : $this->Number->format($aefi->reporter_designation_diff) ?></td>
                    <td><?= h($aefi->reporter_email_diff) ?></td>
                    <td><?= h($aefi->reporter_phone_diff) ?></td>
                    <td><?= h($aefi->reporter_date_diff) ?></td>
                    <td><?= $aefi->assigned_to === null ? '' : $this->Number->format($aefi->assigned_to) ?></td>
                    <td><?= $aefi->assigned_by === null ? '' : $this->Number->format($aefi->assigned_by) ?></td>
                    <td><?= h($aefi->assigned_date) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $aefi->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $aefi->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $aefi->id], ['confirm' => __('Are you sure you want to delete # {0}?', $aefi->id)]) ?>
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
