<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\AggregateListOfSignal $aggregateListOfSignal
 * @var \Cake\Collection\CollectionInterface|string[] $aggregates
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('List Aggregate List Of Signals'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="aggregateListOfSignals form content">
            <?= $this->Form->create($aggregateListOfSignal) ?>
            <fieldset>
                <legend><?= __('Add Aggregate List Of Signal') ?></legend>
                <?php
                    echo $this->Form->control('aggregate_id', ['options' => $aggregates, 'empty' => true]);
                    echo $this->Form->control('aggregate_followup_id');
                    echo $this->Form->control('signal_term');
                    echo $this->Form->control('source_trigger');
                    echo $this->Form->control('status');
                    echo $this->Form->control('outcome');
                    echo $this->Form->control('date_detected', ['empty' => true]);
                    echo $this->Form->control('date_closed', ['empty' => true]);
                    echo $this->Form->control('reason_summary');
                    echo $this->Form->control('evaluation_method');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
