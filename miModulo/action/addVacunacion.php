<?php

  include "../connection/config.php";
  include "../connection/dbconn.php";

  # Recogemos los parametros que nos pasan por POST

  $vacuna = $_POST['vacunas'];
  $fecha = $_POST['fecha'];
  $mascota = $_POST['mascota'];

  # conectamos con la base de datos
  $connection = Connect( $config['database']);

  #Creamos la sentencia de inserción de datos
  $sql = "insert into vacunacion(id_vacunacion,vacuna,fecha,animal) values(null,'".$vacuna."','".$fecha."','".$mascota."')";
  $return = Execute( $sql, $connection);

  Close( $connection);
  //volvemos a el index
  header ( "location: ../mimoduloindex.php");
