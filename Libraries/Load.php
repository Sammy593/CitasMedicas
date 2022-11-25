<?php
     $view = ucwords($view);
    // $folder = ucwords($folder);
     $viewFile = "Views/".$view."/".$view.".php";
     if(file_exists($viewFile)){
          require_once($viewFile);
     }else{
          require_once("Views/error/error.php");
     }
     
?>