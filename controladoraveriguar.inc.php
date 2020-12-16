<?php
include "conexion.php";
$ci = $_GET["ci"];
$nombre = $_GET["nombre"];
$apellidos = $_GET["apellidos"];
$matricula = $_GET["matricula"];

$sql = "insert into academico.alumno VALUES ('$ci','$nombre','$apellidos','$matricula');";
$result = mysqli_query($conn, $sql);
$fila = mysqli_fetch_array($result);
