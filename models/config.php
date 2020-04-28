<?php
     function get_db(){
          try{
               $connect_user_db = new PDO("mysql:host=localhost;dbname=safethings","root","");
               $connect_user_db -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
               return $connect_user_db;
          }catch(Exception $ex){
               die('Error 404: '.$ex->get_message());
          }
     }
?>
