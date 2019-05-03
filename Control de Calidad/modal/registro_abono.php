	<?php
		if (isset($con))
		{
	?>
	<!-- Modal -->
	<div class="modal fade" id="nuevoAbono" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
	  <div class="modal-dialog" role="document">
		<div class="modal-content">
		  <div class="modal-header">
			<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
			<h4 class="modal-title" id="myModalLabel"><i class='glyphicon glyphicon-edit'></i> Agregar nuevo Abono</h4>
		  </div>
		  <div class="modal-body">
			<form class="form-horizontal" method="post" id="guardar_abono" name="guardar_abono">
			<div id="resultados_ajax_abono"></div>
			  <div class="form-group">
				<label for="codigo" class="col-sm-3 control-label">Fecha</label>
				<div class="col-sm-8">
				  <input type="date" class="form-control" id="fecha" name="fecha" placeholder="Fecha de Abono" required>
				</div>
			  </div>
			  			  
			  <div class="form-group">
				<label for="saldo" class="col-sm-3 control-label">Saldo</label>
				<div class="col-sm-8">
				  <input type="text" class="form-control" id="saldo" name="saldo" placeholder="Saldo" required pattern="^[0-9]{1,5}(\.[0-9]{0,2})?$" title="Ingresa sólo números con 0 ó 2 decimales" maxlength="8">
				</div>
			  </div>
			  <div class="form-group">
				<label for="numero_factura" class="col-sm-3 control-label">Saldo</label>
				<div class="col-sm-8">
				  <input type="number" class="form-control" id="numero_factura" name="numero_factura" placeholder="Numero de Factura" required>
				  
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