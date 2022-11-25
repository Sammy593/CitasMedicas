<?php
     require_once("Config/Config.php");
     require_once("Helpers/Helpers.php");

     $url = !empty($_GET['url']) ? $_GET['url'] : 'login';
     $arrUrl = explode("/",$url);
     $view = $arrUrl[0];
     //$view = $arrUrl[1];
     $params = "";

     if(!empty($arrUrl[1])){
          if($arrUrl[1] != ""){
               for($i=1; $i < count($arrUrl); $i++){
                    $params .= $arrUrl[$i].',';
               }
               $params = trim($params,",");
          }
     }

     //Load
     require_once("Libraries/Load.php");
?>