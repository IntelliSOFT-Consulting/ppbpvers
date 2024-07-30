<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\ListOfDevice $listOfDevice
 * @var string[]|\Cake\Collection\CollectionInterface $devices
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $listOfDevice->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $listOfDevice->id), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List List Of Devices'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="listOfDevices form content">
            <?= $this->Form->create($listOfDevice) ?>
            <fieldset>
                <legend><?= __('Edit List Of Device') ?></legend>
                <?php
                    echo $this->Form->control('device_id', ['options' => $devices, 'empty' => true]);
                    echo $this->Form->control('brand_name');
                    echo $this->Form->control('serial_no');
                    echo $this->Form->control('common_name');
                    echo $this->Form->control('manufacturer');
                    echo $this->Form->control('manufacture_date');
                    echo $this->Form->control('expiry_date');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
