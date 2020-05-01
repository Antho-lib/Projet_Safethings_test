<?php ob_start() ?>
<header id="head">
  <div class="container">
    <div class="row">
      <h1 class="lead">Cet article coute  <?= $item['produit_price'].'€'?>   pièce.</h1>
      <br>
      <p> <a class="btn btn-action btn-lg" role="button" href="<?=ROOT_PATH?>article">Retour sur le catalogue.</a></p>

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
        <dt class="col-sm-2">Référence produit</dt>
        <dd class="col-sm-10"><?= $item['id_produit']?></dd>
        <dd class="col-sm-10"><img src="<?php echo ROOT_PATH.'images/'.$item['produit_image'] ?>" alt="myPic"  width="250" ></dd>
    </dl>
</div>

<?php
$title=$item['produit_name'];
$content = ob_get_clean();
include 'includes/template.php';
?>
