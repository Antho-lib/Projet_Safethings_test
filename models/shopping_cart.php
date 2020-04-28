<?php
    include 'models/config.php';

    $shop_connect = get_db() ;

    function show(){
        $sql = "SELECT * FROM produit";
        $all_articles = get_db()->prepare($sql);
        $all_articles -> execute();

        $results = $all_articles ;
        return $results ;
        $result ->closeCursor();
    }

    function add_produit_dans_panier($ref){
        $query = "SELECT * FROM produit WHERE id_produit=:ref";
        $stmt = get_db()->prepare($query);
        $stmt->execute(array(':ref'=>$ref));
        $produit = $stmt->fetch(PDO::FETCH_ASSOC);
        $item= array(
            'ref'=>$produit['id_produit'],
            'nom'=>$produit['produit_name'],
            'prix'=>$produit['produit_price'],
            'quantite'=>$_POST['quantite'],
        );
        return $item;
        $produit ->closeCursor();
    }
    // valide commande pour introduire dans la db
    function commander($id,$total_commande){
        $query_commande = "INSERT INTO commande (id_c,total) VALUES (:id,:total)";
        $stmt = get_db()->prepare($query_commande);
        $stmt->execute(array(':id'=>$id,':total'=>$total_commande));
        $stmt ->closeCursor();
    }
// valide les articles commandés pour introduire dans la db
    function commande_panier($id,$ref,$prix,$quantite,$produit_nom_achat){
        $query_item = "INSERT INTO commande_item (id_client_item,ref,prix,quantite,nom_produit) VALUES (:id_client_item,:ref,:prix,:quantite,:nom)";
        $item = get_db()->prepare($query_item);
        $item->execute(array(':id_client_item'=>$id,':prix'=>$prix,':quantite'=>$quantite,':ref'=>$ref,':nom'=>$produit_nom_achat));
        $item->closeCursor();
    }
    function remove($ref){
        unset($_SESSION['panier']);
    }

?>
