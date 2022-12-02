
<?php
require_once "conexion/conexion.php";

//Construcción de la consulta
$query = "SELECT id,DNI,nombres,apellidos,direccion,correo,telefono,sexo,estado FROM Personas";
$resultado = $con->query($query);


?>