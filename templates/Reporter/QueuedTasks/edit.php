<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\QueuedTask $queuedTask
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $queuedTask->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $queuedTask->id), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Queued Tasks'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="queuedTasks form content">
            <?= $this->Form->create($queuedTask) ?>
            <fieldset>
                <legend><?= __('Edit Queued Task') ?></legend>
                <?php
                    echo $this->Form->control('jobtype');
                    echo $this->Form->control('data');
                    echo $this->Form->control('group');
                    echo $this->Form->control('reference');
                    echo $this->Form->control('notbefore', ['empty' => true]);
                    echo $this->Form->control('fetched', ['empty' => true]);
                    echo $this->Form->control('progress');
                    echo $this->Form->control('completed', ['empty' => true]);
                    echo $this->Form->control('failed');
                    echo $this->Form->control('failure_message');
                    echo $this->Form->control('workerkey');
                    echo $this->Form->control('priority');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
