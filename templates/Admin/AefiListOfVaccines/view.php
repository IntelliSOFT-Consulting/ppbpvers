<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\AefiListOfVaccine $aefiListOfVaccine
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Aefi List Of Vaccine'), ['action' => 'edit', $aefiListOfVaccine->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Aefi List Of Vaccine'), ['action' => 'delete', $aefiListOfVaccine->id], ['confirm' => __('Are you sure you want to delete # {0}?', $aefiListOfVaccine->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Aefi List Of Vaccines'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Aefi List Of Vaccine'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="aefiListOfVaccines view content">
            <h3><?= h($aefiListOfVaccine->id) ?></h3>
            <table>
                <tr>
                    <th><?= __('Aefi') ?></th>
                    <td><?= $aefiListOfVaccine->has('aefi') ? $this->Html->link($aefiListOfVaccine->aefi->id, ['controller' => 'Aefis', 'action' => 'view', $aefiListOfVaccine->aefi->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Saefi') ?></th>
                    <td><?= $aefiListOfVaccine->has('saefi') ? $this->Html->link($aefiListOfVaccine->saefi->id, ['controller' => 'Saefis', 'action' => 'view', $aefiListOfVaccine->saefi->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Vaccine') ?></th>
                    <td><?= $aefiListOfVaccine->has('vaccine') ? $this->Html->link($aefiListOfVaccine->vaccine->id, ['controller' => 'Vaccines', 'action' => 'view', $aefiListOfVaccine->vaccine->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Vaccine Name') ?></th>
                    <td><?= h($aefiListOfVaccine->vaccine_name) ?></td>
                </tr>
                <tr>
                    <th><?= __('Vaccination Time') ?></th>
                    <td><?= h($aefiListOfVaccine->vaccination_time) ?></td>
                </tr>
                <tr>
                    <th><?= __('Vaccine Manufacturer') ?></th>
                    <td><?= h($aefiListOfVaccine->vaccine_manufacturer) ?></td>
                </tr>
                <tr>
                    <th><?= __('Vaccination Route') ?></th>
                    <td><?= h($aefiListOfVaccine->vaccination_route) ?></td>
                </tr>
                <tr>
                    <th><?= __('Vaccination Site') ?></th>
                    <td><?= h($aefiListOfVaccine->vaccination_site) ?></td>
                </tr>
                <tr>
                    <th><?= __('Dosage') ?></th>
                    <td><?= h($aefiListOfVaccine->dosage) ?></td>
                </tr>
                <tr>
                    <th><?= __('Icsr Code') ?></th>
                    <td><?= h($aefiListOfVaccine->icsr_code) ?></td>
                </tr>
                <tr>
                    <th><?= __('Batch Number') ?></th>
                    <td><?= h($aefiListOfVaccine->batch_number) ?></td>
                </tr>
                <tr>
                    <th><?= __('Diluent Batch Number') ?></th>
                    <td><?= h($aefiListOfVaccine->diluent_batch_number) ?></td>
                </tr>
                <tr>
                    <th><?= __('Diluent Manufacturer') ?></th>
                    <td><?= h($aefiListOfVaccine->diluent_manufacturer) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($aefiListOfVaccine->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Vaccination Date') ?></th>
                    <td><?= h($aefiListOfVaccine->vaccination_date) ?></td>
                </tr>
                <tr>
                    <th><?= __('Expiry Date') ?></th>
                    <td><?= h($aefiListOfVaccine->expiry_date) ?></td>
                </tr>
                <tr>
                    <th><?= __('Diluent Expiry Date') ?></th>
                    <td><?= h($aefiListOfVaccine->diluent_expiry_date) ?></td>
                </tr>
                <tr>
                    <th><?= __('Created') ?></th>
                    <td><?= h($aefiListOfVaccine->created) ?></td>
                </tr>
                <tr>
                    <th><?= __('Modified') ?></th>
                    <td><?= h($aefiListOfVaccine->modified) ?></td>
                </tr>
                <tr>
                    <th><?= __('Suspected Drug') ?></th>
                    <td><?= $aefiListOfVaccine->suspected_drug ? __('Yes') : __('No'); ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
