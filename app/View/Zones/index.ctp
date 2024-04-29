<div class="zones index">
	<h2><?php echo __('Zonas'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('name','Nombre'); ?></th>
			<th><?php echo $this->Paginator->sort('area','Área'); ?></th>
			<th><?php echo $this->Paginator->sort('zone','Zona'); ?></th>
			<th><?php echo $this->Paginator->sort('qr_location','Ubicación QR'); ?></th>
			<th class="actions"><?php echo __(''); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($zones as $zone): ?>
	<tr>
		<td><?php echo h($zone['Zone']['name']); ?>&nbsp;</td>
		<td><?php echo h($zone['Zone']['area']); ?>&nbsp;</td>
		<td><?php echo h($zone['Zone']['zone']); ?>&nbsp;</td>
		<td><?php echo h($zone['Zone']['qr_location']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('Ver'), array('action' => 'view', $zone['Zone']['id'])); ?>
			<?php echo $this->Html->link(__('Editar'), array('action' => 'edit', $zone['Zone']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('Agregar zonas'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('Marcación de zonas'), array('controller' => 'routes', 'action' => 'index')); ?> </li>
	</ul>
</div>