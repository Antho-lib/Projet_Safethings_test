<?php

    include 'models/inscription.php';

    if(isset($_POST['email_user'])&&isset($_POST['mot_de_passe'])&&isset($_POST['login_user'])&&!empty($_POST['login_user'])&&!empty($_POST['email_user'])&&!empty($_POST['mot_de_passe'])){
        insert_user($_POST['email_user'],$_POST['mot_de_passe'],$_POST['login_user']);
    }

    include 'views/inscription.php';

?>
