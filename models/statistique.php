<?php

    require 'models/config.php';

    function show_client(){
        $client = "SELECT * FROM client WHERE NOT client_login='admin'";
        $statement_client = get_db()->prepare($client);
        $statement_client->execute();
        $result_client = $statement_client->fetchALL();
        $statement_client->closeCursor();
        return $result_client;

    }

    function stat_commande(){
        $commande_st = "SELECT * FROM commande";
        $req_commande = get_db()->prepare($commande_st);
        $req_commande->execute();
        $result_commande = $req_commande->fetchALL();
        $req_commande->closeCursor();
        return  $result_commande;
    }

    function stat_articles(){
        $item_commande_sql = "SELECT * FROM commande_item";
        $req_commande_item = get_db()->prepare($item_commande_sql);
        $req_commande_item ->execute();
        $result_item = $req_commande_item->fetchALL();
        $req_commande_item ->closeCursor();
        return $result_item ;
    }

?>
