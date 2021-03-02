<table>
<caption>VACUNACIONES</caption>
<tr>
  <th>id_vacuna</th>
  <th>vacuna</th>
  <th>Fecha</th>
  <th>Animal</th>
  <th>Borrar</th>
</tr>
<div class="table">
<?php

include "connection/config.php";
include "connection/dbconn.php";

$connection = Connect( $config['database']);


$sql  = "select id_vacunacion,va.nombre as vacuna,fecha,a.nombre as animal 
        from vacunacion v
        inner join animales a
        on a.id_mascota = v.animal
        inner join vacuna va
        on va.id_vacuna = v.vacuna";


$rows = ExecuteQuery( $sql, $connection);

Close( $connection);

foreach ($rows as $row) {
  echo "<tr>
    <td>".$row['id_vacunacion']."</td>
    <td>".$row['vacuna']."</td>
    <td>".$row['fecha']."</td>
    <td>".$row['animal']."</td>
    <td><a href='action/borrarVacunacion.php?id=".$row['id_vacunacion']."'>Borrar</a></td>
  </tr>";
}


 ?>
</div>
</table>