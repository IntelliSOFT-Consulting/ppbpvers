<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\AutoDrug $autoDrug
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $autoDrug->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $autoDrug->id), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Auto Drugs'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="autoDrugs form content">
            <?= $this->Form->create($autoDrug) ?>
            <fieldset>
                <legend><?= __('Edit Auto Drug') ?></legend>
                <?php
                    echo $this->Form->control('drugName');
                    echo $this->Form->control('drugCode');
                    echo $this->Form->control('isGeneric');
                    echo $this->Form->control('isPreferred');
                    echo $this->Form->control('countryOfSales');
                    echo $this->Form->control('activeIngredients');
                    echo $this->Form->control('atcs');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
