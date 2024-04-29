<div class="deposits view">
<h2><?php echo __('Depósito '.$deposit['Deposit']['number']); ?></h2>
	<dl>
		<dt><?php echo __('Número'); ?></dt>
		<dd>
			<?php echo h($deposit['Deposit']['number']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Comentario'); ?></dt>
		<dd>
			<?php echo h($deposit['Deposit']['comment']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Creado'); ?></dt>
		<dd>
			<?php echo h($deposit['Deposit']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Última modificación'); ?></dt>
		<dd>
			<?php echo h($deposit['Deposit']['modified']); ?>
			&nbsp;
		</dd>
	</dl>
	<br>
	<div class="actions">
	<li><?php echo $this->Html->link(__('Editar Depósito'), array('action' => 'edit', $deposit['Deposit']['id'])); ?> </li>
	</div>
</div>
<div class="actions">
	<h3><?php echo __('Enlaces rápidos'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Depositos'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('Apartamentos'), array('controller' => 'apartments', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Parqueaderos'), array('controller' => 'Parkings', 'action' => 'index')); ?> </li>
	</ul>
</div>

<div class="related">
	<hr>
	<br>
	<h3><?php echo __('Apartamentos relacionados con el depósito'); ?></h3>
	<?php if (!empty($deposit['Apartment'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Interior'); ?></th>
		<th><?php echo __('Apartamento'); ?></th>
		<th><?php echo __('Creado el'); ?></th>
		<th><?php echo __('Última modificación'); ?></th>
		<th class="actions"><?php echo __(''); ?></th>
	</tr>
	<?php foreach ($deposit['Apartment'] as $apartment): ?>
		<tr>
			<td><?php echo $apartment['interior']; ?></td>
			<td><?php echo $apartment['apt']; ?></td>
			<td><?php echo $apartment['created']; ?></td>
			<td><?php echo $apartment['modified']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('Ver'), array('controller' => 'apartments', 'action' => 'view', $apartment['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>
</div>
