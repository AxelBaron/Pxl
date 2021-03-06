<?php include("header-admin.php"); ?>

	<?php $admin_id = $_GET['admin_id']; ?>

	<h1>Administration #TIM Matane</h1>	
	<h2>Actualité modifié : <?php echo $_POST["usager"] ;?></h2>

	<?php 

		include('connectionbdd.php');

		$liste_de_filtres = array(
		'usager' => FILTER_SANITIZE_STRING,
		'mdp' => FILTER_SANITIZE_STRING,
		'nom' => FILTER_SANITIZE_STRING,
		'prenom' => FILTER_SANITIZE_STRING,	
		'courriel' => FILTER_SANITIZE_EMAIL,	
		);
		
		$data_filtre = filter_input_array(INPUT_POST,$liste_de_filtres);
		
		$sql = "UPDATE admin 
		  SET usager =:usager,mdp=:mdp,nom=:nom,prenom=:prenom,courriel=:courriel
		  WHERE admin_id=$admin_id";
		$requete = $pdo->prepare($sql);
		$requete->bindParam(':usager', $data_filtre['usager'], PDO::PARAM_STR);
		$requete->bindParam(':mdp', $data_filtre['mdp'], PDO::PARAM_STR);
		$requete->bindParam(':nom', $data_filtre['nom'], PDO::PARAM_STR);
		$requete->bindParam(':prenom', $data_filtre['prenom'] ,PDO::PARAM_STR);
		$requete->bindParam(':courriel', $data_filtre['courriel'], PDO::PARAM_STR);
		$requete->execute();

	?>
	<a href="gestion-admin.php"><button>Retour</button></a>
<?php include("footer-admin.php"); ?>
