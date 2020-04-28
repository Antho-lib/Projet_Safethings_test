<?php
    ob_start();
?>
    <?php
        if(isset($_POST['user'])&&!empty($_POST['user'])){
            echo '<div class="alert alert-success" role="alert">'.'Bienvenue : '.$_SESSION['user'].'</div>';
        }
    ?>
<div class="jumbotron">
<h1 class="display-4">Connection</h1>
    <form method="POST" >
        <div class="form-group">
            <label for="exampleInputLogin">Login</label>
            <input type="text" class="form-control" aria-describedby="Login_user" placeholder="Enter login" name="user" >
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Password</label>
            <input type="password" class="form-control" placeholder="Password" name="mot_de_passe" >
        </div>
        <button type="submit" class="btn btn-primary" name="login">Login</button>

    </form>
</div>
<?php
    $title= "Connection";
    $content = ob_get_clean();
    include 'includes/template.php';
?>
