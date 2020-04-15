<div class="row-fluid">
	<div class="span12">
		<div class="grid simple ">
			<div class="grid-title no-border">
			</div>
			<div class="grid-body no-border">
				<?php
					$faq_detail = $this->db->get_where('faq',array('faq_id'=>$faq_id))->row();
					?>
				<form method="post" action="<?php echo base_url();?>index.php?admin/faq_edit/<?php echo $faq_id;?>">
					<div class="row">
						<div class="col-md-8 col-sm-8 col-xs-8">
							<div class="form-group">
								<label class="form-label">Nombre de pelicula</label>
								<span class="help">e.j. "Accion, Romantica"</span>
								<div class="controls">
									<input type="text" class="form-control" name="question" value="<?php echo $faq_detail->question;?>">
								</div>
							</div>
							<div class="form-group">
								<label class="form-label">Respuesta a preguntas frecuentes</label>
								<div class="controls">
									<textarea class="form-control" name="answer"><?php echo $faq_detail->answer;?></textarea>
								</div>
							</div>
							<div class="form-group">
								<input type="submit" class="btn btn-success" value="Actualizar">
								<a href="<?php echo base_url();?>index.php?admin/faq_list" class="btn btn-default">Regresar</a>
							</div>
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>