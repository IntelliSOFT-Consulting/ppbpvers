<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Role $role
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Role'), ['action' => 'edit', $role->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Role'), ['action' => 'delete', $role->id], ['confirm' => __('Are you sure you want to delete # {0}?', $role->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Roles'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Role'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="roles view content">
            <h3><?= h($role->name) ?></h3>
            <table>
                <tr>
                    <th><?= __('Name') ?></th>
                    <td><?= h($role->name) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($role->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Created') ?></th>
                    <td><?= h($role->created) ?></td>
                </tr>
                <tr>
                    <th><?= __('Modified') ?></th>
                    <td><?= h($role->modified) ?></td>
                </tr>
            </table>
            <div class="text">
                <strong><?= __('Description') ?></strong>
                <blockquote>
                    <?= $this->Text->autoParagraph(h($role->description)); ?>
                </blockquote>
            </div>
            <div class="related">
                <h4><?= __('Related Users') ?></h4>
                <?php if (!empty($role->users)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Id') ?></th>
                            <th><?= __('Designation Id') ?></th>
                            <th><?= __('County Id') ?></th>
                            <th><?= __('Username') ?></th>
                            <th><?= __('Password') ?></th>
                            <th><?= __('Confirm Password') ?></th>
                            <th><?= __('Name') ?></th>
                            <th><?= __('Email') ?></th>
                            <th><?= __('Role Id') ?></th>
                            <th><?= __('Name Of Institution') ?></th>
                            <th><?= __('Institution Address') ?></th>
                            <th><?= __('Institution Code') ?></th>
                            <th><?= __('Institution Email') ?></th>
                            <th><?= __('Institution Contact') ?></th>
                            <th><?= __('Ward') ?></th>
                            <th><?= __('Phone No') ?></th>
                            <th><?= __('Forgot Password') ?></th>
                            <th><?= __('Initial Email') ?></th>
                            <th><?= __('Is Active') ?></th>
                            <th><?= __('Is Admin') ?></th>
                            <th><?= __('Deleted') ?></th>
                            <th><?= __('Deleted Date') ?></th>
                            <th><?= __('Created') ?></th>
                            <th><?= __('Modified') ?></th>
                            <th><?= __('User Type') ?></th>
                            <th><?= __('Sponsor Email') ?></th>
                            <th><?= __('Health Program') ?></th>
                            <th><?= __('Active Date') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($role->users as $users) : ?>
                        <tr>
                            <td><?= h($users->id) ?></td>
                            <td><?= h($users->designation_id) ?></td>
                            <td><?= h($users->county_id) ?></td>
                            <td><?= h($users->username) ?></td>
                            <td><?= h($users->password) ?></td>
                            <td><?= h($users->confirm_password) ?></td>
                            <td><?= h($users->name) ?></td>
                            <td><?= h($users->email) ?></td>
                            <td><?= h($users->role_id) ?></td>
                            <td><?= h($users->name_of_institution) ?></td>
                            <td><?= h($users->institution_address) ?></td>
                            <td><?= h($users->institution_code) ?></td>
                            <td><?= h($users->institution_email) ?></td>
                            <td><?= h($users->institution_contact) ?></td>
                            <td><?= h($users->ward) ?></td>
                            <td><?= h($users->phone_no) ?></td>
                            <td><?= h($users->forgot_password) ?></td>
                            <td><?= h($users->initial_email) ?></td>
                            <td><?= h($users->is_active) ?></td>
                            <td><?= h($users->is_admin) ?></td>
                            <td><?= h($users->deleted) ?></td>
                            <td><?= h($users->deleted_date) ?></td>
                            <td><?= h($users->created) ?></td>
                            <td><?= h($users->modified) ?></td>
                            <td><?= h($users->user_type) ?></td>
                            <td><?= h($users->sponsor_email) ?></td>
                            <td><?= h($users->health_program) ?></td>
                            <td><?= h($users->active_date) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'Users', 'action' => 'view', $users->id]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'Users', 'action' => 'edit', $users->id]) ?>
                                <?= $this->Form->postLink(__('Delete'), ['controller' => 'Users', 'action' => 'delete', $users->id], ['confirm' => __('Are you sure you want to delete # {0}?', $users->id)]) ?>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </table>
                </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
</div>
