<?php
$aC = $bC = $cC = $dC = $eC = $fC = $esC= $gC =  $hC =  $iC =  $jC = $kC = $lC = $mC = $nC = $oC = $auto = '';
// debug($this->request);
if ($this->request->getParam('controller') == 'help_infos') {


    if ($this->request->getParam('type') && $this->request->getParam('type') == 'sadr')  $aC = 'active';
    else if ($this->request->getParam('type') && $this->request->getParam('type') == 'pqmp')  $bC = 'active';
    else if ($this->request->getParam('type') && $this->request->getParam('type') == 'home')  $lC = 'active';
    else if ($this->request->getParam('type') && $this->request->getParam('type') == 'sadr_add')  $mC = 'active';
    else if ($this->request->getParam('type') && $this->request->getParam('type') == 'pqmp_add')  $nC = 'active';
    else $cC = 'active';
} else if ($this->request->getParam('controller') == 'Counties') {
    $dC = 'active';
} else if ($this->request->getParam('controller') == 'Countries') {
    $eC = 'active';
} else if ($this->request->getParam('controller') == 'SubCounties') {
    $esC = 'active';
} else if ($this->request->getParam('controller') == 'FacilityCodes') {
    $fC = 'active';
} else if ($this->request->getParam('controller') == 'Doses') {
    $gC = 'active';
} else if ($this->request->getParam('controller') == 'Frequencies') {
    $hC = 'active';
} else if ($this->request->getParam('controller') == 'Routes') {
    $iC = 'active';
} else if ($this->request->getParam('controller') == 'DrugDictionaries') {
    $jC = 'active';
} else if ($this->request->getParam('controller') == 'WhoDrugs') {
    $kC = 'active';
} else if ($this->request->getParam('controller') == 'Vaccines') {
    $oC = 'active';
} else if ($this->request->getParam('controller') == 'AutoDrugs') {
    $auto = 'active';
}
?>
<div class="well" style="padding: 8px 0;">
    <ul class="nav nav-list">
        <li class="nav-header"><i class="icon-glass"></i> Filter Options </li>
        <li class="divider"></li>

        <li class="nav-header"><i class="icon-book"></i> Drug Dictionaries </li>
        <li class="<?php echo $jC; ?>">
            <?php
            echo $this->Html->link(
                '<i class="icon-tag"></i> PPB DRUGS',
                array('controller' => 'drug_dictionaries', 'action' => 'index', 'admin' => true),
                array('escape' => false)
            );
            ?>
        </li>
        <li class="<?php echo $kC; ?>">
            <?php
            echo $this->Html->link(
                '<i class="icon-tag"></i> WHO DRUGS',
                array('controller' => 'who_drugs', 'action' => 'index', 'admin' => true),
                array('escape' => false)
            );
            ?>
        </li>
        <!-- <li class="<?php echo $auto; ?>">
			<?php
            echo $this->Html->link(
                '<i class="icon-tag"></i> AUTO DRUGS',
                array('controller' => 'auto_drugs', 'action' => 'index', 'admin' => true),
                array('escape' => false)
            );
            ?>
		</li> -->
        <li class="divider"></li>
        <li class="nav-header"><i class="icon-book"></i> OTHER CONTENT </li>
        <li class="<?php echo $dC; ?>">
            <?php
            echo $this->Html->link(
                '<i class="icon-tag"></i> COUNTIES',
                array('controller' => 'counties', 'action' => 'index', 'admin' => true),
                array('escape' => false)
            );
            ?>
        </li>
        <li class="<?php echo $esC; ?>">
            <?php
            echo $this->Html->link(
                '<i class="icon-tag"></i> SUB COUNTIES',
                array('controller' => 'sub-counties', 'action' => 'index', 'admin' => true),
                array('escape' => false)
            );
            ?>
        </li>
        <li class="<?php echo $eC; ?>">
            <?php
            echo $this->Html->link(
                '<i class="icon-tag"></i> COUNTRIES',
                array('controller' => 'countries', 'action' => 'index', 'admin' => true),
                array('escape' => false)
            );
            ?>
        </li>
        <li class="<?php echo $fC; ?>">
            <?php
            echo $this->Html->link(
                '<i class="icon-tag"></i> FACILITIES',
                array('controller' => 'facility_codes', 'action' => 'index', 'admin' => true),
                array('escape' => false)
            );
            ?>
        </li>
        <li class="<?php echo $gC; ?>">
            <?php
            echo $this->Html->link(
                '<i class="icon-tag"></i> DOSES',
                array('controller' => 'doses', 'action' => 'index', 'admin' => true),
                array('escape' => false)
            );
            ?>
        </li>
        <li class="<?php echo $hC; ?>">
            <?php
            echo $this->Html->link(
                '<i class="icon-tag"></i> FREQUENCIES',
                array('controller' => 'frequencies', 'action' => 'index', 'admin' => true),
                array('escape' => false)
            );
            ?>
        </li>
        <li class="<?php echo $iC; ?>">
            <?php
            echo $this->Html->link(
                '<i class="icon-tag"></i> ROUTES',
                array('controller' => 'routes', 'action' => 'index', 'admin' => true),
                array('escape' => false)
            );
            ?>
        </li>
        <li class="<?php echo $oC; ?>">
            <?php
            echo $this->Html->link(
                '<i class="icon-tag"></i> VACCINES',
                array('controller' => 'vaccines', 'action' => 'index', 'admin' => true),
                array('escape' => false)
            );
            ?>
        </li>
        <li class="divider"></li>
    </ul>
</div> <!-- /well -->