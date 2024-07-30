<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\QueuedTask $queuedTask
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Queued Task'), ['action' => 'edit', $queuedTask->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Queued Task'), ['action' => 'delete', $queuedTask->id], ['confirm' => __('Are you sure you want to delete # {0}?', $queuedTask->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Queued Tasks'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Queued Task'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="queuedTasks view content">
            <h3><?= h($queuedTask->jobtype) ?></h3>
            <table>
                <tr>
                    <th><?= __('Jobtype') ?></th>
                    <td><?= h($queuedTask->jobtype) ?></td>
                </tr>
                <tr>
                    <th><?= __('Group') ?></th>
                    <td><?= h($queuedTask->group) ?></td>
                </tr>
                <tr>
                    <th><?= __('Reference') ?></th>
                    <td><?= h($queuedTask->reference) ?></td>
                </tr>
                <tr>
                    <th><?= __('Workerkey') ?></th>
                    <td><?= h($queuedTask->workerkey) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($queuedTask->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Progress') ?></th>
                    <td><?= $queuedTask->progress === null ? '' : $this->Number->format($queuedTask->progress) ?></td>
                </tr>
                <tr>
                    <th><?= __('Failed') ?></th>
                    <td><?= $this->Number->format($queuedTask->failed) ?></td>
                </tr>
                <tr>
                    <th><?= __('Priority') ?></th>
                    <td><?= $this->Number->format($queuedTask->priority) ?></td>
                </tr>
                <tr>
                    <th><?= __('Created') ?></th>
                    <td><?= h($queuedTask->created) ?></td>
                </tr>
                <tr>
                    <th><?= __('Notbefore') ?></th>
                    <td><?= h($queuedTask->notbefore) ?></td>
                </tr>
                <tr>
                    <th><?= __('Fetched') ?></th>
                    <td><?= h($queuedTask->fetched) ?></td>
                </tr>
                <tr>
                    <th><?= __('Completed') ?></th>
                    <td><?= h($queuedTask->completed) ?></td>
                </tr>
            </table>
            <div class="text">
                <strong><?= __('Data') ?></strong>
                <blockquote>
                    <?= $this->Text->autoParagraph(h($queuedTask->data)); ?>
                </blockquote>
            </div>
            <div class="text">
                <strong><?= __('Failure Message') ?></strong>
                <blockquote>
                    <?= $this->Text->autoParagraph(h($queuedTask->failure_message)); ?>
                </blockquote>
            </div>
        </div>
    </div>
</div>
