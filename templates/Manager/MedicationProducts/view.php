<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\MedicationProduct $medicationProduct
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Medication Product'), ['action' => 'edit', $medicationProduct->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Medication Product'), ['action' => 'delete', $medicationProduct->id], ['confirm' => __('Are you sure you want to delete # {0}?', $medicationProduct->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Medication Products'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Medication Product'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="medicationProducts view content">
            <h3><?= h($medicationProduct->id) ?></h3>
            <table>
                <tr>
                    <th><?= __('Medication') ?></th>
                    <td><?= $medicationProduct->has('medication') ? $this->Html->link($medicationProduct->medication->id, ['controller' => 'Medications', 'action' => 'view', $medicationProduct->medication->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Generic Name I') ?></th>
                    <td><?= h($medicationProduct->generic_name_i) ?></td>
                </tr>
                <tr>
                    <th><?= __('Product Name I') ?></th>
                    <td><?= h($medicationProduct->product_name_i) ?></td>
                </tr>
                <tr>
                    <th><?= __('Dosage Form I') ?></th>
                    <td><?= h($medicationProduct->dosage_form_i) ?></td>
                </tr>
                <tr>
                    <th><?= __('Dosage I') ?></th>
                    <td><?= h($medicationProduct->dosage_i) ?></td>
                </tr>
                <tr>
                    <th><?= __('Manufacturer I') ?></th>
                    <td><?= h($medicationProduct->manufacturer_i) ?></td>
                </tr>
                <tr>
                    <th><?= __('Strength I') ?></th>
                    <td><?= h($medicationProduct->strength_i) ?></td>
                </tr>
                <tr>
                    <th><?= __('Container I') ?></th>
                    <td><?= h($medicationProduct->container_i) ?></td>
                </tr>
                <tr>
                    <th><?= __('Generic Name Ii') ?></th>
                    <td><?= h($medicationProduct->generic_name_ii) ?></td>
                </tr>
                <tr>
                    <th><?= __('Product Name Ii') ?></th>
                    <td><?= h($medicationProduct->product_name_ii) ?></td>
                </tr>
                <tr>
                    <th><?= __('Dosage Form Ii') ?></th>
                    <td><?= h($medicationProduct->dosage_form_ii) ?></td>
                </tr>
                <tr>
                    <th><?= __('Dosage Ii') ?></th>
                    <td><?= h($medicationProduct->dosage_ii) ?></td>
                </tr>
                <tr>
                    <th><?= __('Manufacturer Ii') ?></th>
                    <td><?= h($medicationProduct->manufacturer_ii) ?></td>
                </tr>
                <tr>
                    <th><?= __('Strength Ii') ?></th>
                    <td><?= h($medicationProduct->strength_ii) ?></td>
                </tr>
                <tr>
                    <th><?= __('Container Ii') ?></th>
                    <td><?= h($medicationProduct->container_ii) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($medicationProduct->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Created') ?></th>
                    <td><?= h($medicationProduct->created) ?></td>
                </tr>
                <tr>
                    <th><?= __('Modifed') ?></th>
                    <td><?= h($medicationProduct->modifed) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
