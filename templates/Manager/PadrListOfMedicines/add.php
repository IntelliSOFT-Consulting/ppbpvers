<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\PadrListOfMedicine $padrListOfMedicine
 * @var \Cake\Collection\CollectionInterface|string[] $padrs
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('List Padr List Of Medicines'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="padrListOfMedicines form content">
            <?= $this->Form->create($padrListOfMedicine) ?>
            <fieldset>
                <legend><?= __('Add Padr List Of Medicine') ?></legend>
                <?php
                    echo $this->Form->control('padr_id', ['options' => $padrs, 'empty' => true]);
                    echo $this->Form->control('product_name');
                    echo $this->Form->control('medicine_source');
                    echo $this->Form->control('manufacturer');
                    echo $this->Form->control('expiry_date');
                    echo $this->Form->control('start_date', ['empty' => true]);
                    echo $this->Form->control('end_date');
                    echo $this->Form->control('modifed', ['empty' => true]);
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
