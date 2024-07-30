<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\Pocket> $pockets
 */
?>
<div class="pockets index content">
    <?= $this->Html->link(__('New Pocket'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Pockets') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('name') ?></th>
                    <th><?= $this->Paginator->sort('required') ?></th>
                    <th><?= $this->Paginator->sort('item_number') ?></th>
                    <th><?= $this->Paginator->sort('type') ?></th>
                    <th><?= $this->Paginator->sort('deleted') ?></th>
                    <th><?= $this->Paginator->sort('deleted_date') ?></th>
                    <th><?= $this->Paginator->sort('created') ?></th>
                    <th><?= $this->Paginator->sort('modified') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($pockets as $pocket): ?>
                <tr>
                    <td><?= $this->Number->format($pocket->id) ?></td>
                    <td><?= h($pocket->name) ?></td>
                    <td><?= h($pocket->required) ?></td>
                    <td><?= $pocket->item_number === null ? '' : $this->Number->format($pocket->item_number) ?></td>
                    <td><?= h($pocket->type) ?></td>
                    <td><?= h($pocket->deleted) ?></td>
                    <td><?= h($pocket->deleted_date) ?></td>
                    <td><?= h($pocket->created) ?></td>
                    <td><?= h($pocket->modified) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $pocket->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $pocket->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $pocket->id], ['confirm' => __('Are you sure you want to delete # {0}?', $pocket->id)]) ?>
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
