<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\AefiListOfVaccine> $aefiListOfVaccines
 */
?>
<div class="aefiListOfVaccines index content">
    <?= $this->Html->link(__('New Aefi List Of Vaccine'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Aefi List Of Vaccines') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('aefi_id') ?></th>
                    <th><?= $this->Paginator->sort('saefi_id') ?></th>
                    <th><?= $this->Paginator->sort('vaccine_id') ?></th>
                    <th><?= $this->Paginator->sort('vaccine_name') ?></th>
                    <th><?= $this->Paginator->sort('vaccination_date') ?></th>
                    <th><?= $this->Paginator->sort('vaccination_time') ?></th>
                    <th><?= $this->Paginator->sort('vaccine_manufacturer') ?></th>
                    <th><?= $this->Paginator->sort('vaccination_route') ?></th>
                    <th><?= $this->Paginator->sort('vaccination_site') ?></th>
                    <th><?= $this->Paginator->sort('dosage') ?></th>
                    <th><?= $this->Paginator->sort('icsr_code') ?></th>
                    <th><?= $this->Paginator->sort('batch_number') ?></th>
                    <th><?= $this->Paginator->sort('expiry_date') ?></th>
                    <th><?= $this->Paginator->sort('diluent_batch_number') ?></th>
                    <th><?= $this->Paginator->sort('diluent_manufacturer') ?></th>
                    <th><?= $this->Paginator->sort('diluent_expiry_date') ?></th>
                    <th><?= $this->Paginator->sort('suspected_drug') ?></th>
                    <th><?= $this->Paginator->sort('created') ?></th>
                    <th><?= $this->Paginator->sort('modified') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($aefiListOfVaccines as $aefiListOfVaccine): ?>
                <tr>
                    <td><?= $this->Number->format($aefiListOfVaccine->id) ?></td>
                    <td><?= $aefiListOfVaccine->has('aefi') ? $this->Html->link($aefiListOfVaccine->aefi->id, ['controller' => 'Aefis', 'action' => 'view', $aefiListOfVaccine->aefi->id]) : '' ?></td>
                    <td><?= $aefiListOfVaccine->has('saefi') ? $this->Html->link($aefiListOfVaccine->saefi->id, ['controller' => 'Saefis', 'action' => 'view', $aefiListOfVaccine->saefi->id]) : '' ?></td>
                    <td><?= $aefiListOfVaccine->has('vaccine') ? $this->Html->link($aefiListOfVaccine->vaccine->id, ['controller' => 'Vaccines', 'action' => 'view', $aefiListOfVaccine->vaccine->id]) : '' ?></td>
                    <td><?= h($aefiListOfVaccine->vaccine_name) ?></td>
                    <td><?= h($aefiListOfVaccine->vaccination_date) ?></td>
                    <td><?= h($aefiListOfVaccine->vaccination_time) ?></td>
                    <td><?= h($aefiListOfVaccine->vaccine_manufacturer) ?></td>
                    <td><?= h($aefiListOfVaccine->vaccination_route) ?></td>
                    <td><?= h($aefiListOfVaccine->vaccination_site) ?></td>
                    <td><?= h($aefiListOfVaccine->dosage) ?></td>
                    <td><?= h($aefiListOfVaccine->icsr_code) ?></td>
                    <td><?= h($aefiListOfVaccine->batch_number) ?></td>
                    <td><?= h($aefiListOfVaccine->expiry_date) ?></td>
                    <td><?= h($aefiListOfVaccine->diluent_batch_number) ?></td>
                    <td><?= h($aefiListOfVaccine->diluent_manufacturer) ?></td>
                    <td><?= h($aefiListOfVaccine->diluent_expiry_date) ?></td>
                    <td><?= h($aefiListOfVaccine->suspected_drug) ?></td>
                    <td><?= h($aefiListOfVaccine->created) ?></td>
                    <td><?= h($aefiListOfVaccine->modified) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $aefiListOfVaccine->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $aefiListOfVaccine->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $aefiListOfVaccine->id], ['confirm' => __('Are you sure you want to delete # {0}?', $aefiListOfVaccine->id)]) ?>
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
