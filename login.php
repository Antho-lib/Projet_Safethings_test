<?php
session_start();
if(!empty($_SESSION['login'])){
    header("Location: index.php");
    exit();
}
if(!empty($_POST)) {
    if(!empty($_POST['login']) && !empty($_POST['password']))
    {

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
        $reponse = $bdd->prepare('SELECT * FROM USER WHERE login = :login');
        $reponse->execute([':login' => $_POST['login']]);
        $user = $reponse->fetch();
        $reponse->closeCursor(); // Termine le traitement de la requête
        //Ici on va vérifier si le login/pass est bon
        if($user && password_verify($_POST['password'], $user['password'] ))
        {
            //Authentification OK
            $_SESSION['login'] = $_POST['login'];
            $_SESSION['message'] = "Bienvenue ".$_POST['login'];
            header("Location: index.php");
            exit();
        }
        else
        {
            //Authentification NOK
            $errorMessage = "Mauvais login/password";
        }
    }
    else
    {
        //Ici on va prévenir l'utilisateur qu'il manque quelque chose
        $errorMessage = "Tu as oublié d'encoder quelque chose...";
    }
}
ob_start()?>
<form action="login.php" method="POST">
    <div class="form-example">
        <label for="idlogin">Login</label>
        <input type="text" class="form-example" id="idlogin" name="login">
    </div>
    <div class="form-example">
        <label for="idpassword">Password</label>
        <input type="password" class="form-example" id="idpassword" name="password">
    </div>
    <button class="subco" type="submit">Submit</button>
</form>

<?php
$titre = "Se connecter";
$contenu = ob_get_clean();
$categories = ob_get_clean();

include("template.php");
?>
