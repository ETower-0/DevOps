<?php
	require_once("conectar.php");
?>

<meta charset='UTF-8'/>
<head>
<link rel="stylesheet" type="text/css" href="main4.css"> 
   <div id="header">
		<nav> <!-- Aqui estamos iniciando la nueva etiqueta nav -->
		<ul class="menu">
		<li><a href="index.html">Pagina Principal</a></li>
		<li><a href="">Vendedores</a>
		<ul>
			 <li><a href="agregarVendedores.php">Agregar</a></li>
			 <li><a href="consultaVendedores.php">Consultar</a></li>
			 <li><a href="modificarVendedores.php">Modificar</a></li>
		     <li><a href="eliminarVendedores.php">Eliminar </a></li>

		</ul>
		</li>
		<li><a href="">Clientes</a>
		<ul>
			 <li><a href="agregarClientes.php">Agregar</a></li>
			 <li><a href="consultaClientes.php">Consultar</a></li>
			 <li><a href="modificarClientes.php">Modificar</a></li>
		     <li><a href="eliminarClientes.php">Eliminar </a></li>

		</ul>
		</li>
		<li><a href="">Inventarios</a>
		<ul>
			 <li><a href="agregarInventarios.php">Agregar</a></li>
			 <li><a href="consultaInventarios.php">Consultar</a></li>
			 <li><a href="ModificarInventarios.php">Modificar</a></li>
		     <li><a href="eliminarInventarios.php">Eliminar </a></li>

		</ul>
		</li>
				<li><a href="">Ventas</a>
		<ul>
		<li><a href="agregarFacturas.php">Crear Factura</a></li>
		<li><a href="consultaFactura.php">Consulta por Cliente</a></li>
		<li><a href="consultaFacturaNo.php">Consulta por No.</a></li>
		</ul>
		</li>
		
		

		</nav><!-- Aqui estamos cerrando la nueva etiqueta nav -->
	</div>
</head>
 <body>
 	<h1 class="logo">Eliminar<span> <br>Producto</span></h1>	
<form method="POST" action="eliminarInventarios.php">
<table class="mod">
 	
 		<td><input type="text" name="CodigoInventario"></td>
		<td><input type="submit" value="Eliminar Producto por Codigo"></td>

</table>
</form>
<footer>
			<section id="acerca-de">
				<article>
				<h3>---------FERRETERIA VIMAFER--------</h3>
					<p>Productos de ferreteria al mejor precio y de la mejor calidad para lo que necesite
						Vendemos toda clase de elementos de ferreteria de las mejores marcas, al 
						mejor precio y con la mejor atención.				
			
			 <br>*VISITANOS:<br>Estamos en Paloquemado, Calle 19 No. 26-70<br>Teléfonos: 2223235       				
				</article>
			</section>

			<section id="redes-s">
				<div class="email"><a href=""></a></div>
				<div class="twitter"><a href=""></a></div>
				<div class="youtube"><a href=""></a></div>
				<div class="facebook"><a href=""></a></div>
			</section>

		</footer>
</body>

</html>
<?php
    if(isset($_POST['CodigoInventario'])) {
    $consulta1 = "SELECT * FROM Facturas where CodigoInventario=".$_POST["CodigoInventario"];
    $resultado = mysqli_query($conexion, $consulta1);
    $row_cnt = mysqli_num_rows($resultado);
    if($row_cnt >= 1){
			echo "<script type='text/javascript'>
    alert('No se puede Eliminar el Registro');
    window.location.href='eliminarInventarios.php';
    </script>";
      }
ELSE 
    { 
    $consulta2 = "DELETE FROM Inventarios where CodigoInventario=".$_POST["CodigoInventario"];
   // echo $consulta1;
    $result = mysqli_query($conexion, $consulta2 ) or die ( "Error en consulta base de datos");
	if($result)
  	echo "<script type='text/javascript'>
    alert('Producto eliminado con Éxito');
    window.location.href='eliminarInventarios.php';
    </script>";
  	else 
		echo "<script type='text/javascript'>
    alert('No se elimino el Registro');
    window.location.href='eliminarInventarios.php';
    </script>";
	mysqli_close( $conexion );

   
}
}
?>
</body>
