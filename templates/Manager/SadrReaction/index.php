<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\SadrReaction> $sadrReaction
 */
?>
<div class="sadrReaction index content">
    <?= $this->Html->link(__('New Sadr Reaction'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Sadr Reaction') ?></h3>
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
                <?php foreach ($sadrReaction as $sadrReaction): ?>
                <tr>
                    <td><?= $this->Number->format($sadrReaction->id) ?></td>
                    <td><?= $sadrReaction->has('sadr') ? $this->Html->link($sadrReaction->sadr->id, ['controller' => 'Sadrs', 'action' => 'view', $sadrReaction->sadr->id]) : '' ?></td>
                    <td><?= h($sadrReaction->created) ?></td>
                    <td><?= h($sadrReaction->modified) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $sadrReaction->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $sadrReaction->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $sadrReaction->id], ['confirm' => __('Are you sure you want to delete # {0}?', $sadrReaction->id)]) ?>
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
