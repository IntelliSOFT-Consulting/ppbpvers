<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\Ce2b> $ce2bs
 */
?>
<div class="ce2bs index content">
    <?= $this->Html->link(__('New Ce2b'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Ce2bs') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('user_id') ?></th>
                    <th><?= $this->Paginator->sort('ce2b_id') ?></th>
                    <th><?= $this->Paginator->sort('vigiflow_message') ?></th>
                    <th><?= $this->Paginator->sort('vigiflow_date') ?></th>
                    <th><?= $this->Paginator->sort('report_type') ?></th>
                    <th><?= $this->Paginator->sort('county_id') ?></th>
                    <th><?= $this->Paginator->sort('sub_county_id') ?></th>
                    <th><?= $this->Paginator->sort('designation_id') ?></th>
                    <th><?= $this->Paginator->sort('reference_no') ?></th>
                    <th><?= $this->Paginator->sort('messageid') ?></th>
                    <th><?= $this->Paginator->sort('assigned_to') ?></th>
                    <th><?= $this->Paginator->sort('assigned_by') ?></th>
                    <th><?= $this->Paginator->sort('company_code') ?></th>
                    <th><?= $this->Paginator->sort('company_name') ?></th>
                    <th><?= $this->Paginator->sort('reporter_email') ?></th>
                    <th><?= $this->Paginator->sort('e2b_type') ?></th>
                    <th><?= $this->Paginator->sort('e2b_file') ?></th>
                    <th><?= $this->Paginator->sort('dir') ?></th>
                    <th><?= $this->Paginator->sort('size') ?></th>
                    <th><?= $this->Paginator->sort('type') ?></th>
                    <th><?= $this->Paginator->sort('assigned_date') ?></th>
                    <th><?= $this->Paginator->sort('signature') ?></th>
                    <th><?= $this->Paginator->sort('submitted') ?></th>
                    <th><?= $this->Paginator->sort('submitted_date') ?></th>
                    <th><?= $this->Paginator->sort('reporter_name') ?></th>
                    <th><?= $this->Paginator->sort('reporter_designation') ?></th>
                    <th><?= $this->Paginator->sort('reporter_phone') ?></th>
                    <th><?= $this->Paginator->sort('reporter_date') ?></th>
                    <th><?= $this->Paginator->sort('person_submitting') ?></th>
                    <th><?= $this->Paginator->sort('reporter_name_diff') ?></th>
                    <th><?= $this->Paginator->sort('reporter_designation_diff') ?></th>
                    <th><?= $this->Paginator->sort('reporter_email_diff') ?></th>
                    <th><?= $this->Paginator->sort('reporter_phone_diff') ?></th>
                    <th><?= $this->Paginator->sort('reporter_date_diff') ?></th>
                    <th><?= $this->Paginator->sort('resubmit') ?></th>
                    <th><?= $this->Paginator->sort('status') ?></th>
                    <th><?= $this->Paginator->sort('active') ?></th>
                    <th><?= $this->Paginator->sort('copied') ?></th>
                    <th><?= $this->Paginator->sort('archived') ?></th>
                    <th><?= $this->Paginator->sort('archived_date') ?></th>
                    <th><?= $this->Paginator->sort('created') ?></th>
                    <th><?= $this->Paginator->sort('modified') ?></th>
                    <th><?= $this->Paginator->sort('action_date') ?></th>
                    <th><?= $this->Paginator->sort('deleted') ?></th>
                    <th><?= $this->Paginator->sort('deleted_date') ?></th>
                    <th><?= $this->Paginator->sort('report_reference') ?></th>
                    <th><?= $this->Paginator->sort('creation_time') ?></th>
                    <th><?= $this->Paginator->sort('sender_reference') ?></th>
                    <th><?= $this->Paginator->sort('receiver_id') ?></th>
                    <th><?= $this->Paginator->sort('sender_id') ?></th>
                    <th><?= $this->Paginator->sort('sender_unique_identifier') ?></th>
                    <th><?= $this->Paginator->sort('worldwide_identifier') ?></th>
                    <th><?= $this->Paginator->sort('date_first_received') ?></th>
                    <th><?= $this->Paginator->sort('date_most_recent_info') ?></th>
                    <th><?= $this->Paginator->sort('serious') ?></th>
                    <th><?= $this->Paginator->sort('patient_name') ?></th>
                    <th><?= $this->Paginator->sort('patient_sex') ?></th>
                    <th><?= $this->Paginator->sort('patient_dob') ?></th>
                    <th><?= $this->Paginator->sort('patient_number') ?></th>
                    <th><?= $this->Paginator->sort('sender_address') ?></th>
                    <th><?= $this->Paginator->sort('sender_city') ?></th>
                    <th><?= $this->Paginator->sort('sender_state') ?></th>
                    <th><?= $this->Paginator->sort('sender_department') ?></th>
                    <th><?= $this->Paginator->sort('sender_organization') ?></th>
                    <th><?= $this->Paginator->sort('results_in_detah') ?></th>
                    <th><?= $this->Paginator->sort('life_threatening') ?></th>
                    <th><?= $this->Paginator->sort('prolonged_hospitalization') ?></th>
                    <th><?= $this->Paginator->sort('incapacitating') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($ce2bs as $ce2b): ?>
                <tr>
                    <td><?= $this->Number->format($ce2b->id) ?></td>
                    <td><?= $ce2b->has('user') ? $this->Html->link($ce2b->user->name, ['controller' => 'Users', 'action' => 'view', $ce2b->user->id]) : '' ?></td>
                    <td><?= $ce2b->ce2b_id === null ? '' : $this->Number->format($ce2b->ce2b_id) ?></td>
                    <td><?= h($ce2b->vigiflow_message) ?></td>
                    <td><?= h($ce2b->vigiflow_date) ?></td>
                    <td><?= h($ce2b->report_type) ?></td>
                    <td><?= $ce2b->has('county') ? $this->Html->link($ce2b->county->id, ['controller' => 'Counties', 'action' => 'view', $ce2b->county->id]) : '' ?></td>
                    <td><?= $ce2b->has('sub_county') ? $this->Html->link($ce2b->sub_county->id, ['controller' => 'SubCounties', 'action' => 'view', $ce2b->sub_county->id]) : '' ?></td>
                    <td><?= $ce2b->has('designation') ? $this->Html->link($ce2b->designation->name, ['controller' => 'Designations', 'action' => 'view', $ce2b->designation->id]) : '' ?></td>
                    <td><?= h($ce2b->reference_no) ?></td>
                    <td><?= h($ce2b->messageid) ?></td>
                    <td><?= $ce2b->assigned_to === null ? '' : $this->Number->format($ce2b->assigned_to) ?></td>
                    <td><?= $ce2b->assigned_by === null ? '' : $this->Number->format($ce2b->assigned_by) ?></td>
                    <td><?= h($ce2b->company_code) ?></td>
                    <td><?= h($ce2b->company_name) ?></td>
                    <td><?= h($ce2b->reporter_email) ?></td>
                    <td><?= h($ce2b->e2b_type) ?></td>
                    <td><?= h($ce2b->e2b_file) ?></td>
                    <td><?= h($ce2b->dir) ?></td>
                    <td><?= h($ce2b->size) ?></td>
                    <td><?= h($ce2b->type) ?></td>
                    <td><?= h($ce2b->assigned_date) ?></td>
                    <td><?= h($ce2b->signature) ?></td>
                    <td><?= $ce2b->submitted === null ? '' : $this->Number->format($ce2b->submitted) ?></td>
                    <td><?= h($ce2b->submitted_date) ?></td>
                    <td><?= h($ce2b->reporter_name) ?></td>
                    <td><?= $ce2b->reporter_designation === null ? '' : $this->Number->format($ce2b->reporter_designation) ?></td>
                    <td><?= h($ce2b->reporter_phone) ?></td>
                    <td><?= h($ce2b->reporter_date) ?></td>
                    <td><?= h($ce2b->person_submitting) ?></td>
                    <td><?= h($ce2b->reporter_name_diff) ?></td>
                    <td><?= $ce2b->reporter_designation_diff === null ? '' : $this->Number->format($ce2b->reporter_designation_diff) ?></td>
                    <td><?= h($ce2b->reporter_email_diff) ?></td>
                    <td><?= h($ce2b->reporter_phone_diff) ?></td>
                    <td><?= h($ce2b->reporter_date_diff) ?></td>
                    <td><?= h($ce2b->resubmit) ?></td>
                    <td><?= h($ce2b->status) ?></td>
                    <td><?= $ce2b->active === null ? '' : $this->Number->format($ce2b->active) ?></td>
                    <td><?= $ce2b->copied === null ? '' : $this->Number->format($ce2b->copied) ?></td>
                    <td><?= $ce2b->archived === null ? '' : $this->Number->format($ce2b->archived) ?></td>
                    <td><?= h($ce2b->archived_date) ?></td>
                    <td><?= h($ce2b->created) ?></td>
                    <td><?= h($ce2b->modified) ?></td>
                    <td><?= h($ce2b->action_date) ?></td>
                    <td><?= h($ce2b->deleted) ?></td>
                    <td><?= h($ce2b->deleted_date) ?></td>
                    <td><?= h($ce2b->report_reference) ?></td>
                    <td><?= h($ce2b->creation_time) ?></td>
                    <td><?= h($ce2b->sender_reference) ?></td>
                    <td><?= h($ce2b->receiver_id) ?></td>
                    <td><?= h($ce2b->sender_id) ?></td>
                    <td><?= h($ce2b->sender_unique_identifier) ?></td>
                    <td><?= h($ce2b->worldwide_identifier) ?></td>
                    <td><?= h($ce2b->date_first_received) ?></td>
                    <td><?= h($ce2b->date_most_recent_info) ?></td>
                    <td><?= h($ce2b->serious) ?></td>
                    <td><?= h($ce2b->patient_name) ?></td>
                    <td><?= h($ce2b->patient_sex) ?></td>
                    <td><?= h($ce2b->patient_dob) ?></td>
                    <td><?= h($ce2b->patient_number) ?></td>
                    <td><?= h($ce2b->sender_address) ?></td>
                    <td><?= h($ce2b->sender_city) ?></td>
                    <td><?= h($ce2b->sender_state) ?></td>
                    <td><?= h($ce2b->sender_department) ?></td>
                    <td><?= h($ce2b->sender_organization) ?></td>
                    <td><?= h($ce2b->results_in_detah) ?></td>
                    <td><?= h($ce2b->life_threatening) ?></td>
                    <td><?= h($ce2b->prolonged_hospitalization) ?></td>
                    <td><?= h($ce2b->incapacitating) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $ce2b->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $ce2b->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $ce2b->id], ['confirm' => __('Are you sure you want to delete # {0}?', $ce2b->id)]) ?>
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
