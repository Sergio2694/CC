<?php
	include('is_logged.php');//Archivo verifica que  el usario que intenta acceder a la URL esta logueado
	/*Inicia validacion del lado del servidor*/
	if (empty($_POST['fecha'])) {
           $errors[] = "fecha vacía";
        } else if (!empty($_POST['fecha'])){
		/* Connect To Database*/
		require_once ("../config/db.php");//Contiene las variables de configuracion para conectar a la base de datos
		require_once ("../config/conexion.php");//Contiene funcion que conecta a la base de datos
		// escaping, additionally removing everything that could be (html/javascript-) code


		$fecha=mysqli_real_escape_string($con,(strip_tags($_POST["fecha"],ENT_QUOTES)));
		$hora=mysqli_real_escape_string($con,(strip_tags($_POST["hora"],ENT_QUOTES)));
		$lugar=mysqli_real_escape_string($con,(strip_tags($_POST["lugar"],ENT_QUOTES)));
		$numero_factura=mysqli_real_escape_string($con,(strip_tags($_POST["numero_factura"],ENT_QUOTES)));
		$sql="INSERT INTO information (fecha, hora, lugar_entrega, numero_factura ) VALUES ('$fecha','$hora','$lugar','$numero_factura')";
		$query_new_insert = mysqli_query($con,$sql);
			if ($query_new_insert){
				$messages[] = "Información de entrega ha sido ingresado satisfactoriamente.";
			} else{
				$errors []= "Lo siento algo ha salido mal intenta nuevamente.".mysqli_error($con);
			}
		} else {
			$errors []= "Error desconocido.";
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