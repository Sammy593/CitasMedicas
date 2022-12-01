<?php
require_once '../conexion/conexion.php';

if(isset($_GET['id']) && !empty(trim($_GET['id']))){
    $query = 'SELECT * FROM Personas WHERE id = ?';
    if($stmt = $conn->prepare($query)){
        $stmt -> bind_param('i', $_GET['id']);
        if($stmt->execute()){
            $resultado = $stmt -> get_result();
            if($resultado -> num_rows == 1){
                $row = $resultado -> fetch_array(MYSQLI_ASSOC);
                $DNI = $row['DNI'];
                $nombres = $row['nombres'];
                $apellidos = $row['apellidos'];
                $direccion = $row['direccion'];
                $correo = $row['correo'];
                $telefono = $row['telefono'];
                $sexo = $row['sexo'];
                $estado = $row['estado'];
                if($estado = 1){
                    $estadoString = "Activo";
                }else{
                    $estadoString = "Inactivo";
                }
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
    $conn -> close();

}else{
    echo 'Error! Intente más tarde';
    exit();
}

?>

