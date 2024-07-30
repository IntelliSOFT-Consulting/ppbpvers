<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\Padr> $padrs
 */
?>
<div class="padrs index content">
    <?= $this->Html->link(__('New Padr'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Padrs') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('padr_id') ?></th>
                    <th><?= $this->Paginator->sort('user_id') ?></th>
                    <th><?= $this->Paginator->sort('county_id') ?></th>
                    <th><?= $this->Paginator->sort('sub_county_id') ?></th>
                    <th><?= $this->Paginator->sort('designation_id') ?></th>
                    <th><?= $this->Paginator->sort('reference_no') ?></th>
                    <th><?= $this->Paginator->sort('relation') ?></th>
                    <th><?= $this->Paginator->sort('vigiflow_ref') ?></th>
                    <th><?= $this->Paginator->sort('vigiflow_date') ?></th>
                    <th><?= $this->Paginator->sort('report_title') ?></th>
                    <th><?= $this->Paginator->sort('report_type') ?></th>
                    <th><?= $this->Paginator->sort('report_sadr') ?></th>
                    <th><?= $this->Paginator->sort('sadr_vomiting') ?></th>
                    <th><?= $this->Paginator->sort('sadr_dizziness') ?></th>
                    <th><?= $this->Paginator->sort('sadr_headache') ?></th>
                    <th><?= $this->Paginator->sort('sadr_joints') ?></th>
                    <th><?= $this->Paginator->sort('sadr_rash') ?></th>
                    <th><?= $this->Paginator->sort('sadr_mouth') ?></th>
                    <th><?= $this->Paginator->sort('sadr_stomach') ?></th>
                    <th><?= $this->Paginator->sort('sadr_urination') ?></th>
                    <th><?= $this->Paginator->sort('sadr_eyes') ?></th>
                    <th><?= $this->Paginator->sort('sadr_died') ?></th>
                    <th><?= $this->Paginator->sort('pqmp_label') ?></th>
                    <th><?= $this->Paginator->sort('patient_name') ?></th>
                    <th><?= $this->Paginator->sort('pqmp_material') ?></th>
                    <th><?= $this->Paginator->sort('date_of_birth') ?></th>
                    <th><?= $this->Paginator->sort('age_group') ?></th>
                    <th><?= $this->Paginator->sort('patient_address') ?></th>
                    <th><?= $this->Paginator->sort('pqmp_color') ?></th>
                    <th><?= $this->Paginator->sort('gender') ?></th>
                    <th><?= $this->Paginator->sort('pqmp_smell') ?></th>
                    <th><?= $this->Paginator->sort('pqmp_working') ?></th>
                    <th><?= $this->Paginator->sort('pqmp_bottle') ?></th>
                    <th><?= $this->Paginator->sort('pregnancy_status') ?></th>
                    <th><?= $this->Paginator->sort('weight') ?></th>
                    <th><?= $this->Paginator->sort('height') ?></th>
                    <th><?= $this->Paginator->sort('date_of_onset_of_reaction') ?></th>
                    <th><?= $this->Paginator->sort('date_of_end_of_reaction') ?></th>
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
                    <th><?= $this->Paginator->sort('submitted_date') ?></th>
                    <th><?= $this->Paginator->sort('emails') ?></th>
                    <th><?= $this->Paginator->sort('active') ?></th>
                    <th><?= $this->Paginator->sort('device') ?></th>
                    <th><?= $this->Paginator->sort('deleted') ?></th>
                    <th><?= $this->Paginator->sort('deleted_date') ?></th>
                    <th><?= $this->Paginator->sort('notified') ?></th>
                    <th><?= $this->Paginator->sort('created') ?></th>
                    <th><?= $this->Paginator->sort('modified') ?></th>
                    <th><?= $this->Paginator->sort('reporter_date') ?></th>
                    <th><?= $this->Paginator->sort('reporter_name_diff') ?></th>
                    <th><?= $this->Paginator->sort('reporter_designation_diff') ?></th>
                    <th><?= $this->Paginator->sort('reporter_email_diff') ?></th>
                    <th><?= $this->Paginator->sort('reporter_phone_diff') ?></th>
                    <th><?= $this->Paginator->sort('reporter_date_diff') ?></th>
                    <th><?= $this->Paginator->sort('assigned_to') ?></th>
                    <th><?= $this->Paginator->sort('assigned_by') ?></th>
                    <th><?= $this->Paginator->sort('assigned_date') ?></th>
                    <th><?= $this->Paginator->sort('reaction_on') ?></th>
                    <th><?= $this->Paginator->sort('consent') ?></th>
                    <th><?= $this->Paginator->sort('copied') ?></th>
                    <th><?= $this->Paginator->sort('archived') ?></th>
                    <th><?= $this->Paginator->sort('archived_date') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($padrs as $padr): ?>
                <tr>
                    <td><?= $this->Number->format($padr->id) ?></td>
                    <td><?= $padr->padr_id === null ? '' : $this->Number->format($padr->padr_id) ?></td>
                    <td><?= $padr->has('user') ? $this->Html->link($padr->user->name, ['controller' => 'Users', 'action' => 'view', $padr->user->id]) : '' ?></td>
                    <td><?= $padr->has('county') ? $this->Html->link($padr->county->id, ['controller' => 'Counties', 'action' => 'view', $padr->county->id]) : '' ?></td>
                    <td><?= $padr->has('sub_county') ? $this->Html->link($padr->sub_county->id, ['controller' => 'SubCounties', 'action' => 'view', $padr->sub_county->id]) : '' ?></td>
                    <td><?= $padr->has('designation') ? $this->Html->link($padr->designation->name, ['controller' => 'Designations', 'action' => 'view', $padr->designation->id]) : '' ?></td>
                    <td><?= h($padr->reference_no) ?></td>
                    <td><?= h($padr->relation) ?></td>
                    <td><?= h($padr->vigiflow_ref) ?></td>
                    <td><?= h($padr->vigiflow_date) ?></td>
                    <td><?= h($padr->report_title) ?></td>
                    <td><?= h($padr->report_type) ?></td>
                    <td><?= h($padr->report_sadr) ?></td>
                    <td><?= h($padr->sadr_vomiting) ?></td>
                    <td><?= h($padr->sadr_dizziness) ?></td>
                    <td><?= h($padr->sadr_headache) ?></td>
                    <td><?= h($padr->sadr_joints) ?></td>
                    <td><?= h($padr->sadr_rash) ?></td>
                    <td><?= h($padr->sadr_mouth) ?></td>
                    <td><?= h($padr->sadr_stomach) ?></td>
                    <td><?= h($padr->sadr_urination) ?></td>
                    <td><?= h($padr->sadr_eyes) ?></td>
                    <td><?= h($padr->sadr_died) ?></td>
                    <td><?= h($padr->pqmp_label) ?></td>
                    <td><?= h($padr->patient_name) ?></td>
                    <td><?= h($padr->pqmp_material) ?></td>
                    <td><?= h($padr->date_of_birth) ?></td>
                    <td><?= h($padr->age_group) ?></td>
                    <td><?= h($padr->patient_address) ?></td>
                    <td><?= h($padr->pqmp_color) ?></td>
                    <td><?= h($padr->gender) ?></td>
                    <td><?= h($padr->pqmp_smell) ?></td>
                    <td><?= h($padr->pqmp_working) ?></td>
                    <td><?= h($padr->pqmp_bottle) ?></td>
                    <td><?= h($padr->pregnancy_status) ?></td>
                    <td><?= h($padr->weight) ?></td>
                    <td><?= h($padr->height) ?></td>
                    <td><?= h($padr->date_of_onset_of_reaction) ?></td>
                    <td><?= h($padr->date_of_end_of_reaction) ?></td>
                    <td><?= h($padr->reaction_resolve) ?></td>
                    <td><?= h($padr->reaction_reappear) ?></td>
                    <td><?= h($padr->severity) ?></td>
                    <td><?= h($padr->serious) ?></td>
                    <td><?= h($padr->serious_reason) ?></td>
                    <td><?= h($padr->action_taken) ?></td>
                    <td><?= h($padr->outcome) ?></td>
                    <td><?= h($padr->causality) ?></td>
                    <td><?= h($padr->reporter_name) ?></td>
                    <td><?= h($padr->reporter_email) ?></td>
                    <td><?= h($padr->reporter_phone) ?></td>
                    <td><?= $padr->submitted === null ? '' : $this->Number->format($padr->submitted) ?></td>
                    <td><?= h($padr->submitted_date) ?></td>
                    <td><?= $padr->emails === null ? '' : $this->Number->format($padr->emails) ?></td>
                    <td><?= h($padr->active) ?></td>
                    <td><?= $padr->device === null ? '' : $this->Number->format($padr->device) ?></td>
                    <td><?= h($padr->deleted) ?></td>
                    <td><?= h($padr->deleted_date) ?></td>
                    <td><?= $padr->notified === null ? '' : $this->Number->format($padr->notified) ?></td>
                    <td><?= h($padr->created) ?></td>
                    <td><?= h($padr->modified) ?></td>
                    <td><?= h($padr->reporter_date) ?></td>
                    <td><?= h($padr->reporter_name_diff) ?></td>
                    <td><?= $padr->reporter_designation_diff === null ? '' : $this->Number->format($padr->reporter_designation_diff) ?></td>
                    <td><?= h($padr->reporter_email_diff) ?></td>
                    <td><?= h($padr->reporter_phone_diff) ?></td>
                    <td><?= h($padr->reporter_date_diff) ?></td>
                    <td><?= $padr->assigned_to === null ? '' : $this->Number->format($padr->assigned_to) ?></td>
                    <td><?= $padr->assigned_by === null ? '' : $this->Number->format($padr->assigned_by) ?></td>
                    <td><?= h($padr->assigned_date) ?></td>
                    <td><?= h($padr->reaction_on) ?></td>
                    <td><?= h($padr->consent) ?></td>
                    <td><?= $padr->copied === null ? '' : $this->Number->format($padr->copied) ?></td>
                    <td><?= $padr->archived === null ? '' : $this->Number->format($padr->archived) ?></td>
                    <td><?= h($padr->archived_date) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $padr->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $padr->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $padr->id], ['confirm' => __('Are you sure you want to delete # {0}?', $padr->id)]) ?>
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
