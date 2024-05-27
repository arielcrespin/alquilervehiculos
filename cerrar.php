<?php
	session_start();
	unset($_SESSION["usuario"],$_SESSION["contrasena"]);
	session_destroy();
	header("Location: href=index.html");
?>