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
var cedula=formulario.cedula.value;
 
  if(cedula.length<1) {
  
  alert('Dato Obligatorio');
  return false;
  }
  cont = 0;
  for(i=0;i<cedula.length;i++)
  {
    ch = cedula.charAt(i);
    for (j=0;j<listanumeros.length; j++)
    {
      if(ch ==cedula.charAt(j))
       {
         cont = cont + 1;
         j = listanumeros.length;
         break;
       }       
    }  
  }
  if(cont < cedula.length)
  {
    alert("El campo Cedula tiene caracteres NO validos");
    formulario.cedula.focus();
    return (false);   
  }
var codigo=formulario.codigo.value;  
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
      if(ch ==codigo.charAt(j))
       {
         cont = cont + 1;
         j = listanumeros.length;
         break;
       }       
    }  
  }
  if(cont < codigo.length)
  {
    alert("El campo Código tiene caracteres NO validos");
    formulario.codigo.focus();
    return (false);   
  }  

var nombre=formulario.nombre.value;
var listabecedario = " ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz";
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

var razonsocial=formulario.razonsocial.value;

  if(razonsocial.length<1) {
  
  alert('Dato Obligatorio');
  return false;
  
  }
  
// validar caracteres NO reconocidos apellidos docente
    cont = 0;
        for(n=0;n<razonsocial.length;n++)
 {
      ch = razonsocial.charAt(n);
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

 if(cont < razonsocial.length)
  
  {
    alert("El campo razon social tiene caracteres no reconocidos");
    formulario.razonsocial.focus();
    return (false);   
}

 var email=formulario.email.value;

  if(email.length<1) {
  
  alert('Dato Obligatorio');
  return false;
  }
    var TipoCliente=formulario.TipoCliente.value;
 if(TipoCliente.length<1) {
  
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
<form method="POST" action="modificarClientes.php">
<table class="mod">
 	
 		<td><input type="text" name="CodigoCliente"></td>
		<td><input type="submit" value="Buscar Cliente por Codigo"></td>

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
    if(isset($_POST['CodigoCliente'])) { 
    $consulta1 = "SELECT * FROM Clientes where CodigoCliente=".$_POST["CodigoCliente"];
    $columna1 = mysqli_query($conexion, $consulta1 ) or die ( "Error en consulta base de datos");
	// Bucle while que recorre cada registro y muestra cada campo en la tabla.
	echo "<form name='f1' id='f1' method='post' action ='modificarClientes2.php' OnSubmit='return validacion(this);'>";
	while ($filas = mysqli_fetch_array( $columna1))
	{
		echo "<table border='1'class='h'>";
		echo "<tr>";
		echo "<td>Codigo Cliente </td>";
		echo "<td><input name ='CodigoCliente' type ='text' readonly value='".$filas[0]."'></td>";
		echo "</tr>";
		echo "<tr>";
		echo "<td>NIT/Cedula Cliente</td>";
		echo "<td><input name ='NIT_Cedula' type ='text' value='".$filas[1]."'></td>";
		echo "</tr>";
		echo "<tr>";
		echo "<td>Codigo Vendedor</td>";
		echo "<td><input name ='CodigoVendedor' type ='text' value='".$filas[2]."'></td>";
		echo "</tr>";
		echo "<tr>";
		echo "<td>Nombre Cliente</td>";
		echo "<td><input name ='NombreCliente' type ='text' value='".$filas[3]."'></td>";
		echo "</tr>";	
		echo "<tr>";	
		echo "<td>Razon Social</td>";
		echo "<td><input name ='RazonSocial' type ='text' value='".$filas[4]."'></td>";
		echo "</tr>";	
		echo "<tr>";	
		echo "<td>Email Cliente</td>";
		echo "<td><input name ='Email' type ='text' value='".$filas[5]."'>";
		echo "</tr>";	
		echo "<tr>";	
		echo "<td>Tipo Cliente</td>"; 
		echo "<td><input name ='TipoCliente' type ='text' value='".$filas[6]."'></td>";
		echo "</tr>";		
	}	
	   echo "</table>";
	   echo "<button type ='submit' value ='Actualizar'>Actualizar</button>";
	   echo "</form>";	   
	   
	   
	// cerrar conexión de base de datos
	mysqli_close( $conexion );
}
?>

