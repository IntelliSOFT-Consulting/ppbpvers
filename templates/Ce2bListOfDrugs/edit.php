<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Ce2bListOfDrug $ce2bListOfDrug
 * @var string[]|\Cake\Collection\CollectionInterface $ce2bs
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
                ['action' => 'delete', $ce2bListOfDrug->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $ce2bListOfDrug->id), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Ce2b List Of Drugs'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="ce2bListOfDrugs form content">
            <?= $this->Form->create($ce2bListOfDrug) ?>
            <fieldset>
                <legend><?= __('Edit Ce2b List Of Drug') ?></legend>
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
