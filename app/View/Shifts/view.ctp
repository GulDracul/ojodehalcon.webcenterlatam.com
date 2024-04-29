<div class="shifts view">
<h2><?php echo __('Shift'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($shift['Shift']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($shift['Shift']['name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($shift['Shift']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($shift['Shift']['modified']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Schedule'); ?></dt>
		<dd>
			<?php echo $this->Html->link($shift['Schedule']['name'], array('controller' => 'schedules', 'action' => 'view', $shift['Schedule']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Complex'); ?></dt>
		<dd>
			<?php echo $this->Html->link($shift['Complex']['name'], array('controller' => 'complexes', 'action' => 'view', $shift['Complex']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Company'); ?></dt>
		<dd>
			<?php echo $this->Html->link($shift['Company']['name'], array('controller' => 'companies', 'action' => 'view', $shift['Company']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('User'); ?></dt>
		<dd>
			<?php echo $this->Html->link($shift['User']['name'], array('controller' => 'users', 'action' => 'view', $shift['User']['id'])); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Shift'), array('action' => 'edit', $shift['Shift']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Shift'), array('action' => 'delete', $shift['Shift']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $shift['Shift']['id']))); ?> </li>
		<li><?php echo $this->Html->link(__('List Shifts'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Shift'), array('action' => 'add')); ?> </li>
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
