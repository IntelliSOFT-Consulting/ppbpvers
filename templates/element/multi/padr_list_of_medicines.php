<?php

/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Medication $aefi
 */
echo $this->Html->script('padr_list_of_medicines', array('inline' => false));
echo $this->Html->css('padr', array('inline' => false));
?>

<div style="background-color: #f5f5a4;">
    <h5 style="text-align: center; text-decoration: underline;">DETAILS OF THE MEDICINE/VACCINE/DEVICE THAT CAUSED THE REACTION <br><em>(Include all medications)</em></h5>
</div>


<div class="row-fluid srollable">
    <div class="span12">
        <table id="listOfPadrListOfMedicinesTable" class="table table-bordered table-condensed table-pvborder">
            <tbody>
                <?php
                if (!empty($this->request->getData('padr_list_of_medicines'))) {
                    $dr = count($this->request->getData('padr_list_of_medicines')) - 1;
                } else {
                    $dr = 0;
                }
                for ($i = 0; $i <= $dr; $i++) {
                ?>
                    <tr>
                        <td rowspan="3" class="sailor"><?= $i + 1; ?></td>
                        <td class="padr_label">
                            <?php
                            echo $this->Form->control('padr_list_of_medicines.' . $i . '.id', array('type' => 'hidden'));
                            ?>
                            Name of Medicine/Vaccine/Device
                        </td>
                        <td>
                            <?php
                            echo $this->Form->control('padr_list_of_medicines.' . $i . '.product_name', array(
                                'label' => false,
                                'between' => false,
                                'div' => false,
                                'after' => false,
                                'class' => 'padr_control-item',
                            ));
                            ?>
                        </td>
                        <td class="padr_label"> Manufacturer </td>
                        <td>
                            <?php
                            echo $this->Form->control('padr_list_of_medicines.' . $i . '.manufacturer', array(
                                'type' => 'text',
                                'label' => false,
                                'between' => false,
                                'div' => false,
                                'after' => false,
                                'class' => 'padr_control-item',
                            ));
                            ?>
                        </td>
                        <td rowspan="3">
                            <button type="button" class="btn btn-danger btn-small remove-padr-product" value="<?php if (isset($medication['padr_list_of_medicines'][$i]['id'])) {
                                                                                                                    echo $medication['padr_list_of_medicines'][$i]['id'];
                                                                                                                } ?>">
                                <i class="icon-minus"></i>
                            </button>
                        </td>
                    </tr>
                    <tr>
                        <td class="padr_label">When did you start taking/using the medicine/vaccine/device? </td>
                        <td>
                            <?php
                            echo $this->Form->control('padr_list_of_medicines.' . $i . '.start_date', array(
                                'type' => 'text',
                                'label' => false,
                                'between' => false,
                                'div' => false, 
                                'class' => ' padr_control-item datepicker',
                                'after' => false
                            ));
                            ?>
                        </td>
                        <td class="padr_label">When did you stop taking/using the medicine/vaccine/device? <span class="help-block">(dd-mm-yyyy)</span> </td>
                        <td>
                            <?php
                            echo $this->Form->control('padr_list_of_medicines.' . $i . '.end_date', array(
                                'type' => 'text',
                                'label' => false,
                                'between' => false, 
                                'div' => false,
                                'class' => 'padr_control-item datepicker',
                                'after' => false
                            ));
                            ?>
                        </td>
                    </tr>
                    <tr>
                        <td class="padr_label">Expiry date of the medicine/vaccine/device</td>
                        <td>
                            <?php
                            echo $this->Form->control('padr_list_of_medicines.' . $i . '.expiry_date', array(
                                'type' => 'text',
                                'label' => false,
                                'between' => false,
                                'div' => false, 
                                'class' => ' padr_control-item datepicker-expiry',
                                'after' => false
                            ));
                            ?>
                        </td>
                        <td class="padr_label">Where did you buy the medicine/vaccine/device? </td>
                        <td> <?php
                                echo $this->Form->control('padr_list_of_medicines.' . $i . '.medicine_source', array(
                                    'type' => 'text',
                                    'label' => false,
                                    'between' => false,
                                    'div' => false,
                                    'after' => false,
                                    'class' => 'padr_control-item',
                                ));
                                ?>
                        </td>
                    </tr>


                <?php } ?>
                <tr>
                    <td colspan="6"><label class="required"> For additional medicines/vaccines/devices, click <button type="button" class="btn btn-success btn-mini" id="addPadrListOfMedicine"> Add <i class="fa fa-plus-square" aria-hidden="true"></i> </button> </label> </td>
                </tr>
            </tbody>
        </table>
    </div><!--/span-->
</div><!--/row-->