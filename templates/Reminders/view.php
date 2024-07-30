<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Reminder $reminder
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Reminder'), ['action' => 'edit', $reminder->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Reminder'), ['action' => 'delete', $reminder->id], ['confirm' => __('Are you sure you want to delete # {0}?', $reminder->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Reminders'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Reminder'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="reminders view content">
            <h3><?= h($reminder->id) ?></h3>
            <table>
                <tr>
                    <th><?= __('Model') ?></th>
                    <td><?= h($reminder->model) ?></td>
                </tr>
                <tr>
                    <th><?= __('User') ?></th>
                    <td><?= $reminder->has('user') ? $this->Html->link($reminder->user->name, ['controller' => 'Users', 'action' => 'view', $reminder->user->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Reminder Type') ?></th>
                    <td><?= h($reminder->reminder_type) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($reminder->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Foreign Key') ?></th>
                    <td><?= $reminder->foreign_key === null ? '' : $this->Number->format($reminder->foreign_key) ?></td>
                </tr>
                <tr>
                    <th><?= __('Created') ?></th>
                    <td><?= h($reminder->created) ?></td>
                </tr>
                <tr>
                    <th><?= __('Modified') ?></th>
                    <td><?= h($reminder->modified) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
