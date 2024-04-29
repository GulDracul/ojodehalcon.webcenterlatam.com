<div class="deposits form">
<?php echo $this->Form->create('Deposit'); ?>
	<fieldset>
		<legend><?php echo __('Editar depósito'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('number',array('label'=>'Número', 'placeholder' => '', 'class' => 'form-control'));
		echo $this->Form->input('comment',array('label'=>'Comentario', 'placeholder' => '', 'class' => 'form-control'));
	?>
	</fieldset>
<?php echo $this->Form->end(__('Editar')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Enlaces rápidos'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Depositos'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('Apartamentos'), array('controller' => 'apartments', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Parqueaderos'), array('controller' => 'Parkings', 'action' => 'index')); ?> </li>
	</ul>
</div>
