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
var Cedula=formulario.Cedula.value;
 
  if(Cedula.length<1) {
  
  alert('Dato Obligatorio');
  return false;
  }
  cont = 0;
  for(i=0;i<Cedula.length;i++)
  {
    ch = Cedula.charAt(i);
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
  if(cont < Cedula.length)
  {
    alert("El campo cedula tiene caracteres NO validos");
    formulario.Cedula.focus();
    return (false);   
  }  
var Codigo=formulario.Codigo.value;  
if(Codigo.length<1) {
  
  alert('Dato Obligatorio');
  return false;
  }
  cont = 0;
  for(i=0;i<Codigo.length;i++)
  {
    ch = Codigo.charAt(i);
    for (j=0;j<listanumeros.length; j++)
    {
      if(ch ==Codigo.charAt(j))
       {
         cont = cont + 1;
         j = listanumeros.length;
         break;
       }       
    }  
  }
  if(cont < Codigo.length)
  {
    alert("El campo Código tiene caracteres NO validos");
    formulario.Codigo.focus();
    return (false);   
  } 
var nombres=formulario.NombreVendedor.value;
var listabecedario = " ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz";
  if(nombres.length<1) {  
  alert('Dato Obligatorio');
  return false;
  }

  // validar caracteres NO reconocidos nombres docente
    cont = 0;
        for(n=0;n<nombres.length;n++)
 {
      ch = nombres.charAt(n);
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

 if(cont < nombres.length)
  
  {
    alert("El campo nombre tiene caracteres no reconocidos");
    formulario.nombres.focus();
    return (false);   
}

var apellidos=formulario.ApellidosVendedor.value;

  if(apellidos.length<1) {
  
  alert('Dato Obligatorio');
  return false;
  
  }
  
// validar caracteres NO reconocidos apellidos docente
    cont = 0;
        for(n=0;n<apellidos.length;n++)
 {
      ch = apellidos.charAt(n);
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

 if(cont < apellidos.length)
  
  {
    alert("El campo apellidos tiene caracteres no reconocidos");
    formulario.apellidos.focus();
    return (false);   
}

 var email=formulario.EmailVendedor.value;

  if(email.length<1) {
  
  alert('Dato Obligatorio');
  return false;
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
 	<h1 class="logo">Modificar<span> <br>Cliente</span></h1>	
<form method="POST" action="modificarVendedores.php">
<table class="mod">
 	
 		<td><input type="text" name="Codigo"></td>
		<td><input type="submit" value="Buscar Vendedor por Codigo"></td>

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
    if(isset($_POST['Codigo'])) { 
    $consulta1 = "SELECT * FROM Vendedores where Codigo=".$_POST["Codigo"];
    $columna1 = mysqli_query($conexion, $consulta1 ) or die ( "Error en consulta base de datos");
	// Bucle while que recorre cada registro y muestra cada campo en la tabla.
	echo "<form name='f1' id='f1' method='post' action ='modificarVendedores2.php' OnSubmit='return validacion(this);'>";
	while ($filas = mysqli_fetch_array( $columna1))
	{
		echo "<table border='1'class='h'>";
		echo "<tr>";
		echo "<td>Codigo Vendedor </td>";
		echo "<td><input name ='Codigo' type ='text' readonly value='".$filas[0]."'></td>";
		echo "</tr>";
		echo "<tr>";
		echo "<td>Cedula Vendedor</td>";
		echo "<td><input name ='Cedula' type ='text' value='".$filas[1]."'></td>";
		echo "</tr>";
		echo "<tr>";
		echo "<td>Nombre Vendedor</td>";
		echo "<td><input name ='NombreVendedor' type ='text' value='".$filas[2]."'></td>";
		echo "</tr>";
		echo "<tr>";
		echo "<td>Apellidos Vendedor</td>";
		echo "<td><input name ='ApellidosVendedor' type ='text' value='".$filas[3]."'></td>";
		echo "</tr>";	
		echo "<tr>";	
		echo "<td>Email Vendedor</td>";
		echo "<td><input name ='EmailVendedor' type ='text' value='".$filas[4]."'></td>";
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
