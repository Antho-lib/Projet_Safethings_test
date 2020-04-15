<?php
session_start();
define('ROOT_PATH', "C:/xampp/www/monprojet/Projet_Safethings/"); //Racine du projet
$request = str_replace(ROOT_PATH, "", $_SERVER['REQUEST_URI']);
$request = parse_url($request, PHP_URL_PATH); //Parser pour ne pas garder les GET
$segments = array_filter(explode('/', $request));
if (!count($segments) or $segments[0] == 'index'){
    $segments[0] = 'welcome';
}
define('REQ_TYPE', $segments[0] ?? Null);
define('REQ_TYPE_ID', $segments[1] ?? Null);
define('REQ_ACTION', $segments[2] ?? Null);
$file = 'controllers/'.REQ_TYPE.(REQACTION ? ''.REQ_ACTION : '').'.php';
if(file_exists($file)){
    require $file;
    exit();
}
else {
    require 'controllers/404.php';
    exit();
}
?>
