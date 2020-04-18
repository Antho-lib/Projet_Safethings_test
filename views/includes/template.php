<!DOCTYPE html>
<html lang="fr">
	<head>
		<meta charset="utf-8">
		<meta name="description" content="">
		<link rel="stylesheet" href="Public/css/style.css" media="all">
		<title>Safethings </title>
	</head>
	<body>



		<header>


			<nav>



				<li><a href="<?=ROOT_PATH?>">Acceuil</a></li>
				<li><a href="<?=ROOT_PATH?>articles">Produits</a></li>
				<li><a href="<?=ROOT_PATH?>">Infos</a></li>
				<li><a href="#contactanc">Contacts</a></li>






			</nav>

		</header>





		<main>
			<div id="intro">
				<img src="img/fond/fnd3.jpg" alt="Banniere">
				<div id="titre">
					<?php echo $titre ; ?>


				</div>
			</div>

			<?php
			if(!empty($errorMessage)){
				    include('error.php');
				}
				if(!empty($_SESSION['message'])){
				    include('message.php');
				    unset($_SESSION['message']);
				}
			?>

			<div id="banvert">
				<?php echo $contenu ; ?>
			</div>



			<div id="barresrouge">

			</div>




			<div id="localisation">
				<img src="img/fond/fnd3.jpg" alt="Banniere localisation">
				<div id="titrelocalisation">
					<h2>Livraison partout dans le monde</h2>
					<h3>Passez vos commandes 24h/24 7j/7</h3>

				</div>
			</div>



			<div id="barresrougebas">
				<img src="img/fond/barres.png" alt="barres de séparation" id="barresbas">
			</div>



		</main>





		<footer>
<div id="contactanc"> </div>
			<div class="contact"><b><h3>CONTACT</h3></b>
				<h4>Mail:vdw.anthonylib@gmail.com </h4>
				<h4>Tel:0492789234 </h4>

			</div>


			<br>
			<div class="mention">
				<p><h4><br>Conditions d'utilisation</h4></p>
				<p><h4><br>Mentions légales</h4></p>
				<p><h4><br>Politique de confidentialité</h4></p>
			</div>
		</footer>
	</body>
</html>
