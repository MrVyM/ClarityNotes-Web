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
				<form action="">
					<div class="row">
						<div class="col-md-6 mb-2">
							<input class="form-control main" type="text" placeholder="Nom" required>
						</div>
						<div class="col-md-6 mb-2">
							<input class="form-control main" type="email" placeholder="Adresse mail" required>
						</div>
						<div class="col-md-12 mb-2">
							<input class="form-control main" type="text" placeholder="Sujet" required>
						</div>
						<div class="col-md-12 mb-2">
							<textarea class="form-control main" name="message" rows="10" placeholder="Contenu du mail"></textarea>
						</div>
						<div class="col-12 text-right">
							<button class="btn btn-main-md">Envoyer</button>
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
</section>

<?php require 'footer.php'; ?>