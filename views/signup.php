<?php ob_start() ?>
<div id="titre_signup">
  <p>Inscription</p>
</div>
<form  method="POST">
    <div class="form-example">
        <label for="idlogin">Login</label>
        <input type="text" class="form-example" id="idlogin" name="login">
    </div>
    <div class="form-example">
        <label for="idemail">Email</label>
        <input type="email" class="form-example" id="idemail" name="email">
    </div>
    <div class="form-example">
        <label for="idpassword">Password</label>
        <input type="password" class="form-example" id="idpassword" name="password">
    </div>
    <div class="form-example">
        <label for="idconfirmpassword">Confirm password</label>
        <input type="password" class="form-example" id="idconfirmpassword" name="confirm_password">
    </div>
    <button class="subco" type="submit">Submit</button>
</form>
<?php
$titre = ob_get_clean();
$contenu = "<div id=\"adv_signup\"<h3></h3>";
include("includes/template.php");
?>
