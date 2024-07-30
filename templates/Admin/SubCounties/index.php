<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\SubCounty> $subCounties
 */
?>
<div class="subCounties index content">
    <?= $this->Html->link(__('New Sub County'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Sub Counties') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('county_id') ?></th>
                    <th><?= $this->Paginator->sort('sub_county_name') ?></th>
                    <th><?= $this->Paginator->sort('county_name') ?></th>
                    <th><?= $this->Paginator->sort('Province') ?></th>
                    <th><?= $this->Paginator->sort('Pop_2009') ?></th>
                    <th><?= $this->Paginator->sort('RegVoters') ?></th>
                    <th><?= $this->Paginator->sort('AreaSqKms') ?></th>
                    <th><?= $this->Paginator->sort('CAWards') ?></th>
                    <th><?= $this->Paginator->sort('MainEthnicGroup') ?></th>
                    <th><?= $this->Paginator->sort('created') ?></th>
                    <th><?= $this->Paginator->sort('modified') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($subCounties as $subCounty): ?>
                <tr>
                    <td><?= $this->Number->format($subCounty->id) ?></td>
                    <td><?= $subCounty->has('county') ? $this->Html->link($subCounty->county->id, ['controller' => 'Counties', 'action' => 'view', $subCounty->county->id]) : '' ?></td>
                    <td><?= h($subCounty->sub_county_name) ?></td>
                    <td><?= h($subCounty->county_name) ?></td>
                    <td><?= h($subCounty->Province) ?></td>
                    <td><?= h($subCounty->Pop_2009) ?></td>
                    <td><?= h($subCounty->RegVoters) ?></td>
                    <td><?= h($subCounty->AreaSqKms) ?></td>
                    <td><?= h($subCounty->CAWards) ?></td>
                    <td><?= h($subCounty->MainEthnicGroup) ?></td>
                    <td><?= h($subCounty->created) ?></td>
                    <td><?= h($subCounty->modified) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $subCounty->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $subCounty->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $subCounty->id], ['confirm' => __('Are you sure you want to delete # {0}?', $subCounty->id)]) ?>
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
