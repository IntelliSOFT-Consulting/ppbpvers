<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\Sae> $saes
 */
?>
<div class="saes index content">
    <?= $this->Html->link(__('New Sae'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Saes') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('application_id') ?></th>
                    <th><?= $this->Paginator->sort('sae_id') ?></th>
                    <th><?= $this->Paginator->sort('reference_no') ?></th>
                    <th><?= $this->Paginator->sort('form_type') ?></th>
                    <th><?= $this->Paginator->sort('user_id') ?></th>
                    <th><?= $this->Paginator->sort('patient_initials') ?></th>
                    <th><?= $this->Paginator->sort('country_id') ?></th>
                    <th><?= $this->Paginator->sort('date_of_birth') ?></th>
                    <th><?= $this->Paginator->sort('age_years') ?></th>
                    <th><?= $this->Paginator->sort('gender') ?></th>
                    <th><?= $this->Paginator->sort('causality') ?></th>
                    <th><?= $this->Paginator->sort('enrollment_date') ?></th>
                    <th><?= $this->Paginator->sort('administration_date') ?></th>
                    <th><?= $this->Paginator->sort('latest_date') ?></th>
                    <th><?= $this->Paginator->sort('reaction_onset') ?></th>
                    <th><?= $this->Paginator->sort('reaction_end_date') ?></th>
                    <th><?= $this->Paginator->sort('patient_died') ?></th>
                    <th><?= $this->Paginator->sort('prolonged_hospitalization') ?></th>
                    <th><?= $this->Paginator->sort('incapacity') ?></th>
                    <th><?= $this->Paginator->sort('life_threatening') ?></th>
                    <th><?= $this->Paginator->sort('reaction_other') ?></th>
                    <th><?= $this->Paginator->sort('manufacturer_name') ?></th>
                    <th><?= $this->Paginator->sort('mfr_no') ?></th>
                    <th><?= $this->Paginator->sort('manufacturer_date') ?></th>
                    <th><?= $this->Paginator->sort('source_study') ?></th>
                    <th><?= $this->Paginator->sort('source_literature') ?></th>
                    <th><?= $this->Paginator->sort('source_health_professional') ?></th>
                    <th><?= $this->Paginator->sort('report_date') ?></th>
                    <th><?= $this->Paginator->sort('submitted_date') ?></th>
                    <th><?= $this->Paginator->sort('report_type') ?></th>
                    <th><?= $this->Paginator->sort('approved') ?></th>
                    <th><?= $this->Paginator->sort('approved_by') ?></th>
                    <th><?= $this->Paginator->sort('email_address') ?></th>
                    <th><?= $this->Paginator->sort('reporter_name') ?></th>
                    <th><?= $this->Paginator->sort('reporter_phone') ?></th>
                    <th><?= $this->Paginator->sort('reporter_email') ?></th>
                    <th><?= $this->Paginator->sort('assigned_to') ?></th>
                    <th><?= $this->Paginator->sort('assigned_by') ?></th>
                    <th><?= $this->Paginator->sort('assigned_date') ?></th>
                    <th><?= $this->Paginator->sort('deleted') ?></th>
                    <th><?= $this->Paginator->sort('deleted_date') ?></th>
                    <th><?= $this->Paginator->sort('created') ?></th>
                    <th><?= $this->Paginator->sort('modified') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($saes as $sae): ?>
                <tr>
                    <td><?= $this->Number->format($sae->id) ?></td>
                    <td><?= $sae->application_id === null ? '' : $this->Number->format($sae->application_id) ?></td>
                    <td><?= $sae->sae_id === null ? '' : $this->Number->format($sae->sae_id) ?></td>
                    <td><?= h($sae->reference_no) ?></td>
                    <td><?= h($sae->form_type) ?></td>
                    <td><?= $sae->has('user') ? $this->Html->link($sae->user->name, ['controller' => 'Users', 'action' => 'view', $sae->user->id]) : '' ?></td>
                    <td><?= h($sae->patient_initials) ?></td>
                    <td><?= $sae->has('country') ? $this->Html->link($sae->country->name, ['controller' => 'Countries', 'action' => 'view', $sae->country->id]) : '' ?></td>
                    <td><?= h($sae->date_of_birth) ?></td>
                    <td><?= $sae->age_years === null ? '' : $this->Number->format($sae->age_years) ?></td>
                    <td><?= h($sae->gender) ?></td>
                    <td><?= h($sae->causality) ?></td>
                    <td><?= h($sae->enrollment_date) ?></td>
                    <td><?= h($sae->administration_date) ?></td>
                    <td><?= h($sae->latest_date) ?></td>
                    <td><?= h($sae->reaction_onset) ?></td>
                    <td><?= h($sae->reaction_end_date) ?></td>
                    <td><?= h($sae->patient_died) ?></td>
                    <td><?= h($sae->prolonged_hospitalization) ?></td>
                    <td><?= h($sae->incapacity) ?></td>
                    <td><?= h($sae->life_threatening) ?></td>
                    <td><?= h($sae->reaction_other) ?></td>
                    <td><?= h($sae->manufacturer_name) ?></td>
                    <td><?= h($sae->mfr_no) ?></td>
                    <td><?= h($sae->manufacturer_date) ?></td>
                    <td><?= h($sae->source_study) ?></td>
                    <td><?= h($sae->source_literature) ?></td>
                    <td><?= h($sae->source_health_professional) ?></td>
                    <td><?= h($sae->report_date) ?></td>
                    <td><?= h($sae->submitted_date) ?></td>
                    <td><?= h($sae->report_type) ?></td>
                    <td><?= $sae->approved === null ? '' : $this->Number->format($sae->approved) ?></td>
                    <td><?= $sae->approved_by === null ? '' : $this->Number->format($sae->approved_by) ?></td>
                    <td><?= h($sae->email_address) ?></td>
                    <td><?= h($sae->reporter_name) ?></td>
                    <td><?= h($sae->reporter_phone) ?></td>
                    <td><?= h($sae->reporter_email) ?></td>
                    <td><?= $sae->assigned_to === null ? '' : $this->Number->format($sae->assigned_to) ?></td>
                    <td><?= $sae->assigned_by === null ? '' : $this->Number->format($sae->assigned_by) ?></td>
                    <td><?= h($sae->assigned_date) ?></td>
                    <td><?= h($sae->deleted) ?></td>
                    <td><?= h($sae->deleted_date) ?></td>
                    <td><?= h($sae->created) ?></td>
                    <td><?= h($sae->modified) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $sae->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $sae->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $sae->id], ['confirm' => __('Are you sure you want to delete # {0}?', $sae->id)]) ?>
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
