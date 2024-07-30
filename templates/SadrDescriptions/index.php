<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\SadrDescription> $sadrDescriptions
 */
?>
<div class="sadrDescriptions index content">
    <?= $this->Html->link(__('New Sadr Description'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Sadr Descriptions') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('sadr_id') ?></th>
                    <th><?= $this->Paginator->sort('created') ?></th>
                    <th><?= $this->Paginator->sort('modified') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($sadrDescriptions as $sadrDescription): ?>
                <tr>
                    <td><?= $this->Number->format($sadrDescription->id) ?></td>
                    <td><?= $sadrDescription->has('sadr') ? $this->Html->link($sadrDescription->sadr->id, ['controller' => 'Sadrs', 'action' => 'view', $sadrDescription->sadr->id]) : '' ?></td>
                    <td><?= h($sadrDescription->created) ?></td>
                    <td><?= h($sadrDescription->modified) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $sadrDescription->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $sadrDescription->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $sadrDescription->id], ['confirm' => __('Are you sure you want to delete # {0}?', $sadrDescription->id)]) ?>
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
