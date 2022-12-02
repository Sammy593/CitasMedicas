<?php
require_once('conexion/conexion.php');
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  if (
    isset($_POST['DNI']) && isset($_POST['nombres'])
    && isset($_POST['apellidos']) && isset($_POST['direccion'])
    && isset($_POST['telefono']) && isset($_POST['sexo']) && isset($_POST['fechanacimiento'])
    && isset($_POST['fecharegistro']) && isset($_POST['fechamodificación']) && isset($_POST['estado'])
  ) {
    $query = "INSERT INTO pacientes(DNI, nombres, apellidos, direccion, telefono, sexo,f echanacimiento, fecharegistro, fechamodificacion, estado) VALUES (?,?,?,?,?,?,?,?,?,?)";
    if ($_POST['estado'] == "true") {
      $estado = true;
    } else {
      $estado = false;
    }

    if ($stmt = $conn->prepare($query)) {
      $stmt->bind_param(
        "sssssssss",
        $_POST['DNI'],
        $_POST['nombres'],
        $_POST['apellidos'],
        $_POST['direccion'],
        $_POST['telefono'],
        $_POST['sexo'],
        $_POST['fechanacimiento'],
        $_POST['fecharegistro'],
        $_POST['fechamodificacion'],
        $estado
      );

      if ($stmt->execute()) {
        header("location: Views/paciente/agregarPacienteF");
        exit();
      } else {
        echo "Error, el statemet no se ejecutó";
      }

      $stmt -> close();
    } else {
      echo "Error en la preparacion del statement";
    }
  } else {
    echo "No se estan llenando todos los datos";
  }
  $conn -> close();
}
