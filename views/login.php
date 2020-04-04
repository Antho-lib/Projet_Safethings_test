<?php ob_start()?>
<form action="login.php" method="POST">
    <div class="form-example">
        <label for="idlogin">Login</label>
        <input type="text" class="form-example" id="idlogin" name="login">
    </div>
    <div class="form-example">
        <label for="idpassword">Password</label>
        <input type="password" class="form-example" id="idpassword" name="password">
    </div>
    <button class="subco" type="submit">Submit</button>
</form>
<?php
$title = "Se connecter";
$content = ob_get_clean();
$categories = ob_get_clean()
include 'includes/template.php';
?>
