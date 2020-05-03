<?php
    ob_start ();
?>
<header id="head">
  <div class="container">
    <div class="row">
      <h1 class="lead">Bienvenue chez Safethings</h1>
      <p class="tagline">Protections pour la vie de tout les jours et la vie professionnelle. <a href="http://www.gettemplate.com/?utm_source=progressus&amp;utm_medium=template&amp;utm_campaign=progressus"></a></p>
      <p><a class="btn btn-default btn-lg" role="button">En savoir plus ?</a> <a class="btn btn-action btn-lg" role="button"href="<?=ROOT_PATH?>article">Voir nos articles</a></p>
    </div>
  </div>
</header>
<!-- /Header -->

<!-- Intro -->
<div class="container text-center">
  <br> <br>
  <h2 class="thin">Le meilleur endroit pour commander en toute sécurité.</h2>
  <p class="text-muted">
    Safethings propose les meilleurs produits répondant à la règlementation E.P.I. et normes CE.

Notre entière liberté de choix nous permet de sélectionner les articles de qualité aux prix les plus justes.

Une équipe dynamique et compétente vous guide et assure un service efficace pour vous donner satisfaction.

Notre gamme répond à la demande de l'INDUSTRIE, du BATIMENT, des LABORATOIRES,...

Des secteurs d'activité sont traités en particulier: Services "INCENDIE"-"FORESTIER"-"NUCLEAIRE" etc...
  </p>
</div>
<!-- /Intro-->

<!-- Highlights - jumbotron -->
<div class="jumbotron top-space">
  <div class="container">

    <h3 class="text-center thin">Raisons de nous choisir</h3>

    <div class="row">
      <div class="col-md-3 col-sm-6 highlight">
        <div class="h-caption"> <img src="images/pouce.png" alt="" width="70"> <br> <h4>Ne sortez plus de chez vous.</h4></div>
        <div class="h-body text-center">
          <p>Grâce à notre système de commande vous pouvez vous proteger tout en restant chez vous.</p>
        </div>
      </div>
      <div class="col-md-3 col-sm-6 highlight">
        <div class="h-caption"><h4><img src="images/pouce.png" alt="" width="70"><br> Large gamme.</h4></div>
        <div class="h-body text-center">
          <p>Une large et diverse gamme de produits vous est disponible.</p>
        </div>
      </div>
      <div class="col-md-3 col-sm-6 highlight">
        <div class="h-caption"><h4><img src="images/pouce.png" alt="" width="70"><br> La sécurité avant tout.</h4></div>
        <div class="h-body text-center">
          <p>La sécurité de tous reste une prioritée , surtout de nos jours.</p>
        </div>
      </div>
      <div class="col-md-3 col-sm-6 highlight">
        <div class="h-caption"><h4><img src="images/pouce.png" alt="" width="70"><br> Support utilisateur.</h4></div>
        <div class="h-body text-center">
          <p>Vous serez entouré de notre équipe pour vous garantir la meilleur expérience possible. </p>
        </div>
      </div>
    </div> <!-- /row  -->

  </div>
</div>
<?php
$title="Bienvenue";
$content=ob_get_clean();
include 'includes/template.php';
?>
