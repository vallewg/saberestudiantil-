<?php

$Servidor = "localhost"; 
$usuario = "root"; 
$contra = ""; 
$bd = "saberes"; 

$conexion = new mysqli($Servidor, $usuario, $contra, $bd);

if ($conexion -> connect_error) {
    echo "error de conexion";
}

$nomus = $_POST['nomus'];
$cont = $_POST['cont'];

$sql = "INSERT INTO usua (nomus, cont) VALUES ('$nomus', '$cont')";

if ($conexion->query($sql) === TRUE) {
    echo " ";
} else {
    echo "Error al guardar respuestas: " . $conexion->error;
}

$conexion->close();

?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
	<style>
		body{
	margin: 0;
	padding: 0;
	font-family: montserrat;
	background: linear-gradient(150deg, #1976d2, #a569bd);
	height: 100vh;
}
input[type="submit"]{
	width: 100%;
	height: 50px;
	border: 1px solid;
	background: #a569bd;
	border-radius: 25px;
	font-size: 18px;
	color: white;
	cursor: pointer;
	outline: none;
}
	</style>
</head>
<body>
<form action="principal.html">
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>

	<input type="submit" value="Siguiente">
</form>
</body>
</html>