<?php
     require_once("Config/Config.php");
     require_once("Helpers/Helpers.php");

     $url = !empty($_GET['url']) ? $_GET['url'] : 'login/login';
     $arrUrl = explode("/",$url);
     $folder = $arrUrl[0];
     
     if(!empty($arrUrl[1])){
          $view = $arrUrl[1];
     }else{
          $view = $arrUrl[0];
     }

     
     /*$params = "";

     if(!empty($arrUrl[2])){
          if($arrUrl[2] != ""){
               for($i=2; $i < count($arrUrl); $i++){
                    $params .= $arrUrl[$i].',';
               }
               $params = trim($params,",");
          }
     }*/

     //Load
     require_once("Libraries/Load.php");
?>