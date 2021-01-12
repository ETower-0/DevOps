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
var cedula=formulario.NoFactura.value;
 
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
    alert("El Numero de Factura tiene caracteres NO validos");
    formulario.cedula.focus();
    return (false);   
  }  

var listabecedario = " ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz";
 var razonsocial=formulario.CodigoCliente.value;

  if(razonsocial.length<1) {
  
  alert('Dato Obligatorio');
  return false;
  
  }
  
// validar caracteres NO reconocidos apellidos docente
    cont = 0;
        for(n=0;n<razonsocial.length;n++)
 {
      ch = razonsocial.charAt(n);
        for (m=0;m<listanumeros.length; m++)

 {
          if(ch ==listanumeros.charAt(m))

    {

              cont = cont + 1;
    m = listanumeros.length;
    break;
      
      }     
 }  
 }

 if(cont < razonsocial.length)
  
  {
    alert("El campo Codigo tiene caracteres no reconocidos");
    formulario.razonsocial.focus();
    return (false);   
}

var razonsocial=formulario.CodigoVendedor.value;

  if(razonsocial.length<1) {
  
  alert('Dato Obligatorio');
  return false;
  
  }
  
// validar caracteres NO reconocidos apellidos docente
    cont = 0;
        for(n=0;n<razonsocial.length;n++)
 {
      ch = razonsocial.charAt(n);
        for (m=0;m<listanumeros.length; m++)

 {
          if(ch ==listanumeros.charAt(m))

    {

              cont = cont + 1;
    m = listanumeros.length;
    break;
      
      }     
 }  
 }
 

 if(cont < razonsocial.length)
  
  {
    alert("El campo Codigo tiene caracteres no reconocidos");
    formulario.razonsocial.focus();
    return (false);   
}

var razonsocial=formulario.CodigoProducto.value;

  if(razonsocial.length<1) {
  
  alert('Dato Obligatorio');
  return false;
  
  }
  
// validar caracteres NO reconocidos apellidos docente
    cont = 0;
        for(n=0;n<razonsocial.length;n++)
 {
      ch = razonsocial.charAt(n);
        for (m=0;m<listanumeros.length; m++)

 {
          if(ch ==listanumeros.charAt(m))

    {

              cont = cont + 1;
    m = listanumeros.length;
    break;
      
      }     
 }  
 }
 

 if(cont < razonsocial.length)
  
  {
    alert("El campo Codigo tiene caracteres no reconocidos");
    formulario.razonsocial.focus();
    return (false);   
}

 var email=formulario.Cantidad.value;

  if(email.length<1) {
  
  alert('Dato Obligatorio');
  return false;
  }
    var tipocliente=formulario.Fecha.value;
 if(tipocliente.length<1) {
  
  alert('Dato Obligatorio');
  return false;
  }
 
  var total=formulario.TotalFactura.value;

 
} 
	function e(){
		var cant = document.getElementById("Cantidad").value;

		var subf = document.getElementById("ValorUnitario").value;
		total = cant*subf;
		document.getElementById("TotalFactura").innerHTML = total;
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
<table >
<form name="f1" id="f1" method="post" action="grabarFacturas.php" OnSubmit="return validacion(this);">
 
 <td><h1>Crear Factura</h1> </td>
 <tr>
 <td>No. Factura:</td> <td> <input type="text" name="NoFactura" id="NoFactura"></td>
 <br>
</tr>
 <td>Código Cliente: </td> <td><input type="number" name="CodigoCliente" id="CodigoCliente"></td>
 <br>
 </tr>
 <tr>
 <td>Código Vendedor: </td> <td><input type="number" name="CodigoVendedor" id="CodigoVendedor"></td>
 </tr>
 <tr>
 <td>Fecha Factura:</td> <td> <input type="date" name="Fecha" id="Fecha"></td>
 <br>
</tr>
<tr>
<td>Codigo Producto:<br></td><td> <input type="number" name="CodigoProducto"  > <br>
</td>
</tr>
<tr>
<td>Cantidad:<br></td><td> <input type="number" name="Cantidad" id="Cantidad" onchange="e()"  > <br>
</td>
</tr>
<tr>
<td>Valor Unitario:<br></td><td> <input type="number" name="ValorUnitario" id="ValorUnitario" onchange="e()"   > <br>
</td>
</tr>
<tr>
<td>Total Factura:<br></td><td> <output size="20" name="TotalFactura" id="TotalFactura"></td>
</tr>
<tr>
<td>    
<button type="submit" value="Grabar Factura">Grabar Factura
</button>
</table>
</form>



</h3>

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

