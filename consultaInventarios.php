<?php
require_once("menu.php");
require_once("conectar.php");
	echo "<br>";
	echo "<br>";
	echo "<br>";
	echo "<table border='1'>";
	echo "<tr>";
	echo "<th>Codigo Producto  </th>";
	echo "<th>Nombre/Detalle Producto</th>";
	echo "<th>Valor  Producto</th>";
	echo "</tr>";	
		$consulta1 = "SELECT * FROM Inventarios";		
	    $columna1 = mysqli_query( $conexion, $consulta1 ) or die ( "Error en consulta base de datos"); 
	    while($filas = mysqli_fetch_array($columna1))
	      {
          	echo "<tr>";
			echo "<td align='center'>" . $filas[0]. "</td><td align='center'>" 
			.$filas[1]."</td><td align='center'>". $filas[2]. "</td>";
			echo "</tr>";
		  }	
	echo "<tr> <td> <a href='index.html'>Regresar </a></td></tr>";  	  
	echo "</table>"; // Fin de la tabla
	echo "<br>";
	// cerrar conexión de base de datos
	mysqli_close( $conexion );	
?>