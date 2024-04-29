<div class="incomes view">
<h2><?php echo __('Detalle visita'); ?></h2>
	<dl>
		
		
		<dt><?php echo __('Fecha de ingreso'); ?></dt>
		<dd>
			<?php echo h($income['Income']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Fecha de salida'); ?></dt>
		<dd>
			<?php echo h($income['Income']['modified']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Visitante'); ?></dt>
		<dd>
			<?php echo $this->Html->link($income['Visitor']['name'], array('controller' => 'visitors', 'action' => 'view', $income['Visitor']['id'])); ?>
			&nbsp;
		</dd>
		
		<dt><?php echo __('Apartamento'); ?></dt>
		<dd>
			<?php echo $this->Html->link($income['Apartment']['interior'].' - '.$income['Apartment']['apt'], array('controller' => 'apartments', 'action' => 'view', $income['Apartment']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Parqueadero'); ?></dt>
		<dd>
			<?php echo $this->Html->link($income['Parking']['number'], array('controller' => 'parkings', 'action' => 'view', $income['Parking']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Comentario'); ?></dt>
		<dd>
			<?php echo h($income['Income']['comment']); ?>
			&nbsp;
		</dd>
		
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Enlaces rápidos'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('Visitas'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('Agregar visitante'), array('controller' => 'visitors', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('Apartamentos'), array('controller' => 'apartments', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Parqueaderos'), array('controller' => 'parkings', 'action' => 'index')); ?> </li>
	</ul>
</div>
