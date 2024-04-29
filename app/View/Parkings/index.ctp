<div class="parkings index">
	<h2><?php echo __('Parqueaderos'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('number','Número de parqueadero'); ?></th>
			<th><?php echo $this->Paginator->sort('plate','Placa'); ?></th>
			<th><?php echo $this->Paginator->sort('type_id','Tipo vehiculo'); ?></th>
			<th><?php echo $this->Paginator->sort('modified','Última modificación'); ?></th>
			
	</tr>
	</thead>
	<tbody>
	<?php foreach ($parkings as $parking): ?>
	<tr>
		<td><?php echo $this->Html->link(__($parking['Parking']['number']), array('action' => 'view', $parking['Parking']['id'])); ?></td>
		<td><?php echo h($parking['Parking']['plate']); ?>&nbsp;</td>		
		<td><?php echo $parking['Type']['name']; ?></td>
		<td><?php echo h($parking['Parking']['modified']); ?>&nbsp;</td>
		<!--<td class="actions">
			<?php echo $this->Html->link(__('Editar'), array('action' => 'edit', $parking['Parking']['id'])); ?>
			<br><br>
			<?php echo $this->Form->postLink(__('Eliminar'), array('action' => 'delete', $parking['Parking']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $parking['Parking']['id']))); ?>
		</td>-->
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
		<li><?php echo $this->Html->link(__('Apartamentos'), array('controller' => 'Apartments','action' => 'index'."/".$id)); ?></li>
	</ul>
</div>
