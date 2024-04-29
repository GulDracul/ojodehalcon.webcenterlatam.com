<div class="types index">
	<h2><?php echo __('Tipos de vehiculo'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('name','Nombre'); ?></th>
			<th><?php echo $this->Paginator->sort('comment','Comentario'); ?></th>
			<th class="actions"><?php echo __(''); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($types as $type): ?>
	<tr>
		<td><?php echo h($type['Type']['name']); ?>&nbsp;</td>
		<td><?php echo h($type['Type']['comment']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('Ver'), array('action' => 'view', $type['Type']['id'])); ?>
			<?php echo $this->Html->link(__('Editar'), array('action' => 'edit', $type['Type']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('Parqueadero'), array('controller' => 'parkings', 'action' => 'index')); ?> </li>
	</ul>
	</ul>
</div>
