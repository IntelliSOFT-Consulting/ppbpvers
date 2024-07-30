<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\CronTask> $cronTasks
 */
?>
<div class="cronTasks index content">
    <?= $this->Html->link(__('New Cron Task'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Cron Tasks') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('jobtype') ?></th>
                    <th><?= $this->Paginator->sort('title') ?></th>
                    <th><?= $this->Paginator->sort('name') ?></th>
                    <th><?= $this->Paginator->sort('created') ?></th>
                    <th><?= $this->Paginator->sort('notbefore') ?></th>
                    <th><?= $this->Paginator->sort('fetched') ?></th>
                    <th><?= $this->Paginator->sort('completed') ?></th>
                    <th><?= $this->Paginator->sort('failed') ?></th>
                    <th><?= $this->Paginator->sort('workerkey') ?></th>
                    <th><?= $this->Paginator->sort('interval') ?></th>
                    <th><?= $this->Paginator->sort('status') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($cronTasks as $cronTask): ?>
                <tr>
                    <td><?= $this->Number->format($cronTask->id) ?></td>
                    <td><?= h($cronTask->jobtype) ?></td>
                    <td><?= h($cronTask->title) ?></td>
                    <td><?= h($cronTask->name) ?></td>
                    <td><?= h($cronTask->created) ?></td>
                    <td><?= h($cronTask->notbefore) ?></td>
                    <td><?= h($cronTask->fetched) ?></td>
                    <td><?= h($cronTask->completed) ?></td>
                    <td><?= $this->Number->format($cronTask->failed) ?></td>
                    <td><?= h($cronTask->workerkey) ?></td>
                    <td><?= $this->Number->format($cronTask->interval) ?></td>
                    <td><?= $this->Number->format($cronTask->status) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $cronTask->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $cronTask->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $cronTask->id], ['confirm' => __('Are you sure you want to delete # {0}?', $cronTask->id)]) ?>
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
