<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\AefiReaction> $aefiReactions
 */
?>
<div class="aefiReactions index content">
    <?= $this->Html->link(__('New Aefi Reaction'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Aefi Reactions') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('aefi_id') ?></th>
                    <th><?= $this->Paginator->sort('reaction_name') ?></th>
                    <th><?= $this->Paginator->sort('created') ?></th>
                    <th><?= $this->Paginator->sort('modified') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($aefiReactions as $aefiReaction): ?>
                <tr>
                    <td><?= $this->Number->format($aefiReaction->id) ?></td>
                    <td><?= $aefiReaction->has('aefi') ? $this->Html->link($aefiReaction->aefi->id, ['controller' => 'Aefis', 'action' => 'view', $aefiReaction->aefi->id]) : '' ?></td>
                    <td><?= h($aefiReaction->reaction_name) ?></td>
                    <td><?= h($aefiReaction->created) ?></td>
                    <td><?= h($aefiReaction->modified) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $aefiReaction->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $aefiReaction->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $aefiReaction->id], ['confirm' => __('Are you sure you want to delete # {0}?', $aefiReaction->id)]) ?>
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
