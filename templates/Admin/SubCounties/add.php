<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\SubCounty $subCounty
 * @var \Cake\Collection\CollectionInterface|string[] $counties
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('List Sub Counties'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="subCounties form content">
            <?= $this->Form->create($subCounty) ?>
            <fieldset>
                <legend><?= __('Add Sub County') ?></legend>
                <?php
                    echo $this->Form->control('county_id', ['options' => $counties, 'empty' => true]);
                    echo $this->Form->control('sub_county_name');
                    echo $this->Form->control('county_name');
                    echo $this->Form->control('Province');
                    echo $this->Form->control('Pop_2009');
                    echo $this->Form->control('RegVoters');
                    echo $this->Form->control('AreaSqKms');
                    echo $this->Form->control('CAWards');
                    echo $this->Form->control('MainEthnicGroup');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
