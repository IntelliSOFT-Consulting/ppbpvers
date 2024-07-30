<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\SadrListOfMedicine $sadrListOfMedicine
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Sadr List Of Medicine'), ['action' => 'edit', $sadrListOfMedicine->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Sadr List Of Medicine'), ['action' => 'delete', $sadrListOfMedicine->id], ['confirm' => __('Are you sure you want to delete # {0}?', $sadrListOfMedicine->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Sadr List Of Medicines'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Sadr List Of Medicine'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="sadrListOfMedicines view content">
            <h3><?= h($sadrListOfMedicine->id) ?></h3>
            <table>
                <tr>
                    <th><?= __('Sadr') ?></th>
                    <td><?= $sadrListOfMedicine->has('sadr') ? $this->Html->link($sadrListOfMedicine->sadr->id, ['controller' => 'Sadrs', 'action' => 'view', $sadrListOfMedicine->sadr->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Sadr Followup') ?></th>
                    <td><?= $sadrListOfMedicine->has('sadr_followup') ? $this->Html->link($sadrListOfMedicine->sadr_followup->id, ['controller' => 'SadrFollowups', 'action' => 'view', $sadrListOfMedicine->sadr_followup->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Dose') ?></th>
                    <td><?= $sadrListOfMedicine->has('dose') ? $this->Html->link($sadrListOfMedicine->dose->name, ['controller' => 'Doses', 'action' => 'view', $sadrListOfMedicine->dose->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Route') ?></th>
                    <td><?= $sadrListOfMedicine->has('route') ? $this->Html->link($sadrListOfMedicine->route->name, ['controller' => 'Routes', 'action' => 'view', $sadrListOfMedicine->route->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Frequency') ?></th>
                    <td><?= $sadrListOfMedicine->has('frequency') ? $this->Html->link($sadrListOfMedicine->frequency->name, ['controller' => 'Frequencies', 'action' => 'view', $sadrListOfMedicine->frequency->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Frequency Other') ?></th>
                    <td><?= h($sadrListOfMedicine->frequency_other) ?></td>
                </tr>
                <tr>
                    <th><?= __('Drug Name') ?></th>
                    <td><?= h($sadrListOfMedicine->drug_name) ?></td>
                </tr>
                <tr>
                    <th><?= __('Brand Name') ?></th>
                    <td><?= h($sadrListOfMedicine->brand_name) ?></td>
                </tr>
                <tr>
                    <th><?= __('Batch No') ?></th>
                    <td><?= h($sadrListOfMedicine->batch_no) ?></td>
                </tr>
                <tr>
                    <th><?= __('Manufacturer') ?></th>
                    <td><?= h($sadrListOfMedicine->manufacturer) ?></td>
                </tr>
                <tr>
                    <th><?= __('Dose') ?></th>
                    <td><?= h($sadrListOfMedicine->dose) ?></td>
                </tr>
                <tr>
                    <th><?= __('Indication') ?></th>
                    <td><?= h($sadrListOfMedicine->indication) ?></td>
                </tr>
                <tr>
                    <th><?= __('Suspected Drug') ?></th>
                    <td><?= h($sadrListOfMedicine->suspected_drug) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($sadrListOfMedicine->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Start Date') ?></th>
                    <td><?= h($sadrListOfMedicine->start_date) ?></td>
                </tr>
                <tr>
                    <th><?= __('Stop Date') ?></th>
                    <td><?= h($sadrListOfMedicine->stop_date) ?></td>
                </tr>
                <tr>
                    <th><?= __('Created') ?></th>
                    <td><?= h($sadrListOfMedicine->created) ?></td>
                </tr>
                <tr>
                    <th><?= __('Modified') ?></th>
                    <td><?= h($sadrListOfMedicine->modified) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
