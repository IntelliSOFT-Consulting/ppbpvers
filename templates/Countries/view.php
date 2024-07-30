<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Country $country
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Country'), ['action' => 'edit', $country->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Country'), ['action' => 'delete', $country->id], ['confirm' => __('Are you sure you want to delete # {0}?', $country->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Countries'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Country'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="countries view content">
            <h3><?= h($country->name) ?></h3>
            <table>
                <tr>
                    <th><?= __('Code') ?></th>
                    <td><?= h($country->code) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($country->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Created') ?></th>
                    <td><?= h($country->created) ?></td>
                </tr>
                <tr>
                    <th><?= __('Modified') ?></th>
                    <td><?= h($country->modified) ?></td>
                </tr>
            </table>
            <div class="text">
                <strong><?= __('Name') ?></strong>
                <blockquote>
                    <?= $this->Text->autoParagraph(h($country->name)); ?>
                </blockquote>
            </div>
            <div class="text">
                <strong><?= __('Name Fr') ?></strong>
                <blockquote>
                    <?= $this->Text->autoParagraph(h($country->name_fr)); ?>
                </blockquote>
            </div>
            <div class="related">
                <h4><?= __('Related Pqmps') ?></h4>
                <?php if (!empty($country->pqmps)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Id') ?></th>
                            <th><?= __('User Id') ?></th>
                            <th><?= __('Pqmp Id') ?></th>
                            <th><?= __('County Id') ?></th>
                            <th><?= __('Sub County Id') ?></th>
                            <th><?= __('Country Id') ?></th>
                            <th><?= __('Designation Id') ?></th>
                            <th><?= __('Reference No') ?></th>
                            <th><?= __('Facility Name') ?></th>
                            <th><?= __('Facility Code') ?></th>
                            <th><?= __('Facility Address') ?></th>
                            <th><?= __('Facility Phone') ?></th>
                            <th><?= __('Brand Name') ?></th>
                            <th><?= __('Generic Name') ?></th>
                            <th><?= __('Batch Number') ?></th>
                            <th><?= __('Manufacture Date') ?></th>
                            <th><?= __('Expiry Date') ?></th>
                            <th><?= __('Receipt Date') ?></th>
                            <th><?= __('Name Of Manufacturer') ?></th>
                            <th><?= __('Country Of Origin') ?></th>
                            <th><?= __('Supplier Name') ?></th>
                            <th><?= __('Supplier Address') ?></th>
                            <th><?= __('Product Formulation') ?></th>
                            <th><?= __('Product Formulation Specify') ?></th>
                            <th><?= __('Colour Change') ?></th>
                            <th><?= __('Separating') ?></th>
                            <th><?= __('Powdering') ?></th>
                            <th><?= __('Caking') ?></th>
                            <th><?= __('Moulding') ?></th>
                            <th><?= __('Odour Change') ?></th>
                            <th><?= __('Mislabeling') ?></th>
                            <th><?= __('Incomplete Pack') ?></th>
                            <th><?= __('Therapeutic Ineffectiveness') ?></th>
                            <th><?= __('Particulate Matter') ?></th>
                            <th><?= __('Complaint Other') ?></th>
                            <th><?= __('Complaint Other Specify') ?></th>
                            <th><?= __('Complaint Description') ?></th>
                            <th><?= __('Require Refrigeration') ?></th>
                            <th><?= __('Product At Facility') ?></th>
                            <th><?= __('Returned By Client') ?></th>
                            <th><?= __('Stored To Recommendations') ?></th>
                            <th><?= __('Other Details') ?></th>
                            <th><?= __('Comments') ?></th>
                            <th><?= __('Reporter Name') ?></th>
                            <th><?= __('Reporter Email') ?></th>
                            <th><?= __('Reporter Phone') ?></th>
                            <th><?= __('Contact Number') ?></th>
                            <th><?= __('Adverse Reaction') ?></th>
                            <th><?= __('Reaction Comments') ?></th>
                            <th><?= __('Medication Error') ?></th>
                            <th><?= __('Emails') ?></th>
                            <th><?= __('Submitted') ?></th>
                            <th><?= __('Submitted Date') ?></th>
                            <th><?= __('Active') ?></th>
                            <th><?= __('Device') ?></th>
                            <th><?= __('Copied') ?></th>
                            <th><?= __('Archived') ?></th>
                            <th><?= __('Archived Date') ?></th>
                            <th><?= __('Notified') ?></th>
                            <th><?= __('Deleted') ?></th>
                            <th><?= __('Deleted Date') ?></th>
                            <th><?= __('Created') ?></th>
                            <th><?= __('Modified') ?></th>
                            <th><?= __('Medicinal Product') ?></th>
                            <th><?= __('Blood Products') ?></th>
                            <th><?= __('Herbal Product') ?></th>
                            <th><?= __('Medical Device') ?></th>
                            <th><?= __('Cosmeceuticals') ?></th>
                            <th><?= __('Product Other') ?></th>
                            <th><?= __('Product Specify') ?></th>
                            <th><?= __('Product Vaccine') ?></th>
                            <th><?= __('Packaging') ?></th>
                            <th><?= __('Labelling') ?></th>
                            <th><?= __('Sampling') ?></th>
                            <th><?= __('Mechanism') ?></th>
                            <th><?= __('Electrical') ?></th>
                            <th><?= __('Device Data') ?></th>
                            <th><?= __('Software') ?></th>
                            <th><?= __('Environmental') ?></th>
                            <th><?= __('Failure To Calibrate') ?></th>
                            <th><?= __('Results') ?></th>
                            <th><?= __('Readings') ?></th>
                            <th><?= __('Cold Chain') ?></th>
                            <th><?= __('Reporter Date') ?></th>
                            <th><?= __('Person Submitting') ?></th>
                            <th><?= __('Reporter Name Diff') ?></th>
                            <th><?= __('Reporter Designation Diff') ?></th>
                            <th><?= __('Reporter Email Diff') ?></th>
                            <th><?= __('Reporter Phone Diff') ?></th>
                            <th><?= __('Reporter Date Diff') ?></th>
                            <th><?= __('Assigned To') ?></th>
                            <th><?= __('Assigned By') ?></th>
                            <th><?= __('Assigned Date') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($country->pqmps as $pqmps) : ?>
                        <tr>
                            <td><?= h($pqmps->id) ?></td>
                            <td><?= h($pqmps->user_id) ?></td>
                            <td><?= h($pqmps->pqmp_id) ?></td>
                            <td><?= h($pqmps->county_id) ?></td>
                            <td><?= h($pqmps->sub_county_id) ?></td>
                            <td><?= h($pqmps->country_id) ?></td>
                            <td><?= h($pqmps->designation_id) ?></td>
                            <td><?= h($pqmps->reference_no) ?></td>
                            <td><?= h($pqmps->facility_name) ?></td>
                            <td><?= h($pqmps->facility_code) ?></td>
                            <td><?= h($pqmps->facility_address) ?></td>
                            <td><?= h($pqmps->facility_phone) ?></td>
                            <td><?= h($pqmps->brand_name) ?></td>
                            <td><?= h($pqmps->generic_name) ?></td>
                            <td><?= h($pqmps->batch_number) ?></td>
                            <td><?= h($pqmps->manufacture_date) ?></td>
                            <td><?= h($pqmps->expiry_date) ?></td>
                            <td><?= h($pqmps->receipt_date) ?></td>
                            <td><?= h($pqmps->name_of_manufacturer) ?></td>
                            <td><?= h($pqmps->country_of_origin) ?></td>
                            <td><?= h($pqmps->supplier_name) ?></td>
                            <td><?= h($pqmps->supplier_address) ?></td>
                            <td><?= h($pqmps->product_formulation) ?></td>
                            <td><?= h($pqmps->product_formulation_specify) ?></td>
                            <td><?= h($pqmps->colour_change) ?></td>
                            <td><?= h($pqmps->separating) ?></td>
                            <td><?= h($pqmps->powdering) ?></td>
                            <td><?= h($pqmps->caking) ?></td>
                            <td><?= h($pqmps->moulding) ?></td>
                            <td><?= h($pqmps->odour_change) ?></td>
                            <td><?= h($pqmps->mislabeling) ?></td>
                            <td><?= h($pqmps->incomplete_pack) ?></td>
                            <td><?= h($pqmps->therapeutic_ineffectiveness) ?></td>
                            <td><?= h($pqmps->particulate_matter) ?></td>
                            <td><?= h($pqmps->complaint_other) ?></td>
                            <td><?= h($pqmps->complaint_other_specify) ?></td>
                            <td><?= h($pqmps->complaint_description) ?></td>
                            <td><?= h($pqmps->require_refrigeration) ?></td>
                            <td><?= h($pqmps->product_at_facility) ?></td>
                            <td><?= h($pqmps->returned_by_client) ?></td>
                            <td><?= h($pqmps->stored_to_recommendations) ?></td>
                            <td><?= h($pqmps->other_details) ?></td>
                            <td><?= h($pqmps->comments) ?></td>
                            <td><?= h($pqmps->reporter_name) ?></td>
                            <td><?= h($pqmps->reporter_email) ?></td>
                            <td><?= h($pqmps->reporter_phone) ?></td>
                            <td><?= h($pqmps->contact_number) ?></td>
                            <td><?= h($pqmps->adverse_reaction) ?></td>
                            <td><?= h($pqmps->reaction_comments) ?></td>
                            <td><?= h($pqmps->medication_error) ?></td>
                            <td><?= h($pqmps->emails) ?></td>
                            <td><?= h($pqmps->submitted) ?></td>
                            <td><?= h($pqmps->submitted_date) ?></td>
                            <td><?= h($pqmps->active) ?></td>
                            <td><?= h($pqmps->device) ?></td>
                            <td><?= h($pqmps->copied) ?></td>
                            <td><?= h($pqmps->archived) ?></td>
                            <td><?= h($pqmps->archived_date) ?></td>
                            <td><?= h($pqmps->notified) ?></td>
                            <td><?= h($pqmps->deleted) ?></td>
                            <td><?= h($pqmps->deleted_date) ?></td>
                            <td><?= h($pqmps->created) ?></td>
                            <td><?= h($pqmps->modified) ?></td>
                            <td><?= h($pqmps->medicinal_product) ?></td>
                            <td><?= h($pqmps->blood_products) ?></td>
                            <td><?= h($pqmps->herbal_product) ?></td>
                            <td><?= h($pqmps->medical_device) ?></td>
                            <td><?= h($pqmps->cosmeceuticals) ?></td>
                            <td><?= h($pqmps->product_other) ?></td>
                            <td><?= h($pqmps->product_specify) ?></td>
                            <td><?= h($pqmps->product_vaccine) ?></td>
                            <td><?= h($pqmps->packaging) ?></td>
                            <td><?= h($pqmps->labelling) ?></td>
                            <td><?= h($pqmps->sampling) ?></td>
                            <td><?= h($pqmps->mechanism) ?></td>
                            <td><?= h($pqmps->electrical) ?></td>
                            <td><?= h($pqmps->device_data) ?></td>
                            <td><?= h($pqmps->software) ?></td>
                            <td><?= h($pqmps->environmental) ?></td>
                            <td><?= h($pqmps->failure_to_calibrate) ?></td>
                            <td><?= h($pqmps->results) ?></td>
                            <td><?= h($pqmps->readings) ?></td>
                            <td><?= h($pqmps->cold_chain) ?></td>
                            <td><?= h($pqmps->reporter_date) ?></td>
                            <td><?= h($pqmps->person_submitting) ?></td>
                            <td><?= h($pqmps->reporter_name_diff) ?></td>
                            <td><?= h($pqmps->reporter_designation_diff) ?></td>
                            <td><?= h($pqmps->reporter_email_diff) ?></td>
                            <td><?= h($pqmps->reporter_phone_diff) ?></td>
                            <td><?= h($pqmps->reporter_date_diff) ?></td>
                            <td><?= h($pqmps->assigned_to) ?></td>
                            <td><?= h($pqmps->assigned_by) ?></td>
                            <td><?= h($pqmps->assigned_date) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'Pqmps', 'action' => 'view', $pqmps->id]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'Pqmps', 'action' => 'edit', $pqmps->id]) ?>
                                <?= $this->Form->postLink(__('Delete'), ['controller' => 'Pqmps', 'action' => 'delete', $pqmps->id], ['confirm' => __('Are you sure you want to delete # {0}?', $pqmps->id)]) ?>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </table>
                </div>
                <?php endif; ?>
            </div>
            <div class="related">
                <h4><?= __('Related Saes') ?></h4>
                <?php if (!empty($country->saes)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Id') ?></th>
                            <th><?= __('Application Id') ?></th>
                            <th><?= __('Sae Id') ?></th>
                            <th><?= __('Reference No') ?></th>
                            <th><?= __('Form Type') ?></th>
                            <th><?= __('User Id') ?></th>
                            <th><?= __('Patient Initials') ?></th>
                            <th><?= __('Country Id') ?></th>
                            <th><?= __('Date Of Birth') ?></th>
                            <th><?= __('Age Years') ?></th>
                            <th><?= __('Gender') ?></th>
                            <th><?= __('Causality') ?></th>
                            <th><?= __('Enrollment Date') ?></th>
                            <th><?= __('Administration Date') ?></th>
                            <th><?= __('Latest Date') ?></th>
                            <th><?= __('Reaction Onset') ?></th>
                            <th><?= __('Reaction End Date') ?></th>
                            <th><?= __('Patient Died') ?></th>
                            <th><?= __('Prolonged Hospitalization') ?></th>
                            <th><?= __('Incapacity') ?></th>
                            <th><?= __('Life Threatening') ?></th>
                            <th><?= __('Reaction Other') ?></th>
                            <th><?= __('Reaction Description') ?></th>
                            <th><?= __('Relevant History') ?></th>
                            <th><?= __('Manufacturer Name') ?></th>
                            <th><?= __('Mfr No') ?></th>
                            <th><?= __('Manufacturer Date') ?></th>
                            <th><?= __('Source Study') ?></th>
                            <th><?= __('Source Literature') ?></th>
                            <th><?= __('Source Health Professional') ?></th>
                            <th><?= __('Report Date') ?></th>
                            <th><?= __('Submitted Date') ?></th>
                            <th><?= __('Report Type') ?></th>
                            <th><?= __('Approved') ?></th>
                            <th><?= __('Approved By') ?></th>
                            <th><?= __('Email Address') ?></th>
                            <th><?= __('Reporter Name') ?></th>
                            <th><?= __('Reporter Phone') ?></th>
                            <th><?= __('Reporter Email') ?></th>
                            <th><?= __('Assigned To') ?></th>
                            <th><?= __('Assigned By') ?></th>
                            <th><?= __('Assigned Date') ?></th>
                            <th><?= __('Deleted') ?></th>
                            <th><?= __('Deleted Date') ?></th>
                            <th><?= __('Created') ?></th>
                            <th><?= __('Modified') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($country->saes as $saes) : ?>
                        <tr>
                            <td><?= h($saes->id) ?></td>
                            <td><?= h($saes->application_id) ?></td>
                            <td><?= h($saes->sae_id) ?></td>
                            <td><?= h($saes->reference_no) ?></td>
                            <td><?= h($saes->form_type) ?></td>
                            <td><?= h($saes->user_id) ?></td>
                            <td><?= h($saes->patient_initials) ?></td>
                            <td><?= h($saes->country_id) ?></td>
                            <td><?= h($saes->date_of_birth) ?></td>
                            <td><?= h($saes->age_years) ?></td>
                            <td><?= h($saes->gender) ?></td>
                            <td><?= h($saes->causality) ?></td>
                            <td><?= h($saes->enrollment_date) ?></td>
                            <td><?= h($saes->administration_date) ?></td>
                            <td><?= h($saes->latest_date) ?></td>
                            <td><?= h($saes->reaction_onset) ?></td>
                            <td><?= h($saes->reaction_end_date) ?></td>
                            <td><?= h($saes->patient_died) ?></td>
                            <td><?= h($saes->prolonged_hospitalization) ?></td>
                            <td><?= h($saes->incapacity) ?></td>
                            <td><?= h($saes->life_threatening) ?></td>
                            <td><?= h($saes->reaction_other) ?></td>
                            <td><?= h($saes->reaction_description) ?></td>
                            <td><?= h($saes->relevant_history) ?></td>
                            <td><?= h($saes->manufacturer_name) ?></td>
                            <td><?= h($saes->mfr_no) ?></td>
                            <td><?= h($saes->manufacturer_date) ?></td>
                            <td><?= h($saes->source_study) ?></td>
                            <td><?= h($saes->source_literature) ?></td>
                            <td><?= h($saes->source_health_professional) ?></td>
                            <td><?= h($saes->report_date) ?></td>
                            <td><?= h($saes->submitted_date) ?></td>
                            <td><?= h($saes->report_type) ?></td>
                            <td><?= h($saes->approved) ?></td>
                            <td><?= h($saes->approved_by) ?></td>
                            <td><?= h($saes->email_address) ?></td>
                            <td><?= h($saes->reporter_name) ?></td>
                            <td><?= h($saes->reporter_phone) ?></td>
                            <td><?= h($saes->reporter_email) ?></td>
                            <td><?= h($saes->assigned_to) ?></td>
                            <td><?= h($saes->assigned_by) ?></td>
                            <td><?= h($saes->assigned_date) ?></td>
                            <td><?= h($saes->deleted) ?></td>
                            <td><?= h($saes->deleted_date) ?></td>
                            <td><?= h($saes->created) ?></td>
                            <td><?= h($saes->modified) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'Saes', 'action' => 'view', $saes->id]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'Saes', 'action' => 'edit', $saes->id]) ?>
                                <?= $this->Form->postLink(__('Delete'), ['controller' => 'Saes', 'action' => 'delete', $saes->id], ['confirm' => __('Are you sure you want to delete # {0}?', $saes->id)]) ?>
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
