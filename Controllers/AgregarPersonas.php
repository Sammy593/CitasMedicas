<?php
require_once('conexion/conexion.php');
//Verificar si los datos fueron enviados por el metodo post
if($_SERVER['REQUEST_METHOD'] == 'POST'){
    //Vrificar que
    if(isset($_POST['DNI']) && isset($_POST['nombres'])
    && isset($_POST['apellidos']) && isset($_POST['direccion'])
     && isset($_POST['correo']) && isset($_POST['telefono']) && isset($_POST['sexo'])
     && isset($_POST['estado'])){
        //Construir la consulta
        $query = "INSERT INTO Personas(DNI,nombres,apellidos,direccion,correo,telefono,
        sexo,estado) VALUES (?,?,?,?,?,?,?,?)";
        if($_POST['estado'] == "true"){
            $estado = true;
        }else{
            $estado = false;
        }

        //Preparar la consulta
        if($stmt = $conn-> prepare($query)){
            $stmt -> bind_param("ssssssss", $_POST['DNI'], $_POST['nombres'],
            $_POST['apellidos'], $_POST['direccion'], $_POST['correo'],
             $_POST['telefono'], $_POST['sexo'],$estado);

             //Ejecutar statemet
             if($stmt -> execute()){
                header("location: Views/personas/AggPersonasView");
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

