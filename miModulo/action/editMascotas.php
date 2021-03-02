<?php

  include "../connection/config.php";
  include "../connection/dbconn.php";

  # Recogemos los parametros que nos pasan por POST
  $id_mascota =  $_POST['id'];
  $nombre =  $_POST['nombre'];
  $raza =  $_POST['raza'];
  $especie =  $_POST['especie'];

  # conectamos con la base de datos
  $connection = Connect( $config['database']);
  //Creamos la sentencia
  $sql  = "update animales set nombre = '".$nombre."' ,raza = '".$raza."',especie = '".$especie."' where id_Mascota =" . $id_mascota;

  $return = Execute( $sql, $connection);

  Close( $connection);
  //Volvemos a el index
  header ( "location: ../mimoduloindex.php");