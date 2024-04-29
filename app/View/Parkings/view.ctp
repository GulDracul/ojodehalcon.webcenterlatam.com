
<div class="parkings view">
<h2><?php echo __('Parqueadero No '.$parking['Parking']['number']); ?></h2>
<br>
	<dl>
		<dt>
		
		</dt>
		<dt><?php echo __('Placa'); ?></dt>
		<dd>
			<?php echo h($parking['Parking']['plate']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Creado el'); ?></dt>
		<dd>
			<?php echo h($parking['Parking']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Última modificación'); ?></dt>
		<dd>
			<?php echo h($parking['Parking']['modified']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Tipo de vehiculo'); ?></dt>
		<dd>
			<?php echo $this->Html->link($parking['Type']['name'], array('controller' => 'types', 'action' => 'view', $parking['Type']['id']."?parking=".$parking['Parking']['id']."&complex=".$parking['Apartment']['complex_id'])); ?>
			&nbsp;
		</dd>
	</dl>
	<br><br>
	
</div>
<div class="actions">
	<h3><?php echo __('Enlaces rápidos'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Apartamentos'), array('controller' => 'Apartments', 'action' => 'index'."/".$parking['Apartment']['complex_id'])); ?></li>
		<li><?php echo $this->Html->link(__('Parqueaderos'), array('action' => 'index'."/".$parking['Apartment']['complex_id'])); ?> </li>
	</ul>
</div>


