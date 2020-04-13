<?php


$url = '/monprojet/Projet_Safethings/';
if (isset ($_GET['url'])) {
    $url = explode('/',$_GET['url']);
}


if ($url == '') {
  require 'welcome.php';
} elseif ($url[0] = 'article' AND !empty($url[1])) {
  echo "Voici ton article".$url[1];
} else {
  echo "Erreur 404";
}





 ?>
