<?php require 'header.php'; ?>

<section class="section-contact-page page-title">
	<div class="container">
		<div class="row">
			<div class="col-sm-8 m-auto">
				<h1>Contactez-nous</h1>
				<p>La société ClarityNotes est composé d'un service client performant et répondant à toutes demandes en moins de 24 heures. Envoyez-nous un mail et nous vous répondrons.</p>
			</div>
		</div>
	</div>
</section>

<section class="contact-form section-contact-page">
	<div class="container">
		<div class="row">
			<div class="col-12">
				<h2 class="mb-5 text-center">Contactez le service client par mail</h2>
			</div>
			<div class="col-12">
				<form method="post" action="">
					<div class="row">
						<div class="col-md-6 mb-2">
							<input class="form-control main" type="text" name="name" placeholder="Nom" required>
						</div>
						<div class="col-md-6 mb-2">
							<input class="form-control main" type="email" name="email" placeholder="Adresse mail" required>
						</div>
						<div class="col-md-12 mb-2">
							<input class="form-control main" type="text" name="subject" placeholder="Sujet" required>
						</div>
						<div class="col-md-12 mb-2">
							<textarea class="form-control main" name="content" rows="10" placeholder="Contenu du mail"></textarea>
						</div>
						<div class="col-12 text-right">
							<button class="btn btn-main-md">Envoyer</button>
						</div>
					</div>
				</form>
				<?php
				if ($_SERVER["REQUEST_METHOD"] == "POST") {
					$name = $_POST["name"]; 
					$email = $_POST["email"];
					$subject = $_POST["subject"];
					$content = $_POST["content"];
					if (!isset($name, $email, $subject, $content)){
						die("Le formulaire n'a pas été correctement renseigné.");
					}
					$db = new PDO('mysql:host=83.150.217.50;dbname=clarity_notes', 'root', 'tAP4kN4SLEpit@');
					$sqlQuery = "INSERT INTO contact_website(name, email, subject, content) VALUES(?, ?, ?, ?);";
					$db->prepare($sqlQuery)->execute([$name, $email, $subject, $content]);
					{
					?>
					<p class="text-center">Le formulaire a été envoyé à notre service client.</p>
					<?php
					}
				}
				?>
			</div>
		</div>
	</div>
</section>

<?php require 'footer.php'; ?>