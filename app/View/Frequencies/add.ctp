<div class="frequencies form">
<?php echo $this->Form->create('Frequency'); ?>
	<fieldset>
		<legend><?php echo __('Agregar ruta'); ?></legend>
	<?php
		echo $this->Form->input('name',array('label'=>'Nombre', 'placeholder' => '', 'class' => 'form-control'));
		echo $this->Form->input('start',array('label'=>'Inicio', 'placeholder' => '', 'class' => ''));
		echo $this->Form->input('end',array('label'=>'Fin', 'placeholder' => '', 'class' => ''));
	?>
	</fieldset>
<?php echo $this->Form->end(__('Añadir')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Enlaces rápidos'); ?></h3>
	<ul>		
		<li><?php echo $this->Html->link(__('Lista de rutas'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('Usuarios de ruta'), array('controller' => 'frequencyusers', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Horarios de ruta'), array('controller' => 'hours', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Rutas'), array('controller' => 'routes', 'action' => 'index')); ?> </li>
	</ul>
</div>
