<?php
require_once('models/articles.php');

if(empty($_POST)){
$articleName = str_replace("-", " ", ARTICLE_REF);
$articleTab =  getAllArticles(); // créé un tableau contenant un tableau avec les infos d'un article
$article = $articleTab[0]; //extraction du tableau
}else{
	if(empty($_POST['titre'])){
		$titre = $_GET['titre'];
	}else{
		$titre = $_POST['titre'];
	}
	if(empty($_POST['prix'])){
		$prix = $_GET['prix'];
	}else{
		$prix = $_POST['prix'];
	}
	if(empty($_POST['description'])){
		$description = $_GET['description'];
	}else{
		$description = $_POST['description'];
	}
	updateArticle($_GET['titre'], $titre, $prix, $description);
	header("Location: articles_edit");
	exit();

}
include 'views/articles.php';
?>
