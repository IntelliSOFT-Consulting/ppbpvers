<?php
$this->assign('Content', 'active');
?>

<!-- Content
    ================================================== -->
<h3>Content Management System <small>(SUB COUNTIES)</small></h3>
<p>Search for the content that you wish to modify and change accordingly.</p>
<hr>
<div class="row-fluid" style="margin-bottom: 9px;">
    <div class="span2 columns">
        <div class="row-fluid">
            <div class="span12">
                <?php echo $this->element('admin/contentmenu') ?>

            </div><!--/span-->
        </div><!--/row-->
    </div> <!-- /span5 -->

    <div class="span10 columns">
    <?php
        echo $this->Form->create(); 
        ?>
        <div class="row-fluid">
            <div class="span2 columns">
                <?php
                echo $this->Html->link('Add Sub County', array('controller' => 'sub-counties', 'action' => 'add', 'admin' => true), array('class' => 'btn btn-info'));
                ?>
            </div>
            <div class="span6 columns">
                <?php
                echo $this->Form->control('name', array('div' => false, 'class' => 'span10', 'label' => array('class' => 'required', 'text' => 'Sub County Name')));
                ?>
            </div>
            <div class="span4 columns">
                <p class="muted">Search on any field.</p>
                <?php
                echo $this->Form->button('<i class="icon-search icon-white"></i> Search', array(
                    'escapeTitle' => false,
                    'class' => 'btn btn-inverse', 'div' => 'control-group', 'div' => false,
                ));
                echo $this->Form->end();
                ?>
            </div>
        </div>

        <div class="row-fluid">

            <?php
            if (count($subCounties) >  0) { ?>
                <p>
                    <?php
                    echo $this->Paginator->counter(
                        __('Page <span class="badge">{{page}}</span> of <span class="badge">{{pages}}</span>, 
                            showing <span class="badge">{{current}}</span> Sub Counties out of 
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
                <hr>

        <div class="subCounties index">
            <h2><?php echo __('Sub Counties'); ?></h2>
            <hr>
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th><?php echo $this->Paginator->sort('id'); ?></th>
                        <th><?php echo $this->Paginator->sort('county_id'); ?></th>
                        <th><?php echo $this->Paginator->sort('sub_county_name'); ?></th>
                        <th><?php echo $this->Paginator->sort('county_name'); ?></th>
                        <th><?php echo $this->Paginator->sort('Province'); ?></th>
                        <th><?php echo $this->Paginator->sort('Pop_2009'); ?></th>
                        <th><?php echo $this->Paginator->sort('RegVoters'); ?></th>
                        <th><?php echo $this->Paginator->sort('AreaSqKms'); ?></th>
                        <th><?php echo $this->Paginator->sort('CAWards'); ?></th>
                        <th><?php echo $this->Paginator->sort('MainEthnicGroup'); ?></th>
                        <th><?php echo $this->Paginator->sort('created'); ?></th>
                        <th><?php echo $this->Paginator->sort('modified'); ?></th>
                        <th class="actions"><?php echo __('Actions'); ?></th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($subCounties as $subCounty) : ?>
                        <tr>
                            <td><?php echo h($subCounty['id']); ?>&nbsp;</td>
                            <td>
                                <?php
                                // debug($subCounty);
                                ?>
                                <?php echo $this->Html->link($subCounty['county']['county_name'], array('controller' => 'counties', 'action' => 'view', $subCounty['county']['id'])); ?>
                            </td>
                            <td><?php echo h($subCounty['sub_county_name']); ?>&nbsp;</td>
                            <td><?php echo h($subCounty['county_name']); ?>&nbsp;</td>
                            <td><?php echo h($subCounty['Province']); ?>&nbsp;</td>
                            <td><?php echo h($subCounty['Pop_2009']); ?>&nbsp;</td>
                            <td><?php echo h($subCounty['RegVoters']); ?>&nbsp;</td>
                            <td><?php echo h($subCounty['AreaSqKms']); ?>&nbsp;</td>
                            <td><?php echo h($subCounty['CAWards']); ?>&nbsp;</td>
                            <td><?php echo h($subCounty['MainEthnicGroup']); ?>&nbsp;</td>
                            <td><?php echo h($subCounty['created']); ?>&nbsp;</td>
                            <td><?php echo h($subCounty['modified']); ?>&nbsp;</td>
                            <td class="actions"> 
                                
                            <?php echo $this->Html->link(
                                        '<span class="label label-info"><i class="icon-pencil icon-white"></i> Edit</span>',
                                        array('controller' => 'sub-counties', 'action' => 'edit', $subCounty['id']),
                                        array('escape' => false)
                                    ); ?>&nbsp;
                                    <?php echo $this->Form->postLink(
                                        __('<span class="label label-important"><i class="icon-trash icon-white"></i> Delete</span>'),
                                        array('action' => 'delete', $subCounty['id']),
                                        array('escape' => false),
                                        __('Are you sure you want to delete # %s?', $subCounty['id'])
                                    ); ?>&nbsp;
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>

        </div>
        <?php } else { ?>
                <p>There were no reports that met your search criteria.</p>
            <?php } ?>
    </div>
</div>