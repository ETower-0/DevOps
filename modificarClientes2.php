
<?php
   require_once("conectar.php");
   $CodigoCliente =$_POST["CodigoCliente"];
   $NIT_Cedula =$_POST["NIT_Cedula"];
   $CodigoVendedor=$_POST["CodigoVendedor"];	
   $NombreCliente = $_POST["NombreCliente"];
   $RazonSocial = $_POST["RazonSocial"];
   $Email = $_POST["Email"];
   $TipoCliente = $_POST["TipoCliente"];
	$sql="update clientes set NIT_Cedula=".$NIT_Cedula.",CodigoVendedor=".$CodigoVendedor.",NombreCliente='".$NombreCliente.
	"',RazonSocial='".$RazonSocial."',Email='".$Email."',TipoCliente='".$TipoCliente."' where CodigoCliente =".$CodigoCliente;
	//echo $sql;
	echo "<br>";
	$result=mysqli_query($conexion,$sql);
	if($result)
  	echo "<script type='text/javascript'>
    alert('Cliente Modificado con ÉXITO');
    window.location.href='modificarClientes.php';
    </script>";
  	else 
		echo "NO se agregaron datos";
	mysqli_close( $conexion );
?>

