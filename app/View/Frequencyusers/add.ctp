<div class="frequencyusers form">
<?php echo $this->Form->create('Frequencyuser'); ?>
	<fieldset>
		<legend><?php echo __('Agregar usuarios a una ruta'); ?></legend>
		<div class="container">
		  <div class="row">
			<div class="col-sm">
			 <?php echo $this->Form->input('frequency_id',array('label'=>'Ruta', 'placeholder' => '', 'class' => 'form-control')); ?>
			</div>
			<div class="col-sm">
			 <?php echo $this->Form->input('user_id',array('label'=>'Usuario', 'placeholder' => '', 'class' => 'form-control')); ?>
			</div>
			<div class="col-sm">
			<?php echo $this->Form->end(__('Agregar')); ?>
			</div>
		  </div>		  
		</div>	
	</fieldset>

</div>
<div class="actions">
	<h3><?php echo __('Enlaces rápidos'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Usuarios de ruta'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('Rutas'), array('controller' => 'frequencies', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Usuarios'), array('controller' => 'users', 'action' => 'index')); ?> </li>
	</ul>
</div>
