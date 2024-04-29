  <div class="container-fluid">
	 <div class="row column_title">
		<div class="col-md-12">
		   <div class="page_title">
			  <h2>Conjuntos</h2>
		   </div>
		</div>
	 </div>
	<div class="white_shd full margin_bottom_30">
		  <div class="full graph_head">
			 <div class="heading1 margin_0">
				<h3>Conjuntos asignados</h3>
			 </div>
		  </div>
		  
			 <div class="full">
				 <div class="invoice_inner">
					<div class="row">
					
					
					
				
						<?php foreach ($complexes as $complex): ?>																							
							<div class="col-md-4">
							  <div class="full invoice_blog padding_infor_info padding-bottom_0">
								 <h4>
									<b><?php echo $this->Html->link('<i class="fa fa-external-link" aria-hidden="true"></i> ' . $complex['Complex']['name'], array('controller' => 'Complexes', 'action' => 'view', $complex['Complex']['id']), array('escape' => false)); ?>

									
									 <div style=" font-size: 50%; font-weight: 400; ">
										<?php echo h($complex['Complex']['web']); ?>
									 </div>	
								 </h4>
								
								 <p>
									 <strong>Dirección</strong>
									 <br>  
									 <?php echo h($complex['Complex']['address']); ?>    
									 <strong>Teléfonos: </strong>
									 <br>
									 - <?php echo h($complex['Complex']['phone']); ?>
									 <br>
									 - <?php echo h($complex['Complex']['cell_phone']); ?> 
									 <br>
									 <strong>Email : </strong>
									 <br>
									 <a href="mailto:<?php echo h($complex['Complex']['mail']); ?>"><?php echo h($complex['Complex']['mail']); ?></a>
								 </p>
							  </div>
						   </div>	
						<?php endforeach; ?>
					
					   
					</div>
				 </div>
			  </div>
	</div>
  </div>
