<?php
include_once('../process.php');
session_start();
if (!isset($_SESSION['rol'])) {
    header('location: ../index.php');
} else {
    if ($_SESSION['rol'] != 2) {
        header('location: ../index.php');
    }
}

header("Content-Type:   application/vnd.ms-excel; charset=utf-8");
header("Content-Disposition: attachment; filename=reporte.xls");  //File name extension was wrong
header("Expires: 0");
header("Cache-Control: must-revalidate, post-check=0, pre-check=0");
header("Cache-Control: private", false);


$qr = mysqli_query($mysqli, "SELECT * from asignatura WHERE id_asignatura='" . $_SESSION["asig"] . "' ");

$result2 = mysqli_query($mysqli, "SELECT * from asignatura,notas,estudiantes WHERE asignatura.id_asignatura='" . $_SESSION["asig"] . "' AND asignatura.id_asignatura=notas.id_asig AND notas.id_estudiante=estudiantes.id ORDER BY estudiantes.nombre ASC"); // obtener el query de los estudiantes y notas
while ($d = mysqli_fetch_assoc($qr)) {echo " <h3 style='text-align: center; color: red;'>".$d["asig_nombre"]."</h3>";}
echo "<table width='100%' border='1' align='center' >
     <thead>
         <tr>
             <th color='#dae7668a' align='center' width='8%' >ID</th>
             <th color='#dae7668a' align='center' width='20%' >Estudiantes</th>
             <th color='#dae7668a' align='center' width='5%' >Corte 1</th>
             <th color='#dae7668a' align='center' width='5%' >Corte 2</th>
             <th color='#dae7668a' align='center' width='5%' >Corte 3</th>
             <th color='#dae7668a' align='center' width='5%' >Proyecto</th>
             <th color='#dae7668a' align='center' width='5%' >Adicionales</th>
             <th color='#dae7668a' align='center' width='10%' >Nota final</th>
         </tr>
     </thead>
     <tbody>";
while ($datos = mysqli_fetch_assoc($result2)) {
    echo " 
         <tr>
             <td align='center'><span>" . $datos["id"] . "</span></td>
             <td align='center'><span>" . $datos["nombre"] . "</span></td>
             <td align='center'><span>" . $datos["corte_1"] . "</span></td>
             <td align='center'><span>" . $datos["corte_2"] . "</span></td>
             <td align='center'><span>" . $datos["corte_3"] . "</span></td>
             <td align='center'><span>" . $datos["proyecto"] . "</span></td>
             <td align='center'><span>" . $datos["adicionales"] . "</span></td>
             <td align='center'><span>" . $datos["notaFinal"] . "</span></td>
         </tr>";
}
echo "<tbody>
     </table>";
