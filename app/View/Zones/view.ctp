<div class="zones view">
<h2><?php echo h($zone['Zone']['name']); ?></h2>
<?php  echo $this->QrCode->text('https://'.$_SERVER["HTTP_HOST"]."/Routes/add/".$zone['Zone']['id']); ?>

	<dl>
		<dt><?php echo __('Área'); ?></dt>
		<dd>
			<?php echo h($zone['Zone']['area']); ?>
			&nbsp;
		</dd>		
		<dt><?php echo __('Zona'); ?></dt>
		<dd>
			<?php echo h($zone['Zone']['zone']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Ubicación QR'); ?></dt>
		<dd>
			<?php echo h($zone['Zone']['qr_location']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Creación'); ?></dt>
		<dd>
			<?php echo h($zone['Zone']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Última modificación'); ?></dt>
		<dd>
			<?php echo h($zone['Zone']['modified']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Enlaces rápidos'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Zonas'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('Rutas'), array('controller' => 'routes', 'action' => 'index')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Incidentes relacionados'); ?></h3>
	<?php if (!empty($zone['Incident'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Nombre'); ?></th>
		<th><?php echo __('Incidente'); ?></th>
		<th class="actions"><?php echo __(''); ?></th>
	</tr>
	<?php foreach ($zone['Incident'] as $incident): ?>
		<tr>			
			<td><?php echo $incident['name']; ?></td>
			<td><?php echo $incident['incident']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('Ver'), array('controller' => 'incidents', 'action' => 'view', $incident['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

<br><br>	
</div>
<div class="related">
	<h3><?php echo __('Related Routes'); ?></h3>
	<?php if (!empty($zone['Route'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Comment'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Modified'); ?></th>
		<th><?php echo __('Zone Id'); ?></th>
		<th><?php echo __('User Id'); ?></th>
		<th><?php echo __('Incident Id'); ?></th>
		<th><?php echo __('Complex Id'); ?></th>
		<th><?php echo __('Company Id'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($zone['Route'] as $route): ?>
		<tr>
			<td><?php echo $route['id']; ?></td>
			<td><?php echo $route['comment']; ?></td>
			<td><?php echo $route['created']; ?></td>
			<td><?php echo $route['modified']; ?></td>
			<td><?php echo $route['zone_id']; ?></td>
			<td><?php echo $route['user_id']; ?></td>
			<td><?php echo $route['incident_id']; ?></td>
			<td><?php echo $route['complex_id']; ?></td>
			<td><?php echo $route['company_id']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'routes', 'action' => 'view', $route['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'routes', 'action' => 'edit', $route['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'routes', 'action' => 'delete', $route['id']), array('confirm' => __('Are you sure you want to delete # %s?', $route['id']))); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Route'), array('controller' => 'routes', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
