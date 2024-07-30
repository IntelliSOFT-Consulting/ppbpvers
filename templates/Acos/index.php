<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\Aco> $acos
 */
?>
<div class="acos index content">
    <?= $this->Html->link(__('New Aco'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Acos') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('parent_id') ?></th>
                    <th><?= $this->Paginator->sort('model') ?></th>
                    <th><?= $this->Paginator->sort('foreign_key') ?></th>
                    <th><?= $this->Paginator->sort('alias') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($acos as $aco): ?>
                <tr>
                    <td><?= $this->Number->format($aco->id) ?></td>
                    <td><?= $aco->has('parent_aco') ? $this->Html->link($aco->parent_aco->id, ['controller' => 'Acos', 'action' => 'view', $aco->parent_aco->id]) : '' ?></td>
                    <td><?= h($aco->model) ?></td>
                    <td><?= $aco->foreign_key === null ? '' : $this->Number->format($aco->foreign_key) ?></td>
                    <td><?= h($aco->alias) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $aco->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $aco->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $aco->id], ['confirm' => __('Are you sure you want to delete # {0}?', $aco->id)]) ?>
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
