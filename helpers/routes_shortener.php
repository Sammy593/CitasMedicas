<?php
    //Retorna ruta de archivo de funcion
    function shortener($funcion){
        return "./controllers/".ucwords($funcion).".php";
    }

?>