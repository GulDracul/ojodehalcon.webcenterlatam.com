<div class="visitors form">
<?php echo $this->Form->create('Visitor'); ?>
	<fieldset>
		<legend><?php echo __('Editar Visitante'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('name',array('required'=>true,'label'=>'Nombre completo', 'placeholder' => '', 'class' => 'form-control '));
		echo $this->Form->input('dni',array('required'=>true,'label'=>'Identidicación', 'placeholder' => '', 'class' => 'form-control '));
		echo $this->Form->input('phone',array('required'=>true,'label'=>'Teléfono', 'placeholder' => '', 'class' => 'form-control '));
		echo $this->Form->input('photo',array('label'=>'Fotografía', 'placeholder' => '', 'class' => 'form-control '));
	?>
	</fieldset>
<?php echo $this->Form->end(__('Editar')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Enlaces rápidos'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('Visitantes'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('Visitas'), array('controller' => 'incomes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Nueva visita'), array('controller' => 'incomes', 'action' => 'add')); ?> </li>
	</ul>
</div>
