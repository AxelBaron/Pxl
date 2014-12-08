<?php include("header-admin.php"); ?>

	<?php $portfolio_id = $_GET['portfolio_id']; ?>

	<h1>Administration #TIM Matane</h1>	
	<h2>Portfolio Modifié : <?php echo $_POST["etudiant"] ;?></h2>

	<?php 

		include('connectionbdd.php');
		include('test_upload.php');

		$liste_de_filtres = array(
		'etudiant' => FILTER_SANITIZE_STRING,
		'lien' => FILTER_SANITIZE_URL,
		'annee' => FILTER_SANITIZE_NUMBER_INT
		);

		$data_filtre = filter_input_array(INPUT_POST,$liste_de_filtres);
		
		if(isset($_FILES["fileToUpload"]) && $_FILES["fileToUpload"] != "" && $_FILES["fileToUpload"] != null && $_FILES["fileToUpload"]["size"] != 0){
			echo("");
			uploadImage($_FILES["fileToUpload"]);
			$image = "/upload/".$_FILES["fileToUpload"]["name"];
			$sql = "UPDATE portfolio 
			SET etudiant =:etudiant,lien=:lien,annees=:annee,image=:image
			WHERE portfolio_id=$portfolio_id";
			$requete =$pdo->prepare($sql);
			$requete->bindParam(':etudiant', $data_filtre['etudiant'], PDO::PARAM_STR);
			$requete->bindParam(':lien', $data_filtre['lien'], PDO::PARAM_STR);
			$requete->bindParam(':annee', $data_filtre['annee'], PDO::PARAM_STR);
			$requete->bindParam(':image', $image ,PDO::PARAM_STR);
		$requete->execute();		

		}else{
			
			$sql = "UPDATE portfolio 
			SET etudiant =:etudiant,lien=:lien,annees=:annee
			WHERE portfolio_id=$portfolio_id";
			$requete =$pdo->prepare($sql);
			$requete->bindParam(':etudiant', $data_filtre['etudiant'], PDO::PARAM_STR);
			$requete->bindParam(':lien', $data_filtre['lien'], PDO::PARAM_STR);
			$requete->bindParam(':annee', $data_filtre['annee'], PDO::PARAM_STR);
			$requete->execute();

		}
	?>
	<a href="gestion-portfolio.php"><button>Retour</button></a>
<?php include("footer-admin.php"); ?>
