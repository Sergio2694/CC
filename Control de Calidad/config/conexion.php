<?php
	
	# conectare la base de datos
    $con=@mysqli_connect("127.0.0.1", "root", "", "esmeraldadb");
    if(!$con){
        die("imposible conectarse: ".mysqli_error($con));
    }
    if (@mysqli_connect_errno()) {
        die("Conexión falló: ".mysqli_connect_errno()." : ". mysqli_connect_error());
    }
?>
