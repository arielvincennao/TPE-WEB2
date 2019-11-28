<?php


require_once "config/ApiConfig.php";
require_once "controller/Api.php";
require_once "controller/CommentsController.php";

function parseURL($url)
{
  $urlExploded = explode('/', $url);
  $arrayReturn[ApiConfig::$RESOURCE] = $urlExploded[0].'#'.$_SERVER['REQUEST_METHOD'];
  $arrayReturn[ApiConfig::$PARAMS] = isset($urlExploded[1]) ? array_slice($urlExploded,1) : null;
  return $arrayReturn;
}

if(isset($_GET['resource'])){
    $urlData = parseURL($_GET['resource']);
    $resource = $urlData[ApiConfig::$RESOURCE];
    if(array_key_exists($resource,ApiConfig::$RESOURCES)){
        $params = $urlData[ApiConfig::$PARAMS];
        $resource = explode('#',ApiConfig::$RESOURCES[$resource]);
        $controller =  new $resource[0]();
        $method = $resource[1];
        if(isset($params) &&  $params != null){
            echo $controller->$method($params);
        }
        else{
            echo $controller->$method();
        }
    }
}
 ?>
