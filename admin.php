<?php
session_start();
if(empty($_SESSION['login'])){
    header("Location: login.php");
    exit();
}
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
$reponse = $bdd->query('SELECT * FROM USER');
$users = $reponse->fetchAll();
$reponse->closeCursor(); // Termine le traitement de la requête

ob_start()?>
<h3>Liste des utilisateurs</h3>
<table class="table">
  <thead>
    <tr>
      <th scope="col">Identifiant</th>
      <th scope="col">Login</th>
      <th scope="col">Email</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
<?php foreach($users as $user):?>
    <tr>
      <th scope="row"><?= $user['id'] ?></th>
      <td><?= $user['login'] ?></td>
      <td><?= $user['email'] ?></td>
      <td>
          <a href="account.php?login=<?= $user['login']?>" class="favorite styled" type="button">Voir<a>
          <a href="edit.php?login=<?= $user['login']?>" class="favorite styled" type="button">Editer<a>
          <?php if($_SESSION['login'] != $user['login']):?>
            <!-- Button trigger modal -->

              <a href="delete.php?login=<?= $user['login']?>" class="favorite styled" type="button">Supprimer<a>





          <?php endif?>
      </td>
    </tr>
<?php endforeach ?>
  </tbody>
</table>
<?php
$titre = "Administration";
$contenu = ob_get_clean();
include('template.php');
?>
