<div class="frequencies view">
<h2><?php echo __('Frequency'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($frequency['Frequency']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($frequency['Frequency']['name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($frequency['Frequency']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($frequency['Frequency']['modified']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Frequency'), array('action' => 'edit', $frequency['Frequency']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Frequency'), array('action' => 'delete', $frequency['Frequency']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $frequency['Frequency']['id']))); ?> </li>
		<li><?php echo $this->Html->link(__('List Frequencies'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Frequency'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Hours'), array('controller' => 'hours', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Hour'), array('controller' => 'hours', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Routes'), array('controller' => 'routes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Route'), array('controller' => 'routes', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Hours'); ?></h3>
	<?php if (!empty($frequency['Hour'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Zone Id'); ?></th>
		<th><?php echo __('Frequency Id'); ?></th>
		<th><?php echo __('Start'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($frequency['Hour'] as $hour): ?>
		<tr>
			<td><?php echo $hour['id']; ?></td>
			<td><?php echo $hour['zone_id']; ?></td>
			<td><?php echo $hour['frequency_id']; ?></td>
			<td><?php echo $hour['start']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'hours', 'action' => 'view', $hour['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'hours', 'action' => 'edit', $hour['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'hours', 'action' => 'delete', $hour['id']), array('confirm' => __('Are you sure you want to delete # %s?', $hour['id']))); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Hour'), array('controller' => 'hours', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Routes'); ?></h3>
	<?php if (!empty($frequency['Route'])): ?>
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
		<th><?php echo __('Frequency Id'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($frequency['Route'] as $route): ?>
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
			<td><?php echo $route['frequency_id']; ?></td>
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
