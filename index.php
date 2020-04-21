<?php
session_start();
define('ROOT_PATH', "/"); //Racine du projet
$request = preg_replace("/".preg_quote(ROOT_PATH, '/')."/", "", $_SERVER['REQUEST_URI'], 1);
$request = parse_url($request, PHP_URL_PATH); //Parser pour ne pas garder les GET
$segments = array_filter(explode('/', $request));
if (!count($segments) or $segments[0] == 'index'){
    $segments[0] = 'welcome';
}


if ($segments[0] == 'article'){
	$segments[1] = Null;
	define('ARTICLE_REF', $segments[2] ?? Null);
	$segments[2] = Null;
}

define('REQ_TYPE', $segments[0] ?? Null);
define('REQ_TYPE_ID', $segments[1] ?? Null);
define('REQ_ACTION', $segments[2] ?? Null);
$file = 'controllers/'.REQ_TYPE.(REQ_ACTION ? ''.REQ_ACTION : '').'.php';
if(file_exists($file)){
    require $file;
    exit();
}
else {
    require 'controllers/404.php';
    exit();
}
?>
