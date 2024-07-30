<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\QueuedTask> $queuedTasks
 */
?>
<div class="queuedTasks index content">
    <?= $this->Html->link(__('New Queued Task'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Queued Tasks') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('jobtype') ?></th>
                    <th><?= $this->Paginator->sort('group') ?></th>
                    <th><?= $this->Paginator->sort('reference') ?></th>
                    <th><?= $this->Paginator->sort('created') ?></th>
                    <th><?= $this->Paginator->sort('notbefore') ?></th>
                    <th><?= $this->Paginator->sort('fetched') ?></th>
                    <th><?= $this->Paginator->sort('progress') ?></th>
                    <th><?= $this->Paginator->sort('completed') ?></th>
                    <th><?= $this->Paginator->sort('failed') ?></th>
                    <th><?= $this->Paginator->sort('workerkey') ?></th>
                    <th><?= $this->Paginator->sort('priority') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($queuedTasks as $queuedTask): ?>
                <tr>
                    <td><?= $this->Number->format($queuedTask->id) ?></td>
                    <td><?= h($queuedTask->jobtype) ?></td>
                    <td><?= h($queuedTask->group) ?></td>
                    <td><?= h($queuedTask->reference) ?></td>
                    <td><?= h($queuedTask->created) ?></td>
                    <td><?= h($queuedTask->notbefore) ?></td>
                    <td><?= h($queuedTask->fetched) ?></td>
                    <td><?= $queuedTask->progress === null ? '' : $this->Number->format($queuedTask->progress) ?></td>
                    <td><?= h($queuedTask->completed) ?></td>
                    <td><?= $this->Number->format($queuedTask->failed) ?></td>
                    <td><?= h($queuedTask->workerkey) ?></td>
                    <td><?= $this->Number->format($queuedTask->priority) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $queuedTask->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $queuedTask->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $queuedTask->id], ['confirm' => __('Are you sure you want to delete # {0}?', $queuedTask->id)]) ?>
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
