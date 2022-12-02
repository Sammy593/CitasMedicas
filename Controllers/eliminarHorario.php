<?php
if(isset($params) && !empty(trim($params))){
    require_once 'conexion/conexion.php';
    $query = "DELETE FROM horario WHERE id = ?";
    if($stmt = $conn -> prepare($query)){
        $stmt -> bind_param('i',$params);
        if($stmt -> execute()){
            header('location: ../horario');
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


?>