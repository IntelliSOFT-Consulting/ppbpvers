<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\SadrReaction $sadrReaction
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Sadr Reaction'), ['action' => 'edit', $sadrReaction->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Sadr Reaction'), ['action' => 'delete', $sadrReaction->id], ['confirm' => __('Are you sure you want to delete # {0}?', $sadrReaction->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Sadr Reaction'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Sadr Reaction'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="sadrReaction view content">
            <h3><?= h($sadrReaction->id) ?></h3>
            <table>
                <tr>
                    <th><?= __('Sadr') ?></th>
                    <td><?= $sadrReaction->has('sadr') ? $this->Html->link($sadrReaction->sadr->id, ['controller' => 'Sadrs', 'action' => 'view', $sadrReaction->sadr->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($sadrReaction->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Created') ?></th>
                    <td><?= h($sadrReaction->created) ?></td>
                </tr>
                <tr>
                    <th><?= __('Modified') ?></th>
                    <td><?= h($sadrReaction->modified) ?></td>
                </tr>
            </table>
            <div class="text">
                <strong><?= __('Reaction') ?></strong>
                <blockquote>
                    <?= $this->Text->autoParagraph(h($sadrReaction->reaction)); ?>
                </blockquote>
            </div>
        </div>
    </div>
</div>
