<?php
include('is_logged.php');//Archivo verifica que el usario que intenta acceder a la URL esta logueado
	/*Inicia validacion del lado del servidor*/
	$id_factura= $_SESSION['id_factura'];
	$numero_factura= $_SESSION['numero_factura'];

	if (empty($_POST['nombre'])) {
           $errors[] = "Nombre vacío";
        } else if (empty($_POST['hora'])){
			$errors[] = "Hora vacía";
		}
		
		/* Connect To Database*/
		require_once ("../config/db.php");//Contiene las variables de configuracion para conectar a la base de datos
		require_once ("../config/conexion.php");//Contiene funcion que conecta a la base de datos
		// escaping, additionally removing everything that could be (html/javascript-) code
		$nombre=mysqli_real_escape_string($con,(strip_tags($_POST["nombre"],ENT_QUOTES)));
		$hora=mysqli_real_escape_string($con,(strip_tags($_POST["hora"],ENT_QUOTES)));

		$sql="INSERT INTO produccion (prod_encargado, prod_fecha_hora, num_factura) VALUES ('$nombre','$hora','$id_factura')";
		
		$query_new_insert = mysqli_query($con,$sql);
		$sql_2="UPDATE facturas set estado_factura = 4 where numero_factura = ".$numero_factura;
		
		
		$query_new_insert_2 = mysqli_query($con,$sql_2);
			if ($query_new_insert){
				$messages[] = "Producto ha sido ingresado satisfactoriamente.";
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