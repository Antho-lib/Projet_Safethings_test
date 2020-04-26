<?php ob_start() ?>

<?php if(isset($item))?>
<div class="card">
    <dl class="row">
        <dt class="col-sm-2">Nom</dt>
        <dd class="col-sm-10"><?= $item['titre']?></dd>
        <dt class="col-sm-2">Prix</dt>
        <dd class="col-sm-10"><?= $item['prix'].'€'?> </dd>
        <dt class="col-sm-2">Description</dt>
        <dd class="col-sm-10"><?= $item['description']?></dd>
        <dd class="col-sm-10"><img src="<?php echo ROOT_PATH.'img/articles_photo/'.$item['path'] ?>" alt="myPic"  width="250" ></dd>
    </dl>
</div>

<?php
$titre=$item['titre'];
$contenu = ob_get_clean();
include 'includes/template.php';
?>
