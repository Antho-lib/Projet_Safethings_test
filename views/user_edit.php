<?php
ob_start()
?>
<?php print_r($users) ?>

<form method="POST">
    <div class="form-group">
        <label for="idlogin">Login</label>
        <input type="text"   value="<?=$_SESSION['login']?>" readonly>
    </div>
    <div class="form-group">
        <label for="idemail">Email</label>
        <input type="email"   value="<?= $_SESSION['email']?>">
    </div>
    <div class="form-group">
        <label for="idpassword">Password</label>
        <input type="password" class="form-control" id="idpassword" name="password">
    </div>
    <div class="form-group">
        <label for="idconfirmpassword">Confirm password</label>
        <input type="password" class="form-control" id="idconfirmpassword" name="confirm_password">
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
    <?php foreach($users as $user):?>
		<tr>
		<?php foreach($user as $row):?>
				<td><?=$row?></th>
		<?php endforeach?>
		<td><a href="<?=ROOT_PATH?>user_edit?modify<?=$user['username']?>">Modifier</a></td>
		<td><a href="<?=ROOT_PATH?>user_edit?delete=<?=$user['username']?>">Supprimer</a></td>
		</tr>
	<?php endforeach?>
</form>
<?php
$titre = "Gestion des membres";
$contenu = ob_get_clean();
include 'includes/template.php';
?>
