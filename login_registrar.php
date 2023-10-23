<?php

require 'conexion.php';

$user = $mysqli->real_escape_string($_POST['usuario']);
$pass = $mysqli->real_escape_string($_POST['pass']);

if (isset($_POST["btnregistrar"])) {

	$sql = "INSERT INTO Admin (Usuario, Contraseña) VALUES ('$user', '$pass')";

	$resultado = $mysqli->query($sql);

	if ($resultado > 0) {
		require 'cabeceraAgregado.php';
	} else {
		echo 'ERROR AL AGREGAR REGISTRO';
	}
}

if (isset($_POST["btningresar"])) {

	$sql = "SELECT * FROM Admin WHERE Usuario = '$user' AND Contraseña = '$pass'";

	$resultado = $mysqli->query($sql);
	$len = $resultado->num_rows;

	if ($len > 0) {
		echo "<script> alert('Bienvenido $user'); window.location='principal.php' </script>";
	} else {
		echo "<script> alert('Usuario y/o contraseña incorrecta'); window.location='login.php' </script>";
	}
}