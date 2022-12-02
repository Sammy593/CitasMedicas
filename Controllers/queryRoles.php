<?php
require_once "conexion/conexion.php";

//Construcción de la consulta
$query = "SELECT * FROM Roles";
$resultado = $conn->query($query);

$query2 = "SELECT * FROM Personas WHERE id NOT IN (SELECT persona_id FROM PersonaLogin)";
$resultado2 = $conn->query($query2);

?>