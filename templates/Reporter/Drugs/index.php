<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\Drug> $drugs
 */
?>
<div class="drugs index content">
    <?= $this->Html->link(__('New Drug'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Drugs') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('brand_name') ?></th>
                    <th><?= $this->Paginator->sort('inn_name') ?></th>
                    <th><?= $this->Paginator->sort('manufacturer') ?></th>
                    <th><?= $this->Paginator->sort('local_trade_rep') ?></th>
                    <th><?= $this->Paginator->sort('batch_number') ?></th>
                    <th><?= $this->Paginator->sort('registration_status') ?></th>
                    <th><?= $this->Paginator->sort('retention_status') ?></th>
                    <th><?= $this->Paginator->sort('donation') ?></th>
                    <th><?= $this->Paginator->sort('created') ?></th>
                    <th><?= $this->Paginator->sort('modified') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($drugs as $drug): ?>
                <tr>
                    <td><?= $this->Number->format($drug->id) ?></td>
                    <td><?= h($drug->brand_name) ?></td>
                    <td><?= h($drug->inn_name) ?></td>
                    <td><?= h($drug->manufacturer) ?></td>
                    <td><?= h($drug->local_trade_rep) ?></td>
                    <td><?= h($drug->batch_number) ?></td>
                    <td><?= h($drug->registration_status) ?></td>
                    <td><?= h($drug->retention_status) ?></td>
                    <td><?= h($drug->donation) ?></td>
                    <td><?= h($drug->created) ?></td>
                    <td><?= h($drug->modified) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $drug->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $drug->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $drug->id], ['confirm' => __('Are you sure you want to delete # {0}?', $drug->id)]) ?>
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
