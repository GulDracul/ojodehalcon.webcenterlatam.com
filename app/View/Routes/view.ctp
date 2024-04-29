<div class="routes view">
<h2><?php echo __('Registro de marcación de zona'); ?></h2>
	<dl>
		<dt><?php echo __('Regístrado el'); ?></dt>
		<dd>
			<?php echo h($route['Route']['created']); ?> 
			<?php  if($route['Route']['intime']==0){ echo "<b style='color:green; font-weight: 900; '>A tiempo</b>"; }else{ echo "<b style='color:red; font-weight: 900; '>Retardo</b>"; } ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Hora de marcado'); ?></dt>
		<dd>
			<?php echo h($route['Route']['start']); ?>
			&nbsp;
		</dd>
		
		<dt><?php echo __('Zona'); ?></dt>
		<dd>
			<?php echo h($route['Route']['zone']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Regístrado por'); ?></dt>
		<dd>
			<?php echo h($route['Route']['user']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Ruta'); ?></dt>
		<dd>
			<?php echo h($route['Route']['frecuency']); ?>
			&nbsp;
		</dd>
		
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Enlaces rápidos'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Marcación de zonas'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Zonas'), array('controller' => 'zones', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Usuarios'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Incidents'), array('controller' => 'incidents', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Rutas'), array('controller' => 'frequencies', 'action' => 'index')); ?> </li>
	</ul>
</div>


