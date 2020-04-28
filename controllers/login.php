<?php

    include 'models/login.php';

    if(isset($_POST['user'])&&isset($_POST['mot_de_passe'])&& !empty($_POST['user'])&&!empty($_POST['mot_de_passe'])){
        login_user($_POST['user'],$_POST['mot_de_passe']);
        login_id($_POST['user'],$_POST['mot_de_passe']);
    }
    include 'views/login.php';

?>
