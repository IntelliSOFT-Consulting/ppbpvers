<?php
$this->assign('USERS', 'active');
?>

<h3>LIST OF REGISTERED USERS<small> Filter, Search, and edit USER Accounts</small></h3>
<hr>

<div class="row-fluid" style="margin-bottom: 9px;">
    <div class="span2 columns">
        <div class="row-fluid">
            <div class="span12">
                <div class="well" style="padding: 8px 0;">
                    <ul class="nav nav-list">
                        <li class="nav-header"><i class="icon-glass"></i> Filter Options </li>
                        <li class="divider"></li>
                        <li class="active">
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
                    </ul>
                </div> <!-- /well -->
            </div><!--/span-->
        </div><!--/row-->
    </div> <!-- /span5 -->

    <div class="span10 columns">
        <?php
        echo $this->Form->create();
        // 'User', array(
        //     'url' => array_merge(array('action' => 'admin_index'), $this->params['pass']),
        //     'class' => 'well',
        // ));
        ?>
        <div class="row-fluid">
            <div class="span2 columns">
                <?php


                echo $this->Form->control('pages', [
                    'type' => 'select',
                    'div' => false, // Removes the wrapping div
                    'class' => 'span9',
                    // 'default' => $this->request->getQuery('pages') ?? $this->request->getQuery('paging')['limit'],
                    'empty' => true, // Adds an empty option
                    'options' => [
                        5 => 5,
                        10 => 10,
                        20 => 20,
                        30 => 30,
                        50 => 50,
                        70 => 70,
                        100 => 100,
                    ],
                    'label' => [
                        'class' => 'control-label required',
                        'text' => 'Pagination'
                    ],
                ]);

                ?>
            </div>
            <div class="span3 columns">
                <?php
                echo $this->Form->control(
                    'username',
                    array(
                        'div' => false, 'id' => 'adminTitleId', 'required' => false,
                        'class' => 'span9', 'label' => array('class' => 'required', 'text' => 'Username')
                    )
                );
                ?>
            </div>
            <div class="span3 columns">
                <?php
                echo $this->Form->control(
                    'email',
                    array(
                        'div' => false, 'id' => 'adminSearchId', 'required' => false,
                        'type' => 'text', 'class' => 'span9', 'label' => array('class' => 'required', 'text' => 'Email Address')
                    )
                );
                ?>
            </div>
            <div class="span4 columns">
                <?php
                echo $this->Form->control(
                    'start_date',
                    array(
                        'div' => false, 'type' => 'text', 'class' => 'control-small',  'id' => 'SadrStartDate', 'after' => '-to-',
                        'label' => array('class' => 'required', 'text' => 'User Created Dates'), 'placeHolder' => 'Start Date'
                    )
                );
                echo $this->Form->control(
                    'end_date',
                    array(
                        'div' => false, 'type' => 'text', 'class' => 'control-small', 'id' => 'SadrEndDate',
                        'after' => '<a style="font-weight:normal" onclick="$(\'#SadrStartDate\').val(\'\');	$(\'#SadrEndDate\').val(\'\');
													$(\'#adminSearchId\').val(\'\');	$(\'#adminTitleId\').val(\'\');" >										
												<em>clear</em></a>',
                        'label' => false, 'placeHolder' => 'End Date'
                    )
                );
                ?>
            </div>
        </div>
        <hr>
        <div class="row-fluid">
            <div class="span4">
                <?php
                echo $this->Form->button('<i class="icon-search icon-white"></i> Search', array(
                    'escapeTitle' => false,
                    'class' => 'btn btn-inverse', 'div' => 'control-group', 'div' => false,
                ));
                ?>
            </div>
            <div class="span4">
                <?php
                echo $this->Html->link('<i class="icon-plus"></i> Add User', array('controller' => 'users', 'action' => 'add'), array(
                    'class' => 'btn', 'div' => false, 'escape' => false,
                ));
                ?>
            </div>
            <div class="span4">
                <?php

                ?>
            </div>
        </div>
        <?php echo $this->Form->end(); ?>

        <div class="row-fluid">

            <?php
            if (count($users) >  0) { ?>
                <p>
                    <?php
                    echo $this->Paginator->counter(
                        __('Page <span class="badge">{{page}}</span> of <span class="badge">{{pages}}</span>, 
                        showing <span class="badge">{{current}}</span> Users out of 
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
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th style="width:3%">#</th>
                            <th><?php echo $this->Paginator->sort('Username'); ?></th>
                            <th><?php echo $this->Paginator->sort('email'); ?></th>
                            <th><?php echo $this->Paginator->sort('created', 'Date Created'); ?></th>
                            <th><?php echo __('Actions'); ?></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $counder = 0; // ($this->request->paging['User']['page'] - 1) * $this->request->paging['User']['limit'];
                        foreach ($users as $user) :
                        ?>
                            <tr>
                                <td>
                                    <p class="tablenums">
                                        <?php $counder++;
                                        echo $counder; ?>.</p>
                                </td>
                                <td><?php echo '<span class="badge badge-success">' . $user['username'] . '</span>'; ?>&nbsp;</td>
                                <td><?php echo h($user['email']); ?>&nbsp;</td>
                                <td><?php echo h($user['created']); ?>&nbsp;</td>
                                <td>
                                    <?php echo $this->Html->link(
                                        '<span class="label label-info tooltipper" title="Edit"><i class="icon-pencil icon-white"></i> </span>',
                                        array('controller' => 'users', 'action' => 'edit', $user['id']),
                                        array('escape' => false)
                                    ); ?>&nbsp;
                                    <?php echo $this->Form->postLink(
                                        __('<span class="label label-important tooltipper" title="Delete"><i class="icon-trash icon-white"></i> </span>'),
                                        array('action' => 'delete', $user['id']),
                                        array('escape' => false),
                                        __('Are you sure you want to Delete the User %s?', $user['username'])
                                    ); ?>&nbsp;
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>

            <?php } else { ?>
                <p>There were no reports that met your search criteria.</p>
            <?php } ?>
        </div> <!-- /row-fluid -->
    </div> <!-- /span6 -->

</div> <!-- /row-fluid -->