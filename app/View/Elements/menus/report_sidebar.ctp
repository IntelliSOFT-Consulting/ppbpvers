    
    <ul class="nav nav-list sidebar-<?php echo $redir; ?>">
      <li class="text-center <?php echo $this->fetch('reports-home'); ?>">
      	<?php
            echo $this->Html->link('REPORTS',  array('controller' => 'reports', 'action'=>'index', 'prefix' => false ), array('escape' => false, 'class' => 'text-success'));
        ?>
      </li>      
      <li class="divider"></li>
      <li class="nav-header"><i class="fa fa-ambulance" aria-hidden="true"></i> SADRs</li>
      <li class="<?php echo $this->fetch('sadrs-by-designation'); ?>">
      	<?php
            echo $this->Html->link('<i class="fa fa-caret-right" aria-hidden="true"></i> Reporter Qualification',  array('controller' => 'reports', 'action'=>'sadrs_by_designation', 'admin' => false ),
                      array('escape' => false));
        ?>
      </li>
      <li class="<?php echo $this->fetch('sadrs-by-age'); ?>">
      	<?php
            echo $this->Html->link('<i class="fa fa-caret-right" aria-hidden="true"></i> Age groups',  array('controller' => 'reports', 'action'=>'sadrs_by_age', 'admin' => false ),
                      array('escape' => false));
        ?>
      </li>
      <li class="<?php echo $this->fetch('sadrs-by-seriousness'); ?>">
      	<?php
            echo $this->Html->link('<i class="fa fa-caret-right" aria-hidden="true"></i> Seriousness of ADRs',  array('controller' => 'reports', 'action'=>'sadrs_by_seriousness', 'admin' => false ),
                      array('escape' => false));
        ?>
      </li>
      <li class="<?php echo $this->fetch('sadrs-by-reason'); ?>">
      	<?php
            echo $this->Html->link('<i class="fa fa-caret-right" aria-hidden="true"></i> Reason for Seriousness',  array('controller' => 'reports', 'action'=>'sadrs_by_reason', 'admin' => false ),
                      array('escape' => false));
        ?>
      </li>
      <li class="<?php echo $this->fetch('sadrs-by-medicine'); ?>">
      	<?php
            echo $this->Html->link('<i class="fa fa-caret-right" aria-hidden="true"></i> Suspected Medicine',  array('controller' => 'reports', 'action'=>'sadrs_by_medicine', 'admin' => false ),
                      array('escape' => false));
        ?>
      </li>
      <li class="<?php echo $this->fetch('sadrs-by-gender'); ?>">
      	<?php
            echo $this->Html->link('<i class="fa fa-caret-right" aria-hidden="true"></i> Gender',  array('controller' => 'reports', 'action'=>'sadrs_by_gender', 'admin' => false ),
                      array('escape' => false));
        ?>
      </li>
      <li class="<?php echo $this->fetch('sadrs-by-outcome'); ?>">
      	<?php
            echo $this->Html->link('<i class="fa fa-caret-right" aria-hidden="true"></i> Outcome',  array('controller' => 'reports', 'action'=>'sadrs_by_outcome', 'admin' => false ),
                      array('escape' => false));
        ?>
      </li>
      <li class="<?php echo $this->fetch('sadrs-by-facility'); ?>">
      	<?php
            echo $this->Html->link('<i class="fa fa-caret-right" aria-hidden="true"></i> Facility',  array('controller' => 'reports', 'action'=>'sadrs_by_facility', 'admin' => false ),
                      array('escape' => false));
        ?>
      </li>
      <li class="<?php echo $this->fetch('sadrs-by-county'); ?>">
      	<?php
            echo $this->Html->link('<i class="fa fa-caret-right" aria-hidden="true"></i> County',  array('controller' => 'reports', 'action'=>'sadrs_by_county', 'admin' => false ),
                      array('escape' => false));
        ?>
      </li>
      <li class="nav-header"><i class="fa fa-child" aria-hidden="true"></i> AEFIs</li>
      <li class="<?php echo $this->fetch('aefis-by-designation'); ?>">
      	<?php
            echo $this->Html->link('<i class="fa fa-caret-right" aria-hidden="true"></i> Reporter Qualification',  array('controller' => 'reports', 'action'=>'aefis_by_designation', 'admin' => false ),
                      array('escape' => false));
        ?>
      </li>
      <li class="<?php echo $this->fetch('aefis-by-age'); ?>">
      	<?php
            echo $this->Html->link('<i class="fa fa-caret-right" aria-hidden="true"></i> Age groups',  array('controller' => 'reports', 'action'=>'aefis_by_age', 'admin' => false ),
                      array('escape' => false));
        ?>
      </li>
      <li class="<?php echo $this->fetch('aefis-by-seriousness'); ?>">
      	<?php
            echo $this->Html->link('<i class="fa fa-caret-right" aria-hidden="true"></i> Seriousness of ADRs',  array('controller' => 'reports', 'action'=>'aefis_by_seriousness', 'admin' => false ),
                      array('escape' => false));
        ?>
      </li>
      <li class="<?php echo $this->fetch('aefis-by-reason'); ?>">
      	<?php
            echo $this->Html->link('<i class="fa fa-caret-right" aria-hidden="true"></i> Reason for Seriousness',  array('controller' => 'reports', 'action'=>'aefis_by_reason', 'admin' => false ),
                      array('escape' => false));
        ?>
      </li>
      <li class="<?php echo $this->fetch('aefis-by-vaccine'); ?>">
      	<?php
            echo $this->Html->link('<i class="fa fa-caret-right" aria-hidden="true"></i> AEFIs by Vaccine',  array('controller' => 'reports', 'action'=>'aefis_by_vaccine', 'admin' => false ),
                      array('escape' => false));
        ?>
      </li>
      <li class="<?php echo $this->fetch('aefis-by-gender'); ?>">
      	<?php
            echo $this->Html->link('<i class="fa fa-caret-right" aria-hidden="true"></i> Gender',  array('controller' => 'reports', 'action'=>'aefis_by_gender', 'admin' => false ),
                      array('escape' => false));
        ?>
      </li>
      <li class="<?php echo $this->fetch('aefis-by-outcome'); ?>">
      	<?php
            echo $this->Html->link('<i class="fa fa-caret-right" aria-hidden="true"></i> Outcome',  array('controller' => 'reports', 'action'=>'aefis_by_outcome', 'admin' => false ),
                      array('escape' => false));
        ?>
      </li>
      <li class="<?php echo $this->fetch('aefis-by-facility'); ?>">
      	<?php
            echo $this->Html->link('<i class="fa fa-caret-right" aria-hidden="true"></i> Facility',  array('controller' => 'reports', 'action'=>'aefis_by_facility', 'admin' => false ),
                      array('escape' => false));
        ?>
      </li>
      <li class="<?php echo $this->fetch('aefis-by-county'); ?>">
      	<?php
            echo $this->Html->link('<i class="fa fa-caret-right" aria-hidden="true"></i> County',  array('controller' => 'reports', 'action'=>'aefis_by_county', 'admin' => false ),
                      array('escape' => false));
        ?>
      </li>
      <li class="nav-header"><i class="fa fa-medkit" aria-hidden="true"></i> PQMPs</li>
      <li class="<?php echo $this->fetch('pqmps-by-designation'); ?>">
      	<?php
	        echo $this->Html->link('<i class="fa fa-caret-right" aria-hidden="true"></i> Reporter Qualification',  array('controller' => 'reports', 'action'=>'pqmps_by_designation', 'admin' => false ),
	                  array('escape' => false));
        ?>
      </li>
      <li class="<?php echo $this->fetch('pqmps-by-facility'); ?>">
      	<?php
            echo $this->Html->link('<i class="fa fa-caret-right" aria-hidden="true"></i> Facility',  array('controller' => 'reports', 'action'=>'pqmps_by_facility', 'admin' => false ),
                      array('escape' => false));
        ?>
      </li>
      <li class="<?php echo $this->fetch('pqmps-by-county'); ?>">
      	<?php
            echo $this->Html->link('<i class="fa fa-caret-right" aria-hidden="true"></i> County',  array('controller' => 'reports', 'action'=>'pqmps_by_county', 'admin' => false ),
                      array('escape' => false));
        ?>
      </li>
      <li class="nav-header"><i class="fa fa-stethoscope" aria-hidden="true"></i> Medical Devices</li>
      <li class="<?php echo $this->fetch('devices-by-designation'); ?>">
        <?php
            echo $this->Html->link('<i class="fa fa-caret-right" aria-hidden="true"></i> Reporter Qualification',  array('controller' => 'reports', 'action'=>'devices_by_designation', 'admin' => false ),
                      array('escape' => false));
        ?>                        	
      </li>
      <li class="<?php echo $this->fetch('devices-by-age'); ?>">
        <?php
            echo $this->Html->link('<i class="fa fa-caret-right" aria-hidden="true"></i> Age groups',  array('controller' => 'reports', 'action'=>'devices_by_age', 'admin' => false ),
                      array('escape' => false));
        ?>                        	
      </li>
      <li class="<?php echo $this->fetch('devices-by-seriousness'); ?>">
      	<?php
            echo $this->Html->link('<i class="fa fa-caret-right" aria-hidden="true"></i> Seriousness of ADRs',  array('controller' => 'reports', 'action'=>'devices_by_seriousness', 'admin' => false ),
                      array('escape' => false));
        ?>
      </li>
      <li class="<?php echo $this->fetch('devices-by-reason'); ?>">
      	<?php
            echo $this->Html->link('<i class="fa fa-caret-right" aria-hidden="true"></i> Reason for Seriousness',  array('controller' => 'reports', 'action'=>'devices_by_reason', 'admin' => false ),
                      array('escape' => false));
        ?>
      </li>
      <li class="<?php echo $this->fetch('devices-by-brand'); ?>">
      	<?php
            echo $this->Html->link('<i class="fa fa-caret-right" aria-hidden="true"></i> Devices by Brand',  array('controller' => 'reports', 'action'=>'devices_by_brand', 'admin' => false ),
                      array('escape' => false));
        ?>
      </li>
      <li class="<?php echo $this->fetch('devices-by-gender'); ?>">
      	<?php
            echo $this->Html->link('<i class="fa fa-caret-right" aria-hidden="true"></i> Gender',  array('controller' => 'reports', 'action'=>'devices_by_gender', 'admin' => false ),
                      array('escape' => false));
        ?>
      </li>
      <li class="<?php echo $this->fetch('devices-by-outcome'); ?>">
      	<?php
            echo $this->Html->link('<i class="fa fa-caret-right" aria-hidden="true"></i> Outcome',  array('controller' => 'reports', 'action'=>'devices_by_outcome', 'admin' => false ),
                      array('escape' => false));
        ?>
      </li>
      <li class="<?php echo $this->fetch('devices-by-facility'); ?>">
      	<?php
            echo $this->Html->link('<i class="fa fa-caret-right" aria-hidden="true"></i> Facility',  array('controller' => 'reports', 'action'=>'devices_by_facility', 'admin' => false ),
                      array('escape' => false));
        ?>
      </li>
      <li class="<?php echo $this->fetch('devices-by-county'); ?>">
      	<?php
            echo $this->Html->link('<i class="fa fa-caret-right" aria-hidden="true"></i> County',  array('controller' => 'reports', 'action'=>'devices_by_county', 'admin' => false ),
                      array('escape' => false));
        ?>
      </li>
      <li class="nav-header"><i class="fa fa-chain-broken" aria-hidden="true"></i> Medication Errors</li>
      <li class="<?php echo $this->fetch('medications-by-designation'); ?>">
      	<?php
            echo $this->Html->link('<i class="fa fa-caret-right" aria-hidden="true"></i> Reporter Qualification',  array('controller' => 'reports', 'action'=>'medications_by_designation', 'admin' => false ),
                      array('escape' => false));
        ?>
      </li>
      <li class="<?php echo $this->fetch('medications-by-age'); ?>">
      	<?php
            echo $this->Html->link('<i class="fa fa-caret-right" aria-hidden="true"></i> Age group',  array('controller' => 'reports', 'action'=>'medications_by_age', 'admin' => false ),
                      array('escape' => false));
        ?>
      </li>
      <li class="<?php echo $this->fetch('medications-by-gender'); ?>">
      	<?php
            echo $this->Html->link('<i class="fa fa-caret-right" aria-hidden="true"></i> Gender',  array('controller' => 'reports', 'action'=>'medications_by_gender', 'admin' => false ),
                      array('escape' => false));
        ?>
      </li>
      <li class="<?php echo $this->fetch('medications-by-facility'); ?>">
      	<?php
            echo $this->Html->link('<i class="fa fa-caret-right" aria-hidden="true"></i> Facility',  array('controller' => 'reports', 'action'=>'medications_by_facility', 'admin' => false ),
                      array('escape' => false));
        ?>
      </li>
      <li class="<?php echo $this->fetch('medications-by-county'); ?>">
      	<?php
            echo $this->Html->link('<i class="fa fa-caret-right" aria-hidden="true"></i> County',  array('controller' => 'reports', 'action'=>'medications_by_county', 'admin' => false ),
                      array('escape' => false));
        ?>
      </li>
      <li class="nav-header"><i class="fa fa-eyedropper" aria-hidden="true"></i> Blood Transfusion</li>
      <li class="<?php echo $this->fetch('transfusions-by-designation'); ?>">
      	<?php
            echo $this->Html->link('<i class="fa fa-caret-right" aria-hidden="true"></i> Reporter Qualification',  array('controller' => 'reports', 'action'=>'transfusions_by_designation', 'admin' => false ),
                      array('escape' => false));
        ?>
      </li>
      <li class="<?php echo $this->fetch('transfusions-by-age'); ?>">
      	<?php
            echo $this->Html->link('<i class="fa fa-caret-right" aria-hidden="true"></i> Age group',  array('controller' => 'reports', 'action'=>'transfusions_by_age', 'admin' => false ),
                      array('escape' => false));
        ?>
      </li>
      <li class="<?php echo $this->fetch('transfusions-by-gender'); ?>">
      	<?php
            echo $this->Html->link('<i class="fa fa-caret-right" aria-hidden="true"></i> Gender',  array('controller' => 'reports', 'action'=>'transfusions_by_gender', 'admin' => false ),
                      array('escape' => false));
        ?>
      </li>
      <li class="<?php echo $this->fetch('transfusions-by-county'); ?>">
      	<?php
            echo $this->Html->link('<i class="fa fa-caret-right" aria-hidden="true"></i> County',  array('controller' => 'reports', 'action'=>'transfusions_by_county', 'admin' => false ),
                      array('escape' => false));
        ?>
      </li>
      <li class="nav-header"><i class="fa fa-thermometer-full" aria-hidden="true"></i> SAEs</li>
      <li class="<?php echo $this->fetch('saes-by-age'); ?>">
      	<?php
            echo $this->Html->link('<i class="fa fa-caret-right" aria-hidden="true"></i> Age group',  array('controller' => 'reports', 'action'=>'saes_by_age', 'admin' => false ),
                      array('escape' => false));
        ?>
      </li>
      <li class="divider"></li>
    </ul>