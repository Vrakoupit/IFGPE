<?php include 'header.php' ?>

<div class="container" style="position:relative;">
<div class="fildAriane">
	Accueil > Formations en centre > Formations IT&SM
</div>
	<section class="titreCentre">
		<h1>Les formations IT & Service Management</h1>
		<div class="infoCatFormation">
			<?php include 'categorieFormationPage/IT&SM/cisco.php'; ?>
		</div>
	</section>
	<ul class="filtreFormation">
		<li class="liFiltre"><a href="formationCentre-categorieFormation.php" class="blockListFormation">Toutes les formations</a></li>
		<li class="liFiltre list-cat-1"><a href="formationCentre-categorieFormationTri1.php" class="blockListFormation">ITIL</a></li>
		<li class="liFiltre list-cat-2"><a href="formationCentre-categorieFormationTri2.php" class="blockListFormation">Business Analysis</a></li>
		<li class="liFiltre list-cat-3"><a href="formationCentre-categorieFormationTri3.php" class="blockListFormation">IBM</a></li>
		<li class="liFiltre list-cat-4 activeCat"><a href="formationCentre-categorieFormationTri4.php" class="blockListFormation">Cisco</a></li>
		<li class="liFiltre list-cat-5"><a href="formationCentre-categorieFormationTri5.php" class="blockListFormation">VMware</a></li>
	</ul>
	<section class="listeFormation">
		<ul class="containerFormation">
			<li class="paslol">
				<h4>Cisco - Titre de la formation</h4>
				<span class="catItem cat-4"></span>
				<ul class="col-sm-8">
					<li><i class="fa fa-clock-o"></i>Durée 3 jours</li>
					<li><i class="fa fa-tag"></i>Référence xxx-xxx</li>
					<li><i class="fa fa-certificate"></i>Certifiante</li>
				</ul>
				<a href="formationCentre-categorieFormation-single.php" class="col-sm-3 lienInfoFormationSingle">En savoir plus</a>
				<ul class="col-sm-8">
					<li><i class="fa fa-eur"></i>Prix xxxx.xx</li>
					<li><i class="fa fa-calendar"></i>Prochaines dates</li>
					<li><i class="fa fa-file-pdf-o"></i>PDF</li>
				</ul>
				<a href="formationCentre-categorieFormation-single.php" class="col-sm-3 lienInscriptionFormationSingle">S'inscrire à la formation</a>
			</li>
			<li class="paslol">
				<h4>Cisco - Titre de la formation</h4>
				<span class="catItem cat-4"></span>
				<ul class="col-sm-8">
					<li><i class="fa fa-clock-o"></i>Durée 3 jours</li>
					<li><i class="fa fa-tag"></i>Référence xxx-xxx</li>
					<li><i class="fa fa-certificate"></i>Certifiante</li>
				</ul>
				<a href="formationCentre-categorieFormation-single.php" class="col-sm-3 lienInfoFormationSingle">En savoir plus</a>
				<ul class="col-sm-8">
					<li><i class="fa fa-eur"></i>Prix xxxx.xx</li>
					<li><i class="fa fa-calendar"></i>Prochaines dates</li>
					<li><i class="fa fa-file-pdf-o"></i>PDF</li>
				</ul>
				<a href="formationCentre-categorieFormation-single.php" class="col-sm-3 lienInscriptionFormationSingle">S'inscrire à la formation</a>
			</li>
			<li class="paslol">
				<h4>Cisco - Titre de la formation</h4>
				<span class="catItem cat-4"></span>
				<ul class="col-sm-8">
					<li><i class="fa fa-clock-o"></i>Durée 3 jours</li>
					<li><i class="fa fa-tag"></i>Référence xxx-xxx</li>
					<li><i class="fa fa-certificate"></i>Certifiante</li>
				</ul>
				<a href="formationCentre-categorieFormation-single.php" class="col-sm-3 lienInfoFormationSingle">En savoir plus</a>
				<ul class="col-sm-8">
					<li><i class="fa fa-eur"></i>Prix xxxx.xx</li>
					<li><i class="fa fa-calendar"></i>Prochaines dates</li>
					<li><i class="fa fa-file-pdf-o"></i>PDF</li>
				</ul>
				<a href="formationCentre-categorieFormation-single.php" class="col-sm-3 lienInscriptionFormationSingle">S'inscrire à la formation</a>
			</li>
		</ul>
	</section>
</div>

<?php include 'footer.php';