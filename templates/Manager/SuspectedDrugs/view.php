<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\SuspectedDrug $suspectedDrug
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Suspected Drug'), ['action' => 'edit', $suspectedDrug->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Suspected Drug'), ['action' => 'delete', $suspectedDrug->id], ['confirm' => __('Are you sure you want to delete # {0}?', $suspectedDrug->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Suspected Drugs'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Suspected Drug'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="suspectedDrugs view content">
            <h3><?= h($suspectedDrug->id) ?></h3>
            <table>
                <tr>
                    <th><?= __('Sae') ?></th>
                    <td><?= $suspectedDrug->has('sae') ? $this->Html->link($suspectedDrug->sae->email_address, ['controller' => 'Saes', 'action' => 'view', $suspectedDrug->sae->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Generic Name') ?></th>
                    <td><?= h($suspectedDrug->generic_name) ?></td>
                </tr>
                <tr>
                    <th><?= __('Dose') ?></th>
                    <td><?= h($suspectedDrug->dose) ?></td>
                </tr>
                <tr>
                    <th><?= __('Route') ?></th>
                    <td><?= $suspectedDrug->has('route') ? $this->Html->link($suspectedDrug->route->name, ['controller' => 'Routes', 'action' => 'view', $suspectedDrug->route->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Indication') ?></th>
                    <td><?= h($suspectedDrug->indication) ?></td>
                </tr>
                <tr>
                    <th><?= __('Therapy Duration') ?></th>
                    <td><?= h($suspectedDrug->therapy_duration) ?></td>
                </tr>
                <tr>
                    <th><?= __('Reaction Abate') ?></th>
                    <td><?= h($suspectedDrug->reaction_abate) ?></td>
                </tr>
                <tr>
                    <th><?= __('Reaction Reappear') ?></th>
                    <td><?= h($suspectedDrug->reaction_reappear) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($suspectedDrug->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Date From') ?></th>
                    <td><?= h($suspectedDrug->date_from) ?></td>
                </tr>
                <tr>
                    <th><?= __('Date To') ?></th>
                    <td><?= h($suspectedDrug->date_to) ?></td>
                </tr>
                <tr>
                    <th><?= __('Deleted Date') ?></th>
                    <td><?= h($suspectedDrug->deleted_date) ?></td>
                </tr>
                <tr>
                    <th><?= __('Created') ?></th>
                    <td><?= h($suspectedDrug->created) ?></td>
                </tr>
                <tr>
                    <th><?= __('Modified') ?></th>
                    <td><?= h($suspectedDrug->modified) ?></td>
                </tr>
                <tr>
                    <th><?= __('Deleted') ?></th>
                    <td><?= $suspectedDrug->deleted ? __('Yes') : __('No'); ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
