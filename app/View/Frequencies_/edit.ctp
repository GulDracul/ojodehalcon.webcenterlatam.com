<div class="frequencies form">
<?php echo $this->Form->create('Frequency'); ?>
	<fieldset>
		<legend><?php echo __('Edit Frequency'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('name');
		 echo $this->Form->input('start');
		 echo $this->Form->input('end');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Frequency.id')), array('confirm' => __('Are you sure you want to delete # %s?', $this->Form->value('Frequency.id')))); ?></li>
		<li><?php echo $this->Html->link(__('List Frequencies'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Hours'), array('controller' => 'hours', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Hour'), array('controller' => 'hours', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Routes'), array('controller' => 'routes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Route'), array('controller' => 'routes', 'action' => 'add')); ?> </li>
	</ul>
</div>
