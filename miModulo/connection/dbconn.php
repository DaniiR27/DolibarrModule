<?php


function Connect($config = array())
{

  if (!($conn = mysqli_connect($config['host'], $config['username'], $config['password'], $config['database']))) {
    echo "Error conectando a la base de datos.";
    exit();
  } else {
    mysqli_set_charset($conn, $config['encoding']);
  }

  if (!mysqli_select_db($conn, $config['database'])) {
    echo "Error seleccionando la base de datos.";
    exit();
  }

  return ($conn);
}

function Execute($sql, $conn)
{
  $return = mysqli_query($conn, $sql);
  return ($return);
}

function ExecuteQuery($sql, $conn)
{

  $return = mysqli_query($conn, $sql);


  while ($row = mysqli_fetch_array($return)) {
    $rows[] = $row;
  }
  return ( $rows);
}

function Close($conn)
{
  mysqli_close($conn);
  unset($conn);
}
