<div class="visitors view">
<h2><?php echo __('Visitante '.$visitor['Visitor']['name']); ?></h2>
	<dl>
		
		<dt><?php echo __('Identificación'); ?></dt>
		<dd>
			<?php echo h($visitor['Visitor']['dni']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Teléfono'); ?></dt>
		<dd>
			<?php echo h($visitor['Visitor']['phone']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Foto'); ?></dt>
		<dd>
			<?php echo h($visitor['Visitor']['photo']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Fecha de creación'); ?></dt>
		<dd>
			<?php echo h($visitor['Visitor']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Última modificación'); ?></dt>
		<dd>
			<?php echo h($visitor['Visitor']['modified']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Enlaces rápidos'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('Visitantes'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('Visitas'), array('controller' => 'incomes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Nueva visita'), array('controller' => 'incomes', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Visitas'); ?></h3>
	<?php if (!empty($visitor['Income'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>		
		<th><?php echo __('Fecha'); ?></th>
		<th><?php echo __('Apartamento'); ?></th>
		<th><?php echo __('Parqueadero'); ?></th>
		<th><?php echo __('Comentario'); ?></th>
		<th class="actions"><?php echo __(''); ?></th>
	</tr>
	
	
	<?php foreach ($visitor['Income'] as $income): ?>
		<tr>
			<td><?php echo $income['created']; ?></td>			
			<td>
				<?php foreach ($apartments as $apartment): ?>
				 
				<?php
				if($apartment['Apartment']['id']==$income['apartment_id']){
					echo $apartment['Apartment']['apt'];
					echo " - ";
					echo $apartment['Apartment']['interior'];
				 }
				?>
				<?php endforeach; ?>
			</td>
			<td><?php echo $parkings[$income['parking_id']]; ?></td>
			<td><?php echo $income['comment']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('Ver'), array('controller' => 'incomes', 'action' => 'view', $income['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	
</div>
