<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Aco $aco
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Aco'), ['action' => 'edit', $aco->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Aco'), ['action' => 'delete', $aco->id], ['confirm' => __('Are you sure you want to delete # {0}?', $aco->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Acos'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Aco'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="acos view content">
            <h3><?= h($aco->id) ?></h3>
            <table>
                <tr>
                    <th><?= __('Parent Aco') ?></th>
                    <td><?= $aco->has('parent_aco') ? $this->Html->link($aco->parent_aco->id, ['controller' => 'Acos', 'action' => 'view', $aco->parent_aco->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Model') ?></th>
                    <td><?= h($aco->model) ?></td>
                </tr>
                <tr>
                    <th><?= __('Alias') ?></th>
                    <td><?= h($aco->alias) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($aco->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Foreign Key') ?></th>
                    <td><?= $aco->foreign_key === null ? '' : $this->Number->format($aco->foreign_key) ?></td>
                </tr>
                <tr>
                    <th><?= __('Lft') ?></th>
                    <td><?= $aco->lft === null ? '' : $this->Number->format($aco->lft) ?></td>
                </tr>
                <tr>
                    <th><?= __('Rght') ?></th>
                    <td><?= $aco->rght === null ? '' : $this->Number->format($aco->rght) ?></td>
                </tr>
            </table>
            <div class="related">
                <h4><?= __('Related Aros') ?></h4>
                <?php if (!empty($aco->aros)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Id') ?></th>
                            <th><?= __('Parent Id') ?></th>
                            <th><?= __('Model') ?></th>
                            <th><?= __('Foreign Key') ?></th>
                            <th><?= __('Alias') ?></th>
                            <th><?= __('Lft') ?></th>
                            <th><?= __('Rght') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($aco->aros as $aros) : ?>
                        <tr>
                            <td><?= h($aros->id) ?></td>
                            <td><?= h($aros->parent_id) ?></td>
                            <td><?= h($aros->model) ?></td>
                            <td><?= h($aros->foreign_key) ?></td>
                            <td><?= h($aros->alias) ?></td>
                            <td><?= h($aros->lft) ?></td>
                            <td><?= h($aros->rght) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'Aros', 'action' => 'view', $aros->id]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'Aros', 'action' => 'edit', $aros->id]) ?>
                                <?= $this->Form->postLink(__('Delete'), ['controller' => 'Aros', 'action' => 'delete', $aros->id], ['confirm' => __('Are you sure you want to delete # {0}?', $aros->id)]) ?>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </table>
                </div>
                <?php endif; ?>
            </div>
            <div class="related">
                <h4><?= __('Related Acos') ?></h4>
                <?php if (!empty($aco->child_acos)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Id') ?></th>
                            <th><?= __('Parent Id') ?></th>
                            <th><?= __('Model') ?></th>
                            <th><?= __('Foreign Key') ?></th>
                            <th><?= __('Alias') ?></th>
                            <th><?= __('Lft') ?></th>
                            <th><?= __('Rght') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($aco->child_acos as $childAcos) : ?>
                        <tr>
                            <td><?= h($childAcos->id) ?></td>
                            <td><?= h($childAcos->parent_id) ?></td>
                            <td><?= h($childAcos->model) ?></td>
                            <td><?= h($childAcos->foreign_key) ?></td>
                            <td><?= h($childAcos->alias) ?></td>
                            <td><?= h($childAcos->lft) ?></td>
                            <td><?= h($childAcos->rght) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'Acos', 'action' => 'view', $childAcos->id]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'Acos', 'action' => 'edit', $childAcos->id]) ?>
                                <?= $this->Form->postLink(__('Delete'), ['controller' => 'Acos', 'action' => 'delete', $childAcos->id], ['confirm' => __('Are you sure you want to delete # {0}?', $childAcos->id)]) ?>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </table>
                </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
</div>
