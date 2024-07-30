<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\Ce2bListOfDrug> $ce2bListOfDrugs
 */
?>
<div class="ce2bListOfDrugs index content">
    <?= $this->Html->link(__('New Ce2b List Of Drug'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Ce2b List Of Drugs') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('ce2b_id') ?></th>
                    <th><?= $this->Paginator->sort('ce2b_followup_id') ?></th>
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
                    <th><?= $this->Paginator->sort('route') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($ce2bListOfDrugs as $ce2bListOfDrug): ?>
                <tr>
                    <td><?= $this->Number->format($ce2bListOfDrug->id) ?></td>
                    <td><?= $ce2bListOfDrug->has('ce2b') ? $this->Html->link($ce2bListOfDrug->ce2b->id, ['controller' => 'Ce2bs', 'action' => 'view', $ce2bListOfDrug->ce2b->id]) : '' ?></td>
                    <td><?= $ce2bListOfDrug->ce2b_followup_id === null ? '' : $this->Number->format($ce2bListOfDrug->ce2b_followup_id) ?></td>
                    <td><?= $ce2bListOfDrug->has('dose') ? $this->Html->link($ce2bListOfDrug->dose->name, ['controller' => 'Doses', 'action' => 'view', $ce2bListOfDrug->dose->id]) : '' ?></td>
                    <td><?= $ce2bListOfDrug->has('route') ? $this->Html->link($ce2bListOfDrug->route->name, ['controller' => 'Routes', 'action' => 'view', $ce2bListOfDrug->route->id]) : '' ?></td>
                    <td><?= $ce2bListOfDrug->has('frequency') ? $this->Html->link($ce2bListOfDrug->frequency->name, ['controller' => 'Frequencies', 'action' => 'view', $ce2bListOfDrug->frequency->id]) : '' ?></td>
                    <td><?= h($ce2bListOfDrug->frequency_id_other) ?></td>
                    <td><?= h($ce2bListOfDrug->drug_name) ?></td>
                    <td><?= h($ce2bListOfDrug->brand_name) ?></td>
                    <td><?= h($ce2bListOfDrug->batch_no) ?></td>
                    <td><?= h($ce2bListOfDrug->manufacturer) ?></td>
                    <td><?= h($ce2bListOfDrug->dose) ?></td>
                    <td><?= h($ce2bListOfDrug->start_date) ?></td>
                    <td><?= h($ce2bListOfDrug->stop_date) ?></td>
                    <td><?= h($ce2bListOfDrug->indication) ?></td>
                    <td><?= h($ce2bListOfDrug->suspected_drug) ?></td>
                    <td><?= h($ce2bListOfDrug->created) ?></td>
                    <td><?= h($ce2bListOfDrug->modified) ?></td>
                    <td><?= h($ce2bListOfDrug->route) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $ce2bListOfDrug->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $ce2bListOfDrug->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $ce2bListOfDrug->id], ['confirm' => __('Are you sure you want to delete # {0}?', $ce2bListOfDrug->id)]) ?>
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
