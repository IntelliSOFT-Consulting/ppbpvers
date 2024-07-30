<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\ConcomittantDrug $concomittantDrug
 * @var string[]|\Cake\Collection\CollectionInterface $saes
 * @var string[]|\Cake\Collection\CollectionInterface $routes
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $concomittantDrug->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $concomittantDrug->id), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Concomittant Drugs'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="concomittantDrugs form content">
            <?= $this->Form->create($concomittantDrug) ?>
            <fieldset>
                <legend><?= __('Edit Concomittant Drug') ?></legend>
                <?php
                    echo $this->Form->control('sae_id', ['options' => $saes, 'empty' => true]);
                    echo $this->Form->control('generic_name');
                    echo $this->Form->control('dose');
                    echo $this->Form->control('route_id', ['options' => $routes, 'empty' => true]);
                    echo $this->Form->control('indication');
                    echo $this->Form->control('date_from', ['empty' => true]);
                    echo $this->Form->control('date_to', ['empty' => true]);
                    echo $this->Form->control('description');
                    echo $this->Form->control('deleted');
                    echo $this->Form->control('deleted_date', ['empty' => true]);
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
