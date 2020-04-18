<?php ob_start()?>
<form  method="POST">
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
$titre = ob_get_clean();
$contenu="<div id=\"adv_log\"<h3></h3>";
include ('includes/template.php');
?>
