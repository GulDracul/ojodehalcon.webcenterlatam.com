<div class="parkings form">
<?php echo $this->Form->create('Parking'); ?>
	<fieldset>
		<legend><?php echo __('Editar Parqueadero'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('number',array('label'=>'Número', 'placeholder' => '', 'class' => 'form-control'));
		echo $this->Form->input('plate',array('label'=>'Placa', 'placeholder' => '', 'class' => 'form-control'));
		echo $this->Form->input('type_id',array('label'=>'Tipo de vehiculo', 'placeholder' => '', 'class' => 'form-control'));
	?>
	</fieldset>
<?php echo $this->Form->end(__('Editar')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Enlaces rápidos'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Apartamentos'), array('controller' => 'Apartments','action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('Parqueaderos'), array('controller' => 'parkings', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Depositos'), array('controller' => 'deposits', 'action' => 'index')); ?> </li>
	</ul>
</div>
