<div class="companies index">
	<h2><?php echo __('Lista compañias'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<thead>
	<tr>
			
			<th><?php echo $this->Paginator->sort('name','Nombre'); ?></th>
			<th><?php echo $this->Paginator->sort('nit','NIT'); ?></th>
			<th><?php echo $this->Paginator->sort('address','Dirección'); ?></th>
			<th><?php echo $this->Paginator->sort('phone','Teléfono'); ?></th>
			<th><?php echo $this->Paginator->sort('cell_phone','WhatsApp'); ?></th>
			<th><?php echo $this->Paginator->sort('mail','Mail'); ?></th>
			<th><?php echo $this->Paginator->sort('web','Web'); ?></th>
			<th><?php echo $this->Paginator->sort('created','Creación'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($companies as $company): ?>
	<tr>		
		<td><?php echo h($company['Company']['name']); ?></td>
		<td><?php echo h($company['Company']['nit']); ?></td>
		<td><?php echo h($company['Company']['address']); ?></td>
		<td><?php echo h($company['Company']['phone']); ?></td>
		<td><?php echo h($company['Company']['cell_phone']); ?></td>
		<td><?php echo h($company['Company']['mail']); ?></td>
		<td><?php echo h($company['Company']['web']); ?></td>
		<td><?php echo date("d-m-Y",strtotime($company['Company']['created'])); ?></td>
		<td class="actions">
			<?php echo $this->Html->link(__('Ver'), array('action' => 'view', $company['Company']['id'])); ?>
			<br><br>
			<?php echo $this->Html->link(__('Editar'), array('action' => 'edit', $company['Company']['id'])); ?>
			<br><br>
			<?php echo $this->Form->postLink(__('Eliminar'), array('action' => 'delete', $company['Company']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $company['Company']['id']))); ?>
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
		<li><?php echo $this->Html->link(__('Agregar empresa'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('Conjuntos'), array('controller' => 'complexes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Rondas'), array('controller' => 'rounds', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Rutas'), array('controller' => 'routes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Turnos'), array('controller' => 'shifts', 'action' => 'index')); ?> </li>
	</ul>
</div>
