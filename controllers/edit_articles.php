<?php
require 'models/articles.php';

if(isset($_POST['article_titre'], $_POST['article_contenu'])) {
	   if(!empty($_POST['article_titre']) AND !empty($_POST['article_contenu'])) {
			  $article_idcat = htmlspecialchars($_POST['id_categorie']);
	      $article_titre = htmlspecialchars($_POST['titre']);
	      $article_contenu = htmlspecialchars($_POST['description']);
				$article_prix = htmlspecialchars($_POST['prix']);
				$article_path = htmlspecialchars($_POST['path']);

	      $ins = $bdd->prepare('INSERT INTO item (id_categorie,titre, description, prix,path) VALUES (?, ?, ?,?,?)');
	      $ins->execute(array($article_titre, $article_contenu,$article_idcat,$article_prix,$article_path));
	      $message = 'Votre article a bien été posté';
	   } else {
	      $message = 'Veuillez remplir tous les champs';
	   }
	}



if(!empty($_GET['delete'])){
	deleteArticleById($_GET['delete']);
	header("Location: articles_edit");
	exit();
}
include 'views/edit_articles.php';
?>
