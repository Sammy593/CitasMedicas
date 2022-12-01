<?php
require_once '../conexion/conexion.php';

//Leer los datos y visualizarlos en los cuadros de texto para su edición
if(isset($_GET['id']) && !empty(trim($_GET['id']))){
    $query = 'SELECT * FROM Personas WHERE id = ?';
    if($stmt = $conn->prepare($query)){
        $stmt -> bind_param('i', $_GET['id']);
        if($stmt->execute()){
            $resultado = $stmt -> get_result();
            if($resultado -> num_rows == 1){
                $row = $resultado -> fetch_array(MYSQLI_ASSOC);
                $DNI = $row['nombreusuario'];
                $nombres = $row['apellidousuario'];
                $apellidos = $row['cedulausuario'];
                $direccion = $row['telefonousuario'];
                $correo = $row['direccionusuario'];
                $telefono = $row['correousuario'];
                $sexo = $row['correousuario'];
            }else{
                echo('Error! No existen resultados para esta consulta');
                exit();
            }
        }else{
            echo 'No se ejecutó la consulta';
            exit();
        }
    }
    $stmt -> close();
}else{
    header("location: ../Controlador/index.php");
    exit();
}

//Tomar los datos editados y actualizarlos en la base

if($_SERVER['REQUEST_METHOD'] == 'POST'){
    //Vrificar que
    if(isset($_POST['nombres']) && isset($_POST['apellidos'])
    && isset($_POST['DNI']) && isset($_POST['direccion'])
     && isset($_POST['telefono']) && isset($_POST['correo']) && isset($_POST['sexo']) && isset($_POST['estado'])){
        //Construir la consulta
        $query = "UPDATE Personas SET DNI=?,nombres=?, apellidos=?, direccion=?, correo=?, telefono=?, sexo=?, estado=? WHERE id=?";
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
                header("location: ../index.html");
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
