<?php include 'header_browse.php';?>
<div class="container" style="margin-top: 90px;">
	<div class="row">
		<div class="col-lg-12">
			<h3 class="black_text">¿Cancelar su membresía?</h3>
			<hr>
		</div>
		<div class="col-lg-8">
			<h4 class="black_text">Haga clic en "Finalizar cancelación" a continuación para cancelar su membresía.</h4>
			<ul class="black_text">
				<li>
				La cancelación será efectiva inmediatamente después de su confirmación.
				</li>
				<li>
				Reinicie su membresía en cualquier momento. Sus preferencias de visualización se guardarán siempre.
				</li>
			</ul>
			<form method="post" action="<?php echo base_url();?>index.php?browse/cancelplan">
				<input type="hidden" name="task" value="cancel_plan" />
				<button class="btn btn-primary" type="submit"> Finalizar cancelación </button>
				<a href="<?php echo base_url();?>index.php?browse/youraccount" class="btn btn-default">Regresar</a>
			</form>
		</div>
	</div>
	<hr>
	<?php include 'footer.php';?>
</div>


