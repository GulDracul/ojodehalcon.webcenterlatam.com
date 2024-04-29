<div class="visitors index">
	<h2><?php echo __('Visitantes'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('name','Nombre'); ?></th>
			<th><?php echo $this->Paginator->sort('dni','identificación'); ?></th>
			<th><?php echo $this->Paginator->sort('phone','Teléfono'); ?></th>
			<th><?php echo $this->Paginator->sort('photo','Foto'); ?></th>
			<th><?php echo $this->Paginator->sort('created','Ingreso'); ?></th>
			<th><?php echo $this->Paginator->sort('modified','Salida'); ?></th>
			<th class="actions"><?php echo __(''); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($visitors as $visitor): ?>
	<tr>
		<td><?php echo h($visitor['Visitor']['name']); ?>&nbsp;</td>
		<td><?php echo h($visitor['Visitor']['dni']); ?>&nbsp;</td>
		<td><?php echo h($visitor['Visitor']['phone']); ?>&nbsp;</td>
		<td><?php echo h($visitor['Visitor']['photo']); ?>&nbsp;</td>
		<td><?php echo h($visitor['Visitor']['created']); ?>&nbsp;</td>
		<td><?php echo h($visitor['Visitor']['modified']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('Ver'), array('action' => 'view', $visitor['Visitor']['id'])); ?>
			<?php echo $this->Html->link(__('Editar'), array('action' => 'edit', $visitor['Visitor']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('Agregar visitante'), array('controller' => 'visitors', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('Visitas'), array('controller' => 'incomes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Apartamentos'), array('controller' => 'apartments', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Parqueaderos'), array('controller' => 'parkings', 'action' => 'index')); ?> </li>
	</ul>
</div>