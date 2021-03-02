<?php

include "../connection/config.php";
include "../connection/dbconn.php";

  # Recogemos los parametros que nos pasan por POST
  
  $id_mascota =  $_GET['id'];

  # conectamos con la base de datos
  $connection = Connect( $config['database']);

  $sql  = "delete from animales where id_mascota = ".$id_mascota;
  $return = Execute( $sql, $connection);




  Close( $connection);

  header ( "location: ../mimoduloindex.php?tipo=verT");