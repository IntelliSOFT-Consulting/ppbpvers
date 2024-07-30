<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\AefiDescription $aefiDescription
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Aefi Description'), ['action' => 'edit', $aefiDescription->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Aefi Description'), ['action' => 'delete', $aefiDescription->id], ['confirm' => __('Are you sure you want to delete # {0}?', $aefiDescription->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Aefi Descriptions'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Aefi Description'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="aefiDescriptions view content">
            <h3><?= h($aefiDescription->id) ?></h3>
            <table>
                <tr>
                    <th><?= __('Aefi') ?></th>
                    <td><?= $aefiDescription->has('aefi') ? $this->Html->link($aefiDescription->aefi->id, ['controller' => 'Aefis', 'action' => 'view', $aefiDescription->aefi->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($aefiDescription->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Created') ?></th>
                    <td><?= h($aefiDescription->created) ?></td>
                </tr>
                <tr>
                    <th><?= __('Modified') ?></th>
                    <td><?= h($aefiDescription->modified) ?></td>
                </tr>
            </table>
            <div class="text">
                <strong><?= __('Description') ?></strong>
                <blockquote>
                    <?= $this->Text->autoParagraph(h($aefiDescription->description)); ?>
                </blockquote>
            </div>
        </div>
    </div>
</div>
