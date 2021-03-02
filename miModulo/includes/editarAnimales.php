
<html>

<link href="https://fonts.googleapis.com/css2?family=Work+Sans:wght@200;300&display=swap" rel="stylesheet">
<link href="../css/add.css" rel="stylesheet">

<body>
<?php

include_once "../connection/config.php";
include_once "../connection/dbconn.php";

$connection = Connect( $config['database']);


$sql  = "select * from animales where id_mascota =".$_GET['id'];


$rows = ExecuteQuery( $sql, $connection);

$mascota = $rows[0];

Close( $connection);

?>

<form action="../action/editMascotas.php" method="post">
  <h3>Animales</h3>
  <input type="hidden" id="id" name="id"  value="<?php echo $mascota['id_mascota']; ?>">
  <label for="name">Nombre</label>
  <input type="text" id="nombre" name="nombre" value="<?php echo $mascota['nombre']; ?>">
  <label for="raza">Raza</label>
  <input type="text" id="raza" name="raza"  value="<?php echo $mascota['raza']; ?>">

  <label for="especie">Especie</label>
  <input type="text" id="especie" name="especie" value="<?php echo $mascota['especie']; ?>">

  <input type="submit" value="Actualizar">
</form>   

</body>

</html>