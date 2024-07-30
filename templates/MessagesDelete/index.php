<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\MessagesDelete> $messagesDelete
 */
?>
<div class="messagesDelete index content">
    <?= $this->Html->link(__('New Messages Delete'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Messages Delete') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('name') ?></th>
                    <th><?= $this->Paginator->sort('subject') ?></th>
                    <th><?= $this->Paginator->sort('type') ?></th>
                    <th><?= $this->Paginator->sort('style') ?></th>
                    <th><?= $this->Paginator->sort('created') ?></th>
                    <th><?= $this->Paginator->sort('modified') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($messagesDelete as $messagesDelete): ?>
                <tr>
                    <td><?= $this->Number->format($messagesDelete->id) ?></td>
                    <td><?= h($messagesDelete->name) ?></td>
                    <td><?= h($messagesDelete->subject) ?></td>
                    <td><?= h($messagesDelete->type) ?></td>
                    <td><?= h($messagesDelete->style) ?></td>
                    <td><?= h($messagesDelete->created) ?></td>
                    <td><?= h($messagesDelete->modified) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $messagesDelete->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $messagesDelete->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $messagesDelete->id], ['confirm' => __('Are you sure you want to delete # {0}?', $messagesDelete->id)]) ?>
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
