<?php
require_once("Controllers/leerPacienteB.php");
?>

<?php
include_once('Views/template/head.php');
?>

<?php
include_once('Views/template/aside.php');
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
      <label for=""> Fecha de Nacimiento </label>
      <p> <?php echo $fechaN; ?> </p>
    </div>
    <div>
      <label for=""> Fecha de Registro </label>
      <p> <?php echo $fechaR; ?> </p>
    </div>
    <div>
      <label for=""> Fecha de Modificación </label>
      <p> <?php echo $fechaM; ?> </p>
    </div>
    <div>
      <a href="../"> Volver </a>
    </div>
  </div>
</div>
<?php
include_once('Views/template/scripts.php');
?>
