<?php
require_once 'models/db.php';

// On créé une commande
function createBook($userId){
	$response = getBdd()->prepare('INSERT INTO book(user_id) VALUES (:userId)');
	$response->execute([':userId' => $userId]);
	$response->closeCursor();
}

//On doit récupérer l'id de la commande en cours
function getBookId($userId){
	$response = getBdd()->prepare('SELECT MAX(id) FROM book where user_id = :userId');
	$response->execute([':userId' => $userId]);
	$id = $response->fetch();
	$response->closeCursor();
	return $id[0];
}

// Fonction principale
function bookArticle($userId, $item_id, $price){
	$book_id = getBookId($userId);
	$response = getBdd()->prepare('INSERT INTO book_item(book_id,item_id,price) VALUES (:book_id, :item_id, :price)');
	$response->execute([':book_id' => $book_id, ':item_id' => $item_id, ':price' => $price]);
	$response->closeCursor();
}
?>
