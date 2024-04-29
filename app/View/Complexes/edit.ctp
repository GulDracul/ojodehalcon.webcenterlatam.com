<div class="complexes form">
<?php echo $this->Form->create('Complex'); ?>
	<fieldset>
		<legend><?php echo __('Edit Complex'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('name',array('label'=>'Nombre', 'placeholder' => '', 'class' => 'form-control'));
		echo $this->Form->input('nit',array('label'=>'NIT', 'placeholder' => '', 'class' => 'form-control'));
		echo $this->Form->input('address',array('label'=>'Dirección', 'placeholder' => '', 'class' => 'form-control'));
		echo $this->Form->input('phone',array('label'=>'Teléfono', 'placeholder' => '', 'class' => 'form-control'));
		echo $this->Form->input('cell_phone',array('label'=>'WhatsApp', 'placeholder' => '', 'class' => 'form-control'));
		echo $this->Form->input('mail',array('label'=>'Mail', 'placeholder' => '', 'class' => 'form-control'));
		echo $this->Form->input('web',array('label'=>'Web', 'placeholder' => '', 'class' => 'form-control'));
		echo $this->Form->input('qr',array('label'=>'Qr', 'placeholder' => '', 'class' => 'form-control'));
		echo $this->Form->input('company_id',array('label'=>'Empresa de vigilancia', 'placeholder' => '', 'class' => 'form-control'));
	?>
	</fieldset>
<?php echo $this->Form->end(__('Editar')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Enlaces rápidos'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Conjuntos'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('Apartamentos'), array('controller' => 'apartments', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Incidentes'), array('controller' => 'incidents', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Ingresos visitantes'), array('controller' => 'incomes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Rondas'), array('controller' => 'rounds', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Rutas'), array('controller' => 'routes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Turnos'), array('controller' => 'shifts', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Zonas'), array('controller' => 'zones', 'action' => 'index')); ?> </li>
	</ul>
</div>