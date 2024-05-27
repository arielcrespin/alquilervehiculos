<?php
	session_start();
	$mysqli=new mysqli("localhost","root","","reino");
	if ($mysqli->connect_errno) {
		echo "Falló la conexión a MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
	}
	if (!($sentencia = $mysqli->prepare("select usuario from usuarios where usuario=? and contrasena=?"))) {
		echo "Falló la preparación: (" . $mysqli->errno . ") " . $mysqli->error;
	}
	$usuario="";
	$contrasena="";
	$telefono="";
	$usuariodecodificado=urldecode($_POST["usuario"]);
	$contrasenadecodificada=urldecode($_POST["contrasena"]);
	$sentencia->bind_param("ss",$usuariodecodificado,$contrasenadecodificada);
	$sentencia->execute();
	$sentencia->bind_result($usuario);
	if($sentencia->fetch()) {
		$_SESSION["usuario"]=$usuariodecodificado;
		$_SESSION["contrasena"]=$contrasenadecodificada;
		header("Location: sesion.html");
		session_write_close();
	}
	else {
		echo "wrong";
		session_destroy();
	}
?>