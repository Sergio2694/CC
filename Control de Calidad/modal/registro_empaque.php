	<?php
		if (isset($con))
		{
			$query = "SELECT * FROM clientes ORDER BY nombre_cliente";
			$resultado=$con->query($query);
	?>
	<!-- Modal -->
	<div class="modal fade" id="nuevoEmpaque" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
	  <div class="modal-dialog" role="document">
		<div class="modal-content">
		  <div class="modal-header">
			<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
			<h4 class="modal-title" id="myModalLabel"><i class='glyphicon glyphicon-edit'></i> Agregar Inicio de Empaque</h4>
		  </div>
		  <div class="modal-body"> 
			<form class="form-horizontal" method="post" id="guardar_empaque" name="guardar_empaque">
			<div id="resultados_ajax_empaque"></div>  
			  <div class="form-group">
				<label for="nombre" class="col-sm-3 control-label">Trabajador</label>
				<div class="col-sm-8">
				 <select class="form-control" id="nombre" name="nombre" required>
					<?php while($row = $resultado->fetch_assoc()) { ?>
					<option value="<?php echo $row['nombre_cliente']; ?>"><?php echo $row['nombre_cliente']; ?></option>
					<?php } ?>
				  </select>
				</div>
			  </div>
			  
			  <div class="form-group">
				<label for="hora" class="col-sm-3 control-label">Inicio</label>
				<div class="col-sm-8">
				  <input type="text" class="form-control" id="hora" name="hora"  readonly="readonly" value="<?php $hora = new DateTime("now", new DateTimeZone('America/Costa_Rica')); echo $hora->format("Y-m-j H:i:s");?>" required>
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