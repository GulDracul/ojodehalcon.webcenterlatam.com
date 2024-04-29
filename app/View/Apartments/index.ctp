<div class="apartments index">
	<h2><?php echo __('Apartamentos'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('interior','Interior'); ?></th>
			<th><?php echo $this->Paginator->sort('apt','Apartamento'); ?></th>
			<th><?php echo $this->Paginator->sort('name1','Residentes'); ?></th>
			<th><?php echo $this->Paginator->sort('ph1','Teléfonos'); ?></th>
			<th><?php echo $this->Paginator->sort('mail1','Mail'); ?></th>
			<th><?php echo $this->Paginator->sort('parking_id','Parqueadero'); ?></th>
			<th><?php echo $this->Paginator->sort('deposit_id','Deposito'); ?></th>
			<th class="actions"><?php echo __(''); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($apartments as $apartment): ?>
	<tr>
		<td><?php echo h($apartment['Apartment']['interior']); ?>&nbsp;</td>
		<td><?php echo h($apartment['Apartment']['apt']); ?>&nbsp;</td>
		<td style=" text-align: left; ">
			<b>1. </b><?php echo h($apartment['Apartment']['name1']); ?>&nbsp;
			<br>
			<b>2. </b><?php echo h($apartment['Apartment']['name2']); ?>
		</td>
		<td style=" text-align: left; ">
			<b>1. </b><?php echo h($apartment['Apartment']['ph1']); ?>&nbsp;
			<br>
			<b>2. </b><?php echo h($apartment['Apartment']['ph2']); ?>&nbsp;		
		</td>
		<td style=" text-align: left; ">
			<b>1. </b><?php echo h($apartment['Apartment']['mail1']); ?>&nbsp;
			<br>
			<b>2. </b><?php echo h($apartment['Apartment']['mail2']); ?>&nbsp;		
		</td>
		<td>
			<?php foreach ($apartment['Parking'] as $parking): ?>								
					<?php echo $this->Html->link(__($parking['number']), array('controller' => 'parkings', 'action' => 'view', $parking['id'])); ?>	
					<br>	
				<?php endforeach; ?>
		</td>
		<td>
			<?php
			if($apartment['Apartment']['deposit_id']>0){
			 echo $apartment['Deposit']['number'];
			}else{
					echo "Sin depósito";
				 }
			?>
		</td>
		<td class="actions">
			<?php echo $this->Html->link(__('Ver'), array('action' => 'view', $apartment['Apartment']['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</tbody>
	</table>
	<p>
	<?php
	echo $this->Paginator->counter(array(
		'format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')
	));
	?>	</p>
	<div class="paging">
	<?php
		echo $this->Paginator->prev('< ' . __('previous'), array(), null, array('class' => 'prev disabled'));
		echo $this->Paginator->numbers(array('separator' => ''));
		echo $this->Paginator->next(__('next') . ' >', array(), null, array('class' => 'next disabled'));
	?>
	</div>
</div>
<div class="actions">
	<h3><?php echo __('Enlaces rápidos'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Conjunto'), array('controller' => 'Complexes','action' => 'view'."/".$apartment['Apartment']['complex_id'])); ?></li>
		<li><?php echo $this->Html->link(__('Parqueaderos'), array('controller' => 'parkings', 'action' => 'index'."/".$apartment['Apartment']['complex_id'])); ?> </li>
	</ul>
</div>
