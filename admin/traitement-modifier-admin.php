<?php include("header-admin.php"); ?>

	<?php $admin_id = $_GET['admin_id']; ?>

	<h1>Administration #TIM Matane</h1>	
	<h2>Actualité Modifiée : <?php echo $_POST["usager"] ;?></h2>

	<?php 

		include('connectionbdd.php');


		$usager = $_POST['usager'];
		$mdp = $_POST['mdp'];
		$nom = $_POST['nom'];
		$prenom = $_POST['prenom'];
		$courriel = $_POST['courriel'];
		
		$sql = "UPDATE admin 
		  SET usager ='$usager',mdp='$mdp',nom='$nom',prenom='$prenom',courriel='$courriel'
		  WHERE admin_id=$admin_id";
		$pdo->exec($sql);
	?>
	<a href="gestion-admin.php"><button>Retour</button></a>
<?php include("footer-admin.php"); ?>