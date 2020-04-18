<?php
if(empty($_SESSION['login'])){
    echo '<a href="'.ROOT_PATH.'signup" class="favorite styled" type="button" >S\'inscrire</a>';
    echo '<a href="'.ROOT_PATH.'login"  class="favorite styled"  type="button" >Se connecter</a>';
}
else {
    echo '<a href="" class="favorite styled" type="button" >Mon compte</a>';
    echo '<a href="'.ROOT_PATH.'logout" class="favorite styled"  type="button" >Se déconnecter</a>';
}
?>
<?php
if(!empty($_SESSION['login']))
{
			echo'<a href="'.ROOT_PATH.'admin" class="favorite styled" type="button" >Menu d\'administration</a>';

}
?>
<?php
include 'views/welcome.php';
?>
