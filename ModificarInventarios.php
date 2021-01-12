<?php
	require_once("conectar.php");
?>
<html>
<meta charset='UTF-8'/>
<head>
<link rel="stylesheet" type="text/css" href="main4.css"> 
<title> Formulario  </title>
<script language="JavaScript">
function validacion(formulario) {
  var listanumeros = "0123456789";
var codigo=formulario.CodigoInventario.value;
 
  if(codigo.length<1) {
  
  alert('Dato Obligatorio');
  return false;
  }
  cont = 0;
  for(i=0;i<codigo.length;i++)
  {
    ch = codigo.charAt(i);
    for (j=0;j<listanumeros.length; j++)
    {
      if(ch ==listanumeros.charAt(j))
       {
         cont = cont + 1;
         j = listanumeros.length;
         break;
       }       
    }  
  }
  if(cont < codigo.length)
  {
    alert("El campo codigo tiene caracteres NO validos");
    formulario.codigo.focus();
    return (false);   
  }  

var nombre=formulario.NombreProducto.value;
var listabecedario = " ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyzáéíóú1234567890";
  if(nombre.length<1) {  
  alert('Dato Obligatorio');
  return false;
  }

  // validar caracteres NO reconocidos nombres docente
    cont = 0;
        for(n=0;n<nombre.length;n++)
 {
      ch = nombre.charAt(n);
        for (m=0;m<listabecedario.length; m++)

 {
          if(ch ==listabecedario.charAt(m))

    {

              cont = cont + 1;
    m = listabecedario.length;
    break;
      
      }     
 }  
 }

 if(cont < nombre.length)
  
  {
    alert("El campo nombre tiene caracteres no reconocidos");
    formulario.nombre.focus();
    return (false);   
}

var valor=formulario.ValorProducto.value;
 if(valor.length<1) {
  
  alert('Dato Obligatorio');
  return false;
  }
  cont = 0;
  for(i=0;i<valor.length;i++)
  {
    ch = valor.charAt(i);
    for (j=0;j<valor.length; j++)
    {
      if(ch ==valor.charAt(j))
       {
         cont = cont + 1;
         j = listanumeros.length;
         break;
       }       
    }  
  }
  if(cont < valor.length)
  {
    alert("El valor tiene caracteres NO validos");
    formulario.valor.focus();
    return (false);   
  }  
  


   
} 
</script>
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
 	<h1 class="logo">Modificar<span> <br>Producto</span></h1>	
<form method="POST" action="modificarInventarios.php">
<table class="mod">
 	
 		<td><input type="text" name="CodigoInventario"></td>
		<td><input type="submit" value="Buscar Producto por Codigo"></td>

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
    $consulta1 = "SELECT * FROM inventarios where CodigoInventario=".$_POST["CodigoInventario"];
    $columna1 = mysqli_query($conexion, $consulta1 ) or die ( "Error en consulta base de datos");
	// Bucle while que recorre cada registro y muestra cada campo en la tabla.
	echo "<form name='f1' id='f1' method='post' action ='modificarInventarios2.php' OnSubmit='return validacion(this);'>";
	while ($filas = mysqli_fetch_array( $columna1))
	{
		echo "<table border='1'class='h'>";
		echo "<tr>";
		echo "<td>Codigo Producto </td>";
		echo "<td><input name ='CodigoInventario' type ='text' readonly value='".$filas[0]."'></td>";
		echo "</tr>";
		echo "<tr>";
		echo "<td>Nombre Producto</td>";
		echo "<td><input name ='NombreProducto' type ='text' value='".$filas[1]."'></td>";
		echo "</tr>";
		echo "<tr>";
		echo "<td>Valor Producto</td>";
		echo "<td><input name ='ValorProducto' type ='text' value='".$filas[2]."'></td>";
		echo "</tr>";	
	}	
	   echo "</table>";
	   echo "<button type ='submit' value ='Actualizar'>Actualizar</button>";
	   echo "</form>";	    
	// cerrar conexión de base de datos
	mysqli_close( $conexion );
}
?>
</body>
