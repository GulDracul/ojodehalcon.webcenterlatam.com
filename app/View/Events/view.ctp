<div class="events view">
<h2><?php echo __('Event'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($event['Event']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($event['Event']['name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Comment'); ?></dt>
		<dd>
			<?php echo h($event['Event']['comment']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($event['Event']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($event['Event']['modified']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Event'), array('action' => 'edit', $event['Event']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Event'), array('action' => 'delete', $event['Event']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $event['Event']['id']))); ?> </li>
		<li><?php echo $this->Html->link(__('List Events'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Event'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Incidents'), array('controller' => 'incidents', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Incident'), array('controller' => 'incidents', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Incidents'); ?></h3>
	<?php if (!empty($event['Incident'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Name'); ?></th>
		<th><?php echo __('Incident'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Modified'); ?></th>
		<th><?php echo __('Parking Id'); ?></th>
		<th><?php echo __('Apartment Id'); ?></th>
		<th><?php echo __('Complex Id'); ?></th>
		<th><?php echo __('Deposit Id'); ?></th>
		<th><?php echo __('Mailbox Id'); ?></th>
		<th><?php echo __('Zone Id'); ?></th>
		<th><?php echo __('Incomes Id'); ?></th>
		<th><?php echo __('User Id'); ?></th>
		<th><?php echo __('Event Id'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($event['Incident'] as $incident): ?>
		<tr>
			<td><?php echo $incident['id']; ?></td>
			<td><?php echo $incident['name']; ?></td>
			<td><?php echo $incident['incident']; ?></td>
			<td><?php echo $incident['created']; ?></td>
			<td><?php echo $incident['modified']; ?></td>
			<td><?php echo $incident['parking_id']; ?></td>
			<td><?php echo $incident['apartment_id']; ?></td>
			<td><?php echo $incident['complex_id']; ?></td>
			<td><?php echo $incident['deposit_id']; ?></td>
			<td><?php echo $incident['mailbox_id']; ?></td>
			<td><?php echo $incident['zone_id']; ?></td>
			<td><?php echo $incident['incomes_id']; ?></td>
			<td><?php echo $incident['user_id']; ?></td>
			<td><?php echo $incident['event_id']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'incidents', 'action' => 'view', $incident['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'incidents', 'action' => 'edit', $incident['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'incidents', 'action' => 'delete', $incident['id']), array('confirm' => __('Are you sure you want to delete # %s?', $incident['id']))); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Incident'), array('controller' => 'incidents', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
