<div class="usercomplexes view">
<h2><?php echo __('Usercomplex'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($usercomplex['Usercomplex']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($usercomplex['Usercomplex']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($usercomplex['Usercomplex']['modified']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('User'); ?></dt>
		<dd>
			<?php echo $this->Html->link($usercomplex['User']['name'], array('controller' => 'users', 'action' => 'view', $usercomplex['User']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Complex'); ?></dt>
		<dd>
			<?php echo $this->Html->link($usercomplex['Complex']['name'], array('controller' => 'complexes', 'action' => 'view', $usercomplex['Complex']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Role'); ?></dt>
		<dd>
			<?php echo $this->Html->link($usercomplex['Role']['name'], array('controller' => 'roles', 'action' => 'view', $usercomplex['Role']['id'])); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Usercomplex'), array('action' => 'edit', $usercomplex['Usercomplex']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Usercomplex'), array('action' => 'delete', $usercomplex['Usercomplex']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $usercomplex['Usercomplex']['id']))); ?> </li>
		<li><?php echo $this->Html->link(__('List Usercomplexes'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Usercomplex'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Complexes'), array('controller' => 'complexes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Complex'), array('controller' => 'complexes', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Roles'), array('controller' => 'roles', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Role'), array('controller' => 'roles', 'action' => 'add')); ?> </li>
	</ul>
</div>
