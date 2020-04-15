<?php include 'header_browse.php';?>
<style>
	table{
	background-color: rgb(243, 243, 243);
	}
</style>
<div class="container" style="margin-top: 90px;">
	<div class="row">
		<div class="col-lg-12">
			<h3 class="black_text">Comprar Membresía</h3>
			<hr>
		</div>
		<div class="col-lg-8">
			<h4 class="black_text">Compre cualquiera de los paquetes de membresía desde abajo.</h4>
			<ul class="black_text">
				<li>
					Seleccione cualquiera de sus paquetes de membresía preferidos y realice el pago.
				</li>
				<li>
					Puede cancelar su suscripción en cualquier momento posterior.
				</li>
			</ul>
			<form method="post" action="">
				<table class="table table-striped table-hover" style="color: #000;">
					<tbody>
						<tr>
							<td>
								<h6>Paquetes</h6>
							</td>
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
							<td align="center">USD <?php echo $row['price'];?></td>
							<?php endforeach;?>
						</tr>
						<tr style="background-color: #fff;">
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
						<tr style="background-color: #fff;">
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
						<tr style="background-color: #fff;">
							<td>Cancelar en cualquier momento</td>
							<?php
								$plans = $this->crud_model->get_active_plans();
								foreach ($plans as $row):
								?>
							<td align="center"><i class="fa fa-check" aria-hidden="true"></i></td>
							<?php endforeach;?>
						</tr>
						<tr>
							<td></td>
							<?php
								$plans = $this->crud_model->get_active_plans();
								foreach ($plans as $row):
								?>
							<td align="center">
								<input type="radio" name="plan_id" value="<?php echo $row['plan_id'];?>" onChange="enable_payment()" />
							</td>
							<?php endforeach;?>
						</tr>
					</tbody>
				</table>
				<div class="pull-right">
					<a href="<?php echo base_url();?>index.php?browse/youraccount" class="btn btn-default">Regresar</a>
					<input type="submit" formaction="<?php echo base_url();?>index.php?payment/paypal_payment/paypal_post" 
						class="btn btn-primary" id="payment_paypal" disabled value="Pay by paypal">
					<input type="submit" formaction="<?php echo base_url();?>index.php?browse/purchasestripe" 
						class="btn btn-primary" id="payment_stripe" disabled value="Pay by stripe">
				</div>
			</form>
		</div>
		<script>
			function enable_payment()
			{
				$('#payment_paypal').removeAttr('disabled');
				$('#payment_stripe').removeAttr('disabled');
			}
		</script>
	</div>
	<hr>
	<?php include 'footer.php';?>
</div>