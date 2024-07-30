<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\Authority> $authorities
 */
?>
<div class="authorities index content">
    <?= $this->Html->link(__('New Authority'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Authorities') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('mah_name') ?></th>
                    <th><?= $this->Paginator->sort('mah_company_name') ?></th>
                    <th><?= $this->Paginator->sort('mah_company_address') ?></th>
                    <th><?= $this->Paginator->sort('mah_company_telephone') ?></th>
                    <th><?= $this->Paginator->sort('mah_company_email') ?></th>
                    <th><?= $this->Paginator->sort('product') ?></th>
                    <th><?= $this->Paginator->sort('master_mah') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($authorities as $authority): ?>
                <tr>
                    <td><?= $this->Number->format($authority->id) ?></td>
                    <td><?= h($authority->mah_name) ?></td>
                    <td><?= h($authority->mah_company_name) ?></td>
                    <td><?= h($authority->mah_company_address) ?></td>
                    <td><?= h($authority->mah_company_telephone) ?></td>
                    <td><?= h($authority->mah_company_email) ?></td>
                    <td><?= $authority->product === null ? '' : $this->Number->format($authority->product) ?></td>
                    <td><?= h($authority->master_mah) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $authority->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $authority->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $authority->id], ['confirm' => __('Are you sure you want to delete # {0}?', $authority->id)]) ?>
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
