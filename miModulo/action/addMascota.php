<?php

  include "../connection/config.php";
  include "../connection/dbconn.php";

  # Recogemos los parametros que nos pasan por POST
  
  $nombre = $_POST['nombre'];
  $raza = $_POST['raza'];
  $especie = $_POST['especie'];
  $cliente = $_POST['cliente'];

  # conectamos con la base de datos
  $connection = Connect( $config['database']);

  //Se crea la sentencia y se realiza el insert
  $sql = "insert into animales(id_mascota,id_dueño,nombre,raza,especie) values(null,'".$cliente."','".$nombre."','".$raza."','".$especie."')";
  echo $sql;
  $return = Execute( $sql, $connection);

  //Cerramos la conexión
  Close( $connection);
  //Volvemos al index
  header ( "location: ../mimoduloindex.php");
  