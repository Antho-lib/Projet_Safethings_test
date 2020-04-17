<?php ob_start() ?>
Désolé, la page <b><?=$_SERVER['REQUEST_URI']?></b> n'existe pas...
<?php
$titre = '404';
$contenu = ob_get_clean();
include 'includes/template.php';
?>
