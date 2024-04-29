<div class="articles form">
<?php echo $this->Form->create('Article'); ?>
	<fieldset>
		<legend><?php echo __('Editar Artículo'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('name',array('label'=>'Nombre', 'placeholder' => '', 'class' => 'form-control '));
		echo $this->Form->input('comment',array('label'=>'Comentario', 'placeholder' => '', 'class' => 'form-control '));
	?>
	</fieldset>
<?php echo $this->Form->end(__('Editar')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Enlaces rápidos'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Artículos'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('Casillero'), array('controller' => 'Mailboxes', 'action' => 'index')); ?> </li>
	</ul>
</div>
