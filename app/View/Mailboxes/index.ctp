<div class="mailboxes index">
	<h2><?php echo __('Casillero'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<thead>
	<tr>			
			<th><?php echo $this->Paginator->sort('article_id','Artículo'); ?></th>
			<th><?php echo $this->Paginator->sort('input','Entrada'); ?></th>
			<th><?php echo $this->Paginator->sort('ouput','Salida'); ?></th>
			<th><?php echo $this->Paginator->sort('name','Recibido por'); ?></th>
			<th><?php echo $this->Paginator->sort('signature','Firma'); ?></th>
			<th><?php echo $this->Paginator->sort('comment','Comentario'); ?></th>		
			<th><?php echo $this->Paginator->sort('apartment_id','Apartamento'); ?></th>
			<th class="actions"><?php echo __('Entrega'); ?></th>
			<th class="actions"><?php echo __(''); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($mailboxes as $mailbox): ?>
	<tr>
		<td>
			<?php echo $this->Html->link($mailbox['Article']['name'], array('controller' => 'articles', 'action' => 'view', $mailbox['Article']['id'])); ?>
		</td>
		<td><?php echo h($mailbox['Mailbox']['created']); ?>&nbsp;</td>
		<td><?php echo h($mailbox['Mailbox']['ouput']); ?>&nbsp;</td>
		<td><?php echo h($mailbox['Mailbox']['name']); ?>&nbsp;</td>		
		<td><?php echo h($mailbox['Mailbox']['signature']); ?>&nbsp;</td>
		<td><b>Recepción: </b>
		<?php echo h($mailbox['Mailbox']['comment']); ?>&nbsp;
		<br><br>
		<b>Quien  recibe: </b>
		<?php echo h($mailbox['Mailbox']['delivered']); ?>
		</td>
		
		<td>
			<?php echo $this->Html->link($mailbox['Apartment']['interior']." - ".$mailbox['Apartment']['apt'], array('controller' => 'apartments', 'action' => 'view', $mailbox['Apartment']['id'])); ?>
		</td>
		<td class="actions">
			<?php if($mailbox['Mailbox']['ouput'] == '0000-00-00 00:00:00' ){ ?>
			<?php echo $this->Html->link(__('Entregar'), array('action' => 'delivered', $mailbox['Mailbox']['id'])); ?>
			<?php  }else{ echo "Entregado"; } ?>
		</td>
		
		<td class="actions">
			<?php echo $this->Html->link(__('Ver'), array('action' => 'view', $mailbox['Mailbox']['id'])); ?>
			<?php echo $this->Html->link(__('Editar'), array('action' => 'edit', $mailbox['Mailbox']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('Agregar paquete'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('Artículos'), array('controller' => 'articles', 'action' => 'index')); ?> </li>
	</ul>
</div>
