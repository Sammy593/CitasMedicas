<?php

//recibir los datos desde el formulario 
$user =$_POST['usuario'] ;
$pass = $_POST['contrasenia'];

//saber si estan pasando valores en las variables de seccion 
if(isset($user)){
    
    //AQUI SE INCLUYE LA CONEXION 
    include_once '../conexion/conexion.php'; 

    //consulta si los datos son los que estan en la base 
    $consulta = "SELECT * FROM personalogin where usuario='$user' and contrasenia ='$pass' ";

    //Ejecutar la consulta 
    $resultados =mysqli_query($conn, $consulta) or die(mysqli_connect_errno());

    //almacenar los datos en un arreglo 
    $fila = mysqli_fetch_array($resultados);

    //controlar si llegan datos desde la consulta
    if($fila['id']==null){
        //redirigir al login
        header("location: ../");
    }else{ 
        //crear la seccion 
        session_start();

        //definir las variables de seccion y redirigimos a una pagina de usuario
        $_SESSION['id']=$fila['id'];
        $_SESSION['nombre']=$fila['usuario'];
        $_SESSION['persona_id']=$fila['persona_id'];
        $_SESSION['rol_id']=$fila['rol_id'];

        // AQUI ME DEBE REDIRIGIR A LA PAGINA PRINCIPAL LUEGO DE ACCEDER DEL LOGIN 
        header("location: ../dashboard/");

    }

}else{
    //se redirige al mismo login 
  header("location: ../");

}

?>