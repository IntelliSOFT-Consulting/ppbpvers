<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\AefiReaction $aefiReaction
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Aefi Reaction'), ['action' => 'edit', $aefiReaction->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Aefi Reaction'), ['action' => 'delete', $aefiReaction->id], ['confirm' => __('Are you sure you want to delete # {0}?', $aefiReaction->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Aefi Reactions'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Aefi Reaction'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="aefiReactions view content">
            <h3><?= h($aefiReaction->id) ?></h3>
            <table>
                <tr>
                    <th><?= __('Aefi') ?></th>
                    <td><?= $aefiReaction->has('aefi') ? $this->Html->link($aefiReaction->aefi->id, ['controller' => 'Aefis', 'action' => 'view', $aefiReaction->aefi->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Reaction Name') ?></th>
                    <td><?= h($aefiReaction->reaction_name) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($aefiReaction->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Created') ?></th>
                    <td><?= h($aefiReaction->created) ?></td>
                </tr>
                <tr>
                    <th><?= __('Modified') ?></th>
                    <td><?= h($aefiReaction->modified) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
