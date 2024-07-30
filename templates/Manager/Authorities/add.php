<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Authority $authority
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('List Authorities'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="authorities form content">
            <?= $this->Form->create($authority) ?>
            <fieldset>
                <legend><?= __('Add Authority') ?></legend>
                <?php
                    echo $this->Form->control('mah_name');
                    echo $this->Form->control('mah_company_name');
                    echo $this->Form->control('mah_company_address');
                    echo $this->Form->control('mah_company_telephone');
                    echo $this->Form->control('mah_company_email');
                    echo $this->Form->control('product');
                    echo $this->Form->control('master_mah');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
