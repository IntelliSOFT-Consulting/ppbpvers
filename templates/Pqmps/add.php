<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Pqmp $pqmp
 * @var \Cake\Collection\CollectionInterface|string[] $users
 * @var \Cake\Collection\CollectionInterface|string[] $counties
 * @var \Cake\Collection\CollectionInterface|string[] $subCounties
 * @var \Cake\Collection\CollectionInterface|string[] $countries
 * @var \Cake\Collection\CollectionInterface|string[] $designations
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('List Pqmps'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="pqmps form content">
            <?= $this->Form->create($pqmp) ?>
            <fieldset>
                <legend><?= __('Add Pqmp') ?></legend>
                <?php
                    echo $this->Form->control('user_id', ['options' => $users, 'empty' => true]);
                    echo $this->Form->control('pqmp_id');
                    echo $this->Form->control('county_id', ['options' => $counties, 'empty' => true]);
                    echo $this->Form->control('sub_county_id', ['options' => $subCounties, 'empty' => true]);
                    echo $this->Form->control('country_id', ['options' => $countries, 'empty' => true]);
                    echo $this->Form->control('designation_id', ['options' => $designations, 'empty' => true]);
                    echo $this->Form->control('reference_no');
                    echo $this->Form->control('facility_name');
                    echo $this->Form->control('facility_code');
                    echo $this->Form->control('facility_address');
                    echo $this->Form->control('facility_phone');
                    echo $this->Form->control('brand_name');
                    echo $this->Form->control('generic_name');
                    echo $this->Form->control('batch_number');
                    echo $this->Form->control('manufacture_date');
                    echo $this->Form->control('expiry_date', ['empty' => true]);
                    echo $this->Form->control('receipt_date', ['empty' => true]);
                    echo $this->Form->control('name_of_manufacturer');
                    echo $this->Form->control('country_of_origin');
                    echo $this->Form->control('supplier_name');
                    echo $this->Form->control('supplier_address');
                    echo $this->Form->control('product_formulation');
                    echo $this->Form->control('product_formulation_specify');
                    echo $this->Form->control('colour_change');
                    echo $this->Form->control('separating');
                    echo $this->Form->control('powdering');
                    echo $this->Form->control('caking');
                    echo $this->Form->control('moulding');
                    echo $this->Form->control('odour_change');
                    echo $this->Form->control('mislabeling');
                    echo $this->Form->control('incomplete_pack');
                    echo $this->Form->control('therapeutic_ineffectiveness');
                    echo $this->Form->control('particulate_matter');
                    echo $this->Form->control('complaint_other');
                    echo $this->Form->control('complaint_other_specify');
                    echo $this->Form->control('complaint_description');
                    echo $this->Form->control('require_refrigeration');
                    echo $this->Form->control('product_at_facility');
                    echo $this->Form->control('returned_by_client');
                    echo $this->Form->control('stored_to_recommendations');
                    echo $this->Form->control('other_details');
                    echo $this->Form->control('comments');
                    echo $this->Form->control('reporter_name');
                    echo $this->Form->control('reporter_email');
                    echo $this->Form->control('reporter_phone');
                    echo $this->Form->control('contact_number');
                    echo $this->Form->control('adverse_reaction');
                    echo $this->Form->control('reaction_comments');
                    echo $this->Form->control('medication_error');
                    echo $this->Form->control('emails');
                    echo $this->Form->control('submitted');
                    echo $this->Form->control('submitted_date', ['empty' => true]);
                    echo $this->Form->control('active');
                    echo $this->Form->control('device');
                    echo $this->Form->control('copied');
                    echo $this->Form->control('archived');
                    echo $this->Form->control('archived_date', ['empty' => true]);
                    echo $this->Form->control('notified');
                    echo $this->Form->control('deleted');
                    echo $this->Form->control('deleted_date', ['empty' => true]);
                    echo $this->Form->control('medicinal_product');
                    echo $this->Form->control('blood_products');
                    echo $this->Form->control('herbal_product');
                    echo $this->Form->control('medical_device');
                    echo $this->Form->control('cosmeceuticals');
                    echo $this->Form->control('product_other');
                    echo $this->Form->control('product_specify');
                    echo $this->Form->control('product_vaccine');
                    echo $this->Form->control('packaging');
                    echo $this->Form->control('labelling');
                    echo $this->Form->control('sampling');
                    echo $this->Form->control('mechanism');
                    echo $this->Form->control('electrical');
                    echo $this->Form->control('device_data');
                    echo $this->Form->control('software');
                    echo $this->Form->control('environmental');
                    echo $this->Form->control('failure_to_calibrate');
                    echo $this->Form->control('results');
                    echo $this->Form->control('readings');
                    echo $this->Form->control('cold_chain');
                    echo $this->Form->control('reporter_date', ['empty' => true]);
                    echo $this->Form->control('person_submitting');
                    echo $this->Form->control('reporter_name_diff');
                    echo $this->Form->control('reporter_designation_diff');
                    echo $this->Form->control('reporter_email_diff');
                    echo $this->Form->control('reporter_phone_diff');
                    echo $this->Form->control('reporter_date_diff', ['empty' => true]);
                    echo $this->Form->control('assigned_to');
                    echo $this->Form->control('assigned_by');
                    echo $this->Form->control('assigned_date', ['empty' => true]);
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
