<?php include("header-admin.php"); ?>
	
	<h1>Administration #TIM Matane</h1>	
	<h2>Portfolio Ajoutée</h2>

	<?php 

		include('connectionbdd.php');

		$etudiant = $_POST['etudiant'];
		$lien = $_POST['lien'];
		$image = $_POST['image'];
		$annee = $_POST['annee'];

		$sql = "INSERT INTO portfolio(etudiant,lien,image,annees) VALUES('$etudiant','$lien','$image','$annee')";
		
		$pdo->exec($sql);
	?>
	<a href="gestion-portfolio.php"><button>Retour</button></a>
<?php include("footer-admin.php"); ?>