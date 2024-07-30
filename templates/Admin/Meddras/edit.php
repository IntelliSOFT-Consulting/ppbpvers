<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Meddra $meddra
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $meddra->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $meddra->id), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Meddras'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="meddras form content">
            <?= $this->Form->create($meddra) ?>
            <fieldset>
                <legend><?= __('Edit Meddra') ?></legend>
                <?php
                    echo $this->Form->control('llt_name');
                    echo $this->Form->control('pt_code');
                    echo $this->Form->control('llt_whoart_code');
                    echo $this->Form->control('llt_harts_code');
                    echo $this->Form->control('llt_costart_sym');
                    echo $this->Form->control('llt_icd9_code');
                    echo $this->Form->control('llt_icd9cm_code');
                    echo $this->Form->control('llt_icd10_code');
                    echo $this->Form->control('llt_currency');
                    echo $this->Form->control('llt_jart_code');
                    echo $this->Form->control('COL_12');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
