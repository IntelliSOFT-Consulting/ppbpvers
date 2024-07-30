<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\Sadr> $sadrs
 */
?>
<div class="sadrs index content">
    <?= $this->Html->link(__('New Sadr'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Sadrs') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('sadr_id') ?></th>
                    <th><?= $this->Paginator->sort('user_id') ?></th>
                    <th><?= $this->Paginator->sort('pqmp_id') ?></th>
                    <th><?= $this->Paginator->sort('medication_id') ?></th>
                    <th><?= $this->Paginator->sort('county_id') ?></th>
                    <th><?= $this->Paginator->sort('sub_county_id') ?></th>
                    <th><?= $this->Paginator->sort('designation_id') ?></th>
                    <th><?= $this->Paginator->sort('reference_no') ?></th>
                    <th><?= $this->Paginator->sort('vigiflow_id') ?></th>
                    <th><?= $this->Paginator->sort('report_title') ?></th>
                    <th><?= $this->Paginator->sort('report_type') ?></th>
                    <th><?= $this->Paginator->sort('report_sadr') ?></th>
                    <th><?= $this->Paginator->sort('report_therapeutic') ?></th>
                    <th><?= $this->Paginator->sort('report_misuse') ?></th>
                    <th><?= $this->Paginator->sort('report_off_label') ?></th>
                    <th><?= $this->Paginator->sort('product_category') ?></th>
                    <th><?= $this->Paginator->sort('medicinal_product') ?></th>
                    <th><?= $this->Paginator->sort('blood_products') ?></th>
                    <th><?= $this->Paginator->sort('herbal_product') ?></th>
                    <th><?= $this->Paginator->sort('cosmeceuticals') ?></th>
                    <th><?= $this->Paginator->sort('product_other') ?></th>
                    <th><?= $this->Paginator->sort('product_specify') ?></th>
                    <th><?= $this->Paginator->sort('name_of_institution') ?></th>
                    <th><?= $this->Paginator->sort('institution_code') ?></th>
                    <th><?= $this->Paginator->sort('address') ?></th>
                    <th><?= $this->Paginator->sort('contact') ?></th>
                    <th><?= $this->Paginator->sort('patient_name') ?></th>
                    <th><?= $this->Paginator->sort('ip_no') ?></th>
                    <th><?= $this->Paginator->sort('date_of_birth') ?></th>
                    <th><?= $this->Paginator->sort('age_group') ?></th>
                    <th><?= $this->Paginator->sort('patient_address') ?></th>
                    <th><?= $this->Paginator->sort('ward') ?></th>
                    <th><?= $this->Paginator->sort('gender') ?></th>
                    <th><?= $this->Paginator->sort('known_allergy') ?></th>
                    <th><?= $this->Paginator->sort('known_allergy_specify') ?></th>
                    <th><?= $this->Paginator->sort('pregnant') ?></th>
                    <th><?= $this->Paginator->sort('pregnancy_status') ?></th>
                    <th><?= $this->Paginator->sort('weight') ?></th>
                    <th><?= $this->Paginator->sort('height') ?></th>
                    <th><?= $this->Paginator->sort('reaction') ?></th>
                    <th><?= $this->Paginator->sort('date_of_onset_of_reaction') ?></th>
                    <th><?= $this->Paginator->sort('reaction_resolve') ?></th>
                    <th><?= $this->Paginator->sort('reaction_reappear') ?></th>
                    <th><?= $this->Paginator->sort('severity') ?></th>
                    <th><?= $this->Paginator->sort('serious') ?></th>
                    <th><?= $this->Paginator->sort('serious_reason') ?></th>
                    <th><?= $this->Paginator->sort('action_taken') ?></th>
                    <th><?= $this->Paginator->sort('outcome') ?></th>
                    <th><?= $this->Paginator->sort('causality') ?></th>
                    <th><?= $this->Paginator->sort('reporter_name') ?></th>
                    <th><?= $this->Paginator->sort('reporter_email') ?></th>
                    <th><?= $this->Paginator->sort('reporter_phone') ?></th>
                    <th><?= $this->Paginator->sort('submitted') ?></th>
                    <th><?= $this->Paginator->sort('emails') ?></th>
                    <th><?= $this->Paginator->sort('active') ?></th>
                    <th><?= $this->Paginator->sort('device') ?></th>
                    <th><?= $this->Paginator->sort('deleted') ?></th>
                    <th><?= $this->Paginator->sort('archived') ?></th>
                    <th><?= $this->Paginator->sort('archived_date') ?></th>
                    <th><?= $this->Paginator->sort('deleted_date') ?></th>
                    <th><?= $this->Paginator->sort('notified') ?></th>
                    <th><?= $this->Paginator->sort('created') ?></th>
                    <th><?= $this->Paginator->sort('modified') ?></th>
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
                    <th><?= $this->Paginator->sort('vigiflow_ref') ?></th>
                    <th><?= $this->Paginator->sort('vigiflow_date') ?></th>
                    <th><?= $this->Paginator->sort('webradr_ref') ?></th>
                    <th><?= $this->Paginator->sort('webradr_date') ?></th>
                    <th><?= $this->Paginator->sort('submitted_date') ?></th>
                    <th><?= $this->Paginator->sort('webradr_message') ?></th>
                    <th><?= $this->Paginator->sort('copied') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($sadrs as $sadr): ?>
                <tr>
                    <td><?= $this->Number->format($sadr->id) ?></td>
                    <td><?= $sadr->sadr_id === null ? '' : $this->Number->format($sadr->sadr_id) ?></td>
                    <td><?= $sadr->has('user') ? $this->Html->link($sadr->user->name, ['controller' => 'Users', 'action' => 'view', $sadr->user->id]) : '' ?></td>
                    <td><?= $sadr->has('pqmp') ? $this->Html->link($sadr->pqmp->id, ['controller' => 'Pqmps', 'action' => 'view', $sadr->pqmp->id]) : '' ?></td>
                    <td><?= $sadr->has('medication') ? $this->Html->link($sadr->medication->id, ['controller' => 'Medications', 'action' => 'view', $sadr->medication->id]) : '' ?></td>
                    <td><?= $sadr->has('county') ? $this->Html->link($sadr->county->id, ['controller' => 'Counties', 'action' => 'view', $sadr->county->id]) : '' ?></td>
                    <td><?= $sadr->has('sub_county') ? $this->Html->link($sadr->sub_county->id, ['controller' => 'SubCounties', 'action' => 'view', $sadr->sub_county->id]) : '' ?></td>
                    <td><?= $sadr->has('designation') ? $this->Html->link($sadr->designation->name, ['controller' => 'Designations', 'action' => 'view', $sadr->designation->id]) : '' ?></td>
                    <td><?= h($sadr->reference_no) ?></td>
                    <td><?= h($sadr->vigiflow_id) ?></td>
                    <td><?= h($sadr->report_title) ?></td>
                    <td><?= h($sadr->report_type) ?></td>
                    <td><?= h($sadr->report_sadr) ?></td>
                    <td><?= h($sadr->report_therapeutic) ?></td>
                    <td><?= $sadr->report_misuse === null ? '' : $this->Number->format($sadr->report_misuse) ?></td>
                    <td><?= $sadr->report_off_label === null ? '' : $this->Number->format($sadr->report_off_label) ?></td>
                    <td><?= h($sadr->product_category) ?></td>
                    <td><?= h($sadr->medicinal_product) ?></td>
                    <td><?= h($sadr->blood_products) ?></td>
                    <td><?= h($sadr->herbal_product) ?></td>
                    <td><?= h($sadr->cosmeceuticals) ?></td>
                    <td><?= h($sadr->product_other) ?></td>
                    <td><?= h($sadr->product_specify) ?></td>
                    <td><?= h($sadr->name_of_institution) ?></td>
                    <td><?= h($sadr->institution_code) ?></td>
                    <td><?= h($sadr->address) ?></td>
                    <td><?= h($sadr->contact) ?></td>
                    <td><?= h($sadr->patient_name) ?></td>
                    <td><?= h($sadr->ip_no) ?></td>
                    <td><?= h($sadr->date_of_birth) ?></td>
                    <td><?= h($sadr->age_group) ?></td>
                    <td><?= h($sadr->patient_address) ?></td>
                    <td><?= h($sadr->ward) ?></td>
                    <td><?= h($sadr->gender) ?></td>
                    <td><?= h($sadr->known_allergy) ?></td>
                    <td><?= h($sadr->known_allergy_specify) ?></td>
                    <td><?= h($sadr->pregnant) ?></td>
                    <td><?= h($sadr->pregnancy_status) ?></td>
                    <td><?= h($sadr->weight) ?></td>
                    <td><?= h($sadr->height) ?></td>
                    <td><?= h($sadr->reaction) ?></td>
                    <td><?= h($sadr->date_of_onset_of_reaction) ?></td>
                    <td><?= h($sadr->reaction_resolve) ?></td>
                    <td><?= h($sadr->reaction_reappear) ?></td>
                    <td><?= h($sadr->severity) ?></td>
                    <td><?= h($sadr->serious) ?></td>
                    <td><?= h($sadr->serious_reason) ?></td>
                    <td><?= h($sadr->action_taken) ?></td>
                    <td><?= h($sadr->outcome) ?></td>
                    <td><?= h($sadr->causality) ?></td>
                    <td><?= h($sadr->reporter_name) ?></td>
                    <td><?= h($sadr->reporter_email) ?></td>
                    <td><?= h($sadr->reporter_phone) ?></td>
                    <td><?= $sadr->submitted === null ? '' : $this->Number->format($sadr->submitted) ?></td>
                    <td><?= $sadr->emails === null ? '' : $this->Number->format($sadr->emails) ?></td>
                    <td><?= h($sadr->active) ?></td>
                    <td><?= $sadr->device === null ? '' : $this->Number->format($sadr->device) ?></td>
                    <td><?= h($sadr->deleted) ?></td>
                    <td><?= h($sadr->archived) ?></td>
                    <td><?= h($sadr->archived_date) ?></td>
                    <td><?= h($sadr->deleted_date) ?></td>
                    <td><?= $sadr->notified === null ? '' : $this->Number->format($sadr->notified) ?></td>
                    <td><?= h($sadr->created) ?></td>
                    <td><?= h($sadr->modified) ?></td>
                    <td><?= h($sadr->reporter_date) ?></td>
                    <td><?= h($sadr->person_submitting) ?></td>
                    <td><?= h($sadr->reporter_name_diff) ?></td>
                    <td><?= $sadr->reporter_designation_diff === null ? '' : $this->Number->format($sadr->reporter_designation_diff) ?></td>
                    <td><?= h($sadr->reporter_email_diff) ?></td>
                    <td><?= h($sadr->reporter_phone_diff) ?></td>
                    <td><?= h($sadr->reporter_date_diff) ?></td>
                    <td><?= $sadr->assigned_to === null ? '' : $this->Number->format($sadr->assigned_to) ?></td>
                    <td><?= $sadr->assigned_by === null ? '' : $this->Number->format($sadr->assigned_by) ?></td>
                    <td><?= h($sadr->assigned_date) ?></td>
                    <td><?= h($sadr->vigiflow_ref) ?></td>
                    <td><?= h($sadr->vigiflow_date) ?></td>
                    <td><?= h($sadr->webradr_ref) ?></td>
                    <td><?= h($sadr->webradr_date) ?></td>
                    <td><?= h($sadr->submitted_date) ?></td>
                    <td><?= h($sadr->webradr_message) ?></td>
                    <td><?= $sadr->copied === null ? '' : $this->Number->format($sadr->copied) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $sadr->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $sadr->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $sadr->id], ['confirm' => __('Are you sure you want to delete # {0}?', $sadr->id)]) ?>
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
