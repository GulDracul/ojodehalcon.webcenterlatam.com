<div class="apartments view">
<h2><?php echo __('Apartamento'); ?></h2>
	<dl>
		<dt><?php echo __('Interior'); ?></dt>
		<dd>
			<?php echo h($apartment['Apartment']['interior']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Apartamento No'); ?></dt>
		<dd>
			<?php echo h($apartment['Apartment']['apt']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Residente principal'); ?></dt>
		<dd>
			<?php echo h($apartment['Apartment']['name1']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Teléfono residente principal'); ?></dt>
		<dd>
			<?php echo h($apartment['Apartment']['ph1']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Mail residente principal'); ?></dt>
		<dd>
			<?php echo h($apartment['Apartment']['mail1']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Residente secundario'); ?></dt>
		<dd>
			<?php echo h($apartment['Apartment']['name2']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Teléfono residente secundario'); ?></dt>
		<dd>
			<?php echo h($apartment['Apartment']['ph2']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Mail residente secundario'); ?></dt>
		<dd>
			<?php echo h($apartment['Apartment']['mail2']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Mascotas'); ?></dt>
		<dd>
			<?php echo h($apartment['Apartment']['pets']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Niños'); ?></dt>
		<dd>
			<?php echo h($apartment['Apartment']['child']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Adultos'); ?></dt>
		<dd>
			<?php echo h($apartment['Apartment']['adult']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Fecha de creación'); ?></dt>
		<dd>
			<?php echo h($apartment['Apartment']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Última modificación'); ?></dt>
		<dd>
			<?php echo h($apartment['Apartment']['modified']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Conjunto'); ?></dt>
		<dd>
			<?php echo $this->Html->link($apartment['Complex']['name'], array('controller' => 'complexes', 'action' => 'view', $apartment['Complex']['id'])); ?>
			&nbsp;
		</dd>
	
		<dt><?php echo __('Parqueadero'); ?></dt>
		<dd>	
			<div class="related">
				<div class="actions">					
				</div>
				<?php if (!empty($apartment['Parking'])): ?>
				<table cellpadding = "0" cellspacing = "0">
				<tr>
					<th><?php echo __('Número'); ?></th>
					<th><?php echo __('Placa'); ?></th>					
					<th><?php echo __('Vehiculo'); ?></th>
				</tr>
				<?php foreach ($apartment['Parking'] as $parking): ?>
					<tr>					
						<td><?php echo $this->Html->link(__($parking['number']), array('controller' => 'parkings', 'action' => 'view', $parking['id'])); ?></td>
						<td><?php echo $parking['plate']; ?></td>
						<td><?php echo $type[$parking['type_id']]; ?></td>						
					</tr>
				<?php endforeach; ?>
				</table>
			<?php endif; ?>	
			<ul>
				<li><?php echo $this->Html->link(__('+ Agregar'), array('controller' => 'parkings', 'action' => 'add'.'/'.$apartment['Deposit']['id'])); ?> </li>
			</ul>
			</div>
		</dd>
		<dt><?php echo __('Deposito'); ?></dt>
		<dd>
			<?php echo $apartment['Deposit']['number']; ?>
			&nbsp;
		</dd>
	</dl>	
</div>
<div class="actions">
	<h3><?php echo __('Enlaces rápidos'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Apartamentos'), array('action' => 'index'."/".$apartment['Complex']['id'])); ?></li>
	</ul>
</div>
