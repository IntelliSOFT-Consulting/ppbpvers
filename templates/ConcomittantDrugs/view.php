<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\ConcomittantDrug $concomittantDrug
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Concomittant Drug'), ['action' => 'edit', $concomittantDrug->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Concomittant Drug'), ['action' => 'delete', $concomittantDrug->id], ['confirm' => __('Are you sure you want to delete # {0}?', $concomittantDrug->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Concomittant Drugs'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Concomittant Drug'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="concomittantDrugs view content">
            <h3><?= h($concomittantDrug->id) ?></h3>
            <table>
                <tr>
                    <th><?= __('Sae') ?></th>
                    <td><?= $concomittantDrug->has('sae') ? $this->Html->link($concomittantDrug->sae->email_address, ['controller' => 'Saes', 'action' => 'view', $concomittantDrug->sae->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Generic Name') ?></th>
                    <td><?= h($concomittantDrug->generic_name) ?></td>
                </tr>
                <tr>
                    <th><?= __('Dose') ?></th>
                    <td><?= h($concomittantDrug->dose) ?></td>
                </tr>
                <tr>
                    <th><?= __('Route') ?></th>
                    <td><?= $concomittantDrug->has('route') ? $this->Html->link($concomittantDrug->route->name, ['controller' => 'Routes', 'action' => 'view', $concomittantDrug->route->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Indication') ?></th>
                    <td><?= h($concomittantDrug->indication) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($concomittantDrug->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Date From') ?></th>
                    <td><?= h($concomittantDrug->date_from) ?></td>
                </tr>
                <tr>
                    <th><?= __('Date To') ?></th>
                    <td><?= h($concomittantDrug->date_to) ?></td>
                </tr>
                <tr>
                    <th><?= __('Deleted Date') ?></th>
                    <td><?= h($concomittantDrug->deleted_date) ?></td>
                </tr>
                <tr>
                    <th><?= __('Created') ?></th>
                    <td><?= h($concomittantDrug->created) ?></td>
                </tr>
                <tr>
                    <th><?= __('Modified') ?></th>
                    <td><?= h($concomittantDrug->modified) ?></td>
                </tr>
                <tr>
                    <th><?= __('Deleted') ?></th>
                    <td><?= $concomittantDrug->deleted ? __('Yes') : __('No'); ?></td>
                </tr>
            </table>
            <div class="text">
                <strong><?= __('Description') ?></strong>
                <blockquote>
                    <?= $this->Text->autoParagraph(h($concomittantDrug->description)); ?>
                </blockquote>
            </div>
        </div>
    </div>
</div>
