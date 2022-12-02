<?php
require_once 'conexion/conexion.php';

if (isset($params) && !empty(trim($params))) {
  $query = 'SELECT * FROM pacientes WHERE id = ?';
  if ($stmt = $conn->prepare($query)) {
    $stmt->bind_param('i', $params);
    if ($stmt->execute()) {
      $resultado = $stmt->get_result();
      if ($resultado->num_rows == 1) {
        $row = $resultado->fetch_array(MYSQLI_ASSOC);
        $DNI = $row['DNI'];
        $nombres = $row['nombres'];
        $apellidos = $row['apellidos'];
        $direccion = $row['direccion'];
        $telefono = $row['telefono'];
        $sexo = $row['sexo'];
        $telefono = $row['fechanacimiento'];
        $telefono = $row['fecharegistro'];
        $telefono = $row['fechamodificacion'];
      } else {
        echo ('Error! No existen resultados para esta consulta');
        exit();
      }
    } else {
      echo 'No se ejecutó la consulta';
      exit();
    }
  }
  $stmt->close();
} else {
  header("location: paciente.php");
  exit();
}

//Tomar los datos editados y actualizarlos en la base

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  //Vrificar que
  if (
    isset($_POST['DNI']) && isset($_POST['nombres'])
    && isset($_POST['apellidos']) && isset($_POST['direccion'])
    && isset($_POST['telefono']) &&  isset($_POST['sexo']) && isset($_POST['fechanacimiento']) && isset($_POST['fecharegistro']) && isset($_POST['fechamodificacion']) && isset($_POST['estado'])
  ) {
    //Construir la consulta
    $query = "UPDATE pacientes SET DNI=?,nombres=?, apellidos=?, direccion=?, telefono=?, sexo=?, estado=? WHERE id=?";
    if ($_POST['estado'] == "true") {
      $estado = true;
    } else {
      $estado = false;
    }

    //Preparar la consulta
    if ($stmt = $conn->prepare($query)) {
      $stmt->bind_param(
        "ssssssssi",
        $_POST['DNI'],
        $_POST['nombres'],
        $_POST['apellidos'],
        $_POST['direccion'],
        $_POST['telefono'],
        $_POST['sexo'],
        $_POST['fechanacimiento'],
        $_POST['fecharegistro'],
        $_POST['fechamodificacion'],
        $estado,
        $params
      );

      //Ejecutar statemet
      if ($stmt->execute()) {
        header("location: ../paciente.php");
        exit();
      } else {
        echo "Error, el statemet no se ejecutó";
      }
      $stmt->close();
    } else {
      echo "Error en la preparacion del statement";
    }
  } else {
    echo "No se estan llenando todos los datos";
  }
  $conn->close();
}
