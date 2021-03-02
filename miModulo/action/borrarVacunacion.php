<?php

  include "../connection/config.php";
  include "../connection/dbconn.php";

  # Recogemos los parametros que nos pasan por POST
  
  $id_vacunacion =  $_GET['id'];

  # conectamos con la base de datos
  $connection = Connect( $config['database']);

  $sql  = "delete from vacunacion where id_vacunacion = ".$id_vacunacion;
  $return = Execute( $sql, $connection);

  Close( $connection);

  header ( "location: ../mimoduloindex.php?tipo=verT");