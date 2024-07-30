<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\AefiListOfVaccine $aefiListOfVaccine
 * @var \Cake\Collection\CollectionInterface|string[] $aefis
 * @var \Cake\Collection\CollectionInterface|string[] $saefis
 * @var \Cake\Collection\CollectionInterface|string[] $vaccines
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('List Aefi List Of Vaccines'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="aefiListOfVaccines form content">
            <?= $this->Form->create($aefiListOfVaccine) ?>
            <fieldset>
                <legend><?= __('Add Aefi List Of Vaccine') ?></legend>
                <?php
                    echo $this->Form->control('aefi_id', ['options' => $aefis, 'empty' => true]);
                    echo $this->Form->control('saefi_id', ['options' => $saefis, 'empty' => true]);
                    echo $this->Form->control('vaccine_id', ['options' => $vaccines, 'empty' => true]);
                    echo $this->Form->control('vaccine_name');
                    echo $this->Form->control('vaccination_date', ['empty' => true]);
                    echo $this->Form->control('vaccination_time');
                    echo $this->Form->control('vaccine_manufacturer');
                    echo $this->Form->control('vaccination_route');
                    echo $this->Form->control('vaccination_site');
                    echo $this->Form->control('dosage');
                    echo $this->Form->control('icsr_code');
                    echo $this->Form->control('batch_number');
                    echo $this->Form->control('expiry_date', ['empty' => true]);
                    echo $this->Form->control('diluent_batch_number');
                    echo $this->Form->control('diluent_manufacturer');
                    echo $this->Form->control('diluent_expiry_date', ['empty' => true]);
                    echo $this->Form->control('suspected_drug');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
