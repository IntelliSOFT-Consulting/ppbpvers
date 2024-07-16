<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\User> $users
 */
?>
<div class="users index content">
    <?= $this->Html->link(__('New User'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Users') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('designation_id') ?></th>
                    <th><?= $this->Paginator->sort('county_id') ?></th>
                    <th><?= $this->Paginator->sort('username') ?></th>
                    <th><?= $this->Paginator->sort('confirm_password') ?></th>
                    <th><?= $this->Paginator->sort('name') ?></th>
                    <th><?= $this->Paginator->sort('email') ?></th>
                    <th><?= $this->Paginator->sort('role_id') ?></th>
                    <th><?= $this->Paginator->sort('name_of_institution') ?></th>
                    <th><?= $this->Paginator->sort('institution_address') ?></th>
                    <th><?= $this->Paginator->sort('institution_code') ?></th>
                    <th><?= $this->Paginator->sort('institution_email') ?></th>
                    <th><?= $this->Paginator->sort('institution_contact') ?></th>
                    <th><?= $this->Paginator->sort('ward') ?></th>
                    <th><?= $this->Paginator->sort('phone_no') ?></th>
                    <th><?= $this->Paginator->sort('forgot_password') ?></th>
                    <th><?= $this->Paginator->sort('initial_email') ?></th>
                    <th><?= $this->Paginator->sort('is_active') ?></th>
                    <th><?= $this->Paginator->sort('is_admin') ?></th>
                    <th><?= $this->Paginator->sort('deleted') ?></th>
                    <th><?= $this->Paginator->sort('deleted_date') ?></th>
                    <th><?= $this->Paginator->sort('user_type') ?></th>
                    <th><?= $this->Paginator->sort('sponsor_email') ?></th>
                    <th><?= $this->Paginator->sort('health_program') ?></th>
                    <th><?= $this->Paginator->sort('active_date') ?></th>
                    <th><?= $this->Paginator->sort('created') ?></th>
                    <th><?= $this->Paginator->sort('modified') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($users as $user): ?>
                <tr>
                    <td><?= $this->Number->format($user->id) ?></td>
                    <td><?= $user->designation_id === null ? '' : $this->Number->format($user->designation_id) ?></td>
                    <td><?= $user->county_id === null ? '' : $this->Number->format($user->county_id) ?></td>
                    <td><?= h($user->username) ?></td>
                    <td><?= h($user->confirm_password) ?></td>
                    <td><?= h($user->name) ?></td>
                    <td><?= h($user->email) ?></td>
                    <td><?= $user->has('role') ? $this->Html->link($user->role->name, ['controller' => 'Roles', 'action' => 'view', $user->role->id]) : '' ?></td>
                    <td><?= h($user->name_of_institution) ?></td>
                    <td><?= h($user->institution_address) ?></td>
                    <td><?= h($user->institution_code) ?></td>
                    <td><?= h($user->institution_email) ?></td>
                    <td><?= h($user->institution_contact) ?></td>
                    <td><?= h($user->ward) ?></td>
                    <td><?= h($user->phone_no) ?></td>
                    <td><?= h($user->forgot_password) ?></td>
                    <td><?= h($user->initial_email) ?></td>
                    <td><?= h($user->is_active) ?></td>
                    <td><?= h($user->is_admin) ?></td>
                    <td><?= h($user->deleted) ?></td>
                    <td><?= h($user->deleted_date) ?></td>
                    <td><?= h($user->user_type) ?></td>
                    <td><?= h($user->sponsor_email) ?></td>
                    <td><?= h($user->health_program) ?></td>
                    <td><?= h($user->active_date) ?></td>
                    <td><?= h($user->created) ?></td>
                    <td><?= h($user->modified) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $user->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $user->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $user->id], ['confirm' => __('Are you sure you want to delete # {0}?', $user->id)]) ?>
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
