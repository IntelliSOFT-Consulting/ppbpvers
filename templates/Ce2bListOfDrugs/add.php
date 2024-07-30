<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Ce2bListOfDrug $ce2bListOfDrug
 * @var \Cake\Collection\CollectionInterface|string[] $ce2bs
 * @var \Cake\Collection\CollectionInterface|string[] $doses
 * @var \Cake\Collection\CollectionInterface|string[] $routes
 * @var \Cake\Collection\CollectionInterface|string[] $frequencies
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('List Ce2b List Of Drugs'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="ce2bListOfDrugs form content">
            <?= $this->Form->create($ce2bListOfDrug) ?>
            <fieldset>
                <legend><?= __('Add Ce2b List Of Drug') ?></legend>
                <?php
                    echo $this->Form->control('ce2b_id', ['options' => $ce2bs, 'empty' => true]);
                    echo $this->Form->control('ce2b_followup_id');
                    echo $this->Form->control('dose_id', ['options' => $doses, 'empty' => true]);
                    echo $this->Form->control('route_id', ['options' => $routes, 'empty' => true]);
                    echo $this->Form->control('frequency_id', ['options' => $frequencies, 'empty' => true]);
                    echo $this->Form->control('frequency_id_other');
                    echo $this->Form->control('drug_name');
                    echo $this->Form->control('brand_name');
                    echo $this->Form->control('batch_no');
                    echo $this->Form->control('manufacturer');
                    echo $this->Form->control('dose');
                    echo $this->Form->control('start_date', ['empty' => true]);
                    echo $this->Form->control('stop_date', ['empty' => true]);
                    echo $this->Form->control('indication');
                    echo $this->Form->control('suspected_drug');
                    echo $this->Form->control('route');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
