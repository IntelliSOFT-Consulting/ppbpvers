<?php
	$this->assign('Content', 'active');
 ?>

      <!-- CMS
    ================================================== -->
	<h3>FEEDBACK <small>User Feedback from the front end. <br/><span class="label label-important">NOTE:</span> Where a report ID is included, the feedback was given after the user submitted a report.</small></h3>
		<hr>
	<div class="row-fluid" style="margin-bottom: 9px;">
		<div class="span2 columns">
			<div class="row-fluid">
				<div class="span12">
					<div class="well" style="padding: 8px 0;">
						<ul class="nav nav-list">
						<li class="nav-header"><i class="icon-glass"></i>  Filter Options </li>
						<li class="divider"></li>
						<li class="active">
							<?php echo $this->Html->link('<i class="icon-book"></i> FEEDBACK',
									array('controller' => 'feedbacks', 'action' => 'index', 'admin' => true),
									array('escape' => false)); ?>
						</li>
						<li class="divider"></li>
						</ul>
				    </div> <!-- /well -->
				</div><!--/span-->
			</div><!--/row-->
		</div> <!-- /span5 -->

		<div class="span10 columns">
				<?php  ?>

				<div class="row-fluid">
					<?php
						if(count($feedbacks) >  0) { ?>
					<p>
					<?php
						echo $this->Paginator->counter(
                            __('Page <span class="badge">{{page}}</span> of <span class="badge">{{pages}}</span>, 
                                showing <span class="badge">{{current}}</span> Feedbacks out of 
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
						<table  class="table table-striped">
						<thead>
							<tr>
								<th style="width:3%">#</th>
								<th><?php echo $this->Paginator->sort('id');?></th>
								<th><?php echo $this->Paginator->sort('email', "Email / Phone No.");?></th>
								<th><?php echo $this->Paginator->sort('feedback', "Message");?></th>
								<th><?php echo $this->Paginator->sort('created');?></th>
								<th><?php echo __('Actions');?></th>
							</tr>
						</thead>
						<tbody>
						<?php
						$counder = 0;//($this->request->paging['page'] - 1) * $this->request->paging['limit'];
						foreach ($feedbacks as $feedback): ?>
							<tr>
								<td ><p class="tablenums"><?php $counder++; echo $counder;?>.</p></td>
								<td><?php echo h($feedback['id']); ?>&nbsp;</td>
								<td><?php echo h($feedback['email']); ?>&nbsp;</td>
								<td><?php echo h($feedback['feedback']); ?>&nbsp;</td>
								<td><?php echo h($feedback['created']); ?>&nbsp;</td>
								<td>
									<?php echo $this->Html->link('<span class="label label-success tooltipper" title="View"><i class="icon-plus-sign icon-white"></i> </span>',
											array('action'=>'view', $feedback['id']), array('escape' => false)); ?>&nbsp;
									<?php echo $this->Form->postLink(__('<span class="label label-important tooltipper" title="Delete"><i class="icon-trash icon-white"></i> </span>'),
											array('action' => 'delete', $feedback['id']), array('escape' => false), __('Are you sure you want to Delete the Feedback Number %s?', $feedback['id'])); ?>&nbsp;
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
