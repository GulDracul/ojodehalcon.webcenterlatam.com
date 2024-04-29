<div class="incidents index mfont">
<h2 class="mh2"><?php echo __('Incidente: '.$incident['Incident']['name']); ?></h2>
	<dl>
		<dt><?php echo __('Evento'); ?></dt>
		<dd>
			<?php echo h($incident['Incident']['name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Categoría del evento'); ?></dt>
		<dd>
			<?php echo h($incident['Event']['name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Descripción'); ?></dt>
		<dd>
			<?php echo h($incident['Incident']['incident']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Lugar de los hechos'); ?></dt>
		<dd>
			<b>Parqueadero:</b> <?php 
			if($incident['Parking']['id']==0){
					
			}else{
				   echo $incident['Parking']['number']." - ".$type[$incident['Parking']['type_id']]; 
				  }
			?>
			<br>
			<b>Apartamento:</b> <?php echo $incident['Apartment']['interior']." - ".$incident['Apartment']['apt']; ?>
			<br>
			<b>Depósito:</b> <?php echo $incident['Deposit']['number']; ?>
			<br>
			<b>Zona:</b> <?php echo $incident['Zone']['name']; ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Creado el'); ?></dt>
		<dd>
			<?php echo h($incident['Incident']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Última modificación'); ?></dt>
		<dd>
			<?php echo h($incident['Incident']['modified']); ?>
			&nbsp;
		</dd>
	</dl>
</div>



<div class="actions">
	<h3><?php echo __('Enlaces rápidos'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Incidentes'), array('action' => 'index')); ?></li>
	</ul>
</div>