<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\ArosAco> $arosAcos
 */
?>
<div class="arosAcos index content">
    <?= $this->Html->link(__('New Aros Aco'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Aros Acos') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('aro_id') ?></th>
                    <th><?= $this->Paginator->sort('aco_id') ?></th>
                    <th><?= $this->Paginator->sort('_create') ?></th>
                    <th><?= $this->Paginator->sort('_read') ?></th>
                    <th><?= $this->Paginator->sort('_update') ?></th>
                    <th><?= $this->Paginator->sort('_delete') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($arosAcos as $arosAco): ?>
                <tr>
                    <td><?= $this->Number->format($arosAco->id) ?></td>
                    <td><?= $arosAco->has('aro') ? $this->Html->link($arosAco->aro->id, ['controller' => 'Aros', 'action' => 'view', $arosAco->aro->id]) : '' ?></td>
                    <td><?= $arosAco->has('aco') ? $this->Html->link($arosAco->aco->id, ['controller' => 'Acos', 'action' => 'view', $arosAco->aco->id]) : '' ?></td>
                    <td><?= h($arosAco->_create) ?></td>
                    <td><?= h($arosAco->_read) ?></td>
                    <td><?= h($arosAco->_update) ?></td>
                    <td><?= h($arosAco->_delete) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $arosAco->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $arosAco->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $arosAco->id], ['confirm' => __('Are you sure you want to delete # {0}?', $arosAco->id)]) ?>
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
