
<?php
require_once "../conexion/conexion.php";

//Construcción de la consulta
$query = "SELECT DNI,nombres,apellidos,direccion,correo,telefono,sexo,estado FROM Personas";
$resultado = $conn->query($query);


?>