<?php

    require 'models/config.php';
    // Faire attention entre query et prepare!!
    function get_commande($id){
        $sql = "SELECT * FROM commande WHERE id_c=:id";
        $statement_commande = get_db()->prepare($sql);
        $statement_commande->execute(array(':id'=>$id));
        $results_commande =$statement_commande ->fetchAll();
        $statement_commande ->closeCursor();
        return $results_commande;
    }
    function get_articles($id){
        $sql_item_commande = "SELECT * FROM commande_item WHERE id_client_item=:id";
        $statement_commande_item = get_db()->prepare($sql_item_commande);
        $statement_commande_item->execute(array(':id'=>$id));
        $results_item =$statement_commande_item->fetchAll();
        $statement_commande_item ->closeCursor();
        return $results_item ;
    }

    function get_all_commandes(){
        $sql = "SELECT client_login ,id_client_item,nom_produit,prix,quantite,ref,nom_produit,date_achat FROM commande_item INNER JOIN CLIENT ON commande_item.id_client_item = client.id_client;   ";
        $statement_commande = get_db()->prepare($sql);
        $statement_commande->execute();
        $results_commande =$statement_commande ->fetchAll();
        $statement_commande ->closeCursor();
        return $results_commande;
    }
    function get_prix_tot(){
        $sql = "SELECT * FROM commande INNER JOIN CLIENT ON commande.id_c = client.id_client;    ";
        $statement_commande = get_db()->prepare($sql);
        $statement_commande->execute();
        $results_commande =$statement_commande ->fetchAll();
        $statement_commande ->closeCursor();
        return $results_commande;
    }
?>
