<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Ce2bReaction $ce2bReaction
 * @var string[]|\Cake\Collection\CollectionInterface $ce2bs
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $ce2bReaction->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $ce2bReaction->id), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Ce2b Reaction'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="ce2bReaction form content">
            <?= $this->Form->create($ce2bReaction) ?>
            <fieldset>
                <legend><?= __('Edit Ce2b Reaction') ?></legend>
                <?php
                    echo $this->Form->control('ce2b_id', ['options' => $ce2bs, 'empty' => true]);
                    echo $this->Form->control('reaction_name');
                    echo $this->Form->control('meddra_code');
                    echo $this->Form->control('start_date');
                    echo $this->Form->control('source_country');
                    echo $this->Form->control('criteria_death_null');
                    echo $this->Form->control('criteria_death_value');
                    echo $this->Form->control('life_hreatening_null');
                    echo $this->Form->control('life_hreatening_value');
                    echo $this->Form->control('prolonged_hospitalisation_null');
                    echo $this->Form->control('prolonged_hospitalisation_value');
                    echo $this->Form->control('incapacitating_null');
                    echo $this->Form->control('incapacitating_value');
                    echo $this->Form->control('birth_defect_null');
                    echo $this->Form->control('birth_defect_value');
                    echo $this->Form->control('other_medical_null');
                    echo $this->Form->control('other_medical_value');
                    echo $this->Form->control('reaction_outcome_null');
                    echo $this->Form->control('reaction_outcome_value');
                    echo $this->Form->control('medical_confirmation_null');
                    echo $this->Form->control('medical_confirmation_value');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
