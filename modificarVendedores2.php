
<?php
   require_once("conectar.php");
   $Codigo =$_POST["Codigo"];
   $Cedula =$_POST["Cedula"];
   $NombreVendedor=$_POST["NombreVendedor"];
   $ApellidosVendedor = $_POST["ApellidosVendedor"];
   $EmailVendedor = $_POST["EmailVendedor"];
	$sql="update Vendedores set Cedula=".$Cedula.",NombreVendedor=
	'".$NombreVendedor."',ApellidosVendedor='".$ApellidosVendedor."',EmailVendedor='".$EmailVendedor."' where Codigo =".$Codigo;
	//echo $sql;
	echo "<br>";
	$result=mysqli_query($conexion,$sql);
	if($result)
  	echo "<script type='text/javascript'>
    alert('Vendedor Modificado con ÉXITO');
    window.location.href='modificarClientes.php';
    </script>";
  	else 
		echo "NO se agregaron datos";
	mysqli_close( $conexion );
?>
