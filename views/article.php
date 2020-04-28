<?php ob_start() ?>
<header id="head">
  <div class="container">
    <div class="row">
      <h1 class="lead">Articles</h1>
      <p class="tagline">Protections pour la vie de tout les jours et la vie professionnelle. <a href="http://www.gettemplate.com/?utm_source=progressus&amp;utm_medium=template&amp;utm_campaign=progressus"></a></p>
      <p><a class="btn btn-default btn-lg" role="button">En savoir plus ?</a> <a class="btn btn-action btn-lg" role="button">Voir nos articles</a></p>
    </div>
  </div>
</header>
<?php if(isset($item))?>
<div class="card">
    <dl class="row">
        <dt class="col-sm-2">Nom</dt>
        <dd class="col-sm-10"><?= $item['produit_name']?></dd>
        <dt class="col-sm-2">Prix</dt>
        <dd class="col-sm-10"><?= $item['produit_price'].'€'?> </dd>
        <dt class="col-sm-2">Description</dt>
        <dd class="col-sm-10"><?= $item['produit_name']?></dd>
        <dd class="col-sm-10"><img src="<?php echo ROOT_PATH.'images/'.$item['produit_image'] ?>" alt="myPic"  width="250" ></dd>
    </dl>
</div>

<?php
$title=$item['produit_name'];
$content = ob_get_clean();
include 'includes/template.php';
?>
