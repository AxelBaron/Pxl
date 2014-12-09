<?php include("header-admin.php"); ?>

	<?php $actu_id = $_GET['actu_id']; ?>

	<h1>Administration #TIM Matane</h1>	
	<h2>Actualité Modifiée : <?php echo $_POST["titre"] ;?></h2>

	<?php 

		include('connectionbdd.php');
		include('test_upload.php');

		$liste_de_filtres = array(
			'titre' => FILTER_SANITIZE_FULL_SPECIAL_CHARS,
			'auteur' => FILTER_SANITIZE_FULL_SPECIAL_CHARS,
			'date' => FILTER_SANITIZE_ENCODED,
			'contenu' => FILTER_SANITIZE_FULL_SPECIAL_CHARS,	
		);

		$data_filtre = filter_input_array(INPUT_POST,$liste_de_filtres);

		
		if(isset($_FILES["fileToUpload"]) && $_FILES["fileToUpload"] != "" && $_FILES["fileToUpload"] != null && $_FILES["fileToUpload"]["size"] != 0){
			uploadImage($_FILES["fileToUpload"]);
			$image = "/upload/".$_FILES["fileToUpload"]["name"];
			$sql = "UPDATE actualite 
			SET titre =:titre,auteur=:auteur,contenu=:contenu,date=:date,image=:image
			WHERE actu_id=$actu_id";
			$requete = $pdo->prepare($sql);
			$requete->bindParam(':titre', $data_filtre['titre'], PDO::PARAM_STR);
			$requete->bindParam(':auteur', $data_filtre['auteur'], PDO::PARAM_STR);
			$requete->bindParam(':date', $data_filtre['date'], PDO::PARAM_STR);
			$requete->bindParam(':contenu', $data_filtre['contenu'], PDO::PARAM_STR);
			$requete->bindParam(':image', $image ,PDO::PARAM_STR);
			$requete->execute();	

		}else{
			
			$sql = "UPDATE actualite 
			SET titre=:titre,auteur=:auteur,contenu=:contenu,date=:date
			WHERE actu_id=$actu_id";
			$requete = $pdo->prepare($sql);
			$requete->bindParam(':titre', $data_filtre['titre'], PDO::PARAM_STR);
			$requete->bindParam(':auteur', $data_filtre['auteur'], PDO::PARAM_STR);
			$requete->bindParam(':date', $data_filtre['date'], PDO::PARAM_STR);
			$requete->bindParam(':contenu', $data_filtre['contenu'], PDO::PARAM_STR);
			$requete->execute();	
		}
	?>
	<a href="gestion-actualite.php"><button>Retour</button></a>
<?php include("footer-admin.php"); ?>
