<?php include("header-admin.php"); ?>

	<?php $page_id = $_GET['page_id']; ?>

	<h1>Administration #TIM Matane</h1>	
	<h2>Page Modifiée : <?php echo $_POST["titre"] ;?></h2>

	<?php

		include('connectionbdd.php');
		
		$liste_de_filtres = array(
		'titre' => FILTER_SANITIZE_FULL_SPECIAL_CHARS,
		'resume' => FILTER_SANITIZE_FULL_SPECIAL_CHARS
		);
		
		$data_filtre = filter_input_array(INPUT_POST,$liste_de_filtres);
		
		$image = "";
		if(isset($_FILES["fileToUpload"]) && $_FILES["fileToUpload"] != "" && $_FILES["fileToUpload"] != null && $_FILES["fileToUpload"]["size"] != 0){
			include('test_upload.php');
			echo("fgfgvdhgvfdgh");
			uploadImage($_FILES["fileToUpload"]);
			$image = "/upload/".$_FILES["fileToUpload"]["name"];
		}
		
		$sql = "UPDATE page 
			   	SET titre =:titre, resume =:resume, image =:image
				WHERE page_id =$page_id;";
				$requete =$pdo->prepare($sql);
				$requete->bindParam(':titre', $data_filtre['titre'], PDO::PARAM_STR);
				$requete->bindParam(':resume', $data_filtre['resume'], PDO::PARAM_STR);
				$requete->bindParam(':image', $image ,PDO::PARAM_STR);
				$requete->execute();



















		// include('connectionbdd.php');
		// include('test_upload.php');

		// include('test_upload.php');
		// $titre = $_POST['titre'];
		// $resume = $_POST['resume'];
		// $image = "/upload/".$_FILES["fileToUpload"]["name"];

		// uploadImage($_FILES["fileToUpload"]);

		
		// $sql = "UPDATE page 
		//   		SET titre ='$titre', resume ='$resume', image ='$image'
		//   		WHERE page_id =$page_id;";
		// $pdo->exec($sql);
	?>
	<a href="gestion-page.php"><button>Retour</button></a>
<?php include("footer-admin.php"); ?>