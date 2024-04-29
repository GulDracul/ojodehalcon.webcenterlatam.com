<div class="zones form">
<?php echo $this->Form->create('Zone'); ?>
	<fieldset>
		<legend><?php echo __('Agregar zona'); ?></legend>
	<?php
		echo $this->Form->input('name',array('label'=>'Nombre', 'placeholder' => '', 'class' => 'form-control '));
		echo $this->Form->input('area',array('label'=>'Área', 'placeholder' => '', 'class' => 'form-control '));
		echo $this->Form->input('qr');
		echo $this->Form->input('zone',array('label'=>'Zona', 'placeholder' => '', 'class' => 'form-control '));
		echo $this->Form->input('qr_location',array('label'=>'Localización de QR', 'placeholder' => '', 'class' => 'form-control '));
	?>
	</fieldset>
<?php echo $this->Form->end(__('Agregar')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Enlaces rápidos'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('Zonas'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('Rutas'), array('controller' => 'routes', 'action' => 'index')); ?> </li>
	</ul>
</div>
