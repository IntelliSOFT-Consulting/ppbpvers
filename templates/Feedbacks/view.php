<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Feedback $feedback
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Feedback'), ['action' => 'edit', $feedback->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Feedback'), ['action' => 'delete', $feedback->id], ['confirm' => __('Are you sure you want to delete # {0}?', $feedback->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Feedbacks'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Feedback'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="feedbacks view content">
            <h3><?= h($feedback->id) ?></h3>
            <table>
                <tr>
                    <th><?= __('Email') ?></th>
                    <td><?= h($feedback->email) ?></td>
                </tr>
                <tr>
                    <th><?= __('User') ?></th>
                    <td><?= $feedback->has('user') ? $this->Html->link($feedback->user->name, ['controller' => 'Users', 'action' => 'view', $feedback->user->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Subject') ?></th>
                    <td><?= h($feedback->subject) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($feedback->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Foreign Key') ?></th>
                    <td><?= $feedback->foreign_key === null ? '' : $this->Number->format($feedback->foreign_key) ?></td>
                </tr>
                <tr>
                    <th><?= __('Created') ?></th>
                    <td><?= h($feedback->created) ?></td>
                </tr>
                <tr>
                    <th><?= __('Modified') ?></th>
                    <td><?= h($feedback->modified) ?></td>
                </tr>
            </table>
            <div class="text">
                <strong><?= __('Feedback') ?></strong>
                <blockquote>
                    <?= $this->Text->autoParagraph(h($feedback->feedback)); ?>
                </blockquote>
            </div>
        </div>
    </div>
</div>
