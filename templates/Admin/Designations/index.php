<?php
$this->assign('Dashboard', 'active');
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
        <div class="designations index">
             <div class="row-fluid">

                <div class="span4">
                    <?php
                    echo $this->Html->link('<i class="icon-plus"></i> New Designation', array( 'action' => 'add'), array(
                        'class' => 'btn',
                        'div' => false,
                        'escape' => false,
                    ));
                    ?>
                </div> 
            </div>
           <hr>

            <p>
                <?php
                echo $this->Paginator->counter(
                    __('Page <span class="badge">{{page}}</span> of <span class="badge">{{pages}}</span>, 
                        showing <span class="badge">{{current}}</span> Designations out of 
                        <span class="badge badge-inverse">{{count}}</span> total, starting on record <span class="badge">{{start}}</span>, 
                        ending on <span class="badge">{{end}}</span>')
                );


                ?>
            </p>
            <div class="pagination">
                <ul>
                    <?= $this->Paginator->first('<< ' . __('first')) ?>
                    <?= $this->Paginator->prev('< ' . __('previous')) ?>
                    <?= $this->Paginator->numbers() ?>
                    <?= $this->Paginator->next(__('next') . ' >') ?>
                    <?= $this->Paginator->last(__('last') . ' >>') ?>
                </ul>
            </div>
            <table class="table table-stripped" cellpadding="0" cellspacing="0">
                <thead>
                    <tr>
                        <th><?php echo $this->Paginator->sort('id'); ?></th>
                        <th><?php echo $this->Paginator->sort('name'); ?></th>
                        <th><?php echo $this->Paginator->sort('category'); ?></th>
                        <th><?php echo $this->Paginator->sort('modified'); ?></th>
                        <th class="actions"><?php echo __('Actions'); ?></th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($designations as $designation): ?>
                        <tr>
                            <td><?php echo h($designation['id']); ?>&nbsp;</td>
                            <td><?php echo h($designation['name']); ?>&nbsp;</td>
                            <td>
                                <?php
                                $categories = ['1' => 'Physician', '2' => 'Pharmacist', '3' => 'Other Health Professional', '4' => 'Lawyer', '5' => 'Consumer or other non-health professional'];
                                echo (isset($categories[$designation['category']])) ? $categories[$designation['category']] : '<small class="muted">please set</small>';
                                ?>&nbsp;
                            </td>
                            <td><?php echo h($designation['modified']); ?>&nbsp;</td>
                            <td class="actions">

                                <?php echo $this->Html->link(
                                    '<span class="label label-info tooltipper" title="Edit"><i class="icon-pencil icon-white"></i> </span>',
                                    array('action' => 'edit', $designation['id']),
                                    array('escape' => false)
                                ); ?>&nbsp;
                                <?php echo $this->Form->postLink(__('<span class="label label-important tooltipper" title="Delete"><i class="icon-trash icon-white"></i> </span>'), array('action' => 'delete', $designation['id']), array(
                                    'escape' => false,
                                    'confirm' => __('Are you sure you want to delete  {0}?', $designation['name'])
                                )); ?>



                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
            <p>
                <?php

                ?> </p>
            <div class="paging">
                <?php
                ?>
            </div>
        </div>
    </div>
</div>