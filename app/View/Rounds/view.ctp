<div class="rounds view">
<h2><?php echo __('Round'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($round['Round']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Comment'); ?></dt>
		<dd>
			<?php echo h($round['Round']['comment']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($round['Round']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($round['Round']['modified']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Company'); ?></dt>
		<dd>
			<?php echo $this->Html->link($round['Company']['name'], array('controller' => 'companies', 'action' => 'view', $round['Company']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Complex'); ?></dt>
		<dd>
			<?php echo $this->Html->link($round['Complex']['name'], array('controller' => 'complexes', 'action' => 'view', $round['Complex']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('User'); ?></dt>
		<dd>
			<?php echo $this->Html->link($round['User']['name'], array('controller' => 'users', 'action' => 'view', $round['User']['id'])); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Round'), array('action' => 'edit', $round['Round']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Round'), array('action' => 'delete', $round['Round']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $round['Round']['id']))); ?> </li>
		<li><?php echo $this->Html->link(__('List Rounds'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Round'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Companies'), array('controller' => 'companies', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Company'), array('controller' => 'companies', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Complexes'), array('controller' => 'complexes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Complex'), array('controller' => 'complexes', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
	</ul>
</div>
