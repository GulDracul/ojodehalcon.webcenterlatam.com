<div class="types view">

<h2><?php echo __('Tipo de vehiculo'); ?></h2>
	<dl>
		<dt><?php echo __('Nombre'); ?></dt>
		<dd>
			<?php echo h($type['Type']['name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Comentario'); ?></dt>
		<dd>
			<?php echo h($type['Type']['comment']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Creado el'); ?></dt>
		<dd>
			<?php echo h($type['Type']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Última modificación'); ?></dt>
		<dd>
			<?php echo h($type['Type']['modified']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Enlaces rápidos'); ?></h3>
	<ul>
		<li><a href="javascript:history.back()"> Parqueadero</a></li>		
	</ul>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Parqueaderos relacionados'); ?></h3>
	<?php if (!empty($parkings)): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Número'); ?></th>
		<th><?php echo __('Placa'); ?></th>
		<th class="actions"><?php echo __(''); ?></th>
	</tr>
	<?php foreach ($parkings as $parking): ?>
		<tr>
			
			<td><?php echo $parking['Parking']['number']; ?></td>
			<td><?php echo $parking['Parking']['plate']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('Ver'), array('controller' => 'parkings', 'action' => 'view', $parking['Parking']['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>
</div>
