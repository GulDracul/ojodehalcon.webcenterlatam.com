<div class="mailboxes view">
<h2><?php echo __('Paquete'); ?></h2>
	<dl>
		<hr>	
		<h3>Recepción</h3>
		<dt><?php echo __('Artículo'); ?></dt>
		<dd>
			<?php echo $this->Html->link($mailbox['Article']['name'], array('controller' => 'articles', 'action' => 'view', $mailbox['Article']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Apartamento'); ?></dt>
		<dd>
			<?php echo $this->Html->link($mailbox['Apartment']['interior']." - ".$mailbox['Apartment']['apt'], array('controller' => 'apartments', 'action' => 'view', $mailbox['Apartment']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Fecha y hora de ingreso'); ?></dt>
		<dd>
			<?php echo h($mailbox['Mailbox']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Comentario'); ?></dt>
		<dd>
			<?php echo h($mailbox['Mailbox']['comment']); ?>
			&nbsp;
		</dd>
		<br>
		<hr>	
		<h3>Entrega</h3>
		<dt><?php echo __('Quien recibio'); ?></dt>
		<dd>
			<?php echo h($mailbox['Mailbox']['name']); ?>
			&nbsp;
		</dd>
		
		<dt><?php echo __('Fecha y hora de entrega'); ?></dt>
		<dd>
			<?php echo h($mailbox['Mailbox']['ouput']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Firma'); ?></dt>
		<dd>
			<?php echo h($mailbox['Mailbox']['signature']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Comentario'); ?></dt>
		<dd>
			<?php echo h($mailbox['Mailbox']['delivered']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Enlaces rápidos'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Agregar paquete'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('Paquetes'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('Artículos'), array('controller' => 'articles', 'action' => 'index')); ?> </li>
	</ul>
</div>

