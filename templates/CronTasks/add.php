<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\CronTask $cronTask
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('List Cron Tasks'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="cronTasks form content">
            <?= $this->Form->create($cronTask) ?>
            <fieldset>
                <legend><?= __('Add Cron Task') ?></legend>
                <?php
                    echo $this->Form->control('jobtype');
                    echo $this->Form->control('title');
                    echo $this->Form->control('data');
                    echo $this->Form->control('name');
                    echo $this->Form->control('notbefore', ['empty' => true]);
                    echo $this->Form->control('fetched', ['empty' => true]);
                    echo $this->Form->control('completed', ['empty' => true]);
                    echo $this->Form->control('failed');
                    echo $this->Form->control('failure_message');
                    echo $this->Form->control('workerkey');
                    echo $this->Form->control('interval');
                    echo $this->Form->control('status');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
