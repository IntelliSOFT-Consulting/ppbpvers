<?php
$this->assign('CMS', 'active');
?>

<!-- CMS
    ================================================== -->
<h4>MedDRA Dictionary v. 23.0 </h4>
<div class="row-fluid" style="margin-bottom: 9px;">
    <div class="span0 columns">
        <div class="row-fluid">
            <div class="span12">
                <?php


                ?>

            </div><!--/span-->
        </div><!--/row-->
    </div> <!-- /span5 -->

    <div class="span11 columns">
        <?php
        echo $this->Form->create();
        ?>
        <div class="row-fluid">
            <div class="span2 columns">

            </div>
            <div class="span6 columns">
                <?php
                echo $this->Form->control('llt_name', array('div' => false, 'class' => 'span10', 'label' => array('class' => 'required', 'text' => 'LLT Name')));
                ?>
            </div>
            <div class="span4 columns">
                <p class="muted">Search on any field.</p>
                <?php echo $this->Form->button('<i class="icon-search icon-white"></i> Search', array(
                    'escapeTitle'=>false,
                    'class' => 'btn btn-inverse',
                    'div' => 'control-group',
                    'div' => false,
                ));

                echo $this->Form->end();

                echo $this->Html->link(
                    '<span class="btn btn-primary tooltipper" title="Auto Sync"><i class="fa fa-refresh" aria-hidden="true"></i> Auto Sync </span>',
                    array('controller' => 'meddras', 'action' => 'autosync', 'admin' => true),
                    array('escape' => false)
                );
                ?>


            </div>
        </div>

        <div class="row-fluid">

            <?php
            if (count($meddras) >  0) { ?>
                <p>
                    <?php
                   
                   echo $this->Paginator->counter(
                    __('Page <span class="badge">{{page}}</span> of <span class="badge">{{pages}}</span>, 
                    showing <span class="badge">{{current}}</span> MedDRAs out of 
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
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th><?php echo $this->Paginator->sort('id', 'LLT Code'); ?></th>
                            <th><?php echo $this->Paginator->sort('pt_code'); ?></th>
                            <th><?php echo $this->Paginator->sort('llt)name', 'Low Level Term'); ?></th>
                            <th><?php echo $this->Paginator->sort('llt_currency'); ?></th>
                            <!-- <th><?php echo __('Actions'); ?></th> -->
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        foreach ($meddras as $meddra): ?>
                            <tr>
                                <td><?php echo h($meddra['id']); ?>&nbsp;</td>
                                <td><?php echo h($meddra['pt_code']); ?>&nbsp;</td>
                                <td><?php echo h($meddra['llt_name']); ?>&nbsp;</td>
                                <td><?php echo h($meddra['llt_currency']); ?>&nbsp;</td>
                                <!-- <td>

                                </td> -->
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