<?php
require_once "conexion/conexion.php";

//Construcción de la consulta
$query = "SELECT id, DNI, nombres, apellidos, direccion, telefono, sexo, fechanacimiento, fecharegistro, fechamodificacion, estado FROM pacientes";
$resultado = $conn->query($query);


?>