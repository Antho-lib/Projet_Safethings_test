<?php

require 'models/users.php';
$user=REQ_TYPE_ID;
if(!REQ_TYPE_ID){
    $list = $list_data;
    include 'views/gestionmembres.php';
}else{
    // $list = per_item(REQ_TYPE_ID);
    $item = user($user);
    include 'views/user.php';
}
?>
