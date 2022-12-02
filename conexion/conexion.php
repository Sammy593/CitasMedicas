<?php
//Datos para la conexión a la base de datos
define("SERVERNAME", "localhost");
//En caso de cambiar de puerto
//define("SERVERNAME", "localhost:3307");
define("USERNAME", "root");
define("PASSWORD", "");
define("DBNAME", "ProyectoCitasMedicas");

//Creación de la conexión a la base de datos usando mysqli
$con = new mysqli(SERVERNAME, USERNAME, PASSWORD, DBNAME);

//Controlar la conexión
if ($con -> connect_error){
    die("Conexión fallida: " . $conn -> connect_error);

}
// else{
//     echo("Conexión exitosa!");
// }

?>