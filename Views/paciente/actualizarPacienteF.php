<?php
$funcionUrl = funcionesBack("actualizarPacienteB");
require_once($funcionUrl);
?>

<?php
include_once('Views/template/head.php');
?>

<?php
include_once('Views/template/aside.php');
?>

<div class="subBody">
  <h2> Modificar y Actualizar Paciente </h2>
  <p> Llene los campos solicitados</p>
  <div class="subOptions">
    <form action="" method="post">
      <div>
        <label for="DNI"> DNI </label>
        <input type="text" name="DNI" value="<?php echo ($DNI) ?>" required>
      </div>
      <div>
        <label for="nombres"> Nombres </label>
        <input type="text" name="nombres" value="<?php echo ($nombres) ?>" required>
      </div>
      <div>
        <label for="apellidos"> Apellidos </label>
        <input type="text" name="apellidos" value="<?php echo ($apellidos) ?>" required>
      </div>
      <div>
        <label for="direccion"> Dirección </label>
        <input type="text" name="direccion" value="<?php echo ($direccion) ?>" required>
      </div>
      <div>
        <label for="telefono"> Telefono </label>
        <input type="text" name="telefono" value="<?php echo ($telefono) ?>" required>
      </div>
      <div>
        <label for="sexo"> Sexo </label>
        <select name="sexo">
          <option value="M">Masculino</option>
          <option value="F">Femenino</option>
        </select>
      </div>
      <div>
        <label for="estado"> Estado </label>
        <select name="estado">
          <option value="true"> Activo </option>
          <option value="false">Inactivo</option>
        </select>
      </div>
      <div>
        <input type="submit" value="Actualizar Paciente">
        <a href="../"> Cancelar </a>
      </div>

    </form>
  </div>
</div>
<?php
include_once('Views/template/scripts.php');
?>