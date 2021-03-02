<html>

<head>

</head>
<link rel="stylesheet" href="css/style.css">
<link rel="stylesheet" href="css/add.css">
<link rel="stylesheet" href="css/table.css">

<body>

    <nav class="main-menu">
        <ul>
            <li>
                <a href="mimoduloindex.php?tipo=selectCliente">
                    <i class="fa fa-plus" aria-hidden="true"></i>
                    <span class="nav-text">
                        Nueva Vacunacion
                    </span>
                </a>

            </li>
            <li>
                <a href="mimoduloindex.php?tipo=selectClienteMascota">
                    <i class="fa fa-plus" aria-hidden="true"></i>
                    <span class="nav-text">
                        Nueva Mascota
                    </span>
                </a>

            </li>
            <li>
                <a href="http://localhost/dolibarr/societe/card.php?leftmenu=customers&action=create&type=c">
                    <i class="fa fa-plus" aria-hidden="true"></i>
                    <span class="nav-text">
                        Nuevo Cliente
                    </span>
                </a>

            </li>
            <li>
                <a href="mimoduloindex.php?tipo=nuevaVacuna">
                    <i class="fa fa-plus" aria-hidden="true"></i>
                    <span class="nav-text">
                        Nueva Vacuna
                    </span>
                </a>

            </li>
            <li class="has-subnav">
                <a href="mimoduloindex.php?tipo=verT">
                    <i class="fa fa-search" aria-hidden="true"></i>
                    <span class="nav-text">
                        Ver y editar
                    </span>
                </a>

            </li>



            <ul class="logout">
                <li>
                    <a href="http://localhost/dolibarr">
                        <i class="fa fa-power-off fa-2x"></i>
                        <span class="nav-text">
                            Volver
                        </span>
                    </a>
                </li>
            </ul>
    </nav>
    <div class="area">
        <?php




        //Switch pensado para que cada opción este incluida en el menú principal
        if (isset($_GET['tipo'])) {
            switch ($_GET['tipo']) {

                case "selectCliente":
                    echo '';
                    include "includes/clienteSelector.php";
                    break;
                case "nuevaV":
                    include "includes/nuevaVacunacion.php";
                    break;
                case "verT":
                    include "includes/ver.php";
                    break;
                case "selectClienteMascota":
                    echo '';
                    include "includes/clienteSelectorMascota.php";
                    break;
                case "nuevaM":
                    echo '';
                    include "includes/nuevaMascota.php";
                    break;
                case "nuevaVacuna":
                    echo '';
                    include "includes/nuevaVacuna.php";
                    break;
            }
        }

        ?>
    </div>
</body>

</html>