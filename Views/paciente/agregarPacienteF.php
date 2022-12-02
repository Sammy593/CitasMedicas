<?php
include_once('Views/template/head.php');
?>

<?php
include_once('Views/template/aside.php');
?>

<div class="subBody">
  <h2> Agregar nuevo paciente </h2>
  <p> Llene los datos del paciente</p>
  <div class="subOptions">
    <form action="../Controllers/agregarPacienteB.php" method="post">
      <div>
        <label for="DNI"> DNI </label>
        <input type="text" name="DNI" required>
      </div>
      <div>
        <label for="nombres"> Nombres </label>
        <input type="text" name="nombres" required>
      </div>
      <div>
        <label for="apellidos"> Apellidos </label>
        <input type="text" name="apellidos" required>
      </div>
      <div>
        <label for="direccion"> Dirección </label>
        <input type="text" name="direccion" required>
      </div>
      <div>
        <label for="telefono"> Telefono </label>
        <input type="text" name="telefono" required>
      </div>
      <div>
        <label for="sexo"> Sexo </label>
        <select name="sexo">
          <option value="M">Masculino</option>
          <option value="F">Femenino</option>
        </select>
      </div>
      <div>
        <label for="fechanacimiento"> Fecha de Nacimiento </label>
        <input type="date" name="fechanacimiento" required>
      </div>
      <div>
        <label for="fecharegistro"> Fecha de Registro </label>
        <input type="date" name="fecharegistro" required>
      </div>
      <div>
        <label for="fechamodificación"> Fecha de Modificación </label>
        <input type="date" name="fechamodificacion" required>
      </div>
      <div>
        <label for=""> Estado </label>
        <select name="estado">
          <option value="true"> Activo </option>
          <option value="false">Inactivo</option>
        </select>
      </div>
      <div>
        <input type="submit" value="Registrar Paciente">
        <a href="paciente"> Cancelar </a>
      </div>
    </form>
  </div>
</div>

<?php
include_once('Views/template/scripts.php');
?>