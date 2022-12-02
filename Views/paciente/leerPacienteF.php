<?php
require_once("Controllers/leerPacienteB.php");
?>

<?php
include_once('Views/template/head.php');
?>

<?php
include_once('Views/template/aside.php');
?>

<style>
  h1 {
    margin-left: 25px;
    display: inline-block;
    font-family: Vegur, 'PT Sans', Verdana, sans-serif;
  }

  p {
    display: inline-block;
    margin-top: 10px;
    margin-left: 15px;
    font-family: Vegur, 'PT Sans', Verdana, sans-serif;
    width: 200px;
    height: 35px;
    border: #008CBA solid 1px;
    border-radius: 8px;
    text-align: left;
    padding-left: 3px;
    padding-top: 5px;
  }

  .row {
    vertical-align: auto;
    text-align: left;
    padding: 5px 10px 5px;
    font-family: Vegur, 'PT Sans', Verdana, sans-serif;
  }

  label {
    text-align: left;
    margin-top: 10px;
    margin-left: 15px;
    display: inline-block;
    width: 200px;
    height: 35px;
    font-family: Vegur, 'PT Sans', Verdana, sans-serif;
  }

  #submitbtn {
    width: 150px;
    border-radius: 8px;
    background-color: #008CBA;
    color: white;
    border: none;
    padding: auto;
    font-family: Vegur, 'PT Sans', Verdana, sans-serif;
    font-size: 14px;
    display: inline-block;
    transition-duration: 0.4s;
  }

  a {
    margin-left: 15px;
    text-decoration: none;
    color: #008CBA;
  }

  a:hover {
    color: #9f9f9f;
  }
</style>

<div class="subBody">
  <div class="topBar">
    <h2 class="title-view">Datos del Paciente</h2>
    <div class="auth">
      <div id="user-logged"></div>
      <img src="<?php echo (media()) ?>/img/imgLogin/logotipoLogin.png" alt="img-user" id="user-img" class="card">
    </div>
    <div class="currentPeriod"></div>
  </div>
  <div class="subOptions">
    <div class="row">
      <label for=""> DNI </label>
      <p> <?php echo $DNI ?> </p>
    </div>
    <div class="row">
      <label for=""> Nombre </label>
      <p> <?php echo $nombres . " " . $apellidos ?> </p>
    </div>
    <div class="row">
      <label for=""> Direccion </label>
      <p> <?php echo $direccion; ?></p>
    </div>
    <div class="row">
      <label for=""> Telefono </label>
      <p> <?php echo $telefono; ?></p>
    </div>
    <div class="row">
      <label for=""> Sexo </label>
      <p> <?php echo $sexo; ?> </p>
    </div>
    <div class="row">
      <label for=""> Fecha de Nacimiento </label>
      <p> <?php echo $fechaN; ?> </p>
    </div>
    <div class="row">
      <label for=""> Fecha de Registro </label>
      <p> <?php echo $fechaR; ?> </p>
    </div>
    <div class="row">
      <label for=""> Fecha de Modificación </label>
      <p> <?php echo $fechaM; ?> </p>
    </div>
    <div class="row">
      <a href="../"> Volver </a>
    </div>
  </div>
</div>
<?php
include_once('Views/template/scripts.php');
?>