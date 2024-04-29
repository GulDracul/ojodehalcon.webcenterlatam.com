<div class="incomes index">
	<h2><?php echo __('Visitas'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<thead>
	<tr>			
			<th><?php echo $this->Paginator->sort('created','Entrada'); ?></th>
			<th><?php echo $this->Paginator->sort('modified','Salida'); ?></th>
			<th><?php echo $this->Paginator->sort('visitor_id','Visitante'); ?></th>
			<th><?php echo $this->Paginator->sort('apartment_id','Apartamento'); ?></th>
			<th><?php echo $this->Paginator->sort('parking_id','Parqueadero'); ?></th>
			<th><?php echo $this->Paginator->sort('comment','Comentario'); ?></th>
			<th class="actions"><?php echo __(''); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($incomes as $income): ?>
	<tr>		
		<td><?php echo h($income['Income']['created']); ?>&nbsp;</td>
		<td><?php echo h($income['Income']['modified']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($income['Visitor']['name'], array('controller' => 'visitors', 'action' => 'view', $income['Visitor']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($income['Apartment']['interior']."-".$income['Apartment']['apt'], array('controller' => 'apartments', 'action' => 'view', $income['Apartment']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($income['Parking']['number'], array('controller' => 'parkings', 'action' => 'view', $income['Parking']['id'])); ?>
		</td>
		<td><?php echo h($income['Income']['comment']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('Ver'), array('action' => 'view', $income['Income']['id'])); ?>
			<?php echo $this->Html->link(__('Editar'), array('action' => 'edit', $income['Income']['id'])); ?>
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

		<li><?php echo $this->Html->link(__('Visitas'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('Agregar visitante'), array('controller' => 'visitors', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('Apartamentos'), array('controller' => 'apartments', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Parqueaderos'), array('controller' => 'parkings', 'action' => 'index')); ?> </li>
	</ul>
</div>


