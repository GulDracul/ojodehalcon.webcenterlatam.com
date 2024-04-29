<div class="incomes form">
<?php echo $this->Form->create('Income'); ?>
	<fieldset>
		<legend><?php echo __('Editar visita'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('visitor_id',array('required'=>true,'label'=>'Visitante', 'placeholder' => '', 'class' => 'form-control '));
		echo $this->Form->input('apartment_id',array('required'=>true,'label'=>'Apartamento que visita', 'placeholder' => '', 'class' => 'form-control '));
		echo $this->Form->input('parking_id',array('label'=>'Parqueadero', 'placeholder' => '', 'class' => 'form-control ','empty' => 'Parqueadero'));
		echo $this->Form->input('comment',array('label'=>'Comentario', 'placeholder' => '', 'class' => 'form-control '));
	?>
	</fieldset>
<?php echo $this->Form->end(__('Editar')); ?>
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
