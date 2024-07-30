<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Khi $khi
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Khi'), ['action' => 'edit', $khi->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Khi'), ['action' => 'delete', $khi->id], ['confirm' => __('Are you sure you want to delete # {0}?', $khi->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Khis'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Khi'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="khis view content">
            <h3><?= h($khi->id) ?></h3>
            <table>
                <tr>
                    <th><?= __('ElementId') ?></th>
                    <td><?= h($khi->elementId) ?></td>
                </tr>
                <tr>
                    <th><?= __('ElementName') ?></th>
                    <td><?= h($khi->elementName) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($khi->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Deleted') ?></th>
                    <td><?= h($khi->deleted) ?></td>
                </tr>
                <tr>
                    <th><?= __('Created') ?></th>
                    <td><?= h($khi->created) ?></td>
                </tr>
                <tr>
                    <th><?= __('Modified') ?></th>
                    <td><?= h($khi->modified) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
