<?php

$this->assign('Dashboard', 'active');
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Designation $designation
 */
?>

<div class="row-fluid" style="margin-bottom: 9px;">
    <div class="span2 columns">
        <div class="row-fluid">
            <div class="span12">
                <div class="well" style="padding: 8px 0;">
                    <ul class="nav nav-list">
                        <li class="nav-header"><i class="icon-glass"></i> Filter Options </li>
                        <li class="divider"></li>
                        <li class="">
                            <?php echo $this->Html->link(
                                '<i class="icon-book"></i> Users',
                                array('controller' => 'users', 'action' => 'index', 'prefix' => 'Admin'),
                                array('escape' => false)
                            ); ?>
                        </li>
                        <li>
                            <?php echo $this->Html->link(
                                '<i class="icon-tag"></i> Roles',
                                array('controller' => 'roles', 'action' => 'index', 'prefix' => 'Admin'),
                                array('escape' => false)
                            ); ?>
                        </li>
                        <li class="divider"></li>
                        <li class="active">
                            <?php echo $this->Html->link(
                                '<i class="icon-book"></i> Designantions',
                                array('controller' => 'designations', 'action' => 'index', 'prefix' => 'Admin'),
                                array('escape' => false)
                            ); ?>
                        </li>
                    </ul>
                </div> <!-- /well -->
            </div><!--/span-->
        </div><!--/row-->
    </div> <!-- /span5 -->

    <div class="span10 columns">
        <div class="row">
            
            <div class="column-responsive column-80">
                <div class="designations form content">
                    <?= $this->Form->create($designation) ?>
                    <fieldset>
                        <legend><?= __('Add Designation') ?></legend>
                        <?php
                        echo $this->Form->control('name');

                        echo $this->Form->control('category', array('type' => 'select', 'options' => ['1' => 'Physician', '2' => 'Pharmacist', '3' => 'Other Health Professional', '4' => 'Lawyer', '5' => 'Consumer or other non-health professional']));
                        ?>
                    </fieldset>
                    <?php
                    
                    echo $this->Html->div(
                        'form-actions',
                        $this->Form->button('Submit', [
                            'type' => 'Submit',
                            'class' => 'btn btn-primary', 
                        ])
                    );
                    ?>
                    <?= $this->Form->end() ?>
                </div>
            </div>
        </div>
    </div>
</div>