<div class="mailboxes form">
<?php echo $this->Form->create('Mailbox'); ?>
	<fieldset>
		<legend><?php echo __('Entregar paquete'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('name',array('required'=>true,'label'=>'Nombre quien recibío', 'placeholder' => '', 'class' => 'form-control '));				
		echo $this->Form->input('signature',array('required'=>true,'label'=>'Firma recibido', 'placeholder' => '', 'class' => 'form-control '));
		echo $this->Form->input('delivered',array('required'=>true,'label'=>'Comentario', 'placeholder' => '', 'class' => 'form-control '));
		echo $this->Form->input('ouput',array('type'=>'hidden','value'=>date('Y-m-d H:i:s')));
	?>
	</fieldset>
<?php echo $this->Form->end(__('Realizar entrega')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Enlaces rápidos'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Agregar paquete'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('Paquetes'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('Artículos'), array('controller' => 'articles', 'action' => 'index')); ?> </li>
	</ul>
</div>