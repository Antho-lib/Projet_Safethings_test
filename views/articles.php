<?php ob_start() ?>
    <div class="cadre_photo">

    <?php foreach($article as $row2):?>


              <?=$row2['titre']?>


              <h5><?=$row2['prix'].'€'?></h5>
              <p><?=$row2['description']?></p>
              <div>
                    <img  src="<?=ROOT_PATH.'img/articles_photo/'.$row2['path']?>" alt="photo_ici">
              </div>
              <a href="<?=ROOT_PATH.'article/'.$row2['titre']?>">Voir le détail</a>



    <?php endforeach?>
    </div>
<?php
$titre="Les articles";
$contenu = ob_get_clean();
include 'includes/template.php';
?>
