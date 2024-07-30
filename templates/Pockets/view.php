<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Pocket $pocket
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Pocket'), ['action' => 'edit', $pocket->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Pocket'), ['action' => 'delete', $pocket->id], ['confirm' => __('Are you sure you want to delete # {0}?', $pocket->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Pockets'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Pocket'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="pockets view content">
            <h3><?= h($pocket->name) ?></h3>
            <table>
                <tr>
                    <th><?= __('Name') ?></th>
                    <td><?= h($pocket->name) ?></td>
                </tr>
                <tr>
                    <th><?= __('Type') ?></th>
                    <td><?= h($pocket->type) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($pocket->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Item Number') ?></th>
                    <td><?= $pocket->item_number === null ? '' : $this->Number->format($pocket->item_number) ?></td>
                </tr>
                <tr>
                    <th><?= __('Deleted Date') ?></th>
                    <td><?= h($pocket->deleted_date) ?></td>
                </tr>
                <tr>
                    <th><?= __('Created') ?></th>
                    <td><?= h($pocket->created) ?></td>
                </tr>
                <tr>
                    <th><?= __('Modified') ?></th>
                    <td><?= h($pocket->modified) ?></td>
                </tr>
                <tr>
                    <th><?= __('Required') ?></th>
                    <td><?= $pocket->required ? __('Yes') : __('No'); ?></td>
                </tr>
                <tr>
                    <th><?= __('Deleted') ?></th>
                    <td><?= $pocket->deleted ? __('Yes') : __('No'); ?></td>
                </tr>
            </table>
            <div class="text">
                <strong><?= __('Content') ?></strong>
                <blockquote>
                    <?= $this->Text->autoParagraph(h($pocket->content)); ?>
                </blockquote>
            </div>
        </div>
    </div>
</div>
