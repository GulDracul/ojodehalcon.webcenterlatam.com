<div class="apartments form">
<?php 
echo $this->Form->create('Apartment'); 
?>
	<fieldset>
		<legend><?php echo __('Editar Apartamento'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('interior',array('label'=>'Interior', 'placeholder' => '', 'class' => 'form-control'));
		echo $this->Form->input('apt',array('label'=>'Apartamento No', 'placeholder' => '', 'class' => 'form-control'));
		echo "<br><h3>Residente principal</h3><hr>";
		echo $this->Form->input('name1',array('label'=>'Nombre', 'placeholder' => '', 'class' => 'form-control'));
		echo $this->Form->input('ph1',array('label'=>'Teléfono', 'placeholder' => '', 'class' => 'form-control'));
		echo $this->Form->input('mail1',array('label'=>'Mail', 'placeholder' => '', 'class' => 'form-control'));
		echo "<br><h3>Residente secundario</h3><hr>";
		echo $this->Form->input('name2',array('label'=>'Nombre', 'placeholder' => '', 'class' => 'form-control'));
		echo $this->Form->input('ph2',array('label'=>'Teléfono', 'placeholder' => '', 'class' => 'form-control'));
		echo $this->Form->input('mail2',array('label'=>'Mail', 'placeholder' => '', 'class' => 'form-control'));
		echo "<hr><br>";
		echo $this->Form->input('pets',array('label'=>'Mascotas', 'placeholder' => '', 'class' => 'form-control'));
		echo $this->Form->input('child',array('label'=>'Niños', 'placeholder' => '', 'class' => 'form-control'));
		echo $this->Form->input('adult',array('label'=>'Adultos', 'placeholder' => '', 'class' => 'form-control'));
		echo $this->Form->input('complex_id',array('label'=>'Conjunto', 'placeholder' => '', 'class' => 'form-control'));
		echo $this->Form->input('deposit_id',array('label'=>'Depósito', 'placeholder' => '', 'class' => 'form-control','empty' => 'Sin deposito'));
	?>
	</fieldset>
	<?php echo __('Parqueadero'); ?>	
			<div class="related">
				<div class="actions">					
				</div>
				<?php if (!empty($apartment['Parking'])): ?>
				<table cellpadding = "0" cellspacing = "0">
				<tr>
					<th><?php echo __('Número'); ?></th>
					<th><?php echo __('Placa'); ?></th>					
					<th><?php echo __('Vehiculo'); ?></th>
				</tr>
				<?php foreach ($apartment['Parking'] as $parking): ?>
					<tr>					
						<td><?php echo $this->Html->link(__($parking['number']), array('controller' => 'parkings', 'action' => 'view', $parking['id'])); ?></td>
						<td><?php echo $parking['plate']; ?></td>
						<td><?php echo $types[$parking['type_id']]; ?></td>						
					</tr>
				<?php endforeach; ?>
				</table>
			<?php endif; ?>	
			<ul>
				<li><?php echo $this->Html->link(__('+ Agregar'), array('controller' => 'parkings', 'action' => 'add'.'/'.$apartment['Apartment']['id'])); ?> </li>
			</ul>
			</div>
<?php echo $this->Form->end(__('Editar')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Enlaces rápidos'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Apartamentos'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('Parqueaderos'), array('controller' => 'parkings', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Depositos'), array('controller' => 'deposits', 'action' => 'index')); ?> </li>
	</ul>
</div>
