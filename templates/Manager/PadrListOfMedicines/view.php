<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\PadrListOfMedicine $padrListOfMedicine
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Padr List Of Medicine'), ['action' => 'edit', $padrListOfMedicine->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Padr List Of Medicine'), ['action' => 'delete', $padrListOfMedicine->id], ['confirm' => __('Are you sure you want to delete # {0}?', $padrListOfMedicine->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Padr List Of Medicines'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Padr List Of Medicine'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="padrListOfMedicines view content">
            <h3><?= h($padrListOfMedicine->id) ?></h3>
            <table>
                <tr>
                    <th><?= __('Padr') ?></th>
                    <td><?= $padrListOfMedicine->has('padr') ? $this->Html->link($padrListOfMedicine->padr->id, ['controller' => 'Padrs', 'action' => 'view', $padrListOfMedicine->padr->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Product Name') ?></th>
                    <td><?= h($padrListOfMedicine->product_name) ?></td>
                </tr>
                <tr>
                    <th><?= __('Medicine Source') ?></th>
                    <td><?= h($padrListOfMedicine->medicine_source) ?></td>
                </tr>
                <tr>
                    <th><?= __('Manufacturer') ?></th>
                    <td><?= h($padrListOfMedicine->manufacturer) ?></td>
                </tr>
                <tr>
                    <th><?= __('Expiry Date') ?></th>
                    <td><?= h($padrListOfMedicine->expiry_date) ?></td>
                </tr>
                <tr>
                    <th><?= __('End Date') ?></th>
                    <td><?= h($padrListOfMedicine->end_date) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($padrListOfMedicine->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Start Date') ?></th>
                    <td><?= h($padrListOfMedicine->start_date) ?></td>
                </tr>
                <tr>
                    <th><?= __('Created') ?></th>
                    <td><?= h($padrListOfMedicine->created) ?></td>
                </tr>
                <tr>
                    <th><?= __('Modifed') ?></th>
                    <td><?= h($padrListOfMedicine->modifed) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
