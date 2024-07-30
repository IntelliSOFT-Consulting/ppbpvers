<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\Pqmp> $pqmps
 */
?>
<div class="pqmps index content">
    <?= $this->Html->link(__('New Pqmp'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Pqmps') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('user_id') ?></th>
                    <th><?= $this->Paginator->sort('pqmp_id') ?></th>
                    <th><?= $this->Paginator->sort('county_id') ?></th>
                    <th><?= $this->Paginator->sort('sub_county_id') ?></th>
                    <th><?= $this->Paginator->sort('country_id') ?></th>
                    <th><?= $this->Paginator->sort('designation_id') ?></th>
                    <th><?= $this->Paginator->sort('reference_no') ?></th>
                    <th><?= $this->Paginator->sort('facility_name') ?></th>
                    <th><?= $this->Paginator->sort('facility_code') ?></th>
                    <th><?= $this->Paginator->sort('facility_address') ?></th>
                    <th><?= $this->Paginator->sort('facility_phone') ?></th>
                    <th><?= $this->Paginator->sort('brand_name') ?></th>
                    <th><?= $this->Paginator->sort('generic_name') ?></th>
                    <th><?= $this->Paginator->sort('batch_number') ?></th>
                    <th><?= $this->Paginator->sort('manufacture_date') ?></th>
                    <th><?= $this->Paginator->sort('expiry_date') ?></th>
                    <th><?= $this->Paginator->sort('receipt_date') ?></th>
                    <th><?= $this->Paginator->sort('name_of_manufacturer') ?></th>
                    <th><?= $this->Paginator->sort('country_of_origin') ?></th>
                    <th><?= $this->Paginator->sort('supplier_name') ?></th>
                    <th><?= $this->Paginator->sort('supplier_address') ?></th>
                    <th><?= $this->Paginator->sort('product_formulation') ?></th>
                    <th><?= $this->Paginator->sort('product_formulation_specify') ?></th>
                    <th><?= $this->Paginator->sort('colour_change') ?></th>
                    <th><?= $this->Paginator->sort('separating') ?></th>
                    <th><?= $this->Paginator->sort('powdering') ?></th>
                    <th><?= $this->Paginator->sort('caking') ?></th>
                    <th><?= $this->Paginator->sort('moulding') ?></th>
                    <th><?= $this->Paginator->sort('odour_change') ?></th>
                    <th><?= $this->Paginator->sort('mislabeling') ?></th>
                    <th><?= $this->Paginator->sort('incomplete_pack') ?></th>
                    <th><?= $this->Paginator->sort('therapeutic_ineffectiveness') ?></th>
                    <th><?= $this->Paginator->sort('particulate_matter') ?></th>
                    <th><?= $this->Paginator->sort('complaint_other') ?></th>
                    <th><?= $this->Paginator->sort('require_refrigeration') ?></th>
                    <th><?= $this->Paginator->sort('product_at_facility') ?></th>
                    <th><?= $this->Paginator->sort('returned_by_client') ?></th>
                    <th><?= $this->Paginator->sort('stored_to_recommendations') ?></th>
                    <th><?= $this->Paginator->sort('reporter_name') ?></th>
                    <th><?= $this->Paginator->sort('reporter_email') ?></th>
                    <th><?= $this->Paginator->sort('reporter_phone') ?></th>
                    <th><?= $this->Paginator->sort('contact_number') ?></th>
                    <th><?= $this->Paginator->sort('adverse_reaction') ?></th>
                    <th><?= $this->Paginator->sort('medication_error') ?></th>
                    <th><?= $this->Paginator->sort('emails') ?></th>
                    <th><?= $this->Paginator->sort('submitted') ?></th>
                    <th><?= $this->Paginator->sort('submitted_date') ?></th>
                    <th><?= $this->Paginator->sort('active') ?></th>
                    <th><?= $this->Paginator->sort('device') ?></th>
                    <th><?= $this->Paginator->sort('copied') ?></th>
                    <th><?= $this->Paginator->sort('archived') ?></th>
                    <th><?= $this->Paginator->sort('archived_date') ?></th>
                    <th><?= $this->Paginator->sort('notified') ?></th>
                    <th><?= $this->Paginator->sort('deleted') ?></th>
                    <th><?= $this->Paginator->sort('deleted_date') ?></th>
                    <th><?= $this->Paginator->sort('created') ?></th>
                    <th><?= $this->Paginator->sort('modified') ?></th>
                    <th><?= $this->Paginator->sort('medicinal_product') ?></th>
                    <th><?= $this->Paginator->sort('blood_products') ?></th>
                    <th><?= $this->Paginator->sort('herbal_product') ?></th>
                    <th><?= $this->Paginator->sort('medical_device') ?></th>
                    <th><?= $this->Paginator->sort('cosmeceuticals') ?></th>
                    <th><?= $this->Paginator->sort('product_other') ?></th>
                    <th><?= $this->Paginator->sort('product_specify') ?></th>
                    <th><?= $this->Paginator->sort('product_vaccine') ?></th>
                    <th><?= $this->Paginator->sort('packaging') ?></th>
                    <th><?= $this->Paginator->sort('labelling') ?></th>
                    <th><?= $this->Paginator->sort('sampling') ?></th>
                    <th><?= $this->Paginator->sort('mechanism') ?></th>
                    <th><?= $this->Paginator->sort('electrical') ?></th>
                    <th><?= $this->Paginator->sort('device_data') ?></th>
                    <th><?= $this->Paginator->sort('software') ?></th>
                    <th><?= $this->Paginator->sort('environmental') ?></th>
                    <th><?= $this->Paginator->sort('failure_to_calibrate') ?></th>
                    <th><?= $this->Paginator->sort('results') ?></th>
                    <th><?= $this->Paginator->sort('readings') ?></th>
                    <th><?= $this->Paginator->sort('reporter_date') ?></th>
                    <th><?= $this->Paginator->sort('person_submitting') ?></th>
                    <th><?= $this->Paginator->sort('reporter_name_diff') ?></th>
                    <th><?= $this->Paginator->sort('reporter_designation_diff') ?></th>
                    <th><?= $this->Paginator->sort('reporter_email_diff') ?></th>
                    <th><?= $this->Paginator->sort('reporter_phone_diff') ?></th>
                    <th><?= $this->Paginator->sort('reporter_date_diff') ?></th>
                    <th><?= $this->Paginator->sort('assigned_to') ?></th>
                    <th><?= $this->Paginator->sort('assigned_by') ?></th>
                    <th><?= $this->Paginator->sort('assigned_date') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($pqmps as $pqmp): ?>
                <tr>
                    <td><?= $this->Number->format($pqmp->id) ?></td>
                    <td><?= $pqmp->has('user') ? $this->Html->link($pqmp->user->name, ['controller' => 'Users', 'action' => 'view', $pqmp->user->id]) : '' ?></td>
                    <td><?= $pqmp->pqmp_id === null ? '' : $this->Number->format($pqmp->pqmp_id) ?></td>
                    <td><?= $pqmp->has('county') ? $this->Html->link($pqmp->county->id, ['controller' => 'Counties', 'action' => 'view', $pqmp->county->id]) : '' ?></td>
                    <td><?= $pqmp->has('sub_county') ? $this->Html->link($pqmp->sub_county->id, ['controller' => 'SubCounties', 'action' => 'view', $pqmp->sub_county->id]) : '' ?></td>
                    <td><?= $pqmp->has('country') ? $this->Html->link($pqmp->country->name, ['controller' => 'Countries', 'action' => 'view', $pqmp->country->id]) : '' ?></td>
                    <td><?= $pqmp->has('designation') ? $this->Html->link($pqmp->designation->name, ['controller' => 'Designations', 'action' => 'view', $pqmp->designation->id]) : '' ?></td>
                    <td><?= h($pqmp->reference_no) ?></td>
                    <td><?= h($pqmp->facility_name) ?></td>
                    <td><?= h($pqmp->facility_code) ?></td>
                    <td><?= h($pqmp->facility_address) ?></td>
                    <td><?= h($pqmp->facility_phone) ?></td>
                    <td><?= h($pqmp->brand_name) ?></td>
                    <td><?= h($pqmp->generic_name) ?></td>
                    <td><?= h($pqmp->batch_number) ?></td>
                    <td><?= h($pqmp->manufacture_date) ?></td>
                    <td><?= h($pqmp->expiry_date) ?></td>
                    <td><?= h($pqmp->receipt_date) ?></td>
                    <td><?= h($pqmp->name_of_manufacturer) ?></td>
                    <td><?= h($pqmp->country_of_origin) ?></td>
                    <td><?= h($pqmp->supplier_name) ?></td>
                    <td><?= h($pqmp->supplier_address) ?></td>
                    <td><?= h($pqmp->product_formulation) ?></td>
                    <td><?= h($pqmp->product_formulation_specify) ?></td>
                    <td><?= h($pqmp->colour_change) ?></td>
                    <td><?= h($pqmp->separating) ?></td>
                    <td><?= h($pqmp->powdering) ?></td>
                    <td><?= h($pqmp->caking) ?></td>
                    <td><?= h($pqmp->moulding) ?></td>
                    <td><?= h($pqmp->odour_change) ?></td>
                    <td><?= h($pqmp->mislabeling) ?></td>
                    <td><?= h($pqmp->incomplete_pack) ?></td>
                    <td><?= h($pqmp->therapeutic_ineffectiveness) ?></td>
                    <td><?= h($pqmp->particulate_matter) ?></td>
                    <td><?= h($pqmp->complaint_other) ?></td>
                    <td><?= h($pqmp->require_refrigeration) ?></td>
                    <td><?= h($pqmp->product_at_facility) ?></td>
                    <td><?= h($pqmp->returned_by_client) ?></td>
                    <td><?= h($pqmp->stored_to_recommendations) ?></td>
                    <td><?= h($pqmp->reporter_name) ?></td>
                    <td><?= h($pqmp->reporter_email) ?></td>
                    <td><?= h($pqmp->reporter_phone) ?></td>
                    <td><?= h($pqmp->contact_number) ?></td>
                    <td><?= h($pqmp->adverse_reaction) ?></td>
                    <td><?= h($pqmp->medication_error) ?></td>
                    <td><?= $pqmp->emails === null ? '' : $this->Number->format($pqmp->emails) ?></td>
                    <td><?= $pqmp->submitted === null ? '' : $this->Number->format($pqmp->submitted) ?></td>
                    <td><?= h($pqmp->submitted_date) ?></td>
                    <td><?= h($pqmp->active) ?></td>
                    <td><?= $pqmp->device === null ? '' : $this->Number->format($pqmp->device) ?></td>
                    <td><?= $pqmp->copied === null ? '' : $this->Number->format($pqmp->copied) ?></td>
                    <td><?= $pqmp->archived === null ? '' : $this->Number->format($pqmp->archived) ?></td>
                    <td><?= h($pqmp->archived_date) ?></td>
                    <td><?= $pqmp->notified === null ? '' : $this->Number->format($pqmp->notified) ?></td>
                    <td><?= $pqmp->deleted === null ? '' : $this->Number->format($pqmp->deleted) ?></td>
                    <td><?= h($pqmp->deleted_date) ?></td>
                    <td><?= h($pqmp->created) ?></td>
                    <td><?= h($pqmp->modified) ?></td>
                    <td><?= h($pqmp->medicinal_product) ?></td>
                    <td><?= h($pqmp->blood_products) ?></td>
                    <td><?= h($pqmp->herbal_product) ?></td>
                    <td><?= h($pqmp->medical_device) ?></td>
                    <td><?= h($pqmp->cosmeceuticals) ?></td>
                    <td><?= h($pqmp->product_other) ?></td>
                    <td><?= h($pqmp->product_specify) ?></td>
                    <td><?= h($pqmp->product_vaccine) ?></td>
                    <td><?= h($pqmp->packaging) ?></td>
                    <td><?= h($pqmp->labelling) ?></td>
                    <td><?= h($pqmp->sampling) ?></td>
                    <td><?= h($pqmp->mechanism) ?></td>
                    <td><?= h($pqmp->electrical) ?></td>
                    <td><?= h($pqmp->device_data) ?></td>
                    <td><?= h($pqmp->software) ?></td>
                    <td><?= h($pqmp->environmental) ?></td>
                    <td><?= h($pqmp->failure_to_calibrate) ?></td>
                    <td><?= h($pqmp->results) ?></td>
                    <td><?= h($pqmp->readings) ?></td>
                    <td><?= h($pqmp->reporter_date) ?></td>
                    <td><?= h($pqmp->person_submitting) ?></td>
                    <td><?= h($pqmp->reporter_name_diff) ?></td>
                    <td><?= $pqmp->reporter_designation_diff === null ? '' : $this->Number->format($pqmp->reporter_designation_diff) ?></td>
                    <td><?= h($pqmp->reporter_email_diff) ?></td>
                    <td><?= h($pqmp->reporter_phone_diff) ?></td>
                    <td><?= h($pqmp->reporter_date_diff) ?></td>
                    <td><?= $pqmp->assigned_to === null ? '' : $this->Number->format($pqmp->assigned_to) ?></td>
                    <td><?= $pqmp->assigned_by === null ? '' : $this->Number->format($pqmp->assigned_by) ?></td>
                    <td><?= h($pqmp->assigned_date) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $pqmp->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $pqmp->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $pqmp->id], ['confirm' => __('Are you sure you want to delete # {0}?', $pqmp->id)]) ?>
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
