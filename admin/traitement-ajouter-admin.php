<?php include("header-admin.php"); ?>	
	
	<h1>Administration #TIM Matane</h1>	
	<h2>Administrateur Ajoutée</h2>

	<?php 

		include('connectionbdd.php');

		$usager = $_POST['usager'];
		$mdp = $_POST['mdp'];
		$nom = $_POST['nom'];
		$prenom = $_POST['prenom'];
		$courriel = $_POST['courriel'];

		$sql = "INSERT INTO admin(usager,mdp,nom,prenom,courriel) VALUES('$usager','$mdp','$nom,'$prenom',$courriel')";
		
		echo $sql;
		$pdo->exec($sql);
	?>
<?php include("footer-admin.php"); ?>