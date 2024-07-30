<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Vaccine $vaccine
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Vaccine'), ['action' => 'edit', $vaccine->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Vaccine'), ['action' => 'delete', $vaccine->id], ['confirm' => __('Are you sure you want to delete # {0}?', $vaccine->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Vaccines'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Vaccine'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="vaccines view content">
            <h3><?= h($vaccine->id) ?></h3>
            <table>
                <tr>
                    <th><?= __('Vaccine Name') ?></th>
                    <td><?= h($vaccine->vaccine_name) ?></td>
                </tr>
                <tr>
                    <th><?= __('Health Program') ?></th>
                    <td><?= h($vaccine->health_program) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($vaccine->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Created') ?></th>
                    <td><?= h($vaccine->created) ?></td>
                </tr>
                <tr>
                    <th><?= __('Modified') ?></th>
                    <td><?= h($vaccine->modified) ?></td>
                </tr>
                <tr>
                    <th><?= __('Deleted Date') ?></th>
                    <td><?= h($vaccine->deleted_date) ?></td>
                </tr>
                <tr>
                    <th><?= __('Deleted') ?></th>
                    <td><?= $vaccine->deleted ? __('Yes') : __('No'); ?></td>
                </tr>
            </table>
            <div class="text">
                <strong><?= __('Description') ?></strong>
                <blockquote>
                    <?= $this->Text->autoParagraph(h($vaccine->description)); ?>
                </blockquote>
            </div>
            <div class="related">
                <h4><?= __('Related Aefi List Of Vaccines') ?></h4>
                <?php if (!empty($vaccine->aefi_list_of_vaccines)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Id') ?></th>
                            <th><?= __('Aefi Id') ?></th>
                            <th><?= __('Saefi Id') ?></th>
                            <th><?= __('Vaccine Id') ?></th>
                            <th><?= __('Vaccine Name') ?></th>
                            <th><?= __('Vaccination Date') ?></th>
                            <th><?= __('Vaccination Time') ?></th>
                            <th><?= __('Vaccine Manufacturer') ?></th>
                            <th><?= __('Vaccination Route') ?></th>
                            <th><?= __('Vaccination Site') ?></th>
                            <th><?= __('Dosage') ?></th>
                            <th><?= __('Icsr Code') ?></th>
                            <th><?= __('Batch Number') ?></th>
                            <th><?= __('Expiry Date') ?></th>
                            <th><?= __('Diluent Batch Number') ?></th>
                            <th><?= __('Diluent Manufacturer') ?></th>
                            <th><?= __('Diluent Expiry Date') ?></th>
                            <th><?= __('Suspected Drug') ?></th>
                            <th><?= __('Created') ?></th>
                            <th><?= __('Modified') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($vaccine->aefi_list_of_vaccines as $aefiListOfVaccines) : ?>
                        <tr>
                            <td><?= h($aefiListOfVaccines->id) ?></td>
                            <td><?= h($aefiListOfVaccines->aefi_id) ?></td>
                            <td><?= h($aefiListOfVaccines->saefi_id) ?></td>
                            <td><?= h($aefiListOfVaccines->vaccine_id) ?></td>
                            <td><?= h($aefiListOfVaccines->vaccine_name) ?></td>
                            <td><?= h($aefiListOfVaccines->vaccination_date) ?></td>
                            <td><?= h($aefiListOfVaccines->vaccination_time) ?></td>
                            <td><?= h($aefiListOfVaccines->vaccine_manufacturer) ?></td>
                            <td><?= h($aefiListOfVaccines->vaccination_route) ?></td>
                            <td><?= h($aefiListOfVaccines->vaccination_site) ?></td>
                            <td><?= h($aefiListOfVaccines->dosage) ?></td>
                            <td><?= h($aefiListOfVaccines->icsr_code) ?></td>
                            <td><?= h($aefiListOfVaccines->batch_number) ?></td>
                            <td><?= h($aefiListOfVaccines->expiry_date) ?></td>
                            <td><?= h($aefiListOfVaccines->diluent_batch_number) ?></td>
                            <td><?= h($aefiListOfVaccines->diluent_manufacturer) ?></td>
                            <td><?= h($aefiListOfVaccines->diluent_expiry_date) ?></td>
                            <td><?= h($aefiListOfVaccines->suspected_drug) ?></td>
                            <td><?= h($aefiListOfVaccines->created) ?></td>
                            <td><?= h($aefiListOfVaccines->modified) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'AefiListOfVaccines', 'action' => 'view', $aefiListOfVaccines->id]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'AefiListOfVaccines', 'action' => 'edit', $aefiListOfVaccines->id]) ?>
                                <?= $this->Form->postLink(__('Delete'), ['controller' => 'AefiListOfVaccines', 'action' => 'delete', $aefiListOfVaccines->id], ['confirm' => __('Are you sure you want to delete # {0}?', $aefiListOfVaccines->id)]) ?>
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
