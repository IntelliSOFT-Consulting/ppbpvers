<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\User $user
 * @var string[]|\Cake\Collection\CollectionInterface $designations
 * @var string[]|\Cake\Collection\CollectionInterface $counties
 * @var string[]|\Cake\Collection\CollectionInterface $roles
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $user->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $user->id), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Users'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="users form content">
            <?= $this->Form->create($user) ?>
            <fieldset>
                <legend><?= __('Edit User') ?></legend>
                <?php
                    echo $this->Form->control('designation_id', ['options' => $designations, 'empty' => true]);
                    echo $this->Form->control('county_id', ['options' => $counties, 'empty' => true]);
                    echo $this->Form->control('username');
                    echo $this->Form->control('password');
                    echo $this->Form->control('confirm_password');
                    echo $this->Form->control('name');
                    echo $this->Form->control('email');
                    echo $this->Form->control('role_id', ['options' => $roles]);
                    echo $this->Form->control('name_of_institution');
                    echo $this->Form->control('institution_address');
                    echo $this->Form->control('institution_code');
                    echo $this->Form->control('institution_email');
                    echo $this->Form->control('institution_contact');
                    echo $this->Form->control('ward');
                    echo $this->Form->control('phone_no');
                    echo $this->Form->control('forgot_password');
                    echo $this->Form->control('initial_email');
                    echo $this->Form->control('is_active');
                    echo $this->Form->control('is_admin');
                    echo $this->Form->control('deleted');
                    echo $this->Form->control('deleted_date', ['empty' => true]);
                    echo $this->Form->control('user_type');
                    echo $this->Form->control('sponsor_email');
                    echo $this->Form->control('health_program');
                    echo $this->Form->control('active_date', ['empty' => true]);
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
