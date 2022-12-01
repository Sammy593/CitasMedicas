<?php
if(isset($_GET['id']) && !empty(trim($_GET['id']))){
    require_once '../conexion/conexion.php';
    $query = "DELETE FROM Personas WHERE id = ?";
    if($stmt = $conn -> prepare($query)){
        $stmt -> bind_param('i',$_GET['id']);
        if($stmt -> execute()){
            header('location:../Vista/principal.php');
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