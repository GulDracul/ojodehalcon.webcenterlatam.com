<div class="routes index">
	<h2><?php echo __('Registros de marcación de zonas'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('created','Regístrado el'); ?></th>
			<th><?php echo $this->Paginator->sort('hour_id','Hora de marcado'); ?></th>
			<th><?php echo $this->Paginator->sort('zone_id','Zona'); ?></th>
			<th><?php echo $this->Paginator->sort('user_id','Registrado por'); ?></th>			
			<th><?php echo $this->Paginator->sort('frequency_id','Ruta'); ?></th>
			<th><?php echo $this->Paginator->sort('intime','A tiempo'); ?></th>
			<th class=""></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($routes as $route): ?>
	<tr>
		<td><?php echo h($route['Route']['created']); ?>&nbsp;</td>
		<td><?php echo $route['Route']['start']; ?></td>
		<td><?php echo $route['Route']['zone']; ?></td>
		<td><?php echo $route['Route']['user']; ?></td>
		<td><?php echo $route['Route']['frecuency']; ?></td>
		<td><?php  if($route['Route']['intime']==0){ echo "<div style='color:green; font-weight: 900; '>A tiempo</div>"; }else{ echo "<div style='color:red; font-weight: 900; '>Retardo</div>"; } ?></td>
		<td class="actions">
			<?php echo $this->Html->link(__('Ver'), array('action' => 'view', $route['Route']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('Zonas'), array('controller' => 'zones', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Usuarios'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Incidentes'), array('controller' => 'incidents', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Rutas'), array('controller' => 'frequencies', 'action' => 'index')); ?> </li>
	</ul>
</div>
