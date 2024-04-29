
<div class="row justify-content-center">

		<div class="card shadow-lg border-0 rounded-lg mt-5">
			<div class="container">
			  <div class="row">
				<div class="col-xs-12 col-sm-12 col-md-12 col-lg-4 col-xl-4 col-xxl-4">
				  <div class="card-header"><img style="width: 100%; padding: 1em; z-index: 1040; top: 0em;" src="<?php echo Router::url('/'); ?>app/webroot/img/logos/logo.png"></div>
				</div>
				<div class="col-xs-12 col-sm-12 col-md-12 col-lg-6 col-xl-6 col-xxl-6">
				  <div class="card-body">
						<div class="users">
							<?php echo $this->Session->flash('auth'); ?>
							<?php echo $this->Form->create('User'); ?>
							<fieldset>
								<legend>
									<?php echo __('Bienvenido de nuevo'); ?>
								</legend>
								<div class="form-floating mb-3">		
									<?php echo $this->Form->input('username',array('div'=>false,'label'=>false, 'placeholder' => 'Email', 'class' => 'form-control','required'=>true)); ?>  
									<label for="inputLastName">Email</label>                                                   
								</div>
								<div class="form-floating mb-3">		
									<?php echo $this->Form->input('password',array('div'=>false,'label'=>false, 'placeholder' => 'Contraseña', 'class' => 'form-control','required'=>true)); ?>  
									<label for="inputLastName">Contraseña</label>                                                   
								</div>
									<div class="d-flex align-items-center justify-content-between mt-4 mb-0">
									<?php echo $this->Form->end(array('label' => 'Entrar', 'class' => 'btn btn-success btn-block button-send')); ?>
									<?php echo $this->Html->link('Olvido su contraseña?', array('controller' => 'Users', 'action' => 'forgot_password')); ?>
								</div>
							</fieldset>
						</div>
					</div>
				</div>
			  </div>
			</div>						
			<div class="card-footer text-center py-3">
				<div class="small"><a href="register.html">Necesita una cuenta?</a></div>
			</div>
		</div>

</div>
	
	