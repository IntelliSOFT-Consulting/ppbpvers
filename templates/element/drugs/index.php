<?php
$this->assign('Registry', 'active');
?>

<div class="row-fluid">
  <div class="span12">
 
    <div class="row-fluid">
      <div class="span12">
        <?php
        if ($this->request->getSession()->read('Auth.User.user_type') != 'Public Health Program')  echo $this->Html->link(
          '<i class="fa fa-refresh" aria-hidden="true"></i>  Sync Data',
          array('controller' => 'drugs', 'action' => 'sync'),
          array('escape' => false, 'class' => 'btn btn-success')
        );
        ?>
      </div>
    </div>

    <div class="marketing">
      <div class="row-fluid">
        <div class="span12">
          <h3>Drug Registry:<small> <i class="icon-glass"></i> Filter, <i class="icon-search"></i> Search, and <i class="icon-eye-open"></i> view reports</small></h3>
          <hr class="soften" style="margin: 7px 0px;">
        </div>
      </div>
    </div>

    <?php
    echo $this->Form->create();
    // 'Drug', array(
    //   'url' => array_merge(array('action' => 'index'), $this->params['pass']),
    //   'class' => 'ctr-groups', 'style' => array('padding:9px;', 'background-color: #F5F5F5'),
    // ));
    ?>
    <table class="table table-condensed" style="margin-bottom: 2px;">
      <tbody>
        <tr>
          <td>
            <?php
            echo $this->Form->control(
              'brand_name',
              array(
                'div' => false,
                'class' => 'span12', 'label' => array('class' => 'required', 'text' => 'Brand Name')
              )
            );
            ?>
          </td>
          <td>
            <?php
            echo $this->Form->control(
              'inn_name',
              array(
                'div' => false,
                'class' => 'unauthorized_index span10', 'label' => array('class' => 'required', 'text' => 'INN Name')
              )
            );
            ?>
          </td>
          <td>
            <?php
            echo $this->Form->control(
              'batch_number',
              array(
                'div' => false,
                'class' => 'span12', 'label' => array('class' => 'required', 'text' => 'Batch Number')
              )
            );
            ?>
          </td>
          <td>
            <?php
            echo $this->Form->control(
              'manufacturer',
              array(
                'div' => false,
                'class' => 'span12', 'label' => array('class' => 'required', 'text' => 'Manufacturer')
              )
            );
            ?>
          </td>
          <td>
          </td>
          <td>
          </td>
        </tr>

        <tr>
          <td>
            <?php
            echo $this->Form->control(
              'registration_status',
              array(
                'div' => false,
                'class' => 'span12 unauthorized_index', 'label' => array('class' => 'required', 'text' => 'Registration Status')
              )
            );
            ?>
          </td>
          <td>
            <?php
            echo $this->Form->control(
              'retention_status',
              array(
                'div' => false,
                'class' => 'span12 unauthorized_index', 'label' => array('class' => 'required', 'text' => 'Retention Status')
              )
            );
            ?>
          </td>
          <td>
            <?php
            echo $this->Form->control(
              'donation',
              array(
                'div' => false,
                'class' => 'span12 unauthorized_index', 'label' => array('class' => 'required', 'text' => 'Donation')
              )
            );
            ?>
          </td>
          <td>

          </td>
          <td>
          </td>
          <td>
          </td>
          <td>
          </td>
        </tr>

        <tr>
          <td><label for="AefiPages" class="required">Pages</label></td>
          <td>
            <?php
            echo $this->Form->control('pages', array(
              'type' => 'select', 'div' => false, 'class' => 'control-small', 
            //   'selected' => $this->request->params['paging']['limit'],
              'empty' => true,
              'options' => $page_options,
              'label' => false,
            ));
            ?>
          </td>
          <td>
          </td>
          <td></td>
          <td>
            <?php
            echo $this->Form->button('<i class="icon-search icon-white"></i> Search', array(
                'escapeTitle'=>false,
              'class' => 'btn btn-primary', 'div' => 'control-group', 'div' => false,
              'formnovalidate' => 'formnovalidate',
              'style' => array('margin-bottom: 5px')
            ));
            ?>
          </td>
          <td>
            <?php
            echo $this->Html->link('<i class="icon-remove"></i> Clear', array('action' => 'index'), array('class' => 'btn', 'escape' => false, 'style' => array('margin-bottom: 5px')));
            ?>
          </td>
          <td>

          </td>
        </tr>
      </tbody>
    </table>
    <p>
      <?php
          echo $this->Paginator->counter(
            __('Page <span class="badge">{{page}}</span> of <span class="badge">{{pages}}</span>, 
        showing <span class="badge">{{current}}</span> Drugs out of 
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

    <table class="table  table-bordered table-striped"> 
      <thead>
        <tr>
          <th><?php echo $this->Paginator->sort('id'); ?></th>
          <th><?php echo $this->Paginator->sort('batch_number'); ?></th>
          <th><?php echo $this->Paginator->sort('brand_name'); ?></th>
          <th><?php echo $this->Paginator->sort('inn_name'); ?></th>
          <th><?php echo $this->Paginator->sort('manufacturer'); ?></th>
          <th><?php echo $this->Paginator->sort('local_trade_rep'); ?></th>
          <th><?php echo $this->Paginator->sort('registration_status'); ?></th>
          <th><?php echo $this->Paginator->sort('retention_status'); ?></th>
          <th><?php echo $this->Paginator->sort('donation'); ?></th>
          <th><?php echo $this->Paginator->sort('created'); ?></th>
          <th><?php echo $this->Paginator->sort('modified'); ?></th>
        </tr>
      </thead>
      <tbody>
        <?php
        foreach ($drugs as $drug) : ?>
        <tr>
          <td><?php echo h($drug['id']); ?>&nbsp;</td>
          <td><?php echo h($drug['batch_number']); ?>&nbsp;</td>
          <td><?php echo h($drug['brand_name']); ?>&nbsp;</td>
          <td><?php echo h($drug['inn_name']); ?>&nbsp;</td>
          <td><?php echo h($drug['manufacturer']); ?>&nbsp;</td>
          <td><?php echo h($drug['local_trade_rep']); ?>&nbsp;</td>
          <td><?php echo h($drug['registration_status']); ?>&nbsp;</td>
          <td><?php echo h($drug['retention_status']); ?>&nbsp;</td>
          <td><?php echo h($drug['donation']); ?>&nbsp;</td>
          <td><?php echo h($drug['created']); ?>&nbsp;</td>
          <td><?php echo h($drug['modified']); ?>&nbsp;</td>
          <tr>
        <?php endforeach; ?>
      </tbody>
    </table>
  </div>
</div>

<script type="text/javascript">
  $(function() {
    var adates = $('#AefiStartDate, #AefiEndDate').datepicker({
      minDate: "-100Y",
      maxDate: "-0D",
      dateFormat: 'dd-mm-yy',
      format: 'dd-mm-yyyy',
      endDate: '-0d',
      showButtonPanel: true,
      changeMonth: true,
      changeYear: true,
      showAnim: 'show',
      onSelect: function(selectedDate) {
        var option = this.id == "AefiStartDate" ? "minDate" : "maxDate",
          instance = $(this).data("datepicker"),
          date = $.datepicker.parseDate(
            instance.settings.dateFormat ||
            $.datepicker._defaults.dateFormat,
            selectedDate, instance.settings);
        adates.not(this).datepicker("option", option, date);
      }
    });

  });
</script>