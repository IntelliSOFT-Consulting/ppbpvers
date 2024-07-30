<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\Notification> $notifications
 */
?>
<div class="notifications index content">
    <?= $this->Html->link(__('New Notification'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Notifications') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('user_id') ?></th>
                    <th><?= $this->Paginator->sort('type') ?></th>
                    <th><?= $this->Paginator->sort('model') ?></th>
                    <th><?= $this->Paginator->sort('foreign_key') ?></th>
                    <th><?= $this->Paginator->sort('title') ?></th>
                    <th><?= $this->Paginator->sort('url') ?></th>
                    <th><?= $this->Paginator->sort('deleted') ?></th>
                    <th><?= $this->Paginator->sort('deleted_date') ?></th>
                    <th><?= $this->Paginator->sort('created') ?></th>
                    <th><?= $this->Paginator->sort('modified') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($notifications as $notification): ?>
                <tr>
                    <td><?= $this->Number->format($notification->id) ?></td>
                    <td><?= $notification->has('user') ? $this->Html->link($notification->user->name, ['controller' => 'Users', 'action' => 'view', $notification->user->id]) : '' ?></td>
                    <td><?= h($notification->type) ?></td>
                    <td><?= h($notification->model) ?></td>
                    <td><?= $notification->foreign_key === null ? '' : $this->Number->format($notification->foreign_key) ?></td>
                    <td><?= h($notification->title) ?></td>
                    <td><?= h($notification->url) ?></td>
                    <td><?= h($notification->deleted) ?></td>
                    <td><?= h($notification->deleted_date) ?></td>
                    <td><?= h($notification->created) ?></td>
                    <td><?= h($notification->modified) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $notification->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $notification->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $notification->id], ['confirm' => __('Are you sure you want to delete # {0}?', $notification->id)]) ?>
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
