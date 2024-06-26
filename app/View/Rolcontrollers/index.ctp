<div class="rolcontrollers index">
	<h2><?php echo __('Rolcontrollers'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('controller'); ?></th>
			<th><?php echo $this->Paginator->sort('view'); ?></th>
			<th><?php echo $this->Paginator->sort('created'); ?></th>
			<th><?php echo $this->Paginator->sort('modified'); ?></th>
			<th><?php echo $this->Paginator->sort('role_id'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($rolcontrollers as $rolcontroller): ?>
	<tr>
		<td><?php echo h($rolcontroller['Rolcontroller']['id']); ?>&nbsp;</td>
		<td><?php echo h($rolcontroller['Rolcontroller']['controller']); ?>&nbsp;</td>
		<td><?php echo h($rolcontroller['Rolcontroller']['view']); ?>&nbsp;</td>
		<td><?php echo h($rolcontroller['Rolcontroller']['created']); ?>&nbsp;</td>
		<td><?php echo h($rolcontroller['Rolcontroller']['modified']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($rolcontroller['Role']['name'], array('controller' => 'roles', 'action' => 'view', $rolcontroller['Role']['id'])); ?>
		</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $rolcontroller['Rolcontroller']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $rolcontroller['Rolcontroller']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $rolcontroller['Rolcontroller']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $rolcontroller['Rolcontroller']['id']))); ?>
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
		<li><?php echo $this->Html->link(__('New Rolcontroller'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Roles'), array('controller' => 'roles', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Role'), array('controller' => 'roles', 'action' => 'add')); ?> </li>
	</ul>
</div>
