<?php
// La variable data est une liste contenant l'ensemble des données. 1 élément = 1 donnée.
// A terme, les données seront récupérées depuis une db et injectées dans des objets php

include 'models/config.php';
// Connection DB.

$sql_demande = "SELECT * FROM client" ;
$safethings_querry = get_db()->query($sql_demande);

$list_data = $safethings_querry->fetchAll(PDO::FETCH_ASSOC);

function all_users(){
    global $list_data;
    // Pour voir les tableau associatives
    // echo '<br>'.print_r($list_data).'<br>';
    return $list_data;
}

function membres($user){
    $sql_demande = "SELECT * FROM produit" ;
    $safethings_querry = get_db()->query($sql_demande);
    while($results = $safethings_querry->fetch(PDO::FETCH_ASSOC)){
        if(strtolower($results['client_login'])==strtolower($user)){
            return $results;
        }
    }
}

include 'views/gestionmembres.php';
?>
