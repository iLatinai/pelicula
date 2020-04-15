<div class="row">
	<!-- BASIC INFORMATION UPDATE -->
	<div class="col-md-6 col-sm-12 col-xs-12">
		<div class="grid simple ">
			<div class="grid-title">
				<h4>Información básica de la serie de televisión</h4>
			</div>
			<div class="grid-body">
				<?php
					$series_detail = $this->db->get_where('series',array('series_id'=>$series_id))->row();
					?>
				<form method="post" action="<?php echo base_url();?>index.php?admin/series_edit/<?php echo $series_id;?>" 
					enctype="multipart/form-data">
					<div class="form-group">
						<label class="form-label">Nombre de la serie</label>
						<span class="help"></span>
						<div class="controls">
							<input type="text" class="form-control" name="title" value="<?php echo $series_detail->title;?>">
						</div>
					</div>
					<div class="form-group">
						<label class="form-label">Miniatura</label>
						<span class="help">- imagen de icono de la serie</span>
						<div class="controls">
							<input type="file" class="form-control" name="thumb">
						</div>
					</div>
					<div class="form-group">
						<label class="form-label">Poster</label>
						<span class="help">- imagen de banner grande de la serie</span>
						<div class="controls">
							<input type="file" class="form-control" name="poster">
						</div>
					</div>
					<div class="form-group">
						<label class="form-label">Breve descripción </label>
						<span class="help"></span>
						<div class="controls">
							<textarea class="form-control" name="description_short"><?php echo $series_detail->description_short;?></textarea>
						</div>
					</div>
					<div class="form-group">
						<label class="form-label">Descripción larga </label>
						<span class="help"></span>
						<div class="controls">
							<textarea class="form-control" name="description_long"><?php echo $series_detail->description_long;?></textarea>
						</div>
					</div>
					<div class="form-group">
						<label class="form-label">Actores </label>
						<span class="help">- seleccionar múltiples actores</span>
						<div class="controls">
							<select class="select2"  multiple name="actors[]" style="width:100%;">
								<?php 
									$actors	=	$this->db->get('actor')->result_array();
									foreach ($actors as $row2):?>
								<option
									<?php 
										$actors	=	$series_detail->actors;
										if ($actors != '')
										{
											$actor_array	=	json_decode($actors);
											if (in_array($row2['actor_id'], $actor_array))
												echo 'selected';
										}
										?>
									value="<?php echo $row2['actor_id'];?>">
									<?php echo $row2['name'];?>
								</option>
								<?php endforeach;?>
							</select>
						</div>
					</div>
					<div class="form-group">
						<label class="form-label">Género </label>
						<span class="help">- género debe ser seleccionado</span>
						<div class="controls">
							<select class="select2" name="genre_id" style="width:150px;">
								<?php 
									$genres	=	$this->crud_model->get_genres();
									foreach ($genres as $row2):?>
								<option 
									<?php if ( $series_detail->genre_id == $row2['genre_id']) echo 'selected';?>
									value="<?php echo $row2['genre_id'];?>">
									<?php echo $row2['name'];?>
								</option>
								<?php endforeach;?>
							</select>
						</div>
					</div>
					<div class="form-group">
						<label class="form-label">Año de publicación </label>
						<span class="help">- año de publicación</span>
						<div class="controls">
							<select class="select2" name="year" style="width:150px;">
								<?php for ($i = date("Y"); $i > 2000 ; $i--):?>
								<option
									<?php if ( $series_detail->year == $i) echo 'selected';?>
									value="<?php echo $i;?>">
									<?php echo $i;?>
								</option>
								<?php endfor;?>
							</select>
						</div>
					</div>
					<div class="form-group">
						<label class="form-label">Clasificación </label>
						<span class="help">- clasificación de estrellas de la película</span>
						<div class="controls">
							<select class="select2" name="rating" style="width:150px;">
								<?php for ($i = 0; $i <= 5 ; $i++):?>
								<option 
									<?php if ( $series_detail->rating == $i) echo 'selected';?>
									value="<?php echo $i;?>">
									<?php echo $i;?>
								</option>
								<?php endfor;?>
							</select>
						</div>
					</div>
					<div class="form-group">
						<input type="submit" class="btn btn-success" value="Update Tv Series">
						<a href="<?php echo base_url();?>index.php?admin/series_list" class="btn btn-default">Regresar</a>
					</div>
				</form>
			</div>
		</div>
	</div>
	<!-- MANAGE SEASONS & EPISODES -->
	<div class="col-md-6 col-sm-12 col-xs-12">
		<div class="grid simple ">
			<div class="grid-title">
				<h4>Temporadas y episodios</h4>
			</div>
			<div class="grid-body">
				<a href="<?php echo base_url();?>index.php?admin/season_create/<?php echo $series_id;?>" 
					class="btn btn-primary pull-right" style="margin-bottom: 20px;">
				<i class="fa fa-plus"></i>
				Crear Temporada
				</a>
				<table class="table table-hover no-more-tables">
					<tbody>
						<?php 
							$seasons	=	$this->crud_model->get_seasons_of_series($series_id);
							foreach ($seasons as $row):
							?>
						<tr>
							<td>
								<i class="fa fa-dot-circle-o"></i>
								<?php echo $row['name'];?>
							</td>
							<td>
								<?php
									$episodes	=	$this->crud_model->get_episodes_of_season($row['season_id']);
									echo count($episodes);
									?>
								episodios
							</td>
							<td>
								<a href="<?php echo base_url();?>index.php?admin/season_edit/<?php echo $series_id.'/'.$row['season_id'];?>" 
									class="btn btn-info btn-xs btn-mini">
								gestionar episodios</a>
								<a href="<?php echo base_url();?>index.php?admin/season_delete/<?php echo $series_id.'/'.$row['season_id'];?>" 
									class="btn btn-danger btn-xs btn-mini" onclick="return confirm('Want to delete?')">
								eliminar</a>
							</td>
						</tr>
						<?php endforeach;?>
					</tbody>
				</table>
			</div>
		</div>
	</div>
</div>