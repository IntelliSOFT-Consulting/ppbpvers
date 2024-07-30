<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Drug $drug
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Drug'), ['action' => 'edit', $drug->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Drug'), ['action' => 'delete', $drug->id], ['confirm' => __('Are you sure you want to delete # {0}?', $drug->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Drugs'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Drug'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="drugs view content">
            <h3><?= h($drug->id) ?></h3>
            <table>
                <tr>
                    <th><?= __('Brand Name') ?></th>
                    <td><?= h($drug->brand_name) ?></td>
                </tr>
                <tr>
                    <th><?= __('Inn Name') ?></th>
                    <td><?= h($drug->inn_name) ?></td>
                </tr>
                <tr>
                    <th><?= __('Manufacturer') ?></th>
                    <td><?= h($drug->manufacturer) ?></td>
                </tr>
                <tr>
                    <th><?= __('Local Trade Rep') ?></th>
                    <td><?= h($drug->local_trade_rep) ?></td>
                </tr>
                <tr>
                    <th><?= __('Batch Number') ?></th>
                    <td><?= h($drug->batch_number) ?></td>
                </tr>
                <tr>
                    <th><?= __('Registration Status') ?></th>
                    <td><?= h($drug->registration_status) ?></td>
                </tr>
                <tr>
                    <th><?= __('Retention Status') ?></th>
                    <td><?= h($drug->retention_status) ?></td>
                </tr>
                <tr>
                    <th><?= __('Donation') ?></th>
                    <td><?= h($drug->donation) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($drug->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Created') ?></th>
                    <td><?= h($drug->created) ?></td>
                </tr>
                <tr>
                    <th><?= __('Modified') ?></th>
                    <td><?= h($drug->modified) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
