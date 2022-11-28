<?php
  function search_option(string $opt) {
    $route = "views/dashboard/options/".$opt.".php";
    $exists = file_exists($route);
    return array("exists"=>$exists, "route"=> $route);
  }

?>