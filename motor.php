<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Workflow</title>
    <link rel="stylesheet" href="src/style/style.css">
</head>
<?php
$codFlujo = $_GET["codflujo"];
$codProceso = $_GET["codproceso"];
include "conexion.inc.php";
$sql = "select * from proceso where codFlujo='$codFlujo' and codproceso='$codProceso'";
$result = mysqli_query($conn, $sql);
$fila = mysqli_fetch_array($result);
$tipo = $fila['tipo'];
$codprocesosiguiente = $fila['codProcesoSiguiente'];
$archivo = $fila['pantalla'];
?>

<body>
    <h1 class="motor__title">Motor de Flujo</h1>
    <br>
    <form class="motor__form" action="controlador.php" method="GET">
        <?php
        include $archivo;
        ?>
        <input type="hidden" value="<?php echo $codFlujo; ?>" name="codflujo" />
        <input type="hidden" value="<?php echo $codProceso; ?>" name="codproceso" />
        <input type="hidden" value="<?php echo $codprocesosiguiente; ?>" name="codprocesosiguiente" />
        <input type="hidden" value="<?php echo $tipo; ?>" name="tipo" />
        <input type="hidden" value="<?php echo $archivo; ?>" name="archivo" />
        <input class="motor__btn motor__btn-a" type="submit" value="Anterior" name="Anterior" />
        <input class="motor__btn motor__btn-s" type="submit" value="Siguiente" name="Siguiente" />
    </form>

</body>

</html>