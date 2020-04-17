<?php
require_once 'models/user.php';



if(!empty($_POST)) {
    if(!empty($_POST['login']) && !empty($_POST['password']) && !empty($_POST['email']) && !empty($_POST['confirm_password']))
    {
        //vérification du pass et confirm_pass
        if($_POST['password'] != $_POST['confirm_password']){
            $errorMessage = "Votre mot de passe et votre mot de passe de confirmation ne correspondent pas...";
        }
        else {
            try
            {
                //PDO: PHP Data Objects
                $bdd = new PDO('mysql:host=localhost;dbname=acheteur;charset=utf8', 'root', '', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
            }
            catch (Exception $e)
            {
                //die — Alias de la fonction exit qui affiche un message et termine le script courant
                die('Erreur : ' . $e->getMessage());
            }
            //vérifier que le login n'existe pas
            $reponse = $bdd->prepare('SELECT * FROM USER WHERE login = :login');
            $reponse->execute([':login' => $_POST['login']]);
            $user = $reponse->fetch();
            $reponse->closeCursor(); // Termine le traitement de la requête

            if($user){
                $errorMessage = "Le login ".$_POST['login']." existe déjà...";
            }
            else {
                // ici faire l'insert en db
                $reponse = $bdd->prepare('INSERT INTO user SET login = :login, password = :password, email = :email');
                $reponse->execute([':login' => $_POST['login'], ':password' => password_hash($_POST['password'], PASSWORD_DEFAULT), ':email' => $_POST['email']]);
                $reponse->closeCursor(); // Termine le traitement de la requête
                $_SESSION['login'] = $_POST['login'];
                $_SESSION['message'] = "Bienvenue ".$_POST['login'];
                header("Location:".ROOT_PATH);
                exit();
            }
        }
    }
    else
    {
        //Ici on va prévenir l'utilisateur qu'il manque quelque chose
        $errorMessage = "Tu as oublié d'encoder quelque chose...";
    }
}
include 'views/signup.php'
?>
