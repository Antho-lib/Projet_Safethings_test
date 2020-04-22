<?php
require 'models/users.php';
if($_SESSION['id_role'] == 1){
$usersolo=getUserById($id);
}

if($_SESSION['id_role'] == 2){
$users = getAllUsers();

// On transforme l'id_role de l'user pour qu'il soit plus explicite
// Je ne dois pas vérifier qu'un role_id, c'est un champ not nul en db et une personne au moins doit être enregistrée pour avoir accès au menu edit_users
foreach($users as &$user){
	if($user['id_role']==1){
		$user['id_role']="Administrateur";
	}else{
		$user['id_role']="Utilisateur";
	}
}
unset($user);


if(!empty($_GET['delete'])){
	if($_SESSION['login']!= $_GET['delete']){
		deleteUser($_GET['delete']);
		header("Location: user_edit");
		exit();
	}else{
		$errorMessage = "Vous ne pouvez pas supprimer votre propre compte";
	}
 }
}
include 'views/user_edit.php';
?>
