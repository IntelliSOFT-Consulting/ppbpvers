<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\SadrDescription $sadrDescription
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Sadr Description'), ['action' => 'edit', $sadrDescription->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Sadr Description'), ['action' => 'delete', $sadrDescription->id], ['confirm' => __('Are you sure you want to delete # {0}?', $sadrDescription->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Sadr Descriptions'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Sadr Description'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="sadrDescriptions view content">
            <h3><?= h($sadrDescription->id) ?></h3>
            <table>
                <tr>
                    <th><?= __('Sadr') ?></th>
                    <td><?= $sadrDescription->has('sadr') ? $this->Html->link($sadrDescription->sadr->id, ['controller' => 'Sadrs', 'action' => 'view', $sadrDescription->sadr->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($sadrDescription->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Created') ?></th>
                    <td><?= h($sadrDescription->created) ?></td>
                </tr>
                <tr>
                    <th><?= __('Modified') ?></th>
                    <td><?= h($sadrDescription->modified) ?></td>
                </tr>
            </table>
            <div class="text">
                <strong><?= __('Description') ?></strong>
                <blockquote>
                    <?= $this->Text->autoParagraph(h($sadrDescription->description)); ?>
                </blockquote>
            </div>
        </div>
    </div>
</div>
