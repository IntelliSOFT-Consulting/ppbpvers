<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Reminder $reminder
 * @var \Cake\Collection\CollectionInterface|string[] $users
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('List Reminders'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="reminders form content">
            <?= $this->Form->create($reminder) ?>
            <fieldset>
                <legend><?= __('Add Reminder') ?></legend>
                <?php
                    echo $this->Form->control('foreign_key');
                    echo $this->Form->control('model');
                    echo $this->Form->control('user_id', ['options' => $users]);
                    echo $this->Form->control('reminder_type');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
