<div class="frequencyusers index">
	<h2><?php echo __('Usuarios de ruta'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('frequency_id','Ruta'); ?></th>
			<th><?php echo $this->Paginator->sort('user_id','Usuario autorizado'); ?></th>
			<th><?php echo $this->Paginator->sort('created','Creado el'); ?></th>
			<th><?php echo $this->Paginator->sort('modified','Última modificación'); ?></th>
			<th class="actions"></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($frequencyusers as $frequencyuser): ?>
	<tr>
		<td>
			<?php echo $this->Html->link($frequencyuser['Frequency']['name'], array('controller' => 'frequencies', 'action' => 'view', $frequencyuser['Frequency']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($frequencyuser['User']['name'], array('controller' => 'users', 'action' => 'view', $frequencyuser['User']['id'])); ?>
		</td>
		<td><?php echo h($frequencyuser['Frequencyuser']['created']); ?>&nbsp;</td>
		<td><?php echo h($frequencyuser['Frequencyuser']['modified']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('Ver'), array('action' => 'view', $frequencyuser['Frequencyuser']['id'])); ?>
			<?php echo $this->Html->link(__('Editar'), array('action' => 'edit', $frequencyuser['Frequencyuser']['id'])); ?>
			<?php echo $this->Form->postLink(__('Eliminar'), array('action' => 'delete', $frequencyuser['Frequencyuser']['id']), array('confirm' => __('Va a eliminar este regístro, está acción no se puede revertir, está seguro de realizar esta acción?', $frequencyuser['Frequencyuser']['id']))); ?>
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
<div class="actions">
	<h3><?php echo __('Enlaces rápidos'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Agregar usuarios a ruta'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('Rutas'), array('controller' => 'frequencies', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Usuarios'), array('controller' => 'users', 'action' => 'index')); ?> </li>
	</ul>
</div>
