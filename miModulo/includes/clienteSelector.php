<div class="formulario">
<?php
    include "connection/config.php";
    include "connection/dbconn.php";
    
    $sql = 'select nom,rowid from llx_societe';

    $connection = Connect( $config['database']);

    $rows = ExecuteQuery( $sql, $connection);
    
    Close($connection);
    ?>
  <form action="mimoduloindex.php?tipo=nuevaV" method="post">
    <h3>Seleccione Cliente</h3>

    <select id="cliente" name="cliente">
      <?php

      foreach ($rows as $r) {
        echo "<option value=". $r[1] .">" . $r[0] . "</option>";
      }
      ?>

    </select>

    <input type="submit" value="Seleccionar">
  </form>



</div>