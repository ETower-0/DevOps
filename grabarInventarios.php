<?php
	require_once("conectar.php");
   $CodigoInventario =$_POST["CodigoInventario"];
   $NombreProducto =$_POST["NombreProducto"];
   $ValorProducto=$_POST["ValorProducto"];	
		$sql="insert into Inventarios(CodigoInventario,NombreProducto, ValorProducto) 
		values(".$CodigoInventario.",'".$NombreProducto."',".$ValorProducto.")";
   $result=mysqli_query($conexion,$sql);
   if($result)
  	echo '<script type="text/javascript">
    alert("Producto Creado con ÉXITO");
    window.location.href="agregarInventarios.php";
    </script>';
  	else 
		echo "NO se agregaron datos";
	mysqli_close( $conexion );
     echo "<a href ='index.html'> Regresar </a>";
?>
