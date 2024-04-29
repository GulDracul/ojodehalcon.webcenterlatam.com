<div class="companies view">
<h2><?php echo __('Empresa de seguridad '); ?><?php echo h($company['Company']['name']); ?></h2>
	<dl>
		
		
		<dt><?php echo __('NIT'); ?></dt>
		<dd>
			<?php echo h($company['Company']['nit']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Dirección'); ?></dt>
		<dd>
			<?php echo h($company['Company']['address']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Teléfono'); ?></dt>
		<dd>
			<?php echo h($company['Company']['phone']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('WhatsApp'); ?></dt>
		<dd>
			<?php echo h($company['Company']['cell_phone']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Mail'); ?></dt>
		<dd>
			<?php echo h($company['Company']['mail']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Web'); ?></dt>
		<dd>
			<?php echo h($company['Company']['web']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Creado el'); ?></dt>
		<dd>
			<?php echo h($company['Company']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Última modificación'); ?></dt>
		<dd>
			<?php echo h($company['Company']['modified']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Enlaces rápidos'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('Empresas'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('Conjuntos'), array('controller' => 'complexes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Rondas'), array('controller' => 'rounds', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Recorridos'), array('controller' => 'routes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Turnos'), array('controller' => 'shifts', 'action' => 'index')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Conjuntos relacionados con la empresa'); ?></h3>
	<?php if (!empty($company['Complex'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Name','Nombre'); ?></th>
		<th><?php echo __('Nit','NIT'); ?></th>
		<th><?php echo __('Address','Dirección'); ?></th>
		<th><?php echo __('Phone','Teléfono'); ?></th>
		<th><?php echo __('Cell Phone','WhatsApp'); ?></th>
		<th><?php echo __('Mail'); ?></th>
		<th><?php echo __('Web'); ?></th>
		<th><?php echo __('Qr'); ?></th>
		<th><?php echo __('Created','Creación'); ?></th>
		<th></th>
	</tr>
	<?php foreach ($company['Complex'] as $complex): ?>
		<tr>
			<td><?php echo $complex['name']; ?></td>
			<td><?php echo $complex['nit']; ?></td>
			<td><?php echo $complex['address']; ?></td>
			<td><?php echo $complex['phone']; ?></td>
			<td><?php echo $complex['cell_phone']; ?></td>
			<td><?php echo $complex['mail']; ?></td>
			<td><?php echo $complex['web']; ?></td>
			<td><?php echo $complex['qr']; ?></td>
			<td><?php echo $complex['created']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('Ver'), array('controller' => 'complexes', 'action' => 'view', $complex['id'])); ?>
				<br><br>
				<?php echo $this->Html->link(__('Editar'), array('controller' => 'complexes', 'action' => 'edit', $complex['id'])); ?>
				<br><br>
				<?php echo $this->Form->postLink(__('Eliminar'), array('controller' => 'complexes', 'action' => 'delete', $complex['id']), array('confirm' => __('Are you sure you want to delete # %s?', $complex['id']))); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>
</div>
</div>
