<?php

    require 'models/commande.php';
    // voir si la variable est initialiser avant de l'affecter
    if(isset($list_commande_user)&&!empty($list_commande_user)){
        $list_commande_user = get_commande($_SESSION['id']);
    }else{
        $list_commande_user = array();
        $list_commande_user = get_commande($_SESSION['id']);
    }

    if(isset($item_commander)&&!empty($item_commander)){
        $item_commander = get_articles($_SESSION['id']);
    }else{
        $item_commander = array();
        $item_commander = get_articles($_SESSION['id']);
    }


    require 'views/commande.php';

?>
