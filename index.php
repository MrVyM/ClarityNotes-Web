<?php require 'header.php'; ?>

<!--====================================
=            Hero Section            =
=====================================-->
<section class="section gradient-banner">
	<div class="shapes-container">
		<div class="shape" data-aos="fade-down-left" data-aos-duration="1500" data-aos-delay="100"></div>
		<div class="shape" data-aos="fade-down" data-aos-duration="1000" data-aos-delay="100"></div>
		<div class="shape" data-aos="fade-up-right" data-aos-duration="1000" data-aos-delay="200"></div>
		<div class="shape" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="200"></div>
		<div class="shape" data-aos="fade-down-left" data-aos-duration="1000" data-aos-delay="100"></div>
		<div class="shape" data-aos="fade-down-left" data-aos-duration="1000" data-aos-delay="100"></div>
		<div class="shape" data-aos="zoom-in" data-aos-duration="1000" data-aos-delay="300"></div>
		<div class="shape" data-aos="fade-down-right" data-aos-duration="500" data-aos-delay="200"></div>
		<div class="shape" data-aos="fade-down-right" data-aos-duration="500" data-aos-delay="100"></div>
		<div class="shape" data-aos="zoom-out" data-aos-duration="2000" data-aos-delay="500"></div>
		<div class="shape" data-aos="fade-up-right" data-aos-duration="500" data-aos-delay="200"></div>
		<div class="shape" data-aos="fade-down-left" data-aos-duration="500" data-aos-delay="100"></div>
		<div class="shape" data-aos="fade-up" data-aos-duration="500" data-aos-delay="0"></div>
		<div class="shape" data-aos="fade-down" data-aos-duration="500" data-aos-delay="0"></div>
		<div class="shape" data-aos="fade-up-right" data-aos-duration="500" data-aos-delay="100"></div>
		<div class="shape" data-aos="fade-down-left" data-aos-duration="500" data-aos-delay="0"></div>
	</div>
	<div class="container">
		<div class="row align-items-center">
			<div class="col-md-6 order-2 order-md-1 text-center text-md-left">
				<h1 class="text-white font-weight-bold mb-4">Avec ClarityNotes, partagez vos notes !</h1>
				<p class="text-white mb-5">Créer, rédiger, visionner, partager, organiser et supprimer des notes n'a jamais été aussi simple avec ClarityNotes. Rejoignez notre communauté.</p>
				<a href="404.html" class="btn btn-main-md">Télécharger maintenant</a>
			</div>
			<div class="col-md-6 text-center order-1 order-md-2">
				<img class="img-fluid" src="images/mobile.png" alt="screenshot">
			</div>
		</div>
	</div>
</section>
<!--====  End of Hero Section  ====-->

<section class="section pt-0 position-relative pull-top">
	<div class="container">
		<div class="rounded shadow p-5 bg-white">
			<div class="row">
				<div class="col-lg-4 col-md-6 mt-5 mt-md-0 text-center">
					<i class="ti-world text-primary h1"></i>
					<h3 class="mt-4 text-capitalize h5 ">Connectivité</h3>
					<p class="regular text-muted">Accédez à vos notes partout dans le monde, et partagez les avec les autres utilisateurs en toute simplicité.</p>
				</div>
				<div class="col-lg-4 col-md-6 mt-5 mt-md-0 text-center">
					<i class="ti-lock text-primary h1"></i>
					<h3 class="mt-4 text-capitalize h5 ">Stockage sécurisée</h3>
					<p class="regular text-muted">Les données de nos utilisateurs sont stockées sur une base de données MySQL sécurisée par nos soins.</p>
				</div>
				<div class="col-lg-4 col-md-12 mt-5 mt-lg-0 text-center">
					<i class="ti-email text-primary h1"></i>
					<h3 class="mt-4 text-capitalize h5 "><a href="contact.php">Service client</a></h3>
					<p class="regular text-muted">Vous rencontrez un soucis ? Vous avez une question ? Vous avez découvert un bug ? Contactez notre service client.</p>
					</p>
				</div>
			</div>
		</div>
	</div>
</section>

