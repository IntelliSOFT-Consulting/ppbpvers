<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\County> $counties
 */
?>
<div class="counties index content">
    <?= $this->Html->link(__('New County'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Counties') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('county_name') ?></th>
                    <th><?= $this->Paginator->sort('org_unit') ?></th>
                    <th><?= $this->Paginator->sort('created') ?></th>
                    <th><?= $this->Paginator->sort('modified') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($counties as $county): ?>
                <tr>
                    <td><?= $this->Number->format($county->id) ?></td>
                    <td><?= h($county->county_name) ?></td>
                    <td><?= h($county->org_unit) ?></td>
                    <td><?= h($county->created) ?></td>
                    <td><?= h($county->modified) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $county->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $county->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $county->id], ['confirm' => __('Are you sure you want to delete # {0}?', $county->id)]) ?>
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
