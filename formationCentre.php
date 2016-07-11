<?php include 'header.php' ?>

<div class="container">
	<section class="titreCentre">
		<h1>Toutes nos formations en centre</h1>
	</section>
	<ul class="filtreFormation">
		<li><i class="fa fa-circle-o"></i>Toutes les formations</li>
		<li><i class="fa fa-circle-o"></i>IT & Service Management</li>
		<li><i class="fa fa-circle-o"></i>Gouvernances des SI</li>
		<li><i class="fa fa-circle-o"></i>Gestion de projet</li>
		<li><i class="fa fa-circle-o"></i>Cours Microsoft</li>
		<li><i class="fa fa-circle-o"></i>Formations en langues</li>
	</ul>
	<section class="listeFormation">
		<ul id="listeFormation">
			<li class="lol"><?php include 'categorieFormationPage/IT&SM/itil.php' ?>
			</li>
			<li class="lol"><?php include 'categorieFormationPage/IT&SM/business.php' ?>
			</li>
			<li class="lol"><?php include 'categorieFormationPage/IT&SM/ibm.php' ?>
			</li>
			<li class="lol"><?php include 'categorieFormationPage/IT&SM/cisco.php' ?>
			</li>
			<li class="lol"><?php include 'categorieFormationPage/IT&SM/vmware.php' ?>
			</li>
			<li class="lol"><?php include 'categorieFormationPage/GdSI/cobit5.php' ?>
			</li>
			<li class="lol"><?php include 'categorieFormationPage/GdSI/cmmi.php' ?>
			</li>
			<li class="lol"><?php include 'categorieFormationPage/GdSI/leanSix.php' ?>
			</li>
			<li class="lol"><?php include 'categorieFormationPage/GdSI/togaf.php' ?>
			</li>
			<li class="lol"><?php include 'categorieFormationPage/GdSI/citrix.php' ?>
			</li>
			<li class="lol"><?php include 'categorieFormationPage/GdP/prince2.php' ?>
			</li>
			<li class="lol"><?php include 'categorieFormationPage/GdP/agile.php' ?>
			</li>
			<li class="lol"><?php include 'categorieFormationPage/GdP/pmi-pmp.php' ?>
			</li>
			<li class="lol"><?php include 'categorieFormationPage/microsoft.php' ?>
			</li>
			<li class="lol"><?php include 'categorieFormationPage/formationLangue.php' ?>
			</li>
		</ul>
	</section>
</div>

<?php include 'footer.php';