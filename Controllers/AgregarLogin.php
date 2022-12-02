<?php
require_once('../conexion/conexion.php');
//Verificar si los datos fueron enviados por el metodo post
if($_SERVER['REQUEST_METHOD'] == 'POST'){
    //Vrificar que
    if(isset($_POST['usuario']) && isset($_POST['contrasenia'])
    && isset($_POST['persona']) && isset($_POST['rol'])){
        //Construir la consulta
        $query = "INSERT INTO PersonaLogin(usuario,contrasenia,persona_id,rol_id) VALUES (?,?,?,?)";
        

        //Preparar la consulta
        if($stmt = $conn-> prepare($query)){
            $stmt -> bind_param("ssss", $_POST['usuario'], $_POST['contrasenia'],
            $_POST['persona'], $_POST['rol']);

             //Ejecutar statemet
             if($stmt -> execute()){
                header("location: ../persona-login/IndLoginView");
                exit();
             }else{
                echo "Error, el statemet no se ejecutó";
             }
             $stmt -> close();
        }else{
            echo "Error en la preparacion del statement";
        }
    }else{
        echo "No se estan llenando todos los datos";
    }
    $conn -> close();
}

?>

