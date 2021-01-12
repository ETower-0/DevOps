<?php
require_once("menu.php");
require_once("conectar.php");
	echo "<br>";
	echo "<br>";
	echo "<br>";
	echo "<table border='1' >";
	echo "<tr>";
	echo "<th>Codigo  </th>";
	echo "<th>Cedula </th>";
	echo "<th>Nombre  </th>";
	echo "<th>Apellidos  </th>";
	echo "<th>Email </th>";
	echo "</tr>";	
		$consulta1 = "SELECT * FROM Vendedores";		
	    $columna1 = mysqli_query( $conexion, $consulta1 ) or die ( "Error en consulta base de datos"); 
	    while($filas = mysqli_fetch_array($columna1))
	      {
          	echo "<tr>";
			echo "<td align='center' >" . $filas[0]. "</td><td>" .$filas[1]."
			</td><td align='center'>". $filas[2]. "</td><td align='center'>". $filas[3]. "</td><td align='center'>". $filas[4]. "</td>";
			echo "</tr>";
		  }
	echo "<tr> <td> <a href='index.html'>Regresar </a></td></tr>";  
	echo "</table>"; // Fin de la tabla
	echo "<br>";
	// cerrar conexión de base de datos
	mysqli_close( $conexion );     
?>