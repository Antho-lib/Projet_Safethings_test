<?php
// La variable data est une liste contenant l'ensemble des données. 1 élément = 1 donnée.
// A terme, les données seront récupérées depuis une db et injectées dans des objets php

include 'models/db.php';
// Connection DB.

$sql_demande = "SELECT * FROM item" ;
$item_querry = getDB()->query($sql_demande);

$list_data = $item_querry->fetchAll(PDO::FETCH_ASSOC);

function all_items(){
    global $list_data;
    // Pour voir les tableau associatives
    // echo '<br>'.print_r($list_data).'<br>';
    return $list_data;
}

function item($article){
    $sql_demande = "SELECT * FROM item" ;
    $item_querry = getDB()->query($sql_demande);
    while($results = $item_querry->fetch(PDO::FETCH_ASSOC)){
        if(strtolower($results['titre'])==strtolower($article)){
            return $results;
        }
    }
}


?>
