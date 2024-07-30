<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\Feedback> $feedbacks
 */
?>
<div class="feedbacks index content">
    <?= $this->Html->link(__('New Feedback'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Feedbacks') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('email') ?></th>
                    <th><?= $this->Paginator->sort('user_id') ?></th>
                    <th><?= $this->Paginator->sort('foreign_key') ?></th>
                    <th><?= $this->Paginator->sort('subject') ?></th>
                    <th><?= $this->Paginator->sort('created') ?></th>
                    <th><?= $this->Paginator->sort('modified') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($feedbacks as $feedback): ?>
                <tr>
                    <td><?= $this->Number->format($feedback->id) ?></td>
                    <td><?= h($feedback->email) ?></td>
                    <td><?= $feedback->has('user') ? $this->Html->link($feedback->user->name, ['controller' => 'Users', 'action' => 'view', $feedback->user->id]) : '' ?></td>
                    <td><?= $feedback->foreign_key === null ? '' : $this->Number->format($feedback->foreign_key) ?></td>
                    <td><?= h($feedback->subject) ?></td>
                    <td><?= h($feedback->created) ?></td>
                    <td><?= h($feedback->modified) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $feedback->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $feedback->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $feedback->id], ['confirm' => __('Are you sure you want to delete # {0}?', $feedback->id)]) ?>
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
