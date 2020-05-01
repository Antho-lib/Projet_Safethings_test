<?php
// La variable data est une liste contenant l'ensemble des données. 1 élément = 1 donnée.
// A terme, les données seront récupérées depuis une db et injectées dans des objets php

require 'models/admin.php';
// Connection DB.


$sql_demande = "SELECT * FROM client" ;
$safethings_querry = get_db()->query($sql_demande);

$list_data = $safethings_querry->fetchAll(PDO::FETCH_ASSOC);
if(isset($_POST['delete'])){
  if(isset($_POST['refclt'])){
        $refclt =$_POST['refclt'] ;
        delete_client($refclt);
    }
}

function all_users(){
    global $list_data;
    // Pour voir les tableau associatives
    // echo '<br>'.print_r($list_data).'<br>';
    return $list_data;
}



include 'views/gestionmembres.php';
?>
