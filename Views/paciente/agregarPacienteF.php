<?php
include_once('Views/template/head.php');
?>

<?php
include_once('Views/template/aside.php');
?>

<style>
  h2 {
    margin-left: 25px;
    display: inline-block;
    font-family: Vegur, 'PT Sans', Verdana, sans-serif;
  }

  p {
    margin-top: 15px;
    margin-left: 25px;
    font-family: Vegur, 'PT Sans', Verdana, sans-serif;
  }

  .row {
    vertical-align: auto;
    text-align: left;
    padding: 5px 10px 5px;
    font-family: Vegur, 'PT Sans', Verdana, sans-serif;
  }

  label {
    display: inline-block;
    width: 150px;
    font-family: Vegur, 'PT Sans', Verdana, sans-serif;
  }

  input {
    border-radius: 5px;
    border: 1px solid #008CBA;
    font-family: Vegur, 'PT Sans', Verdana, sans-serif;
  }

  input[type=text] {
    font: 1em sans-serif;
    width: 25%;
    padding: 5px 10px;
    margin: 3px 0;
    box-sizing: border-box;
    font-family: Vegur, 'PT Sans', Verdana, sans-serif;
  }

  input[type=date] {
    font: 1em sans-serif;
    width: 25%;
    padding: 5px 10px;
    margin: 3px 0;
    box-sizing: border-box;
    font-family: Vegur, 'PT Sans', Verdana, sans-serif;
  }

  select {
    border-radius: 5px;
    border: #008CBA 1px solid;
    font: 1em sans-serif;
    width: 25%;
    padding: 5px 10px;
    margin: 3px 0;
    box-sizing: border-box;
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
    <h2 class="title-view">Agregar nuevo paciente</h2>
    <div class="auth">
      <div id="user-logged"></div>
      <img src="<?php echo (media()) ?>/img/imgLogin/logotipoLogin.png" alt="img-user" id="user-img" class="card">
    </div>
    <div class="currentPeriod"></div>
  </div>
  <div class="subOptions">
    <form action="../Controllers/agregarPacienteB.php" method="post">
      <div class="row">
        <label for="DNI"> DNI </label>
        <input type="text" name="DNI" required>
      </div>
      <div class="row">
        <label for="nombres"> Nombres </label>
        <input type="text" name="nombres" required>
      </div>
      <div class="row">
        <label for="apellidos"> Apellidos </label>
        <input type="text" name="apellidos" required>
      </div>
      <div class="row">
        <label for="direccion"> Dirección </label>
        <input type="text" name="direccion" required>
      </div>
      <div class="row">
        <label for="telefono"> Telefono </label>
        <input type="text" name="telefono" required>
      </div>
      <div class="row">
        <label for="sexo"> Sexo </label>
        <select name="sexo">
          <option value="M">Masculino</option>
          <option value="F">Femenino</option>
        </select>
      </div>
      <div class="row">
        <label for="fechanacimiento"> Fecha de Nacimiento </label>
        <input type="date" name="fechanacimiento" required>
      </div>
      <div class="row">
        <label for="fecharegistro"> Fecha de Registro </label>
        <input type="date" name="fecharegistro" required>
      </div>
      <div class="row">
        <label for="fechamodificación"> Fecha de Modificación </label>
        <input type="date" name="fechamodificacion" required>
      </div>
      <div class="row">
        <label for=""> Estado </label>
        <select name="estado">
          <option value="true"> Activo </option>
          <option value="false">Inactivo</option>
        </select>
      </div>
      <div>
        <input id="submitbtn" type="submit" value="Registrar Paciente">
        <a href="paciente"> Cancelar </a>
      </div>
    </form>
  </div>
</div>

<?php
include_once('Views/template/scripts.php');
?>