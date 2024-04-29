<div class="users view">
<h2><?php echo __('User'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($user['User']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($user['User']['name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Last Name'); ?></dt>
		<dd>
			<?php echo h($user['User']['last_name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Username'); ?></dt>
		<dd>
			<?php echo h($user['User']['username']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Cell Phone'); ?></dt>
		<dd>
			<?php echo h($user['User']['cell_phone']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Telephone'); ?></dt>
		<dd>
			<?php echo h($user['User']['telephone']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Address'); ?></dt>
		<dd>
			<?php echo h($user['User']['address']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Email'); ?></dt>
		<dd>
			<?php echo h($user['User']['email']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Password'); ?></dt>
		<dd>
			<?php echo h($user['User']['password']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Reset Password Token'); ?></dt>
		<dd>
			<?php echo h($user['User']['reset_password_token']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Token Created At'); ?></dt>
		<dd>
			<?php echo h($user['User']['token_created_at']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Dni'); ?></dt>
		<dd>
			<?php echo h($user['User']['dni']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Genere'); ?></dt>
		<dd>
			<?php echo h($user['User']['genere']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Active'); ?></dt>
		<dd>
			<?php echo h($user['User']['active']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Dnilocated'); ?></dt>
		<dd>
			<?php echo h($user['User']['dnilocated']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Dnitype'); ?></dt>
		<dd>
			<?php echo h($user['User']['dnitype']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Department'); ?></dt>
		<dd>
			<?php echo h($user['User']['department']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Status Employ'); ?></dt>
		<dd>
			<?php echo h($user['User']['status_employ']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($user['User']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($user['User']['modified']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Role'); ?></dt>
		<dd>
			<?php echo $this->Html->link($user['Role']['name'], array('controller' => 'roles', 'action' => 'view', $user['Role']['id'])); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit User'), array('action' => 'edit', $user['User']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete User'), array('action' => 'delete', $user['User']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $user['User']['id']))); ?> </li>
		<li><?php echo $this->Html->link(__('List Users'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Roles'), array('controller' => 'roles', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Role'), array('controller' => 'roles', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Incidents'), array('controller' => 'incidents', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Incident'), array('controller' => 'incidents', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Incomes'), array('controller' => 'incomes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Income'), array('controller' => 'incomes', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Mailboxes'), array('controller' => 'mailboxes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Mailbox'), array('controller' => 'mailboxes', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Rounds'), array('controller' => 'rounds', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Round'), array('controller' => 'rounds', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Routes'), array('controller' => 'routes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Route'), array('controller' => 'routes', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Shifts'), array('controller' => 'shifts', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Shift'), array('controller' => 'shifts', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Incidents'); ?></h3>
	<?php if (!empty($user['Incident'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Name'); ?></th>
		<th><?php echo __('Incident'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Modified'); ?></th>
		<th><?php echo __('Parking Id'); ?></th>
		<th><?php echo __('Apartament Id'); ?></th>
		<th><?php echo __('Complex Id'); ?></th>
		<th><?php echo __('Deposit Id'); ?></th>
		<th><?php echo __('Mailbox Id'); ?></th>
		<th><?php echo __('Zone Id'); ?></th>
		<th><?php echo __('Incomes Id'); ?></th>
		<th><?php echo __('User Id'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($user['Incident'] as $incident): ?>
		<tr>
			<td><?php echo $incident['id']; ?></td>
			<td><?php echo $incident['name']; ?></td>
			<td><?php echo $incident['incident']; ?></td>
			<td><?php echo $incident['created']; ?></td>
			<td><?php echo $incident['modified']; ?></td>
			<td><?php echo $incident['parking_id']; ?></td>
			<td><?php echo $incident['apartament_id']; ?></td>
			<td><?php echo $incident['complex_id']; ?></td>
			<td><?php echo $incident['deposit_id']; ?></td>
			<td><?php echo $incident['mailbox_id']; ?></td>
			<td><?php echo $incident['zone_id']; ?></td>
			<td><?php echo $incident['incomes_id']; ?></td>
			<td><?php echo $incident['user_id']; ?></td>
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
<div class="related">
	<h3><?php echo __('Related Incomes'); ?></h3>
	<?php if (!empty($user['Income'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Comment'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Modified'); ?></th>
		<th><?php echo __('Visitor Id'); ?></th>
		<th><?php echo __('Complex Id'); ?></th>
		<th><?php echo __('Apartment Id'); ?></th>
		<th><?php echo __('Parking Id'); ?></th>
		<th><?php echo __('User Id'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($user['Income'] as $income): ?>
		<tr>
			<td><?php echo $income['id']; ?></td>
			<td><?php echo $income['comment']; ?></td>
			<td><?php echo $income['created']; ?></td>
			<td><?php echo $income['modified']; ?></td>
			<td><?php echo $income['visitor_id']; ?></td>
			<td><?php echo $income['complex_id']; ?></td>
			<td><?php echo $income['apartment_id']; ?></td>
			<td><?php echo $income['parking_id']; ?></td>
			<td><?php echo $income['user_id']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'incomes', 'action' => 'view', $income['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'incomes', 'action' => 'edit', $income['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'incomes', 'action' => 'delete', $income['id']), array('confirm' => __('Are you sure you want to delete # %s?', $income['id']))); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Income'), array('controller' => 'incomes', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Mailboxes'); ?></h3>
	<?php if (!empty($user['Mailbox'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Name'); ?></th>
		<th><?php echo __('Input'); ?></th>
		<th><?php echo __('Ouput'); ?></th>
		<th><?php echo __('Signature'); ?></th>
		<th><?php echo __('Comment'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Modified'); ?></th>
		<th><?php echo __('Article Id'); ?></th>
		<th><?php echo __('Apartament Id'); ?></th>
		<th><?php echo __('User Id'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($user['Mailbox'] as $mailbox): ?>
		<tr>
			<td><?php echo $mailbox['id']; ?></td>
			<td><?php echo $mailbox['name']; ?></td>
			<td><?php echo $mailbox['input']; ?></td>
			<td><?php echo $mailbox['ouput']; ?></td>
			<td><?php echo $mailbox['signature']; ?></td>
			<td><?php echo $mailbox['comment']; ?></td>
			<td><?php echo $mailbox['created']; ?></td>
			<td><?php echo $mailbox['modified']; ?></td>
			<td><?php echo $mailbox['article_id']; ?></td>
			<td><?php echo $mailbox['apartament_id']; ?></td>
			<td><?php echo $mailbox['user_id']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'mailboxes', 'action' => 'view', $mailbox['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'mailboxes', 'action' => 'edit', $mailbox['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'mailboxes', 'action' => 'delete', $mailbox['id']), array('confirm' => __('Are you sure you want to delete # %s?', $mailbox['id']))); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Mailbox'), array('controller' => 'mailboxes', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Rounds'); ?></h3>
	<?php if (!empty($user['Round'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Comment'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Modified'); ?></th>
		<th><?php echo __('Company Id'); ?></th>
		<th><?php echo __('Complex Id'); ?></th>
		<th><?php echo __('User Id'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($user['Round'] as $round): ?>
		<tr>
			<td><?php echo $round['id']; ?></td>
			<td><?php echo $round['comment']; ?></td>
			<td><?php echo $round['created']; ?></td>
			<td><?php echo $round['modified']; ?></td>
			<td><?php echo $round['company_id']; ?></td>
			<td><?php echo $round['complex_id']; ?></td>
			<td><?php echo $round['user_id']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'rounds', 'action' => 'view', $round['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'rounds', 'action' => 'edit', $round['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'rounds', 'action' => 'delete', $round['id']), array('confirm' => __('Are you sure you want to delete # %s?', $round['id']))); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Round'), array('controller' => 'rounds', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Routes'); ?></h3>
	<?php if (!empty($user['Route'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Comment'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Modified'); ?></th>
		<th><?php echo __('Zone Id'); ?></th>
		<th><?php echo __('User Id'); ?></th>
		<th><?php echo __('Incident Id'); ?></th>
		<th><?php echo __('Complex Id'); ?></th>
		<th><?php echo __('Company Id'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($user['Route'] as $route): ?>
		<tr>
			<td><?php echo $route['id']; ?></td>
			<td><?php echo $route['comment']; ?></td>
			<td><?php echo $route['created']; ?></td>
			<td><?php echo $route['modified']; ?></td>
			<td><?php echo $route['zone_id']; ?></td>
			<td><?php echo $route['user_id']; ?></td>
			<td><?php echo $route['incident_id']; ?></td>
			<td><?php echo $route['complex_id']; ?></td>
			<td><?php echo $route['company_id']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'routes', 'action' => 'view', $route['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'routes', 'action' => 'edit', $route['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'routes', 'action' => 'delete', $route['id']), array('confirm' => __('Are you sure you want to delete # %s?', $route['id']))); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Route'), array('controller' => 'routes', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Shifts'); ?></h3>
	<?php if (!empty($user['Shift'])): ?>
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
	<?php foreach ($user['Shift'] as $shift): ?>
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
