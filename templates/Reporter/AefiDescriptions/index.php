<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\AefiDescription> $aefiDescriptions
 */
?>
<div class="aefiDescriptions index content">
    <?= $this->Html->link(__('New Aefi Description'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Aefi Descriptions') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('aefi_id') ?></th>
                    <th><?= $this->Paginator->sort('created') ?></th>
                    <th><?= $this->Paginator->sort('modified') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($aefiDescriptions as $aefiDescription): ?>
                <tr>
                    <td><?= $this->Number->format($aefiDescription->id) ?></td>
                    <td><?= $aefiDescription->has('aefi') ? $this->Html->link($aefiDescription->aefi->id, ['controller' => 'Aefis', 'action' => 'view', $aefiDescription->aefi->id]) : '' ?></td>
                    <td><?= h($aefiDescription->created) ?></td>
                    <td><?= h($aefiDescription->modified) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $aefiDescription->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $aefiDescription->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $aefiDescription->id], ['confirm' => __('Are you sure you want to delete # {0}?', $aefiDescription->id)]) ?>
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
