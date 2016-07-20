<?php include 'header.php' ?>

<div class="container" style="position:relative;">
<div class="fildAriane">
	Accueil > Contact
</div>
</div>
<section id="titreContact">
	<div class="container">
		<h1>Nous contacter</h1>
	</div>
</section>
<div class="block container">
	<section id="map">
		<div class="">
			<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2624.637742979513!2d2.333660715674623!3d48.86511787928817!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47e66e251648e071%3A0x4cbd923b46e51652!2s13+Rue+Moli%C3%A8re%2C+75001+Paris!5e0!3m2!1sfr!2sfr!4v1467880289595" width="100%" height="350" frameborder="0" style="border:0" allowfullscreen></iframe>
		</div>
	</section>
	<section id="contactForm">
		<div id="adresseContact" class="col-sm-4">
			<ul>
				<li>IFGPE</li>
				<li><i class="fa fa-location-arrow"></i>13 rue Molière 75001 Paris</li>
				<li><i class="fa fa-phone"></i>01 42 60 10 55</li>
				<li><i class="fa fa-fax"></i>01 42 60 10 50</li>
				<li><i class="fa fa-share"></i><a href="mailto:contact@ifgpe.fr">contact@igfpge.fr</a></li>
			</ul>
		</div>
		<div id="formulaireContact" class="col-sm-8">
			<h4>Laissez nous votre message</h4>
			<form action="">
				<div class="col-sm-6">
					<label for="nom">Nom<input type="text" placeholder="Votre nom" id="nom" required=""></label>
					<label for="mail">Mail<input type="mail" placeholder="Votre e-mail" id="mail" required=""></label>
					<label for="societe">Société<input type="text" placeholder="Votre société" id="societe" required=""></label>
					<label for="objet">Objet<input type="text" placeholder="L'objet du mail" id="objet" required=""></label>
				</div>
				<div class="col-sm-6">
				<label for="message" id="textareaMessage">Message<textarea name="message" id="message" placeholder="Votre message"></textarea></label>
					<input type="submit" value="Envoyer votre message">
				</div>
			</form>
		</div>
	</section>
</div>

<?php include 'footer.php' ?>