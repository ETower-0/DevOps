<?php
	require_once("conectar.php");
	$NoFactura =$_POST["NoFactura"];
   $CodigoCliente =$_POST["CodigoCliente"];
   $CodigoVendedor=$_POST["CodigoVendedor"];	
   $Fecha = $_POST["Fecha"];
   $CodigoProducto = $_POST["CodigoProducto"];
   $Cantidad = $_POST["Cantidad"];
   $ValorUnitario = $_POST["ValorUnitario"];
   
   
		$sql="insert into facturas(NoFactura,CodigoCliente, CodigoVendedor, 
		Fecha,CodigoProducto,Cantidad,ValorUnitario) values(".$NoFactura.",".$CodigoCliente.","
		.$CodigoVendedor.",'".$Fecha."',".$CodigoProducto.",
			".$Cantidad.",".$ValorUnitario.")";
   $result=mysqli_query($conexion,$sql);
   if($result)
		echo '<script type="text/javascript">
		alert("Factura Guardada con ÉXITO");
		window.location.href="agregarFacturas.php";
		</script>';
  	else 
		echo '<script type="text/javascript">
		alert("No se Guardo Registro");
		window.location.href="agregarFacturas.php";
		</script>';
	mysqli_close( $conexion );
     
?>
