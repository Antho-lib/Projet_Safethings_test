<?php

    require 'models/statistique.php';
    // require 'views/js/colonne.js';

    // requete pour rechercher tous les clients
    if(isset($clients)&&!empty($clients)){
        $clients=show_client();
    }else{
        $clients=array();
        $clients=show_client();
    }

    // requete pour rechercher tous les commandes
    if(isset( $facture)&&!empty( $facture)){
        $facture=stat_commande();
    }else{
        $facture=array();
        $facture=stat_commande();
    }

    // requete pour rechercher tous les produits vendues
    if(isset($produit_commander)&&!empty($produit_commander)){
        $produit_commander=stat_articles();
    }else{
        $produit_commander=array();
        $produit_commander=stat_articles();
    }

    require 'views/statistique.php';

?>
