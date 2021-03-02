<?php

include "../connection/config.php";
include "../connection/dbconn.php";


  # Recogemos los parametros que nos pasan por POST
  



  $nombre = $_POST['nombre'];
  $tipo = $_POST['tipo'];
  $idProducto = $_POST['rproducto'];
    print_r($_POST);
  # conectamos con la base de datos
  $connection = Connect( $config['database']);


  $sql = "insert into vacuna(id_vacuna,nombre,tipo,id_producto) values(null,'".$nombre."','".$tipo."','".$idProducto."')";
  echo $sql;
  $return = Execute( $sql, $connection);

  print_r($return);

  Close( $connection);


  header ( "location: ../mimoduloindex.php");
  