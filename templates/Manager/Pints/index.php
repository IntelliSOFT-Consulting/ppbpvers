<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\Pint> $pints
 */
?>
<div class="pints index content">
    <?= $this->Html->link(__('New Pint'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Pints') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('transfusion_id') ?></th>
                    <th><?= $this->Paginator->sort('component_type') ?></th>
                    <th><?= $this->Paginator->sort('pint_no') ?></th>
                    <th><?= $this->Paginator->sort('expiry_date') ?></th>
                    <th><?= $this->Paginator->sort('volume_transfused') ?></th>
                    <th><?= $this->Paginator->sort('created') ?></th>
                    <th><?= $this->Paginator->sort('modified') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($pints as $pint): ?>
                <tr>
                    <td><?= $this->Number->format($pint->id) ?></td>
                    <td><?= $pint->has('transfusion') ? $this->Html->link($pint->transfusion->id, ['controller' => 'Transfusions', 'action' => 'view', $pint->transfusion->id]) : '' ?></td>
                    <td><?= h($pint->component_type) ?></td>
                    <td><?= h($pint->pint_no) ?></td>
                    <td><?= h($pint->expiry_date) ?></td>
                    <td><?= h($pint->volume_transfused) ?></td>
                    <td><?= h($pint->created) ?></td>
                    <td><?= h($pint->modified) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $pint->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $pint->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $pint->id], ['confirm' => __('Are you sure you want to delete # {0}?', $pint->id)]) ?>
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
