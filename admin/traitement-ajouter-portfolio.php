<?php include("header-admin.php"); ?>
	
	<h1>Administration #TIM Matane</h1>	
	<h2>Portfolio Ajoutée</h2>

	<?php 

		include('connectionbdd.php');
		
		$liste_de_filtres = array(
		'etudiant' => FILTER_SANITIZE_FULL_SPECIAL_CHARS,
		'lien' => FILTER_SANITIZE_URL,
		'annee' => FILTER_SANITIZE_NUMBER_INT
		);
		

		$data_filtre = filter_input_array(INPUT_POST,$liste_de_filtres);
		print_r($data_filtre);
		$image = "";
		if(isset($_FILES["fileToUpload"]) && $_FILES["fileToUpload"] != "" && $_FILES["fileToUpload"] != null && $_FILES["fileToUpload"]["size"] != 0){
			include('test_upload.php');
			echo("fgfgvdhgvfdgh");
			uploadImage($_FILES["fileToUpload"]);
			$image = "/upload/".$_FILES["fileToUpload"]["name"];
		}

		$sql = "INSERT INTO portfolio(etudiant,lien,annees,image) VALUES(:etudiant,:lien,:annee,:image)";
		$requete =$pdo->prepare($sql);
		$requete->bindParam(':etudiant', $data_filtre['etudiant'], PDO::PARAM_STR);
		$requete->bindParam(':lien', $data_filtre['lien'], PDO::PARAM_STR);
		$requete->bindParam(':annee', $data_filtre['annee'], PDO::PARAM_STR);
		$requete->bindParam(':image', $image ,PDO::PARAM_STR);
		echo $sql;
		$requete->execute();	

	?>
	<a href="gestion-portfolio.php"><button>Retour</button></a>
<?php include("footer-admin.php"); ?>