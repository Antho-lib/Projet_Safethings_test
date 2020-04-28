<?php ob_start() ?>

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
