<div class='formulario'>
<form action="" method="post" id="ver">
    <label for="tipo">Seleccione a ver</label>
    <select id="tipo" name="tipo">

      <option value="vacunaciones">Vacunaciones</option>
      <option value="mascotas">Mascotas y dueños</option>

    </select>
    <button id="btt" >Seleccionar</button>
  </form>
  </div>
  <div class="tabla">
    <?php
    if(isset($_POST['tipo'])){
      switch( $_POST['tipo'] ){

        case "vacunaciones":
          include "includes/verVacunaciones.php";
          break;
        case "mascotas":
          include "includes/verMascotas.php";
          break;
        

      }
    }

    ?>
    </div>

