<?php

$titre = "Mon compte";

if($user['id'] != $_SESSION['id']) {
    $titre = "Utilisateur ".$user['login'];
}

$email = $user['email'];
$default = "https://blog.ramboll.com/fehmarnbelt/wp-content/themes/ramboll2/images/profile-img.jpg";
$size = 310;
$grav_url = "https://www.gravatar.com/avatar/" . md5( strtolower( trim( $email ) ) ) . "?d=" . urlencode( $default ) . "&s=" . $size;



ob_start()?>

<br>
Identifiant: <?= $user['id']?>
<br>
Login: <?= $user['login']?>
<br>
Email: <?= $user['email']?>
<br>
<a href="<?=ROOT_PATH?>single_user" class="bouton_edit">Editer</a>
<?php
$contenu = ob_get_clean();
include 'includes/template.php';
?>
