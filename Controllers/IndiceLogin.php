
<?php
require_once "conexion/conexion.php";

//Construcción de la consulta
$query = "SELECT * FROM PersonaLogin";
$resultado = $conn->query($query);


?>