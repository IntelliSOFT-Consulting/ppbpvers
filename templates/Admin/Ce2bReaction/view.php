<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Ce2bReaction $ce2bReaction
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Ce2b Reaction'), ['action' => 'edit', $ce2bReaction->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Ce2b Reaction'), ['action' => 'delete', $ce2bReaction->id], ['confirm' => __('Are you sure you want to delete # {0}?', $ce2bReaction->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Ce2b Reaction'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Ce2b Reaction'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="ce2bReaction view content">
            <h3><?= h($ce2bReaction->id) ?></h3>
            <table>
                <tr>
                    <th><?= __('Ce2b') ?></th>
                    <td><?= $ce2bReaction->has('ce2b') ? $this->Html->link($ce2bReaction->ce2b->id, ['controller' => 'Ce2bs', 'action' => 'view', $ce2bReaction->ce2b->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Criteria Death Null') ?></th>
                    <td><?= h($ce2bReaction->criteria_death_null) ?></td>
                </tr>
                <tr>
                    <th><?= __('Criteria Death Value') ?></th>
                    <td><?= h($ce2bReaction->criteria_death_value) ?></td>
                </tr>
                <tr>
                    <th><?= __('Life Hreatening Null') ?></th>
                    <td><?= h($ce2bReaction->life_hreatening_null) ?></td>
                </tr>
                <tr>
                    <th><?= __('Life Hreatening Value') ?></th>
                    <td><?= h($ce2bReaction->life_hreatening_value) ?></td>
                </tr>
                <tr>
                    <th><?= __('Prolonged Hospitalisation Null') ?></th>
                    <td><?= h($ce2bReaction->prolonged_hospitalisation_null) ?></td>
                </tr>
                <tr>
                    <th><?= __('Prolonged Hospitalisation Value') ?></th>
                    <td><?= h($ce2bReaction->prolonged_hospitalisation_value) ?></td>
                </tr>
                <tr>
                    <th><?= __('Incapacitating Null') ?></th>
                    <td><?= h($ce2bReaction->incapacitating_null) ?></td>
                </tr>
                <tr>
                    <th><?= __('Incapacitating Value') ?></th>
                    <td><?= h($ce2bReaction->incapacitating_value) ?></td>
                </tr>
                <tr>
                    <th><?= __('Birth Defect Null') ?></th>
                    <td><?= h($ce2bReaction->birth_defect_null) ?></td>
                </tr>
                <tr>
                    <th><?= __('Birth Defect Value') ?></th>
                    <td><?= h($ce2bReaction->birth_defect_value) ?></td>
                </tr>
                <tr>
                    <th><?= __('Other Medical Null') ?></th>
                    <td><?= h($ce2bReaction->other_medical_null) ?></td>
                </tr>
                <tr>
                    <th><?= __('Other Medical Value') ?></th>
                    <td><?= h($ce2bReaction->other_medical_value) ?></td>
                </tr>
                <tr>
                    <th><?= __('Reaction Outcome Null') ?></th>
                    <td><?= h($ce2bReaction->reaction_outcome_null) ?></td>
                </tr>
                <tr>
                    <th><?= __('Reaction Outcome Value') ?></th>
                    <td><?= h($ce2bReaction->reaction_outcome_value) ?></td>
                </tr>
                <tr>
                    <th><?= __('Medical Confirmation Null') ?></th>
                    <td><?= h($ce2bReaction->medical_confirmation_null) ?></td>
                </tr>
                <tr>
                    <th><?= __('Medical Confirmation Value') ?></th>
                    <td><?= h($ce2bReaction->medical_confirmation_value) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($ce2bReaction->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Created') ?></th>
                    <td><?= h($ce2bReaction->created) ?></td>
                </tr>
                <tr>
                    <th><?= __('Modified') ?></th>
                    <td><?= h($ce2bReaction->modified) ?></td>
                </tr>
            </table>
            <div class="text">
                <strong><?= __('Reaction Name') ?></strong>
                <blockquote>
                    <?= $this->Text->autoParagraph(h($ce2bReaction->reaction_name)); ?>
                </blockquote>
            </div>
            <div class="text">
                <strong><?= __('Meddra Code') ?></strong>
                <blockquote>
                    <?= $this->Text->autoParagraph(h($ce2bReaction->meddra_code)); ?>
                </blockquote>
            </div>
            <div class="text">
                <strong><?= __('Start Date') ?></strong>
                <blockquote>
                    <?= $this->Text->autoParagraph(h($ce2bReaction->start_date)); ?>
                </blockquote>
            </div>
            <div class="text">
                <strong><?= __('Source Country') ?></strong>
                <blockquote>
                    <?= $this->Text->autoParagraph(h($ce2bReaction->source_country)); ?>
                </blockquote>
            </div>
        </div>
    </div>
</div>
