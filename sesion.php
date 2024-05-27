<?php
	session_start();
	$conexion=new mysqli("localhost","root","","reino");
	if(!$conexion) {
		echo "Conexión falló.";
		exit -1;
	}
	$sentencia=$conexion->prepare("select usuario,codigo,precio,cantidad from productos where clientes.usuario=? and clientes.contrasena=? and clientes.usuario=productos.usuario");
	$sentencia->bind_param("ss",$_SESSION["usuario"],$_SESSION["contrasena"]);
	$sentencia->execute();
	$usuario="";
	$codigo="";
	$precio="";
	$cantidad="";
	$sentencia->bind_result($usuario,$codigo,$precio,$cantidad);
	$html="<!DOCTYPE html>
			<html lang='es'>
				<head>
					<title>Sesi&oacute;n reino</title>
					<meta charset='utf-8'/>
				</head>
				<body>
					<button type=button onclick='location.href=cerrar.php'>Cerrar sesi&oacute;n</button>
					<script>
						function sumar_restar(operador) {
							let xmlhttp=new XMLHttpRequest();
							xmlhttp.onreadystatechange=function(){
								if(this.readyState==4 && this.status==200) {
									let cantidad=parseInt(document.getElementById('cantidad').innerHTML);
									++cantidad;
									document.getElementById('cantidad').innerHTML=cantidad;
								}
							}
							xmlhttp.open('POST','sumar.php',true);
							xmlhttp.setRequestHeader('Content-Type','application/x-www-form-urlencoded');
							xmlhttp.send(document.getElementById('codigo').innerHTML);
						}
					</script>
					<table>
						<caption>Listado de productos para ".$usuario."</caption>
						<tr>
							<td>Producto</td><td>Cantidad</td><td>Precio por unidad</td><td>Total</td>
						</tr>
						";
						while($sentencia->fetch())
							$html.="<tr><td id=codigo>".$codigo."</td><td>".$precio."</td><td id=cantidad>".$cantidad."</td></tr><button type=button onclick='sumar_restar(\'+\')'>Sumar uno</button><button type=button onclick='sumar_restar(\'-\')'>Quitar uno</button>";
						$html.="
					</table>
				</body>
			</html>";
?>
