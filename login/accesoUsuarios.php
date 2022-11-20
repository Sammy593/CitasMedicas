<?php

//recibir los datos desde el formulario 
$user =$_POST['usuario'] ;
$pass = $_POST['contrasenia'];

//saber si estan pasando valores en las variables de seccion 
if(isset($user)){
    //proceso de conexion a la base de datos
    $servername ="localhost";
    $username="root";
    $password="";
    $dbname = "LoginCitasM";

    //crear la conexion a l bases de datos
    $con = mysqli_connect($servername, $username, $password, $dbname) or die("Error en la conexion");

    //consulta si los datos son los que estan en la base 
    $consulta = "SELECT * FROM login where nombreUsuaLog='$user' and passwordLog ='$pass' ";

    //Ejecutar la consulta 
    $resultados =mysqli_query($con, $consulta) or die(mysqli_connect_errno());
    
    //almacenar los datos en un arreglo 
    $fila = mysqli_fetch_array($resultados);

    //controlar si llegan datos desde la consulta
    if($fila['idUsuario']==null){
        //redirigir al login
        header("location:index.html");
    }else{
        //crear la seccion 
        session_start();

        //definir las variables de seccion y redirigimos a una pagina de usuario
        $_SESSION['id']=$fila['idUsuario'];
        $_SESSION['nombre']=$fila['nombreUsuario'];
      
        header("location:bienvenida.php");

    }

}else{
    //se redirige al mismo login 
    header("location:index.html");

}

?>