<section class="call-to-action-app section bg-overleaf">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<h2>Consultez nos documents.</h2>
				<p>Visionnez et téléchargez notre cahier des charges et nos rapports de soutenance.</p>
				<ul class="list-inline">
					<li class="list-inline-item">
						<a href="pdf/cdc.pdf" class="btn btn-rounded-icon">
							<i class="ti-folder"></i>
							CDC
						</a>
					</li>
					<li class="list-inline-item">
						<a href="pdf/soutenance_one.pdf" class="btn btn-rounded-icon">
							<i class="ti-folder"></i>
							Soutenance 1
						</a>
					</li>
					<li class="list-inline-item">
						<a href="pdf/soutenance_two.pdf" class="btn btn-rounded-icon">
							<i class="ti-folder"></i>
							Soutenance 2
						</a>
					</li>
					<li class="list-inline-item">
						<a href="pdf/soutenance_three.pdf" class="btn btn-rounded-icon">
							<i class="ti-folder"></i>
							Soutenance 3
						</a>
					</li>
				</ul>
			</div>
		</div>
	</div>
</section>

<section class="contact-form section-contact-page">
	<div class="container">
		<div class="row">
			<div class="col-12">
				<h2 class="mb-5 text-center">Activez votre abonnement Premium</h2>
			</div>
			<div class="col-12">
				<form method="post" action="">
					<div class="row">
						<div class="col-md-6 mb-2">
							<input class="form-control main" type="text" name="username" placeholder="Nom d'utilisateur" required>
						</div>
						<div class="col-md-6 mb-2">
							<input class="form-control main" type="password" name="password" placeholder="Mot de passe" required>
						</div>
						<div class="col-12 text-center">
							<button class="btn btn-main-md">Envoyer</button>
						</div>
					</div>
				</form>
				<?php
				if ($_SERVER["REQUEST_METHOD"] == "POST") {
					$username = $_POST["username"]; 
					$password = $_POST["password"];
					if (!isset($username, $password)){
						die("Le formulaire n'a pas été correctement renseigné.");
					}
					$db = new PDO('mysql:host=83.150.217.50;dbname=clarity_notes', 'root', 'tAP4kN4SLEpit@');
					$sqlQuery = "UPDATE users SET premium=1 WHERE username=? AND hashPassword=?;";
					$db->prepare($sqlQuery)->execute([$username, hash('sha256', $password)]);
					{
					?>
					<br>
					<p class="text-center">Dans le cas où vos identifiants sont corrects, vous bénéficez désormais de l'offre Premium.</p>
					<?php
					}
				}
				?>
			</div>
		</div>
	</div>
</section>

<section class="call-to-action-app section bg-blue">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<h2>Il est temps de nous rejoindre !</h2>
				<p>Téléchargez ClarityNotes et rejoignez notre communauté.
					<br>Vous ne regretterez pas.</p>
				<ul class="list-inline">
					<li class="list-inline-item">
						<a href="404.html" class="btn btn-rounded-icon">
							<i class="ti-apple"></i>
							iPhone
						</a>
					</li>
					<li class="list-inline-item">
						<a href="404.html" class="btn btn-rounded-icon">
							<i class="ti-android"></i>
							Android
						</a>
					</li>
					<li class="list-inline-item">
						<a href="404.html" class="btn btn-rounded-icon">
							<i class="ti-microsoft-alt"></i>
							Windows
						</a>
					</li>
				</ul>
			</div>
		</div>
	</div>
</section>

<!--==================================
=            Feature Grid            =
===================================-->
<section class="feature section pt-0">
	<div class="container">
		<div class="row">
			<div class="col-lg-6 ml-auto justify-content-center">
				<!-- Feature Mockup -->
				<div class="image-content" data-aos="fade-right">
					<img class="img-fluid" src="images/feature/feature-new-01.jpg" alt="iphone">
				</div>
			</div>
			<div class="col-lg-6 mr-auto align-self-center">
				<div class="feature-content">
					<!-- Feature Title -->
					<h2>Améliorez votre productivité et soyez organisé.</h2>
					<!-- Feature Description -->
					<p class="desc">ClarityNotes regorge de nombreuses fonctionnalités permettant à ses utilisateurs de gagner en productivité et en organisation.
						Créer, ainsi qu'utiliser des répertoires en quelques clics est à porter de mains de tous. Vous pouvez ainsi ranger et organiser vos notes par thématiques.
					</p>
				</div>
				<!-- Testimonial Quote -->
				<div class="testimonial">
					<p>
						"Depuis que j'ai découvert et que j'utilise ClarityNotes, ma productivité et mon organisation n'ont jamais cessé de croître !"
					</p>
					<ul class="list-inline meta">
						<li class="list-inline-item">
							<img src="images/testimonial/feature-testimonial-thumb.jpg" alt="">
						</li>
						<li class="list-inline-item">Bob Planchet</li>
					</ul>
				</div>
			</div>
		</div>
	</div>
</section>

<?php require 'footer.php'; ?>