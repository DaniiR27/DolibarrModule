<div class="formulario">
    <?php
    include "connection/config.php";
    include "connection/dbconn.php";

    $sql = 'select * from animales where id_dueño = '. $_POST['cliente'];

    $connection = Connect($config['database']);

    $rows = ExecuteQuery($sql, $connection);

    Close($connection);

    $sql = 'select nom from llx_societe where rowid = '. $_POST['cliente'];

    $connection = Connect($config['database']);

    $cliente = ExecuteQuery($sql, $connection);

    Close($connection);

    $sql = 'select * from vacuna';

    $connection = Connect($config['database']);

    $vacunas = ExecuteQuery($sql, $connection);

    Close($connection);
    ?>
    <form action="action/addVacunacion.php" method="post">
        <h3>Nueva Vacunacion</h3>
        <h4><?php echo $cliente[0][0]; ?></h4>

            <form action="action/addVacunacion.php" method="post">
                <label for="vacuna">Vacuna</label>
                <select id="vacunas" name="vacunas">
                    <?php

                    foreach ($vacunas as $v) {
                        echo "<option value=". $v[0] .">" . $v[1] . "</option>";
                    }
                    
                    ?>

                </select>

                <label for="fechavacuna">Fecha Vacuna</label>
                <input type="date" id="fechaVacuna" name="fecha">

                



                <label for="mascota">Mascota</label>
                <select id="mascota" name="mascota">
                    <?php

                    foreach ($rows as $r) {
                        echo "<option value=". $r[0] .">" . $r[2] . "</option>";
                    }
                    ?>

                </select>
                <input type="submit" value="Agregar">
            </form>

</div>