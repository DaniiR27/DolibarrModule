<div class="formulario">
    <?php
    include_once "connection/config.php";
    include_once "connection/dbconn.php";

    

    $sql = 'select nom from llx_societe where rowid = '. $_POST['cliente'];

    $connection = Connect($config['database']);

    $cliente = ExecuteQuery($sql, $connection);

    Close($connection);

    ?>
        <h3>Nueva Mascota</h3>
        <h4><?php echo 'Dueñ@ : '.$cliente[0][0]; ?></h4>

            <form action="action/addMascota.php" method="post">
                <label for="nombre">Nombre</label>
                <input type="text" id="nombre" name="nombre">

                <label for="raza">Raza</label>
                <input type="text" id="raza" name="raza">

                <label for="especie">Especie</label>
                <input type="text" id="especie" name="especie">

                <input type="hidden" name="cliente" value=<?php echo $_POST['cliente']?>>
                
                <input type="submit" value="Agregar">
            </form>

</div>