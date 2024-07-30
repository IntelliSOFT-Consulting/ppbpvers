<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\SadrFollowup $sadrFollowup
 * @var \Cake\Collection\CollectionInterface|string[] $users
 * @var \Cake\Collection\CollectionInterface|string[] $counties
 * @var \Cake\Collection\CollectionInterface|string[] $sadrs
 * @var \Cake\Collection\CollectionInterface|string[] $designations
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('List Sadr Followups'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="sadrFollowups form content">
            <?= $this->Form->create($sadrFollowup) ?>
            <fieldset>
                <legend><?= __('Add Sadr Followup') ?></legend>
                <?php
                    echo $this->Form->control('user_id', ['options' => $users, 'empty' => true]);
                    echo $this->Form->control('county_id', ['options' => $counties, 'empty' => true]);
                    echo $this->Form->control('sadr_id', ['options' => $sadrs, 'empty' => true]);
                    echo $this->Form->control('designation_id', ['options' => $designations, 'empty' => true]);
                    echo $this->Form->control('description_of_reaction');
                    echo $this->Form->control('outcome');
                    echo $this->Form->control('reporter_email');
                    echo $this->Form->control('reporter_phone');
                    echo $this->Form->control('submitted');
                    echo $this->Form->control('emails');
                    echo $this->Form->control('active');
                    echo $this->Form->control('device');
                    echo $this->Form->control('notified');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
