<?php
require_once("conectar.php");
?>
<html>
<head>
<link rel="stylesheet" type="text/css" href="main1.css"> 
<title> Formulario Vendedor </title>
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
<table>
<form name="f1" id="f1" method="post" action="grabarVendedores.php" OnSubmit="return validacion(this);">
 	
 <td><h1>Captura  Vendedor</h1> <br></td>
 <tr>
 <td>Codigo Vendedor:</td> <td><input type="text" name="Codigo" id="Codigo"></td>
 <br>
 </tr>
 <tr>
 <td>Cedula Vendedor:</td> <td><input type="text" name="Cedula" id="Cedula"></td>
 <br>
 </tr>
 <tr>
 <td>Nombre Vendedor: </td> <td><input type="text" name="NombreVendedor" id="NombreVendedor"></td>
 <br>
 </tr>
 <tr>
 <td>Apellidos Vendedor: </td> <td><input type="text" name="ApellidosVendedor" id="ApellidosVendedor"></td>
 </tr>
 <tr>
 <td>Email Vendedor:</td> <td> <input type="text" name="EmailVendedor" id="EmailVendedor"></td>
 <br>
<br>
</tr>
<tr>
<td><button type="submit" value="Grabar vendedor">Grabar Vendedor
</br> </button>

</tr>
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

