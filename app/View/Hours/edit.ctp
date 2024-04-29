<link rel='stylesheet prefetch' href='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css'>
<link rel='stylesheet prefetch' href='https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.11.2/css/bootstrap-select.min.css'>   
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.6.3/js/bootstrap-select.min.js"></script>
<div class="hours form">
<?php echo $this->Form->create('Hour'); ?>
<?php echo $this->Form->input('id'); ?>
	<fieldset>
	  <legend><?php echo __('Editar hora de regístro de zona'); ?></legend>	
	  <div class="row">
		<div class="col-6"><?php echo $this->Form->input('zone_id',array('label'=>'Zona', 'placeholder' => '', 'class' => 'form-control selectpicker','value'=>'empty','data-live-search'=>'true')); ?></div>
		<div class="col-6"><?php echo $this->Form->input('frequency_id',array('label'=>'Ruta', 'placeholder' => '', 'class' => 'form-control selectpicker','value'=>'empty','data-live-search'=>'true')); ?></div>	
		<div class="col-4"><label>Hora de regístro</label><?php echo $this->Form->input('start',array('label'=>'', 'class' => 'hour-input')); ?></div>	
		<div class="col-4"><?php echo $this->Form->input('margin',array('label'=>'Margen de tiempo en minutos','class' => 'form-control','style'=>"width: 60px;")); ?></div>
		<div class="col-12"><?php echo $this->Form->end(__('Editar')); ?></div>
	  </div>
	</fieldset>

</div>
<div class="actions">
	<h3><?php echo __('Enlaces rápidos'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Regístro de zonas'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('Zonas'), array('controller' => 'zones', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Rutas'), array('controller' => 'frequencies', 'action' => 'index')); ?> </li>
	</ul>
</div>
