<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\SadrListOfDrug $sadrListOfDrug
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Sadr List Of Drug'), ['action' => 'edit', $sadrListOfDrug->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Sadr List Of Drug'), ['action' => 'delete', $sadrListOfDrug->id], ['confirm' => __('Are you sure you want to delete # {0}?', $sadrListOfDrug->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Sadr List Of Drugs'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Sadr List Of Drug'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="sadrListOfDrugs view content">
            <h3><?= h($sadrListOfDrug->id) ?></h3>
            <table>
                <tr>
                    <th><?= __('Sadr') ?></th>
                    <td><?= $sadrListOfDrug->has('sadr') ? $this->Html->link($sadrListOfDrug->sadr->id, ['controller' => 'Sadrs', 'action' => 'view', $sadrListOfDrug->sadr->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Sadr Followup') ?></th>
                    <td><?= $sadrListOfDrug->has('sadr_followup') ? $this->Html->link($sadrListOfDrug->sadr_followup->id, ['controller' => 'SadrFollowups', 'action' => 'view', $sadrListOfDrug->sadr_followup->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Dose') ?></th>
                    <td><?= $sadrListOfDrug->has('dose') ? $this->Html->link($sadrListOfDrug->dose->name, ['controller' => 'Doses', 'action' => 'view', $sadrListOfDrug->dose->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Route') ?></th>
                    <td><?= $sadrListOfDrug->has('route') ? $this->Html->link($sadrListOfDrug->route->name, ['controller' => 'Routes', 'action' => 'view', $sadrListOfDrug->route->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Frequency') ?></th>
                    <td><?= $sadrListOfDrug->has('frequency') ? $this->Html->link($sadrListOfDrug->frequency->name, ['controller' => 'Frequencies', 'action' => 'view', $sadrListOfDrug->frequency->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Frequency Id Other') ?></th>
                    <td><?= h($sadrListOfDrug->frequency_id_other) ?></td>
                </tr>
                <tr>
                    <th><?= __('Drug Name') ?></th>
                    <td><?= h($sadrListOfDrug->drug_name) ?></td>
                </tr>
                <tr>
                    <th><?= __('Brand Name') ?></th>
                    <td><?= h($sadrListOfDrug->brand_name) ?></td>
                </tr>
                <tr>
                    <th><?= __('Batch No') ?></th>
                    <td><?= h($sadrListOfDrug->batch_no) ?></td>
                </tr>
                <tr>
                    <th><?= __('Manufacturer') ?></th>
                    <td><?= h($sadrListOfDrug->manufacturer) ?></td>
                </tr>
                <tr>
                    <th><?= __('Dose') ?></th>
                    <td><?= h($sadrListOfDrug->dose) ?></td>
                </tr>
                <tr>
                    <th><?= __('Indication') ?></th>
                    <td><?= h($sadrListOfDrug->indication) ?></td>
                </tr>
                <tr>
                    <th><?= __('Suspected Drug') ?></th>
                    <td><?= h($sadrListOfDrug->suspected_drug) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($sadrListOfDrug->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Start Date') ?></th>
                    <td><?= h($sadrListOfDrug->start_date) ?></td>
                </tr>
                <tr>
                    <th><?= __('Stop Date') ?></th>
                    <td><?= h($sadrListOfDrug->stop_date) ?></td>
                </tr>
                <tr>
                    <th><?= __('Created') ?></th>
                    <td><?= h($sadrListOfDrug->created) ?></td>
                </tr>
                <tr>
                    <th><?= __('Modified') ?></th>
                    <td><?= h($sadrListOfDrug->modified) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
