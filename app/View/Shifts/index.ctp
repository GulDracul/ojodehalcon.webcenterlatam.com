<div class="shifts index">
	<h2><?php echo __('Shifts'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('name'); ?></th>
			<th><?php echo $this->Paginator->sort('created'); ?></th>
			<th><?php echo $this->Paginator->sort('modified'); ?></th>
			<th><?php echo $this->Paginator->sort('schedule_id'); ?></th>
			<th><?php echo $this->Paginator->sort('complex_id'); ?></th>
			<th><?php echo $this->Paginator->sort('company_id'); ?></th>
			<th><?php echo $this->Paginator->sort('user_id'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($shifts as $shift): ?>
	<tr>
		<td><?php echo h($shift['Shift']['id']); ?>&nbsp;</td>
		<td><?php echo h($shift['Shift']['name']); ?>&nbsp;</td>
		<td><?php echo h($shift['Shift']['created']); ?>&nbsp;</td>
		<td><?php echo h($shift['Shift']['modified']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($shift['Schedule']['name'], array('controller' => 'schedules', 'action' => 'view', $shift['Schedule']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($shift['Complex']['name'], array('controller' => 'complexes', 'action' => 'view', $shift['Complex']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($shift['Company']['name'], array('controller' => 'companies', 'action' => 'view', $shift['Company']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($shift['User']['name'], array('controller' => 'users', 'action' => 'view', $shift['User']['id'])); ?>
		</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $shift['Shift']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $shift['Shift']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $shift['Shift']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $shift['Shift']['id']))); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</tbody>
	</table>
	<p>
	<?php
	echo $this->Paginator->counter(array(
		'format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')
	));
	?>	</p>
	<div class="paging">
	<?php
		echo $this->Paginator->prev('< ' . __('previous'), array(), null, array('class' => 'prev disabled'));
		echo $this->Paginator->numbers(array('separator' => ''));
		echo $this->Paginator->next(__('next') . ' >', array(), null, array('class' => 'next disabled'));
	?>
	</div>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('New Shift'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Schedules'), array('controller' => 'schedules', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Schedule'), array('controller' => 'schedules', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Complexes'), array('controller' => 'complexes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Complex'), array('controller' => 'complexes', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Companies'), array('controller' => 'companies', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Company'), array('controller' => 'companies', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
	</ul>
</div>
