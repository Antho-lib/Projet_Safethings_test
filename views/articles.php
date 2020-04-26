<?php ob_start() ?>
<!-- <?php echo print_r($list) ?> -->
    <?php foreach($list as $article):?>
        <div class="card text-center " >
          <div class="card-header">
              <?=$article['titre']?>
          </div>
          <div class="card-body">
              <h5 class="card-title"><?=$article['prix'].'€'?></h5>
              <p class="card-text"><?=$article['description']?></p>
              <div>
                    <img src="<?php echo ROOT_PATH.'img/articles_photo/'.$article['path']?>" alt="myPic" width='200' />
              </div>
              <a href="<?=ROOT_PATH.'article/'.$article['titre']?>" class="btn btn-primary">Voir le détail</a>
          </div>
        </div>
    <?php endforeach?>
    </div>
<?php
$titre="Les articles";
$contenu = ob_get_clean();
include 'includes/template.php';
?>
