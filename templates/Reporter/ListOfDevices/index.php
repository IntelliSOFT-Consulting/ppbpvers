<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\ListOfDevice> $listOfDevices
 */
?>
<div class="listOfDevices index content">
    <?= $this->Html->link(__('New List Of Device'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('List Of Devices') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('device_id') ?></th>
                    <th><?= $this->Paginator->sort('brand_name') ?></th>
                    <th><?= $this->Paginator->sort('serial_no') ?></th>
                    <th><?= $this->Paginator->sort('common_name') ?></th>
                    <th><?= $this->Paginator->sort('manufacturer') ?></th>
                    <th><?= $this->Paginator->sort('manufacture_date') ?></th>
                    <th><?= $this->Paginator->sort('expiry_date') ?></th>
                    <th><?= $this->Paginator->sort('created') ?></th>
                    <th><?= $this->Paginator->sort('modified') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($listOfDevices as $listOfDevice): ?>
                <tr>
                    <td><?= $this->Number->format($listOfDevice->id) ?></td>
                    <td><?= $listOfDevice->has('device') ? $this->Html->link($listOfDevice->device->id, ['controller' => 'Devices', 'action' => 'view', $listOfDevice->device->id]) : '' ?></td>
                    <td><?= h($listOfDevice->brand_name) ?></td>
                    <td><?= h($listOfDevice->serial_no) ?></td>
                    <td><?= h($listOfDevice->common_name) ?></td>
                    <td><?= h($listOfDevice->manufacturer) ?></td>
                    <td><?= h($listOfDevice->manufacture_date) ?></td>
                    <td><?= h($listOfDevice->expiry_date) ?></td>
                    <td><?= h($listOfDevice->created) ?></td>
                    <td><?= h($listOfDevice->modified) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $listOfDevice->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $listOfDevice->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $listOfDevice->id], ['confirm' => __('Are you sure you want to delete # {0}?', $listOfDevice->id)]) ?>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(__('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')) ?></p>
    </div>
</div>
