<?php ob_start()?>




<dl>
    <dt>Nom</dt>
    <dd><?= $article['nom']?></dd>

    <dt>Description</dt>
    <dd><?= $article['description']?></dd>

    <dt>Origine</dt>
    <dd><?= $article['origine']?></dd>

    <dt>Prix</dt>
    <dd><?= $article['prix']?> €</dd>


</dl>
  <?php
  $titre =$article['nom'];
  $contenu = ob_get_clean();
  include 'includes/template.php';
  ?>
