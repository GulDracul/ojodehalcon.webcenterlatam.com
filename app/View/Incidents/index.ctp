<div class="incidents index">
	<h2><?php echo __('Incidentes'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<thead>
	<tr>
			
			<th><?php echo $this->Paginator->sort('name','Evento'); ?></th>
			<th><?php echo $this->Paginator->sort('event_id','Categoría del evento'); ?></th>
			<th><?php echo $this->Paginator->sort('Lugar de los hechos'); ?></th>
			<th><?php echo $this->Paginator->sort('created','Creado el'); ?></th>
			<th><?php echo $this->Paginator->sort('user_id','Creado por'); ?></th>			
			<th class="actions"></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($incidents as $incident): ?>
	<tr>
		
		<td><?php echo h($incident['Incident']['name']); ?>&nbsp;</td>
		<td><?php echo h($incident['Event']['name']); ?>&nbsp;</td>
		<td>
			Parqueadero: <?php echo $this->Html->link($incident['Parking']['number'], array('controller' => 'parkings', 'action' => 'view', $incident['Parking']['id'])); ?>
			<br>Apartamento: <?php echo $this->Html->link($incident['Apartment']['interior']." - ".$incident['Apartment']['apt'], array('controller' => 'apartments', 'action' => 'view', $incident['Apartment']['id'])); ?>
			<br>Depósito: <?php echo $this->Html->link($incident['Deposit']['number'], array('controller' => 'deposits', 'action' => 'view', $incident['Deposit']['id'])); ?>
			<br>Zona: <?php echo $this->Html->link($incident['Zone']['name'], array('controller' => 'zones', 'action' => 'view', $incident['Zone']['id'])); ?>
		</td>
		</td>
		<td><?php echo h($incident['Incident']['created']); ?>&nbsp;</td>
		<td><?php echo $this->Html->link($incident['User']['name'], array('controller' => 'users', 'action' => 'view', $incident['User']['id'])); ?></td>
		
		<td class="actions">
			<?php echo $this->Html->link(__('Ver'), array('action' => 'viewer', $incident['Incident']['id'])); ?>			
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
		<li><?php echo $this->Html->link(__('Conjunto'), array('controller' => 'Complexes','action' => 'view'."/".$id)); ?></li>
		<li><?php echo $this->Html->link(__('Añadir incidente'), array('action' => 'add'."/".$id)); ?></li>		
		<li><?php echo $this->Html->link(__('Marcación de zonas'), array('controller' => 'Routes','action' => 'index'."/".$id)); ?></li>
	</ul>
</div>
