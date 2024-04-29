<div class="frequencies index">
	<h2><?php echo __('Rutas'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('name','Nombre'); ?></th>
			<th><?php echo $this->Paginator->sort('start','Hora de inicio'); ?></th>
			<th><?php echo $this->Paginator->sort('end','Hora Finalización'); ?></th>
			<th><?php echo $this->Paginator->sort('created','Fecha de creación'); ?></th>
			<th><?php echo $this->Paginator->sort('modified','Última edición'); ?></th>
			<th class="actions"></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($frequencies as $frequency): ?>
	<tr>
		<td><?php echo h($frequency['Frequency']['name']); ?>&nbsp;</td>
		<td><?php echo h($frequency['Frequency']['start']); ?>&nbsp;</td>
		<td><?php echo h($frequency['Frequency']['end']); ?>&nbsp;</td>
		<td><?php echo h($frequency['Frequency']['created']); ?>&nbsp;</td>
		<td><?php echo h($frequency['Frequency']['modified']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('Ver'), array('action' => 'view', $frequency['Frequency']['id'])); ?>
			<?php echo $this->Html->link(__('Editar'), array('action' => 'edit', $frequency['Frequency']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('Nueva ruta'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('Usuarios de ruta'), array('controller' => 'frequencyusers', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Horarios de ruta'), array('controller' => 'hours', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Rutas'), array('controller' => 'routes', 'action' => 'index')); ?> </li>
	</ul>
</div>
