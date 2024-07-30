<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Pint $pint
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Pint'), ['action' => 'edit', $pint->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Pint'), ['action' => 'delete', $pint->id], ['confirm' => __('Are you sure you want to delete # {0}?', $pint->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Pints'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Pint'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="pints view content">
            <h3><?= h($pint->id) ?></h3>
            <table>
                <tr>
                    <th><?= __('Transfusion') ?></th>
                    <td><?= $pint->has('transfusion') ? $this->Html->link($pint->transfusion->id, ['controller' => 'Transfusions', 'action' => 'view', $pint->transfusion->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Component Type') ?></th>
                    <td><?= h($pint->component_type) ?></td>
                </tr>
                <tr>
                    <th><?= __('Pint No') ?></th>
                    <td><?= h($pint->pint_no) ?></td>
                </tr>
                <tr>
                    <th><?= __('Volume Transfused') ?></th>
                    <td><?= h($pint->volume_transfused) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($pint->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Expiry Date') ?></th>
                    <td><?= h($pint->expiry_date) ?></td>
                </tr>
                <tr>
                    <th><?= __('Created') ?></th>
                    <td><?= h($pint->created) ?></td>
                </tr>
                <tr>
                    <th><?= __('Modified') ?></th>
                    <td><?= h($pint->modified) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
