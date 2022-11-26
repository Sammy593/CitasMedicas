<?php

//Inicializa la seccion 
session_start();

//se verifica si ha ingresado sesion me aparezcan los datos, caso contrario no. 
if($_SESSION['id'] != null){
    //Permite cerrar la sesion
    session_destroy();
    //redige a la pagina index.html
    header('location:index.php');

}else{
    header('location:index.php');
}

?>