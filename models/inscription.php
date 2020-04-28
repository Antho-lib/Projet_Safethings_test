<?php

    include 'models/config.php';

    function insert_user($email_user,$pass_record,$login){
        $pass = password_hash($pass_record,PASSWORD_DEFAULT);
        $result_sql_users = get_db()->prepare("INSERT INTO client(client_email,client_password,client_login) VALUES (:email,:password,:login)");
        $result_sql_users->bindparam(':email',$email_user);
        $result_sql_users->bindparam(':password',$pass);
        $result_sql_users->bindparam(':login',$login);
        $result_sql_users->execute();
        $result_sql_users->closeCursor();
    }

?>
