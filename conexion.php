<?php

$Servidor = "localhost"; 
$usuario = "root"; 
$contra = ""; 
$bd = "saberes"; 

$conexion = new mysqli($Servidor, $usuario, $contra, $bd);

if ($conexion -> connect_error) {
    echo "error de conexion";
}

$p1 = $_POST['p1'];
$p2 = $_POST['p2'];
$p3 = $_POST['p3'];
$p4 = $_POST['p4'];
$p5 = $_POST['p5'];
$p6 = $_POST['p6'];
$p7 = $_POST['p7'];
$p8 = $_POST['p8'];
$p9 = $_POST['p9'];
$p10 = $_POST['p10'];
$p11 = $_POST['p11'];
$p12 = $_POST['p12'];
$p13 = $_POST['p13'];
$p14 = $_POST['p14'];
$p15 = $_POST['p15'];
$p16 = $_POST['p16'];
$p17 = $_POST['p17'];
$p18 = $_POST['p18'];
$p19 = $_POST['p19'];
$p20 = $_POST['p20'];
$p21 = $_POST['p21'];

$sql = "INSERT INTO tiposap (p1, p2, p3, p4, p5, p6, p7, p8, p9, p10, p11, p12, p13, p14, p15, p16, p17, p18, p19, p20, p21) VALUES ('$p1', '$p2', '$p3', '$p4', '$p5', '$p6', '$p7', '$p8', '$p9', '$p10', '$p11', '$p12', '$p13', '$p14', '$p15', '$p16', '$p17', '$p18', '$p19', '$p20', '$p21')";

if ($conexion->query($sql) === TRUE) {
    echo "Respuestas guardadas exitosamente.";
} else {
    echo "Error al guardar respuestas: " . $conexion->error;
}

$conexion->close();
?>
