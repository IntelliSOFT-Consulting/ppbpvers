<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\CronTask $cronTask
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Cron Task'), ['action' => 'edit', $cronTask->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Cron Task'), ['action' => 'delete', $cronTask->id], ['confirm' => __('Are you sure you want to delete # {0}?', $cronTask->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Cron Tasks'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Cron Task'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="cronTasks view content">
            <h3><?= h($cronTask->title) ?></h3>
            <table>
                <tr>
                    <th><?= __('Jobtype') ?></th>
                    <td><?= h($cronTask->jobtype) ?></td>
                </tr>
                <tr>
                    <th><?= __('Title') ?></th>
                    <td><?= h($cronTask->title) ?></td>
                </tr>
                <tr>
                    <th><?= __('Name') ?></th>
                    <td><?= h($cronTask->name) ?></td>
                </tr>
                <tr>
                    <th><?= __('Workerkey') ?></th>
                    <td><?= h($cronTask->workerkey) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($cronTask->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Failed') ?></th>
                    <td><?= $this->Number->format($cronTask->failed) ?></td>
                </tr>
                <tr>
                    <th><?= __('Interval') ?></th>
                    <td><?= $this->Number->format($cronTask->interval) ?></td>
                </tr>
                <tr>
                    <th><?= __('Status') ?></th>
                    <td><?= $this->Number->format($cronTask->status) ?></td>
                </tr>
                <tr>
                    <th><?= __('Created') ?></th>
                    <td><?= h($cronTask->created) ?></td>
                </tr>
                <tr>
                    <th><?= __('Notbefore') ?></th>
                    <td><?= h($cronTask->notbefore) ?></td>
                </tr>
                <tr>
                    <th><?= __('Fetched') ?></th>
                    <td><?= h($cronTask->fetched) ?></td>
                </tr>
                <tr>
                    <th><?= __('Completed') ?></th>
                    <td><?= h($cronTask->completed) ?></td>
                </tr>
            </table>
            <div class="text">
                <strong><?= __('Data') ?></strong>
                <blockquote>
                    <?= $this->Text->autoParagraph(h($cronTask->data)); ?>
                </blockquote>
            </div>
            <div class="text">
                <strong><?= __('Failure Message') ?></strong>
                <blockquote>
                    <?= $this->Text->autoParagraph(h($cronTask->failure_message)); ?>
                </blockquote>
            </div>
        </div>
    </div>
</div>
