<?php
require_once('conexion.php');
?>

<?php
include_once('./template/head.php');
?>

<?php
include_once('./template/aside.php');
?>

<div class="subBody">
  <div class="subOptions">
    <h1> Datos del Paciente </h1>
    <div>
      <label for=""> DNI </label>
      <p> <?php echo $DNI ?> </p>
    </div>
    <div>
      <label for=""> Nombre </label>
      <p> <?php echo $nombres . " " . $apellidos ?> </p>
    </div>
    <div>
      <label for=""> Direccion </label>
      <p> <?php echo $direccion; ?></p>
    </div>
    <div>
      <label for=""> Telefono </label>
      <p> <?php echo $telefono; ?></p>
    </div>
    <div>
      <label for=""> Sexo </label>
      <p> <?php echo $sexo; ?> </p>
    </div>
    <div>
      <a href="paciente.php"> Volver </a>
    </div>
  </div>
</div>
<?php
include_once('./template/scripts.php');
?>
