<!DOCTYPE html>
<html>
	<head>
		<title>Formulaire d'ajout d' Administrateur</title>
		<meta charset="UTF-8"/>
	</head>
	

	<body>
	
	<h1>Administration #TIM Matane</h1>	
	<h2>Administrateur Ajoutée</h2>

	<?php 

		include('connectionbdd.php');

		$usager = $_POST['usager'];
		$mdp = $_POST['mdp'];
		$nom = $_POST['nom'];
		$prenom = $_POST['prenom'];
		$courriel = $_POST['courriel'];

		$sql = "INSERT INTO admin(usager,mdp,nom,prenom,courriel) VALUES('$usager','$mdp','$nom','$prenom','$courriel')";

		$pdo->exec($sql);
	?>
	
	</body>
</html>