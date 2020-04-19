<?php ob_start() ?>
    <div class="cadre_photo">
    <?php foreach($articles as $article):?>


              <?=$article['nom']?>


              <h5><?=$article['prix']?></h5>
              <p><?=$article['description']?></p>
              <a href="<?=ROOT_PATH.'article/'.$article['nom']?>">Voir le détail</a>


    <?php endforeach?>
    </div>
<?php
$titre="Les articles";
$contenu = ob_get_clean();
include 'includes/template.php';
?>
