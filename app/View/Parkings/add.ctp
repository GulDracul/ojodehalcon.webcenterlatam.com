<div class="parkings form">
<?php echo $this->Form->create('Parking'); ?>
	<fieldset>
	<legend><?php echo __('Agregar parqueadero al interior '.$apartment['Apartment']['interior'].' apartamento '.$apartment['Apartment']['apt']); ?></legend>
	<div style=" width: 98%; text-align: right; " class="actions">
		<li><?php echo $this->Html->link(__('Terminar'),  array('controller' => 'apartments', 'action' => 'view'.'/'.$apartment['Apartment']['id'])); ?></li>
	</ul>
	</div>
	<?php
		echo $this->Form->input('number',array('label'=>'Número', 'placeholder' => '', 'class' => 'form-control'));
		echo $this->Form->input('plate',array('label'=>'Placa', 'placeholder' => '', 'class' => 'form-control'));
		echo $this->Form->input('type_id',array('label'=>'Tipo', 'placeholder' => '', 'class' => 'form-control'));
		echo $this->Form->input('apartment_id',array('type'=>'hidden','value'=>$apartment['Apartment']['id']));
	?>
	</fieldset>
<?php echo $this->Form->end(__('Agregar')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Enlaces rápidos'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Apartamentos'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('Parqueaderos'), array('controller' => 'parkings', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Depositos'), array('controller' => 'deposits', 'action' => 'index')); ?> </li>
	</ul>
</div>

<div class="parkings index">
<hr>
<br>
	<h2><?php echo __('Parqueaderos asociados'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('number','Parqueadero No'); ?></th>
			<th><?php echo $this->Paginator->sort('plate','Placa'); ?></th>
			<th><?php echo $this->Paginator->sort('type_id','Vehiculo'); ?></th>
			<th class="actions"><?php echo __(''); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($parkings as $parking): ?>
	<tr>
		<td><?php echo $this->Html->link(__($parking['Parking']['number']), array('action' => 'view', $parking['Parking']['id'])); ?></td>
		<td><?php echo h($parking['Parking']['plate']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($parking['Type']['name'], array('controller' => 'types', 'action' => 'view', $parking['Type']['id'])); ?>
		</td>
		<td class="actions">
			
			<?php echo $this->Html->link(__('Editar'), array('action' => 'edit', $parking['Parking']['id'])); ?>
			<?php echo $this->Form->postLink(__('Eliminar'), array('action' => 'delete', $parking['Parking']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $parking['Parking']['id']))); ?>
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