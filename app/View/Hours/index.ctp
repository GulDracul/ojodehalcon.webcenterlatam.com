	
<?php date_default_timezone_set('America/Bogota');?>	
<div class="hours index">
	<h2><?php echo __('Regístro de zonas'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('zone_id','zona'); ?></th>
			<th><?php echo $this->Paginator->sort('frequency_id','Ronda'); ?></th>
			<th><?php echo $this->Paginator->sort('start','Hora de inicio'); ?></th>
			<th><?php echo $this->Paginator->sort('margin','Rango'); ?></th>
			<th ></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($hours as $hour): ?>
	<tr>
		<td>
			<?php echo $this->Html->link($hour['Zone']['name'], array('controller' => 'zones', 'action' => 'view', $hour['Zone']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($hour['Frequency']['name'], array('controller' => 'frequencies', 'action' => 'view', $hour['Frequency']['id'])); ?>
		</td>
		<td><?php echo h($hour['Hour']['start']); ?>&nbsp;</td>
		<td>			
			<?php echo h($hour['Hour']['margin']); ?> Min
			<br>
			<?php
				$horaInicial=$hour['Hour']['start'];
				$minutoAnadir=$hour['Hour']['margin'];
	
				$segundos_horaInicial=strtotime($horaInicial);
				$horaActual =strtotime(date("H:i"));
				$segundos_minutoAnadir=($minutoAnadir*60)/2;
				echo $nuevaHoraResta=date("H:i",$segundos_horaInicial-$segundos_minutoAnadir);
				echo " - ";
				echo $nuevaHoraSuma=date("H:i",$segundos_horaInicial+$segundos_minutoAnadir);
				$piso=abs($segundos_horaInicial-$segundos_minutoAnadir);				
				$techo=$segundos_horaInicial+$segundos_minutoAnadir;
				echo "<br>";
				if($horaActual>=$piso and $horaActual<=$techo)
				{
				echo "hora activa";
				}else{
				echo "hora inactiva";
				
				}
			?>
		</td>
		<td class="actions">
			<?php echo $this->Html->link(__('Ver'), array('action' => 'view', $hour['Hour']['id'])); ?>
			<?php echo $this->Html->link(__('Editar'), array('action' => 'edit', $hour['Hour']['id'])); ?>
			<?php echo $this->Form->postLink(__('Eliminar'), array('action' => 'delete', $hour['Hour']['id']), array('confirm' => __('Se eliminará definitivamente el regístro, desea continuar ?', $hour['Hour']['id']))); ?>
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
		<li><?php echo $this->Html->link(__('Agregar regístro de zonas'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('Zonas'), array('controller' => 'zones', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Rutas'), array('controller' => 'frequencies', 'action' => 'index')); ?> </li>
	</ul>
</div>
