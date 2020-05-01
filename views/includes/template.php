<!DOCTYPE html>
<html lang="fr">
<head>
	<meta charset="utf-8">
	<meta name="viewport"    content="width=device-width, initial-scale=1.0">
	<meta name="description" content="">
	<meta name="author"      content="Anthony Liberto">

	<title>Safethings / Protections pour tout le monde.</title>

	<link rel="shortcut icon" href="assets/images/gt_favicon.png">

	<link rel="stylesheet" media="screen" href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,700">
	<link rel="stylesheet" href="<?=ROOT_PATH?>public/css/bootstrap.min.css">
	<link rel="stylesheet" href="<?=ROOT_PATH?>public/css/font-awesome.min.css">

	<!-- Custom styles for our template -->
	<link rel="stylesheet" href="<?=ROOT_PATH?>public/css/bootstrap-theme.css" media="screen" >
	<link rel="stylesheet" href="<?=ROOT_PATH?>public/css/main.css">

	<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
	<!--[if lt IE 9]>
	<script src="assets/js/html5shiv.js"></script>
	<script src="assets/js/respond.min.js"></script>
	<![endif]-->
</head>

<body class="home">
	<!-- Fixed navbar -->
	<div class="navbar navbar-inverse navbar-fixed-top headroom" >
		<div class="container">
			<div class="navbar-header">
				<!-- Button for smallest screens -->
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse"><span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
				<a class="navbar-brand" href="<?=ROOT_PATH?>"><img src="<?=ROOT_PATH?>public/images/logo.png" alt="Logo" width="80" height="80"></a>
			</div>
			<div class="navbar-collapse collapse">
				<ul class="nav navbar-nav pull-right">
					<li class="active"><a href="<?=ROOT_PATH?>">Acceuil</a></li>
					<li><a href="<?=ROOT_PATH?>article">Nos articles</a></li>
					<li><a href="<?=ROOT_PATH?>about">A propos </a>

					</li>
					<li><a href="contact.html">Contact</a></li>
					<?php if(empty($_SESSION['user'])):?>
					<li><a class="btn" href="<?=ROOT_PATH?>inscription">Inscription</a></li>

          <li><a class="btn" href="<?=ROOT_PATH?>login">Connection</a></li>
					<?php elseif($_SESSION['user']=="admin"):?>
						<li><a class="btn" href="<?=ROOT_PATH?>admin">Administration</a></li>
						<li><a class="btn" href="<?=ROOT_PATH?>membres">Gestion des membres</a></li>
						<li><a class="btn" href="<?=ROOT_PATH?>statistique">Statistique</a></li>
						<li><a class="btn" href="<?=ROOT_PATH?>logout">Deconnection</a></li>
						<?php else:?>
						<li><a class="btn" href="<?=ROOT_PATH?>membres">Mon compte</a></li>
						<li><a class="btn" href="<?=ROOT_PATH?>shopping_cart">E-shop</a></li>
						<li><a class="btn" href="<?=ROOT_PATH?>commande">Mes commandes</a></li>
						<li><a class="btn" href="<?=ROOT_PATH?>logout">Se deconnecter</a></li>
				</ul>
				<span class="oi oi-aperture" title="icon name" aria-hidden="true" alt="connected"></span>
            <?php endif?>
			</div><!--/.nav-collapse -->
		</div>
	</div>

        <?php
            echo $content
        ?>
        <!-- Code test pour le bootstrap -->
            <!-- <div class="card w-50 p-3">
            <div class="card-body">
                <h5 class="card-title">Hello world</h5>
                <p class="card-text">Content</p>
            </div> -->
        <!--  -->
        </div>

        <section id="social">
          <div class="container">
            <div class="wrapper clearfix">
              <!-- AddThis Button BEGIN -->
              <div class="addthis_toolbox addthis_default_style">
              <a class="addthis_button_facebook_like" fb:like:layout="button_count"></a>
              <a class="addthis_button_tweet"></a>
              <a class="addthis_button_linkedin_counter"></a>
              <a class="addthis_button_google_plusone" g:plusone:size="medium"></a>
              </div>
              <!-- AddThis Button END -->
            </div>
          </div>
        </section>
        <!-- /social links -->


        <footer id="footer" class="top-space">

          <div class="footer1">
            <div class="container">
              <div class="row">

                <div class="col-md-3 widget">
                  <h3 class="widget-title">Contact</h3>
                  <div class="widget-body">
                    <p>0492/89.72.34<br>
                      <a href="mailto:#">vdw.anthonylib@gmail.com</a><br>
                      <br>

                    </p>
                  </div>
                </div>

                <div class="col-md-3 widget">
                  <h3 class="widget-title">Suivez nous !</h3>
                  <div class="widget-body">
                    <p class="follow-me-icons">
                      <a href=""><i class="fa fa-twitter fa-2"></i></a>
                      <a href=""><i class="fa fa-dribbble fa-2"></i></a>
                      <a href=""><i class="fa fa-github fa-2"></i></a>
                      <a href=""><i class="fa fa-facebook fa-2"></i></a>
                    </p>
                  </div>
                </div>

                <div class="col-md-6 widget">
                  <h3 class="widget-title">Informations utiles.</h3>
                  <div class="widget-body">
                    <p>Toute marchandise non conforme sera remboursée dans les plus brefs délais avec une réduction de 10% sur le prochain achat.</p>
                    <p>Le bien être de nos clients passe avant tout.</p>
                  </div>
                </div>

              </div> <!-- /row of widgets -->
            </div>
          </div>

          <div class="footer2">
            <div class="container">
              <div class="row">

                <div class="col-md-6 widget">
                  <div class="widget-body">
                    <p class="simplenav">
                      <a href="#">Acceuil</a> |
                      <a href="about.html">A propos</a> |
                      <a href="sidebar-right.html">Sidebar</a> |
                      <a href="contact.html">Contact</a> |
                      <b><a href="signup.html">Inscription</a></b>
                    </p>
                  </div>
                </div>

                <div class="col-md-6 widget">
                  <div class="widget-body">
                    <p class="text-right">
                      Copyright &copy; 2020, A.Liberto
                    </p>
                  </div>
                </div>

              </div> <!-- /row of widgets -->
            </div>
          </div>

        </footer>





        <!-- JavaScript libs are placed at the end of the document so the pages load faster -->

      </body>
      </html>
