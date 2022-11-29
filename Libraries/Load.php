<?php
     $viewFile = "Views/".$folder."/".$view.".php";
     if(file_exists($viewFile)){
          require_once($viewFile);
     }else{
          require_once("Views/error/error.php");
     } 
?>