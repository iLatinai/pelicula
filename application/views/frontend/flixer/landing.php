<!-- TOP LANDING SECTION -->
<div style="height:93vh;width:100%;background-image: url(<?php echo base_url().'assets/frontend/flixer/images/home_top_banner.jpg';?>)">
	<!-- logo -->
	<div style="float: left;">
		<a href="<?php echo base_url();?>index.php?home">
		<img src="<?php echo base_url();?>/assets/global/logo.png" style="margin: 18px 18px; width: 160px;" />
		</a>
	</div>
	<div style="float: right;margin: 18px 18px; height: 50px;" class="hidden-xs">
		<a href="<?php echo base_url();?>index.php?home/signin" class="btn btn-danger">INICIAR SESIÓN</a>
	</div>
	
	<!-- promo text visible for large devices -->
	<div style="font-size: 85px;font-weight: bold;clear: both;padding: 200px 0px 0px 50px;color: #fff;" class="hidden-xs">

		¿Qué quieres ver?
		<div style="font-size: 30px; letter-spacing: .2px; color: #fff; font-weight: 400;">
			MIRA DONDE QUIERAS, CANCELA CUANDO QUIERAS.

		</div>
		<a href="<?php echo base_url();?>index.php?home/signup" class="btn btn-danger btn-lg" >OBTENER MEMBRESÍA</a>
	</div>
	
	<!-- promo text visible for small devices -->
	<div style="font-size: 45px;font-weight: bold;clear: both;padding: 80px 0px 0px 10px;color: #fff;" class="hidden-lg hidden-sm hidden-md">
		See what's next.
		<div style="font-size: 25px; letter-spacing: .2px; color: #fff; font-weight: 400;">
			MIRA DONDE QUIERAS. <br> . CANCELA CUANDO QUIERAS.

		</div>
		<a href="<?php echo base_url();?>index.php?home/signup" class="btn btn-danger btn-lg" >ENTRAR AHORA</a>
		<br>
		<a href="<?php echo base_url();?>index.php?home/signin" class="btn btn-danger btn-lg" >INICIAR SESIÓN</a>
	</div>
