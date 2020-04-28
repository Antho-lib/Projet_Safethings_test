<?php

    require 'models/config.php' ;

    function login_user($user,$user_pass){
        $results = get_db()->prepare("SELECT * FROM client WHERE client_login='$user'");
        $results ->execute();
        $data = $results;
        if($results->rowCount()>0){
            $data = $results->fetchAll(PDO::FETCH_ASSOC);
            if(password_verify($user_pass,$data[0]['client_password'])){
                $results ->closeCursor();
                return $_SESSION['user']=$user ;
            }
        }
    }

    function login_id($user,$user_pass){
        $results = get_db()->prepare("SELECT * FROM client WHERE client_login='$user'");
        $results ->execute();
        $data = $results;
        if($results->rowCount()>0){
            $data = $results->fetchAll(PDO::FETCH_ASSOC);
            if(password_verify($user_pass,$data[0]['client_password'])){
                return $_SESSION['id']=$data[0]['id_client'] ;
                $results ->closeCursor();
            }
        }
    }



?>
