<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\AggregateListOfSignal $aggregateListOfSignal
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Aggregate List Of Signal'), ['action' => 'edit', $aggregateListOfSignal->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Aggregate List Of Signal'), ['action' => 'delete', $aggregateListOfSignal->id], ['confirm' => __('Are you sure you want to delete # {0}?', $aggregateListOfSignal->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Aggregate List Of Signals'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Aggregate List Of Signal'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="aggregateListOfSignals view content">
            <h3><?= h($aggregateListOfSignal->id) ?></h3>
            <table>
                <tr>
                    <th><?= __('Aggregate') ?></th>
                    <td><?= $aggregateListOfSignal->has('aggregate') ? $this->Html->link($aggregateListOfSignal->aggregate->id, ['controller' => 'Aggregates', 'action' => 'view', $aggregateListOfSignal->aggregate->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($aggregateListOfSignal->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Aggregate Followup Id') ?></th>
                    <td><?= $aggregateListOfSignal->aggregate_followup_id === null ? '' : $this->Number->format($aggregateListOfSignal->aggregate_followup_id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Date Detected') ?></th>
                    <td><?= h($aggregateListOfSignal->date_detected) ?></td>
                </tr>
                <tr>
                    <th><?= __('Date Closed') ?></th>
                    <td><?= h($aggregateListOfSignal->date_closed) ?></td>
                </tr>
                <tr>
                    <th><?= __('Created') ?></th>
                    <td><?= h($aggregateListOfSignal->created) ?></td>
                </tr>
                <tr>
                    <th><?= __('Modified') ?></th>
                    <td><?= h($aggregateListOfSignal->modified) ?></td>
                </tr>
            </table>
            <div class="text">
                <strong><?= __('Signal Term') ?></strong>
                <blockquote>
                    <?= $this->Text->autoParagraph(h($aggregateListOfSignal->signal_term)); ?>
                </blockquote>
            </div>
            <div class="text">
                <strong><?= __('Source Trigger') ?></strong>
                <blockquote>
                    <?= $this->Text->autoParagraph(h($aggregateListOfSignal->source_trigger)); ?>
                </blockquote>
            </div>
            <div class="text">
                <strong><?= __('Status') ?></strong>
                <blockquote>
                    <?= $this->Text->autoParagraph(h($aggregateListOfSignal->status)); ?>
                </blockquote>
            </div>
            <div class="text">
                <strong><?= __('Outcome') ?></strong>
                <blockquote>
                    <?= $this->Text->autoParagraph(h($aggregateListOfSignal->outcome)); ?>
                </blockquote>
            </div>
            <div class="text">
                <strong><?= __('Reason Summary') ?></strong>
                <blockquote>
                    <?= $this->Text->autoParagraph(h($aggregateListOfSignal->reason_summary)); ?>
                </blockquote>
            </div>
            <div class="text">
                <strong><?= __('Evaluation Method') ?></strong>
                <blockquote>
                    <?= $this->Text->autoParagraph(h($aggregateListOfSignal->evaluation_method)); ?>
                </blockquote>
            </div>
        </div>
    </div>
</div>
