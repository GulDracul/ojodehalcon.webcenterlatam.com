<div class="hours view">
<h2><?php echo __('Regístro de zona '.$hour['Zone']['name']); ?></h2>
	<dl>
		<dt><?php echo __('Zona'); ?></dt>
		<dd>
			<?php echo $this->Html->link($hour['Zone']['name'], array('controller' => 'zones', 'action' => 'view', $hour['Zone']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Ruta'); ?></dt>
		<dd>
			<?php echo $this->Html->link($hour['Frequency']['name'], array('controller' => 'frequencies', 'action' => 'view', $hour['Frequency']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Hora de regístro de la zona'); ?></dt>
		<dd>
			<?php echo h($hour['Hour']['start']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Margen de tiempo para el marcado'); ?></dt>
		<dd>
			<?php echo h($hour['Hour']['margin']); ?> Min
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Enlaces rápidos'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Regístro de zonas'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('Zonas'), array('controller' => 'zones', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Rutas'), array('controller' => 'frequencies', 'action' => 'index')); ?> </li>
	</ul>
</div>
