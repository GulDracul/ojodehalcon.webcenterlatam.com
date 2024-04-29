<div class="companies form">
<?php echo $this->Form->create('Company'); ?>
	<fieldset>
		<legend><?php echo __('Editar compañía de seguridad'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('name',array('label'=>'Nombre', 'placeholder' => 'Nombre', 'class' => 'form-control'));
		echo $this->Form->input('nit',array('label'=>'NIT', 'placeholder' => 'NIT', 'class' => 'form-control'));
		echo $this->Form->input('address',array('label'=>'Dirección', 'placeholder' => 'Dirección', 'class' => 'form-control'));
		echo $this->Form->input('phone',array('label'=>'Teléfono', 'placeholder' => 'Teléfono', 'class' => 'form-control'));
		echo $this->Form->input('cell_phone',array('label'=>'WhatsApp', 'placeholder' => 'WhatsApp', 'class' => 'form-control'));
		echo $this->Form->input('mail',array('label'=>'Mail', 'placeholder' => 'Mail', 'class' => 'form-control'));
		echo $this->Form->input('web',array('label'=>'Página Web', 'placeholder' => 'Página Web', 'class' => 'form-control'));
	?>
	</fieldset>
<?php echo $this->Form->end(__('Editar')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Enlaces rápidos'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('Empresas'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('Conjuntos'), array('controller' => 'complexes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Rondas'), array('controller' => 'rounds', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Recorridos'), array('controller' => 'routes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Turnos'), array('controller' => 'shifts', 'action' => 'index')); ?> </li>
	</ul>
</div>
