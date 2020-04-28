<?php
    ob_start();
?>
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
