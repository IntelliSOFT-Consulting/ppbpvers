<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\Frequency> $frequencies
 */
?>
<div class="frequencies index content">
    <?= $this->Html->link(__('New Frequency'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Frequencies') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('value') ?></th>
                    <th><?= $this->Paginator->sort('name') ?></th>
                    <th><?= $this->Paginator->sort('icsr_code') ?></th>
                    <th><?= $this->Paginator->sort('created') ?></th>
                    <th><?= $this->Paginator->sort('modified') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($frequencies as $frequency): ?>
                <tr>
                    <td><?= $this->Number->format($frequency->id) ?></td>
                    <td><?= h($frequency->value) ?></td>
                    <td><?= h($frequency->name) ?></td>
                    <td><?= h($frequency->icsr_code) ?></td>
                    <td><?= h($frequency->created) ?></td>
                    <td><?= h($frequency->modified) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $frequency->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $frequency->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $frequency->id], ['confirm' => __('Are you sure you want to delete # {0}?', $frequency->id)]) ?>
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
