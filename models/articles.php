<?php
require_once 'models/db.php';

// Calculer le nombre d'articles dans une catégorie
function getNbCats($cat){
	$response = getBdd()->prepare('SELECT COUNT(*), categorie.nom_categorie FROM item  INNER JOIN categorie ON item.id_categorie = categorie.id_categorie GROUP BY item.id_categorie');
	$response->execute([':cat' => $cat]);
	$nbCat = $response->fetch();
	$response->closeCursor();
	return $nbCat[0];
}



// Charger les catégories de la BDD
function getCats(){
	$response = getBdd()->query('SELECT * FROM categorie');
	$catName = array();
	while ($donnees = $response->fetch()){
		array_push($catName,$donnees['nom_categorie']);
	}
	$response->closeCursor();
	return $catName;
}



function getFullArticle($name){
	$response = getBdd()->prepare('SELECT item.id , item.titre , item.description , item.prix , item.path , categorie.nom_categorie FROM item,categorie WHERE item.id_categorie = categorie.id_categorie');
	$response->execute([':name' => $name]);
	$article = $response->fetchAll(PDO::FETCH_ASSOC);
	$response->closeCursor();
	return $article;
}

function getAllArticles(){
	$response = getBdd()->prepare('SELECT *  FROM item  INNER JOIN categorie ON item.id_categorie = categorie.id_categorie ');
	$response->execute();
	$articles = $response->fetchAll(PDO::FETCH_ASSOC);
	$response->closeCursor();
	return $articles;
}

function updateArticle($oldtitle, $title, $price, $description) {
    $reponse = getBdd()->prepare('UPDATE item SET titre = :titre, prix = :prix, `description` = :description WHERE titre = :oldtitle');
    $reponse->execute([':titre' => $title, ':prix' => $prix, ':description' => $description, ':oldtitle' => $oldtitle]);
    $reponse->closeCursor();
}


function deleteArticleById($id){
	//on supprime d'abord l'adresse (autre table)
	$response = getBdd()->prepare('DELETE FROM item WHERE id = :id');
	$array = array('id' => $id);
	$response->execute($array);
	$response->closeCursor();
}

function createArticle($titre, $description, $prix, $id_categorie, $path){
		$response = getBdd()->prepare('INSERT INTO item(titre, description, prix, id_categorie, path) VALUES (:titre, :description, :prix, :id_categorie, :path)');
	$response->execute([':titre' => $titre, ':description' => $description, ':prix' => $prix, ':id_categorie' => $id_categorie, ':path' => $path]);
	$response->closeCursor();
}

?>
