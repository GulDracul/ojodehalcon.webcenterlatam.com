<div class="rolcontrollers form">
<?php echo $this->Form->create('Rolcontroller'); ?>
	<fieldset>
		<legend><?php echo __('Edit Rolcontroller'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('controller');
		echo $this->Form->input('view');
		echo $this->Form->input('role_id');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Rolcontroller.id')), array('confirm' => __('Are you sure you want to delete # %s?', $this->Form->value('Rolcontroller.id')))); ?></li>
		<li><?php echo $this->Html->link(__('List Rolcontrollers'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Roles'), array('controller' => 'roles', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Role'), array('controller' => 'roles', 'action' => 'add')); ?> </li>
	</ul>
</div>
