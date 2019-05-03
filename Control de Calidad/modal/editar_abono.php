	<?php
		if (isset($con))
		{
	?>
	<!-- Modal -->
	<div class="modal fade" id="myModal2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
	  <div class="modal-dialog" role="document">
		<div class="modal-content">
		  <div class="modal-header">
			<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
			<h4 class="modal-title" id="myModalLabel"><i class='glyphicon glyphicon-edit'></i> Editar Abono</h4>
		  </div>
		  <div class="modal-body">
			<form class="form-horizontal" method="post" id="editar_abono" name="editar_abono">
			<div id="resultados_ajax2"></div>
			  <div class="form-group">
				<label for="mod_fecha" class="col-sm-3 control-label">Fecha</label>
				<div class="col-sm-8">
				  <input type="date" class="form-control" id="mod_fecha" name="mod_fecha" required>
					<input type="hidden" name="mod_id" id="mod_id">
				</div>
			  </div>
			   <div class="form-group">
				<label for="mod_saldo" class="col-sm-3 control-label">Saldo</label>
				<div class="col-sm-8">
				  <input type="number" class="form-control" id="mod_saldo" name="mod_saldo" required>
				</div>
			  </div>
			  
			  
			  <div class="form-group">
				<label for="mod_numero_factura" class="col-sm-3 control-label">Numero Factura</label>
				<div class="col-sm-8">
				  <input type="text" class="form-control" id="mod_numero_factura" name="mod_numero_factura" placeholder="Numero Factura" required pattern="^[0-9]{1,5}(\.[0-9]{0,2})?$" title="Ingresa sólo números con 0 ó 2 decimales" maxlength="8">
				</div>
			  </div>
			 
			 
			
		  </div>
		  <div class="modal-footer">
			<button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
			<button type="submit" class="btn btn-primary" id="actualizar_datos">Actualizar datos</button>
		  </div>
		  </form>
		</div>
	  </div>
	</div>
	<?php
		}
	?>