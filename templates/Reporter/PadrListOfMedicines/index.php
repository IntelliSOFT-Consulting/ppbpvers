<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\PadrListOfMedicine> $padrListOfMedicines
 */
?>
<div class="padrListOfMedicines index content">
    <?= $this->Html->link(__('New Padr List Of Medicine'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Padr List Of Medicines') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('padr_id') ?></th>
                    <th><?= $this->Paginator->sort('product_name') ?></th>
                    <th><?= $this->Paginator->sort('medicine_source') ?></th>
                    <th><?= $this->Paginator->sort('manufacturer') ?></th>
                    <th><?= $this->Paginator->sort('expiry_date') ?></th>
                    <th><?= $this->Paginator->sort('start_date') ?></th>
                    <th><?= $this->Paginator->sort('end_date') ?></th>
                    <th><?= $this->Paginator->sort('created') ?></th>
                    <th><?= $this->Paginator->sort('modifed') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($padrListOfMedicines as $padrListOfMedicine): ?>
                <tr>
                    <td><?= $this->Number->format($padrListOfMedicine->id) ?></td>
                    <td><?= $padrListOfMedicine->has('padr') ? $this->Html->link($padrListOfMedicine->padr->id, ['controller' => 'Padrs', 'action' => 'view', $padrListOfMedicine->padr->id]) : '' ?></td>
                    <td><?= h($padrListOfMedicine->product_name) ?></td>
                    <td><?= h($padrListOfMedicine->medicine_source) ?></td>
                    <td><?= h($padrListOfMedicine->manufacturer) ?></td>
                    <td><?= h($padrListOfMedicine->expiry_date) ?></td>
                    <td><?= h($padrListOfMedicine->start_date) ?></td>
                    <td><?= h($padrListOfMedicine->end_date) ?></td>
                    <td><?= h($padrListOfMedicine->created) ?></td>
                    <td><?= h($padrListOfMedicine->modifed) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $padrListOfMedicine->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $padrListOfMedicine->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $padrListOfMedicine->id], ['confirm' => __('Are you sure you want to delete # {0}?', $padrListOfMedicine->id)]) ?>
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
