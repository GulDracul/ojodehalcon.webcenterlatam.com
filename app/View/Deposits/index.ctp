<div class="deposits index">
	<h2><?php echo __('Depósitos'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('number','Depósito'); ?></th>			
			<th><?php echo $this->Paginator->sort('modified','Última modificación'); ?></th>
			<th><?php echo $this->Paginator->sort('comment','Comentario'); ?></th>
			<th class="actions"><?php echo __(''); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($deposits as $deposit): ?>
	<tr>
		<td><?php echo $this->Html->link(__($deposit['Deposit']['number']), array('action' => 'view', $deposit['Deposit']['id'])); ?></td>		
		<td><?php echo h($deposit['Deposit']['modified']); ?></td>
		<td><?php echo h($deposit['Deposit']['comment']); ?></td>
		<td class="actions">
			
			<?php echo $this->Html->link(__('Editar'), array('action' => 'edit', $deposit['Deposit']['id'])); ?>
			<?php echo $this->Form->postLink(__('Eliminar'), array('action' => 'delete', $deposit['Deposit']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $deposit['Deposit']['id']))); ?>
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
		<li><?php echo $this->Html->link(__('Agregar deposito'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('Apartamentos'), array('controller' => 'apartments', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Parqueaderos'), array('controller' => 'Parkings', 'action' => 'index')); ?> </li>
	</ul>
</div>
