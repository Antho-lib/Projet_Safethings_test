<?php
    ob_start();
?>
<header id="head">
  <div class="container">
    <div class="row">
      <h1 class="lead">Gestion des membres</h1>
      <p class="tagline">Seul l'admin peut y avoir accès. <a href="http://www.gettemplate.com/?utm_source=progressus&amp;utm_medium=template&amp;utm_campaign=progressus"></a></p>

    </div>
  </div>
</header>
<?php
if(empty($_SESSION['user'])){
        echo "Veuillez vous connecter";
    }else{
        echo '<div class="alert alert-success" role="alert">'.'Connecté en tant que : '.$_SESSION['user'].'</div>';

    }
?>
<div class="jumbotron">
    <h1 class="display-4">Liste</h1>
    <?php foreach($list_data as $user):?>

            <div class="card text-center " >
            <div class="card-header">
                <?=$user['client_login']?>
            </div>
            <div class="card-body">

                <h5 class="card-title">Numéro d'identification : <?=$user['id_client']?></h5>
                <p class="card-text"><?=$user['client_email']?></p>
                <div>
                    <img class="rounded-circle mx-auto d-block img-thumbnail" src="https://www.gravatar.com/avatar/" alt="" />
                </div>
            </div>
    <?php endforeach?>
</div>
<!-- Editer un produit -->

<!-- Page ajouter image -->

<div class="jumbotron">

<!-- Supprimer -->
<h1 class="display-4">Supprimer</h1>
    <h2> Supprimer un utilisateur.</h2>
    <form method="POST" >
        <div class="form-group">
            <label for="exampleInputLogin">Numéro d'identification de l'utilisateur à supprimer (actualisez la page après avoir cliqué sur 'supprimer').</label>
            <input type="text" class="form-control" placeholder="Entrer la reference" name="refclt" >
        </div>
        <button type="submit" class="btn btn-primary" name="delete">Supprimer</button>
    </form>
</div>



<?php
    $title = "administrateur";
    $content = ob_get_clean();
    require 'includes/template.php';
?>
