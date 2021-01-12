<?php
require_once("conectar.php");
?>
<html>
<head>
<link rel="stylesheet" type="text/css" href="main1.css"> 
<title> Formulario Docentes </title>
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
<table>
<form name="f1" id="f1" method="post" action="grabarClientes.php" OnSubmit="return validacion(this);">
 
 <td><h1>Captura  Clientes</h1> </td>
 <tr>
 <td>Codigo Cliente:</td> <td><input type="number" name="CodigoCliente" id="CodigoCliente"></td>
 <br>
 </tr>
 <tr>
 <td>NIT/Cedula Cliente:</td> <td><input type="text" name="NIT_Cedula" id="NIT_Cedula"></td>
 <br>
 </tr>
 <tr>
 <td>Codigo Vendedor:</td> <td><input type="number" name="CodigoVendedor" id="CodigoVendedor"></td>
 <br>
 </tr>
 <tr>
 <td>Nombre Cliente: </td> <td><input type="text" name="NombreCliente" id="NombreCliente"></td>
 <br>
 </tr>
 <tr>
 <td>Razon Social: </td> <td><input type="text" name="RazonSocial" id="RazonSocial"></td>
 </tr>
 <tr>
 <td>Email Cliente:</td> <td> <input type="text" name="Email" id="Email"></td>
 <br>
</tr>
<tr>
<td>Tipo Cliente:<br></td><td> <input type="radio" name="TipoCliente" value="Persona Natural"> Persona Natural<br>
							   <input type="radio"  name="TipoCliente" value="Persona Juridico">  Persona Juridica<br>
							   <input type="radio"  name="TipoCliente" value="Otro">  Otro</td>
</tr>
<tr>
<td><button type="submit" value="Grabar Cliente">Grabar Cliente
</button>
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

