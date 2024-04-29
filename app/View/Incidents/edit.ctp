
<?php echo $this->Form->create('Incident'); ?>
	<fieldset class="mfont">
		<h2 class="mh2"><?php echo __('Editar Incidente'); ?></h2>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('name',array('label'=>'Evento', 'placeholder' => '', 'class' => 'form-control'));
		echo $this->Form->input('event_id',array('label'=>'Categoría del evento', 'placeholder' => '', 'class' => 'form-control'));
		echo $this->Form->textarea('incident',array('rows' => '4','required'=>true,'label'=>'Descripción', 'placeholder' => '', 'class' => 'form-control '));
		echo $this->Form->input('parking_id',array('label'=>'Parqueadero involucrado', 'placeholder' => '', 'class' => 'form-control','empty' => 'Parqueaderos'));
		echo $this->Form->input('apartment_id',array('label'=>'Apartamento involucrado', 'placeholder' => '', 'class' => 'form-control','empty' => 'Apartamentos'));
		echo $this->Form->input('deposit_id',array('label'=>'Depósito involucrado', 'placeholder' => '', 'class' => 'form-control','empty' => 'Depósitos'));
		echo $this->Form->input('zone_id',array('label'=>'Zona involucrado', 'placeholder' => '', 'class' => 'form-control','empty' => 'Zonas'));
		
	?>
	</fieldset>
<?php echo $this->Form->end(__('Editar incidente'),array('class' => 'mbtn')); ?>


