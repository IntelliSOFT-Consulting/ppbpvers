<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\SadrFollowup> $sadrFollowups
 */
?>
<div class="sadrFollowups index content">
    <?= $this->Html->link(__('New Sadr Followup'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Sadr Followups') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('user_id') ?></th>
                    <th><?= $this->Paginator->sort('county_id') ?></th>
                    <th><?= $this->Paginator->sort('sadr_id') ?></th>
                    <th><?= $this->Paginator->sort('designation_id') ?></th>
                    <th><?= $this->Paginator->sort('outcome') ?></th>
                    <th><?= $this->Paginator->sort('reporter_email') ?></th>
                    <th><?= $this->Paginator->sort('reporter_phone') ?></th>
                    <th><?= $this->Paginator->sort('submitted') ?></th>
                    <th><?= $this->Paginator->sort('emails') ?></th>
                    <th><?= $this->Paginator->sort('active') ?></th>
                    <th><?= $this->Paginator->sort('device') ?></th>
                    <th><?= $this->Paginator->sort('notified') ?></th>
                    <th><?= $this->Paginator->sort('created') ?></th>
                    <th><?= $this->Paginator->sort('modified') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($sadrFollowups as $sadrFollowup): ?>
                <tr>
                    <td><?= $this->Number->format($sadrFollowup->id) ?></td>
                    <td><?= $sadrFollowup->has('user') ? $this->Html->link($sadrFollowup->user->name, ['controller' => 'Users', 'action' => 'view', $sadrFollowup->user->id]) : '' ?></td>
                    <td><?= $sadrFollowup->has('county') ? $this->Html->link($sadrFollowup->county->id, ['controller' => 'Counties', 'action' => 'view', $sadrFollowup->county->id]) : '' ?></td>
                    <td><?= $sadrFollowup->has('sadr') ? $this->Html->link($sadrFollowup->sadr->id, ['controller' => 'Sadrs', 'action' => 'view', $sadrFollowup->sadr->id]) : '' ?></td>
                    <td><?= $sadrFollowup->has('designation') ? $this->Html->link($sadrFollowup->designation->name, ['controller' => 'Designations', 'action' => 'view', $sadrFollowup->designation->id]) : '' ?></td>
                    <td><?= h($sadrFollowup->outcome) ?></td>
                    <td><?= h($sadrFollowup->reporter_email) ?></td>
                    <td><?= h($sadrFollowup->reporter_phone) ?></td>
                    <td><?= $sadrFollowup->submitted === null ? '' : $this->Number->format($sadrFollowup->submitted) ?></td>
                    <td><?= $sadrFollowup->emails === null ? '' : $this->Number->format($sadrFollowup->emails) ?></td>
                    <td><?= h($sadrFollowup->active) ?></td>
                    <td><?= $sadrFollowup->device === null ? '' : $this->Number->format($sadrFollowup->device) ?></td>
                    <td><?= $sadrFollowup->notified === null ? '' : $this->Number->format($sadrFollowup->notified) ?></td>
                    <td><?= h($sadrFollowup->created) ?></td>
                    <td><?= h($sadrFollowup->modified) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $sadrFollowup->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $sadrFollowup->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $sadrFollowup->id], ['confirm' => __('Are you sure you want to delete # {0}?', $sadrFollowup->id)]) ?>
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
