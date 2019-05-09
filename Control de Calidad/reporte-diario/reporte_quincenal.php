	<?php
		if (isset($con))
		{

	?>
	<!-- Modal -->
	<div class="modal fade" id="nuevoReporte" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
	  <div class="modal-dialog" role="document">
		<div class="modal-content">
		  <div class="modal-header">
			<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
			<h4 class="modal-title" id="myModalLabel"><i class='glyphicon glyphicon-edit'></i> Crear inventario</h4>
		  </div>
		  <div class="modal-body">
			<form class="form-horizontal" method="post" id="GenerarMysql" name="GenerarMysql">			  
			  <div class="form-group">
				<label for="nombre" class="col-sm-3 control-label">Fecha Inicial</label>
				<div class="col-sm-8">
				  <input type="date" class="form-control" id="date1" name="date1" placeholder="Fecha Inicial" required>
				</div>
			  </div>
			  
			  <div class="form-group">
				<label for="nombre" class="col-sm-3 control-label">Fecha Final</label>
				<div class="col-sm-8">
				  <input type="date" class="form-control" id="date2" name="date2" placeholder="Fecha Final" required>
				</div>
			  </div>

			   <div class="form-group">
				<label for="nombre" class="col-sm-3 control-label">Nombre del PDF</label>
				<div class="col-sm-8">
				  <input type="date" class="form-control" id="nombre" name="nombre" placeholder="Nombre del pdf" required>
				</div>
			  </div>
			 
			</div>	

		  <div class="modal-footer">
			<button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
			<button type="submit" class="btn btn-primary" id="guardar_datos">Guardar datos</button>
		  </div>
		  </form>
		</div>
	  </div>
	</div>


	<?php
		}
	?>

