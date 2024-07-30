<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\Aro> $aros
 */
?>
<div class="aros index content">
    <?= $this->Html->link(__('New Aro'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Aros') ?></h3>
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
                <?php foreach ($aros as $aro): ?>
                <tr>
                    <td><?= $this->Number->format($aro->id) ?></td>
                    <td><?= $aro->has('parent_aro') ? $this->Html->link($aro->parent_aro->id, ['controller' => 'Aros', 'action' => 'view', $aro->parent_aro->id]) : '' ?></td>
                    <td><?= h($aro->model) ?></td>
                    <td><?= $aro->foreign_key === null ? '' : $this->Number->format($aro->foreign_key) ?></td>
                    <td><?= h($aro->alias) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $aro->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $aro->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $aro->id], ['confirm' => __('Are you sure you want to delete # {0}?', $aro->id)]) ?>
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
