<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\Meddra> $meddras
 */
?>
<div class="meddras index content">
    <?= $this->Html->link(__('New Meddra'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Meddras') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('llt_name') ?></th>
                    <th><?= $this->Paginator->sort('pt_code') ?></th>
                    <th><?= $this->Paginator->sort('llt_whoart_code') ?></th>
                    <th><?= $this->Paginator->sort('llt_harts_code') ?></th>
                    <th><?= $this->Paginator->sort('llt_costart_sym') ?></th>
                    <th><?= $this->Paginator->sort('llt_icd9_code') ?></th>
                    <th><?= $this->Paginator->sort('llt_icd9cm_code') ?></th>
                    <th><?= $this->Paginator->sort('llt_icd10_code') ?></th>
                    <th><?= $this->Paginator->sort('llt_currency') ?></th>
                    <th><?= $this->Paginator->sort('llt_jart_code') ?></th>
                    <th><?= $this->Paginator->sort('COL_12') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($meddras as $meddra): ?>
                <tr>
                    <td><?= $meddra->id === null ? '' : $this->Number->format($meddra->id) ?></td>
                    <td><?= h($meddra->llt_name) ?></td>
                    <td><?= $meddra->pt_code === null ? '' : $this->Number->format($meddra->pt_code) ?></td>
                    <td><?= h($meddra->llt_whoart_code) ?></td>
                    <td><?= h($meddra->llt_harts_code) ?></td>
                    <td><?= h($meddra->llt_costart_sym) ?></td>
                    <td><?= h($meddra->llt_icd9_code) ?></td>
                    <td><?= h($meddra->llt_icd9cm_code) ?></td>
                    <td><?= h($meddra->llt_icd10_code) ?></td>
                    <td><?= h($meddra->llt_currency) ?></td>
                    <td><?= h($meddra->llt_jart_code) ?></td>
                    <td><?= h($meddra->COL_12) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $meddra->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $meddra->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $meddra->id], ['confirm' => __('Are you sure you want to delete # {0}?', $meddra->id)]) ?>
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
