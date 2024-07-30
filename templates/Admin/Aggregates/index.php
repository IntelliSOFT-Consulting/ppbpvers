<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\Aggregate> $aggregates
 */
?>
<div class="aggregates index content">
    <?= $this->Html->link(__('New Aggregate'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Aggregates') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('user_id') ?></th>
                    <th><?= $this->Paginator->sort('aggregate_id') ?></th>
                    <th><?= $this->Paginator->sort('county_id') ?></th>
                    <th><?= $this->Paginator->sort('summary_available') ?></th>
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
                    <th><?= $this->Paginator->sort('brand_name') ?></th>
                    <th><?= $this->Paginator->sort('inn_name') ?></th>
                    <th><?= $this->Paginator->sort('mah') ?></th>
                    <th><?= $this->Paginator->sort('local_technical') ?></th>
                    <th><?= $this->Paginator->sort('therapeutic_group') ?></th>
                    <th><?= $this->Paginator->sort('authorised_indications') ?></th>
                    <th><?= $this->Paginator->sort('form_strength') ?></th>
                    <th><?= $this->Paginator->sort('interval_code') ?></th>
                    <th><?= $this->Paginator->sort('submission_frequency') ?></th>
                    <th><?= $this->Paginator->sort('reminder_date') ?></th>
                    <th><?= $this->Paginator->sort('report_type') ?></th>
                    <th><?= $this->Paginator->sort('manager_initiated') ?></th>
                    <th><?= $this->Paginator->sort('manager_submitted') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($aggregates as $aggregate): ?>
                <tr>
                    <td><?= $this->Number->format($aggregate->id) ?></td>
                    <td><?= $aggregate->has('user') ? $this->Html->link($aggregate->user->name, ['controller' => 'Users', 'action' => 'view', $aggregate->user->id]) : '' ?></td>
                    <td><?= $aggregate->aggregate_id === null ? '' : $this->Number->format($aggregate->aggregate_id) ?></td>
                    <td><?= $aggregate->has('county') ? $this->Html->link($aggregate->county->id, ['controller' => 'Counties', 'action' => 'view', $aggregate->county->id]) : '' ?></td>
                    <td><?= h($aggregate->summary_available) ?></td>
                    <td><?= $aggregate->has('sub_county') ? $this->Html->link($aggregate->sub_county->id, ['controller' => 'SubCounties', 'action' => 'view', $aggregate->sub_county->id]) : '' ?></td>
                    <td><?= $aggregate->has('designation') ? $this->Html->link($aggregate->designation->name, ['controller' => 'Designations', 'action' => 'view', $aggregate->designation->id]) : '' ?></td>
                    <td><?= h($aggregate->reference_no) ?></td>
                    <td><?= h($aggregate->messageid) ?></td>
                    <td><?= $aggregate->assigned_to === null ? '' : $this->Number->format($aggregate->assigned_to) ?></td>
                    <td><?= $aggregate->assigned_by === null ? '' : $this->Number->format($aggregate->assigned_by) ?></td>
                    <td><?= h($aggregate->company_code) ?></td>
                    <td><?= h($aggregate->company_name) ?></td>
                    <td><?= h($aggregate->reporter_email) ?></td>
                    <td><?= h($aggregate->e2b_type) ?></td>
                    <td><?= h($aggregate->e2b_file) ?></td>
                    <td><?= h($aggregate->dir) ?></td>
                    <td><?= h($aggregate->size) ?></td>
                    <td><?= h($aggregate->type) ?></td>
                    <td><?= h($aggregate->assigned_date) ?></td>
                    <td><?= h($aggregate->signature) ?></td>
                    <td><?= $aggregate->submitted === null ? '' : $this->Number->format($aggregate->submitted) ?></td>
                    <td><?= h($aggregate->submitted_date) ?></td>
                    <td><?= h($aggregate->reporter_name) ?></td>
                    <td><?= $aggregate->reporter_designation === null ? '' : $this->Number->format($aggregate->reporter_designation) ?></td>
                    <td><?= h($aggregate->reporter_phone) ?></td>
                    <td><?= h($aggregate->reporter_date) ?></td>
                    <td><?= h($aggregate->person_submitting) ?></td>
                    <td><?= h($aggregate->reporter_name_diff) ?></td>
                    <td><?= $aggregate->reporter_designation_diff === null ? '' : $this->Number->format($aggregate->reporter_designation_diff) ?></td>
                    <td><?= h($aggregate->reporter_email_diff) ?></td>
                    <td><?= h($aggregate->reporter_phone_diff) ?></td>
                    <td><?= h($aggregate->reporter_date_diff) ?></td>
                    <td><?= h($aggregate->resubmit) ?></td>
                    <td><?= h($aggregate->status) ?></td>
                    <td><?= $aggregate->active === null ? '' : $this->Number->format($aggregate->active) ?></td>
                    <td><?= $aggregate->copied === null ? '' : $this->Number->format($aggregate->copied) ?></td>
                    <td><?= $aggregate->archived === null ? '' : $this->Number->format($aggregate->archived) ?></td>
                    <td><?= h($aggregate->archived_date) ?></td>
                    <td><?= h($aggregate->created) ?></td>
                    <td><?= h($aggregate->modified) ?></td>
                    <td><?= h($aggregate->action_date) ?></td>
                    <td><?= h($aggregate->deleted) ?></td>
                    <td><?= h($aggregate->deleted_date) ?></td>
                    <td><?= h($aggregate->brand_name) ?></td>
                    <td><?= h($aggregate->inn_name) ?></td>
                    <td><?= h($aggregate->mah) ?></td>
                    <td><?= h($aggregate->local_technical) ?></td>
                    <td><?= h($aggregate->therapeutic_group) ?></td>
                    <td><?= h($aggregate->authorised_indications) ?></td>
                    <td><?= h($aggregate->form_strength) ?></td>
                    <td><?= $aggregate->interval_code === null ? '' : $this->Number->format($aggregate->interval_code) ?></td>
                    <td><?= h($aggregate->submission_frequency) ?></td>
                    <td><?= h($aggregate->reminder_date) ?></td>
                    <td><?= h($aggregate->report_type) ?></td>
                    <td><?= h($aggregate->manager_initiated) ?></td>
                    <td><?= h($aggregate->manager_submitted) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $aggregate->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $aggregate->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $aggregate->id], ['confirm' => __('Are you sure you want to delete # {0}?', $aggregate->id)]) ?>
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
