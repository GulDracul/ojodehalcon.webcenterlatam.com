<div class="rolcontrollers form">
<?php echo $this->Form->create('Rolcontroller'); ?>
	<fieldset>
		<legend>Agregar permisos al rol : <b style="color:blue;"><?php echo $role['Role']['name']; ?></b> del conjunto <b style="color:blue;"><?php echo $role['Complex']['name']; ?></b></legend>
	<?php
		echo $this->Form->input('controller',array('label'=>'Controlador','options' =>$controllers, 'placeholder' => '', 'class' => 'form-control'));
		echo $this->Form->input('view',array('label'=>'Vista','options' =>$views, 'placeholder' => '', 'class' => 'form-control'));
	?>
	
	</fieldset>
<?php echo $this->Form->end(__('Agregar')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Rolcontrollers'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Roles'), array('controller' => 'roles', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Role'), array('controller' => 'roles', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="rolcontrollers index">
	<h2><?php echo __('Rolcontrollers'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('controller','Controlador'); ?></th>
			<th><?php echo $this->Paginator->sort('view','Vista'); ?></th>
			<th><?php echo $this->Paginator->sort('created','Creado el'); ?></th>
			<th><?php echo $this->Paginator->sort('modified','Última modificación'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($rolcontrollers as $rolcontroller): ?>
	<tr>
		<td><?php echo h($rolcontroller['Rolcontroller']['controller']); ?>&nbsp;</td>
		<td><?php echo h($rolcontroller['Rolcontroller']['view']); ?>&nbsp;</td>
		<td><?php echo h($rolcontroller['Rolcontroller']['created']); ?>&nbsp;</td>
		<td><?php echo h($rolcontroller['Rolcontroller']['modified']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('Editar'), array('action' => 'edit', $rolcontroller['Rolcontroller']['id'])); ?>
			<?php echo $this->Form->postLink(__('Eliminar'), array('action' => 'delete', $rolcontroller['Rolcontroller']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $rolcontroller['Rolcontroller']['id']))); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</tbody>
	</table>
	<p>
	<?php
	echo $this->Paginator->counter(array(
		'format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')
	));
	?>	</p>
	<div class="paging">
	<?php
		echo $this->Paginator->prev('< ' . __('previous'), array(), null, array('class' => 'prev disabled'));
		echo $this->Paginator->numbers(array('separator' => ''));
		echo $this->Paginator->next(__('next') . ' >', array(), null, array('class' => 'next disabled'));
	?>
	</div>
</div>