<?php
$_SESSION["usuario"] = "joel";
include "conexion.inc.php";
$sql = "select * from seguimiento where fechaFin is null AND codUsuario like '".$_SESSION['usuario']."'";
$result = mysqli_query($conn, $sql);
?>
<table>
    <tr>
        <td>Tramite</td>
        <td>Flujo</td>
        <td>Proceso</td>
        <td>Operacion</td>
    </tr>
    <?php
    while ($fila = mysqli_fetch_array($result)) {
        echo "<tr>";
        echo "<td>$fila[0]</td>";
        echo "<td>$fila[1]</td>";
        echo "<td>$fila[2]</td>";
        echo "<td>";
        echo "<a href='http://localhost/ExamenWorkflow/motor.php?codflujo=$fila[1]&codproceso=$fila[2]'>ver</a>";
        echo "</td>";
        echo "</tr>";
    }
    ?>
</table>