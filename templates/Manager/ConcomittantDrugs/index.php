<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\ConcomittantDrug> $concomittantDrugs
 */
?>
<div class="concomittantDrugs index content">
    <?= $this->Html->link(__('New Concomittant Drug'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Concomittant Drugs') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('sae_id') ?></th>
                    <th><?= $this->Paginator->sort('generic_name') ?></th>
                    <th><?= $this->Paginator->sort('dose') ?></th>
                    <th><?= $this->Paginator->sort('route_id') ?></th>
                    <th><?= $this->Paginator->sort('indication') ?></th>
                    <th><?= $this->Paginator->sort('date_from') ?></th>
                    <th><?= $this->Paginator->sort('date_to') ?></th>
                    <th><?= $this->Paginator->sort('deleted') ?></th>
                    <th><?= $this->Paginator->sort('deleted_date') ?></th>
                    <th><?= $this->Paginator->sort('created') ?></th>
                    <th><?= $this->Paginator->sort('modified') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($concomittantDrugs as $concomittantDrug): ?>
                <tr>
                    <td><?= $this->Number->format($concomittantDrug->id) ?></td>
                    <td><?= $concomittantDrug->has('sae') ? $this->Html->link($concomittantDrug->sae->email_address, ['controller' => 'Saes', 'action' => 'view', $concomittantDrug->sae->id]) : '' ?></td>
                    <td><?= h($concomittantDrug->generic_name) ?></td>
                    <td><?= h($concomittantDrug->dose) ?></td>
                    <td><?= $concomittantDrug->has('route') ? $this->Html->link($concomittantDrug->route->name, ['controller' => 'Routes', 'action' => 'view', $concomittantDrug->route->id]) : '' ?></td>
                    <td><?= h($concomittantDrug->indication) ?></td>
                    <td><?= h($concomittantDrug->date_from) ?></td>
                    <td><?= h($concomittantDrug->date_to) ?></td>
                    <td><?= h($concomittantDrug->deleted) ?></td>
                    <td><?= h($concomittantDrug->deleted_date) ?></td>
                    <td><?= h($concomittantDrug->created) ?></td>
                    <td><?= h($concomittantDrug->modified) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $concomittantDrug->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $concomittantDrug->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $concomittantDrug->id], ['confirm' => __('Are you sure you want to delete # {0}?', $concomittantDrug->id)]) ?>
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
