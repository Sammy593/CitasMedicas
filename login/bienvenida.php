<?php

//inicializar la seccion
session_start();

//validar si se esta ingresando directamente sin loggin
if (!$_SESSION) {
    header('location:index.html');
}

//crear la conexion  a l bases de datos
//proceso de conexion a la base de datos
$servername = 'localhost';
$username = 'root';
$password = '';
$dbname = 'LoginCitasM';

//crear la conexion a l bases de datos
($con = mysqli_connect($servername, $username, $password, $dbname)) or
    die('Error en la conexion');

//consulta

$idusuario = $_SESSION['id'];
$consulta = "SELECT nombreUsuario,apellidoUsuario,nombreUsuaLog, cedulaUsuario, telefonoUsuario,
correoUsuario,fotoUsuario  FROM login where idUsuario=$idusuario ";

//ejecutar consulta
($resultados = mysqli_query($con, $consulta)) or die(mysqli_connect_errno());

//almacenamos los datos en un arreglo
$fila = mysqli_fetch_array($resultados);
$nombre = $fila['nombreUsuario'];
$apellido = $fila['apellidoUsuario'];
$nombreUsuario = $fila['nombreUsuaLog'];
$cedula = $fila['cedulaUsuario'];
$telefono = $fila['telefonoUsuario'];
$correo = $fila['correoUsuario'];
$foto = $fila['fotoUsuario'];

?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Citas Medicas</title>

    <!--Link de Boostrap -->
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi"
      crossorigin="anonymous"
    />
</head>
<!--fondo de la pagina  -->
<body class="bg-info d-flex justify-content-center align-items-center vh-100">
 
<!--este div es el cuadro del centro  -->
<div
      class="bg-white p-5 rounded-5 text-secondary shadow"
      style="width: 35rem"
    >

    <table>
    <tr>
        <td >
        <div class="d-grid gap-2 d-md-flex justify-content-md-end" >
             <!--Boton para Cerrar Seccion seccion -->
             <a class="btn btn-outline-danger text-secondary w-4 mt-3 fw-semibold shadow-sm  " href="desconectarUsuario.php" role="button">Cerrar Sesión</a>
                 
        </div>
    </tr>
    <tr>
        <td>
            <!--Titulo de la pagina  -->
        <div class="text-center fs-1 fw-bold">Perfil del usuario <?php echo $_SESSION['nombre'].' ' .$apellido;?> </div> 
        <div class="input-group mt-3">
        </td>
    </tr>
    <tr>
        <td></td>
    </tr>
    <tr>
        <td >
            <!--Esta es la foto que se encuentra en la base de datos   -->
            <div class="d-flex justify-content-center"> 
                <?php echo '<img height=130px width=105px src="data:foto/png;base64,' .
                    base64_encode($foto) .
                    '" />'; ?>
            </div>    
        </td>
        
    </tr> 
    <tr>
         <!--Llamado del nombre-->
        <td><div class="pt-1" style="font-size: 1.2rem"><b> Nombre: </b><?php echo $_SESSION['nombre']; ?></div></td>
    </tr>
    <tr>
        <td></td>
    </tr>
   
    <tr>
         <!--Llamado del apellido -->
        <td> <div class="pt-1" style="font-size: 1.2rem"><b>Apellido: </b> <?php echo $apellido; ?> </div></td>
    </tr>
   <tr>
        <td></td>
    </tr>
    <tr>
          <!--Llamado del nombre usuario -->
        <td><div class="pt-1" style="font-size: 1.2rem"><b>Nombre Usuario:</b> <?php echo $nombreUsuario; ?></div></td>
    </tr>
    <tr>
        <td></td>
    </tr>
    <tr>
        <!--Llamado del cedula -->
        <td><div class="pt-1" style="font-size: 1.2rem"><b>cedula: </b><?php echo $cedula; ?></div></td>
    </tr>
    <tr>
        <td></td>
    </tr>
    <tr>
        <!--Llamado del telefono -->
        <td><div class="pt-1" style="font-size: 1.2rem"><b>telefono: </b><?php echo $telefono; ?></div></td>
    </tr> 
    <tr>
        <td></td>
    </tr>
    <tr>
        <!--Llamado del Email -->
        <td><div class="pt-1" style="font-size: 1.2rem"><b>correo: </b><?php echo $correo; ?></div> </td>
    </tr> 
    
</table>


    </div>
</body>
</html>