<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\DrugDictionary $drugDictionary
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('List Drug Dictionaries'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="drugDictionaries form content">
            <?= $this->Form->create($drugDictionary) ?>
            <fieldset>
                <legend><?= __('Add Drug Dictionary') ?></legend>
                <?php
                    echo $this->Form->control('MedId');
                    echo $this->Form->control('drug_record_number');
                    echo $this->Form->control('sequence_no_1');
                    echo $this->Form->control('sequence_no_2');
                    echo $this->Form->control('sequence_no_3');
                    echo $this->Form->control('sequence_no_4');
                    echo $this->Form->control('trade_name');
                    echo $this->Form->control('generic');
                    echo $this->Form->control('drug_name');
                    echo $this->Form->control('health_program');
                    echo $this->Form->control('name_specifier');
                    echo $this->Form->control('market_authorization_number');
                    echo $this->Form->control('market_authorization_date');
                    echo $this->Form->control('market_authorization_withdrawal_date');
                    echo $this->Form->control('country');
                    echo $this->Form->control('company');
                    echo $this->Form->control('marketing_authorization_holder');
                    echo $this->Form->control('source_code');
                    echo $this->Form->control('source_country');
                    echo $this->Form->control('source_year');
                    echo $this->Form->control('product_type');
                    echo $this->Form->control('product_group');
                    echo $this->Form->control('create_date');
                    echo $this->Form->control('date_changed');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
