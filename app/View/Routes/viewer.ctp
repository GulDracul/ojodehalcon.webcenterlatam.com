<style>
.message {
    clear: both;
    color: #fff;
    font-size: 390%;
    font-weight: bold;
    margin: 0 0 1em 0;
    padding: 5px;
}
.clockdate-wrapper{
	font-size: 90px;
}
dt {
    width: 9em;
}
dd {
    margin-left: 9em!important;
}
</style>
<?php echo $this->Html->link(__('Crear caso'), array('controller' => 'incidents', 'action' => 'add'), array('type'=>'button','class' => 'btn btn-warning','style'=>'font-size: 60px; position: absolute; top: 25px; right: 40px; ')); ?>
<h2 style="font-size: 50px; color: green; font-weight: 700;"><?php echo __('Zona regístrada con exíto'); ?></h2>
	<dl style=" font-size: 35px; ">
		<dt><?php echo __('Zona'); ?></dt>
		<dd>
			<?php echo $route['Zone']['name']; ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Ruta'); ?></dt>
		<dd>
			<?php echo $route['Frequency']['name']; ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Hora de regístro'); ?></dt>
		<dd>
			<?php echo h($route['Route']['created']); ?>
			&nbsp;
		</dd>
		
	</dl>
	<br>

 <?php echo $this->Html->link(__('Terminar'), array('action' => 'scan'), array('type'=>'button','class' => 'btn btn-success','style'=>'font-size: 60px;')); ?> 