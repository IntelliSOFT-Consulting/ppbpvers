<?php
$this->assign('CMS', 'active');
?>

<!-- CMS
    ================================================== -->
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
        <div class="row-fluid">
            <div class="span12">
                <div class="whmcscontainer">
                    <div class="contentpadded">
                        <div class="page-header">
                            <div class="styled_title">
                                <h1>View Sub County</h1>
                            </div>
                        </div>
                        <h3><?= h($subCounty->id) ?></h3>
                        <table>
                            <tr>
                                <th><?= __('County') ?></th>
                                <td><?= $subCounty->has('county') ? $this->Html->link($subCounty->county->id, ['controller' => 'Counties', 'action' => 'view', $subCounty->county->id]) : '' ?></td>
                            </tr>
                            <tr>
                                <th><?= __('Sub County Name') ?></th>
                                <td><?= h($subCounty->sub_county_name) ?></td>
                            </tr>
                            <tr>
                                <th><?= __('County Name') ?></th>
                                <td><?= h($subCounty->county_name) ?></td>
                            </tr>
                            <tr>
                                <th><?= __('Province') ?></th>
                                <td><?= h($subCounty->Province) ?></td>
                            </tr>
                            <tr>
                                <th><?= __('Pop 2009') ?></th>
                                <td><?= h($subCounty->Pop_2009) ?></td>
                            </tr>
                            <tr>
                                <th><?= __('RegVoters') ?></th>
                                <td><?= h($subCounty->RegVoters) ?></td>
                            </tr>
                            <tr>
                                <th><?= __('AreaSqKms') ?></th>
                                <td><?= h($subCounty->AreaSqKms) ?></td>
                            </tr>
                            <tr>
                                <th><?= __('CAWards') ?></th>
                                <td><?= h($subCounty->CAWards) ?></td>
                            </tr>
                            <tr>
                                <th><?= __('MainEthnicGroup') ?></th>
                                <td><?= h($subCounty->MainEthnicGroup) ?></td>
                            </tr>
                            <tr>
                                <th><?= __('Id') ?></th>
                                <td><?= $this->Number->format($subCounty->id) ?></td>
                            </tr>
                            <tr>
                                <th><?= __('Created') ?></th>
                                <td><?= h($subCounty->created) ?></td>
                            </tr>
                            <tr>
                                <th><?= __('Modified') ?></th>
                                <td><?= h($subCounty->modified) ?></td>
                            </tr>
                        </table>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>