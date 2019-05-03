	<?php
		if (isset($con))
		{
			/* Connect To Database*/
	require_once ("config/db.php");//Contiene las variables de configuracion para conectar a la base de datos
	require_once ("config/conexion.php");//Contiene funcion que conecta a la base de datos
	?>
	<!-- Modal -->
	<div class="modal fade" id="nuevaInfo" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
	  <div class="modal-dialog" role="document">
		<div class="modal-content">
		  <div class="modal-header">
			<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
			<h4 class="modal-title" id="myModalLabel"><i class='glyphicon glyphicon-edit'></i> Información de Entrega #<?php $query=mysqli_query($con, "select * from facturas "); $count=mysqli_num_rows($query) ; echo $count?></h4>
		  </div>
		  <div class="modal-body">
			<form class="form-horizontal" method="post" id="guardar_info" action="registra.php" name="guardar_info">
			<div id="resultados_ajax"></div>
			  <div class="form-group">
				<label for="fecha" class="col-sm-3 control-label">Fecha</label>
				<div class="col-sm-8">
				  <input type="date" class="form-control" id="fecha" name="fecha" required>
				</div>
			  </div>
			  <div class="form-group">
				<label for="text" class="col-sm-3 control-label">Hora</label>
				<div class="col-sm-8">
				  <input type="time" class="form-control" id="hora" name="hora" >
				</div>
			  </div>
			  
			  <div class="form-group">
				<label for="email" class="col-sm-3 control-label">Lugar de entrega</label>
				<div class="col-sm-8">
					<input type="text" class="form-control" id="lugar" name="lugar" >
				  
				</div>
			  </div>
			  
			  <div class="form-group">
				<label for="number" class="col-sm-3 control-label">Numero de Factura</label>
				<div class="col-sm-8">
					<input type="text" class="form-control" id="numero_factura" name="numero_factura" value="<?php echo $count ?>" >
				  
				</div>
			  </div>

			  <div class="form-group">
				<label for="otro" class="col-sm-3 control-label">Otro</label>
				<div class="col-sm-8">
					<textarea class="form-control" id="otro" name="otro"   maxlength="255" ></textarea>
				  
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