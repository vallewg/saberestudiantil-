<?php

$Servidor = "localhost"; 
$usuario = "root"; 
$contra = ""; 
$bd = "saberes"; 

$conexion = new mysqli($Servidor, $usuario, $contra, $bd);

if ($conexion -> connect_error) {
    echo "error de conexion";
}

$salu1 = $_POST['salu1'];
$salu2 = $_POST['salu2'];
$salu3 = $_POST['salu3'];
$salu4 = $_POST['salu4'];
$salu5 = $_POST['salu5'];
$inge6 = $_POST['inge6'];
$inge7 = $_POST['inge7'];
$inge8 = $_POST['inge8'];
$inge9 = $_POST['inge9'];
$inge10 = $_POST['inge10'];
$arte11 = $_POST['arte11'];
$arte12 = $_POST['arte12'];
$arte13 = $_POST['arte13'];
$arte14 = $_POST['arte14'];
$arte15 = $_POST['arte15'];
$neec16 = $_POST['neec16'];
$neec17 = $_POST['neec17'];
$neec18 = $_POST['neec18'];
$neec19 = $_POST['neec19'];
$neec20 = $_POST['neec20'];

$sql = "INSERT INTO vocac (salu1, salu2, salu3, salu4, salu5, inge6, inge7, inge8, inge9, inge10, arte11, arte12, arte13, arte14, arte15, neec16, neec17, neec18, neec19, neec20 ) VALUES ('$salu1', '$salu2', '$salu3', '$salu4', '$salu5', '$inge6', '$inge7', '$inge8', '$inge9', '$inge10', '$arte11', 'arte12', '$arte13', '$arte14', '$arte15', '$neec16', '$neec17', '$neec18', '$neec19', '$neec20', )";

if ($conexion->query($sql) === TRUE) {
    echo "Respuestas guardadas exitosamente.";
} else {
    echo "Error al guardar respuestas: " . $conexion->error;
}

$conexion->close();
?>

