<?php
require 'models/articles.php';
$articles = getAllArticles();

if(!empty($_GET['delete'])){
	deleteArticleById($_GET['delete']);
	header("Location: articles_edit");
	exit();
}
include 'views/edit_articles.php';
?>
