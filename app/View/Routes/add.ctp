<script type="text/javascript">
 function Finalizar() {        
window.open("");
setTimeout("window.close()", 1000);
}

</script>

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
</style>
<div class="container">
<hr>
<div class="row">
	<div style=" text-align: left; " class="col-sm">
	  <?php echo $this->Html->link(__('Crear caso'), array('controller' => 'incidents', 'action' => 'add'.'/'.$id), array('type'=>'button','class' => 'btn btn-warning','style'=>'font-size: 60px;')); ?> 
	</div>
	<div style=" text-align: right; " class="col-sm">
	 <?php echo $this->Html->link(__('Terminar'), array('action' => 'scan'), array('type'=>'button','class' => 'btn btn-success','style'=>'font-size: 60px;')); ?> 
	</div>
</div>
