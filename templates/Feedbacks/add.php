<?php
$this->assign('Contact-Us', 'active');
?>

<div class="row-fluid">
    <div class="span12">
        <h3>Contact us <small>:PPB will get back to you using the provided email address.</small> </h3>
        <hr>
        <?php

        echo $this->Form->create($feedback);
        ?>

        <div class="row-fluid">
            <div class="span6">
                <?php
                echo $this->Form->control(
                    'email',
                    array(
                        'label' => array('class' => 'control-label required', 'text' => 'Email <span class="sterix">*</span>'),
                        'escape'=>false,
                        'type' => 'email', 'value' => $this->request->getSession()->read('Auth.User.email')
                    )
                );
                echo $this->Form->control(
                    'user_id',
                    array(
                        'label' => array('class' => 'control-label required', 'text' => 'Email <span class="sterix">*</span>'),
                        'escape'=>false,
                        'type' => 'hidden', 'value' => $this->request->getSession()->read('Auth.User.id')
                    )
                );
                echo $this->Form->control(
                    'subject',
                    array('label' => array('class' => 'control-label required', 'text' => 'Subject <span class="sterix">*</span>'),  'escape'=>false,)
                );
                echo $this->Form->control(
                    'feedback',
                    array(
                        'label' => array('class' => 'control-label required', 'text' => 'Feedback <span class="sterix">*</span>'),  'escape'=>false,
                        'class' => 'control-large',
                    )
                ); 
                echo $this->Captcha->render([
                    'placeholder' => __('Please solve the riddle'), 
                ]);

                ?>

                <?php

                echo $this->Html->div(
                    'form-actions',
                    $this->Form->button('<i class="icon-search icon-white"></i> Submit', [
                        'escapeTitle' => false,
                        'type' => 'Submit',
                        'class' => 'btn btn-primary',
                        'id' => 'SadrSaveChanges'
                    ])
                );
                echo $this->Form->end();
                ?>
            </div><!--/span-->
            <div class="span6">
                <div style="margin-left: 20px;">
                    <?php if (count($previous_messages) > 0) { ?>
                        <h4 style="text-decoration: underline;">My Previous Comments</h4>
                        <dl>
                            <?php
                            $count = 1;
                            foreach ($previous_messages as $previous_message) {
                                echo "<dt>" . $count . ". " . $previous_message['subject'] . " <small class='muted'> created on " . date('d-m-Y H:i:s', strtotime($previous_message['created'])) . "</small></dt>";
                                echo "<dd class='morecontent'>" . $previous_message['feedback'] . "</dd>";
                                $count++;
                            }
                            ?>
                        </dl>
                        <div class="pagination pull-right">
                            <ul>
                                <?= $this->Paginator->first('<< ' . __('first')) ?>
                                <?= $this->Paginator->prev('< ' . __('previous')) ?>
                                <?= $this->Paginator->numbers() ?>
                                <?= $this->Paginator->next(__('next') . ' >') ?>
                                <?= $this->Paginator->last(__('last') . ' >>') ?>
                            </ul>
                        </div>
                    <?php } ?>
                </div>
            </div><!--/span-->
        </div><!--/row-->
        <hr>

    </div>
</div>
<div class="row-fluid">
    <div class="blank_contact"></div>
</div>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<script>
    jQuery('.creload').on('click', function() {
        var mySrc = $(this).prev().attr('src');
        var glue = '?';
        if (mySrc.indexOf('?') != -1) {
            glue = '&';
        }
        $(this).prev().attr('src', mySrc + glue + new Date().getTime());
        return false;
    });
</script>