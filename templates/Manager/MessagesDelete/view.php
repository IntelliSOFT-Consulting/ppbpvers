<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\MessagesDelete $messagesDelete
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Messages Delete'), ['action' => 'edit', $messagesDelete->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Messages Delete'), ['action' => 'delete', $messagesDelete->id], ['confirm' => __('Are you sure you want to delete # {0}?', $messagesDelete->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Messages Delete'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Messages Delete'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="messagesDelete view content">
            <h3><?= h($messagesDelete->name) ?></h3>
            <table>
                <tr>
                    <th><?= __('Name') ?></th>
                    <td><?= h($messagesDelete->name) ?></td>
                </tr>
                <tr>
                    <th><?= __('Subject') ?></th>
                    <td><?= h($messagesDelete->subject) ?></td>
                </tr>
                <tr>
                    <th><?= __('Type') ?></th>
                    <td><?= h($messagesDelete->type) ?></td>
                </tr>
                <tr>
                    <th><?= __('Style') ?></th>
                    <td><?= h($messagesDelete->style) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($messagesDelete->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Created') ?></th>
                    <td><?= h($messagesDelete->created) ?></td>
                </tr>
                <tr>
                    <th><?= __('Modified') ?></th>
                    <td><?= h($messagesDelete->modified) ?></td>
                </tr>
            </table>
            <div class="text">
                <strong><?= __('Content') ?></strong>
                <blockquote>
                    <?= $this->Text->autoParagraph(h($messagesDelete->content)); ?>
                </blockquote>
            </div>
            <div class="text">
                <strong><?= __('Description') ?></strong>
                <blockquote>
                    <?= $this->Text->autoParagraph(h($messagesDelete->description)); ?>
                </blockquote>
            </div>
        </div>
    </div>
</div>
