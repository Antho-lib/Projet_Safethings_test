<?php
    ob_start();
?>
<header id="head">
  <div class="container">
    <div class="row">
      <h1 class="lead">Gestion des articles</h1>
      <h2>  <a href="#ajjj" class="btn btn-default"> Ajouter/supprimer un article</a> </h2>
      <h2>  <a href="#moddd" class="btn btn-default"> Modifier un article</a> </h2>

      <p class="tagline">Seul l'admin peut y avoir accès. <a href="http://www.gettemplate.com/?utm_source=progressus&amp;utm_medium=template&amp;utm_campaign=progressus"></a></p>

    </div>
  </div>
</header>
<?php
if(empty($_SESSION['user'])){
        echo "Veuillez vous connecter";
    }else{
        echo '<div class="alert alert-success" role="alert">'.'Bonjour:'.$_SESSION['user'].'</div>';

    }
?>
<div class="jumbotron">
    <h1 class="display-4">Liste</h1>
    <?php foreach($list_produit as $article):?>
            <div class="card text-center " >
            <div class="card-header">
                <?=$article['produit_name']?>
            </div>
            <div class="card-body">
                <h5 class="card-title" name="ref" value="<?=$article['id_produit']?>">reference n°:<?=$article['id_produit']?></h5>
                <h5 class="card-title"><?=$article['produit_price'].'€'?></h5>
                <p class="card-text"><?=$article['produit_description']?></p>
                <div>
                    <img src="<?php echo ROOT_PATH.'images/'.$article['produit_image']?>" alt="myPic" width='200' />
                </div>
            </div>
    <?php endforeach?>
</div>
<!-- Editer un produit -->
<div class="jumbotron">
<h1 class="display-4">Ajout</h1>
    <h2 id="ajjj"> Ajouter un nouveau produit.</h2>
    <form method="POST" >
        <div class="form-group">
            <label >Nom du produit</label>
            <input type="text" class="form-control" aria-describedby="Login_user" placeholder="Entrer le nom" name="produit_name" >
        </div>
        <div class="form-group">
            <label >Prix</label>
            <input type="text" class="form-control" aria-describedby="Login_user" placeholder="Entrer le prix" name="produit_price" >
        </div>
        <div class="form-group">
            <label >Description</label>
            <input type="text" class="form-control" aria-describedby="Login_user" placeholder="Entrer la description" name="produit_description" >
        </div>

        <button type="submit" class="btn btn-primary" name="add">Ajouter</button>
    </form>
</div>



<div class="jumbotron">

<!-- Supprimer -->
<h1 class="display-4">Supprimer</h1>
    <h2 id="suppp"> Supprimer un produit.</h2>
    <form method="POST" >
        <div class="form-group">
            <label for="exampleInputLogin">Reference du produit a supprimer</label>
            <input type="text" class="form-control" placeholder="Entrer la reference" name="ref" >
        </div>
        <button type="submit" class="btn btn-primary" name="delete">Supprimer</button>
    </form>
</div>

<!-- Page Modifier -->
<div class="jumbotron">
    <h1 class="display-4">Modifier</h1>
   <div class="jumbotron jumbotron-fluid">
        <h2 id="moddd"> Modifier le nom d'un produit</h2>
        <form method="POST" >
            <div class="form-group">
                <label for="exampleInputLogin">Ref du produit</label>
                <input type="text" class="form-control"  placeholder="ref du produit" name="ref_nom" >
                <label for="exampleInputLogin">Nom du produit</label>
                <input type="text" class="form-control"  placeholder="Changement Nom" name="produit_name" >
            </div>
            <button type="submit" class="btn btn-primary" name="modifier_nom">modifier nom</button>
        </form>
    </div>
    <div class="jumbotron jumbotron-fluid">
        <h2> Modifier un prix</h2>
        <form method="POST" >
            <div class="form-group">
                <label for="exampleInputLogin">Ref du produit</label>
                <input type="text" class="form-control"  placeholder="ref du produit" name="ref_prix" >
                <label for="exampleInputLogin">Prix</label>
                <input type="text" class="form-control" aria-describedby="Login_user" placeholder="Entrer le prix a changer" name="produit_price" >
            </div>
            <button type="submit" class="btn btn-primary" name="modifier_prix">modifier prix</button>
        </form>
    </div>
    <div class="jumbotron jumbotron-fluid">
        <h2> Modifier description</h2>
        <form method="POST" >
            <div class="form-group">
                <label for="exampleInputLogin">Ref du produit</label>
                <input type="text" class="form-control"  placeholder="ref du produit" name="ref_description" >
                <label for="exampleInputLogin">Description</label>
                <input type="text" class="form-control" aria-describedby="Login_user" placeholder="Entrer la description a changer" name="produit_description" >
            </div>
            <button type="submit" class="btn btn-primary" name="modifier_description">modifier description</button>
        </form>
    </div>
</div>

<?php
    $title = "administrateur";
    $content = ob_get_clean();
    require 'includes/template.php';
?>
