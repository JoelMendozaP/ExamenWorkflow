<?php
include "conexion.inc.php";
$codFlujo = $_GET["codflujo"];
$codProceso = $_GET["codproceso"];
$codProcesoSiguiente = $_GET["codprocesosiguiente"];
$tipo = $_GET["tipo"];
$archivo = $_GET["archivo"];
include "controlador" . $archivo;

if (isset($_GET["Anterior"])) {
    $sql = "select * from proceso where codFlujo='$codFlujo' and codProcesoSiguiente='$codProceso'";
}
if (isset($_GET["Siguiente"])) {
    $sql = "select * from proceso where codFlujo='$codFlujo' and codProceso='$codProcesoSiguiente'";
}
$result = mysqli_query($conn, $sql);
$fila = mysqli_fetch_array($result);

if (!empty($fila['codProceso'])) {
    $codprocesoEnvia = $fila['codProceso'];
    $archivoEnvia = "motor.php?codflujo=" . $codFlujo . "&codproceso=" . $codprocesoEnvia;
    // echo $archivoEnvia;
    header("Location: " . $archivoEnvia);
}
