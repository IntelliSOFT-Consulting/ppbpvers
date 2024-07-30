<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\SadrListOfMedicine> $sadrListOfMedicines
 */
?>
<div class="sadrListOfMedicines index content">
    <?= $this->Html->link(__('New Sadr List Of Medicine'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Sadr List Of Medicines') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('sadr_id') ?></th>
                    <th><?= $this->Paginator->sort('sadr_followup_id') ?></th>
                    <th><?= $this->Paginator->sort('dose_id') ?></th>
                    <th><?= $this->Paginator->sort('route_id') ?></th>
                    <th><?= $this->Paginator->sort('frequency_id') ?></th>
                    <th><?= $this->Paginator->sort('frequency_other') ?></th>
                    <th><?= $this->Paginator->sort('drug_name') ?></th>
                    <th><?= $this->Paginator->sort('brand_name') ?></th>
                    <th><?= $this->Paginator->sort('batch_no') ?></th>
                    <th><?= $this->Paginator->sort('manufacturer') ?></th>
                    <th><?= $this->Paginator->sort('dose') ?></th>
                    <th><?= $this->Paginator->sort('start_date') ?></th>
                    <th><?= $this->Paginator->sort('stop_date') ?></th>
                    <th><?= $this->Paginator->sort('indication') ?></th>
                    <th><?= $this->Paginator->sort('suspected_drug') ?></th>
                    <th><?= $this->Paginator->sort('created') ?></th>
                    <th><?= $this->Paginator->sort('modified') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($sadrListOfMedicines as $sadrListOfMedicine): ?>
                <tr>
                    <td><?= $this->Number->format($sadrListOfMedicine->id) ?></td>
                    <td><?= $sadrListOfMedicine->has('sadr') ? $this->Html->link($sadrListOfMedicine->sadr->id, ['controller' => 'Sadrs', 'action' => 'view', $sadrListOfMedicine->sadr->id]) : '' ?></td>
                    <td><?= $sadrListOfMedicine->has('sadr_followup') ? $this->Html->link($sadrListOfMedicine->sadr_followup->id, ['controller' => 'SadrFollowups', 'action' => 'view', $sadrListOfMedicine->sadr_followup->id]) : '' ?></td>
                    <td><?= $sadrListOfMedicine->has('dose') ? $this->Html->link($sadrListOfMedicine->dose->name, ['controller' => 'Doses', 'action' => 'view', $sadrListOfMedicine->dose->id]) : '' ?></td>
                    <td><?= $sadrListOfMedicine->has('route') ? $this->Html->link($sadrListOfMedicine->route->name, ['controller' => 'Routes', 'action' => 'view', $sadrListOfMedicine->route->id]) : '' ?></td>
                    <td><?= $sadrListOfMedicine->has('frequency') ? $this->Html->link($sadrListOfMedicine->frequency->name, ['controller' => 'Frequencies', 'action' => 'view', $sadrListOfMedicine->frequency->id]) : '' ?></td>
                    <td><?= h($sadrListOfMedicine->frequency_other) ?></td>
                    <td><?= h($sadrListOfMedicine->drug_name) ?></td>
                    <td><?= h($sadrListOfMedicine->brand_name) ?></td>
                    <td><?= h($sadrListOfMedicine->batch_no) ?></td>
                    <td><?= h($sadrListOfMedicine->manufacturer) ?></td>
                    <td><?= h($sadrListOfMedicine->dose) ?></td>
                    <td><?= h($sadrListOfMedicine->start_date) ?></td>
                    <td><?= h($sadrListOfMedicine->stop_date) ?></td>
                    <td><?= h($sadrListOfMedicine->indication) ?></td>
                    <td><?= h($sadrListOfMedicine->suspected_drug) ?></td>
                    <td><?= h($sadrListOfMedicine->created) ?></td>
                    <td><?= h($sadrListOfMedicine->modified) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $sadrListOfMedicine->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $sadrListOfMedicine->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $sadrListOfMedicine->id], ['confirm' => __('Are you sure you want to delete # {0}?', $sadrListOfMedicine->id)]) ?>
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
