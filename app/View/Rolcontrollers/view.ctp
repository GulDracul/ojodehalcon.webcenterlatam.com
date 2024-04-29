<div class="rolcontrollers view">
<h2><?php echo __('Rolcontroller'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($rolcontroller['Rolcontroller']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Controller'); ?></dt>
		<dd>
			<?php echo h($rolcontroller['Rolcontroller']['controller']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('View'); ?></dt>
		<dd>
			<?php echo h($rolcontroller['Rolcontroller']['view']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($rolcontroller['Rolcontroller']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($rolcontroller['Rolcontroller']['modified']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Role'); ?></dt>
		<dd>
			<?php echo $this->Html->link($rolcontroller['Role']['name'], array('controller' => 'roles', 'action' => 'view', $rolcontroller['Role']['id'])); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Rolcontroller'), array('action' => 'edit', $rolcontroller['Rolcontroller']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Rolcontroller'), array('action' => 'delete', $rolcontroller['Rolcontroller']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $rolcontroller['Rolcontroller']['id']))); ?> </li>
		<li><?php echo $this->Html->link(__('List Rolcontrollers'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Rolcontroller'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Roles'), array('controller' => 'roles', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Role'), array('controller' => 'roles', 'action' => 'add')); ?> </li>
	</ul>
</div>
