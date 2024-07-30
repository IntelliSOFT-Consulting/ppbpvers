<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\MedicationProduct $medicationProduct
 * @var \Cake\Collection\CollectionInterface|string[] $medications
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('List Medication Products'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="medicationProducts form content">
            <?= $this->Form->create($medicationProduct) ?>
            <fieldset>
                <legend><?= __('Add Medication Product') ?></legend>
                <?php
                    echo $this->Form->control('medication_id', ['options' => $medications, 'empty' => true]);
                    echo $this->Form->control('generic_name_i');
                    echo $this->Form->control('product_name_i');
                    echo $this->Form->control('dosage_form_i');
                    echo $this->Form->control('dosage_i');
                    echo $this->Form->control('manufacturer_i');
                    echo $this->Form->control('strength_i');
                    echo $this->Form->control('container_i');
                    echo $this->Form->control('generic_name_ii');
                    echo $this->Form->control('product_name_ii');
                    echo $this->Form->control('dosage_form_ii');
                    echo $this->Form->control('dosage_ii');
                    echo $this->Form->control('manufacturer_ii');
                    echo $this->Form->control('strength_ii');
                    echo $this->Form->control('container_ii');
                    echo $this->Form->control('modifed', ['empty' => true]);
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
