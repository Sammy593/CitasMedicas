<?php
    //Retorna ruta de archivo de funcion
    function funcionesBack($funcion){
        return "./Controllers/".ucwords($funcion).".php";
    }

    //Retorla la url del proyecto
	function base_url()
	{
		return BASE_URL;
	}

    //Retorna ruta para archivos estaticos (js, css, img)
    function media(){
         return BASE_URL."/Assets";
    }

    
    //Templates html
    function headPath($data=""){
        $view_control_sidebar = "Views/template/head.php";
        require_once($view_control_sidebar);
    }
    function asidePath($data=""){
        $view_aside = "Views/template/aside.php";
        require_once($view_aside);
    }
    function scriptsPath($data=""){
        $view_footer = "Views/template/scripts.php";
        require_once($view_footer);
    }
?>