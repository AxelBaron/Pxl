<!DOCTYPE html>
<html>
	<head>
		<title>Formulaire d'ajout de Portfolio</title>
		<meta charset="UTF-8"/>
	</head>
	

	<body>
	
	<h1>Administration #TIM Matane</h1>	
	<h2>Portfolio Ajoutée</h2>

	<?php 

		include('connectionbdd.php');

		$etudiant = $_POST['etudiant'];
		$lien = $_POST['lien'];
		$image = $_POST['image'];
		$annee = $_POST['annee'];

		$sql = "INSERT INTO portfolio(etudiant,lien,image,annees) VALUES('$etudiant','$lien','$image','$annee')";
		
		echo $sql;
		$pdo->exec($sql);
	?>
	
	</body>
</html>