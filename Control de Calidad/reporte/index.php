<?php
include "Conexion.php";
$con=@mysqli_connect("127.0.0.1", "root", "", "esmeraldadb");
$query=mysqli_query($con,"select (SELECT products.nombre_producto from products where products.id_producto = detalle_factura.id_producto) AS Producto, SUM(cantidad)  AS Cantidad, precio_venta AS Precio, fecha_factura AS Fecha, SUM(total_venta) AS Total FROM detalle_factura INNER JOIN facturas ON detalle_factura.numero_factura = facturas.numero_factura GROUP BY detalle_factura.id_producto, date(facturas.fecha_factura)");
$clientes = array();
$n=0;

while($r=$query->fetch_object()){ $clientes[]=$r; $n++; 
}

?>
<!DOCTYPE html>
<html>
<head>

<title>Generar PDF con el reporte</title>
<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
<script type="text/javascript" src="bootstrap/js/jquery.min.js"></script>
<script src="bootstrap/js/bootstrap.min.js"></script>
<script src="jspdf/dist/jspdf.min.js"></script>
<script src="js/jspdf.plugin.autotable.min.js"></script>
<link rel=icon href='../img/avatar_2x.png' sizes="32x32" type="image/png">

<meta charset="utf-8">
</head>
<body style="background-image: url('../img/2.jpg');">
    <br>
    <div class="container" style="text-align: center;">
      <div class="panel panel-default">

      <div class="panel-body">

      <div class="row">
          <div class="col-md-12">

            <h1>Crear un PDF con una Tabla</h1>
          </div>
          <div class="col-md-12">
            <p><strong>Continuar con la descarga...</strong></p>
            <button id="GenerarMysql" class="btn btn-default">Descargar Reporte</button>
            <br>
          </div>

          <div class="col-md-4"></div>

      </div>

      </div>

      </div><!-- /.Cierra-default-panel -->
    </div><!-- /.container-fluid -->



<script>
$("#GenerarMysql").click(function(){
  var pdf = new jsPDF('l', 'mm', [337, 210]);
  pdf.text(20,20,"Reporte totales por fecha y por Producto");


 
 var columns = ["PRODUCTO", "CANTIDAD", "PRECIO", "FECHA", "TOTAL"];
  var data = [
<?php foreach($clientes as $c):
    

  ?>



 ["<?php echo $c->Producto; ?>", "<?php echo $c->Cantidad; ?>", "<?php echo $c->Precio; ?>", "<?php echo $c->Fecha; ?>", "<?php echo $c->Total; ?>",],

<?php endforeach; ?>  
  ];

  pdf.autoTable(columns,data,
    { margin:{ top: 40,  }}
  );



  pdf.save('MiTabla.pdf');

});
</script>

</body>
</html>