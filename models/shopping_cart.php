<?php
    include 'models/config.php';

    $shop_connect = getDB() ;

    function show(){
        $sql = "SELECT * FROM item";
        $all_articles = getDB()->prepare($sql);
        $all_articles -> execute();

        $results = $all_articles ;
        return $results ;
        $result ->closeCursor();
    }

    function add_produit_dans_panier($ref){
        $query = "SELECT * FROM item WHERE id=:ref";
        $stmt = getDB()->prepare($query);
        $stmt->execute(array(':ref'=>$ref));
        $produit = $stmt->fetch(PDO::FETCH_ASSOC);
        $item= array(
            'ref'=>$produit['id'],
            'nom'=>$produit['titre'],
            'prix'=>$produit['prix'],
            'quantite'=>$_POST['quantite'],
        );
        return $item;
        $produit ->closeCursor();
    }
    // valide commande pour introduire dans la db
    function commander($id,$total_commande){
        $query_commande = "INSERT INTO book (id,total) VALUES (:id,:total)";
        $stmt = getDB()->prepare($query_commande);
        $stmt->execute(array(':id'=>$id,':total'=>$total_commande));
        $stmt ->closeCursor();
    }
// valide les articles commandés pour introduire dans la db
function commande_panier($id,$ref,$prix,$quantite,$produit_nom_achat){
    $query_item = "INSERT INTO commande_item (id_client_item,ref,prix,quantite,nom_produit) VALUES (:id_client_item,:ref,:prix,:quantite,:nom)";
    $item = getDB()->prepare($query_item);
    $item->execute(array(':id_client_item'=>$id,':prix'=>$prix,':quantite'=>$quantite,':ref'=>$ref,':nom'=>$produit_nom_achat));
    $item->closeCursor();
}
    function remove($ref){
        unset($_SESSION['panier']);
    }

?>
