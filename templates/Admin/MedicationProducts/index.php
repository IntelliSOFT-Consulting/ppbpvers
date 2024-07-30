<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\MedicationProduct> $medicationProducts
 */
?>
<div class="medicationProducts index content">
    <?= $this->Html->link(__('New Medication Product'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Medication Products') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('medication_id') ?></th>
                    <th><?= $this->Paginator->sort('generic_name_i') ?></th>
                    <th><?= $this->Paginator->sort('product_name_i') ?></th>
                    <th><?= $this->Paginator->sort('dosage_form_i') ?></th>
                    <th><?= $this->Paginator->sort('dosage_i') ?></th>
                    <th><?= $this->Paginator->sort('manufacturer_i') ?></th>
                    <th><?= $this->Paginator->sort('strength_i') ?></th>
                    <th><?= $this->Paginator->sort('container_i') ?></th>
                    <th><?= $this->Paginator->sort('generic_name_ii') ?></th>
                    <th><?= $this->Paginator->sort('product_name_ii') ?></th>
                    <th><?= $this->Paginator->sort('dosage_form_ii') ?></th>
                    <th><?= $this->Paginator->sort('dosage_ii') ?></th>
                    <th><?= $this->Paginator->sort('manufacturer_ii') ?></th>
                    <th><?= $this->Paginator->sort('strength_ii') ?></th>
                    <th><?= $this->Paginator->sort('container_ii') ?></th>
                    <th><?= $this->Paginator->sort('created') ?></th>
                    <th><?= $this->Paginator->sort('modifed') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($medicationProducts as $medicationProduct): ?>
                <tr>
                    <td><?= $this->Number->format($medicationProduct->id) ?></td>
                    <td><?= $medicationProduct->has('medication') ? $this->Html->link($medicationProduct->medication->id, ['controller' => 'Medications', 'action' => 'view', $medicationProduct->medication->id]) : '' ?></td>
                    <td><?= h($medicationProduct->generic_name_i) ?></td>
                    <td><?= h($medicationProduct->product_name_i) ?></td>
                    <td><?= h($medicationProduct->dosage_form_i) ?></td>
                    <td><?= h($medicationProduct->dosage_i) ?></td>
                    <td><?= h($medicationProduct->manufacturer_i) ?></td>
                    <td><?= h($medicationProduct->strength_i) ?></td>
                    <td><?= h($medicationProduct->container_i) ?></td>
                    <td><?= h($medicationProduct->generic_name_ii) ?></td>
                    <td><?= h($medicationProduct->product_name_ii) ?></td>
                    <td><?= h($medicationProduct->dosage_form_ii) ?></td>
                    <td><?= h($medicationProduct->dosage_ii) ?></td>
                    <td><?= h($medicationProduct->manufacturer_ii) ?></td>
                    <td><?= h($medicationProduct->strength_ii) ?></td>
                    <td><?= h($medicationProduct->container_ii) ?></td>
                    <td><?= h($medicationProduct->created) ?></td>
                    <td><?= h($medicationProduct->modifed) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $medicationProduct->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $medicationProduct->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $medicationProduct->id], ['confirm' => __('Are you sure you want to delete # {0}?', $medicationProduct->id)]) ?>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(__('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')) ?></p>
    </div>
</div>
