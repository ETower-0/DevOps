
<?php
   require_once("conectar.php");
   $CodigoInventario =$_POST["CodigoInventario"];
   $NombreProducto =$_POST["NombreProducto"];
   $ValorProducto=$_POST["ValorProducto"];
	$sql="update Inventarios set NombreProducto='".$NombreProducto."',ValorProducto=".$ValorProducto."
	 where CodigoInventario =".$CodigoInventario;
	//echo $sql;
	echo "<br>";
	$result=mysqli_query($conexion,$sql);
	if($result)
  	echo "<script type='text/javascript'>
    alert('Producto Modificado con ÉXITO');
    window.location.href='modificarClientes.php';
    </script>";
  	else 
		echo "NO se agregaron datos";
	mysqli_close( $conexion );
?>