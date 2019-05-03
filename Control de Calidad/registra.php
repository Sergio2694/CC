<html>    

<head>    
<title>Guardamos los datos en la base de datos</title>    
</head>    

<body>    
	<?php    

	// Recibimos por POST los datos procedentes del formulario    

	$fecha = $_POST["fecha"];    
	$hora = $_POST["hora"];    
	$lugar = $_POST["lugar"];
	$numero_factura = $_POST["numero_factura"];
	$otro = $_POST["otro"];


	$con=@mysqli_connect("127.0.0.1", "root", "", "EsmeraldaBD");
    if(!$con){
        die("imposible conectarse: ".mysqli_error($con));
    } 
    if (@mysqli_connect_errno()) {
        die("Conexión falló: ".mysqli_connect_errno()." : ". mysqli_connect_error());
    }

	$query=mysqli_query($con, "select * from information where numero_factura='".$numero_factura."'");
	$count=mysqli_num_rows($query);
		
    if($count== 0){
		$sql="INSERT INTO information (fecha, hora, lugar_entrega, numero_factura, otro ) VALUES ('$fecha','$hora','$lugar','$numero_factura','$otro')";
		$query_new_insert = mysqli_query($con,$sql);
			if ($query_new_insert){
				$messages[] = "Información de entrega ha sido ingresado satisfactoriamente.";
			} else{
				$errors []= "Lo siento algo ha salido mal intenta nuevamente.".mysqli_error($con);
			}
			   
	}else{
		$sql="UPDATE information SET fecha='".$fecha."', hora='".$hora."', lugar_entrega='".$lugar."', numero_factura='".$numero_factura."', otro='".$otro."' WHERE numero_factura='".$numero_factura."'";
		$query_update = mysqli_query($con,$sql);

			if ($query_update){
				$messages[] = "Información de entrega ha sido ingresado satisfactoriamente.";
			} else{
				$errors []= "Lo siento algo ha salido mal intenta nuevamente.".mysqli_error($con);
			}

	}

	require_once("nueva_factura.php");

	// Confirmamos que el registro ha sido insertado con exito    

	?>    
</body>    

</html>   