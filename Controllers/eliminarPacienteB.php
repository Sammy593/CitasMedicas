<?php
if(isset($params) && !empty(trim($params))){
    require_once 'conexion/conexion.php';
    $query = "DELETE FROM pacientes WHERE id = ?";
    if($stmt = $conn -> prepare($query)){
        $stmt -> bind_param('i',$params);
        if($stmt -> execute()){
            header('location: ../paciente');
            exit();
        }else{
            echo 'Error! No se ejecuto la consulta en la base de datos';
            exit();
        }
        $stmt -> close(); 
    }
    
    $conn -> close();
}else{
    echo "Error!";
    exit();
}
