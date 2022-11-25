<?php
    //Retorna ruta de archivo de funcion
    function funcionesBack($funcion){
        return "./Controllers/".ucwords($funcion).".php";
    }

    //Retorna ruta para archivos estaticos (js, css, img)
    function media(){
         return BASE_URL."/Assets";
    }
?>