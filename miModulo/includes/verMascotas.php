
<table>

<tr>
  <th>id_mascota</th>
  <th>id_dueño</th>
  <th>nombre</th>
  <th>raza</th>
  <th>especie</th>
  <th>Editar</th>
  <th>Borrar</th>
</tr>
<div class="table">
<?php

include "connection/config.php";
include "connection/dbconn.php";

$connection = Connect( $config['database']);


$sql  = "select * from animales a inner join llx_societe s on a.id_dueño = s.rowid";


$rows = ExecuteQuery( $sql, $connection);

Close( $connection);



foreach ($rows as $row) {
  echo "<tr>
    <td>".$row['id_mascota']."</td>
    <td>".$row['nom']."</td>
    <td>".$row['nombre']."</td>
    <td>".$row['raza']."</td>
    <td>".$row['especie']."</td>
    <td><a href='includes/editarAnimales.php?id=".$row['id_mascota']."'>Editar</a></td>
    <td><a href='action/borrarMascota.php?id=".$row['id_mascota']."'>Borrar</a></td>
  </tr>";
}


 ?>
</div>
</table>