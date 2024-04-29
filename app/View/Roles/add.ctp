<link rel='stylesheet prefetch' href='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css'>
<link rel='stylesheet prefetch' href='https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.11.2/css/bootstrap-select.min.css'>   
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.6.3/js/bootstrap-select.min.js"></script>
<div class="roles form">
<?php echo $this->Form->create('Role'); ?>
	<fieldset>
		<legend><?php echo __('Agregar rol a conjunto'); ?></legend>
	<?php
		echo $this->Form->input('name',array('label'=>'Nombre del rol', 'placeholder' => '', 'class' => 'form-control'));
		echo $this->Form->input('route',array('label'=>'Ruta de inicio', 'placeholder' => '', 'class' => 'form-control'));
		echo $this->Form->input('complex_id',array('label'=>'Conjunto', 'placeholder' => '', 'class' => 'form-control selectpicker','value'=>'empty','data-live-search'=>'true'));
	?>
	</fieldset>
<?php echo $this->Form->end(__('Agregar rol')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Enlaces rápidos'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Roles'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('Usuarios'), array('controller' => 'users', 'action' => 'index')); ?> </li>
	</ul>
</div>
