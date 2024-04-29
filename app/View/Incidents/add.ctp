	<link rel='stylesheet prefetch' href='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css'>
    <link rel='stylesheet prefetch' href='https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.11.2/css/bootstrap-select.min.css'>   
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.6.3/js/bootstrap-select.min.js"></script>
<div class="mfont">
<?php echo $this->Form->create('Incident'); ?>
		<?php if(isset($zone) and !empty($zone)){
			?><h2 class="mh2"><?php echo __('Agregar Incidente de la zona '.$zone['Zone']['name'].' a la minuta'); ?></h2><?php
			echo $this->Html->link(__('Crear caso'), array('controller' => 'incidents', 'action' => 'add'), array('type'=>'button','class' => 'btn btn-warning','style'=>'font-size: 60px; position: absolute; top: 25px; right: 40px; ')); 
		}else{
				$zone=""; 
				?><h2 class="mh2"><?php echo __('Agregar Incidente a la minuta'); ?></h2><?php
			  } ?>
		
	<?php
		echo $this->Form->input('name',array('required'=>true,'label'=>'Evento', 'placeholder' => '', 'class' => 'form-control '));		
		echo $this->Form->input('event_id',array('label'=>'Categoría del evento', 'placeholder' => '', 'class' => 'form-control selectpicker','data-live-search'=>'true'));	
		echo "<hr><h3 class='mh3'>Lugar de los hechos</h3>";
		if(!empty($zone)){
					?><input class="form-control" type="text" placeholder="<?php echo "Zona".$zone['Zone']['name']; ?>" disabled> <?php
					echo $this->Form->input('zone_id',array('type'=>'hidden','value'=>$zone['Zone']['id']));
			  }else{ 
				echo $this->Form->input('parking_id',array('label'=>'Parqueadero involucrado', 'placeholder' => '', 'class' => 'form-control selectpicker','value'=>'empty','empty' => 'Parqueaderos','data-live-search'=>'true'));
				echo $this->Form->input('apartment_id',array('label'=>'Apartamento involucrado', 'placeholder' => '', 'class' => 'form-control selectpicker','value'=>'empty','empty' => 'Apatamentos','data-live-search'=>'true'));
				echo $this->Form->input('deposit_id',array('label'=>'Depósito involucrado', 'placeholder' => '', 'class' => 'form-control selectpicker','value'=>'empty','empty' => 'Depositos','data-live-search'=>'true'));
				echo $this->Form->input('zone_id',array('label'=>'Zona involucrado', 'placeholder' => '', 'class' => 'form-control selectpicker ','value'=>'empty','empty' => 'Zonas','data-live-search'=>'true'));				
			   } 
			    ?><br><label>Descripción</label><?php
				echo $this->Form->textarea('incident',array('rows' => '4','required'=>true,'label'=>'Descripción', 'placeholder' => '', 'class' => 'form-control '));

	?>
<div class="container">
  <div class="row">
    <div class="col-sm">
      <?php echo $this->Form->end(__('Agregar')); ?>
    </div>
    <div class="col-sm">
      <?php echo $this->Html->link(__('Cancelar'), array('controller' => 'Routes', 'action' => 'scan'), array('type'=>'button','class' => 'mbtn btn btn-danger')); ?>
    </div>
  </div>
</div>
</div>

