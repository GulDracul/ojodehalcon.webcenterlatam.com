<div class="articles view">
<h2><?php echo __('Article'); ?></h2>
	<dl>
		
		<dt><?php echo __('Nombre'); ?></dt>
		<dd>
			<?php echo h($article['Article']['name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Comentario'); ?></dt>
		<dd>
			<?php echo h($article['Article']['comment']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Creado el'); ?></dt>
		<dd>
			<?php echo h($article['Article']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Última modificación'); ?></dt>
		<dd>
			<?php echo h($article['Article']['modified']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Enlaces rápidos'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Artículos'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('Casillero'), array('controller' => 'Mailboxes', 'action' => 'index')); ?> </li>
	</ul>
</div>
