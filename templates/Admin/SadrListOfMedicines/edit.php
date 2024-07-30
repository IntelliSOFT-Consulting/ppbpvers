<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\SadrListOfMedicine $sadrListOfMedicine
 * @var string[]|\Cake\Collection\CollectionInterface $sadrs
 * @var string[]|\Cake\Collection\CollectionInterface $sadrFollowups
 * @var string[]|\Cake\Collection\CollectionInterface $doses
 * @var string[]|\Cake\Collection\CollectionInterface $routes
 * @var string[]|\Cake\Collection\CollectionInterface $frequencies
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $sadrListOfMedicine->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $sadrListOfMedicine->id), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Sadr List Of Medicines'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="sadrListOfMedicines form content">
            <?= $this->Form->create($sadrListOfMedicine) ?>
            <fieldset>
                <legend><?= __('Edit Sadr List Of Medicine') ?></legend>
                <?php
                    echo $this->Form->control('sadr_id', ['options' => $sadrs, 'empty' => true]);
                    echo $this->Form->control('sadr_followup_id', ['options' => $sadrFollowups, 'empty' => true]);
                    echo $this->Form->control('dose_id', ['options' => $doses, 'empty' => true]);
                    echo $this->Form->control('route_id', ['options' => $routes, 'empty' => true]);
                    echo $this->Form->control('frequency_id', ['options' => $frequencies, 'empty' => true]);
                    echo $this->Form->control('frequency_other');
                    echo $this->Form->control('drug_name');
                    echo $this->Form->control('brand_name');
                    echo $this->Form->control('batch_no');
                    echo $this->Form->control('manufacturer');
                    echo $this->Form->control('dose');
                    echo $this->Form->control('start_date', ['empty' => true]);
                    echo $this->Form->control('stop_date', ['empty' => true]);
                    echo $this->Form->control('indication');
                    echo $this->Form->control('suspected_drug');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
