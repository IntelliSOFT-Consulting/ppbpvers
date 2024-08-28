<?php
$this->assign('Content', 'active');
?>

<div class="row-fluid">
    <div class="span-12">


        <?php 
        
        echo $this->Form->create(null, ['valueSources' => 'query']);
        ?>
        <table class="table table-condensed table-bordered" style="margin-bottom: 2px;">
            <thead>
                <tr>
                    <th style="width: 15%;">
                        <?php
                        echo $this->Form->control(
                            'name',
                            array('div' => false, 'class' => 'span12 unauthorized_index', 'label' => array('class' => 'required', 'text' => 'Name'))
                        );
                        ?>
                    </th>
                    <th>
                        <?php
                        echo $this->Form->control('subject', array(
                            'div' => false, 'class' => 'span12 unauthorized_index',
                            'label' => array('class' => 'required', 'text' => 'Subject'),
                            'type' => 'text',
                        ));
                        ?>
                    </th>
                    <th>
                        <?php
                        echo $this->Form->control('content', array(
                            'div' => false, 'class' => 'span12 unauthorized_index',
                            'label' => array('class' => 'required', 'text' => 'Content'),
                            'type' => 'text',
                        ));
                        ?>
                    </th>
                    <th>
                        <?php
                        echo $this->Form->control('sms', array(
                            'div' => false, 'class' => 'span12 unauthorized_index',
                            'label' => array('class' => 'required', 'text' => 'SMS'),
                            'type' => 'text',
                        ));
                        ?>
                    </th>
                    <th>
                        <?php
                        echo $this->Form->control('pages', array(
                            'type' => 'select',
                            'div' => false,
                            'class' => 'span12', 
                            // 'selected' => $this->request->getParams('paging')['limit'],
                            'empty' => true,
                            'options' => $page_options,
                            'label' => array('class' => 'required', 'text' => 'Pages'),
                        ));
                        ?>
                    </th>
                    <th rowspan="2" style="width: 14%;">
                        <?php
                        echo $this->Form->button('<i class="icon-search icon-white"></i> Search', array(
                            'escapeTitle' => false,
                            'class' => 'btn btn-inverse', 'div' => 'control-group', 'div' => false,
                            'style' => array('margin-bottom: 5px')
                        ));

                        echo $this->Html->link('<i class="icon-remove"></i> Clear', array('action' => 'index'), array('class' => 'btn', 'escape' => false, 'style' => array('margin-bottom: 5px')));
                        echo "<br>";
                        echo $this->Html->link('<i class="icon-file-alt"></i> Excel', array('action' => 'index', 'ext' => 'csv'), array('class' => 'btn btn-success', 'escape' => false));
                        ?>
                    </th>
                </tr>
            </thead>
        </table>
        <p>
            <?php
            echo $this->Paginator->counter(
                __('Page <span class="badge">{{page}}</span> of <span class="badge">{{pages}}</span>, 
                showing <span class="badge">{{current}}</span> Messages out of 
                <span class="badge badge-inverse">{{count}}</span> total, starting on record <span class="badge">{{start}}</span>, 
                ending on <span class="badge">{{end}}</span>')
            );
            ?>
        </p>
        <?php echo $this->Form->end(); ?>

        <div class="pagination">
            <ul>
                <?= $this->Paginator->first('<< ' . __('first')) ?>
                <?= $this->Paginator->prev('< ' . __('previous')) ?>
                <?= $this->Paginator->numbers() ?>
                <?= $this->Paginator->next(__('next') . ' >') ?>
                <?= $this->Paginator->last(__('last') . ' >>') ?>
            </ul>
        </div>


        <div class="row-index">
            <h2><?php echo __('Messages'); ?></h2>
            <table class="table  table-bordered table-striped">
                <tr>
                    <th><?php echo $this->Paginator->sort('id'); ?></th>
                    <th><?php echo $this->Paginator->sort('name'); ?></th>
                    <th><?php echo $this->Paginator->sort('subject'); ?></th>
                    <th><?php echo $this->Paginator->sort('content'); ?></th>
                    <th><?php echo $this->Paginator->sort('description'); ?></th>
                    <th><?php echo $this->Paginator->sort('sms'); ?></th>
                    <th><?php echo $this->Paginator->sort('type'); ?></th>
                    <th class="actions"><?php echo __('Actions'); ?></th>
                </tr>
                <?php
                foreach ($messages as $message) : ?>
                    <tr>
                        <td><?php echo h($message['id']); ?>&nbsp;</td>
                        <td><?php echo h($message['name']); ?>&nbsp;</td>
                        <td><?php echo h($message['subject']); ?>&nbsp;</td>
                        <td><?php echo $message['content']; ?>&nbsp;</td>
                        <td><?php echo $message['description']; ?>&nbsp;</td>
                        <td><?php echo $message['sms']; ?>&nbsp;</td>
                        <td><?php echo $message['type']; ?>&nbsp;</td>
                        <td class="actions">
                            <?php echo $this->Html->link(__('Edit'), array('controller' => 'messages', 'action' => 'edit', $message['id'], 'admin' => true), array('class' => 'btn btn-success')); ?>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </table>
            <p>
                <?php
              
                ?>
            </p>
            <div class="pagination">
                <ul>
                    
                </ul>
            </div>

            <div class="form-actions">
                <?php echo $this->Html->link(__('New Message'), array('controller' => 'messages', 'action' => 'add', 'admin' => true), array('class' => 'btn btn-primary')); ?>
            </div>
        </div>

    </div>
</div>