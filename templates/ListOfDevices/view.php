<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\ListOfDevice $listOfDevice
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit List Of Device'), ['action' => 'edit', $listOfDevice->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete List Of Device'), ['action' => 'delete', $listOfDevice->id], ['confirm' => __('Are you sure you want to delete # {0}?', $listOfDevice->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List List Of Devices'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New List Of Device'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="listOfDevices view content">
            <h3><?= h($listOfDevice->id) ?></h3>
            <table>
                <tr>
                    <th><?= __('Device') ?></th>
                    <td><?= $listOfDevice->has('device') ? $this->Html->link($listOfDevice->device->id, ['controller' => 'Devices', 'action' => 'view', $listOfDevice->device->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Brand Name') ?></th>
                    <td><?= h($listOfDevice->brand_name) ?></td>
                </tr>
                <tr>
                    <th><?= __('Serial No') ?></th>
                    <td><?= h($listOfDevice->serial_no) ?></td>
                </tr>
                <tr>
                    <th><?= __('Common Name') ?></th>
                    <td><?= h($listOfDevice->common_name) ?></td>
                </tr>
                <tr>
                    <th><?= __('Manufacturer') ?></th>
                    <td><?= h($listOfDevice->manufacturer) ?></td>
                </tr>
                <tr>
                    <th><?= __('Manufacture Date') ?></th>
                    <td><?= h($listOfDevice->manufacture_date) ?></td>
                </tr>
                <tr>
                    <th><?= __('Expiry Date') ?></th>
                    <td><?= h($listOfDevice->expiry_date) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($listOfDevice->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Created') ?></th>
                    <td><?= h($listOfDevice->created) ?></td>
                </tr>
                <tr>
                    <th><?= __('Modified') ?></th>
                    <td><?= h($listOfDevice->modified) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
