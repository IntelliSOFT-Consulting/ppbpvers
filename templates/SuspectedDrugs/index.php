<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\SuspectedDrug> $suspectedDrugs
 */
?>
<div class="suspectedDrugs index content">
    <?= $this->Html->link(__('New Suspected Drug'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Suspected Drugs') ?></h3>
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
                    <th><?= $this->Paginator->sort('therapy_duration') ?></th>
                    <th><?= $this->Paginator->sort('reaction_abate') ?></th>
                    <th><?= $this->Paginator->sort('reaction_reappear') ?></th>
                    <th><?= $this->Paginator->sort('deleted') ?></th>
                    <th><?= $this->Paginator->sort('deleted_date') ?></th>
                    <th><?= $this->Paginator->sort('created') ?></th>
                    <th><?= $this->Paginator->sort('modified') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($suspectedDrugs as $suspectedDrug): ?>
                <tr>
                    <td><?= $this->Number->format($suspectedDrug->id) ?></td>
                    <td><?= $suspectedDrug->has('sae') ? $this->Html->link($suspectedDrug->sae->email_address, ['controller' => 'Saes', 'action' => 'view', $suspectedDrug->sae->id]) : '' ?></td>
                    <td><?= h($suspectedDrug->generic_name) ?></td>
                    <td><?= h($suspectedDrug->dose) ?></td>
                    <td><?= $suspectedDrug->has('route') ? $this->Html->link($suspectedDrug->route->name, ['controller' => 'Routes', 'action' => 'view', $suspectedDrug->route->id]) : '' ?></td>
                    <td><?= h($suspectedDrug->indication) ?></td>
                    <td><?= h($suspectedDrug->date_from) ?></td>
                    <td><?= h($suspectedDrug->date_to) ?></td>
                    <td><?= h($suspectedDrug->therapy_duration) ?></td>
                    <td><?= h($suspectedDrug->reaction_abate) ?></td>
                    <td><?= h($suspectedDrug->reaction_reappear) ?></td>
                    <td><?= h($suspectedDrug->deleted) ?></td>
                    <td><?= h($suspectedDrug->deleted_date) ?></td>
                    <td><?= h($suspectedDrug->created) ?></td>
                    <td><?= h($suspectedDrug->modified) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $suspectedDrug->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $suspectedDrug->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $suspectedDrug->id], ['confirm' => __('Are you sure you want to delete # {0}?', $suspectedDrug->id)]) ?>
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
