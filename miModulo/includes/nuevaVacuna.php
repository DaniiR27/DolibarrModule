<div class="formulario">
    <?php
    include_once "connection/config.php";
    include_once "connection/dbconn.php";
    $sql = 'select rowid,label from llx_product';

    $connection = Connect($config['database']);

    $rows = ExecuteQuery($sql, $connection);

    Close($connection);
    ?>
        <h3>Nueva Vacuna</h3>
        

            <form action="action/addVacuna.php" method="post">
                <label for="nombre">Nombre</label>
                <input type="text" id="nombre" name="nombre">

                <label for="tipo">Tipo</label>
                <input type="text" id="tipo" name="tipo">


                <label for="rproducto">ReferenciaProducto</label>
                <select id="rproducto" name="rproducto">
                    <?php

                    foreach ($rows as $r) {
                        echo "<option value=". $r[0] .">" . $r[1] . "</option>";
                    }
                    
                    ?>

                </select>
                
                <input type="submit" value="Agregar">
            </form>

</div>