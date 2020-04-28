<?php
    ob_start();
?>
<header id="head">
  <div class="container">
    <div class="row">
      <h1 class="lead">Safething</h1>
      <p class="tagline">Merci de vouloir vous inscrire.<a href="http://www.gettemplate.com/?utm_source=progressus&amp;utm_medium=template&amp;utm_campaign=progressus"></a></p>
      <p><a class="btn btn-default btn-lg" role="button" href="<?=ROOT_PATH?>login">Déjà inscrit ? Clique ici.</a></p>
    </div>
  </div>
</header>
<div class="jumbotron">
    <h1> Inscription </h1>
    <form method="POST" >
        <div class="form-group">
            <label for="exampleInputEmail1">Email address</label>
            <input type="email" class="form-control" aria-describedby="emailHelp" placeholder="Entrer email" name="email_user" >
        </div>
        <div class="form-group">
            <label >Login</label>
            <input type="login" class="form-control" placeholder="Enter login name" name="login_user">
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Password</label>
            <input type="password" class="form-control" placeholder="Entrer un password"  name="mot_de_passe" >
        </div>
        <button type="submit" class="btn btn-primary" name="submit">Submit</button>
    </form>
</div>
<?php
$titre = "Se connecter";
$content = ob_get_clean();
include("includes/template.php");
?>
