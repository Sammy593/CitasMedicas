<?php
$server_name = "localhost";
$server_user = "root";
$server_pass = "";
$server_db = "proyectocitasmedicas";

$conn = new mysqli($server_name, $server_user, $server_pass, $server_db);

//controlar conexion
if($conn -> connect_error){
  die('Conexion Fallida: ' . $conn -> connect_error);
} else {
  $query = "SELECT id, DNI, nombres, apellidos, direccion, telefono, sexo, fechanacimiento, fecharegistro, fechamodificacion, estado, foto FROM pacientes";
  $resultado = $conn -> query($query);
}
?>