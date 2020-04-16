<?php  ob_start() ?>


<?php

$categories= " <div class=\"title_at_w\">
              <h2>Voici ce que nous proposons</h2>
              </div>
<div class=\"possibilites\">
      <img src=\"img/fond/ffp3.jpg\" alt=\"Configurations\" class=\"images\">
      <h3>Protections du visage</h3>
      <div class=\"middle\">
      <div class=\"text\"><a href=\"\">Voir</a></div>
      </div>
    </div>
    <div class=\"possibilites\">
      <img src=\"img/fond/gel.jpg\" alt=\"Configurations\" class=\"images\">
      <h3>Protections des mains</h3>
      <div class=\"middle\">
      <div class=\"text\"><a href=\"\">Voir</a></div>
      </div>
    </div>

    <div class=\"possibilites\">
      <img src=\"img/fond/combi.jpg\" alt=\"Configurations\" class=\"images\">
      <h3>Protections diverses</h3>
      <div class=\"middle\">
      <div class=\"text\"><a href=\"\">Voir</a></div>
      </div>
    </div>";



$titre = "<h2>Safethings</h2>";
$contenu=ob_get_clean();

include 'includes/template.php' ;

 ?>
