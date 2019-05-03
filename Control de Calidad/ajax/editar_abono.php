<?php
	include('is_logged.php');//Archivo verifica que el usario que intenta acceder a la URL esta logueado
	/*Inicia validacion del lado del servidor*/
	if (empty($_POST['mod_id'])) {
           $errors[] = "ID vacío";
        }else if (empty($_POST['mod_fecha'])) {
           $errors[] = "fecha vacío";
        } else if (empty($_POST['mod_saldo'])){
			$errors[] = "Saldo vacío";
		} else if (empty($_POST['mod_numero_factura'])){
			$errors[] = "Numero Factura vacío";
		} else if (
			!empty($_POST['mod_id']) &&
			!empty($_POST['mod_fecha']) &&
			!empty($_POST['mod_saldo']) &&
			!empty($_POST['mod_numero_factura'])
		){
		/* Connect To Database*/
		require_once ("../config/db.php");//Contiene las variables de configuracion para conectar a la base de datos
		require_once ("../config/conexion.php");//Contiene funcion que conecta a la base de datos
		// escaping, additionally removing everything that could be (html/javascript-) code
		$ID=intval($_POST['ID_payment']);
		$codigo=mysqli_real_escape_string($con,(strip_tags($_POST["fecha"],ENT_QUOTES)));
		$saldo=intval($_POST['saldo']);
		$numero_factura=intval($_POST['numero_factura']);

		$sql="UPDATE payments SET fecha='".$codigo."', saldo='".$saldo."', numero_factura='".$numero_factura."' WHERE ID_payment='".$ID."'";
		$query_update = mysqli_query($con,$sql);
			if ($query_update){
				$messages[] = "El abono ha sido actualizado satisfactoriamente.";
			} else{
				$errors []= "Lo siento algo ha salido mal intenta nuevamente.".mysqli_error($con);
			}
			 
		
		if (isset($errors)){
			
			?>
			<div class="alert alert-danger" role="alert">
				<button type="button" class="close" data-dismiss="alert">&times;</button>
					<strong>Error!</strong> 
					<?php
						foreach ($errors as $error) {
								echo $error;
							}
						?>
			</div>
			<?php
			}
			if (isset($messages)){
				
				?>
				<div class="alert alert-success" role="alert">
						<button type="button" class="close" data-dismiss="alert">&times;</button>
						<strong>¡Bien hecho!</strong>
						<?php
							foreach ($messages as $message) {
									echo $message;
								}
							?>
				</div>
				<?php
			}

?>