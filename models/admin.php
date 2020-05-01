<?php

include 'models/config.php';
// Connection DB.

    $sql_demande = "SELECT * FROM produit" ;
    $safethings_querry = get_db()->query($sql_demande);
    $list_data = $safethings_querry->fetchAll(PDO::FETCH_ASSOC);

// fonction pour trouver un user avec son id
function getUserById($id) {
    $reponse = getDB()->prepare('SELECT * FROM client WHERE id_client = :id');
    $reponse->execute([':id' => $id]);
    $user = $reponse->fetch();
    $reponse->closeCursor(); // Termine le traitement de la requête
    return $user;
}
// fonction pour derouler la liste des articles
function all_items(){
    global $list_data;
    return $list_data;
}

// ajouter le produit
function add_product($nom,$prix,$description){
    $results = get_db()->prepare("INSERT INTO produit (produit_name, produit_price,produit_description) VALUES (:nom,:prix,:description)");
    $results ->execute(array(':nom'=>$nom,':prix'=>$prix,':description'=>$description));
    $results ->closeCursor();
}

// ajouter image
function add_image($fileNameLoad){
    $results = get_db()->prepare("INSERT INTO image (image) VALUES (:image)");
    $results ->execute(array(':image'=>$fileNameLoad));
    $results ->closeCursor();
}

// changement de nom
function change_name($ref,$nom){
    $sql = "UPDATE produit SET produit_name='$nom' WHERE id_produit=$ref" ;
    $search= get_db()->query($sql);
    $search->execute();
}

// changement de prix
function change_prix($ref,$prix){
    $sql = "UPDATE produit SET  produit_price='$prix'  WHERE id_produit=$ref" ;
    $search= get_db()->query($sql);
    $search->execute();
}

// changement de description
function change_description($ref,$description){
    $sql = "UPDATE produit SET produit_description='$description'  WHERE id_produit=$ref" ;
    $search= get_db()->query($sql);
    $search->execute();
}
//supprimer tilisateur
function delete_client($refclt){
    $sql = "DELETE FROM client WHERE id_client=$refclt" ;
    $search= get_db()->query($sql);
    $search->execute();
}
// supprimer mon produit
function delete_product($ref){
    $sql = "DELETE FROM produit WHERE id_produit=$ref" ;
    $search= get_db()->query($sql);
    $search->execute();
}

// editer le produit

?>
