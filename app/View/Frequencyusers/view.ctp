<div class="frequencyusers view">
<h2><?php echo __('Usuario de ruta'); ?></h2>
	<dl>
		<dt><?php echo __('Ruta'); ?></dt>
		<dd>
			<?php echo $this->Html->link($frequencyuser['Frequency']['name'], array('controller' => 'frequencies', 'action' => 'view', $frequencyuser['Frequency']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Usuario'); ?></dt>
		<dd>
			<?php echo $this->Html->link($frequencyuser['User']['name'], array('controller' => 'users', 'action' => 'view', $frequencyuser['User']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Creado el'); ?></dt>
		<dd>
			<?php echo h($frequencyuser['Frequencyuser']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Última modificación'); ?></dt>
		<dd>
			<?php echo h($frequencyuser['Frequencyuser']['modified']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Enlaces rápidos'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Editar '), array('action' => 'edit', $frequencyuser['Frequencyuser']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('Usuarios de ruta'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Rutas'), array('controller' => 'frequencies', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Usuarios'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		
	</ul>
</div>


