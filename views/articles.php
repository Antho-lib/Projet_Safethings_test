<?php ob_start() ?>
<!-- <?php echo print_r($list) ?> -->
<header id="head">
  <div class="container">
    <div class="row">
      <h1 class="lead">Safething</h1>
      <p class="tagline">Protections pour la vie de tout les jours et la vie professionnelle. <a href="http://www.gettemplate.com/?utm_source=progressus&amp;utm_medium=template&amp;utm_campaign=progressus"></a></p>
      <p><a class="btn btn-default btn-lg" role="button">En savoir plus ?</a> <a class="btn btn-action btn-lg" role="button">Voir nos articles</a></p>
    </div>
  </div>
</header>
    <?php foreach($list as $article):?>
        <div class="card text-center " >
          <div class="card-header">
              <?=$article['produit_name']?>
          </div>
          <div class="card-body">
              <h5 class="card-title"><?=$article['produit_price'].'€'?></h5>
              <p class="card-text"><?=$article['produit_description']?></p>
              <div>
                    <img src="<?php echo ROOT_PATH.'images/'.$article['produit_image']?>" alt="myPic" width='200' />
              </div>
              <a href="<?=ROOT_PATH.'article/'.$article['produit_name']?>" class="btn btn-primary">Voir le détail</a>
          </div>
        </div>
    <?php endforeach?>
    
<?php
$title="Les articles";
$content = ob_get_clean();
include 'includes/template.php';
?>
