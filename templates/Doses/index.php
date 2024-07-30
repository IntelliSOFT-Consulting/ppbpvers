<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\Dose> $doses
 */
?>
<div class="doses index content">
    <?= $this->Html->link(__('New Dose'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Doses') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('value') ?></th>
                    <th><?= $this->Paginator->sort('icsr_code') ?></th>
                    <th><?= $this->Paginator->sort('name') ?></th>
                    <th><?= $this->Paginator->sort('created') ?></th>
                    <th><?= $this->Paginator->sort('modified') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($doses as $dose): ?>
                <tr>
                    <td><?= $this->Number->format($dose->id) ?></td>
                    <td><?= h($dose->value) ?></td>
                    <td><?= h($dose->icsr_code) ?></td>
                    <td><?= h($dose->name) ?></td>
                    <td><?= h($dose->created) ?></td>
                    <td><?= h($dose->modified) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $dose->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $dose->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $dose->id], ['confirm' => __('Are you sure you want to delete # {0}?', $dose->id)]) ?>
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
