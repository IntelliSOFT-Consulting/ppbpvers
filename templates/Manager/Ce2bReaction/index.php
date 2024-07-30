<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\Ce2bReaction> $ce2bReaction
 */
?>
<div class="ce2bReaction index content">
    <?= $this->Html->link(__('New Ce2b Reaction'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Ce2b Reaction') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('ce2b_id') ?></th>
                    <th><?= $this->Paginator->sort('created') ?></th>
                    <th><?= $this->Paginator->sort('modified') ?></th>
                    <th><?= $this->Paginator->sort('criteria_death_null') ?></th>
                    <th><?= $this->Paginator->sort('criteria_death_value') ?></th>
                    <th><?= $this->Paginator->sort('life_hreatening_null') ?></th>
                    <th><?= $this->Paginator->sort('life_hreatening_value') ?></th>
                    <th><?= $this->Paginator->sort('prolonged_hospitalisation_null') ?></th>
                    <th><?= $this->Paginator->sort('prolonged_hospitalisation_value') ?></th>
                    <th><?= $this->Paginator->sort('incapacitating_null') ?></th>
                    <th><?= $this->Paginator->sort('incapacitating_value') ?></th>
                    <th><?= $this->Paginator->sort('birth_defect_null') ?></th>
                    <th><?= $this->Paginator->sort('birth_defect_value') ?></th>
                    <th><?= $this->Paginator->sort('other_medical_null') ?></th>
                    <th><?= $this->Paginator->sort('other_medical_value') ?></th>
                    <th><?= $this->Paginator->sort('reaction_outcome_null') ?></th>
                    <th><?= $this->Paginator->sort('reaction_outcome_value') ?></th>
                    <th><?= $this->Paginator->sort('medical_confirmation_null') ?></th>
                    <th><?= $this->Paginator->sort('medical_confirmation_value') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($ce2bReaction as $ce2bReaction): ?>
                <tr>
                    <td><?= $this->Number->format($ce2bReaction->id) ?></td>
                    <td><?= $ce2bReaction->has('ce2b') ? $this->Html->link($ce2bReaction->ce2b->id, ['controller' => 'Ce2bs', 'action' => 'view', $ce2bReaction->ce2b->id]) : '' ?></td>
                    <td><?= h($ce2bReaction->created) ?></td>
                    <td><?= h($ce2bReaction->modified) ?></td>
                    <td><?= h($ce2bReaction->criteria_death_null) ?></td>
                    <td><?= h($ce2bReaction->criteria_death_value) ?></td>
                    <td><?= h($ce2bReaction->life_hreatening_null) ?></td>
                    <td><?= h($ce2bReaction->life_hreatening_value) ?></td>
                    <td><?= h($ce2bReaction->prolonged_hospitalisation_null) ?></td>
                    <td><?= h($ce2bReaction->prolonged_hospitalisation_value) ?></td>
                    <td><?= h($ce2bReaction->incapacitating_null) ?></td>
                    <td><?= h($ce2bReaction->incapacitating_value) ?></td>
                    <td><?= h($ce2bReaction->birth_defect_null) ?></td>
                    <td><?= h($ce2bReaction->birth_defect_value) ?></td>
                    <td><?= h($ce2bReaction->other_medical_null) ?></td>
                    <td><?= h($ce2bReaction->other_medical_value) ?></td>
                    <td><?= h($ce2bReaction->reaction_outcome_null) ?></td>
                    <td><?= h($ce2bReaction->reaction_outcome_value) ?></td>
                    <td><?= h($ce2bReaction->medical_confirmation_null) ?></td>
                    <td><?= h($ce2bReaction->medical_confirmation_value) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $ce2bReaction->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $ce2bReaction->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $ce2bReaction->id], ['confirm' => __('Are you sure you want to delete # {0}?', $ce2bReaction->id)]) ?>
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
