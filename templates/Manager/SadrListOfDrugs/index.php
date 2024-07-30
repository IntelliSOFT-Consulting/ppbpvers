<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\SadrListOfDrug> $sadrListOfDrugs
 */
?>
<div class="sadrListOfDrugs index content">
    <?= $this->Html->link(__('New Sadr List Of Drug'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Sadr List Of Drugs') ?></h3>
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
                    <th><?= $this->Paginator->sort('frequency_id_other') ?></th>
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
                <?php foreach ($sadrListOfDrugs as $sadrListOfDrug): ?>
                <tr>
                    <td><?= $this->Number->format($sadrListOfDrug->id) ?></td>
                    <td><?= $sadrListOfDrug->has('sadr') ? $this->Html->link($sadrListOfDrug->sadr->id, ['controller' => 'Sadrs', 'action' => 'view', $sadrListOfDrug->sadr->id]) : '' ?></td>
                    <td><?= $sadrListOfDrug->has('sadr_followup') ? $this->Html->link($sadrListOfDrug->sadr_followup->id, ['controller' => 'SadrFollowups', 'action' => 'view', $sadrListOfDrug->sadr_followup->id]) : '' ?></td>
                    <td><?= $sadrListOfDrug->has('dose') ? $this->Html->link($sadrListOfDrug->dose->name, ['controller' => 'Doses', 'action' => 'view', $sadrListOfDrug->dose->id]) : '' ?></td>
                    <td><?= $sadrListOfDrug->has('route') ? $this->Html->link($sadrListOfDrug->route->name, ['controller' => 'Routes', 'action' => 'view', $sadrListOfDrug->route->id]) : '' ?></td>
                    <td><?= $sadrListOfDrug->has('frequency') ? $this->Html->link($sadrListOfDrug->frequency->name, ['controller' => 'Frequencies', 'action' => 'view', $sadrListOfDrug->frequency->id]) : '' ?></td>
                    <td><?= h($sadrListOfDrug->frequency_id_other) ?></td>
                    <td><?= h($sadrListOfDrug->drug_name) ?></td>
                    <td><?= h($sadrListOfDrug->brand_name) ?></td>
                    <td><?= h($sadrListOfDrug->batch_no) ?></td>
                    <td><?= h($sadrListOfDrug->manufacturer) ?></td>
                    <td><?= h($sadrListOfDrug->dose) ?></td>
                    <td><?= h($sadrListOfDrug->start_date) ?></td>
                    <td><?= h($sadrListOfDrug->stop_date) ?></td>
                    <td><?= h($sadrListOfDrug->indication) ?></td>
                    <td><?= h($sadrListOfDrug->suspected_drug) ?></td>
                    <td><?= h($sadrListOfDrug->created) ?></td>
                    <td><?= h($sadrListOfDrug->modified) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $sadrListOfDrug->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $sadrListOfDrug->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $sadrListOfDrug->id], ['confirm' => __('Are you sure you want to delete # {0}?', $sadrListOfDrug->id)]) ?>
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
