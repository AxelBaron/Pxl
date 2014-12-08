<?php include("header-admin.php"); ?>	
	<h1>Administration #TIM Matane</h1>	
	<h2>Actualitée Ajoutée</h2>

	<?php 

		include('connectionbdd.php');

		$liste_de_filtres = array(
		'titre' => FILTER_SANITIZE_SRING,
		'auteur' => FILTER_SANITIZE_SRING,
		'date' => FILTER_SANITIZE_ENCODED,
		'contenu' => FILTER_SANITIZE_SRING,	
		);

	
		$data_filtre = filter_input_array(INPUT_POST,$liste_de_filtres);

		$image = "";
		if(isset($_FILES["fileToUpload"]) && $_FILES["fileToUpload"] != "" && $_FILES["fileToUpload"] != null && $_FILES["fileToUpload"]["size"] != 0){
			include('test_upload.php');
			uploadImage($_FILES["fileToUpload"]);
			$image = "/upload/".$_FILES["fileToUpload"]["name"];
		}

		$sql = "INSERT INTO actualite(titre,auteur,date,image,contenu) VALUES(:titre,:auteur,:date,:image,:contenu)";
		$requete = $pdo->prepare($sql);
		$requete->bindParam(':titre', $data_filtre['titre'], PDO::PARAM_STR);
		$requete->bindParam(':auteur', $data_filtre['auteur'], PDO::PARAM_STR);
		$requete->bindParam(':date', $data_filtre['date'], PDO::PARAM_STR);
		$requete->bindParam(':image', $image ,PDO::PARAM_STR);
		$requete->bindParam(':contenu', $data_filtre['contenu'], PDO::PARAM_STR);
		$requete->execute();	
		
	?>
	<a href="gestion-actualite.php"><button>Retour</button></a>
<?php include("footer-admin.php"); ?>
