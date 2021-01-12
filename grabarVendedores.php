<?php
	require_once("conectar.php");
	 $Codigo =$_POST["Codigo"];
	 $Cedula =$_POST["Cedula"];
	 $NombreVendedor=$_POST["NombreVendedor"];	
	 $ApellidosVendedor=$_POST["ApellidosVendedor"];
	 $EmailVendedor=$_POST["EmailVendedor"];
		$sql="insert into Vendedores(Codigo,Cedula, NombreVendedor,ApellidosVendedor,EmailVendedor)values
		(".$Codigo.",".$Cedula.",'".$NombreVendedor."','".$ApellidosVendedor."','".$EmailVendedor."')";
   $result=mysqli_query($conexion,$sql);
   if($result)
  	echo '<script type="text/javascript">
    alert("Vendedor Guardado con ÉXITO");
    window.location.href="agregarVendedores.php";
    </script>';
  	else 
		echo "NO se agregaron datos";
	mysqli_close( $conexion );
     
?>
