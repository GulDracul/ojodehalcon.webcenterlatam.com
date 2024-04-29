<div class="schedules view">
<h2><?php echo __('Schedule'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($schedule['Schedule']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($schedule['Schedule']['name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($schedule['Schedule']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($schedule['Schedule']['modified']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Start'); ?></dt>
		<dd>
			<?php echo h($schedule['Schedule']['start']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('End'); ?></dt>
		<dd>
			<?php echo h($schedule['Schedule']['end']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Schedule'), array('action' => 'edit', $schedule['Schedule']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Schedule'), array('action' => 'delete', $schedule['Schedule']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $schedule['Schedule']['id']))); ?> </li>
		<li><?php echo $this->Html->link(__('List Schedules'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Schedule'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Shifts'), array('controller' => 'shifts', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Shift'), array('controller' => 'shifts', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Shifts'); ?></h3>
	<?php if (!empty($schedule['Shift'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Name'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Modified'); ?></th>
		<th><?php echo __('Schedule Id'); ?></th>
		<th><?php echo __('Complex Id'); ?></th>
		<th><?php echo __('Company Id'); ?></th>
		<th><?php echo __('User Id'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($schedule['Shift'] as $shift): ?>
		<tr>
			<td><?php echo $shift['id']; ?></td>
			<td><?php echo $shift['name']; ?></td>
			<td><?php echo $shift['created']; ?></td>
			<td><?php echo $shift['modified']; ?></td>
			<td><?php echo $shift['schedule_id']; ?></td>
			<td><?php echo $shift['complex_id']; ?></td>
			<td><?php echo $shift['company_id']; ?></td>
			<td><?php echo $shift['user_id']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'shifts', 'action' => 'view', $shift['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'shifts', 'action' => 'edit', $shift['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'shifts', 'action' => 'delete', $shift['id']), array('confirm' => __('Are you sure you want to delete # %s?', $shift['id']))); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Shift'), array('controller' => 'shifts', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
