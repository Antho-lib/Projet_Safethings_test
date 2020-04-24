<?php ob_start()?>
<body id="category">
	<!-- Bannière de page, pas dans le template c'est voulu -->
	<section class="banner-area organic-breadcrumb">
		<div class="container">
			<div class="breadcrumb-banner d-flex flex-wrap align-items-center justify-content-end">
				<div class="col-first">
					<h1>Shop SAFETHINGS</h1>
					<nav class="d-flex align-items-center">
						<a href="<?=ROOT_PATH?>">Accueil<span class="lnr lnr-arrow-right"></span></a>
						<a href="<?=ROOT_PATH?>shop">Shop<span class="lnr lnr-arrow-right"></span></a>
						<a href="#">Détail article</a>
					</nav>
				</div>
			</div>
		</div>
	</section>
	<!-- article -->
	<div class ="container">
		<div class="owl-item active">
			<!-- affichage pour les users/visiteurs -->
			<div>
				<img class="img-fluid" src="<?=ROOT_PATH.$article['photo_path']?>" alt="">
			</div>
			</br>
				<h6><?=$article['prix']?>&euro;</h6>
				<h4><?=$article['titre']?></h4>
				<h5><?=$article['description']?></h5>
				<h6>Categorie: <?=$article['titre']?></h6>
				<?php if(empty($_SESSION['id']) || $_SESSION['id_role']!=1):?>
				<div class="add-bag d-flex align-items-center">
					<a class="add-btn" href="<?=ROOT_PATH?>panier?titre=<?=$article['titre']?>"><span class="lnr lnr-cross"></span></a>
					<span class="add-text text-uppercase">Ajouter au panier</span>
				</div>
				</br></br>
				<?php endif?>
				<!-- affichage pour l'admin : modification d'article -->
				<?php if(empty($_SESSION['id']) || $_SESSION['id_role']!=2):?>
				<div class="col-lg-6">
						<h3>Modifier un article</h3>
						<form class="row login_form" action="<?=ROOT_PATH?>article?titre=<?=$article['titre']?>&prix=<?=$article['prix']?>&description=<?=$article['description']?>" method="POST" id="contactForm">
							<div class="col-md-12 form-group">
								<label for="inputTitle">Titre</label>
								<input type="text" class="form-control" id="title" name="title" placeholder="<?=$article['titre']?>" onfocus="this.placeholder = ''" onblur="this.placeholder = '<?=$article['titre']?>'">
							</div>
							<div class="col-md-12 form-group">
								<label for="inputPrice">Prix</label>
								<input type="text" class="form-control" id="price" name="price" placeholder="<?=$article['prix']?>" onfocus="this.placeholder = ''" onblur="this.placeholder = '<?=$article['prix']?>'">
							</div>
							<div class="col-md-12 form-group">
								<label for="inputDesc">Description</label>
								<textarea class="form-control" id="" rows='3' name="description" placeholder="<?=$article['description']?>"></textarea>
							</div>
							 <div class="col-md-12 form-group">
								<button type="submit" class="btn btn-primary">Modifier l'article</button>
							</div>
						</form>
					</div>
			<?php endif?>
			</div>
		</div>
	</div>
</body>
<?php
$titre="Welcome";
$contenu=ob_get_clean();
include 'includes/template.php';
?>
