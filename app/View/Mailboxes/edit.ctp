<div class="mailboxes form">
<?php echo $this->Form->create('Mailbox'); ?>
	<fieldset>
		<legend><?php echo __('Editar paquete'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('article_id',array('label'=>'Artículo', 'placeholder' => '', 'class' => 'form-control '));
		echo $this->Form->input('apartment_id',array('label'=>'Apartamento', 'placeholder' => '', 'class' => 'form-control '));
	?>
	</fieldset>
<?php echo $this->Form->end(__('Editar')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Enlaces rápidos'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Agregar paquete'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('Paquetes'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('Artículos'), array('controller' => 'articles', 'action' => 'index')); ?> </li>
	</ul>
</div>