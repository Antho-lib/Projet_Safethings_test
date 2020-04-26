<?php ob_start() ?>
<form method="POST">
	      <input type="text" name="article_titre" placeholder="Titre" /><br />
	      <textarea name="article_contenu" placeholder="Contenu de l'article"></textarea><br />
        <textarea name="article_prix" placeholder="Prix"></textarea><br />
        <textarea name="article_idcat" placeholder="Categorie article"></textarea><br />
        <textarea name="article_path" placeholder="Nom de la photo"></textarea><br />
	      <input type="submit" value="Envoyer l'article" />
	   </form>
	   <br />
	   <?php if(isset($message)) { echo $message; } ?>

     <?php
     $titre="Ajouter un article";
     $contenu = ob_get_clean();
     include 'includes/template.php';
     ?>
