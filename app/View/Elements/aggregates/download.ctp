<div class="row-fluid" id="abonokode">
    <div class="span12">

        <div id="printAreade">
            <div class="formbackd">

                <p><b>(FOM001/HPT/VMS/SOP/001)</b></p>
                <div class="row-fluid">
                    <div class="span12">
                        <?php
                        echo ($this->Html->image('header-object.png', array('alt' => 'in confidence', 'style' => 'margin-left: 45%;', 'fullBase' => true, 'class' => 'pull-right')));

                        // echo $this->Html->image('confidence.png', array('alt' => 'in confidence', 'class' => 'pull-right'));
                        // echo $this->Html->image('coa.png', array('alt' => 'COA', 'style' => 'margin-left: 45%;'));
                        ?>
                        <div class="babayao" style="text-align: center;">
                            <h4>MINISTRY OF HEALTH</h4>
                            <h5>PHARMACY AND POISONS BOARD</h5>
                            <h5>P.O. Box 27663-00506 NAIROBI</h5>
                            <h5>Tel: +254795743049</h5>
                            <h5><b>Email:</b> pv@pharmacyboardkenya.org</h5>
                            <h5 style="color: red;">PSUR Report</h5>
                        </div>
                    </div>
                </div>

                <table class="table" style="width: 100%;">

                    <tr>
                        <td style="width: 10%;">REPORT ID: </td>
                        <td style="width: 20%;">
                            <p><strong><?php echo $aggregate['Aggregate']['reference_no'] ?></strong></p>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <p> <strong>Brand Name</strong></p>
                        </td>
                        <td>
                            <p><?php echo $aggregate['Aggregate']['brand_name'] ?></p>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <p><strong>INN Name</strong></p>
                        </td>
                        <td>
                            <p><?php echo $aggregate['Aggregate']['inn_name'] ?></p>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <p><strong>Market authorization Holder</strong></p>
                        </td>
                        <td>
                            <p><?php echo $aggregate['Aggregate']['mah'] ?></p>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <p><strong>Local Technical Rep</strong></p>
                        </td>
                        <td>
                            <p><?php echo $aggregate['Aggregate']['local_technical'] ?></p>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <p> <strong>Therapeutic Group Code</strong></p>
                        </td>
                        <td>
                            <p><?php echo $aggregate['Aggregate']['therapeutic_group'] ?></p>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <p><strong>Authorized Indicators</strong></p>
                        </td>
                        <td>
                            <p><?php echo $aggregate['Aggregate']['authorised_indications'] ?></p>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <p><strong>Pharmaceutical Forms</strong></p>
                        </td>
                        <td>
                            <p><?php echo $aggregate['Aggregate']['form_strength'] ?></p>
                        </td>
                    </tr>

                </table>
                <hr>
                <div class="row-fluid" style="margin:10px ;">

                    <h5>1. Introduction</h5>
                    <div class="row-fluid">
                        <div class="span11">
                            <p><?php echo $aggregate['Aggregate']['introduction'] ?></p>
                        </div>
                    </div>
                    <h5>1.2 Worldwide Marketing Approval Status</h5>
                    <div class="row-fluid">
                        <div class="span11">
                            <p><?php echo $aggregate['Aggregate']['worldwide_marketing'] ?></p>
                        </div>
                    </div>
                    <h5>1.3 Overview of exposure and safety data</h5>
                    <h5>1.3.1 Action Taken</h5>
                    <div class="row-fluid">
                        <div class="span11">
                            <p><?php echo $aggregate['Aggregate']['action_taken'] ?></p>
                        </div>
                    </div>
                    <h5>1.3.2 Changes to Reference Safety Information </h5>
                    <div class="row-fluid">
                        <div class="span11">
                            <p><?php echo $aggregate['Aggregate']['reference_changes'] ?></p>
                        </div>
                    </div>
                    <h5>1.3.3 Estimated Exposure and Use Patterns</h5>
                    <div class="row-fluid">
                        <div class="span11">
                            <p><?php echo $aggregate['Aggregate']['estimated_exposure'] ?></p>
                        </div>
                    </div>
                    <h5>1.3.4 Findings from clinical trials and other sources</h5>
                    <div class="row-fluid">
                        <div class="span11">
                            <p><?php echo $aggregate['Aggregate']['clinical_findings'] ?></p>
                        </div>
                    </div>
                    <h5>1.3.5 Lack of efficacy in controlled clinical trials</h5>
                    <div class="row-fluid">
                        <div class="span11">
                            <p><?php echo $aggregate['Aggregate']['efficacy'] ?></p>
                        </div>
                    </div>
                    <h5>1.3.6 Late-breaking information</h5>
                    <div class="row-fluid">
                        <div class="span11">
                            <p><?php echo $aggregate['Aggregate']['late_breaking'] ?></p>
                        </div>
                    </div>

                    <hr>
                    <h5>Signal and risk management</h5>
                    <h5>2.1 Summary of safety concerns </h5>
                    <div class="row-fluid">
                        <div class="span11">
                            <p><?php echo $aggregate['Aggregate']['safety_concerns'] ?></p>
                        </div>
                    </div>
                    <h5>2.2 Signal evaluation</h5>
                    <!-- Table Here -->
                    <h5>2.3 Evaluation of risks and new information</h5>
                    <div class="row-fluid">
                        <div class="span11">
                            <p><?php echo $aggregate['Aggregate']['risks_evaluation'] ?></p>
                        </div>
                    </div>

                    <h5>2.4 Characterisation of risks </h5>
                    <div class="row-fluid">
                        <div class="span11">
                            <p><?php echo $aggregate['Aggregate']['risks_characterisation'] ?></p>
                        </div>
                    </div>

                    <hr>

                    <h5>3 Benefit evaluation </h5>
                    <div class="row-fluid">
                        <div class="span11">
                            <p><?php echo $aggregate['Aggregate']['benefit_evaluation'] ?></p>
                        </div>
                    </div>
                    <h5>4 Benefit-risk balance </h5>
                    <div class="row-fluid">
                        <div class="span11">
                            <p><?php echo $aggregate['Aggregate']['risk_balance'] ?></p>
                        </div>
                    </div>
                </div>
                <hr>

                <?php if (count($aggregate['Attachment']) > 0) { ?>
                    <table class="change_order_items" style="width: 100%;">
                        <tbody>
                            <tr id="attachmentsTableHeader">
                                <th>#</th>
                                <th class="required" style="width : 30%;"><label class="required">FILE</label></th>
                                <th class="required"><label class="required">A DESCRIPTION OF THE CONTENTS</label></th>
                            </tr>
                            <?php
                            $i = 1;
                            foreach ($aggregate['Attachment'] as $attachment) : ?>
                                <tr>
                                    <td style="width: 10%;"><?php echo $i++; ?></td>
                                    <td style="width : 30%;">
                                        <a href="/attachments/download/<?php echo $attachment['id']; ?>"><?php echo __($attachment['basename']); ?></a>
                                    </td>
                                    <td><?php echo $attachment['description']; ?></td>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                <?php }; ?>
                <hr>
                <?php
                if ($this->Session->read('Auth.User.user_type') != 'Public Health Program') {
                ?>
                    <table style="width: 100%;">
                        <tr>
                            <td style="width: 25%;">NAME OF PERSON REPORTING:</td>
                            <td style="width: 25%;"><strong><?php echo $aggregate['Aggregate']['reporter_name'] ?></strong></td>
                            <td style="width: 25%;">E-MAIL ADDRESS: </td>
                            <td style="width: 25%;"><strong><?php echo $aggregate['Aggregate']['reporter_email'] ?></strong></td>
                        </tr>
                        <tr>
                            <td style="width: 25%;">DESIGNATION:</td>
                            <td style="width: 25%;"><strong><?php echo $aggregate['Designation']['name'] ?></strong></td>
                            <td style="width: 25%;">PHONE NO.</td>
                            <td style="width: 25%;"><strong><?php echo $aggregate['Aggregate']['reporter_phone'] ?></strong></td>
                        </tr>
                        <tr>
                            <td style="width: 25%;">Date:</td>
                            <td style="width: 25%;"><strong><?php echo $aggregate['Aggregate']['reporter_date'] ?></strong></td>
                            <td style="width: 25%;"></td>
                            <td style="width: 25%;"></td>
                        </tr>
                    </table>
                    <hr>
                    <table style="width: 100%;">
                        <tr>
                            <td style="width: 50%;">Is the person submitting different from reporter?</td>
                            <td><strong><?php echo $aggregate['Aggregate']['person_submitting'] ?></strong></td>
                        </tr>
                    </table>
                    <hr>
                    <table style="width: 100%;">
                        <tr>
                            <td style="width: 25%;">NAME OF PERSON REPORTING:</td>
                            <td style="width: 25%;"><strong><?php echo $aggregate['Aggregate']['reporter_name_diff'] ?></strong></td>
                            <td style="width: 25%;">E-MAIL ADDRESS: </td>
                            <td style="width: 25%;"><strong><?php echo $aggregate['Aggregate']['reporter_email_diff'] ?></strong></td>
                        </tr>
                        <tr>
                            <td style="width: 25%;">DESIGNATION:</td>
                            <td style="width: 25%;"><strong><?php echo $aggregate['Aggregate']['reporter_designation_diff'] ?></strong></td>
                            <td style="width: 25%;">PHONE NO.</td>
                            <td style="width: 25%;"><strong><?php echo $aggregate['Aggregate']['reporter_phone_diff'] ?></strong></td>
                        </tr>
                        <tr>
                            <td style="width: 25%;">Date:</td>
                            <td style="width: 25%;"><strong><?php echo $aggregate['Aggregate']['reporter_date_diff'] ?></strong></td>
                            <td style="width: 25%;"></td>
                            <td style="width: 25%;"></td>
                        </tr>
                    </table>
                    <hr>
                <?php } ?>

            </div> <!-- /art-sheet -->
        </div> <!-- /art-sheet -->
    </div>
</div>