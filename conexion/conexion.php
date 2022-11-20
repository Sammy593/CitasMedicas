<?php
 
// datos para permitir la conexion
define ('SERVERNAME', 'localhost');
define ('USERNAME','root');
define ('PASSWORD','');
define ('DBNAME', 'LoginCitasM');
 
// crear la conexion  a la base de datos con mysqli
$conn = new mysqli(SERVERNAME, USERNAME, PASSWORD, DBNAME);
 
//controlar conexion
if($conn -> connect_error){
    die('Conexion Fallida: ' . $conn -> connect_error);
} /*else{
    die('Conexion Exitosa !');
}*/
 
/*
// Establecer y realizar la consulta, y la almacenamos en una variable 
$consulta = "SELECT idusuario, nombreusuario, apellidousuario, cedulausuario, correousuario FROM usuario";

$resultado = mysqli_query($conn, $consulta) or die("Algo ha salido mal en la consulta a la base de datos");

//Mostrar los registros de la base de datos que han sido consultados
//Encabezado de la tabla 
echo "<table border='2'>";
echo "<tr>";
echo "<th>ID</th>";
echo "<th>Nombre</th>";
echo "<th>Apellido</th>";
echo "<th>Cédula</th>";
echo "<th>Correo</th>";
echo "</tr>";

//while que recorre cada registro y muestra en cada campo de la tabla
while($columna = mysqli_fetch_array($resultado) ){
    echo "<tr>";
    echo "<td>".$columna['idusuario']."</td>";
    echo "<td>".$columna['nombreusuario']."</td>";
    echo "<td>".$columna['apellidousuario']."</td>";
    echo "<td>".$columna['cedulausuario']."</td>";
    echo "<td>".$columna['correousuario']."</td>";
    echo "</tr>";
}

echo "</table>";
*/
// Cerramos la conexion a la base de datos 
//$conn -> close();

?>
