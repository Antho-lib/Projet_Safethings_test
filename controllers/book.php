<?php
require_once('models/book.php');
require_once('models/panier.php');

if(count($_SESSION['panier']['nameId'])==0){
	header('Location: panier');
	exit();
}else{
$userId = $_SESSION['id'];
createBook($userId);
$nbArticles=count($_SESSION['panier']['nameId']);
for($i=0;$i<$nbArticles;$i++){
	//on vérifie si le produit a été acheté plusieurs fois
	for($j=0;$j<$_SESSION['panier']['qtProduit'][$i];$j++){
		$item_id = $_SESSION['panier']['id'][$i];
		$price = $_SESSION['panier']['prixProduit'][$i];
		bookArticle($userId, $item_id, $price);
	}
}
supprimerPanier();
include 'views/confirmBook.php';
}
?>
