<?php
require_once("menu.php");
require_once("conectar.php");
	echo "<br>";
	echo "<br>";
	echo "<br>";
	echo "<table border='1'>";
	echo "<tr>";
	echo "<th>No Factura </th>";
	echo "<th>Codigo Cliente</th>";
	echo "<th>Codigo Vendedor </th>";
	echo "<th>Fecha Factura</th>";
	echo "<th>Codigo Producto</th>";
	echo "<th>Cantidad </th>";
	echo "<th>Valor Unitario</th>";
	echo "<th>Total Factura</th>";
	echo "</tr>";	
		$consulta1 = "SELECT * FROM Facturas";		
	    $columna1 = mysqli_query( $conexion, $consulta1 ) or die ( "Error en consulta base de datos"); 
	    while($filas = mysqli_fetch_array($columna1))
	      {
          	echo "<tr>";
			echo "<td>" . $filas[0]. "</td><td>" .$filas[1]."</td><td>". $filas[2]. 
			"</td><td>" . $filas[3]."</td><td>" .$filas[5]."</td><td>" .$filas[6]."</td><td>" .$filas[7].
			"</td><td>" .$filas[4]."</td>";
			echo "</tr>";
		  }	
	echo "<tr> <td> <a href='index.html'>Regresar </a></td></tr>";  	  
	echo "</table>"; // Fin de la tabla
	echo "<br>";
	// cerrar conexión de base de datos
	mysqli_close( $conexion );
	
?>