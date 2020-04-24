<?php
require 'models/articles.php';

$cats = getCats();
$titleCat = "Chercher une catégorie"; // quand aucune catégorie n'est sélectionnée

if (!empty($_GET['cat'])){
	$name = $_GET['cat'];
	$name = str_replace("-", " ",$name);
	$titleCat = $name;
}else{
	$name = "Protections_mains"; // si pas de catégorie définie, je décide qu'on affichera la catégorie Proteines
}

// crée un tableau contenant les catégories et leurs sous catégories (pour l'affichage du menu déroulant, pas hardcodé au cas-où une nouvelle catégorie est ajoutée (ou retirée!)
$dataSub = array();
foreach($cats as $row){
	$dataTemp = array();
	$subcat = getCats($row);
	foreach($subcat as $row2){
		$temptab2 = ['nameSub' => $row2, 'nbSub' => getNbCats($row2)];
	array_push($dataTemp,$temptab2);
	}
	$temptab = ['name' => $row,
	'nb' => getNbCats($row), 'subcat' =>$dataTemp];
	array_push($dataSub,$temptab);
}

// crée un tableau contenant les articles de la catégorie sélectionnée
$data = array();
$titre = getArticleTitle($name);
$prix = getArticlePrice($name);
$path = getArticlePath($name);
$categorie = getArticleCategory($name);
$data = array();
for($cpt=0;$cpt<count($title);$cpt++){
	$temptab = ['title' => $title[$cpt],
	'prix' => $prix[$cpt],
	'path' => $path[$cpt],
	'categorie' => $categorie[$cpt],];
	array_push($data,$temptab);
}
include 'views/shop.php';
