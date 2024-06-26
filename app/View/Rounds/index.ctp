<div class="rounds index">
	<h2><?php echo __('Rounds'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('comment'); ?></th>
			<th><?php echo $this->Paginator->sort('created'); ?></th>
			<th><?php echo $this->Paginator->sort('modified'); ?></th>
			<th><?php echo $this->Paginator->sort('company_id'); ?></th>
			<th><?php echo $this->Paginator->sort('complex_id'); ?></th>
			<th><?php echo $this->Paginator->sort('user_id'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($rounds as $round): ?>
	<tr>
		<td><?php echo h($round['Round']['id']); ?>&nbsp;</td>
		<td><?php echo h($round['Round']['comment']); ?>&nbsp;</td>
		<td><?php echo h($round['Round']['created']); ?>&nbsp;</td>
		<td><?php echo h($round['Round']['modified']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($round['Company']['name'], array('controller' => 'companies', 'action' => 'view', $round['Company']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($round['Complex']['name'], array('controller' => 'complexes', 'action' => 'view', $round['Complex']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($round['User']['name'], array('controller' => 'users', 'action' => 'view', $round['User']['id'])); ?>
		</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $round['Round']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $round['Round']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $round['Round']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $round['Round']['id']))); ?>
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
		<li><?php echo $this->Html->link(__('New Round'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Companies'), array('controller' => 'companies', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Company'), array('controller' => 'companies', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Complexes'), array('controller' => 'complexes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Complex'), array('controller' => 'complexes', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
	</ul>
</div>