</div>
<!-- MIDDLE TAB SECTION -->
<div class="container">
	<div class="row">
		<div class="col-lg-12">
			<div class="bs-component">
				<ul class="nav nav-tabs">
					<li class="active">
						<a href="#cancel" data-toggle="tab">
						<i class="fa fa-sign-out" style="font-size: 64px; font-weight: lighter; padding: 20px 0px 5px;"></i>
						<br>
							Cancela tu suscripción cuando desees
						</a>
					</li>
					<li>
						<a href="#anywhere" data-toggle="tab">
						<i class="fa fa-laptop" style="font-size: 64px; font-weight: lighter; padding: 20px 0px 5px;"></i>
						<br>
						Mira desde cualquier lugar
						</a>
					</li>
					<li>
						<a href="#price" data-toggle="tab">
						<i class="fa fa-tags fa-flip-horizontal" style="font-size: 64px; font-weight: lighter; padding: 20px 0px 5px;"></i>
						<br>
						Planes para ti
						</a>
					</li>
				</ul>
				<div id="myTabContent" class="tab-content">
					<div class="tab-pane active in" id="cancel">
						<p>
						<div class="row">
							<div class="col-md-7" style="padding-top: 50px;">
								<h4>

									SI DECIDES QUE VIDEOFLIX NO ES PARA TI, NO HAY PROBLEMA. CANCELA ONLINE EN CUALQUIER MOMENTO.
								</h4>
								<br>
								<a href="<?php echo base_url();?>index.php?home/signup" class="btn btn-danger btn-lg" >ENTRAR AHORA</a>
							</div>
							<div class="col-md-5">
								<img src="<?php echo base_url();?>assets/frontend/flixer/images/asset_cancelanytime_withdevice.png" style="width: 100%;" />
							</div>
						</div>
						</p>
					</div>
					<div class="tab-pane" id="anywhere">
						<p>
						<div class="row">
							<div class="col-md-9">
								<h4>
									Disfruta de Películas, Series y Programas donde quieras, en cualquier dispositivo.
								</h4>
							</div>
							<div class="col-md-3">
								<a href="<?php echo base_url();?>index.php?home/signup" class="btn btn-danger btn-lg" >ENTRAR AHORA</a>
							</div>
						</div>
						<div class="row" style="margin-top:50px;text-align: center;">
							<div class="col-md-4">
								<img src="<?php echo base_url();?>assets/frontend/flixer/images/asset_TV_UI.png" style="width: 100%;" />
								<h5>Disfruta en tu TV</h5>
							</div>
							<div class="col-md-4">
								<img src="<?php echo base_url();?>assets/frontend/flixer/images/asset_mobile_tablet_UI_2.png" style="width: 100%;" />
								<h5>Disfruta en tu Smartphone o Tablet</h5>
							</div>
							<div class="col-md-4">
								<img src="<?php echo base_url();?>assets/frontend/flixer/images/asset_website_UI.png" style="width: 100%;" />
								<h5>Disfruta en tu PC</h5>
							</div>
						</div>
						</p>
					</div>
					<div class="tab-pane" id="price">
						<p>
						<div class="row" style="margin: 35px;">
							<div class="col-md-8" style="text-align: right;">
								<h4>
									Elige un plan y disfruta.
								</h4>
							</div>
							<div class="col-md-4" style="text-align: left;">
								<a href="<?php echo base_url();?>index.php?home/signup" class="btn btn-danger btn-lg" >ENTRAR AHORA</a>
							</div>
						</div>
						<!-- price table -->
						<table class="table table-striped table-hover" style="color: #999;">
							<tbody>
								<tr>
									<td></td>
									<?php
										$plans = $this->crud_model->get_active_plans();
										foreach ($plans as $row):
										?>
									<td align="center">
										<h5 style="text-transform: uppercase;"><?php echo $row['name'];?></h5>
									</td>
									<?php endforeach;?>
								</tr>
								<tr>

									<td>Precio mensual</td>

									<?php
										$plans = $this->crud_model->get_active_plans();
										foreach ($plans as $row):
										?>
									<td align="center">$<?php echo $row['price'];?> CLP</td>
									<?php endforeach;?>
								</tr>
								<tr>

									<td>Pantallas que puedes ver al mismo tiempo</td>

									<?php
										$plans = $this->crud_model->get_active_plans();
										foreach ($plans as $row):
										?>
									<td align="center"><?php echo $row['screens'];?></td>
									<?php endforeach;?>
								</tr>
								<tr>

									<td>Mire en su computadora portátil, TV, teléfono y tableta</td>

									<?php
										$plans = $this->crud_model->get_active_plans();
										foreach ($plans as $row):
										?>
									<td align="center"><i class="fa fa-check" aria-hidden="true"></i></td>
									<?php endforeach;?>
								</tr>
								<tr>
									<td>HD disponible</td>
									<?php
										$plans = $this->crud_model->get_active_plans();
										foreach ($plans as $row):
										?>
									<td align="center"><i class="fa fa-check" aria-hidden="true"></i></td>
									<?php endforeach;?>
								</tr>
								<tr>

									<td>Películas y programas de TV ilimitados.</td>

									<?php
										$plans = $this->crud_model->get_active_plans();
										foreach ($plans as $row):
										?>
									<td align="center"><i class="fa fa-check" aria-hidden="true"></i></td>
									<?php endforeach;?>
								</tr>
								<tr>

									<td>Cancelar plan en cualquier momento</td>

									<?php
										$plans = $this->crud_model->get_active_plans();
										foreach ($plans as $row):
										?>
									<td align="center"><i class="fa fa-check" aria-hidden="true"></i></td>
									<?php endforeach;?>
								</tr>
							</tbody>
						</table>
						</p>
					</div>
				</div>
			</div>
		</div>
	</div>
	<?php include 'footer.php';?>
</div>