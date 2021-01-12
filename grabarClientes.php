<?php
	require_once("conectar.php");
   $CodigoCliente =$_POST["CodigoCliente"];
   $NIT_Cedula =$_POST["NIT_Cedula"];
   $CodigoVendedor=$_POST["CodigoVendedor"];	
   $NombreCliente = $_POST["NombreCliente"];
   $RazonSocial = $_POST["RazonSocial"];
   $Email = $_POST["Email"];
   $TipoCliente = $_POST["TipoCliente"];
		$sql="insert into Clientes(CodigoCliente,NIT_Cedula, CodigoVendedor, NombreCliente,
		RazonSocial,Email,TipoCliente) values(".$CodigoCliente.",".$NIT_Cedula.",
		".$CodigoVendedor.",'".$NombreCliente."','".$RazonSocial."','".$Email."','".$TipoCliente."')";
   $result=mysqli_query($conexion,$sql);
   if($result)
  	echo "<script type='text/javascript'>
    alert('Cliente Guardado con ÉXITO');
    window.location.href='agregarClientes.php';
    </script>";
  	else 
		echo "NO se agregaron datos";
	mysqli_close( $conexion );
     echo "<a href ='index.html'> Regresar </a>";
?>
