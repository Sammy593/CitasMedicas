<?php
require_once('../conexion/conexion.php');
//Verificar si los datos fueron enviados por el metodo post
if($_SERVER['REQUEST_METHOD'] == 'POST'){
    //Vrificar que
    if(isset($_POST['fechadatencion']) && isset($_POST['inicioatencion'])
    && isset($_POST['finatencion']) && isset($_POST['activo'])
     && isset($_POST['medico_id']) ){
        //Construir la consulta
        $query = "INSERT INTO horario(fechadatencion,inicioatencion,finatencion,activo,medico_id) 
        VALUES (?,?,?,?,?)";
        if($_POST['activo'] == "true"){
            $activo = true;
        }else{ 
            $activo = false;
        }

        //Preparar la consulta
        if($stmt = $conn-> prepare($query)){
            $stmt -> bind_param("sssss", $_POST['fechadatencion'], $_POST['inicioatencion'],
            $_POST['finatencion'], $activo, $_POST['medico_id']);

             //Ejecutar statemet
             if($stmt -> execute()){
                header("location: ../horario/horario");
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

