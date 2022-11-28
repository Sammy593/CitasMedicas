<?php
     require_once("config.php");
     require_once("libraries/load.php");
     require_once("helpers/routes_shortener.php");
     require_once("helpers/search_option.php");
     require_once("helpers/media_urls.php");


     if(isset($_REQUEST['url'])) {
          $url = explode("/", $_GET["url"]);
          if (!file_exists("views/".$url[0])) {
               include(importView("error"));
               return;
          } 

          if (count($url) == 1) {
               include(importView($url[0]));  
               return;
          } 

          $opt_exists = search_option($url[1]);
          if ($url[0] == "dashboard" && count($url) == 2 && $opt_exists["exists"]) {
              include($opt_exists["route"]);
              return;
          }

          include(importView("error"));

     } else {
          include('views/login/index.php');
     }
?>