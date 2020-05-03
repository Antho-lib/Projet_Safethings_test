<?php
    ob_start();
?>
<header id="head">
  <div class="container">
    <div class="row">
      <h1 class="lead">A propos de nous</h1>
      <p class="tagline">Protections pour la vie de tout les jours et la vie professionnelle. <a href="http://www.gettemplate.com/?utm_source=progressus&amp;utm_medium=template&amp;utm_campaign=progressus"></a></p>

    </div>
  </div>
</header>
<div class="jumbotron">
    <h2 class="display-4">A propos</h2>
    <p class="lead">Safethings est spécialiste en Équipement de protection individuelle (EPI). Vous bénéficirez chez nous de conseils professionnels adaptés à chaque métier. Grâce à des volumes d’achats importants, nos clients bénéficient de prix très compétitifs pour les produits nécessaires à leur protection. Un stock important nous permet d’assurer une livraison rapide dans toute la Belgique.</p>
</div>

<?php
    $title = "About la société" ;
    $content = ob_get_clean();
    include 'includes/template.php';
?>
