<?php ob_start() ?>
<body id="category">
	<!-- Bannière de page, pas dans le template c'est voulu -->
	<section class="banner-area organic-breadcrumb">
		<div class="container">
			<div class="breadcrumb-banner d-flex flex-wrap align-items-center justify-content-end">
				<div class="col-first">
					<h1>Administration Safethings</h1>
					<nav class="d-flex align-items-center">
						<a href="<?=ROOT_PATH?>">Accueil<span class="lnr lnr-arrow-right"></span></a>
						<a href="#">Administration<span class="lnr lnr-arrow-right"></span></a>
						<a href="#">Gestion membres</a>
					</nav>
				</div>
			</div>
		</div>
	</section>
	<section>
		<div class="containerAdmin">
			<table class="table">
				<thead class="thead-dark">
					<tr>
						<th scope="col">Pseudo</th>
						<th scope="col">Mot de passe (crypté)</th>
						<th scope="col">Adresse Email</th>
						<th scope="col">ID utilisateur</th>
						<th scope="col">Role utilisateur</th>

					</tr>
				</thead>
				<tbody>
				<?php foreach($users as $user):?>
					<tr>
					<?php foreach($user as $row):?>
						<td><?=$row?></th>
					<?php endforeach?>
					<td><a href="<?=ROOT_PATH?>user_edit?modify<?=$user['login']?>">Modifier</a></td>
					<td><a href="<?=ROOT_PATH?>user_edit?delete=<?=$user['login']?>">Supprimer</a></td>
					</tr>
				<?php endforeach?>
			</table>
		</div>
	</section>
</body>
<?php
$titre = "Gestion membres";
$contenu = ob_get_clean();
include("includes/template.php");
?>
