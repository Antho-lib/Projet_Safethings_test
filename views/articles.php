<?php ob_start() ?>
    <div class="cadre_photo">

      <?php if($_SESSION['id_role']!=2):?>
        <a href="<?=ROOT_PATH?>user_edit" class="add_article" type="button" >Ajouter un article</a>
      <?php else:?>
        <a href="<?=ROOT_PATH?>single_user" class="titre_view_casual" type="button" >Voici l'ensemble de nos articles</a>
        <?php endif?>
    <?php foreach($article as $row2):?>

              <br>
              <?=$row2['titre']?>




              <div>
                    <img src="<?php echo ROOT_PATH.'img/articles_photo/'.$row2['path']?>" alt="photo_ici" width='200' />
              </div>
              <h5><?='Prix: '.$row2['prix'].'€'?></h5>
              <p><?='Description: '.$row2['description']?></p>


              <?php if($_SESSION['id_role']!=2):?>
                <a href="<?=ROOT_PATH?>user_edit" class="favorite styled" type="button" >Modifier l'article</a>
              <?php else:?>
                <a href="<?=ROOT_PATH.'article/'.$article_solo['titre']?>">Voir le détail</a>
                <br>
                <?php endif?>



    <?php endforeach?>
    </div>
<?php
$titre="Les articles";
$contenu = ob_get_clean();
include 'includes/template.php';
?>
