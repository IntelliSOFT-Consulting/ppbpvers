<?php
$this->assign('USERS', 'active');
echo $this->Html->script('jquery.jeditable', array('inline' => false));
?>
<!-- USER LIST
    ================================================== -->
<h3>LIST OF USER GROUPS/ROLES<small> Determines a group's default access rights</small></h3>
<hr>

<div class="row-fluid" style="margin-bottom: 9px;">
    <div class="span2 columns">
        <div class="row-fluid">
            <div class="span12">
                <div class="well" style="padding: 8px 0;">
                    <ul class="nav nav-list">
                        <li class="nav-header"><i class="icon-glass"></i> Filter Options </li>
                        <li class="divider"></li>
                        <li>
                            <?php echo $this->Html->link(
                                '<i class="icon-book"></i> Users',
                                array('controller' => 'users', 'action' => 'index', 'admin' => true),
                                array('escape' => false)
                            ); ?>
                        </li>
                        <li class="active">
                            <?php echo $this->Html->link(
                                '<i class="icon-tag"></i> Groups',
                                array('controller' => 'groups', 'action' => 'index', 'admin' => true),
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
        <div class="row-fluid">
            <?php
            if (count($roles) >  0) { ?>
                <p>
                    <?php
                    echo $this->Paginator->counter(
                        __('Page <span class="badge">{{page}}</span> of <span class="badge">{{pages}}</span>, 
                        showing <span class="badge">{{current}}</span> Roles out of 
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
                            <th><?php echo $this->Paginator->sort('name'); ?></th>
                            <th><?php echo $this->Paginator->sort('description'); ?></th>
                            <th><?php echo $this->Paginator->sort('created', 'Date Created'); ?></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $counder = 0; //($this->request->paging['Group']['page'] - 1) * $this->request->paging['Group']['limit'];
                        foreach ($roles as $group) :
                        ?>
                            <tr>
                                <td>
                                    <p class="tablenums">
                                        <?php $counder++;
                                        echo $counder; ?>.</p>
                                </td>
                                <td><?php echo '<span class="badge badge-success">' . $group['name'] . '</span>'; ?>&nbsp;</td>
                                <td><span class="jeditableGroup tooltipper" title="Click to edit" style="background-color: #C9EEFF;" id="<?php
                                                                                                                                            echo $group['id']; ?>"><?php
                                                                                                                                                                    echo h($group['description']); ?></span>&nbsp;</td>
                                <td><?php echo h($group['created']); ?>&nbsp;</td>
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
<script type="text/javascript">
    $(document).ready(function() {
        $('.jeditableGroup').editable('/admin/roles/edit/', {
            indicator: 'Saving...',
            tooltip: 'Click to edit...',
            placeholder: '_________',
            type: 'textarea',
            cancel: 'Cancel',
            submit: 'OK',
            id: 'data[Group][id]',
            name: 'data[Group][description]',
            cssclass: 'input-xlarge'
        });
    });
</script>