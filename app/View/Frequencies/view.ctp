<div class="frequencies view">
<h2><?php echo __($frequency['Frequency']['name']); ?></h2>
	<dl>
		<dt><?php echo __('Inicio'); ?></dt>
		<dd>
			<?php echo h($frequency['Frequency']['start']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Fin'); ?></dt>
		<dd>
			<?php echo h($frequency['Frequency']['end']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Fecha de creación'); ?></dt>
		<dd>
			<?php echo h($frequency['Frequency']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Última modificación'); ?></dt>
		<dd>
			<?php echo h($frequency['Frequency']['modified']); ?>
			&nbsp;
		</dd>
		
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Enlaces rápidos'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Editar ruta'), array('action' => 'edit', $frequency['Frequency']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('Rutas'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Usuarios de ruta'), array('controller' => 'frequencyusers', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Horarios de zona'), array('controller' => 'hours', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Regístros de ruta'), array('controller' => 'routes', 'action' => 'index')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Usuarios autorizados'); ?></h3>
	<?php if (!empty($frequencyusers)): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Nombre'); ?></th>
		<th><?php echo __('Usuario'); ?></th>
		<th><?php echo __('WhatsApp'); ?></th>
	</tr>
	<?php foreach ($frequencyusers as $frequencyuser): ?>
		<tr>
			<td><?php echo $frequencyuser['User']['name'].' '.$frequencyuser['User']['last_name']; ?></td>
			<td><?php echo $frequencyuser['User']['username']; ?></td>
			<td><?php echo $frequencyuser['User']['cell_phone']; ?></td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

</div>
<div class="related">
	<h3><?php echo __('Zonas de la ruta'); ?></h3>
	<?php if (!empty($frequency['Hour'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Zona'); ?></th>
		<th><?php echo __('Hora de registro'); ?></th>
		<th><?php echo __('Margen de tiempo'); ?> Min</th>
	</tr>
	<?php foreach ($frequency['Hour'] as $hour): ?>
		<tr>
			<td><?php echo $zones[$hour['zone_id']]; ?></td>
			<td><?php echo $hour['start']; ?></td>		
			<td><?php echo $hour['margin']; ?></td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	
</div>
<div class="related">
	<h3><?php echo __('Regístros de ruta'); ?></h3>
	<?php if (!empty($frequency['Route'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Comment'); ?></th>
		<th><?php echo __('Intime'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Modified'); ?></th>
		<th><?php echo __('Zone Id'); ?></th>
		<th><?php echo __('User Id'); ?></th>
		<th><?php echo __('Incident Id'); ?></th>
		<th><?php echo __('Complex Id'); ?></th>
		<th><?php echo __('Company Id'); ?></th>
		<th><?php echo __('Frequency Id'); ?></th>
		<th><?php echo __('Hour Id'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($frequency['Route'] as $route): ?>
		<tr>
			<td><?php echo $route['id']; ?></td>
			<td><?php echo $route['comment']; ?></td>
			<td><?php echo $route['intime']; ?></td>
			<td><?php echo $route['created']; ?></td>
			<td><?php echo $route['modified']; ?></td>
			<td><?php echo $route['zone_id']; ?></td>
			<td><?php echo $route['user_id']; ?></td>
			<td><?php echo $route['incident_id']; ?></td>
			<td><?php echo $route['complex_id']; ?></td>
			<td><?php echo $route['company_id']; ?></td>
			<td><?php echo $route['frequency_id']; ?></td>
			<td><?php echo $route['hour_id']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'routes', 'action' => 'view', $route['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'routes', 'action' => 'edit', $route['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'routes', 'action' => 'delete', $route['id']), array('confirm' => __('Are you sure you want to delete # %s?', $route['id']))); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>
</div>
